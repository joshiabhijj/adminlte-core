
<?php 
include('header.php');
?>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $("#addbtn").click(function() {
    window.location.href = "form.php"
  });
</script>

<div class="container">
  <form action="submit_form_v1.php" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
    <div class="row">
      <div class="col-lg-6">
        <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" required name="name"><br>
        <div class="invalid-feedback">
          Enter your name
        </div>
</div>
      <div class="col-lg-6">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" required name="email"><br>
        <div class="invalid-feedback">Plz Enter Email</div>
      </div>
    </div>
    <label for="Hobby" class="form-label">Hobby:</label>
    <div class="row">
      <div class="col-lg-3">
        <input type="checkbox" id="read" name="hobbys[]" value="1">
        <label for="read" class="form-label">Read</label>
      </div>
      <div class="col-lg-3">
        <input type="checkbox" id="sing" name="hobbys[]" value="2">
        <label for="sing" class="form-label">Sing</label>
      </div>
      <div class="col-lg-3">
        <input type="checkbox" id="playing" name="hobbys[]" value="3">
        <label for="playing" class="form-label">Playing</label>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <input type="checkbox" id="watching" name="hobbys[]" value="4">
        <label for="watching" class="form-label"> Watching</label>
      </div>
      <div class="col-lg-3">
        <input type="checkbox" id="Playing Sport" name="hobbys[]" value="5">
        <label for="read" class="form-label">Playing Sport</label>
      </div>
      <div class="col-lg-3">
        <input type="checkbox" id="Book read" name="hobbys[]" value="6">
        <label for=" Book read" class="form-label">Book Read</label>
      </div>
    </div>
    <br>
    <div class="row">
      <label for="gender" class="form-label">Gender:</label>
      <div class="col-lg-1">
        <input type="radio" value="Male" name="gender" required>
        <label for="Male">Male</label>
        <div class="invalid-feedback"> invalid </div>
      </div>
      <div class="col-lg-2">
        <input type="radio" value="Female" name="gender" required>
        <label for="Female" class="form-label">Female</label>
        <div class="invalid-feedback"> invalid </div>
      </div>
      <label for="formFile" class="form-label">File: </label>
      <div class="col-lg-5">
        <input class="form-control" type="file" id="formFile" name="fileuplod" required>
      </div>
    </div>
    <div class="rows">
      <div class="col-lg-6">
        <label class="form-lable">Cars:</label>
        <select name="cit">
          <option vlaue="select">--select--</option>
          <option Value="swift">swift</option>
          <option value="bmw">bmw</option>
          <option value="alto">alto</option>
          <option value="verna">verna</option>
        </select>
      </div>
    </div>
    <br>
</div>
<button type="submit" class="btn btn-primary" name="submit">submit</button>
</div>
</form>
</div>
<script type="text/javascript">
  (function() {
    'use strict';
    window.addEventListener('load', function() {

      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<?php include('footer.php'); ?>  