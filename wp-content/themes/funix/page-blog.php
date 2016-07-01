<?php
	/*Template Name: Blogs Funix*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<div id="myCarousel" class="hidden-xs carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-slide.png">
		      <div class="carousel-caption">
		        <div class="title-slide-1">
		        	<h3>TIN TỨC</h3>
		        	<p>Tin tức mới nhất từ FUNiX</p>
		        </div>

		        <div class="box-slide-1">
		        	<div>FUNiX chào đón 35 tân sinh viên</div>
		        	<hr>
		        	<div>Tại Lễ Khai giảng sáng ngày 8/5, Trường Đại học trực tuyền FUNiX đón chào 35 
		        		sinh viên mới,nâng tổng số sinh viên- học viên của Trường lên con số 400 thành viên.
		        		Trong số 35 sinh viên(xTer) đợt nhập học tháng 5/2016 của FUNiX,có 24 sinh viên Việt
		        		Nam...
		        	</div>
		        	<div><a class="readmore-blog">❯</a></div>
		        </div>

		      </div>
		    </div>

		    <div class="item">
		      <img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-slide.png">
		      <div class="carousel-caption">
		        <h3>Chania</h3>
		        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-slide.png">
		      <div class="carousel-caption">
		        <h3>Flowers</h3>
		        <p>Beatiful flowers in Kolymbari, Crete.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-slide.png">
		      <div class="carousel-caption">
		        <h3>Flowers</h3>
		        <p>Beatiful flowers in Kolymbari, Crete.</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a> -->
		</div>

		<div class="jumbotron" id="blogs-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7 col-lg-7 left-news-blogs" >
						<div>
							<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-title.png"></div>
							<div class="title-page-blogs">FUNiX chào đón 35 tân sinh viên</div>
							<br>
							<div class="content-page-blogs">Tại Lễ Khai giảng sáng ngày 8/5, Trường Đại học trực tuyền FUNiX đón chào 35 
			        		sinh viên mới,nâng tổng số sinh viên- học viên của Trường lên con số 400 thành viên.
			        		Trong số 35 sinh viên(xTer) đợt nhập học tháng 5/2016 của FUNiX,có 24 sinh viên Việt
			        		Nam...
			        		</div>
			        		<div class="like-share-blogs"><a href="#">Đọc tiếp</a>
			        			<div>10 like this | 10 share this</div>
			        		</div>
		        		</div>

		        		<div>
			        		<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-title-2.png"></div>
							<div class="title-page-blogs">'FUNiX là giáo dục toàn thế giới'</div>
							<br>
							<div class="content-page-blogs">Hướng tay chỉ vào logo của ĐH trực tuyến FUNiX được treo trang trọng trên gác hai nhỏ nhắn
								, Chủ tịch FPT Trương Gia Bình nhận mạnh: "Đây mới chính là giáo dục toàn thế giới". Trong chuyến
								thăm và trờ chuyện ngắn với đội ngũ cán bộ FUNiX sáng ngày 6/5, người đứng đầu Tập...
			        		</div>
			        		<div class="like-share-blogs"><a href="#">Đọc tiếp</a>
			        			<div>10 like this | 10 share this</div>
			        		</div>
			        		<div class="icon-page-blogs">
				        		<div><a href="#"><i class="fa fa-facebook"></i></a></div>
						    	<div><a href="#"><i class="fa fa-linkedin"></i></a></div>
						    	<div><a href="#"><i class="fa fa-twitter"></i></a></div>
						    	<div><a href="#"><i class="fa fa-vimeo"></i></a></div>
						    	<div><a href="#"><i class="fa fa-pinterest-p"></i></a></div>
					    	</div>
				    	</div>

				    	<div>
							<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-title.png"></div>
							<div class="title-page-blogs">FUNiX chào đón 35 tân sinh viên</div>
							<br>
							<div class="content-page-blogs">Tại Lễ Khai giảng sáng ngày 8/5, Trường Đại học trực tuyền FUNiX đón chào 35 
			        		sinh viên mới,nâng tổng số sinh viên- học viên của Trường lên con số 400 thành viên.
			        		Trong số 35 sinh viên(xTer) đợt nhập học tháng 5/2016 của FUNiX,có 24 sinh viên Việt
			        		Nam...
			        		</div>
			        		<div class="like-share-blogs"><a href="#">Đọc tiếp</a>
			        			<div>10 like this | 10 share this</div>
			        		</div>
		        		</div>

		        		<div>
							<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-title.png"></div>
							<div class="title-page-blogs">FUNiX chào đón 35 tân sinh viên</div>
							<br>
							<div class="content-page-blogs">Tại Lễ Khai giảng sáng ngày 8/5, Trường Đại học trực tuyền FUNiX đón chào 35 
			        		sinh viên mới,nâng tổng số sinh viên- học viên của Trường lên con số 400 thành viên.
			        		Trong số 35 sinh viên(xTer) đợt nhập học tháng 5/2016 của FUNiX,có 24 sinh viên Việt
			        		Nam...
			        		</div>
			        		<div class="like-share-blogs"><a href="#">Đọc tiếp</a>
			        			<div>10 like this | 10 share this</div>
			        		</div>
		        		</div>
					</div>

					<div class="col-sm-5 col-md-5 col-lg-5 right-news-blogs" >
						<div id="custom-search-input">
			                <div class="input-group col-md-12">
			                	<span class="input-group-btn">
			                        <button class="btn btn-info btn-lg" type="button">
			                            <i class="glyphicon glyphicon-search"></i>
			                        </button>
			                    </span>
			                    <input type="text" class="form-control input-lg" placeholder="Search" />
			                    
			                </div>
            			</div>
            			<div class="cate-blogs">CATEGORIES</div>
            			<div class="hr-color-blogs"><img src="<?php echo get_template_directory_uri (); ?>/img/thanh-ngang.png"></div>
            			<div class="user-acv-blogs">NHÂN VẬT</div>
            			<br>
            			<div class="user-acv-blogs">HOẠT ĐỘNG</div>
            			<br>
            			<div class="cate-blogs">TIN XEM NHIỀU NHẤT</div>
            			<div class="hr-color-blogs"><img src="<?php echo get_template_directory_uri (); ?>/img/thanh-ngang.png"></div>
            			<div class="video-right-blogs">
            				<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-video-blog.png"></div>
            				<div class="text-video-right">
            					<div>FUNiX chào đón 35 tân sinh viên</div>
            					<div>1 day ago</div>
            				</div>
            			</div>
            			<div class="video-right-blogs">
            				<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-video-blog.png"></div>
            				<div class="text-video-right">
	            				<div>'FUNiX là giáo dục toàn thế giới'</div>
	            				<div>June 28th 2016</div>
            				</div>
            			</div>
            			<div class="video-right-blogs">
            				<div class="video-plus-blogs"><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-video-blog.png"></div>
            				<div class="text-video-right">
	            				<div>FUNiX lần đầu tiên trao chứng chỉ tốt nghiệp</div>
	            				<div>June 28th 2016</div>
	            			</div>
            			</div>
            			<div  class="video-right-blogs">
            				<div class="video-plus-blogs"><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-video-blog.png"></div>
            				<div class="text-video-right">
	            				<div>Du học trời Tây lấy bằng đại học ở Việt Nam</div>
	            				<div>June 28th 2016</div>
	            			</div>
            			</div>
            			<div class="video-right-blogs">
            				<div class="video-plus-blogs"><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-video-blog.png"></div>
            				<div class="text-video-right">
	            				<div>Gia đình bất hòa vì quyết định chọn đại học lạ đời của con</div>
	            				<div>June 28th 2016</div>
	            			</div>
            			</div>
            			<div><img src="<?php echo get_template_directory_uri (); ?>/img/blogs/img-funix-blog.png"></div>
            			<div class="event-right-blogs">Sự kiện: Tư vấn tuyển sinh FUNiX 2016</div>
            			<div class="day-right-blogs">June 28th 2016</div>
            			<div class="day-right-blogs">Tầng 1, tòa nhà FPT Cầu Giấy,Hà Nội</div>
            			<a href="#"><button type="button" class="btn btn-primary btn-right-blogs">Xem Thêm</button></a>
					</div>
				</div>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
