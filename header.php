<html>

	<head>
		
		<!-- GitHub -->
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta description="Photos from Robb Lewis developer from Portsmouth, UK.">
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />

		<script type="text/javascript">
		  var GoSquared = {};
		  GoSquared.acct = "GSN-081563-R";
		  (function(w){
		    function gs(){
		      w._gstc_lt = +new Date;
		      var d = document, g = d.createElement("script");
		      g.type = "text/javascript";
		      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
		      var s = d.getElementsByTagName("script")[0];
		      s.parentNode.insertBefore(g, s);
		    }
		    w.addEventListener ?
		      w.addEventListener("load", gs, false) :
		      w.attachEvent("onload", gs);
		  })(window);
		</script>
		
		<?php wp_head(); ?>
	</head>
	
	<body>

		<header>
			<h1><img src="<?php bloginfo('template_directory'); ?>/img/camera-small.png"> <a href="/"><?php bloginfo('name'); ?></a></h1>
		</header>