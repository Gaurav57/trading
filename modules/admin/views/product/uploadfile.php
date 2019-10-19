<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'ImportFile';
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'importFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>