
<?php
session_start();
if(!isset($_SESSION['e_mail'])){
  header('location:login.php');
}
include('header.php');
include('connection.php');
$query = "SELECT  *  FROM  data ";
$rejult = mysqli_query($conn, $query);  
echo "Welcome"      
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Data</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="addbtn">
                  ADD
</button>&nbsp;
                <a  class= "btn btn-primary" href="logout.php">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hobby </th>
                <th>Gender</th>
                <th>photo</th>
                <th>Cars</th>
                <th>Button</th>
                <th>Button</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_array($rejult))
              // $id = $rows['id'];
              {
              ?>
                <tr>
                  <td><?php echo $rows['id'] ?></td>
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['email'] ?></td>
                  <td><?php echo $rows['hobby'] ?></td>
                  <td><img class="img-fluid custom-img" src="<?php echo $rows['file']; ?>" alt="<?php echo $rows['file']; ?>"></td>
                  <td><?php echo $rows['gender']?></td>
                  <td><?php echo $rows['city'] ?></td>
                  <td>
                    <a class="btn btn-primary" href="delete_form_v1.php?id=<?php echo $rows['id']; ?>"> Delete </a>
                  </td>   
                  <td>
                    <a class="btn btn-primary" href="edit_form_v1.php?id=<?php echo $rows['id']; ?>"> edit </a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table> 
        </div>
        <!-- /.card-body -->
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
<style>
  img.img-fluid.custom-img {
    height: auto;
    width: 50px;
    object-fit: cover;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
    $("#addbtn").click(function() {
      window.location.href = "index.php"
    });
  </script>