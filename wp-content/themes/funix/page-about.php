<?php
/*Template Name: About Funix*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<img class="img1-about" src="<?php echo get_template_directory_uri()?>/img/img1-about.png">
		<div id="block1-about">
			<div class="text-about col-lg-7" >
				<p>Giới thiệu Đại học Trực tuyến FUNiX:</p>
				<p><?php echo get_post_meta($post->ID,'About Funix - content',true);?></p>
			</div>
			<img  src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'About FUNiX - image',true));?>">
		</div>
		<div id="block2-about">
			<div class="story-about">
				<p>Câu chuyện ra đời</p>
				<p><?php echo get_post_meta($post->ID,'Story',true);?></p>
			</div>
			<div class="wrapper-about">
				<button class="btn btn-story-about">Xem thêm câu chuyện</button>
			</div>
		</div>
		<div id="block3-about">
			<div>
				<img src="<?php echo get_template_directory_uri()?>/img/anh-Nam2.png">
				<div class="letter">
					<p>Tâm thư của hiệu trưởng</p>
					<img src="<?php echo get_template_directory_uri()?>/img/line-specmentor.png">
					<p><?php echo get_post_meta($post->ID, 'Letter of headmaster - show',true)?></p>
					<button id="showMore" onclick="showMore()">Đọc thêm</button>
					<p id="more" style="display: none"><?php echo get_post_meta($post->ID,'Letter of headmaster - hidden',true);?></p>
					<button id="showLess" style="display: none;" onclick="showLess()">Thu gọn</button>
				</div>
			</div>
		</div>
		<div id="block4-about">
			<div>
				<span>Tìm hiểu thêm về chương trình học tại FUNiX</span>
				<button class="btn btn-block4-about">XEM NGAY</button>
			</div>
		</div>
		<div id="block5-about">
			<!---slide-->
			<div class="slideshow-container">
				<div class="mySlides">
					<img src="<?php echo get_template_directory_uri (); ?>/img/img2-block5.jpg">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Opinion 1 - title',true);?></p>
						<img class="hidden-xs" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Opinion 1 - image',true)); ?>">
						<br>
						<img class="hidden-xs" src="<?php echo get_template_directory_uri (); ?>/img/line-block5.png">
						<p><?php echo get_post_meta($post->ID,'Opinion 1 - content',true);?></p>
						<button class="btn btn-block5-about">XEM CÁC NHẬN XÉT</button>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo get_template_directory_uri (); ?>/img/img1-block5.jpg">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Opinion 2 - title',true);?></p>
						<img class="hidden-xs" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Opinion 2 - image',true)); ?>">
						<br>
						<img class="hidden-xs" src="<?php echo get_template_directory_uri (); ?>/img/line-block5.png">
						<p><?php echo get_post_meta($post->ID,'Opinion 2 - content',true);?></p>
						<button class="btn btn-block5-about">XEM CÁC NHẬN XÉT</button>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo get_template_directory_uri (); ?>/img/img2-block5.jpg">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Opinion 3 - title',true);?></p>
						<img class="hidden-xs" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Opinion 3 - image',true)); ?>">
						<br>
						<img class="hidden-xs" src="<?php echo get_template_directory_uri (); ?>/img/line-block5.png">
						<p><?php echo get_post_meta($post->ID,'Opinion 3 - content',true);?></p>
						<button class="btn btn-block5-about">XEM CÁC NHẬN XÉT</button>
					</div>
				</div>

				<div class="mySlides">
					<img src="<?php echo get_template_directory_uri (); ?>/img/img1-block5.jpg">
					<div class="text">
						<p><?php echo get_post_meta($post->ID,'Opinion 4 - title',true);?></p>
						<img class="hidden-xs" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Opinion 4 - image',true)); ?>">
						<br>
						<img class="hidden-xs" src="<?php echo get_template_directory_uri (); ?>/img/line-block5.png">
						<p><?php echo get_post_meta($post->ID,'Opinion 4 - content',true);?></p>
						<button class="btn btn-block5-about">XEM CÁC NHẬN XÉT</button>
					</div>
				</div>

				<!--<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>-->
				<div class="position-dot">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
				</div>
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
			}, 100000);

		</script>

<!--		Read more-->
		<script>
			function showMore() {
					document.getElementById("more").style.display = 'block';
					document.getElementById("showLess").style.display = 'block';
					document.getElementById("showMore").style.display = 'none';
			}
			function showLess() {
				document.getElementById("more").style.display = 'none';
				document.getElementById("showMore").style.display = 'block';
				document.getElementById("showLess").style.display = 'none';
			}
		</script>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
