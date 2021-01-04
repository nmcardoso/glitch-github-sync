<?php
if (array_key_exists("title", $design)) $design['title'] .= " | Perfect Pearls - Results as perfect as pearls!"; #adds the shop name to the end of the title, so "Orders Center" becomes "Orders Center | Perfect Pearls - Results as perfect as pearls!"
if (array_key_exists("keywords", $design)) $design['keywords'] .= ", "; #formatting fixing for the keywords

$design = array_merge( #default values to avoid errors
	array(
		"title" => "Perfect Pearls - Results as perfect as pearls!", #title
		"description" => "Scratch shop by @RedGuy7", #description
		"keywords" => "" #keywords are blank because they are added on below.
	),
	$design #override with our custom ones
);

$design['keywords'] .= "perfect, pearls, results, perfect pearls, order, shop, staff, free, fun, help, media, work, site, scratch, coding"; #default keywords are added on to the custom ones 
?>
<!DOCTYPE html>
<!--tells the browser "HTML ahead!"-->
<html>
<!--tells the browser "this is HTML"-->

<head>
	<!--security-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta https-equiv="x-ua-compatible" content="ie=edge">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta property="op:markup_version" content="v1.0">

	<!--general information about the page's...-->
	<!--...title-->
	<title><?php $design['title'] ?></title>
	<meta property="og:title" content="<?php $design['title'] ?>">
	<meta name="twitter:title" content="<?php $design['title'] ?> ">
	<meta name="apple-mobile-web-app-title" content="<?php $design['title'] ?> ">
	<meta name="application-name" content="<?php $design['title'] ?> ">
	<meta itemprop="name" content="<?php $design['title'] ?> ">
	<!--...site-->
	<meta property="og:site_name" content="Perfect Pearls - Results as perfect as pearls!">
	<meta name="twitter:site" content="Perfect Pearls - Results as perfect as pearls!">
	<!--...description-->
	<meta name="description" itemprop="description" content="<?php $design['description'] ?> ">
	<meta property="og:description" content="<?php $design['description'] ?> ">
	<meta name="twitter:description" content="<?php $design['description'] ?> ">
	<!--...authors-->
	<meta name="author" content="@RedGuy7">
	<meta name="author" content="@b1048546">
	<meta property="article:author" content="@RedGuy7">
	<meta property="article:author" content="@b1048546">
	<!--...other versions-->
	<link rel="canonical" href="//scratch.mit.edu/discuss/topic/454707/">
	<link rel="canonical" href="//perfect-pearls.redguy7.repl.co/">
	<link rel="canonical" href="//perfect-pearls--redguy7.repl.co/">
	<link rel="canonical" href="//repl.it/@RedGuy7/Perfect-Pearls">
	<link rel="canonical" href="//scratch.mit.edu/discuss/topic/454707/">
	<!--...and more-->
	<meta name="subject" content="Scratch Requests Disccusion Forum Shop">
	<meta name="keywords" content="<?php $design['keywords'] ?> ">
	<meta name="rating" content="General">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">

	<!--web app-->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="browsermode" content="application">
	<meta name="x5-page-mode" content="app">
	<meta name="apple-mobile-web-app-status-bar-style" content="#0000FF">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="msapplication-config" content="/browserconfig.xml">
	<!--how the page looks (also known as CSS or Cascading Style Sheets)-->
	<meta name="theme-color" content="#1b4885">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="wap-font-scale" content="no">
	<link href="//getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="//getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
	<link href="/styles.css" rel="stylesheet">
	<!--interactivity (otherwise known as JS or JavaScript)-->
	<script src="//code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!--site images-->
	<link rel="mask-icon" href="//clipart-library.com/new_gallery/36-366861_png-clip-art-image-transparent-background-pearl-transparent.png" color="#1b4885">
	<link rel="apple-touch-icon" href="//clipart-library.com/new_gallery/36-366861_png-clip-art-image-transparent-background-pearl-transparent.png" sizes="600x600">
	<link rel="icon" href="//clipart-library.com/new_gallery/36-366861_png-clip-art-image-transparent-background-pearl-transparent.png" sizes="600x600" type="image/png">
	<meta itemprop="image" content="//clipart-library.com/new_gallery/36-366861_png-clip-art-image-transparent-background-pearl-transparent.png">
	<link rel="apple-touch-icon" href="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png" sizes="3718x920">
	<link rel="icon" href="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png" sizes="3718x920" type="image/png">
	<meta property="og:image" content="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png">
	<meta property="og:image:secure_url" content="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png">
	<link rel="apple-touch-icon-precomposed" href="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png">
	<meta name="msapplication-TileImage" content="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png">
	<meta name="twitter:image" content="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png">
	<meta property="og:image:width" content="3718">
	<meta property="og:image:height" content="920">
	<meta property="og:image:alt" content="Perfect Pearls - Results as perfect as pearls! PP 2.0 @RedGuy7 @b1048546">
	<meta name="twitter:image:alt" content="Perfect Pearls - Results as perfect as pearls! PP 2.0 @RedGuy7 @b1048546">
	<link rel="apple-touch-icon" href="//cdn2.scratch.mit.edu/get_image/project/446970654_700x150.png" sizes="700x150">
	<link rel="icon" href="//cdn2.scratch.mit.edu/get_image/project/446970654_700x150.png" sizes="700x150" type="image/png">
	<link rel="apple-touch-startup-image" href="//cdn2.scratch.mit.edu/get_image/project/446970654_700x150.png">
	<!--for search engines (SEO or Search Engine Optimization)-->
	<meta name="robots" content="index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1">
	<meta name="googlebot" content="index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1">
</head>

<body>
	<header>
		<!--this is the header-->
		<nav class="fixed-top navbar navbar-dark navbar-expand-md">
			<a class="navbar-brand" href="//scratch.mit.edu/discuss/topic/454707/">Perfect Pearls</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse navbar-nav mr-auto" id="navbarCollapse">
				<a class="nav-link" href="/">ＨＯＭＥ</a>
				<div class="dropdown">
					<button class="dropbtn">
						<a class="nav-link" href="/orders/">Ｃustomers</a>
					</button>
					<div class="dropdown-content">
						<a href="/orders/ordering.php">Ｏʀᴅᴇʀ</a>
						<a href="/orders/portfolio.php">Ｗʜʏ Ｕꜱ?</a>
						<a href="/orcers/orce.php">Ｏʀᴅᴇʀꜱ Ｃᴇɴᴛᴇʀ</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">
						<a class="nav-link" href="/staff">Ｓᴛᴀғғ</a>
					</button>
					<div class="dropdown-content">
						<a href="/staff/our.html">Ｓᴛᴀғғ</a>
						<a href="/staff/terms.html">Terms</a>
						<a href="/staff/partners.html">Partners</a>
						<a href="/staff/news.html">News</a>
						<a href="/staff/checks.html">Ｒᴇꜱ</a>
					</div>
				</div>
				<form class="form-inline mt-2 mt-md-0 search">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</header>
	<?php $design['content'] ?>
	<footer class="footer mt-auto py-3">
		<h4 style="text-align: center;text-transform: uppercase;font-size: 17.5px;"><strong>Please do not copy our name.</strong></h4>
		<p style="font-size: .8em; padding: 5px;">Thanks to Team Intelligent Projects Shop 1.0, Scratch Ultimate Coding Shop, the Elemental Shop, the Koppa Shop, @OurPrincess, @pinkpie710, and @b1048546 for helping with formatting. Thanks to @LBormi of the Koppa Shop, and @DaBoi001 of DaBoi Inc./Shop for various images around the shop.Thanks to @ppppie of The Emerald Shop for the FAQ. Finally, thanks to the Inter-Shop Staff Tracker 2.0 and The Emerald Shop 4.0 for good ideas.</p>
	</footer>
</body>

</html>