<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user'; // Replace 'user' with your actual table name
    }
    
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => self::class, 'targetAttribute' => 'email'],
        ];
    }
}
