<?php
/*Template Name: News Funix*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="jumbotron img-news">
			<img src="<?php echo get_template_directory_uri (); ?>/img/news/img-news.png">
		</div>

		<div class="jumbotron" id="news-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-9 col-lg-9 introduce-news" >
						<div>Giới thiệu chương trình học</div>
						<div>Chương trình học gồm 8 kì, mỗi kì học trong trung bình 4 tháng.<br><br>
						Sau mỗi kì sinh viên sẽ nhận được 1 Chứng chỉ, chứng nhận có thể làm
						được việc tương ứng, được công nhận bởi bên thứ 3 là một công ty lớn trong 
						ngành CNTT của Việt Nam.<br><br>
						Hoàn thành 8 kì, sinh viên sẽ trở thành Kỹ sư CNTT, nhận bằng Đại học được
						</div>
					</div>

					<div class="col-sm-3 col-md-3 col-lg-3 menu-news" >
						<div>Xem các chương trình</div>
						<div><a href="#">Certificate 1</a> .
							<a href="#">Certificate 2</a>
						</div>
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/hr.png">
						<div><a href="#">Certificate 3</a> .
							<a href="#">Certificate 4</a>
						</div>
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/hr.png">
						<div><a href="#">Certificate 5</a> .
							<a href="#">Certificate 6</a>
						</div>
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/hr.png">
						<div><a href="#">Certificate 7</a> .
							<a href="#">Certificate 8</a>
						</div>
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/hr.png">
						<div><a href="#">Certificate 9</a> .
							<a href="#">Học phí</a>
						</div>
					</div>
				</div>

				<div class="row certificate-news">
					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-1.png">
						<div>Certificate 1</div>
						<div>Digital Passport</div>
						<div>Chứng chỉ công dân số</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-2.png">
						<div>Certificate 2</div>
						<div>Mobile Application Developer</div>
						<div>Chứng chỉ Lập trình viên ứng dụng mobile</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-3.png">
						<div>Certificate 3</div>
						<div>Enterprise Application Developer</div>
						<div>Chứng chỉ Lập trình viên ứng dụng doanh nghiệp</div>
					</div>
				</div>

				<div class="row certificate-news">
					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-5.png">
						<div>Certificate 5</div>
						<div>Basic Software Engineer</div>
						<div>Chứng chỉ Kỹ sư phần mềm cơ bản</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-6.png">
						<div>Certificate 6</div>
						<div>Business Alignment</div>
						<div>Chứng chỉ Lập Dưỡng nghiệp</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-4.png">
						<div>Certificate 4</div>
						<div>Industry Attachment</div>
						<div>Chứng chỉ Thông thạo môi trường làm việc CNTT</div>
					</div>
				</div>

				<div class="row certificate-news">
					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-7.png">
						<div>Certificate 7</div>
						<div>IS Specialized</div>
						<div>Chứng chỉ Chuyên viên hệ thống thông tin</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						<img src="<?php echo get_template_directory_uri (); ?>/img/news/certi-8.png">
						<div>Certificate 8</div>
						<div>Software Engineer Graduation</div>
						<div>Bằng Kỹ sư phần mềm</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 certi-content-news" >
						
					</div>
				</div>
			</div>

			<div class="jumbotron news-register-bound" >
				<div>Đăng kí học ngay hôm nay?</div>
				<a class="btn btn-primary news-register" href="#" role="button">ĐĂNG KÝ NGAY</a>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
