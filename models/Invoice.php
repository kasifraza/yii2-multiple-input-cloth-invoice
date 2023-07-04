<?php

namespace app\models;

use yii\db\ActiveRecord;

class Invoice extends ActiveRecord
{
    public static function tableName()
    {
        return 'invoice';
    }
    public function rules()
    {
        return [
            [['customer_name', 'customer_address'], 'required'],
        ];
    }
}
