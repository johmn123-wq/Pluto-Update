
<?php 
  //USER_LIST
  $conn=mysqli_connect('localhost','root','','test');
  if(isset($_GET['ordrid'])&&isset($_GET['ordr_product_id'])){

   
  $oid= $_GET['ordrid'];
  $opid= $_GET['ordr_product_id'];

  
  $sql1=mysqli_query($conn,"delete from `order` where order_id='$oid'");
  $sql2=mysqli_query($conn,"delete from ordered_products where ordered_pro_id='$opid'");
  if($sql1 &&$sql2)
  echo "
  <script>alert('Order deleted successfully !! ');
  window.location.href='admin_order.php';
  </script>";
}
else{
   
  echo "
  <script>alert('Order is not deleted  ');
  window.location.href='admin_order.php';
  </script>";
}

?>



<?php 
/*
  //USER_LIST
  $conn=mysqli_connect('localhost','root','','test');
  if(isset($_GET['ordrid'])&&isset($_GET['ordr_product_id'])){

   
  $oid= $_GET['ordrid'];
  $opid= $_GET['ordr_product_id'];

  
  $sql1=mysqli_query($conn,"delete from `order` where order_id='$oid'");
  $sql2=mysqli_query($conn,"delete from ordered_products where ordered_pro_id='$opid'");
  if($sql1 &&$sql2)
  echo "
  <script>alert('Order deleted successfully !! ');
  window.location.href='admin_order.php';
  </script>";
}
else{
   
  echo "
  <script>alert('Order is not deleted  ');
  window.location.href='admin_order.php';
  </script>";
}
*/  
?>