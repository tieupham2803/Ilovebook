<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\common\Cart;
use frontend\models\Checkout;


/**
* 
*/
class CheckoutController extends Controller
{
	
	function actionIndex()
	{
		
		$model = new Checkout();

		$cart = new Cart();
		$cartstore = $cart->cartstore;
		$cost = $cart->getCost;

		if ($model->load(Yii::$app->request->post())) {

			if ($cus = $model->customer()) {var_dump($cus); die;
				
				if ($order = $model->order($cus->id)) {
			// 	
				$model->order_item($order->id);
			}
			}
		}
	
	return $this->render('index',[

			'model' => $model,
			'cartstore' => $cartstore,
			'cost' => $cost

		]

		);
}}

 ?>