<?php
    header("Content-Type:text/html; charset=utf-8");
?>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <title>中醫體質問卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="survey">
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
            $question = array("讓我們開始問卷吧?",
                              "請問您精力充沛嗎?",
                              "請問您容易疲乏嗎?",
                              "請問您說話聲音低弱無力嗎?",
                              "請問你悶悶不樂，情緒低沉嗎?",
                              "請問您比一般人耐受不了寒冷(冬天的寒冷，夏天的冷空調、電扇等)?",
                              "請問您能適應外界自然和社會的環境變化?",
                              "請問您容易失眠嗎?",
                              "請問您容易忘事(健忘)嗎?",	
                              "請問您容易氣短(呼吸短促，接不上氣)嗎?",
                              "請問您容易心慌嗎?",
                              "請問您容易頭暈或站起時暈眩嗎?",
                              "請問您比別人容易患感冒嗎?",
                              "請問您喜歡安靜、懶得說話嗎?",
                              "請問您活動量稍大就容易出虛汗嗎?",
                              "請問您手腳發涼嗎?",
                              "請問您胃脘(上腹)部、背部或腰膝部怕冷嗎?",
                              "請問您感到怕冷、衣服比別人穿得多嗎?",
                              "請問您吃(喝)涼的東西會感到不舒服或怕吃(喝)涼的嗎?",
                              "請問您受涼或吃(喝)涼的東西后，容易腹瀉、拉肚子嗎?",
                              "請問您感到手腳心發熱嗎?",
                              "請問您感覺身體、臉上發熱嗎?",
                              "請問您皮膚或口唇乾嗎?",
                              "請問您口唇的顏色比一般人紅嗎?",
                              "請問您容易便秘或大便乾燥嗎?",
                              "請問您面部兩顴潮紅或偏紅嗎?",
                              "請問您感到眼睛乾澀嗎?",
                              "請問您感到口乾咽燥、總想喝水嗎?",
                              "請問您感到胸悶或腹部脹滿嗎?",
                              "請問您感到身體沉重不輕鬆或不爽快嗎?",
                              "請問您腹部肥滿鬆軟嗎?",
                              "請問您有額部油脂分泌多的現象嗎?",
                              "請問您上眼瞼比別人腫(上眼瞼有輕微隆起的現象)嗎?",
                              "請問您嘴裡有黏黏的感覺嗎?",
                              "請問您平時痰多，特別是感到咽喉部總有痰堵著嗎?",
                              "請問您舌苔厚膩或有舌苔厚厚的感覺嗎?",
                              "請問您面部或鼻部有油膩感或者油亮發光嗎?",
                              "請問您臉上容易生痤瘡(青春痘)或皮膚容易生瘡癤(較大顆的青春痘)嗎?",
                              "請問您感到口苦或嘴裡有異味嗎?",
                              "請問您大便黏滯不爽、有解不盡的感覺嗎?",
                              "請問您小便時尿道有發熱感、尿色濃(深)嗎?",
                              "請問您帶下色黃(白帶顏色發黃)嗎？(男性請填1沒有(根本不))",
                              "請問您的腋下、手肘、腹股溝容易潮濕嗎？(女性請填1沒有(根本不))",
                              "請問您的皮膚在不知不覺中會出現青紫瘀斑(皮下出血)嗎?",
                              "請問您的兩顴部有細微血絲嗎?",
                              "請問您身體上有哪裡疼痛嗎?",
                              "請問您面色晦黯或容易出現褐斑嗎?",
                              "請問您會出現黑眼圈嗎?",
                              "請問您口唇顏色偏黯嗎?",
                              "請問您容易感覺胸悶嗎?",
                              "請問您容易感覺腹部脹滿嗎?",
                              "請問您精神緊張、焦慮不安嗎?",
                              "請問您多愁善感、感情脆弱嗎?",
                              "請問您容易感到害怕或受到驚嚇嗎?",
                              "請問您脅肋部(腋下至肋骨盡頭)或乳房脹痛嗎?",
                              "請問您無緣無故嘆氣嗎?",
                              "請問您咽喉部有異物感，且吐之不出、咽之不下嗎?",
                              "請問您沒有感冒也會打噴嚏嗎?",
                              "請問您沒有感冒也會鼻塞、流鼻涕嗎?",
                              "請問您有因季節變化、溫度變化或異味等原因而咳喘的現象嗎?",
                              "請問您容易過敏(藥物、食物、氣味、花粉、季節交替時、氣候變化等)嗎?",
                              "請問您的皮膚起蕁痲疹（風團、風疹塊、風疙瘩）嗎?",
                              "請問您的皮膚因過敏出現過紫癜(紫紅色瘀點、瘀斑)嗎?",
                              "請問您的皮膚一抓就紅，並出現抓痕嗎?");
            $all_ti_zhi = array("平和體質","氣虛體質","陽虛體質","陰虛體質","痰濕體質","濕熱體質","血瘀體質","氣鬱體質","特稟體質",/*"基本是平和體質","傾向氣虛體質","傾向陽虛體質","傾向陰虛體質","傾向痰濕體質","傾向濕熱體質","傾向血瘀體質","傾向氣鬱體質","傾向特稟體質"*/);
            $ti_zhi_answer_sheet = array("id","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61");
            $i= count($question);
            echo "<div class=\"inside\">";
            
            echo "<table border=\"0\" width=\"100%\"><tr valign = \"top\"><td style=\"width:60%\">";
            echo "<h3>問卷熊貓墨默</h3>";
            echo "<blockquote>";
            echo "<div id=\"wrap\"><p>".$question[$_POST['question']]."\n</p></div>";
            echo "</blockquote>";
            echo "<div>";
            echo "<form class=\"form\" name=\"survey\" action=\"ti_zhi_redirect.php\" method=\"post\">";
            echo "<input type=\"hidden\" name=\"num\" value=\"".$_POST['num']."\">";
            echo "<input type=\"hidden\" name=\"question\" value=\"".$_POST['question']."\">";
            
            foreach ($all_ti_zhi as $value){
                echo "<input type=\"hidden\" name=".$value." value=".$_POST[$value].">";
                //echo $value.": ".$_POST[$value]."<br>";
            }
            foreach ($ti_zhi_answer_sheet as $value){
                echo "<input type=\"hidden\" name=".$value." value=".$_POST[$value].">";
                //echo "value =".$value." \$_POST[$value]=".$_POST[$value]."<br>";
            }
            
            if($_POST['question']==0){
                echo "<button class=\"btn btn-large btn-primary\" type=\"submit\">好的，開始吧！</button>";
            }
            elseif($_POST['question'] < 0){
                $mysqli = new  mysqli("localhost","leo82528","82528leo");
                $mysqli->select_db("history");
                if($mysqli->errno == 0){            
                }
                else{
                    echo "The Connection is Error!";
                }
                foreach ($ti_zhi_answer_sheet as $key => $value){
                    $ti_zhi_answer_sheet[$key]=$_POST[$value];
                }
                foreach ($ti_zhi_answer_sheet as $key => $value){
                    //echo $ti_zhi_answer_sheet[$key]."<br>";
                    if($key==0){
                        
                    }
                    else{
                        if($value==1||$value==2||$value==3||$value==4||$value==5){
                            $ti_zhi_answer_sheet[$key] = $value;  
                        }
                        else
                            $ti_zhi_answer_sheet[$key] = 3;
                    }
                    //echo "=>".$ti_zhi_answer_sheet[$key]."<br>";
                }
                            $max = 0;
				$max_result = 0;
				foreach ($all_ti_zhi as $value){
					echo "<input type=\"hidden\" name=".$value." value=".$_POST[$value].">";
					//echo $value.": ".$_POST[$value]."<br>";
					if($_POST[$value] > $max)
					{
						$max = $_POST[$value];
						$max_result = $value;
					}
				}
				// echo $max_result."<br>";
				foreach ($all_ti_zhi as $value){
					if($_POST[$value] == $max)
					{
						//echo $value."<br>";
					}
				}
                
                $sql = "INSERT INTO ti_zhi (id,A1,A2,A3,A4,A5,A6,A7,A8,B9,B10,B11,B12,B13,B14,C15,C16,C17,C18,C19,D20,D21,D22,D23,D24,D25,D26,D27,E29,E30,E31,E32,E33,E34,E35,E76,E77,F36,F37,F38,F39,F40,F41,F42,G43,G44,G45,G46,G47,G48,H49,H50,H51,H52,H53,H54,I55,I56,I57,I58,I59,I60,I61,Type1) VALUE ('$ti_zhi_answer_sheet[0]','$ti_zhi_answer_sheet[1]','$ti_zhi_answer_sheet[2]','$ti_zhi_answer_sheet[3]','$ti_zhi_answer_sheet[4]','$ti_zhi_answer_sheet[5]','$ti_zhi_answer_sheet[6]','$ti_zhi_answer_sheet[7]','$ti_zhi_answer_sheet[8]','$ti_zhi_answer_sheet[9]','$ti_zhi_answer_sheet[10]','$ti_zhi_answer_sheet[11]','$ti_zhi_answer_sheet[12]','$ti_zhi_answer_sheet[13]','$ti_zhi_answer_sheet[14]','$ti_zhi_answer_sheet[15]','$ti_zhi_answer_sheet[16]','$ti_zhi_answer_sheet[17]','$ti_zhi_answer_sheet[18]','$ti_zhi_answer_sheet[19]','$ti_zhi_answer_sheet[20]','$ti_zhi_answer_sheet[21]','$ti_zhi_answer_sheet[22]','$ti_zhi_answer_sheet[23]','$ti_zhi_answer_sheet[24]','$ti_zhi_answer_sheet[25]','$ti_zhi_answer_sheet[26]','$ti_zhi_answer_sheet[27]','$ti_zhi_answer_sheet[28]','$ti_zhi_answer_sheet[29]','$ti_zhi_answer_sheet[30]','$ti_zhi_answer_sheet[31]','$ti_zhi_answer_sheet[32]','$ti_zhi_answer_sheet[33]','$ti_zhi_answer_sheet[34]','$ti_zhi_answer_sheet[35]','$ti_zhi_answer_sheet[36]','$ti_zhi_answer_sheet[37]','$ti_zhi_answer_sheet[38]','$ti_zhi_answer_sheet[39]','$ti_zhi_answer_sheet[40]','$ti_zhi_answer_sheet[41]','$ti_zhi_answer_sheet[42]','$ti_zhi_answer_sheet[43]','$ti_zhi_answer_sheet[44]','$ti_zhi_answer_sheet[45]','$ti_zhi_answer_sheet[46]','$ti_zhi_answer_sheet[47]','$ti_zhi_answer_sheet[48]','$ti_zhi_answer_sheet[49]','$ti_zhi_answer_sheet[50]','$ti_zhi_answer_sheet[51]','$ti_zhi_answer_sheet[52]','$ti_zhi_answer_sheet[53]','$ti_zhi_answer_sheet[54]','$ti_zhi_answer_sheet[55]','$ti_zhi_answer_sheet[56]','$ti_zhi_answer_sheet[57]','$ti_zhi_answer_sheet[58]','$ti_zhi_answer_sheet[59]','$ti_zhi_answer_sheet[60]','$ti_zhi_answer_sheet[61]','$ti_zhi_answer_sheet[62]',N'$max_result')";

                //echo $sql;
                $stmt = $mysqli->prepare($sql);
                //echo "INSERT INTO ti_zhi(A1,A2,A3,A4,A5,A6,A7,A8,B9,B10,B11,B12,B13,B14,C15,C16,C17,C18,C19,D20,D21,D22,D23,D24,D25,D26,D27,E29,E30,E31,E32,E33,E34,E35,E76,E77,F36,F37,F38,F39,F40,F41,F42,G43,G44,G45,G46,G47,G48,H49,H50,H51,H52,H53,H54,I55,I56,I57,I58,I59,I60,I61) ".$ti_zhi_answer_sheet['A1'].",".$ti_zhi_answer_sheet['A2'].",".$ti_zhi_answer_sheet['A3'].",".$ti_zhi_answer_sheet['A4'].",".$ti_zhi_answer_sheet['A5'].",".$ti_zhi_answer_sheet['A6'].",".$ti_zhi_answer_sheet['A7'].",".$ti_zhi_answer_sheet['A8'].",".$ti_zhi_answer_sheet['B9'].",".$ti_zhi_answer_sheet['B10'].",".$ti_zhi_answer_sheet['B11'].",".$ti_zhi_answer_sheet['B12'].",".$ti_zhi_answer_sheet['B13'].",".$ti_zhi_answer_sheet['B14'].",".$ti_zhi_answer_sheet['C15'].",".$ti_zhi_answer_sheet['C16'].",".$ti_zhi_answer_sheet['C17'].",".$ti_zhi_answer_sheet['C18'].",".$ti_zhi_answer_sheet['C19'].",".$ti_zhi_answer_sheet['D20'].",".$ti_zhi_answer_sheet['D21'].",".$ti_zhi_answer_sheet['D22'].",".$ti_zhi_answer_sheet['D23'].",".$ti_zhi_answer_sheet['D24'].",".$ti_zhi_answer_sheet['D25'].",".$ti_zhi_answer_sheet['D26'].",".$ti_zhi_answer_sheet['D27'].",".$ti_zhi_answer_sheet['E29'].",".$ti_zhi_answer_sheet['E30'].",".$ti_zhi_answer_sheet['E31'].",".$ti_zhi_answer_sheet['E32'].",".$ti_zhi_answer_sheet['E33'].",".$ti_zhi_answer_sheet['E34'].",".$ti_zhi_answer_sheet['E35'].",".$ti_zhi_answer_sheet['E76'].",".$ti_zhi_answer_sheet['E77'].",".$ti_zhi_answer_sheet['F36'].",".$ti_zhi_answer_sheet['F37'].",".$ti_zhi_answer_sheet['F38'].",".$ti_zhi_answer_sheet['F39'].",".$ti_zhi_answer_sheet['F40'].",".$ti_zhi_answer_sheet['F41'].",".$ti_zhi_answer_sheet['F42'].",".$ti_zhi_answer_sheet['G43'].",".$ti_zhi_answer_sheet['G44'].",".$ti_zhi_answer_sheet['G45'].",".$ti_zhi_answer_sheet['G46'].",".$ti_zhi_answer_sheet['G47'].",".$ti_zhi_answer_sheet['G48'].",".$ti_zhi_answer_sheet['H49'].",".$ti_zhi_answer_sheet['H50'].",".$ti_zhi_answer_sheet['H51'].",".$ti_zhi_answer_sheet['H52'].",".$ti_zhi_answer_sheet['H53'].",".$ti_zhi_answer_sheet['H54'].",".$ti_zhi_answer_sheet['I55'].",".$ti_zhi_answer_sheet['I56'].",".$ti_zhi_answer_sheet['I57'].",".$ti_zhi_answer_sheet['I58'].",".$ti_zhi_answer_sheet['I59'].",".$ti_zhi_answer_sheet['I60'].",".$ti_zhi_answer_sheet['I61'];
                if(!$stmt->execute()){
                    echo "Error on execute.";
                }
                $stmt->close();
                echo '<meta http-equiv=REFRESH CONTENT=0;url=ti_zhi_sum.php>';
            }
            elseif($_POST['question']<=$i){
                echo "<label class=\"checkbox inline\">";
                echo "<input type=\"radio\" name=\"value\" value=\"1\"> 沒有";
                echo "</label>";
                echo "<label class=\"checkbox inline\">";
                echo "<input type=\"radio\" name=\"value\" value=\"2\"> 很少";
                echo "</label>";
                echo "<label class=\"checkbox inline\">";
                echo "<input type=\"radio\" name=\"value\" value=\"3\"> 有時";
                echo "</label>";
                echo "<label class=\"checkbox inline\">";
                echo "<input type=\"radio\" name=\"value\" value=\"4\"> 經常";
                echo "</label>";
                echo "<label class=\"checkbox inline\">";
                echo "<input type=\"radio\" name=\"value\" value=\"5\"> 總是";
                echo "</label>";
                echo "<br>";
                echo "<button class=\"btn btn-large btn-primary\" type=\"submit\">下一題</button>";
            }
            echo "</form>";
            echo "</div>";
            echo "</td>";
            echo "<td style=\"width:40%\">";
            echo "<img src=\"http://localhost/phpsurvey/02.gif\" width= 400px></td>";
            echo "</tr></table>";
            
            echo "<progress max=".count($question)." value=".$_POST['num']." width= 500px  height= 20px></progress>";
            
            echo "</div>"
        ?>
    </div> <!-- /container -->
    
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