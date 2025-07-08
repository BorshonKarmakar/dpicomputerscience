<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mid term result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .result{
            max-width: 700px;
            background-color: whitesmoke;
            border: 1px solid white;
            box-sizing: border-box;
            box-shadow: 10px 10px 10px black;
            padding: 20px 0px;
        }
        @media screen and (max-width: 992px){
            .result{
                max-width: 500px;
            }
            .upload{
                font-size: 18px;
            }
        }
        @media screen and (max-width: 767px){
            .result{
                max-width: 450px;
            }
            .upload{
                font-size: 15px;
            }
        }
        @media screen and (max-width: 600px){
            .result{
                max-width: 400px;
            }
            .upload{
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="result mx-auto mt-3">
    <div class="header">
       <h3 class="text-center upload"> Upload Mid term result</h3>
       <hr>
       <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="text-center">
                        <label for="roll">Student Roll</label>
                    </td>
                    <td>
                        <input type="number" name="roll" id="roll" placeholder="Student roll" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label for="semester">Semester</label>
                    </td>
                    <td>
                        <select name="semester" class="form-control text-center" id="semester">
                            <option value="not">Select one</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                    <label for="shift">Shift</label>
                    </td>
                    <td>
                        <select name="shift" id="shift" class="form-control text-center">
                            <option value="not">Select one</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label for="subjectcode">Subject Code</label>
                    </td>
                    <td>
                        <input type="number" name="subjectcode" id="subjectcode" placeholder="Subject Code" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label for="mark">Mark</label>
                    </td>
                    <td>
                        <input type="number" name="mark" id="mark" placeholder="Mark" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label for="totalmark">Total mark</label>
                    </td>
                    <td>
                        <input type="number" name="totalmark" id="totalmark" placeholder="Total mark" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <label for="publishdate">Publish Date</label>
                    </td>
                    <td>
                        <input type="date" name="publishdate" id="publishdate" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="done" value="Publish Result" class="btn btn-outline-primary">
                    </td>
                </tr>
            </table>
       </form>
    </div>
    </div>

    <!-- php code -->
    <?php
        include 'server.php';
        if(isset($_POST['done'])){
            $roll=$_POST['roll'];
            $semester=$_POST['semester'];
            $shift=$_POST['shift'];
            $subcode=$_POST['subjectcode'];
            $mark=$_POST['mark'];
            $totalmark=$_POST['totalmark'];
            $publishdate=$_POST['publishdate'];
            $search="SELECT * from midresult where subjectcode='$subcode' and roll='$roll'";
            $query=mysqli_query($con, $search);
            if(mysqli_num_rows($query)>0){
                $update="UPDATE midresult set roll='$roll', semester='$semester', shift='$shift', subjectcode='$subcode', publishdate='$publishdate', mark='$mark', fullmark='$totalmark' where subjectcode='$subcode' and roll='$roll'";
                $update_query=mysqli_query($con, $update);
                if($update_query){
                    ?>
                        <script>
                            alert("Update successfull");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("Upload failed");
                        </script>
                    <?php
                }
            }else{
                ?>
                    <script>
                        alert("Not submitted yet.")
                    </script>
                <?php
            }
        }
        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>