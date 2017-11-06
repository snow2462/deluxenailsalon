<?php
	session_start();
	error_reporting(0);
	require('mail.php');
	$sf = new simple_form();

	if(isset($_POST['send']))
	{
		unset($_SESSION["contact"]);
		foreach($_POST as $key => $value){
			$_SESSION["contact"][$key] = $sf->filter($value);
		}
		$_POST = $_SESSION["contact"];
		$require = array(
		'name'=>'お名前',
		'email' => 'メールアドレス',
		'phone'=>'電話番号',
		'hospital-name' => '希望医院名'
		);
		$requireResArray = $sf->requireCheck($require); 
		if(!$requireResArray["empty_flag"]){
			 //validate option check email
			 $isvalue = true;
			 if ( !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
					$emailErr = '<p class="error_messe" style="color: red;">【メールアドレス】Eメール·エラー</p>'; 
					$isvalue = false;
			 }
			 if($isvalue)
			 {
				 echo "<script>window.location.href='confirm.php#contact';</script>";
				 Header( "Location: confirm.php#contact" );
				 exit;
			 }else
			 {
				$error = $emailErr;
			 }
		}else{
			$error = $requireResArray["errm"];
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
	<script src="js/form.js"></script>
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
				<p class="btn-ctact"><a href="#contact" class="hover-opacity"><img src="images/header/btn_ctact.png" srcset="images/header/btn_ctact@2x.png 2x" alt="無料相談予約はこちら"></a></p>
			</div>
		</div>
	</header>
	<!-- / #header -->

	<header id="header" class="header-bar">
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
				<p class="btn-ctact"><a href="#contact" class="hover-opacity"><img src="images/header/btn_ctact.png" srcset="images/header/btn_ctact@2x.png 2x" alt="無料相談予約はこちら"></a></p>
			</div>
		</div>
	</header>
	<!-- / .header-bar -->

	<div id="keyv">
		<div class="keyv-box">
			<img src="images/keyv/img_keyv_pc.png" srcset="images/keyv/img_keyv_pc@2x.png 2x" alt="矯正症例1000件の専門医によるマウスピース矯正治療" class="sp-none">
			<img src="images/keyv/img_keyv_sp.png" srcset="images/keyv/img_keyv_sp@2x.png 2x" alt="矯正症例1000件の専門医によるマウスピース矯正治療" class="pc-none">
			<div class="price-keyv">
				<p class="pk01"><img src="images/keyv/price_keyv01.png" srcset="images/keyv/price_keyv01@2x.png 2x" alt="一般的な歯科医院の場合"></p>
				<p class="ak"><img src="images/keyv/arrow.png" alt="Arrow"></p>
				<p class="pk02"><img src="images/keyv/price_keyv02.png" srcset="images/keyv/price_keyv02@2x.png 2x" alt="当院の場合"></p>
			</div>
		</div>
	</div>
	<!-- / #keyv -->
	
	<div id="contents">
		<div class="section-banner section-first">
			<div class="inner">
				<div class="bn-box clearfix">
					<div class="btn-bnctact"><a href="#contact" class="hover-opacity"><img src="images/banner/btn_ctact.png" srcset="images/banner/btn_ctact@2x.png 2x" alt="お口の模型を無料で製作、ご説明しています。お気軽にお問い合わせください！ 無料相談予約はこちら"></a></div>
					<ul class="list-tel clearfix">
						<li><a href="tel:0429292345">所沢プロぺ通り店</a></li>
						<li><a href="tel:0429295427">イオン所沢店</a></li>
						<li><a href="tel:0429291010">パルコ新所沢店</a></li>
						<li><a href="tel:0424388488">ひばりが丘パルコ店</a></li>
					</ul>
					<div class="bn-info clearfix">
						<p class="bn-logo"><img src="images/common/img_logo.png" alt="オレンジ歯科クリニック Orange Dental Clinic"></p>
						<p class="bn-time"><strong>診療時間：</strong>10:00～13:00 　15:00～21:00 <span class="label-require">年中無休</span></p>
					</div>
				</div>
				<ul class="list-phone clearfix">
					<li>
						<p class="tit-phone">所沢プロぺ通り店</p>
						<p class="tel"><a href="tel:0429292345">04-2929-2345</a></p>
					</li>
					<li>
						<p class="tit-phone">イオン所沢店</p>
						<p class="tel"><a href="tel:0429295427">04-2929-5427</a></p>
					</li>
					<li>
						<p class="tit-phone">パルコ新所沢店</p>
						<p class="tel"><a href="tel:0429291010">04-2929-1010</a></p>
					</li>
					<li>
						<p class="tit-phone">ひばりが丘パルコ店</p>
						<p class="tel"><a href="tel:0424388488">042-438-8488</a></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-banner -->

		<div class="section-specialize">
			<div class="inner">
				<h2 class="h-specialize center">
					<span class="bounce-in">
						<img src="images/specialize/h_specialize.png" srcset="images/specialize/h_specialize@2x.png 2x" alt="矯正症例は1000件以上！当院はマウスピース矯正専門の医院です。">
					</span>
				</h2>
			</div>
		</div>
		<!-- / .section-specialize -->

		<div class="section section-reason">
			<div class="inner">
				<h2 class="h-reason center"><img src="images/reason/h_reason_pc.png" srcset="images/reason/h_reason_pc@2x.png 2x" alt="安心のマウスピース矯正当院が選ばれる6つの理由" class="img-sp"></h2>
				<ul class="list-reason fixHeight clearfix">
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point01.png" srcset="images/reason/point01@2x.png 2x" alt="Point 1"></p>
							<h4 class="tit-reason">矯正実績が1000件以上</h4>
						</div>
						<div class="fixHeightChild1">
							<p class="txt-reason">矯正の実績は1000症例以上！<br>
							専門医が在籍しているため、小児対応が可能です。（9歳くらいより）安心して私たちにお任せください。</p>
						</div>
					</li>
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point02.png" srcset="images/reason/point02@2x.png 2x" alt="Point 2"></p>
							<h4 class="tit-reason">4医院で処置可能！</h4>
						</div>
						<div class="fixHeightChild1">
							<p class="txt-reason">所沢プロぺ通り店・イオン所沢店・<br>
							パルコ新所沢店・ひばりが丘パルコ店と<br>
							４つの医院がございますので、<br>
							通いやすい医院をお選びください。</p>
						</div>
					</li>
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point03.png" srcset="images/reason/point03@2x.png 2x" alt="Point 3"></p>
							<h4 class="tit-reason">他の治療もワンストップ</h4>
						</div>
						<div class="fixHeightChild1">
							<p class="txt-reason">当院は総合歯科医院のため、矯正中に<br>
							矯正以外の治療が必要になった際にも<br>
							ワンストップで行うことができます。</p>
						</div>
					</li>
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point04.png" srcset="images/reason/point04@2x.png 2x" alt="Point 4"></p>
							<h4 class="tit-reason">年中無休で緊急対応可能</h4>
						</div>
						<div class="fixHeightChild1">
							<p class="txt-reason">土日・祝日も診療しておりますので、<br>
							お勤めされている方や平日の来院が<br>
							難しい方でも通院いただけます。</p>
						</div>
					</li>
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point05.png" srcset="images/reason/point05@2x.png 2x" alt="Point 5"></p>
							<h4 class="tit-reason">価格を抑えられる</h4>
						</div>
						<div class="fixHeightChild1">
							<div class="cost clearfix">
								<span>調整費用なし</span>
								<span>追加費用なし</span>
							</div>
							<p class="txt-reason">一般的な矯正治療は初期費用に加え、<br>
							月々5,000円～6,000円の調整費がかかります。当院では調整費を含み、トータルで月々6,200円より治療が可能です。<br>
							また、治療期間が延長した場合も追加料金は一切いただきませんので、ご安心くださいませ。</p>
						</div>
					</li>
					<li class="fixHeightChild">
						<div class="title-reason clearfix">
							<p class="point"><img src="images/reason/point06.png" srcset="images/reason/point06@2x.png 2x" alt="Point 6"></p>
							<h4 class="tit-reason">むずかしい症例も対応</h4>
						</div>
						<div class="fixHeightChild1">
							<p class="txt-reason">当院で行うマウスピース矯正の90％以上が「非抜歯」です。他院で「抜歯矯正が必要」と診断されたケースでも、数多く非抜歯にて対応していますので、ぜひ一度ご相談にいらしてください。</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-reason -->

		<div class="section-certified">
			<div class="inner">
				<h2 class="h-certified center"><img src="images/certified/h_certified.png" srcset="images/certified/h_certified@2x.png 2x" alt="当院はプラチナプロバイダーに認定されています。"></h2>
				<div class="txt-certified"><img src="images/certified/txt_certified.png" srcset="images/certified/txt_certified@2x.png 2x" alt="お客様にも高評価をいただいています！"></div>
				<div class="img-certified bounce-in"><img src="images/certified/img_certified.png" srcset="images/certified/img_certified@2x.png 2x" alt="矯正歯科部門県内第3位"></div>
			</div>
		</div>
		<!-- / .section-certified -->

		<div class="section section-story">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/story/title_story_pc.png" srcset="images/story/title_story_pc@2x.png 2x" alt="マウスピース矯正　スタッフ体験記">
				</h2>
				
				<div class="video-story">
					<iframe width="560" height="411" src="https://www.youtube.com/embed/bCQbeZdw9-8" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- / .section-story -->
		
		<div class="section-banner">
			<div class="inner">
				<div class="bn-box clearfix">
					<div class="btn-bnctact"><a href="#contact" class="hover-opacity"><img src="images/banner/btn_ctact.png" srcset="images/banner/btn_ctact@2x.png 2x" alt="お口の模型を無料で製作、ご説明しています。お気軽にお問い合わせください！ 無料相談予約はこちら"></a></div>
					<ul class="list-tel clearfix">
						<li><a href="tel:0429292345">所沢プロぺ通り店</a></li>
						<li><a href="tel:0429295427">イオン所沢店</a></li>
						<li><a href="tel:0429291010">パルコ新所沢店</a></li>
						<li><a href="tel:0424388488">ひばりが丘パルコ店</a></li>
					</ul>
					<div class="bn-info clearfix">
						<p class="bn-logo"><img src="images/common/img_logo.png" alt="オレンジ歯科クリニック Orange Dental Clinic"></p>
						<p class="bn-time"><strong>診療時間：</strong>10:00～13:00 　15:00～21:00 <span class="label-require">年中無休</span></p>
					</div>
				</div>
				<ul class="list-phone clearfix">
					<li>
						<p class="tit-phone">所沢プロぺ通り店</p>
						<p class="tel"><a href="tel:0429292345">04-2929-2345</a></p>
					</li>
					<li>
						<p class="tit-phone">イオン所沢店</p>
						<p class="tel"><a href="tel:0429295427">04-2929-5427</a></p>
					</li>
					<li>
						<p class="tit-phone">パルコ新所沢店</p>
						<p class="tel"><a href="tel:0429291010">04-2929-1010</a></p>
					</li>
					<li>
						<p class="tit-phone">ひばりが丘パルコ店</p>
						<p class="tel"><a href="tel:0424388488">042-438-8488</a></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-banner -->

		<div class="section section-about">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/about/title_about_pc.png" srcset="images/about/title_about_pc@2x.png 2x" alt="治療費について">
				</h2>
				
				<ul class="list-cost">
					<li class="item-cost">
						<div class="title-cost">無料歯並び相談</div>
						<div class="price-cost">０円</div>
					</li>

					<li class="item-cost">
						<div class="title-cost">精密検査費用</div>
						<div class="price-cost">30,000円</div>
					</li>
					
					<li class="item-cost">
						<div class="title-cost">マウスピース矯正(軽度)</div>
						<div class="price-cost">400,000円</div>
					</li>
					
					<li class="item-cost">
						<div class="title-cost">マウスピース矯正(通常)</div>
						<div class="price-cost">900,000円</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-about -->

		<div class="section section-mouthpiece">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/mouthpiece/title_mouthpiece_pc.png" srcset="images/mouthpiece/title_mouthpiece_pc@2x.png 2x" alt="マウスピース矯正とは？">
				</h2>
				
				<div class="wrap-content-mouthpiece clearfix">
					<div class="img-mouthpiece"><img src="images/mouthpiece/img_mouthpiece.jpg" alt="マウスピース矯正とは？"></div>
					<div class="text-mouthpiece">
						<p>歯を固定させるワイヤーやブラケットを使わず、取り外しができる<br>
						マウスピース型の装置を用いる矯正方法です。</p>
						<p>約2週間に1度、少しずつ形状を変化させた新しいマウスピースに<br>
						交換しながら歯を動かしていきます。 </p>
					</div>
				</div>
			</div>
		</div>
		<!-- / .section-mouthpiece -->

		<div class="section section-recommended">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/recommended/title_recommended_pc.png" srcset="images/recommended/title_recommended_pc@2x.png 2x" alt="こんな方ににおすすめいたします！">
				</h2>
				
				<ul class="list-recommended clearfix">
					<li class="item-recommended">
						<div class="content-recommended">
							矯正していることを人に知られたくない
						</div>
					</li>
					<li class="item-recommended">
						<div class="content-recommended">
							気になる前歯だけをキレイに整えたい
						</div>
					</li>
					<li class="item-recommended">
						<div class="content-recommended">
							歯を抜かず歯並びを治したい
						</div>
					</li>
					<li class="item-recommended">
						<div class="content-recommended">
							通院期間をできるだけ短くしたい
						</div>
					</li>
					<li class="item-recommended">
						<div class="content-recommended">
							治療費を抑えたい
						</div>
					</li>
					<li class="item-recommended">
						<div class="content-recommended">
							金属アレルギーである
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-recommended -->

		<div class="section section-benefits">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/benefits/title_benefits_pc.png" srcset="images/benefits/title_benefits_pc@2x.png 2x" alt="マウスピース矯正のメリットとは…？">
				</h2>

				<ul class="list-benefits fixHeight clearfix">
					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits01.jpg" alt="気づかれない"></div>
							<h4 class="title-benefits center">気づかれない</h4>
							<div class="description-benefits">
								なめらかで透明なマウスピースはつけていても目立たないため、人に気づかれることはほとんどありません。
							</div>
						</div>
					</li>

					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits02.jpg" alt="痛みが少ない"></div>
							<h4 class="title-benefits center">痛みが少ない</h4>
							<div class="description-benefits">
								従来のワイヤー矯正に比べ力がかかりにくく装着時の痛みや違和感が少なくなります。
							</div>
						</div>
					</li>

					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits03.jpg" alt="取り外し可能"></div>
							<h4 class="title-benefits center">取り外し可能</h4>
							<div class="description-benefits">
								取り外し可能なので、歯磨きが通常通り行えます。また、マウスピースは洗浄ができるので衛生的です。
							</div>
						</div>
					</li>

					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits04.jpg" alt="食事や会話は今まで通り"></div>
							<h4 class="title-benefits center">食事や会話は今まで通り</h4>
							<div class="description-benefits">
								取り外し可能なので、食事も今まで通りに楽しむことができます。
							</div>
						</div>
					</li>

					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits05.jpg" alt="治療期間が見える"></div>
							<h4 class="title-benefits center">治療期間が見える</h4>
							<div class="description-benefits">
								世界300万人以上の臨床データを元に、治療終了までのプロセスや期間を予め予測することができます。
							</div>
						</div>
					</li>

					<li class="item-benefits">
						<div class="bg-beneefits fixHeightChild">
							<div class="img-benefits"><img src="images/benefits/img_benefits06.jpg" alt="取り外し可能"></div>
							<h4 class="title-benefits center">取り外し可能</h4>
							<div class="description-benefits">
								プラスチック製の矯正器具を使用するため、金属アレルギーを引き起こす心配がありません。
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-benefits -->
		
		<div class="section-banner">
			<div class="inner">
				<div class="bn-box clearfix">
					<div class="btn-bnctact"><a href="#contact" class="hover-opacity"><img src="images/banner/btn_ctact.png" srcset="images/banner/btn_ctact@2x.png 2x" alt="お口の模型を無料で製作、ご説明しています。お気軽にお問い合わせください！ 無料相談予約はこちら"></a></div>
					<ul class="list-tel clearfix">
						<li><a href="tel:0429292345">所沢プロぺ通り店</a></li>
						<li><a href="tel:0429295427">イオン所沢店</a></li>
						<li><a href="tel:0429291010">パルコ新所沢店</a></li>
						<li><a href="tel:0424388488">ひばりが丘パルコ店</a></li>
					</ul>
					<div class="bn-info clearfix">
						<p class="bn-logo"><img src="images/common/img_logo.png" alt="オレンジ歯科クリニック Orange Dental Clinic"></p>
						<p class="bn-time"><strong>診療時間：</strong>10:00～13:00 　15:00～21:00 <span class="label-require">年中無休</span></p>
					</div>
				</div>
				<ul class="list-phone clearfix">
					<li>
						<p class="tit-phone">所沢プロぺ通り店</p>
						<p class="tel"><a href="tel:0429292345">04-2929-2345</a></p>
					</li>
					<li>
						<p class="tit-phone">イオン所沢店</p>
						<p class="tel"><a href="tel:0429295427">04-2929-5427</a></p>
					</li>
					<li>
						<p class="tit-phone">パルコ新所沢店</p>
						<p class="tel"><a href="tel:0429291010">04-2929-1010</a></p>
					</li>
					<li>
						<p class="tit-phone">ひばりが丘パルコ店</p>
						<p class="tel"><a href="tel:0424388488">042-438-8488</a></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-banner -->

		<div class="section section-staff">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/staff/title_staff_pc.png" srcset="images/staff/title_staff_pc@2x.png 2x" alt="スタッフ紹介">
				</h2>
				
				<ul class="list-staff">
					<li class="item-staff clearfix">
						<div class="img-staff"><img src="images/staff/img_staff01.png" alt="オレンジ歯科クリニック　　ダミー　ダミーダミー"></div>
						<div class="infor-staff">
							<h4 class="title-staff txt-orange">オレンジ歯科クリニック<span>ダミー　ダミーダミー</span></h4>
								
							<div class="description-staff">
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
							</div>
						</div>
					</li>

					<li class="item-staff clearfix">
						<div class="img-staff"><img src="images/staff/img_staff02.png" alt="オレンジ歯科クリニック　　ダミー　ダミーダミー"></div>
						<div class="infor-staff">
							<h4 class="title-staff txt-green">オレンジ歯科クリニック<span>ダミー　ダミーダミー</span></h4>
								
							<div class="description-staff">
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
							</div>
						</div>
					</li>

					<li class="item-staff clearfix">
						<div class="img-staff"><img src="images/staff/img_staff03.png" alt="オレンジ歯科クリニック　　ダミー　ダミーダミー"></div>
						<div class="infor-staff">
							<h4 class="title-staff txt-blue">オレンジ歯科クリニック<span>ダミー　ダミーダミー</span></h4>
								
							<div class="description-staff">
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
							</div>
						</div>
					</li>

					<li class="item-staff clearfix">
						<div class="img-staff"><img src="images/staff/img_staff04.png" alt="オレンジ歯科クリニック　　ダミー　ダミーダミー"></div>
						<div class="infor-staff">
							<h4 class="title-staff txt-pink">オレンジ歯科クリニック<span>ダミー　ダミーダミー</span></h4>
								
							<div class="description-staff">
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
								テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
							</div>
						</div>
					</li>
				</ul>

				<div class="lagre-img-staff center"><img src="images/staff/img_staff05.jpg" alt="スタッフ紹介"></div>
			</div>
		</div>
		<!-- / .section-staff -->
		
		<div class="section-banner">
			<div class="inner">
				<div class="bn-box clearfix">
					<div class="btn-bnctact"><a href="#contact" class="hover-opacity"><img src="images/banner/btn_ctact.png" srcset="images/banner/btn_ctact@2x.png 2x" alt="お口の模型を無料で製作、ご説明しています。お気軽にお問い合わせください！ 無料相談予約はこちら"></a></div>
					<ul class="list-tel clearfix">
						<li><a href="tel:0429292345">所沢プロぺ通り店</a></li>
						<li><a href="tel:0429295427">イオン所沢店</a></li>
						<li><a href="tel:0429291010">パルコ新所沢店</a></li>
						<li><a href="tel:0424388488">ひばりが丘パルコ店</a></li>
					</ul>
					<div class="bn-info clearfix">
						<p class="bn-logo"><img src="images/common/img_logo.png" alt="オレンジ歯科クリニック Orange Dental Clinic"></p>
						<p class="bn-time"><strong>診療時間：</strong>10:00～13:00 　15:00～21:00 <span class="label-require">年中無休</span></p>
					</div>
				</div>
				<ul class="list-phone clearfix">
					<li>
						<p class="tit-phone">所沢プロぺ通り店</p>
						<p class="tel"><a href="tel:0429292345">04-2929-2345</a></p>
					</li>
					<li>
						<p class="tit-phone">イオン所沢店</p>
						<p class="tel"><a href="tel:0429295427">04-2929-5427</a></p>
					</li>
					<li>
						<p class="tit-phone">パルコ新所沢店</p>
						<p class="tel"><a href="tel:0429291010">04-2929-1010</a></p>
					</li>
					<li>
						<p class="tit-phone">ひばりが丘パルコ店</p>
						<p class="tel"><a href="tel:0424388488">042-438-8488</a></p>
					</li>
				</ul>
			</div>
		</div>
		<!-- / .section-banner -->

		<div class="section section-access">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/access/title_access_pc.png" srcset="images/access/title_access_pc@2x.png 2x" alt="アクセス">
				</h2>

				<ul class="list-access">
					<li class="item-access clearfix">
						<div class="content-access">
							<div class="head-access">
								<h4 class="title-access txt-orange">
									オレンジ歯科クリニック
									<span class="sub-title">所沢プロぺ通り店</span>
								</h4>

								<p class="add-access">〒359-1123　埼玉県所沢市日吉町10-19　TokorozawaEx　1F</p>
							</div>
							
							<div class="map-access">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3236.486979637578!2d139.4698846!3d35.7879764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018dd8a02b8107b%3A0xd203452dae15b193!2z44Kq44Os44Oz44K45q2v56eR44Kv44Oq44OL44OD44KvIOaJgOayouODl-ODreODmuW6lw!5e0!3m2!1sja!2sjp!4v1507607936457" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							
							<div class="tel phone-access">
								<a href="tel:0429292345" class="clearfix">
									<span class="icon-access"><img src="images/access/icon_phone01.png" alt="04-2929-2345"></span>
									04-2929-2345
								</a>
							</div>

							<ul class="list-infor-access">
								<li><span>所沢駅西口　徒歩3分</span></li>
								<li><span>プロぺ通り沿い1F</span></li>
							</ul>

							<div class="btn-access center">
								<a class="hover-opacity" href="http://haisha-yoyaku.jp/bun2sdental/detail/index/id/1132503589/" target="_blank"><img src="images/access/btn_access01.png" srcset="images/access/btn_access01@2x.png 2x" alt="無料相談予約はこちら"></a>
							</div>
						</div>
					</li>

					<li class="item-access clearfix">
						<div class="content-access">
							<div class="head-access">
								<h4 class="title-access txt-green">
									オレンジ歯科クリニック
									<span class="sub-title">イオン所沢店</span>
								</h4>

								<p class="add-access">〒359-1116　埼玉県所沢市東町5-22　イオン所沢店　7F</p>
							</div>

							<div class="map-access">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.4357799614563!2d139.46783426574288!3d35.78923368016947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018dd8bae50b893%3A0xa55f72518fbd10c3!2sOrange+Dental+Clinic!5e0!3m2!1svi!2s!4v1507021176115" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							
							<div class="tel phone-access">
								<a href="tel:0429295427" class="clearfix">
									<span class="icon-access"><img src="images/access/icon_phone02.png" alt="04-2929-5427"></span>
									04-2929-5427
								</a>
							</div>

							<ul class="list-infor-access">
								<li><span>所沢駅西口　徒歩5分</span></li>
								<li><span>イオン所沢店7F</span></li>
							</ul>

							<div class="btn-access center">
								<a class="hover-opacity" href="http://haisha-yoyaku.jp/bun2sdental/detail/index/id/1132503092/" target="_blank"><img src="images/access/btn_access02.png" srcset="images/access/btn_access02@2x.png 2x" alt="無料相談予約はこちら"></a>
							</div>
						</div>
					</li>

					<li class="item-access clearfix">
						<div class="content-access">
							<div class="head-access">
								<h4 class="title-access txt-blue">
									オレンジ歯科クリニック
									<span class="sub-title">パルコ新所沢店</span>
								</h4>

								<p class="add-access">〒359-1111　埼玉県所沢市緑町1-2-1　パルコ新所沢店　1F</p>
							</div>

							<div class="map-access">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.7903708342114!2d139.4529833657433!3d35.80507933016559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018dddb0ff7bc69%3A0xd849dbe8eee82483!2z44Kq44Os44Oz44K45q2v56eR44Kv44Oq44OL44OD44KvIOODkeODq-OCs-aWsOaJgOayouW6lw!5e0!3m2!1svi!2s!4v1507021278555" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							
							<div class="tel phone-access">
								<a href="tel:0429291010" class="clearfix">
									<span class="icon-access"><img src="images/access/icon_phone03.png" alt="04-2929-1010"></span>
									04-2929-1010
								</a>
							</div>

							<ul class="list-infor-access">
								<li><span>新所沢駅西口　徒歩1分</span></li>
								<li><span>新所沢パルコ1F</span></li>
							</ul>

							<div class="btn-access center">
								<a class="hover-opacity" href="http://haisha-yoyaku.jp/bun2sdental/detail/index/id/z200001668/" target="_blank"><img src="images/access/btn_access03.png" srcset="images/access/btn_access03@2x.png 2x" alt="無料相談予約はこちら"></a>
							</div>
						</div>
					</li>

					<li class="item-access clearfix">
						<div class="content-access">
							<div class="head-access">
								<h4 class="title-access txt-pink">
									オレンジ歯科クリニック
									<span class="sub-title">ひばりが丘パルコ店</span>
								</h4>

								<p class="add-access">〒202-0001　東京都西東京市ひばりが丘1-1-1　パルコ5F</p>
							</div>

							<div class="map-access">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.963072784033!2d139.54198086574218!3d35.75171238017777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e8b747212361%3A0xafc4e6cc0429560d!2sOrange+Dental+Clinic!5e0!3m2!1svi!2s!4v1507021359950" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							
							<div class="tel phone-access">
								<a href="tel:0424388488" class="clearfix">
									<span class="icon-access"><img src="images/access/icon_phone04.png" alt="0424388488"></span>
									042-438-8488
								</a>
							</div>

							<ul class="list-infor-access">
								<li><span>ひばりが丘駅　徒歩1分</span></li>
								<li><span>ひばりが丘パルコ5F</span></li>
							</ul>

							<div class="btn-access center">
								<a class="hover-opacity" href="http://haisha-yoyaku.jp/bun2sdental/detail/index/id/g000007308/" target="_blank"><img src="images/access/btn_access04.png" srcset="images/access/btn_access04@2x.png 2x" alt="無料相談予約はこちら"></a>
							</div>
						</div>
					</li>
				</ul>

				<ul class="image-access clearfix">
					<li><img src="images/access/img_access01.jpg" alt="アクセス"></li>
					<li><img src="images/access/img_access02.jpg" alt="アクセス"></li>
				</ul>
			</div>
		</div>
		<!-- / .section-access -->

		<div id="contact" class="section section-form">
			<div class="inner">
				<h2 class="title-section center">
					<img class="img-sp" src="images/form/title_contact_pc.png" srcset="images/form/title_contact_pc@2x.png 2x" alt="無料相談　ご予約フォーム">
				</h2>

				<div class="describle-form">
					下のフォームに、必要情報のご入力のうえ、「入力内容確認画面へ」のボタンをクリックしてください。<br>
					お電話でも受け付けておりますのでお気軽にお問い合わせください。<br/>
					※お客さまからいただいたメールアドレスが違っている場合や、システム障害などによりお返事できない場合がございます。3～4日経っても返答のない場合、恐れ入りますがお電話でその旨を問い合わせください。
				</div>
				
				<ul class="list-phone clearfix">
					<li>
						<p class="tit-phone">所沢プロぺ通り店</p>
						<p class="tel"><a href="tel:0429292345">04-2929-2345</a></p>
					</li>
					<li>
						<p class="tit-phone">イオン所沢店</p>
						<p class="tel"><a href="tel:0429295427">04-2929-5427</a></p>
					</li>
					<li>
						<p class="tit-phone">パルコ新所沢店</p>
						<p class="tel"><a href="tel:0429291010">04-2929-1010</a></p>
					</li>
					<li>
						<p class="tit-phone">ひばりが丘パルコ店</p>
						<p class="tel"><a href="tel:0424388488">042-438-8488</a></p>
					</li>
				</ul>

				<p class="text-head-form">
					（<span class="icon-circle orange"></span>&nbsp;印は必須項目です。）
				</p>

				<div class="form-contact">
					<?php if($error) echo '<div class="txt-contact">' . $error . '</div>'; ?>
					<form id="fcontact" name="fcontact" method="post" action="index.php#fcontact" onsubmit="return CheckValidator('fcontact');">
						<table>
							<tr>
								<th><p><span class="icon-circle orange"></span>お名前</p></th>
								<td><input type="text" class="form-control input-name requiredf" placeholder="（例）山田　太郎" name="name" id="name" value="<?php echo $_SESSION["contact"]["name"]; ?>" msg_error="お名前は必ずご入力ください。"></td>
							</tr>
							<tr>
								<th><p>お名前（フリガナ）</p></th>
								<td><input type="text" class="form-control input-re-name katakana" placeholder="（例）ヤマダタロウ" name="namekana" id="namekana" value="<?php echo $_SESSION["contact"]["namekana"]; ?>"></td>
							</tr>
							<tr>
								<th><p><span class="icon-circle orange"></span>メールアドレス</p></th>
								<td><input type="text" class="form-control input-mail requiredf email" placeholder="（例）mail@mail.com" name="email" id="email" value="<?php echo $_SESSION["contact"]["email"]; ?>" msg_error="メールアドレスは必ずご入力ください。"></td>
							</tr>
							<tr>
								<th><p>年齢</p></th>
								<td><input type="text" class="form-control input-age" name="age" id="age" value="<?php echo $_SESSION["contact"]["age"];?>"><span class="text-age">歳</span></td>
							</tr>
							<tr>
								<th><p>性別</p></th>
								<td>
									<label class="input-gender">
										<input type="radio" name="gender"<?php if($_SESSION["contact"]["property"]) { echo ($_SESSION["contact"]["gender"] == "男") ? "checked" : " ";} ?> value="男"><span class="text-gender">男</span>
									</label>
									<label class="input-gender">
										<input type="radio" name="gender" <?php echo ($_SESSION["contact"]["gender"] == "女") ? "checked" : " " ; ?> value="女"><span class="text-gender">女</span>
									</label>
								</td>
							</tr>
							<tr>
								<th><p><span class="icon-circle orange"></span>電話番号</p></th>
								<td><input type="text" name="phone" id="phone" class="form-control input-phone requiredf tel" placeholder="（例）080-0000-0000" value="<?php echo $_SESSION["contact"]["phone"]; ?>" msg_error="電話番号は必ずご入力ください。"></td>
							</tr>
							<tr>
								<th><p><span class="icon-circle orange"></span>希望医院名</p></th>
								<td>
									<label class="input-hospital" id="hospital-name">
										<input type="radio" class="requiredf" name="hospital-name" <?php if($_SESSION["contact"]["hospital-name"]){ echo ($_SESSION["contact"]["hospital-name"] == "所沢プロペ通り店") ? "checked" : " ";} ?> value="所沢プロペ通り店" msg_error="希望医院名は必ずご入力ください。">所沢プロペ通り店
									</label>
									<label class="input-hospital">
										<input type="radio" name="hospital-name" class="requiredf" <?php echo ($_SESSION["contact"]["hospital-name"] == "イオン所沢店") ? "checked" : " " ; ?> value="イオン所沢店" msg_error="希望医院名は必ずご入力ください。">イオン所沢店
									</label>
									<label class="input-hospital">
										<input type="radio" class="requiredf" name="hospital-name" <?php echo ($_SESSION["contact"]["hospital-name"] == "パルコ新所沢店") ? "checked" : " " ; ?> value="パルコ新所沢店" msg_error="希望医院名は必ずご入力ください。">パルコ新所沢店
									</label>
									<label class="input-hospital">
										<input type="radio" class="requiredf" name="hospital-name" <?php echo ($_SESSION["contact"]["hospital-name"] == "ひばりが丘パルコ店")?"checked":" " ; ?> value="ひばりが丘パルコ店" msg_error="希望医院名は必ずご入力ください。">ひばりが丘パルコ店
									</label>
								</td>
							</tr>
							<tr>
								<th>
									<p>希望日・時間帯・相談内容など
										<span class="sub-text">
										※恐れ入りますが<br>
										13：00～15：00の間はお昼休みを<br>
										いただいております。</span></p>
								</th>
								<td><textarea class="form-control input-message" name="comment" id="comment" value="<?php echo $_SESSION["contact"]["comment"]; ?>"></textarea></td>
							</tr>
						</table>

						<div class="wrap-button-contact center clearfix">
                            <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
							
                            <input type="hidden" name="actual_link" value = "<?php echo $actual_link; ?>">
                            <input type="submit" class="btn-submit hover-opacity" name="send" id="send">
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
				<a href="#" class="logo-foot hover-opacity"><img src="images/footer/logo_foot.jpg" alt="オレンジ歯科クリニック Orange Dental Clinic"></a>
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

	<!--[if lt IE 9]>
	<script src="js/html5shiv-printshiv.js"></script>
	<![endif]-->
</body>
</html>