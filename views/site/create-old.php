<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>

<!-- Other form fields -->

<div class="form-group">
    <label class="control-label">Clothes</label>
    <div id="clothes-container">
        <div class="clothes-row">
            <div class="col-sm-4">
                <?= $form->field($model, 'cloth[]')->textInput(['class' => 'form-control']) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'size[]')->textInput(['class' => 'form-control']) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'variety[]')->textInput(['class' => 'form-control']) ?>
            </div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-danger remove-clothes-row">Remove</button>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="add-clothes-row">Add More</button>
</div>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<!-- Include JavaScript -->
<?php
$js = <<< JS
$(document).ready(function() {
    // Add new row for clothes
    $('#add-clothes-row').click(function() {
        var row = $('.clothes-row:first').clone();
        row.find('input').val(''); // Clear input values
        row.appendTo('#clothes-container');
    });

    // Remove a clothes row
    $(document).on('click', '.remove-clothes-row', function() {
        $(this).closest('.clothes-row').remove();
    });
});
JS;
$this->registerJs($js);
?>
