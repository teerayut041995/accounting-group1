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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <div class="container">
      <form method="post" action="process/BookProcess.php?action=insert">
        <div class="form-group">
          <label>วันที่</label>
          <input type="date" class="form-control" name="date"  placeholder="กรอกวันที่" required>
        </div>
        <div class="form-group">
          <label>รายการ</label>
          <input type="text" class="form-control" name="detail"  placeholder="กรอกรายการ" required>
        </div>
        <div class="form-group">
            <label>เลขที่บัญชี</label>
          <input type="text" class="form-control" name="acc_num"  placeholder="กรอกเลขที่บัญชี">
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
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </form>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
