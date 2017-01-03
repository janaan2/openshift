<?php
error_reporting(0);
function home($indonesia=null){
if($indonesia){
echo' <center>
<b>YOUR INFORMATION</b><hr>
TOKEN SAVED...!<p>
<P>
<hr> 
Thanks To <a href="">GANGSTER BOT TEAM</a>';
}else{
include('token.php');
$data=json_decode(file_get_contents('https://graph.facebook.co.id/me?access_token='.$cokis),true);
if($data[id]){
masuk($data[name],$data[id],$cokis);
}else{
echo' <center>
</div>
<ul>
<li><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424"><h3>GET TOKEN</h3></a></li>
</div>
SPECIAL THANKS TO MUJAHID KHAN
<br>
<br>
<form action="index.php" method="post">
<input type="text" name="cetak">
<br>
<h3><a name="navigation-name" class="no-link">INPUT TOKEN HERE</a></h3>
<input type="submit" style="height:28px;" value=" SUBMIT">
</form></center>';}
}
}

function masuk($name,$id,$tox){
echo'<center>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="'.$name.'" class="thumbnail"/></a>
<hr> 
Name = '.$name.'<br>
Status = Token Running Good <br>
For Logout Your Token = Click Here <a href="?logot='.$tox.'">LOGOUT</a>
<hr>
Check Your Robot <p>
<a href="http://'.$_SERVER[HTTP_HOST].'/beranda.php">
CHECK</a>
</center>';
}


if($_POST[cetak]){
$a=$_POST[cetak];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$tok=explode('&',$a);
$tok=$tok[0];
}
$tulis='<?php
$cokis="'.$tok.'";
?>';
$save=fopen('token.php','w');
fwrite($save,$tulis);
fclose($save);
home($tok);
}else{
if($_GET[logot]){
$a=$_GET[logot];
unlink('token.php');
Echo'<center>
Token = '.$a.'<br>
Token Logout Succesfull <br>
<br>
<a href="?home=home">Go Home</a>
</center>';
}else{
home();
}
}
?>