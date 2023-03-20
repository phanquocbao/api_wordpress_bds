<?php

	$vw_construction_estate_first_color = get_theme_mod('vw_construction_estate_first_color');

	$vw_construction_estate_custom_css = '';

	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='#header, .slider .more-btn a:hover, .about-btn a:hover, .footer a.custom_read_more:hover, .read_full a:hover,.sidebar a.custom_read_more:hover, h1.entry-title, h2.entry-title, h1.page-title,.scrollup i:hover,.sidebar input[type="submit"]:hover,.sidebar .custom-contact-us input[type="submit"]:hover,.sidebar .custom-social-icons i:hover,input[type="submit"]:hover,a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .footer .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
			$vw_construction_estate_custom_css .='background-color: '.esc_attr($vw_construction_estate_first_color).';';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='.read_full a:hover, .pagination .current, .pagination a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
			$vw_construction_estate_custom_css .='background-color: '.esc_attr($vw_construction_estate_first_color).'!important;';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='.contact-btn a:hover, .sidebar select, .postbox:hover h2.section-title a, .postbox:hover .entry-date a, .postbox:hover .entry-author a, .metabox:hover a, p.call-no a:hover, p.diff-lay a:hover, .contact-no span a:hover{';
			$vw_construction_estate_custom_css .='color: '.esc_attr($vw_construction_estate_first_color).';';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='h1.entry-title:after, h2.entry-title:after, h1.page-title:after{';
			$vw_construction_estate_custom_css .='border-top-color: '.esc_attr($vw_construction_estate_first_color).';';
		$vw_construction_estate_custom_css .='}';
	}

	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='.page-template-custom-home-page #header{';
			$vw_construction_estate_custom_css .='background: rgba(0, 0, 0, 0) linear-gradient( 126deg ,transparent 45%,'.esc_attr($vw_construction_estate_first_color). ' 43%) repeat scroll 0 0;';
		$vw_construction_estate_custom_css .='}';
	}

	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='@media screen and (max-width: 720px){
		.page-template-custom-home-page #header{';
			$vw_construction_estate_custom_css .='background: '.esc_attr($vw_construction_estate_first_color). ';';
		$vw_construction_estate_custom_css .='} }';
	}

	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='#contact{';
			$vw_construction_estate_custom_css .='background: rgba(0, 0, 0, 0) linear-gradient( 123deg ,transparent 19.3%,'.esc_attr($vw_construction_estate_first_color). ' 18%) repeat scroll 0 0;';
		$vw_construction_estate_custom_css .='}';
	}

	if($vw_construction_estate_first_color != false){
		$vw_construction_estate_custom_css .='.slider-sec{';
			$vw_construction_estate_custom_css .='background: rgba(0, 0, 0, 0) linear-gradient( 122deg ,transparent 35%,'.esc_attr($vw_construction_estate_first_color). ' 30%) repeat scroll 0 0;';
		$vw_construction_estate_custom_css .='}';
	}

	/*------------ Second highlight color --------------*/

	$vw_construction_estate_second_color = get_theme_mod('vw_construction_estate_second_color');

	if($vw_construction_estate_second_color != false){
		$vw_construction_estate_custom_css .='.search-box, .slider .more-btn a, .contact-no, .contact-btn a, .about-btn a, .footer .tagcloud a:hover, .footer .woocommerce-product-search button,  #comments a.comment-reply-link, #comments input[type="submit"].submit, .read_full a, .sidebar td#today, .sidebar .tagcloud a:hover, .sidebar .woocommerce-product-search button, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, input[type="submit"], .footer-2,.scrollup i,.sidebar input[type="submit"],.sidebar a.custom_read_more,.sidebar .custom-social-icons i,a.button, .footer input[type="submit"], .footer .custom-social-icons i, .footer a.custom_read_more, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a{';
			$vw_construction_estate_custom_css .='background-color: '.esc_attr($vw_construction_estate_second_color).';';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$vw_construction_estate_custom_css .='.pagination span, .pagination a, .woocommerce nav.woocommerce-pagination ul li a, .read_full a{';
			$vw_construction_estate_custom_css .='background-color: '.esc_attr($vw_construction_estate_second_color).'!important;';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$vw_construction_estate_custom_css .='.footer h3, entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation ul.sub-menu a:hover, a,.header-menu i, .sidebar ul li a:hover, .footer li a:hover, .page-template-custom-home-page p.call-no a:hover, p.call-no a:hover, p.diff-lay a:hover{';
			$vw_construction_estate_custom_css .='color: '.esc_attr($vw_construction_estate_second_color).';';
		$vw_construction_estate_custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$vw_construction_estate_custom_css .='.contact-btn a, .footer h3, .footer a.custom_read_more, hr.big, .main-navigation ul ul, a.button:hover, .woocommerce-message, .footer .custom-social-icons i{';
			$vw_construction_estate_custom_css .='border-color: '.esc_attr($vw_construction_estate_second_color).';';
		$vw_construction_estate_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_construction_estate_theme_lay = get_theme_mod( 'vw_construction_estate_width_option','Full Width');
    if($vw_construction_estate_theme_lay == 'Boxed'){
		$vw_construction_estate_custom_css .='body{';
			$vw_construction_estate_custom_css .='margin-right: auto !important; margin-left: auto !important;';
		$vw_construction_estate_custom_css .='}';
		$vw_construction_estate_custom_css .='.logo{';
			$vw_construction_estate_custom_css .='width: 100%;';
		$vw_construction_estate_custom_css .='}';
		$vw_construction_estate_custom_css .='.read-btn{';
			$vw_construction_estate_custom_css .='padding-right: 0 !important;';
		$vw_construction_estate_custom_css .='}';
	}else if($vw_construction_estate_theme_lay == 'Wide Width'){
		$vw_construction_estate_custom_css .='.logo{';
			$vw_construction_estate_custom_css .='width: 100%;';
		$vw_construction_estate_custom_css .='}';
	}

	/*---------------------------Slider Layout -------------------*/

	$vw_construction_estate_theme_lay = get_theme_mod( 'vw_construction_estate_slider_content_option','Center');
	if($vw_construction_estate_theme_lay == 'Left'){
		$vw_construction_estate_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_construction_estate_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_construction_estate_custom_css .='}';
		$vw_construction_estate_custom_css .='.slider .inner_carousel h1{';
			$vw_construction_estate_custom_css .='border-left: 2px solid #f68021; border-right:none;';
		$vw_construction_estate_custom_css .='}';
	}else if($vw_construction_estate_theme_lay == 'Center'){
		$vw_construction_estate_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_construction_estate_custom_css .='text-align:center; left:20%; right:20%; border-right:none;';
		$vw_construction_estate_custom_css .='}';
	}else if($vw_construction_estate_theme_lay == 'Right'){
		$vw_construction_estate_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_construction_estate_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_construction_estate_custom_css .='}';
	}