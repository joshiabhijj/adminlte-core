
<?php
include 'header.php';
include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM  data WHERE id='$id'";
$rejult = mysqli_query($conn, $query);   
$rows = mysqli_fetch_assoc($rejult);
$value = explode(",", $rows['hobby']);
$option = $rows['city'];
?>
<div class="container">
  <form action="update.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="id" value="<? echo $rows['id'] ?>">
    <div class="row-lg">
      <div class="col-lg-12">
        <label for="name" class="form-label">Id</label>
        <input type="number" class="form-control" required name="id" value="<?php echo $rows['id'] ?>">
      </div>
      <br>
      <div class="row">
        <div class="col-lg-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" required name="name" value="<?php echo $rows['name'] ?>"><br>
        </div>
        <div class="col-lg-6">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" required name="email" value="<?php echo $rows['email'] ?>"><br>
          <div class="invalid-feedback">Plz Enter Email</div>
        </div>
      </div>
      <label for="Hobby" class="form-label">Hobby:</label>
      <div class="row">
        <div class="col-lg-4">
          <input type="checkbox" id="read" name="hobbys[]" value="1" <?php
                                                                      if (in_array("1", $value)) {
                                                                        echo "checked";
                                                                      } else {
                                                                        echo " ";
                                                                      }
                                                                      ?>>
          <label for="read" class="form-label">Read</label>
         </div>
        <div class="col-lg-4">
          <input type="checkbox" id="sing" name="hobbys[]" value="2" <?php
                                                                      if (in_array("2", $value)) {
                                                                        echo "checked";
                                                                      } else {
                                                                        echo "";
                                                                      }
                                                                      ?>>
          <label for="sing" class="form-label">Sing</label>
        </div>
        <div class="col-lg-4">
          <input type="checkbox" id="playing" name="hobbys[]" value="3" <?php
                                                                        if (in_array("3", $value)) {
                                                                          echo "checked";
                                                                        } else {
                                                                          echo "";
                                                                        }
                                                                        ?>>
          <label for="playing" class="form-label">Playing</label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <input type="checkbox" id="watching" name="hobbys[]" value="4" <?php
                                                                          if (in_array("4", $value)) {
                                                                            echo "checked";
                                                                          } else {
                                                                            echo "";
                                                                          }
                                                                          ?>>
          <label for="watching" class="form-label"> Watching</label>
        </div>
        <div class="col-lg-4">
          <input type="checkbox" id="Playing Sport" name="hobbys[]" value="5" <?php
                                                                              if (in_array("5", $value)) {
                                                                                echo "checked";
                                                                              } else {
                                                                                echo "";
                                                                              }
                                                                              ?>>
          <label for="read" class="form-label">Playing Sport</label>
        </div>
        <div class="col-lg-3">
          <input type="checkbox" id="Book read" name="hobbys[]" value="6" <?php
                                                                          if (in_array("6", $value)) {
                                                                            echo "checked";
                                                                          } else {
                                                                            echo "";
                                                                          }
                                                                          ?>>
          <label for=" Book read" class="form-label">Book Read</label>
        </div>
      </div><br>

      <div class="row">&nbsp;&nbsp;
        <label for="gender" class="form-label">Gender:</label>
        <div class="col-lg-1">
          <input type="radio" value="Male" name="gender" required <?php if ($rows['gender'] == "Male") {
                                                                    echo "checked";
                                                                  } ?>>
          <label for="Male">Male</label>
          <div class="invalid-feedback"> invalid </div>
        </div>
        <div class="col-lg-2">
          <input type="radio" value="Female" name="gender" required <?php  if ($rows['gender'] == "Female") {
                                                                      echo "checked";
                                                                    } ?>>
          <label for="Female" class="form-label">Female</label>
          <div class="invalid-feedback"> invalid </div>
        </div>
      </div>
      <label for="formFile" class="form-label">File: </label>
      <div class="col-lg-12">
        <input type="file" class="form-control" id="file" required name="fileuplod" value="<?php echo $rows['file']; ?>">
        <img class="img-fluid custom-img" src="<?php echo $rows['file']; ?>" alt="<?php echo $rows['file']; ?>">
        <br>
      </div>
    </div>
    <div class="rows">
      <div class="col-lg-5">
        <label class="form- lable">Cars:</label>
        <div class="col-lg-12">
          <select name="cit" value="cit">
            <option value="select">----select----</option>
            <option value="swift" <?php if ($option == "swift") echo 'selected = "selected"'; ?>>swift</option>
            <option value="bmw" <?php if ($option == "bmw") echo 'selected = "selected"'; ?>>bmw</option>
            <option value="alto" <?php if ($option == "alto") echo 'selected = "selected"'; ?>>alto</option>
            <option value="verna" <?php if ($option == "verna") echo 'selected = "selected"'; ?>>verna</option>
          </select>
        </div>
      </div>
      <br>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>