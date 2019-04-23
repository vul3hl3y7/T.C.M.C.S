<?php
    header("Content-Type:text/html; charset=utf-8");
?>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <title>中醫體質問卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="redirect">
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
        $all_ti_zhi = array(
            array("平和體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("氣虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("陽虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("陰虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("痰濕體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("濕熱體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("血瘀體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("氣鬱體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("特稟體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61")/*,
            array("基本是平和體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向氣虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向陽虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向陰虛體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向痰濕體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向濕熱體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向血瘀體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向氣鬱體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61"),
            array("傾向特稟體質","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61")*/
        );

        for($i=0;$i<count($all_ti_zhi);$i++){  
            $j=0;
            $ti_zhi = $all_ti_zhi[$i][0];
            $sql = "SELECT A1,A2,A3,A4,A5,A6,A7,A8,B9,B10,B11,B12,B13,B14,C15,C16,C17,C18,C19,D20,D21,D22,D23,D24,D25,D26,D27,E29,E30,E31,E32,E33,E34,E35,E76,E77,F36,F37,F38,F39,F40,F41,F42,G43,G44,G45,G46,G47,G48,H49,H50,H51,H52,H53,H54,I55,I56,I57,I58,I59,I60,I61 FROM ti_zhi_final WHERE Type LIKE BINARY '$ti_zhi';";
            $stmt = $mysqli->prepare($sql);
            if(!$stmt->execute()){
                echo "Error on execute.";
            }
            if(!$stmt->bind_result($$all_ti_zhi[$i][1],$$all_ti_zhi[$i][2],$$all_ti_zhi[$i][3],$$all_ti_zhi[$i][4],$$all_ti_zhi[$i][5],$$all_ti_zhi[$i][6],$$all_ti_zhi[$i][7],$$all_ti_zhi[$i][8],$$all_ti_zhi[$i][9],$$all_ti_zhi[$i][10],$$all_ti_zhi[$i][11],$$all_ti_zhi[$i][12],$$all_ti_zhi[$i][13],$$all_ti_zhi[$i][14],$$all_ti_zhi[$i][15],$$all_ti_zhi[$i][16],$$all_ti_zhi[$i][17],$$all_ti_zhi[$i][18],$$all_ti_zhi[$i][19],$$all_ti_zhi[$i][20],$$all_ti_zhi[$i][21],$$all_ti_zhi[$i][22],$$all_ti_zhi[$i][23],$$all_ti_zhi[$i][24],$$all_ti_zhi[$i][25],$$all_ti_zhi[$i][26],$$all_ti_zhi[$i][27],$$all_ti_zhi[$i][28],$$all_ti_zhi[$i][29],$$all_ti_zhi[$i][30],$$all_ti_zhi[$i][31],$$all_ti_zhi[$i][32],$$all_ti_zhi[$i][33],$$all_ti_zhi[$i][34],$$all_ti_zhi[$i][35],$$all_ti_zhi[$i][36],$$all_ti_zhi[$i][37],$$all_ti_zhi[$i][38],$$all_ti_zhi[$i][39],$$all_ti_zhi[$i][40],$$all_ti_zhi[$i][41],$$all_ti_zhi[$i][42],$$all_ti_zhi[$i][43],$$all_ti_zhi[$i][44],$$all_ti_zhi[$i][45],$$all_ti_zhi[$i][46],$$all_ti_zhi[$i][47],$$all_ti_zhi[$i][48],$$all_ti_zhi[$i][49],$$all_ti_zhi[$i][50],$$all_ti_zhi[$i][51],$$all_ti_zhi[$i][52],$$all_ti_zhi[$i][53],$$all_ti_zhi[$i][54],$$all_ti_zhi[$i][55],$$all_ti_zhi[$i][56],$$all_ti_zhi[$i][57],$$all_ti_zhi[$i][58],$$all_ti_zhi[$i][59],$$all_ti_zhi[$i][60],$$all_ti_zhi[$i][61],$$all_ti_zhi[$i][62])){
                echo "Error on bind_result.";
            }
            $stmt->fetch();
            $stmt->close();
   
            for($x=1;$x<=62;$x++){
                for($y=$x+1;$y<=62;$y++) {
                    if($$all_ti_zhi[$i][$y]>$$all_ti_zhi[$i][$x]) {
                        $temp=$all_ti_zhi[$i][$x];
                        $all_ti_zhi[$i][$x]=$all_ti_zhi[$i][$y];
                        $all_ti_zhi[$i][$y]=$temp;
                    }
                }
            }
        }
            //題目排序 每類別判決性最大題
            /*for($i=0;$i<9;$i++) //遊走第一維陣列  
            {
                echo $all_ti_zhi[$i][0]." ".$all_ti_zhi[$i][1]." "."<br>";
            }
            echo "<br>";*/
            $mysqli->close();
        
        /*分隔線*/
        $ti_zhi_answer_sheet = array("id","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61");
        $ti_zhi_question_table = array("A1"=>1,
                                     "A2"=>2,
                                     "A3"=>3,
                                     "A4"=>4,
                                     "A5"=>5,
                                     "A6"=>6,
                                     "A7"=>7,
                                     "A8"=>8,
                                     "B9"=>9,
                                     "B10"=>10,
                                     "B11"=>11,
                                     "B12"=>12,
                                     "B13"=>13,
                                     "B14"=>14,
                                     "C15"=>15,
                                     "C16"=>16,
                                     "C17"=>17,
                                     "C18"=>18,
                                     "C19"=>19,
                                     "D20"=>20,
                                     "D21"=>21,
                                     "D22"=>22,
                                     "D23"=>23,
                                     "D24"=>24,
                                     "D25"=>25,
                                     "D26"=>26,
                                     "D27"=>27,
                                     "E29"=>28,
                                     "E30"=>29,
                                     "E31"=>30,
                                     "E32"=>31,
                                     "E33"=>32,
                                     "E34"=>33,
                                     "E35"=>34,
                                     "E76"=>35,
                                     "E77"=>36,
                                     "F36"=>37,
                                     "F37"=>38,
                                     "F38"=>39,
                                     "F39"=>40,
                                     "F40"=>41,
                                     "F41"=>42,
                                     "F42"=>43,
                                     "G43"=>44,
                                     "G44"=>45,
                                     "G45"=>46,
                                     "G46"=>47,
                                     "G47"=>48,
                                     "G48"=>49,
                                     "H49"=>50,
                                     "H50"=>51,
                                     "H51"=>52,
                                     "H52"=>53,
                                     "H53"=>54,
                                     "H54"=>55,
                                     "I55"=>56,
                                     "I56"=>57,
                                     "I57"=>58,
                                     "I58"=>59,
                                     "I59"=>60,
                                     "I60"=>61,
                                     "I61"=>62
                                     );
        $ti_zhi_RADAR = array(0,0,0,0,0,0,0,0,0);
        for($i = 0; $i < 9; $i++){
            $ti_zhi_RADAR[$i] = $_POST[$all_ti_zhi[$i][0]];
        }
        $temp = $_POST['num']+1;
        if($_POST['num'] < 9)
        {
            $ti_zhi_RADAR[$_POST['num']] = $ti_zhi_RADAR[$_POST['num']] + 1;
            $question = $ti_zhi_question_table[$all_ti_zhi[$_POST['num']][1]];
            if($_POST['num']!=0){
                $last_question = $ti_zhi_question_table[$all_ti_zhi[$_POST['num']-1][1]];
            }
        }
        else
        {
            if($_POST['num'] == 9)
            {
               $i = 0;
               while($i < 9)
               {    
                   if($_POST[ $ti_zhi_answer_sheet[ $ti_zhi_question_table[ $all_ti_zhi[$i][1] ] ] ] > 3)
                    {
                    $ti_zhi_RADAR[$i] = $ti_zhi_RADAR[$i] + 1;
                    $question = $ti_zhi_question_table[ $all_ti_zhi[$i][$ti_zhi_RADAR[$i]] ];
                    $last_question = $ti_zhi_question_table[$all_ti_zhi[$_POST['num']-1][1]];
                    $i = 10;
                    }
                    else
                    {
                        $i++;
                    }
               }   
            }
            elseif($_POST['value'] <= 3)
            {
               $i = 0;
               $question_state = 0;
               while($i < 9)
               {    if($ti_zhi_RADAR[$i] == 1 && $_POST[ $ti_zhi_answer_sheet[ $ti_zhi_question_table[ $all_ti_zhi[$i][1] ] ] ] > 3)
                    {
                    $ti_zhi_RADAR[$i] = $ti_zhi_RADAR[$i] + 1;
                    $question = $ti_zhi_question_table[ $all_ti_zhi[$i][$ti_zhi_RADAR[$i]] ];
                    $question_state++;
                        
                        $j = 9;
                        while($j >= 0)
                        {
                            if($ti_zhi_RADAR[$j] != 1)
                            {
                            $last_question = $ti_zhi_question_table[$all_ti_zhi[$i][$ti_zhi_RADAR[$i]]];
                            $j = -1;
                            }
                            else
                            {
                                $j--;
                            }
                        }
                    }
                    $i++;
                    if($i == 9 && $question_state == 0)
                    {
                        $question = -1;                      
                    }
               }
            }
            elseif($_POST['value'] >= 3)
            {
           //    echo "進來了<br>";
               $i = 9;
               while($i >= 0)
               {
            //        echo $i."<br>";
                if($ti_zhi_RADAR[$i] > 1)
                {
            //         echo "當前體質下題目數".$ti_zhi_RADAR[$i]."<br>";
                    $ti_zhi_RADAR[$i] = $ti_zhi_RADAR[$i] + 1;
                    $question = $ti_zhi_question_table[ $all_ti_zhi[$i][$ti_zhi_RADAR[$i]] ];
                    $last_question = $ti_zhi_question_table[$all_ti_zhi[$i][$ti_zhi_RADAR[$i] - 1]];
                    $i = -1; // Illegal offset type
                }
                else
                {
                    $i--;
                }
               }
            }
        }
        if($question==$last_question||$_POST[$ti_zhi_answer_sheet[$question]]!=$ti_zhi_answer_sheet[$question]){
            echo "<div>";
            echo "<form class=\"form\" name=\"auto\" action=\"ti_zhi_redirect.php\" method=\"post\">";
        //    echo "<button class=\"btn btn-large btn-primary\" type=\"submit\">press here</button><br>"; //Bug用
            echo "<input type=\"hidden\" name=\"num\" value=\"".$temp."\">";
            echo "<input type=\"hidden\" name=\"question\" value=\"".$question."\">";
            for($i = 0; $i < 9; $i++){
                echo "<input type=\"hidden\" name=".$all_ti_zhi[$i][0]." value=".$ti_zhi_RADAR[$i].">";
                //echo $all_ti_zhi[$i][0].": ".$ti_zhi_RADAR[$i]."<br>";
            }
            foreach ($ti_zhi_answer_sheet as $key => $value){
                if(($key != 0) && ($key) == $last_question){
                    echo "<input type=\"hidden\" name=".$value." value=".$_POST['value'].">";
                    //echo "value =".$value." \$_POST['value']=".$_POST['value']."<br>";
                }
                else {
                    echo "<input type=\"hidden\" name=".$value." value=".$_POST[$value].">";
                    //echo "value =".$value." \$_POST[$value]=".$_POST[$value]."<br>";
                }
            }
            if($question==$last_question){
                echo "<input type=\"hidden\" name=\"value\" value=".$_POST['value'].">";
            }
            else {
                echo "<input type=\"hidden\" name=\"value\" value=".$_POST[$ti_zhi_answer_sheet[$question]].">";                
            }
            echo "</form>";
            echo "</div>";
        }
        else{
            echo "<div>";
            echo "<form class=\"form\" name=\"auto\" action=\"ti_zhi_survey.php\" method=\"post\">";
          //  echo "<button class=\"btn btn-large btn-primary\" type=\"submit\">press here</button><br>"; //bug用
            echo "<input type=\"hidden\" name=\"num\" value=\"".$temp."\">";
            echo "<input type=\"hidden\" name=\"question\" value=\"".$question."\">";
            for($i = 0; $i < 9; $i++){
                echo "<input type=\"hidden\" name=".$all_ti_zhi[$i][0]." value=".$ti_zhi_RADAR[$i].">";
                //echo $all_ti_zhi[$i][0].": ".$ti_zhi_RADAR[$i]."<br>";
            }


            foreach ($ti_zhi_answer_sheet as $key => $value){
                if(($key != 0) && ($key) == $last_question){
                    echo "<input type=\"hidden\" name=".$value." value=".$_POST['value'].">";
                    //echo "value =".$value." \$_POST['value']=".$_POST['value']."<br>";
                }
                else {
                    echo "<input type=\"hidden\" name=".$value." value=".$_POST[$value].">";
                    //echo "value =".$value." \$_POST[$value]=".$_POST[$value]."<br>";
                }
            }
            echo "<input type=\"hidden\" name=\"value\" value=".$_POST["value"].">";
            echo "</form>";
            echo "</div>";
        }
            //假表單
            echo "<div class=\"inside\">";
            
            echo "<table border=\"0\" width=\"100%\"><tr valign = \"top\"><td  style = \"width:60%\">";
            echo "<h3>問卷熊貓墨默</h3>";
            echo "<blockquote>";
            echo "<div id=\"wrap\"><p>　　　　　　　　　　\n</p></div>";
            echo "</blockquote>";
            echo "<div></div>";
            echo "</td>";
            echo "<td style=\"width:40%\">";
            echo "<img src=\"http://localhost/phpsurvey/03.gif\" width= 400px>";
            echo "</td></tr></table>";
            echo "<progress max=64 value=".$_POST['num']." width= 500px  height= 20px></progress>";
            
            echo "</div>";
        ?>
    </div> <!-- /container -->
    
    <SCRIPT LANGUAGE="JavaScript">
        var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
        if(isMobile) {
            document.getElementById("container").className = "container_moble";
        }
        auto.submit();
    </SCRIPT>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://localhost/bootstrap/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="http://localhost/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>