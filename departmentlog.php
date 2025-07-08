<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header {
    background: #2c3e50;
    color: white;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px; /* লোগো ও টেক্সটের মাঝে কিছু গ্যাপ যোগ করবে */
}

        nav { background: #34495e; padding: 10px; text-align: center; }
        nav a { color: white; text-decoration: none; padding: 10px 20px; }
        .container { padding: 20px; text-align: center; }
        footer { background: #2c3e50; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
        @media screen and (max-width: 600px) {
    .hcst {
        font-size: 20px !important;
    }
    .enterroll{
                font-size: 15px !important;
            }
}
   

        .admin{
            font-size: 20px;
        }
        .logout{
            padding: 10px 40px;
            background-color: black;
            border: 1px solid white;
            border-radius: 15px 0px 5px 0px;
        }
        .logout:hover{
            background-color: white;
            color: black;
            transition: .5s;
        }
        .logout a:hover{
            color: black;
            transition: .5s;
        }
        .logout a{
            text-decoration: none;
            color: white;
        }
        @media screen and (max-width: 992px){
            .admin{
                font-size: 15px;
            }
            .logout{
                padding: 6px 20px;
            }
            .loginuser-part button a{
                font-size: 20px;
            }
            
            .enterroll{
                font-size: 20px;
            }
        }
        .mid{
            font-size: 30px;
            padding: 10px 5%;
            background-color: skyblue;
            color: white;
            border: 2px solid white;
            border-radius: 20px;

        }
        .mid:hover{
            box-sizing: border-box;
            box-shadow: 3px 4px 3px black;
            transition: .5s;
        }
        .mid a{
            text-decoration: none;
            color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="Dpi logo.png" style="height: 100px; width: 250px;" alt="">
        <h1 class="hcst">Computer Science and Technology</h1>
    </header>
    <div class="log p-4 text-center text-white" style="background-color: black;">
        <p class="admin text-center">You are logged as a Department Admin.</p>
        <button class="logout"><a href="http://localhost/Php/Computer%20Science%20And%20Technology/logout.php">Logout</a></button>
    </div>

    <div class="loginuser-part">
        <button class="mid mx-auto d-block mt-3"><a href="http://localhost/Php/Computer%20Science%20And%20Technology/midresult.php">Update Mid-term result</a></button>
        <button class="mid mx-auto d-block mt-3" onclick="enterroll();"><a href="#">Search Student Information</a></button>
        <div class="student-roll mx-auto mt-2"  style="background-color: skyblue; padding: 30px; width: 75%; border-radius: 10px; display: none;" id="enterroll">
            <h3 class="text-center text-light enterroll">Enter student's roll here.</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  class="d-flex" method="POST">
                <input type="text" name="sturoll" id="sturoll" class="form-control" placeholder="Enter roll here" required>
                <input type="submit" class="btn btn-outline-primary" name="search" value="Search">
            </form>
        </div>
    </div>
   

        <script>
            function enterroll(){
                document.getElementById("enterroll").style.display="block";
                document.getElementById("enterroll").style.transition="1";
            }
        </script>

        <!-- php code -->
        <?php
        include 'server.php';
        if(isset($_POST['search'])){
            $inputroll=$_POST['sturoll'];
            $select="SELECT * FROM admission where roll='$inputroll'";
            $query=mysqli_query($con, $select);
            $num=mysqli_num_rows($query);
            if($num>0){
                $fetch_data=mysqli_fetch_assoc($query);
                $student_name=$fetch_data['studentnameng'];
                $student_roll=$fetch_data['roll'];
                $blood_group=$fetch_data['bloodgroup'];
                $shift=$fetch_data['shift'];
                $father_name=$fetch_data['fathername'];
                $father_number=$fetch_data['fathernumber'];
                $number=$fetch_data['studentmobile'];
                $email=$fetch_data['email'];
                $picture=$fetch_data['picture'];
                $_SESSION['student_name']=$student_name;
                $_SESSION['student_roll']=$student_roll;
                $_SESSION['blood_group']=$blood_group;
                $_SESSION['shift']=$shift;
                $_SESSION['father_name']=$father_name;
                $_SESSION['father_number']=$father_number;
                $_SESSION['number']=$number;
                $_SESSION['email']=$email;
                $_SESSION['picture']=$picture;
                ?>
                <script>
                    location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/studentinfo.php");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("You entered a wrong roll number.");
                </script>
                <?php
            }
        }
        ?>
      <footer>
        <p>&copy; 2025 Computer Science and Technology Department</p>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>