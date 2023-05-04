
<?php
include 'header.php';
include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM  img WHERE id='$id'";
$rejult = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($rejult);
?>  
<div class="container">
  <form action="imageupdate.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="id" value="<? echo $rows['id'] ?>">
    <div class="row-lg">
      <div class="col-lg-12">
        <label for="name" class="form-label">Id</label>
        <input type="text" class="form-control" required name="id" value="<?php echo $rows['id'] ?>">
      </div>
      <label for="formFile" class="form-label">File: </label>
      <div class="col-lg-12">
        <input type="file" class="form-control" id="file" required name="fileuplod" value="pic/.<?php echo $rows['file']; ?>">
        <img class="img-fluid custom-img" src="pic/<?php echo $rows['file']; ?>" alt="<?php echo $rows['file']; ?>">
       <br>
      </div>
    </div>
      <br>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</div>
</form>
</div>

<style>
  img.img-fluid.custom-img {
    height: auto;
    width: 50px;
    object-fit: cover;
  }
  </style>