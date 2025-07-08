<?php
// ফাইলের একদম উপরে বসাও
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student admission form</title>
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
    <link rel="stylesheet" href="studentadmissionform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link dropdown-toggle" id="navbardropdown" data-bs-toggle="dropdown" href="#contact">Login</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="http://localhost/Php/Computer%20Science%20And%20Technology/department.php" class="dropdown-item">Department login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: white;">Admission</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="http://localhost/Php/Computer%20Science%20And%20Technology/studentadmiss.php">Student Admission Form</a></li>
                            <li><a href="http://localhost/Php/Computer%20Science%20And%20Technology/searchroll.php" class="dropdown-item">Search Previous form</a></li>
                        </ul>
                    </li>
                    <li cass="nav-item dropdown" >
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
                        <a class="nav-link" href="#">Mid term result</a>
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
           
      <!-- form part -->
    <div class="form-part mx-auto mt-3">
        <h3 class="text-center saf">Student Admission Form</h3>
        <h4 class="text-center safcst">Computer Science And Technology</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="adform" method="POST" enctype="multipart/form-data">
            <table class="table table-hover table-striped">
                <tr>
                    <td>
                        <label for="enname">শিক্ষার্থীর নাম(ইংরেজি):</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="enname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bnname">শিক্ষার্থীর নাম(বাংলা):</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="bnname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numbirthcer">শিক্ষার্থীর জন্মসনদের নাম্বারঃ</label>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="numbirthcer" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">শিক্ষার্থীর জন্মতারিখঃ</label>
                    </td>
                    <td>
                        <input type="date" class="form-control" name="dob" max="2008-01-01" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">শিক্ষার্থীর লিঙ্গঃ</label></td>
                    <td>
                        <select name="gender" class="form-control" id="" required>
                            <option value="not-select">নির্বাচন করুন</option>
                            <option value="পুরুষ">Male</option>
                            <option value="মহিলা">Female</option>
                            <option value="অন্যান্য">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fname">পিতার নামঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="fname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fnid">পিতার জাতীয় পরিচয়পত্রের নাম্বারঃ</label>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="fnid">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="foccu">পিতার পেশাঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="foccu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fyincome">পিতার বাৎসরিক আয়ঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="fyincome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fmnum">
                            পিতার মোবইল নাম্বারঃ
                        <p class="text-danger" id="mustf" style="display: none;">Mobile number must be 11 digits.</p>
                        </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="fmnum" id="fmnum">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fmnum">মাতার নাম</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="mname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mnid">মাতার জাতীয় পরিচয়পত্রের নাম্বারঃ</label>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="mnid">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="moccu">মাতার পেশাঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="moccu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="myincome">মাতার বাৎসরিক আয়ঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="myincome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mmnum">
                            মাতার মোবাইল নাম্বারঃ
                        <p class="text-danger" id="mothermob" style="display: none;">Mobile number must be 11 digits.</p>
                        </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="mmnum" id="mothernumber">
                    </td>
                    <script>
                        setInterval(function mothernum(){
                            let show = document.getElementById("mothermob");
                            let stunumber = document.getElementById("mothernumber").value;
                            let numberlength = stunumber.length;
                            if(numberlength == 0){
                                show.style.display="none";
                            }else if (numberlength<11){
                                show.style.display="block";
                            }else if (numberlength>11){
                                show.innerHTML="Mobile number can't be over than 11 digits."
                                show.style.display="block";
                                
                            }
                            else{
                                show.style.display="none";
                            }
                        },200);
                    </script>
                </tr>
                <tr>
                    <td>
                        <label for="absens">পিতার অবর্তমানে অভিভাবকের নামঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="absens">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nationality">শিক্ষার্থীর জাতীয়তাঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="nationality" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">শিক্ষার্থীর ই-মেইলঃ(যদি থাকে)</label>
                    </td>
                    <td>
                        <input type="email" class="form-control" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="stunumber">শিক্ষার্থীর মোবাইল নাম্বারঃ(যদি থাকে)
                        <p class="text-danger" style="display: none;" id="studentmobile">Mobile number must be 11 digits.</p>
                        </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="stunumber" id="stunumber">
                    </td>
                    <script>
                        setInterval(function studentnum(){
                            let show = document.getElementById("studentmobile");
                            let stunumber = document.getElementById("stunumber").value;
                            let numberlength = stunumber.length;
                            if(numberlength == 0){
                                show.style.display="none";
                            }else if (numberlength<11){
                                show.style.display="block";
                            }else if (numberlength>11){
                                show.innerHTML="Mobile number can't be over than 11 digits."
                                show.style.display="block";
                                
                            }
                            else{
                                show.style.display="none";
                            }
                        },200);
                    </script>
                </tr>
                <tr>
                    <td>
                        <label for="religion">ধর্মঃ</label>
                    </td>
                    <td>
                        <select name="religion" id="" class="form-control" required>
                            <option value="not-selected">Select One</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Khristian">Khristian</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="blood">রক্তের গ্রুপঃ</label>
                    </td>
                    <td>
                        <select name="blood" class="form-control" id="" required>
                            <option value="not-selected">Select one</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adtype">ভর্তির পদ্ধতিঃ</label>
                    </td>
                    <td>
                        <select name="adtype" class="form-control" id="" required>
                            <option value="not-select">নির্বাচন করুন।</option>
                            <option value="Merit">মেধাক্রম</option>
                            <option value="Qouta">কোটা</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="presentadd">বর্তমান ঠিকানাঃ</label>
                    </td>
                    <td>
                        <input type="text" placeholder="বিভাগ" class="form-control" id="prediv" name="prediv" required>
                        <input type="text" placeholder="জেলা" class="form-control" id="predist" name="predist" required>
                        <input type="text" placeholder="উপজেলা" class="form-control" id="preupa" name="preupa" required>
                        <input type="text" placeholder="পৌরসভা/ইউনিয়ন" class="form-control" id="premiuni" name="premiuni" required>
                        <input type="text" placeholder="পাড়া/মহল্লা" class="form-control" id="prepara" name="prepara" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="presentadd">স্থায়ী ঠিকানাঃ</label>
                    </td>
                    <td>
                        <div class="same d-flex" >
                        <input type="checkbox" id="same" style="display: none;" onclick="sameadd()"><p id="sametext" style="display: none;">আপনার বর্তমান ও স্থায়ী ঠিকানা একই</p>
                        </div>

                        <script>
                            let divison, zilla, upazilla, miuni, para;
                            setInterval(function same(){
                                 divison=document.getElementById("prediv").value;
                                 zilla=document.getElementById("predist").value;
                                 upazila=document.getElementById("preupa").value;
                                 miuni=document.getElementById("premiuni").value;
                                 para=document.getElementById("prepara").value;
                                let divlength=divison.length;
                                let distlenght=zilla.length;
                                let upalength=upazila.length;
                                let miunilength=miuni.length;
                                let paralength=para.length;
                                if(divlength>0 && distlenght>0 && upalength>0 && miunilength>0 && paralength>0){
                                    document.getElementById("same").style.display="block";
                                    document.getElementById("sametext").style.display="block";
                                }else{
                                    document.getElementById("same").style.display="none";
                                    document.getElementById("sametext").style.display="none";
                                }
                            },200);
                            function sameadd(){
                                document.getElementById("perdiv").value=divison;
                                document.getElementById("perdist").value=zilla;
                                document.getElementById("perupa").value=upazila;
                                document.getElementById("permiuni").value=miuni;
                                document.getElementById("perpara").value=para;
                            }
                        </script>
                        <input type="text" placeholder="বিভাগ" class="form-control" id="perdiv" name="perdiv" required>
                        <input type="text" placeholder="জেলা" class="form-control" id="perdist" name="perdist" required>
                        <input type="text" placeholder="উপজেলা" class="form-control" id="perupa" name="perupa" required>
                        <input type="text" placeholder="পৌরসভা/ইউনিয়ন" class="form-control" id="permiuni" name="permiuni" required>
                        <input type="text" placeholder="পাড়া/মহল্লা" class="form-control" name="perpara" id="perpara" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="befedu">পূর্ববর্তী শিক্ষাতথ্যঃ</label>
                    </td>
                    <td>
                        <select name="befexam" class="form-control" id="" required>
                            <option value="not-select">পূর্ববর্তী পরীক্ষার নাম</option>
                            <option value="এসএসসি">SSC</option>
                            <option value="এইচএসসি">HSC</option>
                            <option value="এইচএসসি(ভোকেশনাল)">HSC(VOC)</option>
                        </select>
                        <select name="befgroup" class="form-control" id="beftrade" required onchange="showtrade()">
                            <option value="not-select">বিভাগ নির্বাচন করুন</option>
                            <option value="বিজ্ঞান">Science</option>
                            <option value="মানবিক">Humanities</option>
                            <option value="ব্যবসায়">Commerce</option>
                            <option value="ভোকেশনাল">Vocational</option>
                        </select>
                        <input type="text" id="trade" class="form-control" name="beftrade" placeholder="Trade:" value=" " style="display: none;">
                        <input type="text" class="form-control" name="befpassyear" placeholder="পাসের সন।" required>
                        <input type="text" class="form-control" name="befresult" placeholder="রেজাল্ট(জিপিএ)" required>
                        <input type="text" class="form-control" placeholder="শিক্ষাপ্রতিষ্ঠানের নাম।" name="befschool" required>
                        <input type="text" class="form-control" name="befroll" placeholder="বোর্ড রোল" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="preaddinfo">বর্তমান শিক্ষাতথ্যঃ</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="preins" value="দিনাজপুর পলিটেকনিক ইনস্টিটিউট।" readonly>
                        <input type="text" class="form-control" name="pretcode" value="৮৫(ট্রেড কোড)।" readonly>
                        <input type="text" class="form-control" name="predept" value="কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি।" readonly>
                        <select name="presem" class="form-control" id="" required>
                            <option value="not-select">পর্ব(সেমিস্টার) নির্বাচন করুন</option>
                            <option value="প্রথম">1<sup>st</sup></option>
                            <option value="দ্বিতীয়">2<sup>nd</sup></option>
                            <option value="তৃতীয়">3<sup>rd</sup></option>
                        </select>
                        <select name="preshift" class="form-control" id="" required>
                            <option value="not-select">শিফট নির্বাচন করুন</option>
                            <option value="প্রথম">1st</option>
                            <option value="দ্বিতীয়">2nd</option>
                        </select>
                        <input type="text" class="form-control" name="preroll" placeholder="বর্তমান রোল।" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="stuimage">শিক্ষার্থীর সদ্য তোলা ছবিঃ</label>
                    </td>
                    <td>
                        <input type="file" name="stuimage" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox"   required>এই মর্মে নিশ্চিত করছি যে, আমার প্রদানকৃত সকল তথ্য সঠিক।
                    </td>
                    <td>
                        <input type="submit" name="infosubmit" class="btn" style="background-color: #2c3e50; padding: 10px 40px; color: white;" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </div>

<!-- php -->
    <?php
    include 'server.php';

    if (isset($_POST['infosubmit'])) {
        $enname = $_POST['enname'];
        $bnname = $_POST['bnname'];
        $numbirthcer = $_POST['numbirthcer'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $fname = $_POST['fname'];
        $fnid = $_POST['fnid'];
        $foccu = $_POST['foccu'];
        $fyincome = $_POST['fyincome'];
        $fmnum = $_POST['fmnum'];
        $mname = $_POST['mname'];
        $mnid = $_POST['mnid'];
        $moccu = $_POST['moccu'];
        $myincome = $_POST['myincome'];
        $mmnum = $_POST['mmnum'];
        $absens = $_POST['absens'];
        $nationality = $_POST['nationality'];
        $email = $_POST['email'];
        $stunumber = $_POST['stunumber'];
        $religion = $_POST['religion'];
        $blood = $_POST['blood'];
        $adtype = $_POST['adtype'];
        $prediv = $_POST['prediv'];
        $predist = $_POST['predist'];
        $preupa = $_POST['preupa'];
        $premiuni = $_POST['premiuni'];
        $prepara = $_POST['prepara'];
        $perdiv = $_POST['perdiv'];
        $perdist = $_POST['perdist'];
        $perupa = $_POST['perupa'];
        $permiuni = $_POST['permiuni'];
        $perpara = $_POST['perpara'];
        $befexam = $_POST['befexam'];
        $befgroup = $_POST['befgroup'];
        $beftrade = $_POST['beftrade'];
        $befpassyear = $_POST['befpassyear'];
        $befresult = $_POST['befresult'];
        $befschool = $_POST['befschool'];
        $befroll = $_POST['befroll'];
        $preins = $_POST['preins'];
        $pretcode = $_POST['pretcode'];
        $predept = $_POST['predept'];
        $presem = $_POST['presem'];
        $preshift = $_POST['preshift'];
        $preroll = $_POST['preroll'];
    
        // ছবির জন্য আলাদা হ্যান্ডলিং
        $imagename=$_FILES['stuimage'];
        $filename=$imagename['name'];
        $filepath=$imagename['tmp_name'];
        $fileerror=$imagename['error'];
        $fileextenson=explode('.',$filename);
        $format=strtolower(end($fileextenson));
        $extarray=array('jpg','png','jpeg');
        $checkext=in_array($format,$extarray);
        if($checkext){
            if($fileerror == 0){
                $upload_path="upload/". $filename;
                move_uploaded_file($filepath, $upload_path);
                $rollquery="select beforeroll from admission where beforeroll=$befroll";
                $roll_q=mysqli_query($con,$rollquery);
                if(mysqli_num_rows($roll_q)>0){
                    ?>
                        <script>
                            alert("Already Submitted.");
                            window.location.href = "index.html";
                        </script>    
                    <?php
                    exit;
                }
                $query = "INSERT INTO admission (
                    studentnameng, studentnamebn, birthcertificate, dateofbirth, gender, fathername, fathernid, fatheroccupation, fatherincome, fathernumber,
                    mothername, mothernid, motheroccupation, motherincome, mothernumber, guardian, nationality, email, studentmobile, religion, bloodgroup, 
                    typead, presentdiv, presentdist, presentupa, presentpourosova, presentvillage, permanentdiv, permanentdist, permanentupa, permanentpourosova, 
                    permanentvillage, beforeexam, beforegroup, beforetrade, beforeexamyear, beforeresult, beforeschool, beforeroll, institute, tradecode, dept, semester, shift, 
                    roll, picture
                ) VALUES (
                    '$enname', '$bnname', '$numbirthcer', '$dob', '$gender', '$fname', '$fnid', '$foccu', '$fyincome', '$fmnum',
                    '$mname', '$mnid', '$moccu', '$myincome', '$mmnum', '$absens', '$nationality', '$email', '$stunumber', '$religion', '$blood',
                    '$adtype', '$prediv', '$predist', '$preupa', '$premiuni', '$prepara', '$perdiv', '$perdist', '$perupa', '$permiuni', '$perpara',
                    '$befexam', '$befgroup', '$beftrade', '$befpassyear', '$befresult', '$befschool', '$befroll', '$preins', '$pretcode', '$predept', '$presem', '$preshift', 
                    '$preroll', '$upload_path'
                )";
                $check=mysqli_query($con, $query);
                if($check){
                    ?>
                    <?php
                    $to_email=$email;
                    $subject="Successfully submit your admission form.";
                    $message="Dear $enname, your admission form have submitted successfully. Thank you. Department of Computer Science and Technology.";
                    $header="borshon.k.2004@gmail.com";
                    mail($to_email, $subject, $message, $header);
                    // session
                   $_SESSION['enname']=$enname;
                   $_SESSION['bnname']=$bnname;
                   $_SESSION['numbirthcer']=$numbirthcer;
                   $_SESSION['dob']=$dob;
                   $_SESSION['gender']=$gender;
                   $_SESSION['fname']=$fname;
                   $_SESSION['fnid']=$fnid;
                   $_SESSION['foccu']=$foccu;
                   $_SESSION['fyincome']=$fyincome;
                   $_SESSION['fmnum']=$fmnum;
                   $_SESSION['mname']=$mname;
                   $_SESSION['mnid']=$mnid;
                   $_SESSION['moccu']=$moccu;
                   $_SESSION['myincome']=$myincome;
                   $_SESSION['mmnum']=$mmnum;
                   $_SESSION['absens']=$absens;
                   $_SESSION['nationality']=$nationality;
                   $_SESSION['email']=$email;
                   $_SESSION['stunumber']=$stunumber;
                   $_SESSION['religion']=$religion;
                   $_SESSION['blood']=$blood;
                   $_SESSION['adtype']=$adtype;
                   $_SESSION['prediv']=$prediv;
                   $_SESSION['predist']=$predist;
                   $_SESSION['preupa']=$preupa;
                   $_SESSION['premiuni']=$premiuni;
                   $_SESSION['prepara']=$prepara;
                   $_SESSION['perdiv']=$perdiv;
                   $_SESSION['perdist']=$perdist;
                   $_SESSION['perupa']=$perupa;
                   $_SESSION['permiuni']=$permiuni;
                   $_SESSION['perpara']=$perpara;
                   $_SESSION['befexam']=$befexam;
                   $_SESSION['befgroup']=$befgroup;
                   $_SESSION['beftrade']=$beftrade;
                   $_SESSION['befpassyear']=$befpassyear;
                   $_SESSION['befresult']=$befresult;
                   $_SESSION['befschool']=$befschool;
                   $_SESSION['befroll']=$befroll;
                   $_SESSION['preins']=$preins;
                   $_SESSION['pretcode']=$pretcode;
                   $_SESSION['predept']=$predept;
                   $_SESSION['presem']=$presem;
                   $_SESSION['preshift']=$preshift;
                   $_SESSION['preroll']=$preroll;
                   $_SESSION['upload_path']=$upload_path;
                    ?>
                    <script>
                        alert("Upload successful");
                        document.getElementById("adform").reset();
                    setTimeout(function() {
                      location.replace("http://localhost/Php/Computer%20Science%20And%20Technology/admissioninfo.php");
                     }, 2000); // 2 সেকেন্ড পরে রিডিরেক্ট হবে
                    </script>

                    <?php
                    
                    
                }else{
                    ?>
                    <script>
                        alert("Upload Failed");
                    </script>
                    <?php
                }
            }
        }else{
            ?>
            <script>
                alert("Image extenson must be jpg/jpeg/png format upload again.")
            </script>
            <?php
        }

        
        

    }

    
     ?>

     
      <footer>
        <p>&copy; 2025 Computer Science and Technology Department</p>
      </footer>
    <script>
        function showtrade(){
           let beftradevalue = document.getElementById("beftrade").value;
           if(beftradevalue === "ভোকেশনাল"){
            document.getElementById("trade").style.display="block";
           }else{
            document.getElementById("trade").style.display="none";
           }
        }
        setInterval(function must(){
            let must=document.getElementById("mustf");
            let fmnum=document.getElementById("fmnum").value;
            let fmnumlength=fmnum.length;
            if(fmnumlength === 0){
                must.style.display="none";
            }else if(fmnumlength<11){
                must.style.display="block";
            }else if(fmnumlength>11){
                must.innerHTML="Mobile number can't be over than 11 digits";
                must.style.display="block";
            }else if(fmnumlength === 11){
                must.style.display="none";
            }else{
                must.style.display="none";
            }
        }, 200);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>