<?php
    session_start();
    setcookie("loginname",$_POST['loginname'],time()+9999999999);
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>中醫體質問卷</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="login check">
        <meta name="author" content="Hoelen den Mond">
        <link rel="shortcut icon" href="icon.ico" />
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
        <?php
        $loginname = $_POST['loginname'];
        $loginpswd = $_POST['loginpswd'];
        //搜尋資料庫資料
        $mysqli = new  mysqli("localhost","root","0000");
        $mysqli->select_db("history");
        if($mysqli->errno == 0){            
        }
        else{
            echo "The Connection is Error!";
        }
        $sql = "SELECT * FROM user where id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $loginname);
        $stmt->execute();
        $stmt->bind_result($col1,$col2);
        $stmt->fetch();
        //判斷帳號與密碼是否為空白
        //以及MySQL資料庫裡是否有這個會員
        
        if($loginname != null && $loginpswd != null && $col1 == $loginname && $col2 == $loginpswd){
            //將帳號寫入session，方便驗證使用者身份
            $_SESSION['loginname'] = $loginname;
            //echo '登入成功!';
            if($_POST['survey_type']=="new_survey"){
                echo "<form class=\"form-signin\" name=\"start_survey\" action=\"ti_zhi_survey.php\" method=\"post\">";
                $all_ti_zhi = array("平和體質","氣虛體質","陽虛體質","陰虛體質","痰濕體質","濕熱體質","血瘀體質","氣鬱體質","特稟體質",/*"基本是平和體質","傾向氣虛體質","傾向陽虛體質","傾向陰虛體質","傾向痰濕體質","傾向濕熱體質","傾向血瘀體質","傾向氣鬱體質","傾向特稟體質"*/);
                $ti_zhi_answer_sheet = array("id","A1","A2","A3","A4","A5","A6","A7","A8","B9","B10","B11","B12","B13","B14","C15","C16","C17","C18","C19","D20","D21","D22","D23","D24","D25","D26","D27","E29","E30","E31","E32","E33","E34","E35","E76","E77","F36","F37","F38","F39","F40","F41","F42","G43","G44","G45","G46","G47","G48","H49","H50","H51","H52","H53","H54","I55","I56","I57","I58","I59","I60","I61");
                foreach ($all_ti_zhi as $value){
                    echo "<input type=\"hidden\" name=".$value." value = 0>";
                    //echo $value."<br>";
                }
                foreach ($ti_zhi_answer_sheet as $value){
                    if($value=="id"){
                        echo "<input type=\"hidden\" name=".$value." value=".$loginname.">";
                    }
                    else{
                        echo "<input type=\"hidden\" name=".$value." value=".$value.">";
                        //echo $value."<br>";
                    }
                }
                echo "<input type=\"hidden\" name=\"num\" value=\"0\">";
                echo "<input type=\"hidden\" name=\"question\" value=\"0\">";
                echo "</form>";
            }
            else{
                echo "<form class=\"form-signin\" name=\"start_survey\" action=\"ti_zhi_survey_old.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"num\" value=\"0\">";
                echo "<input type=\"hidden\" name=\"loginname\"  value=".$loginname.">";
                echo "</form>";
            }
        }
        else{
            //echo '登入失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=0;url=error.php>';
        }
        ?>
            <SCRIPT>
                start_survey.submit();
            </SCRIPT>
    </body>
</html>
