<?php
use yii\helpers\Html;
use app\modules\admin\models\Register;
use app\modules\admin\controllers\RegisterController;
$this->title = 'Profile';
?>
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}

.profile-img img{
    width: 70%;
    height: 70%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}

.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
table.table.table-hover {
     border: 1px solid #dddddd; 
}
</style>



	


<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" style="margin-top: -119px;	" />
                           
                        </div>
                    </div>
                </div>                   

   <div class="row">
	  <div class="profile-head">
			<h5>
				Kshiti Ghelani
			</h5>
			<h6>
				Web Developer and Designer
			</h6>
		  </div>
	<h2>About:</h2>
</div>

                        
<?php
if(count($model)) :
foreach ($model as $row) :
?>                
               
  <div class="row">                
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col"><?=$row->lName;?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Last Name:</th>
      <td><?=$row->fName;?></td>
      
    </tr>
    <tr>
      <th scope="row">Email:</th>
      <td><?=$row->email;?></td>
      
    </tr>
    <tr class="table-primary">
      <th scope="row">Contact No:</th>
      <td><?=$row->contact;?></td>
     
    </tr>
    <tr class="table-secondary">
      <th scope="row">Address:</th>
      <td><?=$row->address;?></td>
     
    </tr>
	 <tr class="table-secondary">
      <th scope="row">City:</th>
      <td><?=$row->city;?></td>
     
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



  	



