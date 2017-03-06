<?php 
use  yii\helpers\Html;
use  yii\helpers\Url;
use yii\widgets\ActiveForm; 

$this->title = 'Giỏ Hàng';
 ?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo Yii::$app->homeUrl; ?>">Home</a></li>
				  <li class="active"><?= $this->title ?></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					
					<tbody>
					<?php if (!$cartstore) {
						# code...
						$cartstore = [];
					} ?>
					<?php foreach ($cartstore as $value) {
						# code...
					 ?>
						<tr>

							<td class="cart_product">
								<a href=""><img src="<?php echo $value->image; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="<?php echo Yii::$app->homeUrl."?r=book%2Fdetail&id=".$value["id"]; ?>"><?= $value->name ?></a></h4>
								<p>Web ID:<?= $value->id ?></p>
							</td>
							<td class="cart_price">
								<p><?= $value->price ?> Đ</p>
							</td>
							<td class="cart_quantity">
								<!--<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>-->
								<?php 
								$form = ActiveForm::begin(

									[	
										'action' => Url::to(['/cart/update-cart']),	
										'options' => [
											'class' => 'form-inline'
										]
									]
									);

								 ?>
								 <input type="hidden" name="id" value="<?php echo $value->id; ?>">
								<input type="text" name="qtt"  value="<?php echo $value->qtt; ?>" size="4" class = "form-control" />
								<input type="submit" name="update" value="Update" class="btn btn-sm btn-success " />
			

								 <?php ActiveForm::end(); ?>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php $total = $value->qtt*$value->price;  ?><?php echo $total; ?> Đ</p>
							</td>
							<td class="cart_delete">
							<?php echo  Html::a(
								'',
								['/cart/remove','slug'=>$value->slug],
								['class' => 'cart_quantity_delete fa fa-times']
							); ?>
							<!--	<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a> -->
							</td>
						</tr>

						<?php } ?>
						<tr>
								<td colspan="2" align="right">Số lượng</td>
							<td ><?php echo $totalItem; ?> </td>
							<td colspan="2" align="right" >Tổng tiền</td>
							<td ><?php echo number_format($cost,0,'',',') ; ?> Đ</td>
							
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<?php echo Html::a('Tiếp tục mua hàng',['/site'],['class' => 'btn btn-success']); ?>
					<?php echo Html::a('Đặt Hàng',['/checkout/index'],['class' => 'btn btn-info']); ?>
					<?php echo Html::a('Xóa giỏ hàng',['/cart/clear'],['class' => 'btn btn-danger']); ?>


				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
