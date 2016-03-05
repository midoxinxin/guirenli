
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,minimal-ui">
    <!--设定离开网页不能从Cache中调出本地机的缓存-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate"><!--清除缓存-->
    <meta http-equiv="expires" content="-1"><!--网页到期时间,-1表示立即过期，防止重复提交-->

    <title>贵人礼枪炮玫瑰</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>

<script>
</script>

</head>

<body>
<header><?php
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

$mysql = new SaeMysql();

function getIP(){
global $ip;
if (getenv("HTTP_CLIENT_IP"))
$ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR"))
$ip = getenv("REMOTE_ADDR");
else $ip = "Unknow";
return $ip;
}
// 使用方法：
//$timestamp = date("y-m-d h:i:s",time()); 
$ip =getIP();
//echo getIP();



$sql= "insert into ordersip (TIMESTAMP,ip) values
            ('".date('Y-m-d H:i:s')."', '".$ip."')";


  $result = $mysql->runSql($sql);
  

  $mysql->closeDb();
   if ($result) {
echo "<table class=\"table table-striped\"><tr>
 <td class=\"info\"> ".$db->affected_rows."ip inserted into database</td></tr></table>";
 } else {
    
 echo "<table class=\"table table-striped\"><tr>
  <td class=\"info\">An error has occurred. The item can not be repeated.</td></tr></table>";
  }
/**
 * @Author: anchen
 * @Date:   2016-02-06 23:17:31
 * @Last Modified by:   wenxin.dong
 * @Last Modified time: 2016-02-06 23:29:11
 */
?></header>
<div id="top">
    <img src="images/diamond.png" height="15" width="15" alt="diamond"/><span id="totalAmount">1000</span>
    <span class="btn">
        <button class="friend">邀请一位好友得<img src="images/diamond.png" height="12" width="12" alt="diamond"/>150</button>
    </span>
    <span class="btn">
        <button class="focus">关注得<img src="images/diamond.png" height="12" width="12" alt="diamond"/>500</button>
    </span>
</div>

<div id="content">
    <div class="first">
        <div id="Sh">
            <img src="images/sh.jpg" alt="Sh" class="city">
            <button id="searchPotions">搜索</button>
            <div class="tip">消耗<img src="images/diamond.png" height="12" width="12" alt="diamond"/>300</div>
        </div>
        <div id="guiRenLi">
            <img src="images/guirenli.jpg" alt="guiRenLi" class="city">
            <button id="searchRose">搜索</button>
            <div class="tip">消耗<img src="images/diamond.png" height="12" width="12" alt="diamond"/>300</div>
        </div>
    </div>
    <div class="second">
        <div id="Paris">
            <img src="images/paris.jpg" alt="Paris" class="city">
            <button id="searchMagicWand">搜索</button>
            <div class="tip">消耗<img src="images/diamond.png" height="12" width="12" alt="diamond"/>300</div>
        </div>
        <div id="NewYork">
            <img src="images/newyork.jpg" alt="NewYork" class="city">
            <button id="searchGift">搜索</button>
            <div class="tip">消耗<img src="images/diamond.png" height="12" width="12" alt="diamond"/>300</div>
        </div>  
    </div>                  
</div>

<footer>
    <ul id="count">
        <li class="notLast">
            <img src="images/potion.png" height="12" width="12" alt="potion"/><span id="potion">0</span>
        </li>
        <li class="notLast">
            <img src="images/rose.png" height="12" width="12" alt="rose"/><span id="rose">0</span>
        </li>
        <li class="notLast">
            <img src="images/magicWand.png" height="12" width="12" alt="magicWand"/><span id="magicWand">0</span>
        </li>
        <li>
            <img src="images/gift.png" height="12" width="12" alt="gift"/><span id="gift">0</span>
        </li>               
    </ul>
    <button id="exchange">兑换枪炮玫瑰</button>   
</footer>

<!-- **********************以下需用JS加入********************** -->
<!-- ***********遮罩层*********** -->
<!-- <div class="mask" ></div> -->

<!-- *********关注界面******** -->
<div id="focusView" class="none">
    <img src="images/title2.png" alt="title2" class="title2"/>
    <img src='images/2wm.png' alt="2wm" class="wm" />
    <p>长按二维码，关注“贵人礼”<br/>
       可得<img src="images/diamond.png" alt="diamond" class="diamond">500</p>
</div>

<!-- *********邀请好友界面******** -->
<div id="friendView" class="none">
    <img src="images/row.png" alt="row" class="row" />
    <img src="images/friendView.png" alt="friendView"/>
</div>

<!-- *********搜索界面******** -->
<!-- 魔石不够界面********* -->
<div id="search0View" class="none">
    <div>
        <img src="images/nodiam.png" alt="nodiam">      
        <button class="focus"></button>
        <button class="friend"></button>
    </div>
</div>

<!-- 魔石足够界面********* -->
<div id="search1View" class="none">
    <!-- loading: -->
    <div class="none loading">
        <!-- 绝对定位 --><!-- z-index:1002; -->
        <img src="images/title1.png" alt="loading" class="title1"/>          
        <img src="images/loading0.png" alt="loading" class="loading0"/> 
        <img src="images/loading1.png" alt="loading" class="loading1"/>  
        <img src="images/0.png" alt="loading" class="percent0"/>  
        <img src="images/100.png" alt="loading" class="percent100"/>  
    </div>
    <!-- 获得奖品： -->
    <div class="none get1"> 
        <img src="images/get.png" alt="not1" class="get"/> 
        <img src="images/potion.png" alt="potion"/><br/>
        <button></button>
    </div>
    <!-- 失败： -->
    <div class="none not1">
        <img src="images/not.png" alt="get1" class="not"/> 
        <button></button>
    </div>
</div>

<div id="search2View" class="none">
    <!-- loading: -->
    <div class="none loading">
        <!-- 绝对定位 --><!-- z-index:1002; -->
        <img src="images/title1.png" alt="loading" class="title1"/>          
        <img src="images/loading0.png" alt="loading" class="loading0"/> 
        <img src="images/loading1.png" alt="loading" class="loading1"/>  
        <img src="images/0.png" alt="loading" class="percent0"/>  
        <img src="images/100.png" alt="loading" class="percent100"/>  
    </div>
    <!-- 获得奖品： -->
    <div class="none get2"> 
        <img src="images/get.png" alt="not2" class="get"/> 
        <img src="images/rose.png" alt="rose"/><br/>
        <button></button>
    </div>
    <!-- 失败： -->
    <div class="none not2">
        <img src="images/not.png" alt="get2" class="not"/> 
        <button></button>
    </div>
</div>

<div id="search3View" class="none">
    <!-- loading: -->
    <div class="none loading">
        <!-- 绝对定位 --><!-- z-index:1002; -->
        <img src="images/title1.png" alt="loading" class="title1"/>          
        <img src="images/loading0.png" alt="loading" class="loading0"/> 
        <img src="images/loading1.png" alt="loading" class="loading1"/>  
        <img src="images/0.png" alt="loading" class="percent0"/>  
        <img src="images/100.png" alt="loading" class="percent100"/>  
    </div>
    <!-- 获得奖品： -->
    <div class="none get3"> 
        <img src="images/get.png" alt="not3" class="get"/> 
        <img src="images/magicWand.png" alt="magicWand"/><br/>
        <button></button>
    </div>
    <!-- 失败： -->
    <div class="none not3">
        <img src="images/not.png" alt="get3" class="not"/> 
        <button></button>
    </div>
</div>

<div id="search4View" class="none">
    <!-- loading: -->
    <div class="none loading">
        <!-- 绝对定位 --><!-- z-index:1002; -->
        <img src="images/title1.png" alt="loading" class="title1"/>          
        <img src="images/loading0.png" alt="loading" class="loading0"/> 
        <img src="images/loading1.png" alt="loading" class="loading1"/>  
        <img src="images/0.png" alt="loading" class="percent0"/>  
        <img src="images/100.png" alt="loading" class="percent100"/>  
    </div>
    <!-- 获得奖品： -->
    <div class="none get4"> 
        <img src="images/get.png" alt="not4" class="get"/> 
        <img src="images/gift.png" alt="gift"/><br/>
        <button></button>
    </div>
    <!-- 失败： -->
    <div class="none not4">
        <img src="images/not.png" alt="get4" class="not"/> 
        <button></button>
    </div>
</div>

<!-- *********兑换枪炮玫瑰界面******** -->
<!-- 兑换玫瑰规则界面 -->
<div id="exchangeRule" class="none">
    <div class="exContent">
        <div id="rose1">
            <img src="images/rose1.png" alt="rose1" class="rose1">
            <p class="pTitle">集齐3种物品可领取<br/>玫瑰一只</p>
            <p class="pCon">物品1<img src="images/potion.png" alt="potion"/></p>
            <p class="pCon">物品2<img src="images/rose.png" alt="rose"/></p>
            <p class="pCon">物品3<img src="images/magicWand.png" alt="magicWand"/></p><br/>
            <a href="https://www.baidu.com/"><button></button></a>   <!-- 商城链接？？？ -->
        </div>
        <div id="roses">
            <img src="images/roses.png" alt="roses" class="roses">
            <p class="pTitle">集齐4种物品可领取<br/>玫瑰一束</p>
            <p class="pCon">物品1<img src="images/potion.png" alt="potion"/></p>
            <p class="pCon">物品2<img src="images/rose.png" alt="rose"/></p>
            <p class="pCon">物品3<img src="images/magicWand.png" alt="magicWand"/></p>
            <p class="pCon">物品4<img src="images/gift.png" alt="gift"/><br/></p>
            <a href="https://www.baidu.com/"><button></button></a>   <!-- 商城链接？？？ -->
        </div>      
    </div>
</div>
<!-- 兑换1支玫瑰界面 -->
<div id="exchangeRose1" class="none">
    <div>
        <img src="images/ex1.png" alt="ex1">
        <button  class='yes'></button>
        <button class='no'></button>
    </div>
</div>
<!-- 领取玫瑰界面 -->
<!-- <div id='exchangeView' class="none">
    <p id="tip">留下您的收货信息,我们会很快为您发放礼品</p>
    <form action='js/process_form.php' method='post'>      
        姓名控件
        <section> 
            <label for='user_name'>姓名</label>
            <input type='text' id='user_name' name='user_name' />                           
        </section>
        
        手机控件
        <section> 
            <label for='phone'>手机</label> 
            <input type='text' id='phone' name='phone' />                           
        </section>

        收货地址控件
        <section> 
            <label for='address'>收货地址</label>
            <input type='text' id='address' name='address' placeholder='领取地址：高新区锦业二路六和园' />                           
        </section>
        
        邮编控件
        <section> 
            <label for='postcode'>邮编</label>
            <input type='text' id='postcode' name='postcode' />                           
        </section>   
 
        提交按钮
        <section> 
            <input type='submit' value='提交' />
        </section>
    </form> 
    <p id="phone">客服电话：400-000-1111</p>
    <p>西安地区以外的，需承担运费15元</p>
    <p>(西安地区可上门领取，也可选择同城快递)</p>
    <div class='bottom'>
        <div class="logo"><img src="images/guirenli.jpg" alt="logo"/></div>
        <div class="download">
            <p>下载贵人礼APP，领取更多好礼</p>
            <button><a href="#">下载</a></button>
        <div>
    </div>
</div> -->

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="js/app.js"></script>

</body>
</html>


<!--             微信分享事件，暂时不用
            weixinEvent: function(){    
                var h = _lang[_config.lang];
                document.addEventListener("WeixinJSBridgeReady", 
                    function() {
                        if (WeixinJSBridge) {
                            WeixinJSBridge.on("menu:share:appmessage", function() {
                                var a = "color2" == Game.type ? h.share_txt_d : "", 
                                    b = Game.lastScore > 0 ? a + h.share_txt1 + Game.lastScore + h.share_txt2 + Game.lastGamePercent + h.share_txt3 + Game.lastGameTxt + h.share_txt4 : shareData.tTitle;
                                WeixinJSBridge.invoke(
                                    "sendAppMessage", 
                                    {
                                        img_url: shareData.imgUrl,
                                        link: shareData.timeLineLink,
                                        desc: shareData.tContent,
                                        title: b
                                    }, function() {});
                            });
                            WeixinJSBridge.on("menu:share:timeline", function() {
                                var a = "color2" == Game.type ? h.share_txt_d : "", 
                                    b = Game.lastScore > 0 ? a + h.share_txt1 + Game.lastScore + h.share_txt2 + Game.lastGamePercent + h.share_txt3 + Game.lastGameTxt + h.share_txt4 : shareData.tTitle;
                                WeixinJSBridge.invoke(
                                    "shareTimeline", 
                                    {
                                        img_url: shareData.imgUrl,
                                        link: shareData.timeLineLink,
                                        desc: shareData.tContent,
                                        title: b
                                    }, function() {});
                            });
                        }
                    }, 
                    false);       -->




