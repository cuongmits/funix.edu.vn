<?php
/*Template Name: Certificate FUNiX*/

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
                            <td><a href="#">Certificate 9</a></td>
                            <td>.</td>
                            <td>Học phí</td>
                        </tr>
                    </table>
                </div>
                <div class="block1-2 col-lg-5">
                    <h2>Certificate 1</h2>
                    <p><strong>Digital Passport -</strong>Chứng chỉ Công dân số</p>
                    <ul>
                        <li>Mastering your computer - Làm chủ máy tính</li>
                        <li>Becoming an Digital Citizen - Trở thành công dấn số</li>
                        <li>Building your first website - Xây dựng website đầu tiên</li>
                        <li>Creating your first program(with Javascript) - Xây dựng phần mềm đầu tiền</li>
                    </ul>
                    <p>Sau khi hoàn thành chứng chỉ này, sinh viên có khả năng sử dụng máy tính và các công cụ thành thạo,  có thể dựng cho mình website và lập trình đơn giản, biết các sử dụng các công cụ liên lạc và tìm kiếm trong công việc, có thể làm nghề Hỗ trợ tin học hoặc kinh doanh trên mạng</p>
                </div>
            </div>
            <div id="block2-cer">
                <div class="block2-1">
                    <img src="<?php echo get_template_directory_uri (); ?>/img/img-cer.png">
                    <div class="benefit">
                        <h3>Lợi ích sau kỳ học</h3>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line2-cer.png">
                        <p>Sau khi hoàn thành chứng chỉ này, sinh viên có khả năng sử dụng máy tính và các công cụ thành thạo,  có thể dựng cho mình website và lập trình đơn giản, biết các sử dụng các công cụ liên lạc và tìm kiếm trong công việc, có thể làm nghề Hỗ trợ tin học hoặc kinh doanh trên mạng</p>
                    </div>
                </div>
                <div class="chance-cer">
                    <div>
                        <h3>Cơ hội nghề nghiệp</h3>
                        <img src="<?php echo get_template_directory_uri (); ?>/img/line2-cer.png">
                        <ul>
                            <li>Giáo viên</li>
                            <li>Bác sĩ</li>
                            <li>Công nhân</li>
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