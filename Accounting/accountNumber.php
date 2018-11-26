<?php
include "config/database.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <title>Hello, world!</title>
  </head>
  <body>

    <header>
    <?php include "template/header.php"; ?>
    </header>

    <div class="container">
      <form method="post" action="process/accNumberProcess.php?action=insert">

        <div class="form-group">
          <label>รายการ</label>
          <input type="text" class="form-control" name="list"  placeholder="กรอกรายการ" required>
        </div>
        <div class="form-group">
            <label>เลขที่บัญชี</label>
          <input type="text" class="form-control" name="acc_num"  placeholder="กรอกเลขที่บัญชี" required>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
      </form>
    </div>
    <br>
    <div class="container">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>เลขบัญชี</th>
            <th>รายการ</th>
          </tr>
          <?php
          $sql = "SELECT * FROM tb_account_number";
          $result = mysqli_query($conn , $sql);
          while($data = mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $data["acc_number"]; ?></td>
            <td><?php echo $data["list"]; ?></td>
          </tr>
          <?php
          }
          ?>

        </table>
      </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
