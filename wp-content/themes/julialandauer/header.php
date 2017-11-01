<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package julialandauer
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Begin OG Meta Tags -->
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg" />
<meta property="og:url" content="<?php echo get_site_url(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
<meta property="og:title" content="<?php echo bloginfo( 'name' ); ?>" />
<!-- End OG Meta Tags -->

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@julialandauer" />
<meta name="twitter:title" content="<?php echo bloginfo( 'name' ); ?>" />
<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>" />
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg" />
<!-- End Twitter Card Tags -->

<!-- Hotjar Tracking Code for julialandauer.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:84533,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- 

                                        ;;;: ;;;   :;;: ;;;       ;;;   `;;;;:       ;;;         :;;;;    ;;;;;;;;   ;;;;;;;;     ;;;;;   ;;;:   ;;; :;;;;;;;;``;;;;;;;:                                
                                        ;;;.`;;;   ;;;, ;;;      `;;;   :;;;;:       ;;;         ;;;;;`  `;;;;;;;;; `;;;;;;;;;   `;;;;;   ;;;,   ;;; ;;;;;;;;; ,;;;;;;;;;                               
                                        ;;; .;;;   ;;;``;;;      `;;;   ;;;;;;       ;;;         ;;;;;.  ,;;;;;;;;; .;;;;;;;;;   :;;;;;   ;;;`  `;;; ;;;;;;;;; ;;;;;;;;;;                               
                                        ;;; :;;:   ;;; ,;;;      ,;;;   ;;;;;;      `;;;        :;;;;;.  ;;;;;;;;;; :;;;;;;;;;   ;;;;;;   ;;;   .;;; ;;;;;;;;; ;;;;;;;;;;                               
                                        ;;; ;;;:   ;;; ;;;:      ;;;:  ,;;;;;;      .;;;        ;;;;;;,  ;;;;;;;;;; ;;;;;;;;;;   ;;;;;;   ;;;   :;;: ;;;       ;;;,  `;;;                               
                                       `;;; ;;;`  `;;; ;;;,      ;;;.  ;;;.;;;      :;;:        ;;;;;;:  ;;;   `;;; ;;;`  `;;;  ,;;;;;;  `;;;   ;;;, ;;;       ;;;`  `;;;                               
                                       .;;; ;;;   `;;; ;;;`      ;;;   ;;;`;;;      ;;;,       ,;;;:;;:  ;;;   .;;; ;;;   `;;;  ;;;`;;;  `;;;   ;;;``;;;;;;;;: ;;;;;;;;;,                               
                                       :;;: ;;;   ,;;; ;;;       ;;;  ,;;; ;;;      ;;;`       ;;;.,;;:  ;;;   :;;: ;;;   ,;;:  ;;; ;;;` ,;;:   ;;; ,;;;;;;;;``;;;;;;;;;                                
                                       ;;;, ;;;   ;;;: ;;;       ;;;  ;;;. ;;;      ;;;        ;;; .;;; `;;;   ;;;, ;;;   ;;;: ,;;; ;;;` ;;;:   ;;; ;;;;;;;;; .;;;;;;;;;                                
                                       ;;;``;;;   ;;;.`;;;      `;;;  ;;;  ;;;      ;;;       .;;; `;;; .;;;   ;;;``;;;   ;;;. ;;;. ;;;. ;;;.   ;;; ;;;.      :;;:   ;;;                                
                                :;;;;;;;;; ,;;;;;;;;; .;;;;;;;;,.;;; .;;;  ;;;      ;;;;;;;;: ;;;. `;;; :;;:   ;;; ,;;;;;;;;;  ;;;  ;;;, ;;;;;;;;;; ;;;       ;;;,   ;;;                                
                                ;;;;;;;;;; :;;;;;;;;; ,;;;;;;;;`:;;: ;;;.  ;;;     `;;;;;;;;: ;;;  `;;; ;;;:   ;;; ;;;;;;;;;; .;;;  ;;;: ;;;;;;;;;; ;;;;;;;;; ;;;`  `;;;                                
                                :;;;;;;;;; :;;;;;;;;; ;;;;;;;;; ;;;, ;;;   ;;;     ,;;;;;;;;`.;;;   ;;; ;;;`   ;;; ;;;;;;;;;; ;;;.  :;;: ;;;;;;;;;. ;;;;;;;;; ;;;   `;;;                                
                                `;;;;;;;;   ;;;;;;;;  ;;;;;;;;; ;;;`.;;;   ;;;`    ;;;;;;;;; ;;;,   ;;; ;;;   `;;; ;;;;;;;;;  ;;;   ,;;: ;;;;;;;;; `;;;;;;;;: ;;;   ,;;;                                
                                 `::::::     ::::::   ::::::::: ::: :::.   :::`    ::::::::: :::    ::: :::   .::: ::::::::  `:::   .:::  ,:::::.  `::::::::. :::   :::,                                
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::;;    .::::;    ;;:::::::: ;::; ;:::::::;;   ;;:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                                                                                             `,   ;    `   ;`        . ,  ; ;        :  ;                                                               
                                                                                              ;   ;    `   ;        ` `   , ;        ```,                                                               
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;   ,,,   ;  .`    `` ``        , .  `` :        ``.  `;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
                                                                                    ;  .``..  :  ;  ,  `` `   ;;;;;;; ;  `  ,  ;;;;  . :  `                                                             
                                                                                    ;  :  `  `.  ;  ;   . ,  `        ;  : ``  :  ;  : ;  :                                                             
                                                                                    ,  ;;;;  ;  ``  :`  , ;  .        ;  ; .  `.  ;  ; ;  ; ;;;;;;                                                      
                                                                                   ``        :  ;  , .  : ;  ;        ;  ; :  `   ;  ; ;  ; ;    :                                                      
                                                                                   `   :::,  ;  ;  ; ,  : ;  ;        :  ; ;  ,   :  ; :  ; ;;  ``                                                      
                                                                                   :  `   ;  ; `.  : :  ; :  ;       `.  : ;  ;  ``  :`.  :  ;  .                                                       
                                                                                   ;  ,   :  ; ;  .  :  ; ,  ::::::; `   . ;  ;  `   .`   ;;;;  ;                                                       
                                                                                   ;  ;   .  : ;  ;  :  ;``        : ,  `  :  ;  ,  ` .         ;                                                       
                                                                                   ;  ;  `   ,`.  ;  ;  ; ,        ; ;  . `.  :  ;  . `         :                                                       
                                                                                   :  ;  ,  ``;  .   ;  ; ;        ; ;  ; `   ,  ;  ;  ;       ;                                                        
                                                                                   ;;;;  :;;; ;;;;   ;;;;  ;;;;;;;;; ;;;; .;;;`  ;;;;   ;;;;;;;                                                         

-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<!-- <div class="announcement-bar">
  <h5>The NASCAR K&amp;N Pro Series West race from Kern County Raceway will be broadcast on NBCSN on Friday, April 8, 2016 at 11 pm EST. </h5>
</div> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-1600.svg" media="(min-width: 1200px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-768.svg" media="(min-width: 768px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-400.svg" >
					<img srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-400.svg" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-1600.svg" alt="">
			</picture>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-toggle menu-icon" aria-controls="menu" aria-expanded="false"><span></span></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
  <div class="floating-social">
    <a class="icon-facebook" href="http://www.facebook.com/julialandauerracing" target="_blank"></a>
    <a class="icon-twitter" href="http://www.twitter.com/julialandauer" target="_blank"></a>
    <a class="icon-instagram" href="http://instagram.com/julialandauer" target="_blank"></a>
    <a class="icon-youtube" href="https://www.youtube.com/user/julialandauer" target="_blank"></a>
  </div>
