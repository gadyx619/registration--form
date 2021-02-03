<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/sb-admin-3.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body style="font-family: montserrat;">
    <?php include('process.php'); ?>

    <?php
    if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <h2 class="display-4 text-center"><i class="fas fa-pen "></i> <span class="text-primary text-center">Registration</span> Form</h2>

    <?php
    $query = "SELECT * FROM data ORDER BY did DESC";
    $res = mysqli_query($conn, $query);
    ?>
    <section id="imekaa">
        <div class="container col-md-7 mt-4">
            <form action="process.php" class="user" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <h2 class="display-6">First Name:</h2>
                    <input type="text" name="fname" class="form-control form-control-user" value="<?php echo $fname ?>" id="fname" placeholder="Enter Firstname..." required>
                    <i class="fas fa-check-circle" style="color: ;"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
                <div class="form-group">
                    <h2 class="display-6">Last Name:</h2>
                    <input type="text" name="lname" class="form-control form-control-user" value="<?php echo $lname ?>" id="lname" placeholder="Enter Lastname..." required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
                <div class="form-group">
                    <h2 class="display-6">Age:</h2>
                    <input type="number" name="age" class="form-control form-control-user" value="<?php echo $age?>" id="age" placeholder="Enter Age..." required>
                    <i class="fas fa-check-circle" style="color: ;"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
                <div class="form-group">
                    <h2 class="display-6">Email:</h2>
                    <input type="email" name="email" class="form-control form-control-user" value="<?php echo $email ?>" id="email" placeholder="Enter Email..." required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
                <div class="form-group">
                    <h2 class="display-6">Password:</h2>
                    <input type="password" name="pass" class="form-control form-control-user" value="<?php echo $pass ?>" id="pass" placeholder="Enter Password..." required>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>

                <div class="form-group m-0">
                    <input type="radio" name="male" value="Male" id="">Male
                    <input type="radio" name="male" value="Female" id="">Female
                </div>

                <div class="form-group m-0">
                    <div class="btn-group" data-toggle="buttons">
                        <h2 class="display-6">Checkbox</h2> &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="btn btn-primary active">
                            <input type="checkbox" name="cbox" id="" value="Student" checked autocomplete="off"> I am a Student 
                        </label>&nbsp;&nbsp;&nbsp;
                        <label class="btn btn-primary ">
                            <input type="checkbox" name="cbox2" value="Businessman" autocomplete="off"> I am a Businessman
                        </label>
                    </div>
                </div>
                <div class="card-body b-b"> <h2 class="diplay-2">Birthday</h2>
                <input type="date" class="date-time-picker form-control form-control-user" name="date">
                            
                        </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="save" id="savebtn" class="btn btn-primary btn-user btn-block "> <i class="fas fa-paper-plane fa-2x"></i> &nbsp; Tuma Maombi</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" name="reload" class="btn btn-success btn-user btn-block "><i class="fas fa-sync fa-2x"></i> &nbsp; Futa/Safisha</button>
                        
                    </div>
                    
                </div>

            </form>

        </div>
    </section>
   
                      
    <script src="js/jquery-3.5.1.slim.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/popper.minc225.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
 <script>
 $('#savebtn').on('click', function(){
    alert('data has been saved');
 });
 </script>
 
</body>
</html>