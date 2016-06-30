<?php
/*Template Name: Certificate 3 FUNiX*/

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <img class="img1-about" src="<?php echo get_template_directory_uri (); ?>/img/banner-certi.png">
            <div id="block1-cer">
                <div id="table-cer" class="col-lg-6">
                    <div>
                        <p>Xem các chứng chỉ</p>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line-table-cer.png">
                    </div>
                    <table class="certificate">
                        <tr>
                            <td><a href="#">Certificate 1</a></td>
                            <td>.</td>
                            <td><a href="#">Certificate 2</a></td>
                        </tr><tr>
                            <td><a href="#">Certificate 3</a></td>
                            <td>.</td>
                            <td><a href="#">Certificate 4</a></td>
                        </tr><tr>
                            <td><a href="#">Certificate 5</a></td>
                            <td>.</td>
                            <td><a href="#">Certificate 6</a></td>
                        </tr><tr>
                            <td><a href="#">Certificate 7</a></td>
                            <td>.</td>
                            <td><a href="#">Certificate 8</a></td>
                        </tr><tr>
                            <td>Học phí</td>
                        </tr>
                    </table>
                </div>
                <div class="block1-2 col-lg-5">
                    <h2>Certificate 3</h2>
                    <p><?php echo get_post_meta($post->ID,'Subject',true);?></p>
                    <p><?php echo get_post_meta($post->ID,'Subject infor',true);?></p>
                </div>
            </div>
            <div id="block2-cer">
                <div class="block2-1">
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID,'Subject benefit - image',true)); ?>">
                    <div class="benefit">
                        <h3>Lợi ích sau kỳ học</h3>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line2-cer.png">
                        <p><?php echo get_post_meta($post->ID,'Subject benefit - content',true);?></p>
                    </div>
                </div>
                <div class="chance-cer">
                    <div>
                        <h3>Cơ hội nghề nghiệp</h3>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line2-cer.png">
                        <ul>
                            <?php echo get_post_meta($post->ID,'Working chance',true);?>
                        </ul>
                    </div>
                    <div>
                        <h3>Bài tập của học viên</h3>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line2-cer.png">
                        <video width="240" height="180" controls>
                            <source src="#">
                        </video>
                    </div>
                </div>
            </div>
            <div id="block3-cer">
                <h2>KHOẢN ĐẦU TƯ XỨNG ĐÁNG CHO NHỮNG CƠ HỘI MỚI TRONG ĐỜI!</h2>
                <img src="<?php echo get_template_directory_uri (); ?>/img/line-table-cer.png">
                <p>Bạn quan tâm đến Đại học trực tuyến FUNiX? Bạn mong muốn theo đuổi ngành CNTT, có một công việc tốt hơn?</p>
                <form action="action_page.php">
                    <input type="text" name="name" placeholder="Họ và tên(*)" required><br>
                    <input type="text" name="birthday" placeholder="Ngày sinh(*)" required><br>
                    <input type="email" name="email" placeholder="Email thường dùng(*)" required><br>
                    <input type="tel" name="phone" placeholder="Điện thoại liên lạc(*)" required><br>
                    <input type="text" name="address" placeholder="Nơi ở hiện tại(*)" required><br>
                    <input class="submit-button-cer" type="submit" value="ĐĂNG KÝ NGAY">
                </form>
            </div>
        </main>
    </div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>