<?php

namespace frontend\controllers;
use frontend\models\Book;


class ShoppingController extends \yii\web\Controller
{
     
    public function actionAddCart($id){
    	$productInfo = new Book();
    	$productInfo = $productInfo->getBookById($id);
    	return $this->renderAjax('cart');
    }

}
