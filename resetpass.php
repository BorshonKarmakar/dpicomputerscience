<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
    height: 100%;
    margin: 0;
}

        .first{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="first">
        <div class="second" style="width: 400px; padding: 20px; background-color: rgb(246, 230, 230); border-radius: 5px; box-sizing: border-box; box-shadow: 0px 5px 5px 0px black">
            <h3>Email verification.</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-5">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email here" required>
                <input type="submit" value="Submit" name="submit" class="mx-auto d-block mt-3 btn btn-outline-info" style="color: white; padding: 5px 20px; background-color: blue;">

            </form>
        </div>
    </div>
    <!-- php code -->
     <?php
    include 'server.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $_SESSION['cstemail']=$email;
        $search="select * from login where email='$email' ";
        $s_query=mysqli_query($con, $search);        
        $db=mysqli_fetch_assoc($s_query);
        $db_email=$db['email'];
        $code=random_int(1000, 9999);
        if($email === $db_email){
            if(mail($email, "Reset Password", "Your verification code for reset password is= $code", "From: borshon.k.2004@gmail.com")){
                $v_code = "UPDATE login set verificationcode='$code' WHERE  email='$email'";
                $verification = mysqli_query($con, $v_code);
                ?>
                    <script>
                        alert("Check your email <?php echo $email; ?> for reset password");
                        location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/reset.php");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Something went wrong");
                    </script>
                <?php
            }
        }else{
            ?>
                    <script>
                        alert("Wrong email.");
                    </script>
                <?php
        }
        
    }
     ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>