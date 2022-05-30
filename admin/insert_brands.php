<?php
include ('../include/connect.php');

if(isset($_POST['insert_brand'])){
  $brand = $_POST['brand_title'];

// select data from db
$select = "SELECT * FROM `brand` WHERE `brand_title`='$brand' ";
$res = mysqli_query($con,$select);
$num = mysqli_num_rows($res);
if($num > 0){
  echo " <script>alert('This brand is present Already')</script>";
}else{
  $sql = "INSERT INTO `brand`(`brand_title`) VALUES ('$brand')";
$result = mysqli_query($con,$sql);
if($result){
  echo " <script>alert('Brand successfully added')</script>";
}else{
  echo " <script>alert('Failed to add Brand')</script>";
} 

}
}


?>

<h2 class="text-center">Insert Brands</h2>
<form action="#" method="post">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" required>
</div>

<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info p-2 my-3 border-0" name="insert_brand" value="Insert Brand">

    <!-- <button class="bg-info p-2 my-3 border-0">
    Insert Brands

    </button> -->
    <!-- <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name:"cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div> -->

<!-- <div class="input-group w-10 mb-2">
    <input type="submit" class="form-control bg-info " name="insert_cat" value="Insert categories"> -->


</div>
</form> 