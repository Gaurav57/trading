<?php
use yii\helpers\Html;


$this->title = 'View Post';
?>
<div class="site-index" style="margin-left: 15px;">
<h1>VIEW POST</h1>
<div class="body-content">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product-Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Distributer Price</th>
      <th scope="col">Special Price Distributer</th>
	   <th scope="col">Discription</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row"><?php echo $post->product_id;?></th>
      <td> <?php echo $post->name_product;?></td>
      <td>  <?php echo $post->price_distributer;?></td>
      <td><?php echo $post->sp_distributer;?></td>
	  <td><?php echo $post->description;?></td>
    </tr>
   
  </tbody>
</table>

<div class="row">
<a href=<?php echo yii::$app->homeUrl;?>admin/product class="btn btn-primary">Go Back</a>
</div>
</div>
</div>