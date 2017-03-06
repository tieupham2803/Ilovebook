<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Book;

class featuresitemWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
       
        }

    public function run()
    {
    	$product = new Book();
    	$product = $product->getDataProduct();
return $this->render('featuresitemWidget',['data'=>$product]);       }
}
?>