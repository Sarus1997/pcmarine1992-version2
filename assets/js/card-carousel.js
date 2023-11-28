$(".slider").owlCarousel({
    items: 1, // แสดงเพียง 1 รายการในแต่ละสไลด์
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000, // 2000ms = 2s
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1 // สำหรับหน้าจอขนาดเล็ก (มือถือ)
      },
      768: {
        items: 3 // สำหรับหน้าจอขนาดกลาง (tablet)
      },
      1024: {
        items: 4 // สำหรับหน้าจอขนาดใหญ่ (desktop)
      }
    }
  });
