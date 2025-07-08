<?php
session_start();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <title>Student Admission Form</title>
  <style>
    body {
      background: #eee;
      padding: 20px;
      font-family: sans-serif;
    }

    .a4-page {
      width: 794px; /* প্রায় 210mm */
      height: auto; /* প্রায় 297mm */
      background: white;
      padding-top: 10px;
      padding-bottom: 0px;
      margin: 0 auto;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
      overflow: hidden;
      padding-right: 5px;
      border-radius: 12px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #000;
      padding: 8px;
    }

    thead {
      background-color: #f0f0f0;
    }

    @media print {
      body {
        background: none;
        padding: 0;
      }
      .print-button{
        display: none;
      }
      .a4-page {
        margin: 0;
        box-shadow: none;
        page-break-after: always;
      }
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="admissionifo.css">
</head>
<body>
  <div class="print-button">
    <button onclick="window.print();">প্রিন্ট করুন</button>
  </div>
  <div class="a4-page">
    
  <div class="header-part">
    <div class="header-text text-center">
      <h4 class="text-center" style="color:green;">দিনাজপুর পলিটেকনিক ইনস্টিটিউট</h4>
      <p style="font-weight: bold;">কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি(৮৫)</p>
      <h5 style="font-weight: bold;"><u>শিক্ষার্থীর ভর্তি ফরম</u></h5>
    </div>
    
    <div class="header-img">
      <img src="<?php
          if(isset($_SESSION['upload_path'])){
            echo $_SESSION['upload_path'];
          }
          ?>" style="height: 130px; width: 120px;" alt="">
    </div>
  </div>
    <!-- table part -->
     <table class="table table-striped table-bordered">
      <tr>
        <td class="fw">শিক্ষার্থীর নাম(বাংলা)</td>
        <td colspan="3">
          <?php
            if(isset($_SESSION['bnname'])){
              echo $_SESSION['bnname'];
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">শিক্ষার্থীর নাম(ইংরেজি)</td>
        <td colspan="3">
          <?php
              if(isset($_SESSION['enname'])){
                echo $_SESSION['enname'];
              }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">জন্মসনদের নাম্বার</td>
        <td>
          <?php
          if(isset($_SESSION['numbirthcer'])){
            echo $_SESSION['numbirthcer'];
          }
          ?>
        </td>
        <td class="fr">রক্তের গ্রুপ</td>
        <td>
        <?php
          if(isset($_SESSION['blood'])){
            echo $_SESSION['blood'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">শিক্ষার্থীর জন্মতারিখ</td>
        <td>
        <?php
          if(isset($_SESSION['dob'])){
            echo $_SESSION['dob'];
          }
          ?>
        </td>
        <td> লিঙ্গ</td>
        <td>
        <?php
          if(isset($_SESSION['gender'])){
            echo $_SESSION['gender'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">শিক্ষার্থীর জাতীয়তা</td>
        <td>
        <?php
          if(isset($_SESSION['nationality'])){
            echo $_SESSION['nationality'];
          }
          ?>
        </td>
        <td class="fr">মোবাইল নম্বর</td>
        <td>
        <?php
          if(isset($_SESSION['stunumber'])){
            echo $_SESSION['stunumber'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <tr class="text-center">
          <td colspan="2">পিতা</td>
          <td colspan="2">মাতা</td>
        </tr>
      <tr>
        <td class="fw">নাম</td>
        <td>
        <?php
          if(isset($_SESSION['fname'])){
            echo $_SESSION['fname'];
          }
          ?>
        </td>
        <td class="fr">নাম</td>
        <td>
        <?php
          if(isset($_SESSION['mname'])){
            echo $_SESSION['mname'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">এনআইডি</td>
        <td>
        <?php
          if(isset($_SESSION['fnid'])){
            echo $_SESSION['fnid'];
          }
          ?>
        </td>
        <td class="fr">এনআইডি</td>
        <td>
        <?php
          if(isset($_SESSION['mnid'])){
            echo $_SESSION['mnid'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">পেশা</td>
        <td>
        <?php
          if(isset($_SESSION['foccu'])){
            echo $_SESSION['foccu'];
          }
          ?>
        </td>
        <td class="fr">পেশা</td>
        <td>
        <?php
          if(isset($_SESSION['moccu'])){
            echo $_SESSION['moccu'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">বাৎসরিক আয়</td>
        <td>
        <?php
          if(isset($_SESSION['fyincome'])){
            echo $_SESSION['fyincome'];
          }
          ?>
        </td>
        <td class="fr" style="font-size: 13px;">বাৎসরিক আয়</td>
        <td>
        <?php
          if(isset($_SESSION['myincome'])){
            echo $_SESSION['myincome'];
          }
          ?>
        </td>
      </tr>
      <tr>
      <tr>
        <td class="fw">মোবাইল নম্বর</td>
        <td>
        <?php
          if(isset($_SESSION['fmnum'])){
            echo $_SESSION['fmnum'];
          }
          ?>
        </td>
        <td class="fr">মোবাইল নম্বর</td>
        <td>
        <?php
          if(isset($_SESSION['mmnum'])){
            echo $_SESSION['mmnum'];
          }
          ?>
        </td>
      </tr>
      </tr>
      <tr>
        <td class="fw">ধর্ম</td>
        <td colspan="3">
        <?php
          if(isset($_SESSION['religion'])){
            echo $_SESSION['religion'];
          }
          ?>
        </td>
      </tr>
      <tr>
        <td class="fw">ভর্তির পদ্ধতি</td>
        <td colspan="3">
        <?php
          if(isset($_SESSION['adtype'])){
            echo $_SESSION['adtype'];
          }
          ?>
        </td>
      </tr>
      <tr class="text-center">
          <td colspan="2">বর্তমান ঠিকানা</td>
          <td colspan="2">স্থায়ী ঠিকানা</td>
        </tr>
        <tr>
          <td class="fw">বিভাগ</td>
          <td>
          <?php
          if(isset($_SESSION['prediv'])){
            echo $_SESSION['prediv'];
          }
          ?>
          </td>
          <td class="fw">বিভাগ</td>
          <td>
          <?php
          if(isset($_SESSION['perdiv'])){
            echo $_SESSION['perdiv'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">জেলা</td>
          <td>
          <?php
          if(isset($_SESSION['predist'])){
            echo $_SESSION['predist'];
          }
          ?>
          </td>
          <td class="fw">জেলা</td>
          <td>
          <?php
          if(isset($_SESSION['perdist'])){
            echo $_SESSION['perdist'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">উপজেলা</td>
          <td>
          <?php
          if(isset($_SESSION['preupa'])){
            echo $_SESSION['preupa'];
          }
          ?>
          </td>
          <td class="fw">উপজেলা</td>
          <td>
          <?php
          if(isset($_SESSION['perupa'])){
            echo $_SESSION['perupa'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">পৌরসভা/ইউনিয়ন</td>
          <td>
          <?php
          if(isset($_SESSION['premiuni'])){
            echo $_SESSION['premiuni'];
          }
          ?>
          </td>
          <td class="fw">পৌরসভা/ইউনিয়ন</td>
          <td>
          <?php
          if(isset($_SESSION['permiuni'])){
            echo $_SESSION['permiuni'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">পাড়া/মহল্লা</td>
          <td>
          <?php
          if(isset($_SESSION['prepara'])){
            echo $_SESSION['prepara'];
          }
          ?>
          </td>
          <td class="fw">পাড়া/মহল্লা</td>
          <td>
          <?php
          if(isset($_SESSION['perpara'])){
            echo $_SESSION['perpara'];
          }
          ?>
          </td>
        </tr>
        <tr class="text-center">
          <td colspan="2">পূর্ববর্তী শিক্ষাতথ্য</td>
          <td colspan="2">বর্তমান শিক্ষাতথ্য</td>
        </tr>
        <tr>
          <td class="fw">শিক্ষাপ্রতিষ্ঠানের নাম</td>
          <td>
          <?php
          if(isset($_SESSION['befschool'])){
            echo $_SESSION['befschool'];
          }
          ?>
          </td>
          <td class="fw">শিক্ষাপ্রতিষ্ঠানের নাম</td>
          <td style="font-size: 13px;">দিনাজপুর পলিটেকনিক ইনস্টিটিউট</td>
        </tr>
        <tr>
          <td class="fw">বিভাগ</td>
          <td>
          <?php
          if(isset($_SESSION['befgroup'])){
            echo $_SESSION['befgroup'];
          }
          ?>
          </td>
          <td class="fw">বিভাগ</td>
          <td style="font-size: 13px;">কম্পিউটার সায়েন্স অ্যান্ড টেকনোলজি</td>
        </tr>
        <tr>
          <td class="fw">পাসের সন</td>
          <td>
          <?php
          if(isset($_SESSION['befpassyear'])){
            echo $_SESSION['befpassyear'];
          }
          ?>
          </td>
          <td class="fr">ট্রেড কোড</td>
          <td>৮৫</td>
        </tr>
        <tr>
          <td class="fw">রেজাল্ট</td>
          <td>
          <?php
          if(isset($_SESSION['befresult'])){
            echo $_SESSION['befresult'];
          }
          ?>
          </td>
          <td class="fr">পর্ব</td>
          <td>
          <?php
          if(isset($_SESSION['presem'])){
            echo $_SESSION['presem'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">পরীক্ষার নাম</td>
          <td>
          <?php
          if(isset($_SESSION['befexam'])){
            echo $_SESSION['befexam'];
          }
          ?>
          </td>
          <td class="fr">শিফট</td>
          <td>
          <?php
          if(isset($_SESSION['preshift'])){
            echo $_SESSION['preshift'];
          }
          ?>
          </td>
        </tr>
        <tr>
          <td class="fw">বোর্ড রোল</td>
          <td>
          <?php
          if(isset($_SESSION['befroll'])){
            echo $_SESSION['befroll'];
          }
          ?>
          </td>
          <td class="fr">রোল</td>
          <td>
          <?php
          if(isset($_SESSION['preroll'])){
            echo $_SESSION['preroll'];
          }
          ?>
          </td>
        </tr>
        
      
     </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
