<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<?php
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 배상책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/
?>



<aside id="quick">
  <ul>
    <li>
      <a href="https://blog.naver.com/dydgml23" class="xi-naver-square" target="_blank"></a>
    </li>
    <li>
      <a class="xi-info-o" href="#none"></a>
    <ul>
      <li>
        <a href="https://www.instagram.com/l__d____93/" class="xi-instagram" target="_blank"></a>
      </li>
      <li>
        <a href="http://qr.kakao.com/talk/ST50riIbYxj2YSIXG4KtnnJSTbk-" class="xi-kakaotalk" target="_blank"></a>
      </li>
    </ul>
    </li>
  </ul>
</aside>
<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="mainBanner" id="bnsw">
	  <?php echo latest('swiper_banner','mainBanner',3,50) ; ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->

<!-------------------------- USE A LIBRARY -------------------------->
<div style="" id="Info">
	<div class="container">
		<div class="center-heading">
			<h2><?php echo latest('basic_title','cominfo', 1, 100); ?></h2>
			<span class="center-line"></span>
		</div>
		  <div class="row margin-top-50">
			<div class="col-lg-6">
			  <?php echo latest('basic_subject','cominfo',1,100); ?>
			</div>
			<div class="col-lg-6 text-center">
				<?php echo latest('basic_img','cominfo',1,100); ?>
			</div>
		  </div>
	  <!-- /.row -->
	</div>
</div>
<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-80"></div>
<div class="container">
	<div class="center-heading en1" id="Goods">
		<h2>새로나온 상품</h2>
		<span class="center-line"></span>
	</div>

	<div class="row">

            <?php echo latest('basic_goodsimg','goods',8,50) ; ?>


  </div>


<div class="margin-top-50"></div>
<div class="container" id="News">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'event', 5, 40);?>
		</div>
	</div>
</div>
</div>

<div class="container">
<div class="row">
  <div class="col-md-12" id="Goodsimg">
    <h2>상품 스틸컷</h2>
    <span class="center-line"></span>
    <div class="row margin-top-50"></div>
    <div id='gssw'>
    <?php echo latest('swiper_card2', 'gallery', 4, 40); ?>
    </div>
  </div>
</div>
</div>
<!-------------------------- 테마소개 + 유튜브영상 -------------------------->
<!--
백그라운드 색상을 조정해주시면 됩니다.
-->

<div class="py-5 margin-top-80" style="background:#d1ecf1;" id="YoutubeAd">
	<div class="container margin-top-80">
	  <div class="row">
		<div class="col-lg-6">
      <?php echo latest('basic_0823','youtube',1,50); ?>
		</div>
		<div class="col-lg-6">
		  <?php echo latest('basic_subject','youtube',1,100); ?>
		</div>
	  </div>
	</div>
</div>



<!-------------------------- parallax 박스 및 countdown -------------------------->
<!--

테마폴더/tail.php : 94번째줄에서 이미지를 교체해주세요.

-->
<div class="parallax-window" data-parallax="scroll">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center p-center para-text">
				<h2><?php echo latest('basic_title','btbox',1,50) ; ?></h2>
				<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="<?php echo latest('basic_url','btbox',1,100); ?>"'>바로가기</button>
			</div>
		</div>
	</div>
</div><!-- /parallax -->

<div class="container" id="btMap">
  <h2>오시는 길</h2>
  <span class="center-line"></span>
  <div id="map" style="width:100%;height:350px;"></div>
  <div class="way">
    <ul class="subway">
      <h3>지하철역</h3>
      <li>
        <a href="#">강남역</a> 9번 출구 <span>도보 5분</span>
      </li>
      <li>
        <a href="#">교대역</a> 4번 출구 <span>도보 14분</span>
      </li>
      <li>
        <a href="#">신논현역</a> 6번 출구 <span>도보 15분</span>
      </li>
    </ul>
    <ul class="bus">
      <h3>버스정류장</h3>
      <li>
        <a href="#">진흥아파트</a> <span class="blue">145 | 341 | 640</span> <span class="green">서초11</span>
      </li>
      <li>
        <a href="#">진흥아파트</a> <span class="blue">643</span> <span class="green">3422</span> <span class="green">서초11</span>
      </li>
      <li>
        <a href="#">롯데칠성</a> <span class="blue">144 | 541 | 740</span> <span class="green">서초10</span> <span class="red">6501 | 8501</span>
      </li>
    </ul>
  </div>
</div>

<!-------------------------- GALLERY -------------------------->
<!--

테마폴더/tail.php : 99번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정
-->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
