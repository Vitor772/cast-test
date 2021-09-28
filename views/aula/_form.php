<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Descricao_do_assunto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data_de_início')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data_de_termino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Categoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
