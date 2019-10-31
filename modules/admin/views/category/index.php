<?php
use yii\helpers\Html;

$this->title = 'Category';
?>

<div class="panel panel-default">
	<div class="panel-heading">
<!--	<span style="color:#fff;float:right;margin-top: 18px;padding-left:15px"><?= Html::a('Import category Excel', ['product/upload'], ['class'=>'btn btn-warning']) ?></span>-->
<span style="color:#fff;float:right;margin-top: 18px;"><?= Html::a('Add Category', ['	category'], ['class'=>'btn btn-warning']) ?></span>
		
		<h2 class="text-center">Category</h2>
	</div>	
	<?php if(Yii::$app->session->hasFlash('success')):?>
	<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::$app->session->getFlash('success');?>
</div>
	
	<?php endif; ?>
	<div class="panel-body">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Category_id</th>
      <th scope="col">Category Name</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(count($model)) :
foreach ($model as $row) :
?> 
    <tr class="table-active">
      <th scope="row"><?=$row->cat_id;?></th>
      <td><?=$row->category_name;?></td>
	  <td><span>

	  <?= Html::a('update', ['update','id'=>$row->cat_id], ['class'=>'btn btn-success']) ?> 
	   <?= Html::a('delete', ['delete','id'=>$row->cat_id], ['class'=>'btn btn-danger']) ?> 
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
  	



