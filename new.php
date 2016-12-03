
<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="Html,CSS,JavaScript" /> <!--为搜索引擎定义关键字--> 
       <!-- <meta name="subject" content="achieve notebook">-->
	<meta name="description" content="Free Web tutorials on HTML and CSS"><!--为网页定义描述内容-->
	<meta name="author" content="ylp"><!--定义网页作者-->
	<meta http-equiv="refresh" content="30"><!--每30秒刷新当前页面-->

	<title>PP@mynotebook</title> <!--定义浏览器标题-->

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<!-- Favicons -->
	<link rel="icon" href="/var/www/html/img/message.jpg" type="image/x-icon" /> <!--定义浏览器标题图标-->
	
	<!-- CSS -->
	<!--<<link rel="stylesheet" href="/var/www/html/style/bootstrap.css"/>-->
	<link rel="stylesheet" href="/var/www/html/style/font-awesome.min.css"/>
	<link rel="stylesheet" href="/var/www/html/style/style.css"/>
	<link rel="stylesheet" href="/var/www/html/style/flexslider.css"/>
	<link rel="stylesheet" href="/var/www/html/style/animate.css"/>
	<link rel="stylesheet" href="/var/www/html/style/supersized.css" media="screen"/>
	<!-- Add custom CSS here -->
	<link href="/var/www/html/style/custom.css" rel="stylesheet"/>
	<link href="/var/www/html/style/add.css" rel="stylesheet"/>
        
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom"  onLoad="$('#num').val(1);">
<a href="/home/ylp/Music/oldstreet.mp3"> Music</a>

<div class="body">
<!-- Header -->

<header id="ff">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header page-scroll">
				<div class="logozi"><b>MESSAGE</b><br>INTERACTION</div>
				<div class="menu">
					<a href="#new">New</a>
					<a href="#history">History</a>
					<a href="#select">Select</a>
					<a href="#explorer">Explorer</a>
					<a href="#contact">Contact</a>
				</div>
				<!--<img src="/var/www/html/img/featherpen.png" alt="a0" />-->
			</div>
		</div>
	</nav>
</header>
<!-- Header -->

<!-- Intro top content -->
<section class="intro" id="home">
	<div class="cover"></div>
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 animated text-slide">
					<div id="intro-slider" class="flexslider">
						<ul class="slides">
							<li>
								<h3 class="brand-heading">WE HELP YOU RECORD YOUR TURE FOOTS</h3>
								<div class="line"></div>
								<p class="intro-text yah">you will enjoy it</p>
							</li>
							<li>
								<h3 class="brand-heading">WE CREATE Digital EXPERIENCE</h3>
								<div class="line"></div>
								<p class="intro-text yah">you can show your characters</p>
							</li>
                                                        <li>
								<h3 class="brand-heading">WE WILL SAVE YOUR IDEAS</h3>
								<div class="line"></div>
								<p class="intro-text yah">you can find them after many years</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Intro top content -->

<!-- New message -->
<section class="welcome-content" id="yy1">
	<div class="container">
		<div class="row">
			<div class="col-md-12 welcome-text animated">
				<h3>Welcome To Create Your First Message</h3>
				<div class="line1"></div>
				<p>
                                <span class="yahei">Everyday is sunny.</span>
                                 <br>
                                 Learn to smile! <!--look pictures-->
 				 </p>
				<div class="newm">
					<!--<form method="post" action="mynote.php">
						<div style="text-align:center">
	    					<textarea class="y1">please leave your words here...</textarea>
						</br>
	   					 <input type="submit" value="Send">&nbsp;&nbsp;&nbsp;
	   					 <input type="reset" value="Reset"> <div>
	   				</form>-->
 <form name="myForm" method="post" action="post.php">
      <table border="0" width="800" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2">
            <font color="#FFFFFF">请在此输入新的留言</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">作者</td>
          <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#84D7FF">
          <td width="15%">主题</td>
          <td width="85%"><input name="subject" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">內容</td>
          <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="张贴留言" onClick="check_data()">　
            <input type="reset" value="重新输入">
          </td>
        </tr>
      </table>
    </form>
				</div>
				<a class="btn1" href="#">Read More</a>
			</div>
		</div>
	</div>
</section>
<!-- New message -->

<!-- History messages -->
<section class="portfolio-wrap" id="history">
	<div class="fade-text animated">
		<h3>History Records</h3>
	</div>
	<!--<div class="line1"></div>
	<div class="col-md-12 no-padding portfolio-main">
		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter="sort1 sort2 sort3 sort4">All</span></li>
			<li><span class="filter" data-filter="sort1">Current Month</span></li>
			<li><span class="filter" data-filter="sort2">Current day</span></li>
		</ul>
          <div style="text-align:center"> <textarea class="y1"></textarea></div>
	</div>-->
 <?php
  function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "123456")
      or die("无法建立数据連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("打开数据库失败: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
			
      //指定每页显示几笔记录
      $records_per_page = 5;

      //获取要显示第几页的记录 获取现在页码参数，如果page数小于1，默认就是第一页。如果page数大于最大页数，那就让Page等于最大页数。
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      //建立数据连接
      $link = create_connection();
			
      //执行 SQL 命令 GROUP BY 语句用于结合合计函数，根据一个或多个列对结果集进行分组
      $sql = "SELECT * FROM message ORDER BY date DESC"; //desc asc	
      $result = execute_sql($link, "guestbook", $sql);

      //获取记录数目
      $total_records = mysqli_num_rows($result);

      //计算总页数
      $total_pages = ceil($total_records / $records_per_page);

      //计算本页第一笔记录的序号
      $started_record = $records_per_page * ($page - 1);

      //将记录指针移至本页第一笔记录的序号
      mysqli_data_seek($result, $started_record);

      //使用 $bg 数组来存储表格背景颜色
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";

       //HTML <table> 标签
      echo "<table width='800' align='center' cellspacing='3'>";

      //显示记录
      $j = 1;
      while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<tr bgcolor='" . $bg[$j - 1] . "'>"; //meitiaoshuju de  yanse
        echo "<td width='120' align='center'>
              <img src='" . mt_rand(0, 9) . ".gif'></td>";
        echo "<td>作者：" . $row["author"] . "<br>";
        echo "主题：" . $row["subject"] . "<br>";
        echo "时间：" . $row["date"] . "<hr>";
        echo $row["content"] . "</td></tr>";
        $j++;
      }
      echo "</table>" ;

      //产生导航条
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='index.php?page=". ($page - 1) . "'>上一页</a> ";//<a href
      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='index.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='index.php?page=". ($page + 1) . "'>下一页</a> ";
      echo "</p>";

      //釋释放内存空间 xiang java zhongde free()
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
</section>
<!-- History messages-->

<!-- Select message-->
<section class="services-content" id="select" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="cover"></div>
	<div class="container">
		<div class="row">
			<div class="fade-text animated">
				<h3>SELECT MESSAGE</h3>
				<div class="line3"></div>
				<p><span class="yah">Please input your keys to select your needed message.<br>
				<input type="text" name="content1"></br>
			<a href="http://www.baidu.com"><img src="/var/www/html/img/fangdajing.png" alt="select" target="_black"/></a>
			</div>
	   <h4 style="text-align:center">Reasults By Selected</h4>
	   <div class="ses"><textarea rows="20" cols="100"></textarea><div>
		</div>
	</div>
</section>
<!--Select message-->
<!--Explorer Introduction-->
<section class="testimonial-wrap" id="explorer" data-slide="3" data-stellar-background-ratio="0.5">
	<div class="cover"></div>
	<div class="container">
		<div class="row">
			<div class="fade-text animated">
				<h3>Explorer</h3>
			</div>
			<div>
				<img src="/var/www/html/img/Q.png" class="client-img" alt=""/>
					<ul class="slides">
						<li data-thumb="/var/www/html/img/mback.jpg">
							<div class="sign"> <span>PingPing</span></div></br>
							<p style="color:#C0C0C0;text-align:center">
							Where there is a will,there is a way.</br></br>
                                                          Believe yourself and you will success in the future!</br>
							  Come on!</p>
						</li>
					</ul>
			</div>
		</div>
	</div>
</section>
<!-- Explorer Introduction -->

<!-- Contact -->
<section class="contact-wrap" id="contact">
	<div class="container">
		<div class="row">
			<div class="fade-text animated">
				<h3>WeChat</br><img src="/var/www/html/img/wx.png" width="152" height="152" alt="微信号SEA_INTERACTION"></h3>
				<div class="line1"></div>
				<p><span class="yahei">没有什么让我们喜欢卷起衣袖，开始一个全新的项目。让我们一起做一些伟大的事情。<br>
				</span>There’s nothing we like more than rolling up our sleeves and starting a brand new project. Let’s make 						something great together.</p>
			</div>
			<div class="space80"></div>
			<div class="col-md-12 no-padding">
				<div class="col-md-4 contact-info animated">
					<h5><img src="/var/www/html/img/phone.png">Telephone</h5>
					<p>17864282386</p>
				</div>
				<div class="col-md-4 contact-info animated">
					<h5><img src="/var/www/html/img/ad.png"> Address</h5>
					<p><span class="yahei">QUST</span></p>
				</div>
				<div class="col-md-4 contact-info animated">
					<h5 class="qq_email"><img src="/var/www/html/img/phone.png">
					<a target="_blank" href="/var/www/html/qemail.html" style="text-decoration:none;">
					Email<span class="yah" style="color:blue">给我</span></a></h5>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact content -->

<!-- Footer content -->
<footer>
	<p class="copy">ylp's creation<br>&copy; 2016/11/5 Grade2</p>
	<div class="end"><img src="/var/www/html/img/end.jpg" width="100" height="100" alt="end"></div>
</footer>
<!-- Footer content -->

</div>

<!-- JavaScript Files -->
<script src="/var/www/html/js/jquery.js"></script>
<script src="/var/www/html/js/bootstrap.min.js"></script>
<script src="/var/www/html/js/jquery.easing.min.js"></script>
<script src="/var/www/html/js/jquery.mixitup.min.js"></script>
<script src="/var/www/html/js/jquery.flexslider.js"></script>
<script src="/var/www/html/js/supersized.3.2.7.min.js"></script>
<script src="/var/www/html/js/jquery.animateNumber.js"></script>
<script src="/var/www/html/js/jquery.appear.js"></script>
<script src="/var/www/html/js/animations.js"></script>
<script src="/var/www/html/js/jquery.stellar.min.js"></script>
<script src="/var/www/html/js/main.js"></script>

<script type="text/javascript">
function showMK(){
	var num = $("#num").val();
	$("#MK_"+num).css('display','block');
	if(num == '3'){
		$("#more").css('display','none');
	}else{
		$("#num").val(parseInt(num) + 1);
	}
}
</script>

</body>
</html>

