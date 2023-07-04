<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $model InvoiceForm */

$content = '';
$content .= '<hr>';
foreach ($model as $cloth) {

    $content .= 'Cloth: ' . Html::encode($cloth->cloth) . '<br>';
    $content .= 'Size: ' . Html::encode($cloth['size']) . '<br>';
    $content .= 'Variety: ' . Html::encode($cloth['variety']) . '<br><br>';
    $content .= '<hr>';
}

?>

<div class="invoice-container">
    <h1>Invoice</h1>
    <p>Customer Name: <?= Html::encode($customer->customer_name) ?></p>
    <p>Customer Address: <?= Html::encode($customer->customer_address) ?></p>

    <h2>Ordered Clothes</h2>
    <?= $content ?>
</div>
