<?php

namespace app\models;

use yii\db\ActiveRecord;

class InvoiceItem extends ActiveRecord
{
    public $clothType ;
    public static function tableName()
    {
        return 'invoice_item';
    }
    public function rules()
    {
        return [
            [[ 'invoice_id','cloth', 'size', 'variety','uniqid'], 'required'],
            [['cloth', 'size', 'variety'], 'each', 'rule' => ['string']],
        ];
    }
}
