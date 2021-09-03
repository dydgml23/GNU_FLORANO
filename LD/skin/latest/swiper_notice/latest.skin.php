<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/dist/css/swiper.min.css">
<script src="<?php echo $latest_skin_url ?>/dist/js/swiper.min.js"></script>


<div class="swiper-container swiper1">
    <div class="swiper-wrapper">

        <?php
        for ($i=0; $i<count($list); $i++) {
        ?>
        <div class="swiper-slide" onclick="location.href='<?php echo $list[$i]['href'] ?>';" style="cursor: pointer;">
            <div class="sw_tit">
                <?php echo $list[$i]['subject'] ?>
            </div>
        </div>

        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <?php }  ?>


    </div>
    <!-- 페이징 -->
    <!-- 좌우버튼 활성화시 주석해제 {
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    } -->

</div>

<script>
    var swiper1 = new Swiper('#tnb .swiper1', {
        pagination: '.swiper-pagination1',
        direction:"vertical",
        slidesPerView: '1',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        centeredSlides: true,
        spaceBetween: 10,
    });
</script>
