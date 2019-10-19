<?php
use yii\helpers\Html;

$this->title = 'Reward_points';
?>

<div class="panel panel-default">
	<div class="panel-heading">
<span style="color:#fff;float:right;margin-top: 18px;"><?= Html::a('Add Reward_points', ['reward'], ['class'=>'btn btn-warning']) ?></span>
		
		<h2>Reward_points</h2>
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
      <th scope="col">reward_id</th>
      <th scope="col">product_name</th>
	  <th scope="col">reward_points</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
if(count($model)) :
foreach ($model as $row) :
?> 
    <tr class="table-active">
      <th scope="row"><?=$row->reward_id;?></th>
      <td><?=$row->product_name;?></td>
	    <td><?=$row->reward_points;?></td>
	  <td><span>
	 <?= Html::a('view', ['view','id'=>$row->reward_id], ['class'=>'btn btn-primary']) ?> 
	  <?= Html::a('update', ['update','id'=>$row->reward_id], ['class'=>'btn btn-success']) ?> 
	   <?= Html::a('delete', ['delete','id'=>$row->reward_id], ['class'=>'btn btn-danger']) ?> 
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
  	



