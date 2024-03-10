<?php

/**
 * Template Name: Trang chủ
 * Description: ...........
 *
 */

get_header();
?>
<div class="lav-page lav-homepage">
    <div class="lav-banner-slideshow">
        <div class="lav-banner-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/He-thong-song-nuoc-man-co-the-tam-duoc-nam-om-cac-day-biet-thu.png" alt="" />
        </div>
        <div class="lav-banner-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/88.jpeg" alt="" />
        </div>
        <div class="lav-banner-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/Vinhomes-Royal-Island-3.jpeg" alt="" />
        </div>
    </div>
    <!-- Description -->
    <div class="lav-page-description pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2>VINHOMES ROYAL ISLAND VŨ YÊN</h2>
                    <p>Dự án Vinhome Royal Island Vũ Yên là tổ hợp đại đô thị sinh thái bậc nhất tại miền Bắc. Gói gọn hàng loạt những tiện ích đẳng cấp 5 sao, cùng tinh hoa xu hướng sống thông minh nghỉ dưỡng. Với quy mô lên đến 869,54 ha, Vinhome Royal Island Vũ Yên tiên phong trên con đường tạo ra một bất động sản đẳng cấp ghi danh lên bản đồ thế giới.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="lav-about-slideshow">
        <div class="lav-about-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/He-thong-song-nuoc-man-co-the-tam-duoc-nam-om-cac-day-biet-thu.png" alt="" />
        </div>
        <div class="lav-about-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/88.jpeg" alt="" />
        </div>
        <div class="lav-about-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/Vinhomes-Royal-Island-3.jpeg" alt="" />
        </div>
        <div class="lav-about-slide-item">
            <img src="http://localhost/vinhomes-vuyen/wp-content/uploads/2024/03/He-thong-song-nuoc-man-co-the-tam-duoc-nam-om-cac-day-biet-thu.png" alt="" />
        </div>
    </div>

    <!-- Body -->
    <div class="lav-page-body pt-5">
        <div class="container">
            <p>Khu đô thị Sinh thái Nghỉ dưỡng kết hợp vui chơi giải trí lớn nhất Việt Nam trên đảo Vũ Yên, Hải Phòng Có tên gọi chính thức <strong>Vinhomes Royal Island</strong> - Tinh hoa kiến trúc tạo nên tinh thần sống hạnh phúc, cùng những tiện ích thượng lưu chưa từng có đang và sẽ trở thành điểm đến “must live” - “must visit” - "must go" của giới danh gia Thế giới và Việt Nam</p>
            <p>Sở hữu một vị trí địa lý vô cùng đắc địa, dự án tọa lạc trên Đảo Vũ Yên đã được đầu tư hệ thống cầu Vũ Yên 1 & Cầu máy chai nối liền với trung tâm thành phố và các khu vực lân cận. tọa lạc trên vị trí giàu tiềm năng với vẻ đẹp hoang sơ say đắm lòng người, nước biển trong, Địa thế “tựa sơn nghinh hải” đẹp hiếm có giữa 3 dòng sông lớn bao quanh</p>
            <p>Mang mô hình đảo đô thị nghỉ dưỡng độc nhất vô nhị với những tiện ích chưa từng có, Vinhomes Vũ yên tạo nên những trải nghiệm sống độc bản, không thua kém giới danh gia, quyền quý nhất thế giới.</p>
        </div>
        <!-- Section Latest Posts -->
        <?php
        get_template_part('template-parts/component', 'latest-posts');
        ?>

        <!-- Section Contact -->
        <?php
        get_template_part('template-parts/component', 'contact-form');
        ?>
    </div>
</div>
<?php
get_footer();
