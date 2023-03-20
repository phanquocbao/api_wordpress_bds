jQuery(document).ready(function () {
	window.vw_real_estate_currentfocus=null;
  	vw_real_estate_checkfocusdElement();
	var vw_real_estate_body = document.querySelector('body');
	vw_real_estate_body.addEventListener('keyup', vw_real_estate_check_tab_press);
	var vw_real_estate_gotoHome = false;
	var vw_real_estate_gotoClose = false;
	window.vw_real_estate_responsiveMenu=false;
 	function vw_real_estate_checkfocusdElement(){
	 	if(window.vw_real_estate_currentfocus=document.activeElement.className){
		 	window.vw_real_estate_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_real_estate_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_real_estate_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_real_estate_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_real_estate_gotoHome = true;
			} else {
				vw_real_estate_gotoHome = false;
			}

		}else{

			if(window.vw_real_estate_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}
			}
		}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_real_estate_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_real_estate_responsiveMenu){
				if(vw_real_estate_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_real_estate_gotoClose = true;
				} else {
					vw_real_estate_gotoClose = false;
				}
			
			}else{

			if(window.vw_real_estate_responsiveMenu){
			}
			}

			}
		}
		}
	 	vw_real_estate_checkfocusdElement();
	}
});