jQuery(function() {
	jQuery('.content-site-albumslide').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: true,
		  dots: true,
		  prevArrow: jQuery('.content-site-prev'),
		  nextArrow: jQuery('.content-site-next'),
		  responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        centerPadding: '30px',
		      }
		    },
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 500,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		  ]
	});
	jQuery('.gallery_1_sort').click(function() {
		jQuery('.gallery_1_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_1_showed').addClass('active-gallery');
		jQuery('.gallery_1_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_1_sort').addClass('active-btn-opened');
	});
	jQuery('.gallery_2_sort').click(function() {
		jQuery('.gallery_2_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_2_showed').addClass('active-gallery');
		jQuery('.gallery_2_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_2_sort').addClass('active-btn-opened');
	});
	jQuery('.gallery_3_sort').click(function() {
		jQuery('.gallery_3_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_3_showed').addClass('active-gallery');
		jQuery('.gallery_3_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_3_sort').addClass('active-btn-opened');
	});
	jQuery('.gallery_4_sort').click(function() {
		jQuery('.gallery_4_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_4_showed').addClass('active-gallery');
		jQuery('.gallery_4_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_4_sort').addClass('active-btn-opened');
	});
	jQuery('.gallery_5_sort').click(function() {
		jQuery('.gallery_5_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_5_showed').addClass('active-gallery');
		jQuery('.gallery_5_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_5_sort').addClass('active-btn-opened');
	});
	jQuery('.gallery_6_sort').click(function() {
		jQuery('.gallery_6_showed').siblings().removeClass('active-gallery');
		jQuery('.gallery_6_showed').addClass('active-gallery');
		jQuery('.gallery_6_sort').siblings().removeClass('active-btn-opened');
		jQuery('.gallery_6_sort').addClass('active-btn-opened');
	});

	// tehnology

	jQuery('.tehnology_opened_1').click(function() {
		jQuery('.tehnology_opened_1').addClass('activated_sort');
		jQuery('.tehnology_opened_1').siblings().removeClass('activated_sort');
		jQuery('.tehnology_1').addClass('actived__tehnology');
		jQuery('.tehnology_1').siblings().removeClass('actived__tehnology');
	})
	jQuery('.tehnology_opened_2').click(function() {
		jQuery('.tehnology_opened_2').addClass('activated_sort');
		jQuery('.tehnology_opened_2').siblings().removeClass('activated_sort');
		jQuery('.tehnology_2').addClass('actived__tehnology');
		jQuery('.tehnology_2').siblings().removeClass('actived__tehnology');
	})
	jQuery('.tehnology_opened_3').click(function() {
		jQuery('.tehnology_opened_3').addClass('activated_sort');
		jQuery('.tehnology_opened_3').siblings().removeClass('activated_sort');
		jQuery('.tehnology_3').addClass('actived__tehnology');
		jQuery('.tehnology_3').siblings().removeClass('actived__tehnology');
	})
	jQuery('.tehnology_opened_4').click(function() {
		jQuery('.tehnology_opened_4').addClass('activated_sort');
		jQuery('.tehnology_opened_4').siblings().removeClass('activated_sort');
		jQuery('.tehnology_4').addClass('actived__tehnology');
		jQuery('.tehnology_4').siblings().removeClass('actived__tehnology');
	})
	jQuery('.tehnology_opened_5').click(function() {
		jQuery('.tehnology_opened_5').addClass('activated_sort');
		jQuery('.tehnology_opened_5').siblings().removeClass('activated_sort');
		jQuery('.tehnology_5').addClass('actived__tehnology');
		jQuery('.tehnology_5').siblings().removeClass('actived__tehnology');
	})

})