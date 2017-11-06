<?php
	session_start();
	error_reporting(0);
    
   

	if(!isset($_SESSION["contact"]) || empty($_SESSION["contact"]))
	{
		echo "<script>window.location.href='index.php#contact';</script>";
	 	Header( "Location: index.php#contact" );
	 	exit;
	}

	require('mail.php');
	$sf = new simple_form();
	
	if(isset($_POST['confirm_submit']))
	{
		$_POST = $_SESSION["contact"];

		$require = array(
            'name'=>'お名前',
            'email' => 'メールアドレス',
            'phone'=>'電話番号',
            'hospital-name' => '希望医院名'
		);
        $error = "";
		$requireResArray = $sf->requireCheck($require);
		if(!$requireResArray["empty_flag"]){

			 if (version_compare(PHP_VERSION, '5.1.0', '>=')) {
				date_default_timezone_set('Asia/Tokyo');
			 }

				//$to      = "testdev0511@gmail.com";
				$to      = "a.tsuzaki@e-trust.ne.jp";
				
				$BccMail = "";
				$subject = "オレンジ歯科クリニックLPからお問い合わせがありました";
				$formadmin = "オレンジ歯科クリニックLPからお問い合わせがありました。\n\n";
				$formadmin.= "担当の方は、\n";
				$formadmin.= "内容の確認と折り返しの連絡をお願いします。";

				$encode         = "UTF-8";
				$refrom_name    = "";
				$re_subject     = "【オレンジ歯科クリニック】お問い合わせありがとうございます";
				$dsp_name       = 'お名前';

				$remail_text.=$_SESSION["contact"]["name"]."様 \n\n";
				$remail_text.="オレンジ歯科クリニックに \n";
				$remail_text.="お問い合せいただき誠にありがとうございます。 \n\n";
				$remail_text.="お問い合せ内容を確認次第、担当者より折り返し連絡いたしますので\n";
				$remail_text.="今しばらくお待ちくださいますよう、よろしくお願い申し上げます。 \n\n";				
				$remail_text.=$_SESSION["contact"]["name"]."様が入力された内容は下記のとおりです。\n";
				$remail_text .= "－－－－－－－－－－ \n";
				
				$mailFooterDsp = 1;
				$mailSignature.="－－－－－－－－－－ \n\n";
				$mailSignature.="万が一、2営業日が経過しても連絡が無い場合は \n";
				$mailSignature.="大変お手数ではございますが下記電話番号までご連絡ください。 \n\n";
				
				$mailSignature.="＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ \n";
				$mailSignature.="オレンジ歯科クリニック \n\n";
				$mailSignature.="・所沢プロぺ通り店　：04-2929-2345 \n";
				$mailSignature.="・イオン所沢店　　　：04-2929-5427 \n";
				$mailSignature.="・パルコ新所沢店　　：04-2929-1010 \n";
				$mailSignature.="・ひばりが丘パルコ店：042-438-8488 \n\n";
				$mailSignature.="診療時間：10:00～21:00 \n";
				$mailSignature.="年中無休 \n";				
				$mailSignature.="URL：http://www.orange-dc.com/ \n";
				$mailSignature.="＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ \n";
				$mailSignature.="問い合わせのページURL：".$_SESSION["contact"]["actual_link"]." \n";
				
				
				
				$mailSignatureAdmin.="－－－－－－－－－－ \n";
				$mailSignatureAdmin.="問い合わせのページURL：".$_SESSION["contact"]["actual_link"];

				$Lable_key   = array(
                    'name'=>'お名前',
                    'namekana' => 'お名前（フリガナ）',
                    'email' => 'メールアドレス',
                    'age' => '年齢',
                    'gender' => '性別',
                    'phone'=>'電話番号',
                    'hospital-name' => '希望医院名',
                    'comment' => '希望日・時間帯・相談内容など'
				);
														
			 $post_mail   = $_SESSION["contact"]["email"];
			 $userBody    = $sf->mailToUser($_SESSION["contact"],$dsp_name,$remail_text,$mailFooterDsp,$mailSignature,$encode,$Lable_key);

			 $reheader    = $sf->userHeader($refrom_name,$to,$encode);
			 $re_subject  = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($re_subject,"JIS",$encode))."?=";

			 $confirmDsp = 0;
			 $adminBody   = $sf->mailToAdmin($_SESSION["contact"],$formadmin,$mailFooterDsp,$mailSignatureAdmin,$encode,$confirmDsp,$Lable_key);

			 $userMail    =1;
			 $header      = $sf->adminHeader($userMail,$post_mail,$BccMail,$to);
			 $subject     = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,"JIS",$encode))."?=";

			 if(mail($to,$subject,$adminBody,$header)) {
				mail($post_mail,$re_subject,$userBody,$reheader);
				unset($_POST);
				unset($_SESSION["contact"]);
				echo "<script>window.location.href='thanks.php';</script>";
				Header( "Location: thanks.php" ); 
				exit;
			 }

		}else
		{
			$error= $requireResArray["errm"];
		}
 }
				
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=0">
<meta name="format-detection" content="telephone=no">
<title>デンタルワークス株式会社様　デザイン案</title>
<link rel="stylesheet" href="css/common.css" media="all">
<link rel="stylesheet" href="css/style.css" media="all">
<link rel="index contents" href="/" title="ホーム">
</head>
<!--[if lte IE 9]><body class="ie"><![endif]-->
<body>
	<header id="header">
		<div class="header-box inner clearfix">
			<h1 class="logo"><a href="./" class="hover-opacity"><img src="images/common/img_logo.png" alt="オレンジ歯科クリニック Orange Dental Clinic"></a></h1>
			<div class="hinfo clearfix">
				<div class="location">
					<p class="tit-location">4医院で処置が可能！</p>
					<ul class="list-location clearfix">
						<li>・所沢プロぺ通り店</li>
						<li>・イオン所沢店</li>
						<li>・パルコ新所沢店</li>
						<li>・ひばりが丘パルコ店</li>
					</ul>
				</div>
				<p class="btn-ctact"><a href="./#contact" class="hover-opacity"><img src="images/header/btn_ctact.png" srcset="images/header/btn_ctact@2x.png 2x" alt="無料相談予約はこちら"></a></p>
			</div>
		</div>
	</header>
	<!-- / #header -->
	
	<div id="contents">
		<div id="contact" class="section section-form">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp retina" src="images/form/title_contact_pc.png" srcset="images/form/title_contact_pc@2x.png 2x" alt="無料相談　ご予約フォーム">
				</h2>				
				<p class="text-head-form">（<span class="icon-circle orange"></span>&nbsp;印は必須項目です。）</p>
				<div class="form-contact">
					<?php if($error) echo '<div class="txt-contact">' . $error . '</div>'; ?>
					<form method="post">
						<table>
							<tr>
								<th><p><span class="icon-circle orange"></span>お名前</p></th>
								<td><?php echo $_SESSION["contact"]["name"]; ?></td>
							</tr>
							<?php if($_SESSION["contact"]["namekana"] != ""): ?>
							<tr>
								<th><p>お名前（フリガナ）</p></th>
								<td><?php echo $_SESSION["contact"]["namekana"]; ?></td>
							</tr>
							<?php endif; ?>
							<tr>
								<th><p><span class="icon-circle orange"></span>メールアドレス</p></th>
								<td><?php echo $_SESSION["contact"]["email"]; ?></td>
							</tr>
							<?php if($_SESSION["contact"]["age"] != ""): ?>
							<tr>
								<th><p>年齢</p></th>
								<td><?php echo $_SESSION["contact"]["age"];?></td>
							</tr>
							<?php endif; ?>
							<?php if($_SESSION["contact"]["gender"] != ""): ?>
							<tr>
								<th><p>性別</p></th>
								<td><?php echo $_SESSION["contact"]["gender"];?></td>
							</tr>
							<?php endif; ?>
							<tr>
								<th><p><span class="icon-circle orange"></span>電話番号</p></th>
								<td><?php echo $_SESSION["contact"]["phone"]; ?></td>
							</tr>
							<tr>
								<th><p><span class="icon-circle orange"></span>希望医院名</p></th>
								<td><?php echo $_SESSION["contact"]["hospital-name"]; ?></td>
							</tr>
							<?php if($_SESSION["contact"]["comment"] != ""): ?>
							<tr>
								<th>
									<p>希望日・時間帯・相談内容など
									<span class="sub-text">※恐れ入りますが<br>
									13：00～15：00の間はお昼休みを<br>
									いただいております。</span></p>
								</th>
								<td><?php echo $_SESSION["contact"]["comment"]; ?></td>
							</tr>
							<?php endif; ?>
						</table>

						<div class="wrap-button-contact center clearfix">
							<input type="button" name="back" class="btn-back hover-opacity" onclick="window.history.back()"></input>
							<input type="submit" class="btn-forward hover-opacity" name="confirm_submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- / .section-form -->
	</div>
	<!-- / #contents -->

	<footer id="footer">
		<div class="foot-top">
			<div class="inner clearfix">
				<a href="./" class="logo-foot hover-opacity"><img src="images/footer/logo_foot.jpg" alt="オレンジ歯科クリニック Orange Dental Clinic"></a>
				<ul class="infor-foot clearfix">
					<li class="infor-time">
						<label class="label-require">診療時間</label>
						<span class="text-infor">10：00～21：00</span>
					</li>
					<li class="infor-parking">
						<label class="label-require">駐車場完備</label>
					</li>
					<li class="infor-closed">
						<label class="label-require">休診日</label>
						<span class="text-infor">年中無休</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="foot-bottom">
			<div class="inner">
				<p class="center">Orange Dental Clinic Copyright (C) All Rights Reserved.</p>
			</div>
		</div>
	</footer>
	<!-- / #footer -->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.inview.min.js"></script>
	<script src="js/fixHeight.js"></script>
	<script src="js/script.js"></script>
	<script src="js/form.js"></script>
	<!--[if lt IE 9]>
	<script src="js/html5shiv-printshiv.js"></script>
	<![endif]-->
</body>
</html>