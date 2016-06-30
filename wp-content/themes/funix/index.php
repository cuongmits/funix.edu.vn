<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 	Template Name: Home page FUNiX
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="text-hello"><p>Xin chào người bạn thú vị!</p>
			<p>Bạn đang tìm hiểu FUNiX - Đại học trực tuyến đầu tiên tại Việt Nam.<br>
			Nơi bạn có thể tự học CNTT với sự giúp đỡ của các chuyên gia công nghệ hàng đầu</p></div>

			<!---slide-->
			<div class="slideshow-container">

				<div class="mySlides">
					<img src="<?php echo wp_get_attachment_url(get_post_meta($post=1257,'Silder image 1',true)); ?>">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Silder caption 1',true);?></p>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo wp_get_attachment_url(get_post_meta($post=1258,'Silder image 2',true)); ?>">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Silder caption 2',true);?></p>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo wp_get_attachment_url(get_post_meta($post=1257,'Silder image 3',true)); ?>">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Silder caption 3',true);?></p>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo wp_get_attachment_url(get_post_meta($post=1258,'Silder image 4',true)); ?>">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Silder caption 4',true);?></p>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Silder image 5',true)); ?>">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Silder caption 5',true);?></p>
					</div>
				</div>

				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				<div class="position-dot">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
				</div>
			</div>
			<br>

			<div id="object-human">
				<a href="#"><img src="<?php echo get_template_directory_uri (); ?>/img/object1.png"></a>
				<a href="#"><img src="<?php echo get_template_directory_uri (); ?>/img/object2.png"></a>
				<a href="#"><img src="<?php echo get_template_directory_uri (); ?>/img/object3.png"></a>
				<a href="#"><img src="<?php echo get_template_directory_uri (); ?>/img/object4.png"></a>
				<br><br>
			</div>
			<p class="text-obj-human">Hay không phải 4 nhóm trên? Cũng không sao cả, hãy liên lạc, Hanah sẽ tư vấn.</p>

			<div id="reason-box">
				<p>04 điều rất thật này đã thuyết phục nhiều bạn gắn bó với FUNiX</p>
				<img src="<?php echo get_template_directory_uri (); ?>/img/thanh-ngang.png">
				<div class="row rs-box">
					<div class="col-sm-3 col-md-3 col-lg-3 reason-1" >
						<div class="rs-i-1"><?php echo wp_get_attachment_image(get_post_meta($post=1246,'image1',true));?></div>
						<div class="tit-rs"><?php echo get_post_meta($post=1246,'Title reason 1',true);?></div>
						<div class="content-rs"><?php echo get_post_meta($post=1246,'Reason1',true);?></div>
					</div>

					<div class="col-sm-3 col-md-3 col-lg-3 reason-2" >
						<div class="rs-i-2"><?php echo wp_get_attachment_image(get_post_meta($post=1246,'image2',true));?></div>
						<div class="tit-rs"><?php echo get_post_meta($post=1246,'Title reason 2',true);?></div>
						<div class="content-rs"><?php echo get_post_meta($post=1246,'Reason2',true);?></div>
					</div>

					<div class="col-sm-3 col-md-3 col-lg-3 reason-3" >
						<div class="rs-i-3"><?php echo wp_get_attachment_image(get_post_meta($post=1246,'image3',true));?></div>
						<div class="tit-rs"><?php echo get_post_meta($post=1246,'Title reason 3',true);?></div>
						<div class="content-rs"><?php echo get_post_meta($post=1246,'Reason3',true);?></div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3 reason-4" >
						<div class="rs-i-4"><?php echo wp_get_attachment_image(get_post_meta($post=1246,'image4',true));?></div>
						<div class="tit-rs"><?php echo get_post_meta($post=1246,'Title reason 4',true);?></div>
						<div class="content-rs"><?php echo get_post_meta($post=1246,'Reason4',true);?></div>
					</div>
				</div>
			</div>


			<div class="jumbotron" id="news">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-7 col-lg-7 new-column-1" >
							<div class="title-new">FUNiX có gì mới?</div>
							<div><img src="<?php echo get_template_directory_uri (); ?>/img/line-specmentor.png"></div>
							<div class="title-new-2">Cùng xem những tin tức mới nhất cập nhật nhịp sống giảng đường FUNiX sôi động</div><br>
							<div class="bound-new">
								<div class="img-new"><img src="<?php echo get_template_directory_uri (); ?>/img/index/news/FUNiX-new.png"></div>
								<div class="content-new-1"><strong>Việt Nam có đại học trực tuyến đầu tiên ra mắt ngày 13/102015</strong><br>
									<br>
									<div class="text-content-1">Sáng 13/10,ra mắt ĐH trực tuyến đầu tiên của Việt Nam - ĐH trực tuyến FUNiX - triển 
									khai theo phương pháo đào tạo hoàn toàn mới, cung cấp bằng Cử nhân Công...</div>
									<br>
									<div class="link-content-1">
										<a href="#">Xem thêm ></a>
									</div>
								</div>
							</div>
							<table id="news-box">
								<tr>
									<td class = "date-new-2">
										<p >10/10/2015</p>
										<p>Thắm Nguyễn</p>
									</td>
									<td class="text-content-2">Học ba kỳ,sinh viên FUNiX có thể làm tại FPT Software với mức lương $1000</td>
									<td><img src="<?php echo get_template_directory_uri (); ?>/img/index/news/jounal.png"></td>
								</tr>
								<tr>
									<td class = "date-new-3">
										<p>13/9/2015</p>
										<p>TrungTran</p>
									</td>
									<td class="text-content-2">Khai giảng đại học trực tuyến đầu tiên của Việt Nam</td>
									<td><img src="<?php echo get_template_directory_uri (); ?>/img/index/news/time.png"></td>
								</tr>
							</table>	
							<div class="all-new"><a href="#">Xem tất cả tin tức</a></div>
						</div> 

						<div class="col-sm-5 col-md-5 col-lg-5 new-column-2" >
							<div class="question-2">Học viên FUNiX học gì?</div>
							<div><img src="<?php echo get_template_directory_uri (); ?>/img/line-specmentor.png"></div>
							<div class="answer-2">
								<ul>
								  <li><div>Mỗi học viên FUNiX đều được tiếp cận với kho học liệu số MOOCs từ những giáo
								   sư hàng đầu thế giới. Những tư liệu này đã được các chuyên gia của FUNiX chọn lọc
								   và chứng minh tính tối ưu</div>
								  </li>
								  <li><div>Sau mỗi kì học, học viên sẽ nhận được 1 chứng chỉ chứng nhận có thể làm được
								  	công việc tương ứng do một trong những công ty lớn trong nganh CNTT của Việt Nam cấp</div>
								  </li>
								  <li><div>Hoàn thành 8 kì học tại FUNiX, sinh viên sẽ trở thành Kỹ sư CNTT, nhận bằng Đại học
								  	được Bộ Giáo dục & Đào tạo công nhận.</div>
								  </li>
								</ul>
							</div>
							<div class="button-new">
								<a class="btn program-study" href="#" role="button">Tìm hiểu thêm về chương trình học</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron" id="slide-bar">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					<li class="dot-1" data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li class="dot-1" data-target="#myCarousel" data-slide-to="1"></li>
					<li class="dot-1" data-target="#myCarousel" data-slide-to="2"></li>
					<li class="dot-1" data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo get_template_directory_uri (); ?>/img/index/slide-bar/Slide_img1.png" alt="Chania">
							<!-- <div class="bg-text"><img src="<?php echo get_template_directory_uri (); ?>/img/index/slide-bar/bg_text.png"></div> -->
							<div class="slide-text">
								<p class="story-student">Câu chuyện học viên</p>
								<hr class="hr-slide">
								<p class="story-text">Mỗi ngày Hanna đều được gặp gỡ và chia sẻ muôn ngàn câu chuyện thú vị với các bạn
									học viên.Dù đến từ nhiều lĩnh vực,độ tuổi khác nhau,nhưng họ đều chung niềm đam mê với
									CNTT.Hãy cùng Hanna lắng nghe tâm sự cùng họ nhé.
								</p>
								<a href="#" class="glyphicon glyphicon-menu-right" aria-hidden="true"></a>
							</div>
						</div>

						<div class="item">
						<img src="<?php echo get_template_directory_uri (); ?>/img/index/slide-bar/Slide_img1.png" alt="Chania">
						</div>

						<div class="item">
						<img src="<?php echo get_template_directory_uri (); ?>/img/index/slide-bar/Slide_img1.png" alt="Flower">
						</div>

						<div class="item">
						<img src="<?php echo get_template_directory_uri (); ?>/img/index/slide-bar/Slide_img1.png" alt="Flower">
						</div>
					</div>
				</div>
				<!-- Left and right controls
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a> 
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a> -->
			</div>

			<div class="jumbotron" id="spec-mentor">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 text-1" >
							Những người thầy đặc biệt tại FUNiX
						</div>
						<div class="img-line-mentor"><img src="<?php echo get_template_directory_uri (); ?>/img/line-specmentor.png"></div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 text-2" >
							<div>Vì sao họ đặc biệt?Bởi họ không chỉ là những người thầy hướng dẫn học
							viên trong các bài học mỗi ngày mà còn là những chuyên gia công nghệ hàng
							đầu,những đồng nghiệp,đối tác và cũng là nhà tuyển dụng các học viên FUNiX
							trong tương lai.
							</div>
						</div>
					</div>
					<div class="row" id="special">
						<div class="col-sm-3 col-md-3 col-lg-3 mentor-1" >
							<img class="avatar" src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/mentor_1.png">
							<div class="name">Hoàng Tô</div>
							<div class="regency">Chủ tịch HDQT & Tổng giám đốc Tinh Vân Group</div>
							<img src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/logoTV_1.png">
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3 mentor-2" >
							<img class="avatar" src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/mentor_2.png">
							<div class="name">Nguyễn Thành Lâm</div>
							<div class="regency">Nguyên Tổng giám đốc FPT Software</div>
							<img src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/logoFPT_2.png">
						</div>
						<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 mentor-3" >
							<img class="avatar" src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/mentor_3.png">
							<div class="name">Hoàng Giang</div>
							<div class="regency">Phó giám đốc Trung tâm sản phẩm ứng dụng - Tổng công ty Viettel</div>
							<img src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/logoVT_3.png">
						</div>
						<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 mentor-4" >
							<img class="avatar" src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/mentor_4.png">
							<div class="name">Nguyễn Song Hà</div>
							<div class="regency rgc4">Kỹ sư phần mềm Microsoft</div>
							<img src="<?php echo get_template_directory_uri (); ?>/img/index/spec-mentor/logoMicro_4.png">
						</div>
					</div>
					<div class="row" id="button">
						<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 btn-mentor" >
							<a class="btn mentor" href="#" role="button">FUNiX có nhiều mentor hơn thế</a>
						</div>
						<div class="hidden-lg hidden-sm hidden-md col-sm-12 col-md-12 col-lg-12 " >
							<a href="#" class= "see-more">Xem Thêm</a>
						</div>
					</div>
				</div>
				<div class="jumbotron" id="img-footer">
					<p>"Chắt chiu tuổi trẻ, sẵn sàng đón nhận cảm hứng đổi thay"</p>
				</div>
			</div>
			<script type="text/javascript">
				var slideIndex = 1;
			    showSlides(slideIndex);

			    function plusSlides(n) {
			        showSlides(slideIndex += n);
			    }

			    function currentSlide(n) {
			        showSlides(slideIndex = n);
			    }

			    function showSlides(n) {
			        var i;
			        var slides = document.getElementsByClassName("mySlides");
			        var dots = document.getElementsByClassName("dot");
			        if (n > slides.length) {slideIndex = 1}
			        if (n < 1) {slideIndex = slides.length} ;
			        for (i = 0; i < slides.length; i++) {
			            slides[i].style.display = "none";
			        }
			        for (i = 0; i < dots.length; i++) {
			            dots[i].className = dots[i].className.replace(" active-1", "");
			        }
			        slides[slideIndex-1].style.display = "block";
			        dots[slideIndex-1].className += " active-1";
			    }

			    var currentIndex = 1;

			    var autoSlide = setInterval(function() {
			        if (currentIndex > $('.mySlides').length) {
			            currentIndex = 1;
			        }
			        plusSlides(currentIndex);
			    }, 5000);
			</script>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
