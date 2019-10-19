<?php
use yii\helpers\Html;

$this->title = 'Follow';
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Follow Our RaW Materials</h2>
	</div>
	
	<div class="panel-body">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User_ID</th>
      <th scope="col">RaW Materials</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tr class="table-active">
      <th scope="row"><?="id";?></th>
      <td><?="product";?></td> 
 <td><span>
   <?= Html::a('Follow', ['/controller/action'], ['class'=>'btn btn-primary']) ?>
	
	 </span></td>
	 </tr>
  </tbody>
</table>
	</div>
</div>
  	



