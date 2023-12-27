<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborad</title>
     <!-- Css file-->
   <link rel="stylesheet" href="../style.css">
     <!-- Bootstrap  CSS link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- font awesome link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>
<body>
    <!--navbar-->
    <div class="conatainer-fluid">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class = "nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--Second Child-->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>      
        <!--Third Chil-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class ="p-3 my-1">
                    <a href="#"><img src="../images/shampoo.jpg" alt="" class = "Admin_image"></a>
                    <p class="text-light text-center">
                        Admin name
                    </p>
                </div>
                <div class="button text-center px-3">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">
                        Insert Products 
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        View Products
                    </a></button>
                    <button class="my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">
                        Insert Categories
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        View Categories
                    </a></button>
                    <button class="my-3"><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">
                        Insert Brands
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        View Brands
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        All Orders
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        All Payments
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        List Users
                    </a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">
                        Log-out
                    </a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- fourth child -->
    <div class="container my-3">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        ?>
    </div>
  
<!--Bootstrap JS Link-->
 
</body>
</html>