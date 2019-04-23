<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>中醫體質問卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="register">
    <meta name="author" content="Hoelen den Mond">
    <link rel="shortcut icon" href="icon.ico" />

    <!-- Le styles -->
    <link href="http://localhost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      h2 {
         font-size: 31.5px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .inside {
          background-color: whitesmoke;
      }
    </style>
    <link href="http://localhost/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://localhost/bootstrap/js/html5shiv.js"></script>
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
    <div class="container">

      <form class="form-signin" name="register" action="check.php" method="post">
        <h2 class="form-signin-heading">註冊</h2>
        <input type="text" class="input-block-level" placeholder="身分證字號" name="signupid">
        <input type="password" class="input-block-level" placeholder="密碼" name="signuppswd">
        <button class="btn btn-large btn-primary" type="submit">送出</button>
        <button class="btn btn-large" onclick="this.form.action='index.php'">取消</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://localhost/bootstrap/js/jquery-2.0.3.min.js"></script>
    <script src="http://localhost/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>