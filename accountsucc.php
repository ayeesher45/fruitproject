<?php
@session_start();
require_once("conn/connection.php");
$pdo = prepareConnection();

$crahkaijid = $_SESSION['username'];
$comfirmpword = $_SESSION['password'];
echo 'Your Username = '. $crahkaijid;
echo '<br/>';
echo 'Your password = '. $comfirmpword;
//die();
$sql = "SELECT * FROM `profile` JOIN users on profile.crahkaijid = users.username WHERE users.username = :username and users.password = :password";
  $stmt = $pdo->prepare($sql);
	$stmt->bindParam(':username', $crahkaijid);
	$stmt->bindParam(':password', $comfirmpword);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $rows = $rows[0];
    $firstname =  $rows['firstname'];
    $surname =  $rows['surname'];
    $crahkaijid =  $rows['crahkaijid'];
    $password =  $rows['password'];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_coming_soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2020 19:09:04 GMT -->
<head>
<meta charset="utf-8" />
<title>HALIE&AYEESHA FRUIT</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
<link href="assets/css/animate.min.css" rel="stylesheet" />
<link href="assets/css/style.min.css" rel="stylesheet" />
<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />


<link href="assets/plugins/timer/jquery.countdown/jquery.countdown.css" rel="stylesheet" />


<script src="assets/plugins/loader/pace/pace.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>

</head>
<body>

<div id="page-container" class="fade">

<div class="coming-soon">

<div class="coming-soon-cover"></div>


<div class="coming-soon-content">
<div class="brand m-b-lg">
<h2>HALIE&AYEESHA FRUIT</h2>
</div>
<h1>Welcome!!!!!</h1>
<div class="coming-soon-timer">
<div id="timer"></div>
</div>
<p> Welcome to HALIE&AYEESHA FRUIT<?php echo $firstname.' '.$surname;?> your Account has Successfully Created  <br> Your login detail are as follows</p>
<h4>Username: <?php echo $crahkaijid;?></h4>
<h4>Password: <?php echo $password;?></h4>
</div>


<div class="coming-soon-footer">
<div class="social-list">
<a href="#"><i class="ti-facebook"></i></a>
<a href="#"><i class="ti-instagram"></i></a>
<a href="#"><i class="ti-twitter"></i></a>
</div>
<div class="coming-soon-copyright">&copy; 2023 halie&ayeeshar fruit All Right Reserved</div>
</div>

</div>


<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>

</div>


<div class="theme-panel">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="ti-settings"></i></a>
<div class="theme-panel-content">
<div class="form-group">
<label class="control-label">Color Theme</label>
<ul class="theme-list clearfix">
<li class="active"><a href="javascript:;" class="bg-gradient-blue-purple" data-theme="default" data-theme-file="assets/css/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default"></a></li>
<li><a href="javascript:;" class="bg-gradient-red" data-theme="red" data-theme-file="assets/css/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red"></a></li>
<li><a href="javascript:;" class="bg-gradient-orange" data-theme="orange" data-theme-file="assets/css/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange"></a></li>
<li><a href="javascript:;" class="bg-gradient-yellow" data-theme="yellow" data-theme-file="assets/css/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow"></a></li>
<li><a href="javascript:;" class="bg-gradient-green" data-theme="green" data-theme-file="assets/css/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green"></a></li>
<li><a href="javascript:;" class="bg-gradient-aqua" data-theme="aqua" data-theme-file="assets/css/theme/aqua.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua"></a></li>
<li><a href="javascript:;" class="bg-gradient-blue" data-theme="blue" data-theme-file="assets/css/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue"></a></li>
<li><a href="javascript:;" class="bg-gradient-purple" data-theme="purple" data-theme-file="assets/css/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple"></a></li>
<li><a href="javascript:;" class="bg-gradient-black" data-theme="black" data-theme-file="assets/css/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black"></a></li>
</ul>
</div>
<div class="row m-t-10">
<div class="col-md-12">
<a href="javascript:;" class="btn btn-inverse btn-block btn-rounded btn-sm" data-click="reset-theme-setting"><b>Reset Setting</b></a>
</div>
</div>
</div>
</div>


<script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/cookie/js/js.cookie.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/tooltip/popper/popper.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/bootstrap/bootstrap4/js/bootstrap.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/scrollbar/slimscroll/jquery.slimscroll.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>


<script src="assets/plugins/timer/jquery.countdown/jquery.plugin.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/plugins/timer/jquery.countdown/jquery.countdown.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/js/page/page-coming-soon.demo.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>
<script src="assets/js/apps.min.js" type="f4bbbcf6f32fd6ed1188f016-text/javascript"></script>

<script type="f4bbbcf6f32fd6ed1188f016-text/javascript">
		$(document).ready(function() {
			App.init();
			ComingSoon.init();
		});
	</script>
<script type="f4bbbcf6f32fd6ed1188f016-text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="assets/js/rocket-loader.min.js" data-cf-settings="f4bbbcf6f32fd6ed1188f016-|49" defer=""></script></body>

<!-- Mirrored from seantheme.com/infinite-admin/admin/html/page_coming_soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2020 19:09:04 GMT -->
</html>
