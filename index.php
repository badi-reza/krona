<?php
require_once "admin/funtions/fun.php";

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
	
<!-- Mirrored from joker-themes.com/krona-d/demos/rtl-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 15:41:49 GMT -->
<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="DESCRIPTION">
		<meta name="keywords" content="KEYWORDS">
		<meta name="author" content="AUTHOR NAME">

		<!-- TITLE -->
		<title>Krona</title>

		<!-- FAVICON -->
	    <link href="img/favicon/favicon.ico" rel="icon">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.html">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.html">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.html">

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

		<!-- FONT-AWESOME & ET-LINE-FONT CSS -->
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

	    <!-- MAGNIFIC POPUP CORE CSS -->
	    <link href="css/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- OWL CAROUSEL -->
        <link href="css/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl-carousel/owl.theme.default.min.css" rel="stylesheet">

		<!-- MAIN STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

		<!-- RESPONSIVE STYLE CSS -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- COLORS CSS -->
		<link rel="stylesheet" href="css/colors/blue.css">
		<!-- my rtl --> 
		<link rel="stylesheet" href="css/rtl.css">

		<!-- CUSTOM COLORS -->
		<!--
		<link rel="stylesheet" href="css/colors/blue.css">
		<link rel="stylesheet" href="css/colors/green.css">
		<link rel="stylesheet" href="css/colors/orange.css">
		<link rel="stylesheet" href="css/colors/red.css">
		<link rel="stylesheet" href="css/colors/brown.css">
		<link rel="stylesheet" href="css/colors/gold.css">
		<link rel="stylesheet" href="css/colors/aqua.css">
		<link rel="stylesheet" href="css/colors/salmon.css">
		-->

	</head>
	<body>


		<!-- ====== Preloader ======  -->
	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>
		<!-- ======End Preloader ======  -->


		<!-- COLOR SWITCHE -->
		<!-- <div class="option-box">
            <div class="color-option">
                <span id="t-title">Colors :</span>
                <div class="list-unstyled">
                    <ul class="colors">
                    <li data-value="css/colors/blue.css" id="color1"></li>
                    <li data-value="css/colors/green.css" id="color2"></li>
                    <li data-value="css/colors/orange.css" id="color3"></li>
                    <li data-value="css/colors/red.css" id="color4"></li>
                    <li style="display: block;height: 0;width: 0;"></li>
                    <li data-value="css/colors/brown.css" id="color5"></li>
                    <li data-value="css/colors/gold.css" id="color6"></li>
                    <li data-value="css/colors/aqua.css" id="color7"></li>
                    <li data-value="css/colors/salmon.css" id="color8"></li>
                    </ul>
                </div>
                <a href="https://themeforest.net/item/blue-crown-one-page-parallax/22050262?ref=joker_themes" target="_blank"><i class="fa fa-shopping-cart"></i> شراء القالب</a>
            </div>
            <div class="gear-check">
                <i class="fa fa-cog fa-spin fa-fw"></i>
            </div>
        </div> -->


		<!-- ====== HEADER START ======  -->
		<section class="s-header" id="home" data-scroll-index="0">
			<div class="header-overlay">


				<!-- ====== NAVGITION ======  -->
				<nav class="navbar land-nav">
					<div class="container">
						<div class="row">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-right">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- logo -->
								<a class="logo navbar-brand" href="#home" data-scroll-nav="0">

									<!-- WHITE LOGO -->
									<img class="white-logo" width="200" src="./img/white-logo.png" alt="logo" />

									<!-- DARK LOGO -->
									<img class="dark-logo" width="200" src="./img/dark-logo.png" alt="logo" />
									
								</a>
							</div>

							<!-- Collect the nav links, and other content for toggling -->
							<div class="collapse navbar-collapse" id="collapse">

								<!-- links -->
								<ul class="nav navbar-nav navbar-right" id="navbar">
									<li><a href="#home" data-scroll-nav="0" class="active">خانه</a></li>

                                    <?php
                                    $cat = listctg();
                                    foreach ($cat as $item){
                                        echo "<li><a href=\"#about\" data-scroll-nav=\"1\">$item[title] </a></li>";
                                    }

                                    ?>


								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</div><!-- /.container -->
				</nav>
				<!-- ====== END NAVGITION ======  -->


				<!-- Header Content -->
				<div class="middle-c text-center">
					<div class="container">
						<div class="row">
							<div class="capt col-md-8 col-sm-11">


                                <?php
                                    $line = listHead();
                                    foreach ($line as $itemline){
                                        echo "<h1>$itemline[line_one]</h1>";
                                    }

                                    ?>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>

								<!-- Buttons -->
								<div class="header-btn">
									<a href="#about" data-scroll-nav="1">درباره ما</a>
									<a class="cta-btn" href="#contact" data-scroll-nav="6"> تماس با ما</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- End Header Content -->

				
			</div>
		</section>
		<!-- ====== END HEADER ======  -->


		<!-- ====== ABOUT START ======  -->
		<section class="about sections" id="about" data-scroll-index="1">
			<div class="container">
				<div class="row">


					<!-- ABOUT CONTENT START -->
					<div class="about-co col-md-7">

						<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</h3>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						<a href="#services" data-scroll-nav="2">
							خدمات ما
						</a>

					</div>
					<!-- ABOUT CONTENT END -->

					<!-- ABOUT SKILLS START -->
					<div class="skills col-md-5">

						<ul>
							<li>
								<span> لورم ایپسوم ۱</span>
								<div class="progress">
									<div class="progress-bar" data-percent="95" style="width: 95%;">
					                    <span>95%</span>
					                 </div>
				                 </div>
							</li>
							<li>
								<span> لورم ایپسوم 2</span>
								<div class="progress">
									<div class="progress-bar" data-percent="90" style="width: 90%;">
					                    <span>90%</span>
					                 </div>
				                 </div>
							</li>
							<li>
								<span> لورم ایپسوم 3</span>
								<div class="progress">
									<div class="progress-bar" data-percent="65" style="width: 65%;">
					                    <span>65%</span>
					                 </div>
				                 </div>
							</li>
							<li>
								<span> لورم ایپسوم 4</span>
								<div class="progress">
									<div class="progress-bar" data-percent="35" style="width: 35%;">
					                    <span>35%</span>
					                 </div>
				                 </div>
							</li>
						</ul>

					</div>
					<!-- ABOUT SKILLS END -->


				</div>
			</div>
		</section>
		<!-- ====== ABOUT END ======  -->


		<!-- ====== FEATURES START ======  -->
		<section class="features sections black-bg">
			<div class="container">
				<div class="row">


					<!-- FEATURE ITEM -->
					<div class="col-md-4">
						<div class="feat-item">
							<i class="icon icon-desktop"></i>
							<div class="feat-info">
								<h5> لورم ایپسوم</h5>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
							</div>
						</div>
					</div>

					<!-- FEATURE ITEM -->
					<div class="col-md-4">
						<div class="feat-item">
							<i class="icon icon-hourglass"></i>
							<div class="feat-info">
								<h5> لورم ایپسوم</h5>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
							</div>
						</div>
					</div>

					<!-- FEATURE ITEM -->
					<div class="col-md-4">
						<div class="feat-item">
							<i class="icon icon-search"></i>
							<div class="feat-info">
								<h5> لورم ایپسوم</h5>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- ====== FEATURES END ======  -->


		<!-- ====== SERVICES START ======  -->
		<section class="services sections" id="services" data-scroll-index="2">
			<div class="container">
				<div class="row">


					<!-- SECTION TITLE START -->
					<div class="s-title">
						<h4>  ما چه کارهایی می‌کنیم؟ </h4>
						<div class="title-line">
                            <hr class="t-line">
                            <hr class="b-line">
                        </div>
					</div>
					<!-- SECTION TITLE END -->


					<!-- SERVICES CONTENT START -->
                    <?php
                    $news = listNws();
                    foreach ($news as $itemnews):
                        ?>
					<div class="serv-co">

						<!-- SERVICE ITEM -->

						<div class="serv-item col-md-4">
							<!-- SERVICE ICON -->
							<div class="serv-icon">
								<i class="icon icon-browser"></i>
							</div>
							<!-- SERVICE TITLE -->
							<?php echo "<h3>$itemnews[name]</h3>";?>
							<!-- SERVICE TEXT -->
							<?php echo "<p>$itemnews[text]</p>";?>
						</div>




					</div>
					<!-- SERVICES CONTENT END -->
                    <?php
                    endforeach;
                    ?>


				</div>
			</div>
		</section>
		<!-- ====== SERVICES END ======  -->


		<!-- ====== QUOTE START ======  -->
		<section class="quote">
			<div class="quote-overlay sections">
				<div class="container">
					<div class="row">


						<span class="icon icon-quote"></span>

						<div class="quote-co col-md-10">

                            <?php
                            $line = listHead();
                            foreach ($line as $itemline){
                                echo "<p>$itemline[line_two]</p>";
                            }

                            ?>

							<h4>مستر ایکس</h4>
							<span> رئیس شرکت   </span>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ====== QUOTE END ======  -->


		<!-- ====== WORK START ======  -->
		<section class="work sections" id="work" data-scroll-index="3">
			<div class="container">
				<div class="row">


					<!-- SECTION TITLE START -->
					<div class="s-title">
						<h4> اخرین کارهای ما</h4>
						<div class="title-line">
                            <hr class="t-line">
                            <hr class="b-line">
                        </div>
					</div>
					<!-- SECTION TITLE END -->


					<!-- WORK FILTER BUTTONS -->
					<div class="button-group filter-work">
					  <a class="button is-checked" data-filter="*">همه</a>
					  <a class="button " data-filter=".item-branding"> تجاری</a>
					  <a class="button" data-filter=".item-mobile">گرافیک</a>
					  <a class="button" data-filter=".item-userexperience"> هنر</a>
					  <a class="button" data-filter=".item-webdesign"> لورم ایپسوم</a>
					</div>
					<!-- END WORK FILTER BUTTONS -->


					<!-- WORK CONTENT START -->
                    <?php
                    $imgg = listImage();
                    foreach ($imgg as $itemimg):
                    ?>

					<div class="work-content">
					  
						<!-- WORK ITEM -->
						<div class="work-item item-branding">
							<div class="work-caption">
									
								<!-- WORK IMAGE -->
						  		<img src="<?php echo "admin/".$itemimg['image'] ?>" alt="Image Title" />

						  		<!-- WORK TITLE -->
							  	<div class="overlay">
							  		<div class="info-content">
								  		<a href="#0">
									  		<h4> لورم ایپسوم</h4>
									  		<p> طراحان نامفهوم</p>
									  	</a>
									</div>
									<div class="know-more">
										<a class="modal-image" href="./img/portfolio/1.jpg">
											<i class="fa fa-image"></i>
										</a>
									</div>
							  	</div>

							</div>
						</div>

					</div>

                    <?php

                    endforeach;

                    ?>
					<!-- WORK CONTENT END -->


				</div>
			</div>
		</section>
		<!-- ====== WORK END ======  -->


		<!-- ====== TESTIMONIALS START ======  -->
		<section class="testimonials sections text-center black-bg">
			<div class="container">
				<div class="row">


					<i class="icon icon-quote"></i>


					<div class="owl-carousel owl-theme">

							<!-- TESTIMONIALS ITEM -->
							<div class="t-item">
								<div class="testimonial-box col-md-8 col-xs-10">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
									<!-- TESTIMONIAL NAME -->
									<h3> مستر ایکس<span>رئیس شرکت </span></h3>
								</div>
							</div>

							<!-- TESTIMONIALS ITEM -->
							<div class="t-item">
								<div class="testimonial-box col-md-8 col-xs-10">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شراساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
									<!-- TESTIMONIAL NAME -->
									<h3> مستر ایکس<span>رئیس شرکت </span></h3>
								</div>
							</div>

						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- ====== TESTIMONIALS END ======  -->


		<!-- ====== PRICING START ======  -->
		<section class="price sections" id="price" data-scroll-index="4">
			<div class="container">
				<div class="row">


					<!-- SECTION TITLE START -->
					<div class="s-title">
						<h4> قیمت گذاری</h4>
						<div class="title-line">
                            <hr class="t-line">
                            <hr class="b-line">
                        </div>
					</div>
					<!-- SECTION TITLE END -->


					<!-- PRICING CONTENT START -->
					<div class="price-c">


						<!-- PRICE TABLE START -->
						<div class="price-table col-md-4">

							<div class="item text-center">
								<div class="type">
									<h5>مبتدی</h5>
								</div>
								<div class="mount">
									<h4>10هزار تومان</h4>
								</div>
								<div class="p-feat">
									<p>لورم ایپسوم ۱</p>
									<p> لورم ایپسوم ۲</p>
									<p> لورم ایپسوم ۳</p>
									<p>_</p>
								</div>
								<div class="order">
									<a href="#">
										اشتراک بگیرید
									</a>
								</div>
							</div>

						</div>
						<!-- PRICE TABLE END -->

						<!-- PRICE TABLE START -->
						<div class="price-table col-md-4 best">

							<div class="item text-center">
								<div class="type">
									<h5>پیشرفته</h5>
								</div>
								<div class="mount">
									<h4>100هزار تومان</h4>
								</div>
								<div class="p-feat">
									<p>لورم ایپسوم ۱</p>
									<p> لورم ایپسوم ۲</p>
									<p> لورم ایپسوم ۳</p>
									<p>_</p>
								</div>
								<div class="order">
									<a href="#">
										اشتراک بگیرید
									</a>
								</div>
							</div>

						</div>
						<!-- PRICE TABLE END -->

						<!-- PRICE TABLE START -->
						<div class="price-table col-md-4">

							<div class="item text-center">
								<div class="type">
									<h5>حرفه ای</h5>
								</div>
								<div class="mount">
									<h4>200هزار تومان</h4>
								</div>
								<div class="p-feat">
									<p>لورم ایپسوم ۱</p>
									<p> لورم ایپسوم ۲</p>
									<p> لورم ایپسوم ۳</p>
									<p>_</p>
								</div>
								<div class="order">
									<a href="#">
										اشتراک بگیرید
									</a>
								</div>
							</div>

						</div>
						<!-- PRICE TABLE END -->


					</div>
					<!-- PRICING CONTENT END -->


				</div>
			</div>
		</section>
		<!-- ====== PRICING END ======  -->


		<!-- ====== BLOG START ======  -->
		<section class="blog sections" id="blog" data-scroll-index="5">
			<div class="container">
				<div class="row">


					<!-- SECTION TITLE START -->
					<div class="s-title">
						<h4> اخرین اخبار</h4>
						<div class="title-line">
                            <hr class="t-line">
                            <hr class="b-line">
                        </div>
					</div>
					<!-- SECTION TITLE END -->


					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-1.jpg');">
								<div class="blog-overlay"></div>
							</div>

							<!-- CATEGORY OF THE POST -->							
							<div class="categ">
								<span> لورم ایپسوم</span>
							</div>

							<!-- POST TITLTE -->
							<a href="#0">
								<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
							</a>

							<!-- POST CONTENT-->
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
							</p>

							<!-- POST LINK -->
							<div class="post-link">
								<a href="#0">
									 ادامه مطلب
									<i class="fa fa-angle-double-left"></i>
								</a>
							</div>

						</div>
					</div>
					<!-- END BLOG POST -->

					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-2.jpg');">
								<div class="blog-overlay"></div>
							</div>

								<!-- CATEGORY OF THE POST -->							
								<div class="categ">
									<span> لورم ایپسوم</span>
								</div>
	
								<!-- POST TITLTE -->
								<a href="#0">
									<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
								</a>
	
								<!-- POST CONTENT-->
								<p>
									لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
								</p>
	
								<!-- POST LINK -->
								<div class="post-link">
									<a href="#0">
										 ادامه مطلب
										<i class="fa fa-angle-double-left"></i>
									</a>
								</div>

						</div>
					</div>
					<!-- END BLOG POST -->

					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-3.jpg');">
								<div class="blog-overlay"></div>
							</div>

							<!-- CATEGORY OF THE POST -->							
							<div class="categ">
								<span> لورم ایپسوم</span>
							</div>

							<!-- POST TITLTE -->
							<a href="#0">
								<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
							</a>

							<!-- POST CONTENT-->
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
							</p>

							<!-- POST LINK -->
							<div class="post-link">
								<a href="#0">
									 ادامه مطلب
									<i class="fa fa-angle-double-left"></i>
								</a>
							</div>

						</div>
					</div>
					<!-- END BLOG POST -->

					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-1.jpg');">
								<div class="blog-overlay"></div>
							</div>

								<!-- CATEGORY OF THE POST -->							
								<div class="categ">
									<span> لورم ایپسوم</span>
								</div>
	
								<!-- POST TITLTE -->
								<a href="#0">
									<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
								</a>
	
								<!-- POST CONTENT-->
								<p>
									لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
								</p>
	
								<!-- POST LINK -->
								<div class="post-link">
									<a href="#0">
										 ادامه مطلب
										<i class="fa fa-angle-double-left"></i>
									</a>
								</div>

						</div>
					</div>
					<!-- END BLOG POST -->

					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-2.jpg');">
								<div class="blog-overlay"></div>
							</div>

							<!-- CATEGORY OF THE POST -->							
							<div class="categ">
								<span> لورم ایپسوم</span>
							</div>

							<!-- POST TITLTE -->
							<a href="#0">
								<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
							</a>

							<!-- POST CONTENT-->
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
							</p>

							<!-- POST LINK -->
							<div class="post-link">
								<a href="#0">
									 ادامه مطلب
									<i class="fa fa-angle-double-left"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- END BLOG POST -->

					<!-- START BLOG POST -->
					<div class="col-md-4 blog-box">
						<div class="blog-item">

							<!-- BLOG IMAGE -->
							<div class="feature-box-img" style="background-image: url('./img/blog-img-3.jpg');">
								<div class="blog-overlay"></div>
							</div>

								<!-- CATEGORY OF THE POST -->							
								<div class="categ">
									<span> لورم ایپسوم</span>
								</div>
	
								<!-- POST TITLTE -->
								<a href="#0">
									<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
								</a>
	
								<!-- POST CONTENT-->
								<p>
									لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
								</p>
	
								<!-- POST LINK -->
								<div class="post-link">
									<a href="#0">
										 ادامه مطلب
										<i class="fa fa-angle-double-left"></i>
									</a>
								</div>

						</div>
					</div>
					<!-- END BLOG POST -->


				</div>
			</div>
		</section>
		<!-- ====== BLOG END ======  -->


		<!-- ====== START CONTACT ======  -->
		<section class="contact sections black-bg" id="contact" data-scroll-index="6">
			<div class="container">
				<div class="row">


					<!-- SECTION TITLE START -->
					<div class="s-title">
						<h4> تماس با ما </h4>
						<div class="title-line">
                            <hr class="t-line">
                            <hr class="b-line">
                        </div>
					</div>
					<!-- SECTION TITLE END -->


					<!-- LEFT SIDE START -->
					<div class="left-side col-md-5">

						<h5>درباره شرکت ما :</h5>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیازلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>

						<div class="con-info">

							<div class="info-item">
								<!-- ICON -->
								<span>
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>
								<!-- CONTENT -->
								<p>ایران -- تهران</p>
							</div>
							<div class="info-item">
								<!-- ICON -->
								<span>
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
								<!-- CONTENT -->
								<p>+1 (123) 456-7899 , +1 (987) 654-3210</p>
							</div>
							<div class="info-item">
								<!-- ICON -->
								<span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
								<!-- CONTENT -->
								<p>support@email.com</p>
							</div>
							<div class="info-item">
								<!-- ICON -->
								<span>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</span>
								<!-- CONTENT -->
								<p>شنبه تا چهارشنبه </p>
							</div>

						</div>

					</div>
					<!-- LEFT SIDE END -->


					<!-- RIGHT SIDE START -->
					<div class="right-side contact-form col-md-7">
						<form action="http://joker-themes.com/krona-d/demos/rtl-version/php/contact.php" method="POST" class="cont-fo">


							<div class="contact-item col-md-12">
								<input type="text" name="name" placeholder="نام *" required="required">
							</div>
							<div class="contact-item col-md-12">
								<input type="email" name="email" placeholder="ایمیل *" required="required">
							</div>
							<div class="contact-item col-md-12">
								<input type="text" name="subject" placeholder="موضوع">
							</div>
							<div class="contact-item col-md-12">
								<textarea id="form_message" name="message" placeholder="پیام *" rows="4" required="required" data-error="Message."></textarea>
							</div>
							<div class="contact-item col-md-12">
								<input type="submit" class="button disabled" value="ارسال">
							</div>


						</form>
					</div>
					<!-- RIGHT SIDE END -->


				</div>
			</div>
		</section>
		<!-- ====== END CONTACT ======  -->


		<!-- =========    GOOGLE MAP START    ======== -->
		<div id="map"></div>
		<!-- =========    GOOGLE MAP END    ======== -->
		

		<!-- =========    FOOTER START    ======== -->
		<footer class="sections">
			<div class="container">
				<div class="row">


					<!-- SOCIAL ICONS -->
					<div class="sc-icon">
						<a href="#0">
							<span>
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0">
							<span>
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0">
							<span>
								<i class="fa fa-behance" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0">
							<span>
								<i class="fa fa-vimeo" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0">
							<span>
								<i class="fa fa-pinterest-p" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0">
							<span>
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
					</div>


					<!-- START RIGHTS -->
					<div class="sub-footer">
						<span>کپی رایت ۲۰۲۰ &copy;</span>
					</div>


				</div>
			</div>
		</footer>
		<!-- =========    FOOTER END    ======== -->


		<!-- ====== JS ======  -->
		<!-- JQUERY -->
		<script src="js/jquery.v1.12.4.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- OWL CAROUSEL JS -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- COUNT TO JS -->
		<script src="js/jquery.countTo.js"></script>
		<!-- ISOTOPE JS -->
		<script src="js/isotope.pkgd.min.js"></script>
		<!-- MASONRY JS -->
		<script src="js/masonry.pkgd.min.js"></script>
	    <!-- Magnific Popup core JS -->
	    <script src="js/jquery.magnific-popup.min.js"></script>
		<!-- PARSLEY file -->
	    <script src="js/parsley.js"></script>
	    <!-- SCROLLIT file -->
	    <script src="js/scrollIt.min.js"></script>
		<!-- MAPS JS -->
		<script src="js/gmaps.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyAduGkGiILZzHThk6zpT8DB7SBmP575dWs"></script>
		<script src="js/map.js"></script>
		<!-- custom js -->
		<script src="js/main.js"></script>
	</body>

<!-- Mirrored from joker-themes.com/krona-d/demos/rtl-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 15:42:25 GMT -->
</html>