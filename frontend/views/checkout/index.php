<?php 
$this->title = "Thông tin đặt hàng";
use yii\widgets\ActiveForm;
use  yii\helpers\Html;
use  yii\helpers\Url;
$model->amount = $cost;
 ?>
<div class="container">
 <?php if($cartstore) : $n = 1;?>
  <div>
 	<?php $form = ActiveForm::begin(); ?>
<div class="col-md-5">
	
	<h3>Thông tin khách hàng</h3>
	<?= $form->field($model, 'full_name')->textInput(['placeholder' => 'Nguyễn Văn A']) ?>
	<?= $form->field($model, 'email')->textInput(['placeholder' => 'tieupham@gmail.com']) ?>
	<?= $form->field($model, 'address')->textInput(['placeholder' => '
62 Văn Cao, Liễu Giai, Ba Đình, Hà Nội']) ?>
	<?= $form->field($model, 'phone')->textInput(['placeholder' => '099999999']) ?>
	<?= $form->field($model, 'shipping_method')->textInput(['placeholder' => 'shipping method...']) ?>
	<?= $form->field($model, 'payment_method')->textInput(['placeholder' => 'payment method...']) ?>
	<?= $form->field($model, 'order_note')->textarea(['placeholder' => 'Ghi chú ...']) ?>
	<?= $form->field($model, 'amount')->textInput() ?>
	
<DIV class="form-group">
<button type="submit" class="btn btn-info pull-right">Đặt hàng</button> </DIV>
</div>

<?php $form = ActiveForm::end(); ?>
</div>


			<?php else: ?>
				<div class="alert alert-warning">
					
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;	</button>
					<strong>Thông Cống!</strong> Giỏ hàng đang rỗng	... <?php echo Html::a('Tiếp tục mua hàng ?',['/site'],['class' =>'btn btn-success']); ?>
				</div>
<?php endif ?>
<div class="col-md-10">
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
							<td ></td>
							<td colspan="2" align="right" >Tổng tiền</td>
							<td ><?php echo number_format($cost,0,'',',') ; ?> Đ</td>
							
						</tr>
					</tbody>
				</table>

				</div>


</div>