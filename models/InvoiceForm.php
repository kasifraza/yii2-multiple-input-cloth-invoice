<?php

namespace app\models;

use yii\base\Model;

class InvoiceForm extends Model
{
    
    public $customer_name;
    public $customer_address;
    public $cloth = [];
    public $size = [];
    public $variety = [];

    public function rules()
    {
        return [
            [['customer_name', 'customer_address', 'cloth', 'size', 'variety'], 'required'],
            [['cloth', 'size', 'variety'], 'each', 'rule' => ['string']],
        ];
    }
}
?>