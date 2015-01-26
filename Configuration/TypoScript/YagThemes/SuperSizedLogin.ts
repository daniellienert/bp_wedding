plugin.tx_yag.settings.themes.superSizedLogin < plugin.tx_yag.settings.themes.superSized
plugin.tx_yag.settings.themes.superSizedLogin {
	title = SuperSized jQuery
	description = Uses the SuperSized Jquery Script

	controller {
		ItemList {
			list.template = EXT:yag_themepack_jquery/Resources/Private/Templates/SuperSized/ItemList/List.html
		}
	}

	includeJS >

/*
	includeJS {
		50-superSized10 = EXT:yag_themepack_jquery/Resources/Public/GallerySource/SuperSized/slideshow/js/jquery.easing.min.js
		60-superSized20 = EXT:yag_themepack_jquery/Resources/Public/GallerySource/SuperSized/slideshow/js/supersized.3.2.7.min.js
		70-superSized30 = EXT:yag_themepack_jquery/Resources/Public/GallerySource/SuperSized/slideshow/theme/supersized.shutter.min.js
	}
*/

	// includeCSS >

	# --------------------
	# SuperSized
	# --------------------
	superSizedSettings {
		// General
		slideshow               =   0
		autoplay				=	1
		start_slide             =   1
		stop_loop				=	0
		random					= 	0
		slide_interval          =   3000
		transition              =   1
		transition_speed		=	1000
		new_window				=	1
		pause_hover             =   0
		keyboard_nav            =   1
		performance				=	2
		image_protect			=	1
		image_path				=	EXT:yag_themepack_jquery/Resources/Public/GallerySource/SuperSized/slideshow/img

		//Size & Position
		min_width		        =   0
		min_height		        =   0
		vertical_center         =   1
		horizontal_center       =   1
		fit_portrait         	=   1
		fit_landscape			=   0
		fit_always				=	0

		//Components
		slide_links				=	blank
		thumb_links				=	0
		navigation              =   0
		thumbnail_navigation    =   0
		slide_counter           =   0
		slide_captions          =   0
		progress_bar			=	0
		mouse_scrub				=	0
	}
}


mdoule.tx_yag.settings.themes.superSizedLogin < plugn.tx_yag.settings.themes.superSizedLogin