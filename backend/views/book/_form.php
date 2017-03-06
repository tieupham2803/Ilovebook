<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

use backend\models\book;
use backend\models\bookSearch;
use yii\web\Controller;

/* @var $this yii\web\View */
/* @var $model backend\models\Book */
/* @var $form yii\widgets\ActiveForm */
$cat = new Category;
?>


<div class="book-form">

    <?php $form = ActiveForm::begin(['options'=>['endtype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate')->dropDownList(
        
            $cat->getParent(),
        ['prompt'=>'chon danh muc']
    ) ?>

    <div class="row">
        <div class="col-md-3">
                <?= $form->field($model, 'image')->hiddenInput(['id' => 'image']) ?>
                <img src="<?php echo $model->image; ?>" id="show-img">
                <a href="#" id="select-img" title="Chọn hình ảnh" class="btn btn-info btn-sm">Chọn ảnh</a>
                 <a href="#" id="remove-img" title="Xóa hình ảnh" class="btn btn-danger btn-sm">Xóa hình ảnh</a>

        </div>
        <div class="col-md-9">
            
         
        </div>
    </div>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'content')->textarea(['id' => 'content']) ?>
    <?= $form->field($model, 'desc')->textarea(['id' => 'desc']) ?>

   
    
    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publish_at')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
