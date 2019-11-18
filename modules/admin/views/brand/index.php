<?php
use yii\helpers\Html;

$this->title = 'Product';
?>

<div class="panel panel-default">
	<div class="panel-heading">
	
	
<span style="color:#fff;float:right;margin-right: 18px;margin-top: 18px;"><?= Html::a('Add Brand', ['brand'], ['class'=>'btn btn-warning']) ?></span>

		
		<h2 class="text-center">Brands</h2>
	</div>
	<?php if(Yii::$app->session->hasFlash('success')):?>
	
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::$app->session->getFlash('success');?>
	<?php endif; ?>
	<div class="panel-body">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Brand Name</th>
       <th scope="col">logo</th>
	    
		
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(count($model)) :
foreach ($model as $row) :
?> 
    <tr class="table-active">
      <th scope="row"><?=$row->id;?></th>
      <td><?=$row->brandName;?></td>
	  <td><?=$row->logo;?></td>
	   
     
     
	  <td><span>
	<!--<?= Html::a('view', ['view','id'=>$row->id], ['class'=>'btn btn-primary']) ?> -->
	  <?= Html::a('update', ['update','id'=>$row->id], ['class'=>'btn btn-success']) ?> 
	   <?= Html::a('delete', ['delete','id'=>$row->id], ['class'=>'btn btn-danger']) ?> 
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
  	



