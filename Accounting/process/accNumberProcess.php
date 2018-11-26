<?php
  include "../config/database.php";
  if (isset($_GET['action']) && $_GET['action'] == "insert")
  {
    echo $list = $_POST["list"];
    echo $acc_num = $_POST["acc_num"];
    $sql = "INSERT INTO `tb_account_number` (`acc_id`, `acc_number`, `list`)
    VALUES (NULL, '$acc_num', '$list')";
    $result = mysqli_query($conn , $sql);
    header("refresh:1; url=../accountNumber.php");
    //header("Location:../accountNumber.php");
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
