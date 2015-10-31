

config {
	tx_realurl_enable = 1

	# Deutsch
	sys_language.uid = 0
    language = de
    locale_all = de_DE at euro

    doctype = <!DOCTYPE HTML>
    htmlTag_langKey = de
}



temp.topmenu = HMENU

# level 1 menu-object, textual


temp.topmenu.1 = TMENU
temp.topmenu.1 {

	# Normal state properties
	NO.allWrap = <li>|</li>

	# Enable active state and set properties:
	ACT = 1
	ACT.allWrap = <li class="active">|</li>
}



/*
temp.topmenu.2 = TMENU
temp.topmenu.2 {

  # Normal state properties
  NO.allWrap = <li>|</li>

  # Enable active state and set properties:
  ACT = 1
  ACT.allWrap = <li class="active">|</li>
}
*/

lib {
	# Headerimage
    headerimage = PHP_SCRIPT_INT
    headerimage.file=typo3conf/ext/bp_wedding/Classes/Utility/random_image.php
}



page = PAGE
page {

 includeCSS {
	 main = typo3conf/ext/bp_wedding/Resources/Public/Styles/Main.css
 }

 includeJSFooter {
//	10-gmaps = http://maps.google.com/maps/api/js?sensor=true
//	10-gmaps.forceOnTop = 1
  	20-lib = typo3conf/ext/bp_wedding/Resources/Public/JavaScript/libs.min.js
	20-lib.forceOnTop = 0
  	30-app = typo3conf/ext/bp_wedding/Resources/Public/JavaScript/app.min.js
	30-app.forceOnTop = 0
 }

 10 = FLUIDTEMPLATE
 10 {
    file = typo3conf/ext/bp_wedding/Resources/Private/Templates/Page/Default.html
    variables {
     topMenu < temp.topmenu
     content < styles.content.get

     siteName < plugin.tx_bpwedding.settings.siteName
     siteSubline < plugin.tx_bpwedding.settings.siteSubline
     startImagePath < plugin.txbp_wedding.settings.startImagePath
   }
  }
}