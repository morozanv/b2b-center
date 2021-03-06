<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>B2B Center</title>
    <link rel="shortcut icon" href="resourse/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/960_12_col.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
</head>
</head>
<body>
    <div class="footer_login">
        <span class="copyright">
            &copy; <?php echo date('Y'); ?> Home ® 
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="" title="About">About</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href=""  title="Support">Support</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://ro.wikipedia.org/wiki/Sistem_de_management_al_documentelor" target="_blank" title="Legal">Legal</a>
        </span>
        <span class="warning">AVERTISMENT: Accesul neautorizat la acest sistem este interzis si va fi urmarit penal de lege.<br> Prin accesarea acestui sistem, sunteti de acord ca actiunile dvs. pot fi monitorizate in cazul in care se suspecteaza utilizarea neautorizata</span>  </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script>
        function clearMsg(){
            $("#message_text").removeClass();
        }
        $(function () {
            $('.btn_sign').click(function () {
                $(this).parent().parent().hide(200);
                window.location.replace("inreg.php");

            });
            $('.btn_signup').click(function () {
                $('.bodySection').hide(200);
                window.location.replace("inreg.php");

            });
            $('.btn_log').click(function () {
                $('.bodySection').hide(200);
                window.location.replace("login.php");

            });
            $('.authentic').click(function () {
                $('.bodySection').hide(200);
                window.location.replace("login.php");

            });
            $('.signup').click(function () {
                $('.bodySection').hide(200);
                $('#sign').show(200);
                $('#login').hide(200);
            });
        })
        </script>
        <div class="topSection clearfix">
            <div class="container_12 clearfix">
                <div class="logo fleft"><a href="index.php"><img src="resourse/logo.png" alt="logo"></a></div>
                <div class="fright">
                    <a href="javascript:void(0)" onclick="clearMsg();" class="authentic"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    <a href="javascript:void(0)" onclick="clearMsg();" class="btn_signup"><span class="glyphicon glyphicon-plus"></span> Register</a> 
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="bodySection clearfix">
            <!-- <div class="bodyContent">
                <h1>Ready for action?
                </h1>
                <a href="javascript:void(0)" onclick="clearMsg();" class="btn_sign">Inregistrare</a>                
                <a href="javascript:void(0)" onclick="clearMsg()" class="btn_log">Autentificare</a>
                <p class="slogan-text"># 1 resource for business infrastructure
                </p>
            </div> -->
        </div>
    </body>
    </html>