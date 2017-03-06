<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn',
            // 'header'=>'STT',
            // 'headerOptions' =>[
            //     'style' => 'width:15px; text-align:center'
            // ],
            // 'contentOptions' =>[  'style' => 'width:15px; text-align:center'
            // ],
            // ],
            [
             'class' => 'yii\grid\CheckboxColumn'
            ], 

            [
            'attribute' => 'id',
            'label' => 'ID', 
            'headerOptions' =>[
                'style' => 'width:150px; text-align:center'
            ],
            'contentOptions' =>[  'style' => 'width:150px; text-align:center'
            ],
            ],
            'name',
            'slug',
           [
           'attribute' => 'parent',
            'label' => 'Danh Muc cha', 
            'content' => function($model){
                if($model->parent==0){
                    return 'Root ';

                } else {
                    $parent = Category::find()->where(['id'=>$model->parent])->one();
                    if($parent){
                         return  $parent->name;
                    } else{
                        return 'khong ro';
                    }
                   
                }
            },
            'headerOptions' =>[
                'style' => 'width:150px; text-align:center'
            ],
            'contentOptions' =>[  'style' => 'width:150px; text-align:center'
            ],
           ],
            
            [
            'attribute' => 'status',
            'label' => 'Trang thai', 
            'content' => function($model){
                if($model->status==0){
                    return '<span class="label label-danger">khong kich hoat </span>';

                } else {
                    return  '<span class="label label-success"> kich hoat </span>';
                }
            },
            'headerOptions' =>[
                'style' => 'width:150px; text-align:center'
            ],
            'contentOptions' =>[  'style' => 'width:150px; text-align:center'
            ],
            ],
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
