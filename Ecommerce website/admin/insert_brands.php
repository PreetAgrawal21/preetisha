<?php
include("../includes/connect.php");

if(isset($_POST['insert_bra'])){
    $brand= $_POST['bra_title'];
    $select_query = "SELECT * FROM `Brands` WHERE brand_title = '$brand'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('brand already exists!!')</script>";
    }else{
        $insert_query="INSERT INTO `brands`(`brand_id`, `Brand_title`) VALUES ('','$brand')";
        $query = mysqli_query($con,$insert_query);
        if($query){
            echo "<script> alert('Brand inserted successfully!!')</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text bg-info"><i class="fa fa-solid fa-receipt"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Insert Brands" name="bra_title" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
  <input type="submit" class="bg-info border-0 p-2 my-3"  name="insert_bra"  value="Insert Categories">
  
</div>
</form>