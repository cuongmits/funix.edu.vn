<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer class="site-footer">
			<div class="jumbotron" id="img-footer">
				<p>"Chắt chiu tuổi trẻ, sẵn sàng đón nhận cảm hứng đổi thay"</p>
			</div>
			<div class="jumbotron" id="jb-footer">
				<div class="page-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 column-1" >
								<img src="<?php echo get_template_directory_uri (); ?>/img/footer/logo-funix.png">
								<p class="contact"><strong><br>Liên hệ:</strong></p>
								<p>Địa chỉ:Tầng 0 tòa nhà FPT,Duy Tân,Cầu Giấy,Hà Nội</p>
								<p>Hotline: 04.7300.5656</p>
								<p>Email: funix-support@fpt.edu.vn</p>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 column-2">
								<div><a href="#">Trang chủ</a></div>
								<div><a href="#">Giới thiệu</a></div>
								<div><a href="#">Chương trình học</a></div>
								<div><a href="#">Cách học</a></div>
								<div><a href="#">Mentors</a></div>
								<div><a href="#">Tin tức</a></div>
								<div><a href="#">Câu hỏi thường gặp</a></div>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 column-3">
								<p class="text3-1"><strong>Đăng kí nhận thông tin</strong></p>
								<p>Mời bạn để lại email để nhận những thông báo mới nhất từ FUNix</p>
								<form>
									<input type="text" name="email-footer">
								</form>
								<a class="btn register" href="#" role="button"><img src="<?php echo get_template_directory_uri (); ?>/img/footer/light-btn.png">tôi Đăng ký</a>
							</div>
							<div><a href="#" class="hidden-lg hidden-sm hidden-md scrollup"><img src="<?php echo get_template_directory_uri (); ?>/img/footer/bot-top-btn.png"></a></div>
						</div>
					</div>
				</div>
			</div>	
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri (); ?>/js/bootstrap.min.js"></script>
    <!--<script src="<?php echo get_template_directory_uri (); ?>/js/slide.js"></script>-->
    <script type="text/javascript">
	    $(document).ready(function () {

		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });

		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });
		});
    </script>
</body>
</html>
