<?php 
namespace frontend\common;
use Yii;
use Yii\web\session;





/*
xu ly gio hang
gom cac fuong thuc
* 
*/
class Cart
{ /* 
Phuong thuc  them gio hang co cac tham so sau"
@data = se lay theo id hoac slug
@auntity so luong cua moi lan them vao gio hang
	
*/
/* 
Khoi tao session
*/
	public $cartstore;
	public $getCost = 0;

	public function __construct(){
		$this->cartstore = Yii::$app->session['cart']; 
		$this->getCost = $this->getCost();

	}
	public function add($data,$quantity=1)
	{	
		if (isset($this->cartstore[$data->id])) {
			# code...
			$this->cartstore[$data->id]->qtt = $this->cartstore[$data->id]->qtt +1; 
			Yii::$app->session['cart'] = $this->cartstore;
		}
		else {
			
		
		# code...
		$this->cartstore[$data->id] = $data;
		$this->cartstore[$data->id]->qtt = $quantity;
		Yii::$app->session['cart'] = $this->cartstore;
		}

	}
	public function remove($data){

		unset($this->cartstore[$data->id]);
		Yii::$app->session['cart'] = $this->cartstore; 
	}

	public function update($id,$quantity){

			 $this->cartstore[$id]->qtt=$quantity;
				Yii::$app->session['cart'] = $this->cartstore; 

	}

	public function getCost(){

			if ($this->cartstore) {
				# code...\\
				foreach ($this->cartstore as $value) {
					# code...
					$this->getCost += $value->qtt*$value->price;

				}
				return $this->getCost;
			}

	}
	public function getTotoItem(){
			$total = 0;
			if ($this->cartstore) {
				# code...\\
				foreach ($this->cartstore as $value) {
					# code...
					$total += $value->qtt;

				}
				
			}
			return $total;
	}

}

 ?>