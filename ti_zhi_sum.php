<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <title>中醫體質問卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="end">
    <meta name="author" content="Hoelen den Mond">
    <link rel="shortcut icon" href="icon.ico" />
    <!-- Le styles -->
    <link href="http://localhost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
   <style type="text/css">
      body {
        padding-top: 90px;
        padding-bottom: 60px;
        font-size: 20px;
      }
      #wrap{word-wrap:break-word; width:600px;}
      progress[value] {
        width: 80%;
        height: 10%;
      }
      .inside {
          background-color: rgba(100%,100%,100%,0.6);
          width:85%;
          padding: 0.5% 0.5% 0.5% 0.5%;
      }
      .container_moble {
        width: 240px;
        height: 360px;
      }
    </style>
    <link "http://localhost/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
    <script type="text/javascript">
        var yudan_bg = new Array(14);
        yudan_bg[0]="http://localhost/phpsurvey/bamboo/01.jpg";
        yudan_bg[1]="http://localhost/phpsurvey/bamboo/02.jpg";
        yudan_bg[2]="http://localhost/phpsurvey/bamboo/03.jpg";
        yudan_bg[3]="http://localhost/phpsurvey/bamboo/04.jpg";
        yudan_bg[4]="http://localhost/phpsurvey/bamboo/05.jpg";
        yudan_bg[5]="http://localhost/phpsurvey/bamboo/06.jpg";
        yudan_bg[6]="http://localhost/phpsurvey/bamboo/07.jpg";
        yudan_bg[7]="http://localhost/phpsurvey/bamboo/08.jpg";
        yudan_bg[8]="http://localhost/phpsurvey/bamboo/09.jpg";
        yudan_bg[9]="http://localhost/phpsurvey/bamboo/10.jpg";
        yudan_bg[10]="http://localhost/phpsurvey/bamboo/11.jpg";
        yudan_bg[11]="http://localhost/phpsurvey/bamboo/12.jpg";
        yudan_bg[12]="http://localhost/phpsurvey/bamboo/13.jpg";
        yudan_bg[13]="http://localhost/phpsurvey/bamboo/14.jpg";
        index = Math.floor(Math.random() * yudan_bg.length);
        document.body.style.background = "url(\""+yudan_bg[index]+"\")";
    </script>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#"><h1>中醫體質問卷<small>T.C.M.C.S.</small></h1></a>
        </div>
      </div>
    </div>
    <div class="container">
        
<?php
$mysqli = new  mysqli("localhost","root","0000");
$mysqli->select_db("history");
if($mysqli->errno == 0){            
}
else{
    echo "The Connection is Error!";
}
$all_ti_zhi = array("平和體質","氣虛體質","陽虛體質","陰虛體質","痰濕體質","濕熱體質","血瘀體質","氣鬱體質","特稟體質",/*"基本是平和體質","傾向氣虛體質","傾向陽虛體質","傾向陰虛體質","傾向痰濕體質","傾向濕熱體質","傾向血瘀體質","傾向氣鬱體質","傾向特稟體質"*/);
$ti_zhi_array2 = array("A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61");

$sql = "SELECT AVG(A1),AVG(A2),AVG(A3),AVG(A4),AVG(A5),AVG(A6),AVG(A7),AVG(A8),AVG(B9),AVG(B10),AVG(B11),AVG(B12),AVG(B13),AVG(B14),AVG(C15),AVG(C16),AVG(C17),AVG(C18),AVG(C19),AVG(D20),AVG(D21),AVG(D22),AVG(D23),AVG(D24),AVG(D25),AVG(D26),AVG(D27),AVG(E29),AVG(E30),AVG(E31),AVG(E32),AVG(E33),AVG(E34),AVG(E35),AVG(E76),AVG(E77),AVG(F36),AVG(F37),AVG(F38),AVG(F39),AVG(F40),AVG(F41),AVG(F42),AVG(G43),AVG(G44),AVG(G45),AVG(G46),AVG(G47),AVG(G48),AVG(H49),AVG(H50),AVG(H51),AVG(H52),AVG(H53),AVG(H54),AVG(I55),AVG(I56),AVG(I57),AVG(I58),AVG(I59),AVG(I60),AVG(I61) FROM ti_zhi WHERE Type1 LIKE BINARY '$ti_zhi' OR Type2 LIKE BINARY '$ti_zhi' OR Type3 LIKE BINARY '$ti_zhi' OR Type4 LIKE BINARY '$ti_zhi' OR Type5 LIKE BINARY '$ti_zhi' OR Type6 LIKE BINARY '$ti_zhi' OR Type7 LIKE BINARY '$ti_zhi' OR Type8 LIKE BINARY '$ti_zhi' OR Type9 LIKE BINARY '$ti_zhi' OR Type10 LIKE BINARY '$ti_zhi' OR Type11 LIKE BINARY '$ti_zhi' OR Type12 LIKE BINARY '$ti_zhi' OR Type13 LIKE BINARY '$ti_zhi' OR Type14 LIKE BINARY '$ti_zhi' OR Type15 LIKE BINARY '$ti_zhi' OR Type16 LIKE BINARY '$ti_zhi' OR Type17 LIKE BINARY '$ti_zhi' ;";
$stmt = $mysqli->prepare($sql);
if(!$stmt->execute()){
    echo "Error on execute.";
}

$ti_zhi_array = array("A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61");

if(!$stmt->bind_result($$ti_zhi_array[0],$$ti_zhi_array[1],$$ti_zhi_array[2],$$ti_zhi_array[3],$$ti_zhi_array[4],$$ti_zhi_array[5],$$ti_zhi_array[6],$$ti_zhi_array[7],$$ti_zhi_array[8],$$ti_zhi_array[9],$$ti_zhi_array[10],$$ti_zhi_array[11],$$ti_zhi_array[12],$$ti_zhi_array[13],$$ti_zhi_array[14],$$ti_zhi_array[15],$$ti_zhi_array[16],$$ti_zhi_array[17],$$ti_zhi_array[18],$$ti_zhi_array[19],$$ti_zhi_array[20],$$ti_zhi_array[21],$$ti_zhi_array[22],$$ti_zhi_array[23],$$ti_zhi_array[24],$$ti_zhi_array[25],$$ti_zhi_array[26],$$ti_zhi_array[27],$$ti_zhi_array[28],$$ti_zhi_array[29],$$ti_zhi_array[30],$$ti_zhi_array[31],$$ti_zhi_array[32],$$ti_zhi_array[33],$$ti_zhi_array[34],$$ti_zhi_array[35],$$ti_zhi_array[36],$$ti_zhi_array[37],$$ti_zhi_array[38],$$ti_zhi_array[39],$$ti_zhi_array[40],$$ti_zhi_array[41],$$ti_zhi_array[42],$$ti_zhi_array[43],$$ti_zhi_array[44],$$ti_zhi_array[45],$$ti_zhi_array[46],$$ti_zhi_array[47],$$ti_zhi_array[48],$$ti_zhi_array[49],$$ti_zhi_array[50],$$ti_zhi_array[51],$$ti_zhi_array[52],$$ti_zhi_array[53],$$ti_zhi_array[54],$$ti_zhi_array[55],$$ti_zhi_array[56],$$ti_zhi_array[57],$$ti_zhi_array[58],$$ti_zhi_array[59],$$ti_zhi_array[60],$$ti_zhi_array[61])){
    echo "Error on bind_result.";
}

$stmt->close();
 
$sql2 = "UPDATE ti_zhi_final SET A1 = '$A1', A2 = '$A2',A3 = '$A3.',A4 = '$A4.',A5 = '$A5.',A6 = '$A6.',A7 = '$A7.',A8 = '$A8.',B9 = '$B9.',B10 = '$B10.',B11 = '$B11.',B12 = '$B12.',B13 = '$B13.',B14 = '$B14.',C15 = '$C15.',C16 = '$C16.',C17 = '$C17.',C18 = '$C18.',C19 = '$C19.',D20 = '$D20.',D21 = '$D21.',D22 = '$D22.',D23 = '$D23.',D24 = '$D24.',D25 = '$D25.',D26 = '$D26.',D27 = '$D27.',E29 = '$E29.',E30 = '$E30.',E31 = '$E31.',E32 = '$E32.',E33 = '$E33.',E34 = '$E34.',E35 = '$E35.',E76 = '$E76.',E77 = '$E77.',F36 = '$F36.',F37 = '$F37.',F38 = '$F38.',F39 = '$F39.',F40 = '$F40.',F41 = '$F41.',F42 = '$F42.',G43 = '$G43.',G44 = '$G44.',G45 = '$G45.',G46 = '$G46.',G47 = '$G47.',G48 = '$G48.',H49 = '$H49.',H50 = '$H50.',H51 = '$H51.',H52 = '$H52.',H53 = '$H53.',H54 = '$H54.',I55 = '$I55.',I56 = '$I56.',I57 = '$I57.',I58 = '$I58.',I59 = '$I59.',I60 = '$I60.',I61 = '$I61.' WHERE Type LIKE BINARY '$ti_zhi'";
$stmt2 = $mysqli->prepare($sql2);
if(!$stmt2->execute()){
    echo "Error on execute.";
}
$stmt2->close();

$final_ti_zhi = array("","","","","","","","","");
$final_ti_zhi_2 = array("","","","","","","","","");
$sql3 ="SELECT Type1,Type2,Type3,Type4,Type5,Type6,Type7,Type8,Type9 FROM ti_zhi";
$stmt3 = $mysqli->prepare($sql3);
if(!$stmt3->execute()){
    echo "Error on execute.";
}
if(!$stmt3->bind_result($final_ti_zhi[0],$final_ti_zhi[1],$final_ti_zhi[2],$final_ti_zhi[3],$final_ti_zhi[4],$final_ti_zhi[5],$final_ti_zhi[6],$final_ti_zhi[7],$final_ti_zhi[8])){
    echo "Error on bind_result.";
}

while ($stmt3->fetch()){
    $final_ti_zhi_2[0]=$final_ti_zhi[0];
    $final_ti_zhi_2[1]=$final_ti_zhi[1];
    $final_ti_zhi_2[2]=$final_ti_zhi[2];
    $final_ti_zhi_2[3]=$final_ti_zhi[3];
    $final_ti_zhi_2[4]=$final_ti_zhi[4];
    $final_ti_zhi_2[5]=$final_ti_zhi[5];
    $final_ti_zhi_2[6]=$final_ti_zhi[6];
    $final_ti_zhi_2[7]=$final_ti_zhi[7];
    $final_ti_zhi_2[8]=$final_ti_zhi[8];
}
$stmt3->close();
//testing
$mysqli->close();

            echo "<div class=\"inside\">";
            echo "<table border=\"0\" width=\"100%\"><tr valign = \"top\"><td  style = \"width:60%\">";
            echo "<h3>問卷熊貓墨默</h3>";
            echo "<blockquote>";
            echo "<div id=\"wrap\"><h3><p>感謝您協助完成這份問卷！\n</p></h3></div>";
            // 告訴使用者的體質為何
            echo "<div id=\"wrap\"><h3><p>您的體質屬於";
echo $final_ti_zhi_2[0];
echo $final_ti_zhi_2[1];
echo $final_ti_zhi_2[2];
echo $final_ti_zhi_2[3];
echo $final_ti_zhi_2[4];
echo $final_ti_zhi_2[5];
echo $final_ti_zhi_2[6];
echo $final_ti_zhi_2[7];
echo $final_ti_zhi_2[8];
            echo "。</p></h3></div>";

            echo "</blockquote>";
            echo "<div></div>";
            echo "</td>";
            echo "<td style=\"width:40%\">";
            echo "<img src=\"http://localhost/phpsurvey/04.gif\" width= 400px>";
            echo "</td></tr></table>";
            echo "<progress max=64 value=".$_POST['num']." width= 500px  height= 20px></progress>";
            echo "</div>";
?>
        
        
    </div>
    
    <SCRIPT LANGUAGE="JavaScript">
        var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
        if(isMobile) {
            document.getElementById("container").className = "container_moble";
        }
    </SCRIPT>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://localhost/bootstrap/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="http://localhost/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>