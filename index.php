<?php
//title, description, and keywords won't be show in the page; they're just to help out the browser. 
$design["title"]       = "Home";
$design["description"] = "Scratch Request Disscussion Form shop by @RedGuy7";
$design["keywords"]    = "home, welcome";
ob_start(); //lets PHP know to save the html code
?>
<!--add page content here. <body></body> tags are added through the PHP code.-->
<main role="main" class="flex-shrink-0">
	<div class="container">
		<h1 style="text-align: center;">Welcome to Perfect Pearls!</h1>
		<img src="//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png" class="banner">
		<hr>
		<h3>What Are Shops?</h3>
		<p>A shop is <a href="//scratch.mit.edu/discuss/11">a place on the Scratch Forums</a> where you can order anything from coding, art, banners, music, and more! Different shops offer different things. We offer everything. Now, the question I know you've been asking ever since you found this: the cost. It's all free here! In shops, you don't have to pay. In fact, there are <a href="https://scratch.mit.edu/discuss/topic/340012/">specific rules against exchanging media for loves, favorites, follows, and etcetera</a>. However, there are fake currencies some shops use for perks. We do not use them. We do everything for free! Just make sure to give credit, the order isn't too difficult, and the deadline is long enough for us to give you wowing results. Not sure if our results are really as good as we say? We have a <a href="/orders/portfolio">portfolio</a> and many other shops have one too, so feel free to compare! Finally, you can also <a href="/staff/our">join us and help make media for others</a>!</p>
		<hr>
		<h3>Could you please support us by advertising or giving Internets?</h3>
		<pre class="code"><span class="k">[url</span><span class="o">=</span><span class="s">//scratch.mit.edu/discuss/post/3810755/</span><span class="k">]
	[img</span><span class="o">=</span><span class="s">//cdn2.scratch.mit.edu/get_image/project/446970654_9000x7200.png</span><span class="k">]
[/url]</span></pre>
		<link rel="stylesheet" href="//cdn.scratch.mit.edu/scratchr2/static/__31603c47ef357e5c3cfbc182f95181bb__//djangobb_forum/css/pygments.css">
		<hr>
		<h3>Have a great day at Perfect Pearls!!</h3>
	</div>
</main>

<?php
$design['content'] = ob_get_clean(); //saves html code
require_once "design.php"; //Embeds design.php. See said file