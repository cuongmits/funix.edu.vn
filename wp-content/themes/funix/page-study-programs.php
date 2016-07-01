<?php
    /* Template Name: Study Programs*/
    get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <img class="img1-about" src="<?php echo get_template_directory_uri (); ?>/img/study-programs/banner-study-programs.png">
        <div id="block1-cer">
            <div id="table-cer" class="col-lg-6">
                <div>
                    <p>Xem các chứng chỉ</p>
                    <img src="<?php echo get_template_directory_uri (); ?>/img/line-table-cer.png">
                </div>
                <table class="certificate">
                    <tr>
                        <td><a href="index.php?page_id=1169">Certificate 1</a></td>
                        <td>.</td>
                        <td><a href="index.php?page_id=1293">Certificate 2</a></td>
                    </tr><tr>
                        <td><a href="index.php?page_id=1297">Certificate 3</a></td>
                        <td>.</td>
                        <td><a href="index.php?page_id=1300">Certificate 4</a></td>
                    </tr><tr>
                        <td><a href="index.php?page_id=1302">Certificate 5</a></td>
                        <td>.</td>
                        <td><a href="index.php?page_id=1307">Certificate 6</a></td>
                    </tr><tr>W
                        <td><a href="index.php?page_id=1309">Certificate 7</a></td>
                        <td>.</td>
                        <td><a href="index.php?page_id=1304">Certificate 8</a></td>
                    </tr><tr>
                        <td><a href="index.php?page_id=1270">Học phí</a></td>
                    </tr>
                </table>
            </div>
            <div class="block1-2 col-lg-5">
                <h2>Giới thiệu chương trình học:</h2>
                <p><?php echo get_post_meta($post->ID,'About study programs',true);?></p>
                <div class="image-cer">
                    <a href="index.php?page_id=1169"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer1.png"></a>
                    <a href="index.php?page_id=1293"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer2.png"></a>
                </div>
                <div class="image-cer">
                    <a href="index.php?page_id=1297"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer3.png"></a>
                    <a href="index.php?page_id=1300"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer4.png"></a>
                </div>
                <div class="image-cer">
                    <a href="index.php?page_id=1302"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer5.png"></a>
                    <a href="index.php?page_id=1307"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer6.png"></a>
                </div>
                <div class="image-cer">
                    <a href="index.php?page_id=1309"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer7.png"></a>
                    <a href="index.php?page_id=1304"><img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/cer8.png"></a>
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
        <div id="block4-study-programs">
            <p>Đăng kí học ngay hôm nay để thay đổi</p>
            <img src="<?php echo get_template_directory_uri (); ?>/img/study-programs/img-sologan.png">
        </div>
    </main>
</div>
<?php get_footer();?>
