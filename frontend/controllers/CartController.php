<?php 
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use frontend\common\Cart;
use frontend\models\Book;


/** class quan ly gio hang*/

/**
* 
*/
class CartController extends Controller
{
	
	function actionIndex()
	 {  
	
		$cart = new Cart();
		$cartstore = $cart->cartstore;
		$cost = $cart->getCost;
		$totalItem = $cart->getTotoItem();
	
		
		# code...
		return $this->render('index',[
			'cartstore' => $cartstore ,
			'cost' => $cost,
			'totalItem' => $totalItem
			]);
	}
	public function actionAddCart($slug){
		$cart = new Cart();

		$model = Book::findOne(['slug' => $slug]);
		$cart = $cart->add($model);
		//var_dump(Yii::$app->session['cart']); 
		return $this->redirect(['/cart']);
	}
	public function actionRemove($slug){
		$cart = new Cart();

		$model = Book::findOne(['slug' => $slug]);
		$cart = $cart->remove($model);
		//var_dump(Yii::$app->session['cart']); 
		 return $this->redirect(['/cart']);
	}

		
	public function actionUpdateCart(){
		$cart = new Cart();
		if(Yii::$app->request->post()){
		$id = $_POST['id'];
		$qtt = $_POST['qtt'];
		$cart->update($id,$qtt);
		}
		//var_dump(Yii::$app->session['cart']); 
		 return $this->redirect(['/cart']);
	}
}

 ?>