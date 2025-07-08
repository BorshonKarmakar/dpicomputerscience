<?php 
session_start(); 
include 'server.php';
if(isset($_SESSION['studentroll'])){
    $studentroll=$_SESSION['studentroll'];
    $select="SELECT * from midresult where roll='$studentroll'";
    $query=mysqli_query($con, $select);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid term result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box{
            max-width: 600px;
            padding: 20px;
            border: 1px solid black;
        }
        .header{
            text-align: center;
        }
        .logo{
            height: 100px;
            width: 150px;
        }
        .roll{
            font-size: 20px;
        }
        @media screen and (max-width: 992px){
            .box{
                max-width: 450px;
            }
            .logo{
                height: 80px;
                width: 130px;
            }
            .dpi{
                font-size: 20px;
            }
            .mid{
                font-size: 20px;
            }
            .roll{
                font-size: 16px;
            }
            .box .result table thead tr th{
                font-size: 12px;
            }
            .box .result table tfoot tr td{
                font-size: 12px;
            }

        }
        @media screen and (max-width: 772px){
            .box{
                max-width: 400px;
            }
            .logo{
                height: 80px;
                width: 130px;
            }
            .dpi{
                font-size: 20px;
            }
            .mid{
                font-size: 20px;
            }
            .roll{
                font-size: 16px;
            }
            .box .result table thead tr th{
                font-size: 12px;
            }
            .box .result table tfoot tr td{
                font-size: 12px;
            }

        }
        @media screen and (max-width: 600px){
            .box{
                max-width: 350px;
            }
            .logo{
                height: 80px;
                width: 130px;
            }
            .dpi{
                font-size: 20px;
            }
            .mid{
                font-size: 20px;
            }
            .roll{
                font-size: 16px;
            }
            .box .result table thead tr th{
                font-size: 12px;
            }
            .box .result table tfoot tr td{
                font-size: 12px;
            }

        }
    </style>
</head>
<body>
    <div class="box mx-auto">
        <div class="header">
            <img src="Dpi logo.png" class="logo" alt="">
            <h3 class="dpi">Dinajpur Polytechnic Institute</h3>
        </div>
        <div class="result">
            <h4 style="font-family: cursive; background-color: blue;" class="text-center text-light mid">Mid Term Result</h4>
            <p class="text-center roll">Roll: <span class="text-primary"><?php echo $studentroll; ?></span></p>
            <table class="table table-bordered table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>Subject Code</th>
                        <th>Mark</th>
                        <th>Total Mark</th>
                        <th>Grade</th>
                        <th>Publish Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <?php
                        while ($fetch = mysqli_fetch_assoc($query)) {
                            $total=$fetch['fullmark'];
                            $number=$fetch['mark'];
                            if($number >= ($total * 80) / 100){
                                $grade = "A+";
                            } else if($number >= ($total * 70) / 100){
                                $grade = "A";
                            } else if($number >= ($total * 60) / 100){
                                $grade = "A-";
                            } else if($number >= ($total * 50) / 100){
                                $grade = "B";
                            } else if($number >= ($total * 45) / 100){
                                $grade = "C";
                            } else if($number >= ($total * 40) / 100){
                                $grade = "D";
                            } else {
                                $grade = "F";
                            }

                            echo "<tr>";
                            echo "<td>{$fetch['subjectcode']}</td>";
                            $mark_class=($grade === "F") ? "text-danger" : "";
                            echo "<td class='$mark_class'>{$fetch['mark']}</td>";
                            echo "<td>{$fetch['fullmark']}</td>";
                           $grade_class = ($grade == "F") ? "text-danger" : "";
                            echo "<td class='$grade_class'>$grade</td>";
                            echo "<td>{$fetch['publishdate']}</td>";
                            echo "</tr>";
                        }
                    ?>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>