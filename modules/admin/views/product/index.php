<?php
use yii\helpers\Html;

$this->title = 'Product';
?>

<div class="panel panel-default">
	<div class="panel-heading">
	
	<span style="color:#fff;float:right;margin-top: 18px;padding-left:15px"><?= Html::a('Import Product Excel', ['upload'], ['class'=>'btn btn-warning']) ?></span>
<span style="color:#fff;float:right;margin-top: 18px;"><?= Html::a('Add Product', ['	product'], ['class'=>'btn btn-warning']) ?></span>

		
		<h2 class="text-center">PRODUCT</h2>
	</div>
	<?php if(Yii::$app->session->hasFlash('success')):?>
	
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::$app->session->getFlash('success');?>
	<?php endif; ?>
	<div class="panel-body">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product_id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Code	</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(count($model)) :
foreach ($model as $row) :
?> 
    <tr class="table-active">
      <th scope="row"><?=$row->product_id;?></th>
      <td><?=$row->name_product;?></td>
      <td><?=$row->price;?></td>
      <td><?=$row->code;?></td>
	  <td><span>
	<?= Html::a('view', ['view','id'=>$row->product_id], ['class'=>'btn btn-primary']) ?> 
	  <?= Html::a('update', ['update','id'=>$row->product_id], ['class'=>'btn btn-success']) ?> 
	   <?= Html::a('delete', ['delete','id'=>$row->product_id], ['class'=>'btn btn-danger']) ?> 
	 </span></td>
    </tr>
	<?php
endforeach;
else : ?>
<tr>
<td colspan="6">No Record found</td>
</tr>
<?php
endif;
?>	
  </tbody>
</table>
	
	
	
	</div>
</div>
  	



