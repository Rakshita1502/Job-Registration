<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'links.php';?>

  </head>
  <body>

    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            <h3>Welcome</h3>
                            <p>Please fill all the details carefully.This form can change your life!</p>
                            <a href="display.php">
                            <input type="submit" name="checkform" value="Check Form"/><br/>
                            </a>
                        </div>
                        <div class="col-md-9 register-right">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Apply for Web Development Post</h3>
                                    <form class="" action="" method="POST">
                                      <div class="row register-form">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input type="text"name="user" class="form-control" placeholder="Enter your name *" value="" />
                                              </div>

                                              <div class="form-group">
                                                  <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                              </div>

                                              <div class="form-group">
                                                  <input type="text" name="refer"class="form-control" placeholder="Any reference" value="" />
                                              </div>



                                          </div>
                                          <div class="col-md-6">

                                            <div class="form-group">
                                                <input type="text" name="degree"class="form-control" placeholder="Enter your qualification *" value="" />
                                            </div>
                                              <div class="form-group">
                                                  <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                                              </div>
                                              <div class="form-group">
                                                  <input type="text" name="jobprofile"class="form-control"  value="Web Developer" />
                                              </div>

                                              <input type="submit" name="submit"class="btnRegister"  value="Register"/>
                                          </div>
                                      </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

  </body>
</html>

<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $degree=$_POST['degree'];
    $mobile=$_POST['phone'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobprofile=$_POST['jobprofile'];

    $insertquery="insert into jobregistration(name, degree, mobile, email,refer, jobpost) VALUES ('$username','$degree','$mobile','$email','$refer','$jobprofile')";
    $res=mysqli_query($con,$insertquery);
    if($res){
      ?>
      <script type="text/javascript">
        alert("Registered successfully");
      </script>
      <?php
    }else{
      ?>
    <script type="text/javascript">
      alert("could not register");
    </script>
      <?php
    }

  }
 ?>
