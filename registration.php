<?php
require_once (config.php);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css">
    
</head>
<body>
<div>
    <?php
    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
      $sql ="INSERT INTO users (firstname,lastname,email,phonenumber,password ) VALUES (?,?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
      if($result){
        echo 'Sucessfully saved';
      }else{
        echo 'Failed to save';
      }
    echo $firstname . " " . $lastname . " " . $email . " " . $phonenumber . " " . $password;

    }
    ?>
</div>
<form action ="registration.php" method ="post">
    <div class="container">

    <div class="row">
        <div class="col-sm-3">
        <h1>User Registration</h1>
        <p>Fill form correctly.</p>
        <hr class="mb-3>
        <label for ="firstname"></b>First Name </b></label>
        <input type ="form-control" name ="firstname" required>

        <label for ="lastname"></b>Last Name </b></label>
        <input type ="form-control" name ="lastname" required>

        <label for ="email"></b>Email address </b></label>
        <input type ="form-control" name ="email" required>

        <label for ="phonenumber"></b>Phone Number </b></label>
        <input type ="form-control" name ="firstname" required>

        <label for ="password"></b>Password </b></label>
        <input type ="form-control" name ="password" required>
        <hr class="mb-3>
        <input class= " btn btn-primary" type ="submit" name="create" value ="Sign Up">
</div>
</Form>
</div>

</body>
</html>