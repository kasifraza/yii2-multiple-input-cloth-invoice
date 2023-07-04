<?php



use unclead\multipleinput\MultipleInput;





use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); 
?>

<div class='container' style='margin-top:10%'>
    <?php
echo $form->field($model, 'products')->widget(MultipleInput::className(), [
    'max' => 10,
    'cloneButton' => true,
    'columns' => [
        [
            'name'  => 'cloth',
            'title' => 'Cloth Name',
            'defaultValue' => 'Ahsan Ahmed',
            'enableError' => true,
            'options' => [
                'type' => 'string',
                'class' => 'input-priority',
            ]
            ],
        [
            'name'  => 'clothclothType',
            'type'  => 'dropDownList',
            'title' => 'Cloths Type',
            'defaultValue' => 1,
            'items' => [
                1 => 'id: 1, price: $19.99, title: product1',
                2 => 'id: 2, price: $29.99, title: product2',
                3 => 'id: 3, price: $39.99, title: product3',
                4 => 'id: 4, price: $49.99, title: product4',
                5 => 'id: 5, price: $59.99, title: product5',
            ],
        ],
        [
            'name'  => 'variety',
            'title' => 'Variety',
            'defaultValue' => 1,
            'enableError' => true,
            'options' => [
                'type' => 'string',
                'class' => 'input-priority',
            ]
            ],
        [
            'name'  => 'size',
            'title' => 'Size',
            'defaultValue' => 1,
            'enableError' => true,
            'options' => [
                'type' => 'string',
                'class' => 'input-priority',
            ]
        ]
    ]
])->label(false);





?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
</div>
<?php
ActiveForm::end(); 

?>
</div>