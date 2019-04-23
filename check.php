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
        <meta name="description" content="register check">
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
        $mysqli = new  mysqli("localhost","root","0000");
        $mysqli->select_db("history");
        if($mysqli->errno == 0){            
        }
        else{
            echo "The Connection is Error!";
        }
        // put your code here
        $signupid = $_POST['signupid'];
        $signuppswd = $_POST['signuppswd'];
        if($signupid == null){
            $_SESSION['register'] = 1;
            echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
            echo "<SCRIPT Language=javascript>";
            echo "window.open('alert.php', 'Alert', config='height=140,width=240')";
            echo "</SCRIPT>";
            echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
        $sql = "SELECT * FROM user where id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s",$signupid);
        $stmt->execute();
        $stmt->bind_result($col1,$col2);
        if($stmt->fetch()){
            echo '重複的使用者名稱!將自動跳轉回註冊頁面!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
        else{
            //新增使用者
            $sql = "insert into user(id, password) values (?, ?)";         
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss", $signupid, $signuppswd);
            if($stmt->execute()){
                echo '新增使用者帳戶成功!將自動跳轉回登入頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
            }
            else{
                echo '新增使用者帳戶失敗!將自動跳轉回註冊頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=register.php>';
            }
        }
        ?>
    </body>
</html>
