<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Article">
<head>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $Description; ?>">
	<meta name="keywords" content="<?php echo $Keywords . ' ' . $Sitewide_Title; ?>">
	<meta itemprop="name" content="<?php echo $WebTitle; ?>">
	<meta itemprop="description" content="<?php echo $Description; ?>">
	<meta itemprop="image" content="<?php echo $FeaturedImage; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<title><?php echo $WebTitle . ' &nbsp;&middot;&nbsp; ' . $Sitewide_Title; ?></title>

	<link rel="canonical" href="<?php echo $Sitewide_Root.$Canonical; ?>">
	<link rel="icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="shortcut icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="stylesheet" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/reset.min.css">
	<link rel="stylesheet" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/col.min.css">
	<link rel="stylesheet" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/simplet.css">

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-45667989-3', 'eustasy.org');
		ga('send', 'pageview');
	</script>

	<script>
		WebFontConfig = {
			google: {
				families: [
					'Droid+Sans+Mono::latin',
					'Open+Sans:400italic,400,300,600:latin',
					'Raleway:400,300,200:latin'
				]
			}
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http')+'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<script async src="<?php echo $Sitewide_Root; ?>assets/js/modernizr.min.js"></script>
	<!--[if (lt IE 9) & (!IEMobile)]><script async src="<?php echo $Sitewide_Root; ?>assets/js/selectivizr.min.js"></script><![endif]-->

</head>

<body>

	<div id="skiptomain"><p><a href="#content">skip to main content</a></p></div>

	<header class="group">
		<div class="col span_1_of_2">
			<h1><a href="<?php echo $Sitewide_Root; ?>"><!--<img src=""> --><?php echo $Sitewide_Title; ?></a></h1>
		</div>
		<nav class="col span_1_of_2">
			<ul>
				<li><a href="<?php echo $Sitewide_Root; ?>">home</a></li>
				<li><a href="<?php echo $Sitewide_Root; ?>page">page</a></li>
				<li><a href="<?php echo $Sitewide_Root; ?>blog/">blog</a></li>
				<li><a href="<?php echo $Sitewide_Root; ?>contact">contact</a></li>
			</ul>
			<ul>
				<li><a href="<?php echo $Sitewide_Root; ?>forum">forum</a></li>
				<?php if (isset($Member_Auth) && $Member_Auth == true) { ?>
					<li><a href="<?php echo $Sitewide_Root; ?>account">account</a></li>
					<li><a href="<?php echo $Sitewide_Root; ?>account?logout">logout</a></li>
				<?php } else { ?>
					<li><a href="<?php echo $Sitewide_Root; ?>account?login">login</a></li>
					<li><a href="<?php echo $Sitewide_Root; ?>account?signup">signup</a></li>
				<?php } ?>
			</ul>
		</nav>
	</header>

	<?php if ($Canonical != '') echo '<div class="content">';
