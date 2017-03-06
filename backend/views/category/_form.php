<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
$cat = new Category;
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?> 

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
         [  1=> 'Kich Hoat',
            0 => 'Khong Kich Hoat'
            ] ,
            [
                'prompt' => 'Chon trang thai'
            ]
    ) ?>

    <?= $form->field($model, 'parent')->dropDownList(
              $cat->getParent(),
            [
                'prompt' => 'Danh muc cha'
            ]

    ) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
