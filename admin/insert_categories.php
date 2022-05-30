<?php
include ('../include/connect.php');

if(isset($_POST['insert_cat'])){
  $category = $_POST['cat_title'];

// select data from db
$select = "SELECT * FROM `category` WHERE `category_title`='$category' ";
$res = mysqli_query($con,$select);
$num = mysqli_num_rows($res);
if($num > 0){
  echo " <script>alert('This category is present')</script>";
}else{
  $sql = "INSERT INTO `category`(`category_title`) VALUES ('$category')";
$result = mysqli_query($con,$sql);
if($result){
  echo " <script>alert('Category successfully added')</script>";
}else{
  echo " <script>alert('Failed to add category added')</script>";
}

}
}


?>

<form action="#" method="post">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories" required>
</div>

<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info p-2 my-3 border-0" name="insert_cat" value="Insert categories">

    <!-- <button class="bg-info p-2 my-3 border-0" type="submit" > Insert categories </button> -->

    <!-- <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name:"cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div> -->

<!-- <div class="input-group w-10 mb-2">
    <input type="submit" class="form-control bg-info " name="insert_cat" value="Insert categories"> -->


</div>
</form> 