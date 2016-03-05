<?php
//领取一支
$hostname = SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT;
$dbuser = SAE_MYSQL_USER;
$dbpass = SAE_MYSQL_PASS;
$dbname = SAE_MYSQL_DB;
$link = mysql_connect($hostname, $dbuser, $dbpass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully<br/>';
//select db
mysql_select_db($dbname, $link) or die ('Can\'t use dbname : ' . mysql_error());
//echo 'Select db '.$dbname.' successfully';
mysql_close($link);


 // create short variable names
  $user_name=$_POST['user_name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $postcode=$_POST['postcode'];

  if (!$user_name || !$phone || !$address ) {
      echo "<p style=\"position: absolute; top:23.67%;  left:10%; foot-size:100px;
	width: 100%;height:80% \">You have not entered all the required details.<br />"
          ."Please go back and try again.</p>";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $user_name = addslashes($user_name);
    $phone = addslashes($phone);
    $address = addslashes($address);
    $postcode = doubleval($postcode);
  }
  $mysql = new SaeMysql();
 //@ $db = new SaeMysql("SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,app_meltykiss");
//@ $db = new mysqli('localhost', 'root', '', 'books');

 // if (mysqli_connect_errno()) {
  //   echo "Error: Could not connect to database.  Please try again later.";
   //  exit;
  //}

  $sql= "insert into user1 (user_name,phone,address,postcode) values
            ('".$user_name."', '".$phone."', '".$address."', '".$postcode."')";
  $result = $mysql->runSql($sql);
  $mysql->closeDb();
   if ($result) {
   echo "<img src=\"images/submit_success.png\" alt=\"success\" style=\"position: absolute; top:23.67%;  left:2%; 
	width: 100%;height:80% \"/>";
 } else {
    
 echo "<table class=\"table table-striped\"><tr>
  <td class=\"info\">The item can not be repeated.</td></tr></table>";
  }
?>