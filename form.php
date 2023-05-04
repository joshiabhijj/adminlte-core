<?php
include('header.php');
?>

<div class="container">
  <form action="join.php" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
    <div class="row">
      <div class="col-lg-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" required name="name"><br>
        <div class="invalid-feedback">
          Enter your name
        </div>
      </div>
      <div class="col-lg-6">
      <label for="formFile" class="form-label">File: </label>
      <div class="col-lg-12">
        <input class="form-control" type="file" id="formFile" name="fileuplod[]" required multiple="mutiple">
      </div>
    </div>
    <br>
</div>
<button type="submit" class="btn btn-primary" name="submit">submit</button>
</div>
</form  >
</div>