<?php
/*Template Name: FAQ Funix*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="jumbotron faq-img">
			<img src="<?php echo get_template_directory_uri (); ?>/img/faq/img-faq.png">
		</div>

		<div class="jumbotron" id="fee-page">
			<div class="container">
				<div class="button-question">
					<a href="#" data-toggle="collapse" data-target="#demo-faq"><img src="<?php echo get_template_directory_uri (); ?>/img/faq/plus-faq.png">
					Đặt câu hỏi ?</a>
					<div id="demo-faq" class="collapse">
					    <input type="text" name="fname" placeholder="Họ tên">
					    <input type="text" name="fname" placeholder="Email">
					    <input type="text" name="fname" placeholder="Số điện thoại">
					    <textarea class="form-control" rows="5" id="comment" placeholder="Câu hỏi của bạn"></textarea>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 faq-page" >
						<div>Câu hỏi thường gặp</div>
						<div>Bất cứ thắc mắc nào, Hanna luôn có lời giải đáp</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2" >
						1
					</div>

					<div class="col-sm-8 col-md-8 col-lg-8" >
						<div>Cẩu hỏi 1</div>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2" >
						+
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2" >
						2
					</div>

					<div class="col-sm-8 col-md-8 col-lg-8" >
						<div>Cẩu hỏi 2</div>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2" >
						+
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2" >
						3
					</div>

					<div class="col-sm-8 col-md-8 col-lg-8" >
						<div>Cẩu hỏi 3</div>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2" >
						+
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2" >
						4
					</div>

					<div class="col-sm-8 col-md-8 col-lg-8" >
						<div>Cẩu hỏi 4</div>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2" >
						+
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2" >
						5
					</div>

					<div class="col-sm-8 col-md-8 col-lg-8" >
						<div>Cẩu hỏi 5</div>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2" >
						+
					</div>
				</div>
			</div>

			<ul class="pager">
			    <li><a href="#">Previous</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">Next</a></li>
			</ul>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
