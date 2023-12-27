<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $cat_title = $_POST['cat_title'];
    //select data from datavbase
    $select_query = "SELECT * FROM categories WHERE cat_title = '$cat_title'";
    $result_select = mysqli_query($con,$select_query);
    $number= mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('This category already exists')</script>";
    }else{
        $query = "INSERT INTO `categories`(`cat_id`, `cat_title`) VALUES ('','$cat_title')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>alert('Categories has been inserted!!')</script>";
        }
    }
    
}
?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text bg-info"><i class="fa fa-solid fa-receipt"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Insert Category" name="cat_title" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
  <input type="submit" class="bg-info border-0 p-2 my-3"  name="insert_cat"  value="Insert Categories">
  
</div>
</form>