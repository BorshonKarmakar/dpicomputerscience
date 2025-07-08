<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student information</title>
    <link rel="stylesheet" href="studentinfo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
        
    </style>
</head>
<body>
    <div class="first-part mx-auto mt-3">
        <div class="heading">
            <h2 class="text-center">শিক্ষার্থীর তথ্য</h2>
        </div>
        <div class="info-part">
        <div class="img-part">
        <div class="blue">
        <h4 class="text-light text-center institute">Dinajpur Polytechnic Institute</h4>
            <img src="<?php 
            if(isset($_SESSION['picture'])){
                echo $_SESSION['picture'];
            }
            ?>" class="mx-auto d-block image" style="height: 200px; width: 200px; border-radius: 50%; margin-top: 30px; border: 2px double orange; margin: 0; " alt="">
            
        </div>
        </div>
        <div class="text-part mt-5 text-center">
            <h4 class="txt">Name:<?php 
            if(isset($_SESSION['student_name'])){
                echo $_SESSION['student_name'];
            }
            ?></h4>
            <h4 class="txt">Roll:<?php 
            if(isset($_SESSION['student_roll'])){
                echo $_SESSION['student_roll'];
            }
            ?></h4>
            <h4 class="txt">Blood Group:<?php 
            if(isset($_SESSION['blood_group'])){
                echo $_SESSION['blood_group'];
            }
            ?></h4>
            <h4 class="txt">Shift:<?php 
            if(isset($_SESSION['shift'])){
                echo $_SESSION['shift'];
            }
            ?></h4>
            <h4 class="txt">Father's Name:<?php 
            if(isset($_SESSION['father_name'])){
                echo $_SESSION['father_name'];
            }
            ?></h4>
            <h4 class="txt">Father's Number:<?php 
            if(isset($_SESSION['father_number'])){
                echo $_SESSION['father_number'];
            }
            ?></h4>
        </div>
        
    </div>
    <div class="red text-center">
    <h4 class="txt text-light">Student's Number:<?php 
            if(isset($_SESSION['number'])){
                echo $_SESSION['number'];
            }
            ?></h4>
    <h4 class="txt text-light">Email:<?php 
            if(isset($_SESSION['email'])){
                echo $_SESSION['email'];
            }
            ?></h4>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>