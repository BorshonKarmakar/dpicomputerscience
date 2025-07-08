<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update password</title>
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
            <h3>Update password.</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-5">
                <label for="pass">New password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="New password." required>
                <label for="repass">Retype new password</label>
                <input type="password" name="repass" id="repass" class="form-control" placeholder="Retype new password" required>
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
                $pass=$_POST['pass'];
                $repass=$_POST['repass'];
                $repass_hash=password_hash($repass, PASSWORD_BCRYPT);
                if($pass === $repass){
                    $updatepass="UPDATE login set password='$repass' where email='$emailofcst'";
                    $updatedone=mysqli_query($con, $updatepass);
                    if($updatedone){
                        $_SESSION['updatemsg']="Successfully updated your password"; 
                        $emailofcst = $_SESSION['cstemail'];

                        // চেক করুন যে সেশন ইমেইল সেট করা আছে কিনা
                        if (isset($emailofcst)) {
                            $subject = "আপনার পাসওয়ার্ড সফলভাবে রিসেট হয়েছে";
                            $message = "আপনি CST ডিপার্টমেন্টে আপনার লগইন পাসওয়ার্ড সফলভাবে রিসেট করেছেন। ধন্যবাদ।";
                            $headers = "From: borshon.k.2004@gmail.com\r\n";
                            $headers .= "Reply-To: borshon.k.2004@gmail.com\r\n"; // ঐচ্ছিক: Reply-To সেট করুন
                            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // ঐচ্ছিক: কন্টেন্ট টাইপ সেট করুন

                            // ইমেইল পাঠান
                            mail($emailofcst, $subject, $message, $headers);
                        }
                        ?>
                            <script>
                                location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/department.php");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Password update failed");
                            </script>
                        <?php
                    }
                }else{
                    ?>
                        <script>
                            alert("Password didn't match.");
                        </script>
                    <?php
                }
            }
         ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>