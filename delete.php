<?php
include 'connection.php';

$id=$_GET['idth'];

$deletequery="delete from jobregistration where id=$id";
$res=mysqli_query($con,$deletequery);
if($res){
  ?>
  <script type="text/javascript">
    alert("deleted successfully");
  </script>
  <?php
}else{
  ?>
<script type="text/javascript">
  alert("could not delete");
</script>
  <?php
}
header('location:display.php');

 ?>
