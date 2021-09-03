$(document).ready(function(){
      var swiper1 = new Swiper('#gssw .swiper1', {
        pagination: '.swiper-pagination1',
        slidesPerView: '4',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        centeredSlides: true,
        spaceBetween: 0,
    });

    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 90)
        }, 1250);
        event.preventDefault();
    });


    var mapContainer = document.getElementById('map'), // 지도를 표시할 div
      mapOption = {
            center: new kakao.maps.LatLng(37.49770 , 127.02417), // 지도의 중심좌표
            level: 4 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption);

    var imageSrc = 'http://dydgml23.dothome.co.kr/LD/img/maker.png', // 마커이미지의 주소입니다
        imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
        imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
        markerPosition = new kakao.maps.LatLng(37.49770 , 127.02417); // 마커가 표시될 위치입니다

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
      position: markerPosition,
      image: markerImage // 마커이미지 설정
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);

    // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    var content = '<div class="customoverlay">' +
        '  <a href="https://map.kakao.com/?map_type=DEFAULT&map_hybrid=false&q=%ED%94%8C%EB%A1%9C%EB%9D%BC%EB%85%B8&srcid=1646573000&from=total" target="_blank">' +
        '    <span class="title">플로라노</span>' +
        '  </a>' +
        '</div>';

    // 커스텀 오버레이가 표시될 위치입니다
    var position = new kakao.maps.LatLng(37.49770 , 127.02417);

    // 커스텀 오버레이를 생성합니다
    var customOverlay = new kakao.maps.CustomOverlay({
        map: map,
        position: position,
        content: content,
        yAnchor: 1
    });




    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.fixed-header,.fixed-top').outerHeight();
    $(window).scroll(function(event){ didScroll = true; });
    setInterval(function() { if (didScroll) { hasScrolled(); didScroll = false; } }, 250);
    function hasScrolled() { var st = $(this).scrollTop();
      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta) return;
      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.fixed-header,.fixed-top').addClass('nav-up');
        $('.fixed-top').addClass('nav-ht');
       }
        else {
          if(st < lastScrollTop && st < navbarHeight)
          {
             $('.fixed-header,.fixed-top').removeClass('nav-up');
             $('.fixed-top').removeClass('nav-ht');
         } } lastScrollTop = st; };

  });
