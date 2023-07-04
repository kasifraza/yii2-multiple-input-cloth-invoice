<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionCreate()
    {
        $request = Yii::$app->getRequest();
        $body = $request->getRawBody();
        $params = json_decode($body, true);
    
        $user = new User();
        $user->name = $params['name'];
        $user->email = $params['email'];
        $user->password = Yii::$app->security->generatePasswordHash($params['password']);
    
        if ($user->save()) {
            return ['status' => 'success', 'message' => 'User created successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Failed to create user', 'errors' => $user->errors];
        }
    }
    
    
}
