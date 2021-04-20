

<?php

include 'connection.php';
include 'links.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style media="screen">
  <?php include 'css/display.css'; ?>
</style>



  </head>

  <body>

    <div class="main-div">
    <h3>List of candidates for Web Development</h3>
    <div class="cont">
      <div class="center-div">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>degree</th>
                <th>mobile</th>
                <th>email</th>
                <th>refer</th>
                <th>jobpost</th>
                <th colspan="2">operation</th>


              </tr>
            </thead>
            <tbody>
              <?php



               $selectquery="select * from jobregistration";
               $query=mysqli_query($con,$selectquery);
               //$num=mysqli_num_rows($query);


               while($res=mysqli_fetch_array($query)){
                ?>

                 <tr>
                   <td><?php echo $res['id'];?></td>
                   <td><?php echo $res['name'];?></td>
                   <td><?php echo $res['degree'];?></td>
                   <td><?php echo $res['mobile'];?></td>
                   <td class="email-style"><?php echo $res['email'];?></td>
                   <td><?php echo $res['refer'];?></td>
                   <td><?php echo $res['jobpost'];?></td>
                   <td><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit"></i></a></td>
                   <td><a href="delete.php?idth=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a></td>
                 </tr>
                 <?php
               }
              ?>

            </tbody>
          </table>

        </div>

      </div>
    </div>


    </div>


    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </body>
</html>
