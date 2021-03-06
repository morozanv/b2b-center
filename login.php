<?php
session_start();
if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
  header('location:main_page.php');
}
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>B2B Center | Login </title>
  <link rel="shortcut icon" href="resourse/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/960_12_col.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
  <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
</head>
<body>
  <div class="footer_login">
    <span class="copyright">
      &copy; <?php echo date('Y'); ?> Deeplace® 
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="" title="About">About</a>
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <a href=""  title="Support">Support</a>
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="http://ro.wikipedia.org/wiki/Sistem_de_management_al_documentelor" target="_blank" title="Legal">Legal</a>
    </span>
    <span class="warning">AVERTISMENT: Accesul neautorizat la acest sistem este interzis si va fi urmarit penal de lege.<br> 
      Prin accesarea acestui sistem, sunteti de acord ca actiunile dvs. pot fi monitorizate in cazul in care se suspecteaza utilizarea neautorizata
    </span> 
  </div> 
  <script type="text/javascript">
  function validLogin(){
    var username=$('#username').val();
    var password=$('#password').val();
    var dataString = 'username='+ username + '&password='+ password;
    $.ajax({
      type: "POST",
      url: "process.php",
      data: dataString,
      cache: false,
      success: function(result){
       var result=trim(result);
       if(result=='correct'){
         window.location='main_page.php';
       }else{
         $("#message_text").html(result);
         $("#message_text").removeClass();
         $("#message_text").addClass("alert alert-error");
       }
     }
   });
  }
  function trim(str){
   var str=str.replace(/^\s+|\s+$/,'');
   return str;
 }
 </script>  
 <script>
 $(function(){
  $('.btn_signup').click(function(){
    $('.bodySection').hide(200);
    window.location.replace("inreg.php");
  });
  $('.authentic').click(function(){
    $('.bodySection').hide(200);
    window.location.replace("login.php");
  });
  $('.recuperare').click(function(){
    $('.bodySection').hide(200);
    window.location.replace("recuperare_parola.php");
  });
})
 </script>
 <script type="text/javascript"> 
 $(document).ready(function(){
  if (navigator.appName == "Microsoft Internet Explorer") {
                //Set IE as true
                ie = true;
                //Create a user agent var
                var ua = navigator.userAgent;
                //Write a new regEx to find the version number
                var re = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
                //If the regEx through the userAgent is not null
                if (re.exec(ua) != null) {
                    //Set the IE version
                    var ieVersion = parseInt(RegExp.$1);
                  }
                }
                else {
                  ie = false;
                }
                if(ieVersion < 11){
                  $('#autentifica').hide();
                  $('#box_login').html('Va rugam upgradati Internet Explorer la versiunea 11');
                  $("#box_login").html("Va rugam upgradati Internet Explorer la versiunea 11<br/>Please upgrade Internet Explorer to version 11<br/> <a href = 'http://windows.microsoft.com/en-us/internet-explorer/download-ie)'>Download</a> ");
                  $('#box_login').css("color","red");
                }
              });
</script>
<div id="container">
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
  <div class="loginForm alignCenter clearfix" id="sign">
        <h2>Autentificați-vă!</h2> 
  </div>   
  <form action="" method="post" id="form">
    <div class="container_12">
      <div class="hr">
        <div class="inner">Introduceți datele pentru autentificare
        </div>
      </div>
      <div id="box_login" class="box login_err_box" style="text-align: center;color:darkred;">
        <div id="message_text" class=""> </div>
      </div>            
      <div class="clear"></div>
      <div class="formarea">
        <div class="formControl">
          <i class="fa fa-user"> </i>
          <input class="behind" autofocus="" type="text" name="username" id="username" placeholder="Email" value="">
        </div>
        <div class="formControl">
          <i class="fa fa-unlock-o"> </i>
          <input class="behind" type="password" name="password" id="password" placeholder="Password" value="">
        </div>
        <div class="formControl behind">
          Language &nbsp;&nbsp;
          <select class="behind" size="1" id="language" name="language" tabindex="3" style="width: 241px;">
            <option value="RO" selected="">Romana
            </option>
            <option value="EN">English
            </option>
            <option value="RU">Russian
            </option>
          </select></div>
          <div class="alignCenter">
            <br>
            <input type="button" name="submit" id="submit" class="btn_account btn_login fleft" value="Login" onclick="validLogin()">
            <a href="javascript:" class="recuperare" style="float:right; line-height:50px;">Am uitat parola!</a>
          </div>
        </div>
      </div>
    </form>    
    <br>            
  </div>
  <div id="footer"></div> 
  <script type="text/javascript">
            $('#form input').keydown(function (e) {
                if (e.keyCode == 13) {
                    $('#submit').click();
                }
            });

            $(window).load(function clearMsg(){
                if($("#message_text").text().trim() == "")
                $("#message_text").removeClass();
            });

        </script> 
</body>
</html>