<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\InvoiceForm;
use app\models\InvoiceItem;
use app\models\Invoice;
use kartik\mpdf\Pdf;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


        /**
         * Data Action
         * --------------------------------
         * 
         * 
         * */

         public function actionData(){
            return array(['djdsj' => 'djhsgjs']);
         }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionCreate()
    {
       
        $invoiceItem = new InvoiceItem();
        $invoice = new Invoice();
    
        if ($invoiceItem->load(Yii::$app->request->post())) {
            $invoice->customer_name = 'Kasif';
            $invoice->customer_address = 'Noida';
    
            if ($invoice->save()) {
                $randomString = uniqid();
                $invoiceItemsData = [];
                foreach (Yii::$app->request->post('InvoiceItem')['products']  as $product) {
                    $item = new InvoiceItem();
                    $item->cloth = $product['cloth'];
                    $item->variety = $product['variety'];
                    $item->size = $product['size'];
                    $item->invoice_id = $invoice->id;
                    $item->uniqid = $randomString;
                    $invoiceItemsData[] = $item->attributes;
                }
                Yii::$app->db->createCommand()
                    ->batchInsert(InvoiceItem::tableName(), array_keys($invoiceItemsData[0]), $invoiceItemsData)
                    ->execute();
                    return $this->redirect(['generate-invoice', 'id' => $randomString]);
            }
        }
    
        return $this->render('create', [
            'model' => $invoiceItem,
        ]);
    }
    
    public function actionGenerateInvoice($id)
    {
        $invoiceItemData = InvoiceItem::findOne(['uniqid' => $id]);
        if($invoiceItemData){
            $invoiceUser = Invoice::findOne(['id' => $invoiceItemData->invoice_id]);
            $invoiceAllItem = InvoiceItem::findAll(['uniqid' => $invoiceItemData->uniqid]);
            if($invoiceUser){
               
                $content = $this->renderPartial('invoice', [
                    'model' => $invoiceAllItem,
                    'customer' => $invoiceUser
                ]);
                
                $pdf = new Pdf([
                    'mode' => Pdf::MODE_UTF8,
                    'format' => Pdf::FORMAT_A4,
                    'orientation' => Pdf::ORIENT_PORTRAIT,
                    'content' => $content,
                    'options' => [
                        'title' => 'Invoice',
                        'defaultfooterline' => false,
                        // Add more options if needed
                    ],
                ]);
        
                return $pdf->render();
            }
            die('user-not');

        }
        die('user-item-not-found');
        
    }
}
