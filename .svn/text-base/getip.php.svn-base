<html>
<body>
<?php



  @ $db = new SaeMysql("SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,app_rose111");

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
  $value=8;
    $sql = "select * from ordersip where orderid like '%".$value."%'";
 //$sql="select * from table1 where field1 like ’%value1%’ ";
  //$sql = "select * from  ordersip limit 6,1 ";

  $result = $db->getData($sql);
  if($result){
    ?>
    <br/>
    <br/>
    <?php 

foreach($result as $small){
    $ip = $answer.$small['ip']; //获取符合搜索要求的记录的字段
    $orderid = $answer.$small['orderid'];


echo $ip;
echo"<br/>";
echo $orderid;
}
}
?>

<script>
    
var b=<?php echo $orderid; ?>

alert (b);
</script>
</body>
</html>