<?php

namespace frontend\controllers;
use frontend\models\Book;


class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionListbycat($id){
    		$data =new Book();
    		$product = $data->getBookByCat($id);
    		$pages = $data->getPagerBook($id);
            $id = $id;
    		return $this->render('listBook',['product' => $product,"pages"=>$pages, "id" => $id]);
    }

    public function actionDetail($id){
    	$data = new Book(); 
    	$data = $data->getBookById($id);
      
    	
    	 return $this->render('detail',['data'=>$data]);
    }
}
