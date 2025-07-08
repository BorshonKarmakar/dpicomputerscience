<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
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
            <h3>Verification Code</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-5">
                <p class="bg-info text-light text-center">Check your email <?php if(isset($_SESSION['cstemail'])){
                    echo $_SESSION['cstemail'];
                } ?></p>
                <label for="email">Verification Code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="Enter verification code here." required>
                <input type="submit" value="Submit" name="submit" class="mx-auto d-block mt-3 btn btn-outline-info" style="color: white; padding: 5px 20px; background-color: blue;">

            </form>
        </div>
    </div>

    <!-- php code -->
     <?php
     include 'server.php';
        if(isset($_SESSION['cstemail'])){
            $emailofcst=$_SESSION['cstemail'];
        }
        if(isset($_POST['submit'])){
            $select="SELECT * from login where email='$emailofcst'";
            $select_query=mysqli_query($con, $select);
            $db_fetch=mysqli_fetch_assoc($select_query);
            $db_code=$db_fetch['verificationcode'];
            $user_code=$_POST['code'];
            if($user_code === $db_code){
                ?>
                    <script>
                        location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/updatepass.php");
                    </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Invalid Code.")
                </script>
                <?php
            }
        }
     ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>