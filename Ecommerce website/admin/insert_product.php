 <?php 
 include('../includes/connect.php');
 if(isset($_POST['insert_product'])){
    $pro_title = $_POST['pro_title'];
    $pro_desc = $_POST['pro_desc'];
    $pro_keyword = $_POST['pro_keywords'];
    $pro_cat = $_POST['product_categories'];
    $pro_brand = $_POST['product_brands'];
    $pro_price = $_POST['pro_price'];
    // access images 
    $pro_img1 = $_POST['pro_img1']['name'];
    $pro_img2 = $_POST['pro_img2']['name'];
    $pro_img3 = $_POST['pro_img3']['name'];
    //accessing image tmp name
    $tmp_img1 = $_POST['pro_img1']['tmp_name'];
    $tmp_img2 = $_POST['pro_img2']['tmp_name'];
    $tmp_img3 = $_POST['pro_img3']['tmp_name'];

    //Checking empty condition 
    if($pro_title=='' or $pro_desc=='' or $pro_keyword== '' or $pro_cat== '' or $pro_brand=='' or  )
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product - Admin Dashboard</title>
        <!-- Css file-->
   <link rel="stylesheet" href="../style.css">
     <!-- Bootstrap  CSS link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- font awesome link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body class ="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type ="text" name ="pro_title" id="product_title" class="form-control" required placeholder= "Enter Product Title" autocomplete = "off">

            </div>
            <!--DEscription-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_desc" class="form-label">Product Description</label>
                <input type ="text" name ="pro_desc" id="product_desc" class="form-control" required placeholder= "Enter Product Description" autocomplete = "off">
            </div>
            <!--keyword-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type ="text" name ="pro_keywords" id="product_keywords" class="form-control" required placeholder= "Enter Product keywords" autocomplete = "off">
            </div>

            <!--category-->
            
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_category" class="form-label">category</label>
            <select name="product_categories" id="" class="form-select"> 
                <option value="">Select A category</option>
                <?php  
                $query = "SELECT * from categories";
                $result = mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)){
                    $category_title=$row['cat_title'];
                    $category_id=$row['cat_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                ?>
            </select>
            </div>

            <!--Brands--> 
            
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">Brand </label>
            <select name="product_brands" id="" class="form-select">
            <option value="">Select A brand</option> 
                <?php
                $query="SELECT * From brands";
                $result = mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)){
                    $brands_title = $row['Brand_title'];
                    $brand_id = $row['brand_id'];
                    echo "<option value='$brand_id'>$brands_title </option>";
                }
                ?>
            </select> 
            </div>
            
            <!--Images 1 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="pro_img1" class="form-label">Product Image 1 </label>
                <input type ="file" name ="pro_img1" id="pro_img1" class="form-control" required  autocomplete = "off">
            </div>

            <!--Images 2 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="pro_img2" class="form-label">Product Image 2 </label>
                <input type ="file" name ="pro_img2" id="pro_img2" class="form-control" required  autocomplete = "off">
            </div>

            <!--Images 3 --> 
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="pro_img3" class="form-label">Product Image 3 </label>
                <input type ="file" name ="pro_img3" id="pro_img3" class="form-control" required  autocomplete = "off">
            </div>
            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="pro_price" class="form-label">Product price</label>
                <input type ="text" name ="pro_price" id="pro_price" class="form-control" required placeholder= "Enter Product Title" autocomplete = "off">

            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <input type ="submit" name ="insert_product"  class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
</body>
</html>