<?php
  include "../config/database.php";
  if (isset($_GET['action']) && $_GET['action'] == "insert")
  {
    $date = $_POST['date'];
    $detail = $_POST['detail'];
    $acc_num = $_POST['acc_num'];
    $cost = $_POST['cost'];
    $status = $_POST['status'];
    $sql = "INSERT INTO `tb_book` (`date`, `detail`, `acc_num`, `cost`, `status`)
      VALUES ('$date', '$detail', '$acc_num', '$cost', '$status')";
    $result = mysqli_query($onn , $sql);
    header("refresh:0; ../index.php");
  }

  if (isset($_GET['action']) && $_GET['action'] == "update")
  {
    echo "update";
  }

  if (isset($_GET['action']) && $_GET['action'] == "delete")
  {
    echo "delete";
  }
?>
