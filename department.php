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
}
   

        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="department.css">
</head>
<body>
    <header>
        <img src="Dpi logo.png" style="height: 100px; width: 250px;" alt="">
        <h1 class="hcst">Computer Science and Technology</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h3 class="navbar-brand">CST Department</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" href="#courses">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teacher.html">Teachers</a>
                    </li>
                    
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" id="navbardropdown" data-bs-toggle="dropdown" href="#contact" style="color: white;">Login</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="http://localhost/Php/Computer%20Science%20And%20Technology/department.php" class="dropdown-item">Department login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Admission</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="http://localhost/Php/Computer%20Science%20And%20Technology/studentadmiss.php">Student Admission Form</a></li>
                            <li><a href="http://localhost/Php/Computer%20Science%20And%20Technology/searchroll.php" class="dropdown-item">Search Previous form</a></li>
                        </ul>
                    </li>
                    ass="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" id="navbardropdown" data-bs-toggle="dropdown" href="#">Routine</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#" class="dropdown-item">১ম পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">২য় পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">৩য় পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">৪র্থ পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">৫ম পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">৬ষ্ঠ পর্ব</a></li>
                            <li><a href="#" class="dropdown-item">৭ম পর্ব</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="3 5 7 ছাত্র ছাত্রী তালিকা 2য় শিফট.pdf">Student list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Php/Computer%20Science%20And%20Technology/midterm.php">Mid term result</a>
                    </li>
                    <li class="nav-item">
                        <a href="saf.html" class="nav-link">SAF Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
      
      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Computer Science And Technology</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <p>ডিজিটাল বাংলাদেশ বিনির্মাণে কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজির অবদান অনস্বীকার্য। কম্পিউটার হার্ডওয়ার, সফটওয়্যার ও নেটওয়ার্ক সম্পর্কে জ্ঞান অর্জনের মাধ্যমে এই টেকনোলজির শিক্ষার্থীরা ব্যাংক-বীমা ও আর্থিক প্রতিষ্ঠানসহ বিভিন্ন সরকারি-বেসরকারি চাকুরীতে নিজেদের আত্ননিয়োগ করে এবং ফ্রিল্যান্সিং এর মাধ্যমে বৈদেশিক মুদ্রা অর্জনে গুরুত্বপূর্ণ ভূমিকা পালন করে। এছাড়াও আত্ম-কর্মসংস্থানের মাধ্যমে দেশ ও জাতির উন্নতি সাধনে কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি অগ্রণী ভূমিকা পালন করে।</p><br>
          <b>কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি এর ল্যাবসমূহঃ</b>
          <ol>
            <li>সফটওয়্যার ল্যাব-১</li>
            <li>সফটওয়্যার ল্যাব-২</li>
            <li>নেটওয়ার্ক ল্যাব</li>
            <li>আইওটি ল্যাব</li>
            <li>মাইক্রোপ্রসেসর অ্যান্ড মাইক্রোকন্ট্রোলার ল্যাব(MPMC Lab)</li>
          </ol>
          

        </div>
      </div>
        <div class="login-part mx-auto mt-5">
            <h4 style="font-weight: bolder;" class="text-center">Department Login</h4>
            <p class="text-center bg-info text-white">
                <?php
                    if(isset($_SESSION['updatemsg'])){
                        echo $_SESSION['updatemsg'];
                    }
                ?>
            </p>
            <div class="form-part mt-2">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Login" class="btn btn-success mx-auto d-block sub-button">
                </form>
                <div class="forgot-part">
                    <p class="text-center">Forgot your password? Click here to <a href="http://localhost/Php/Computer%20Science%20And%20Technology/resetpass.php">reset password</a></p>
                </div>
            </div>
        </div>

        <?php
include 'server.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM login WHERE username='$username'";
    $select_q = mysqli_query($con, $select);

    if(mysqli_num_rows($select_q) > 0){
        $pass = mysqli_fetch_assoc($select_q);
        $db_pass = $pass['password'];

        if($db_pass === $password){
            ?>
            <script>
    location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/departmentlog.php");
</script>

            <?php
        } else {
            ?>
            <script>
                alert("Wrong password");
            </script>
            <?php 
        }
    } else {
        ?>
        <script>
            alert("Username not found");
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