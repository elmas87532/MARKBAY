<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MarkBay</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="js/all.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<div class="top"></div>
	<div class="wrap">
		<div class="header">
			<div class="logo"><a href="index.php"><img src="img/mb_logo.png"/></a></div>
			<div class="options">
				<ul>
					<li><a href="shop.php"> 商品賣場</a></li>
					<li><a href="rank.php">每週排行</a></li>
					<li><a href="design.php">設計馬克杯</a></li>
					<li><a href="member.php">會員專區</a>
						<ul>
							<li><a href="my_design.php">我的作品</a></li>
							<li><a href="select_order.php">訂單查詢</a></li>
							<li><a href="profile.php">修改資料</a></li>
						</ul>
					</li>
					<li><a href="cart.php">購物車</a></li>
				</ul>
			</div>
		</div>
		<div class="login">
			<a href="login.php">會員登入</a>
		</div>
		<div class="info">
			<h2 class="bh2">商品專區</h2>
			<div class="product">
			<?php

			for ($i=0; $i < 5; $i++) { 
				$pro_path="img/tmp_cup.png";
echo <<<_END

<div class='each_pro'><a href='#' onclick="window.open('$pro_path', 'product', config='height=500,width=500');"><img src='img/tmp_cup.png'/></a><p><a href='#' onclick="window.open('$pro_path', 'product', config='height=500,width=500');">pro_name</a></p><p class='ri_un'>p_price</p><p class='pro_addtocart'><a href='cart.php?p_id=p_id'>加入購物車</a></p></div>
_END;
			}//sth to replace
			?>
			</div>
		</div>
		<div class="footer">
			<hr/>
			<p>MARKBAY @ phpdb</p>
		</div>
	</div>
</body>
</html>
