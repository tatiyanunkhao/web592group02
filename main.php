

<!doctype html>
<html lang="th">
<meta charset="utf-8">
<head>
 <strong><FONT FACE="JasmineUPC">
<font size = "5">

<?php 
$appid = "kanjana-prompakdee.appspot.com";
$page = $_GET['p'];
if($page=='') $page='main';
$title = $page;
function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
include($file);
}else{
echo "ไม่พบไฟล์  $file "; 
}
echo "</div>";
echo "</div>";
}
use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "https://upic.me/i/gv/paul_frank_wallpaper_by_funkyman1-d32sfi2.jpg";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}
?>


<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page ?> </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body role="document">
<header class="page-header text-center">
<body background="http://i021.radikal.ru/0804/57/3f9d58ae6b47.jpg">
<?php 
readfile("gs://$appid/header.html"); 
?>
</header>

<div class="container">
<div class="col-sm-3">
<h3><?php panel_include("User","work8_user.php"); ?>
<?php panel_include("Menu","work8_menu.php"); ?></h3>
</div>
<div class="col-sm-9">
<h3><?php panel_include($title,"work8_body.php" ,"primary"); ?></h3>
</div>
</div>
			<FORM>
			<center>
				<h3><INPUT TYPE="BUTTON" VALUE="กลับไปหน้าเเรก" ONCLICK="window.location.href='../main.php'"></h3>
				</center>
			</FORM>
			
<footer class="text-center page-footer">
<center><?php 
readfile("gs://$appid/footer.html"); 
echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>"; 
echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>"; 
?></center>
</footer>
</body>
</html>
