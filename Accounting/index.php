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
      <form method="post" action="process/BookProcess.php?action=insert">
        <div class="form-group">
          <label>วันที่</label>
          <input type="date" class="form-control" name="date"  placeholder="กรอกวันที่" required>
        </div>
        <?php
        $sql = "SELECT * FROM tb_account_number";
        $result = mysqli_query($conn,$sql);
        ?>
        <div class="form-group">
          <label>รายการ</label>
          <select class="form-control" name="acc_id">
            <option value="">เลือกรายการ</option>
            <?php
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $data['acc_id']; ?>">
              <?php echo $data['acc_number'].' - '.$data['list']; ?>
            </option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
            <label>จำนวนเงิน</label>
          <input type="text" class="form-control" name="cost"  placeholder="กรอกจำนวนเงิน">
        </div>
        <div class="form-group">
            <label>ประเภท</label>
            <select class="form-control" name="status">
              <option value="">เลือกประเภท</option>
              <option value="debit">เดบิต</option>
              <option value="credit">เครดิต</option>
            </select>
        </div>

        <div class="form-group">
          <label>รายละเอียดเพิ่มเติม</label>
          <input type="text" class="form-control" name="detail">
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
      </form>
    </div>
    <br>
    <div class="container">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>วันที่</th>
            <th>รายการ</th>
            <th>เลขที่บัญชี</th>
            <th>จำนวนเงิน</th>
            <th>สถานะ</th>
            <th>รายละเอียดเพิ่มเติม</th>
          </tr>
          <?php
          $sql = "SELECT * FROM tb_book book 
                           LEFT JOIN tb_account_number accnum
                           ON book.acc_id = accnum.acc_id";
          $result = mysqli_query($conn , $sql);
          while ($data = mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $data['date']; ?></td>
            <td><?php echo $data['list']; ?></td>
            <td><?php echo $data['acc_number']; ?></td>
            <td><?php echo $data['cost']; ?></td>
            <td><?php echo $data['status']; ?></td>
            <td><?php echo $data['detail']; ?></td>
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
