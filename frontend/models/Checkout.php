<?php 
namespace frontend\models;
use Yii;
use yii\base\Model;
use backend\models\Order;
use backend\models\OrderItem;
use backend\models\Customer;
use frontend\common\Cart;



 class Checkout extends Model{

 	public $full_name;
 	public $email;
 	public $address;
 	public $phone;
 	public $order_note;
 	public $shipping_method;
 	public $payment_method;
 	public $amount;
 	
 	public function rules(){

 		return [
 			[['full_name', 'email' , 'phone'],'required','message'=>'{attribute} Không được rỗng'],
 			[['full_name', 'email', 'order_note', 'shipping_method', 'payment_method','address'],'string'],
 			[['phone', 'amount'], 'integer'],
 			['email', 'email'],
 		];
 	}


 	public function attributeLabels(){

 		return [
 			'full_name' => 'Họ và Tên',
 			'email' => 'Địa chỉ email',
 			'order_note' => 'Ghi chú đơn hàng',
 			'phone' => 'Số điện thoại',
 			'shipping_method' => 'Phương thức giao hàng',
 			'payment_method' => 'Phương thức thanh toán',
  		];
 	}

 	public function setPassword($password){

 		$cus = new Customer();
 		$cus->password_hash = Yii::$app->security->generatePasswordHash($password);
 	}
 	public function generateAuthKey(){

 		$cus = new Customer;
 		$cus->auth_key = Yii::$app->security->generateRandomString();
 	}

 	public function customer(){

 		if(!$this->validate()){
 			return null;
 		}
 		$cus = new Customer();

 		$cus->fullname = $this->full_name;
 		$cus->email = $this->email;
 		$cus->created_at = time();
 		$cus->updated_at = time();
 		$cus->phone = $this->phone;
 		$cus->status = 0;
 		$cus->username ='username';
 		$cus->auth_key = 'qweiuqwyeuiqy';
 		$cus->password_hash ='qweiqweiuqwyeiuqwyei';
 		//$this->setPassword('username');
 		//$this->generateAuthKey();
 		return $cus->save() ? $cus : null;
 	}
 	public function order($customer_id){
 		if ($this->validate()) {
 			return null;
 			# code...
 		}
 		$order = new Order;
 		$order->customer_id = $customer_id;
 		$order->order_note = $this->order_note;
 		$order->amount = $this->amount;
 		$order->shipping_method = $this->shipping_method;
 		$order->payment_method = $this->payment_method;
 		$order->created_at = time();
 		$order->updated_at = time();
 		return $order->save() ? $order : null;
 	}
 	public function order_item($order_id){

 		$flag = false;

 		$cart = new Cart();
 		$cartstore = $cart->cartstore;
 		$cost = $cart->getCost;
 		if (!$this->validate()) {
 			# code...
 			return null;
 		}
 		foreach ($cartstore as $item) {
 			$orderIt = new OrderItem;
 			$orderIt->order_id = $order_id;
 			$orderIt->product_id = $item->id;
 			$orderIt->price = $item->price;
 			$orderIt->quantity = $item->qtt;
 			$orderIt->return_status = 0;
 			if ($orderIt->save()) {
 				# code...
 				$flag =true;
 			}
 		} //foreach end
 		return flag;
 	}
 }