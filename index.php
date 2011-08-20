<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>fb id finder</title> 
<link rel="stylesheet" type="text/css" href="//assets.batu.me/10okredi/view.css" media="all"> 
<script type="text/javascript" src="//assets.batu.me/10okredi/view.js"></script> 
</head> 
<body id="main_body"> 
<img id="top" src="//assets.batu.me/10okredi/top.png" alt=""> 
<div id="form_container"> 
<h1><a>fb id finder</a></h1> 
<form id="form_168198" method="post" class="appnitro" action="index.php"> 
<div class="form_description"> 
<h2>fb id finder</h2> 
<p>insert your username to get your id</p> 
</div> 
<ul> 
<li id="li_1"> 
<label class="description" for="element_1">fb username </label> 
<div> 
<input id="element_1" name="username" size="90" class="element text" maxlength="" value=""/> 
</div> 
</li>
<li class="buttons"> 
<input id="saveForm" class="button_text" type="submit" name="submit" value="find it"/> 
</li> 
</form>
<?php 
if($_POST['username'] != NULL){

    $data = file_get_contents("http://graph.facebook.com/".$_POST['username']);
    $data = json_decode($data);

	$oldlink = "http://www.facebook.com/profile.php?id=".$data->id;
	
	echo '<li id="li_1"> <label class="description" for="element_1"><a href="'.$oldlink.'">'.$oldlink.'</a></label> </li>';
}
?>
</ul> 


<div id="footer"> 
<a href="//batu.me/1">batuhanicoz</a> 
</div> 
</div> 
<img id="bottom" src="//assets.batu.me/10okredi/bottom.png" alt=""> 
	<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.batu.me/" : "http://stats.batu.me/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 4);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.batu.me/piwik.php?idsite=4" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body> 
</html>