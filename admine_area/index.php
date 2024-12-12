<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admine Dashbord</title>
</head>
<body>

    <!---------- navbar  -->

  <div class="container-fluid p-0">
    <!-- first child  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <h1>☠️</h1>

        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest </a>
                </li>
            </ul>
        </nav>
      </div>
    </nav>

     <!-- second child  -->
     <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
     </div>

     <!-- third child  -->

     <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
           <div class="p-4">
              <a href=""><img style="height: 100px; width:100px; border-radius:10px;padding-left: 10px;" src="https://plus.unsplash.com/premium_photo-1712029146082-3faa70d0144c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></a>
               <p class="text-light text-center">Admin Name</p>
            </div>

        <div class="button text-center">
          <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
          <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All orderds</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
          <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
          <button><a href="../index.php" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>

     </div>

  </div>

  <!------ fourth child -->

  <div class="container my-5">
    <?php
    
    if(isset($_GET['insert_category'])){
      include('insert_categories.php');
    }
    if(isset($_GET['insert_brands'])){
      include('insert_brands.php');
    }

    ?>
  </div>






</div>




<!------ js  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>