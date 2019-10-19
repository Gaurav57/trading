 <?php
use yii\helpers\Html;


$this->title = 'View Post';
?>
<div class="site-index">
<h1>VIEW POST</h1>
 
<div class="body-content">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->reward_id;?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <?php echo $post->product_name;?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   <?php echo $post->reward_points;?>
  </li>
  
</ul>
<div class="row">
<a href=<?php echo yii::$app->homeUrl;?>admin/reward class="btn btn-primary">Go Back</a>
</div>
</div>
</div>