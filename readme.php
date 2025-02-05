
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>HTML5 Gallery Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body >

<style type="text/css">
div.guide {margin:12px 24px;}
div.guide span {color:#ff0000; font:italic 14px Arial, Helvetica, sans-serif;}
div.guide p {margin-left:24px; color:#000000; font:14px Arial, Helvetica, sans-serif;}
div.guide pre {margin-left:24px; color:#990000;}
div.guide p.title {margin-left:0px; color:#df501f; font:18px Arial, Helvetica, sans-serif;}
</style>

<div class="guide">

<p class="title">HTML5 Gallery Version 9.1</p>
<p>HTML5 Gallery is a jQuery image and video gallery plugin, it's an all-in-one solution for online photo and video gallery. It supports images, YouTube, Vimeo and local mp4, m4v, flv, ogg, ogv and webm videos, provides built-in LightBox effects and social media plugins, supports Google Analytics event tracking, works on Windows, Linux, Mac, Android, iPhone, iPad and all modern web browsers.</p>
<p><a href="http://www.html5box.com" target="_blank">http://www.html5box.com</a>, HTML5Box, a service of Magic Hills Pty Ltd</p>
<p></p>
<p class="title"> Skin Examples</p>
<p>1. <a href="examples/demo_horizontal_skin.html">Skin - horizontal</a></p>
<p>2. <a href="examples/demo_mediapage_skin.html">Skin - mediapage</a></p>
<p>3. <a href="examples/demo_light_skin.html">Skin - light</a></p>
<p>4. <a href="examples/demo_darkness_skin.html">Skin - darkness</a></p>
<p>5. <a href="examples/demo_vertical_skin.html">Skin - vertical</a></p>
<p>6. <a href="examples/demo_gallery_skin.html">Skin - gallery</a></p>
<p>7. <a href="examples/demo_showcase_skin.html">Skin - showcase</a></p>
<p>8. <a href="examples/demo_verticallight_skin.html">Skin - verticallight</a></p>
<p>9. <a href="examples/demo_video_player.html">HTML5 Video Player</a></p>
<p></p>
<p class="title">Quick Installation Guide</p>
<p>1. Unzip the downloaded file, copy or upload the folder <span>html5gallery</span> to your web server</p>
<p>2. Reference the file <span>jquery.js</span> and <span>html5gallery.js</span> which is in the folder <span>html5gallery</span> before the <span>&lt;/head&gt;</span> of your web page. If you already have a jQuery script in your web page, you need to add <span>html5gallery.js</span> after your jQuery file. The minimum required version of jQuery is 1.6.</p>
<pre>    &lt;script type=&quot;text/javascript&quot; src=&quot;html5gallery/jquery.js&quot;&gt;&lt;/script&gt;
    &lt;script type=&quot;text/javascript&quot; src=&quot;html5gallery/html5gallery.js&quot;&gt;&lt;/script&gt;</pre>
<p>3. Add a div with class <span>html5gallery</span> to your web page where you want to display the Gallery. Define the size of the Gallery with HTML5 tag <span>data-width</span> and <span>data-height</span>. Specify the Skin with tag <span>data-skin</span>. There are 8 skins to choose from: <span>gallery</span>, <span>mediapage</span>, <span>darkness</span>, <span>light</span>, <span>showcase</span>, <span>vertical</span>, <span>verticallight</span> and <span>horizontal</span>. To hide all images before the Gallery is loaded, set the div's style to <span>style=&quot;display:none;&quot;</span></p>
<pre>    &lt;div style=&quot;display:none;&quot; class=&quot;html5gallery&quot; data-skin=&quot;horizontal&quot; data-width=&quot;480&quot; data-height=&quot;272&quot;&gt;
    &lt;/div&gt;</pre>
<p>4. Add images and videos to this div to make a Gallery. The thumbnail is specified in the <span>img</span> tag, the full size image is defined in <span>href</span> attribute of the surrounded <span>a</span> tag. The title is defined in <span>alt</span> attribute of <span>img</span> tag.</p>
<pre>    &lt;div style=&quot;display:none;&quot; class=&quot;html5gallery&quot; data-skin=&quot;horizontal&quot; data-width=&quot;480&quot; data-height=&quot;272&quot;&gt;
	    
       &lt;!-- Add images to Gallery --&gt;
       &lt;a href=&quot;images/Tulip_large.jpg&quot;&gt;&lt;img src=&quot;images/Tulip_small.jpg&quot; alt=&quot;Tulips&quot;&gt;&lt;/a&gt;
       &lt;a href=&quot;images/Swan_large.jpg&quot;&gt;&lt;img src=&quot;images/Swan_small.jpg&quot; alt=&quot;Swan on Lake&quot;&gt;&lt;/a&gt;
       
       &lt;!-- Add videos to Gallery --&gt;
       &lt;a href=&quot;images/Big_Buck_Bunny.mp4&quot;&gt;&lt;img src=&quot;images/Big_Buck_Bunny.jpg&quot; alt=&quot;Big Buck Bunny, Copyright Blender Foundation&quot;&gt;&lt;/a&gt;
       
       &lt;!-- Add Youtube video to Gallery --&gt;
       &lt;a href=&quot;http://www.youtube.com/embed/YE7VzlLtp-4&quot;&gt;&lt;img src=&quot;http://img.youtube.com/vi/YE7VzlLtp-4/2.jpg&quot; alt=&quot;Youtube Video&quot;&gt;&lt;/a&gt;
       
       &lt;!-- Add Vimeo video to Gallery --&gt;
       &lt;a href=&quot;http://player.vimeo.com/video/1084537?title=0&amp;amp;byline=0&amp;amp;portrait=0&quot;&gt;&lt;img src=&quot;images/Big_Buck_Bunny.jpg&quot; alt=&quot;Vimeo Video&quot;&gt;&lt;/a&gt;
    
    &lt;/div&gt;</pre>
<p>5. For more options, view <a href="http://html5box.com/html5gallery/install.php" target="_blank">http://html5box.com/html5gallery/install.php</a></p>

<p></p>
<p class="title">Upgrade to Commercial License</p>
<p>1. Make payment at <a href="http://html5box.com/order.php" target="_blank">http://html5box.com/order.php</a>. Once your payment is completed, your account information will be sent to your email address in minutes.</p>
<p> 2. Download Commercial Version at <a href="http://html5box.com/members/" target="_blank">http://html5box.com/members/</a>.</p>
<p> 3. To upgrade an existing Gallery, overwrite the html5gallery.js with the Commercial Version.</p>
<p></p>
<p class="title">What's New</p>
<p><a href="http://html5box.com/html5gallery/index.php#news" target="_blank">Online Version History</a></p>
<p></p>
<p class="title">End User License</p>
<p><a href="http://html5box.com/terms.php" target="_blank">End User License Agreement</a></p>
<p></p>
<p class="title">Video and Photos  License Information</p>
<p>Big Buck Bunny
  Video, Copyright 2008, Blender Foundation / <a href="http://www.bigbuckbunny.org" target="_blank">www.bigbuckbunny.org</a></p>
<p>Colorful Tulips And Blue Sky Photo
</p>
<p>HTML: <a href="http://www.publicdomainpictures.net/view-image.php?image=7982&picture=colorful-tulips-and-blue-sky" target="_blank">Colorful Tulips And Blue Sky</a> by Petr Kratochvil</p>
<p>Red Tulip Row Photo
</p>
<p>HTML: <a href="http://www.publicdomainpictures.net/view-image.php?image=13739&picture=red-tulip-row" target="_blank">Red Tulip Row</a> by Petr Kratochvil
</p>
<p>Swan On Lake Photo
</p>
<p>HTML: <a href="http://www.publicdomainpictures.net/view-image.php?image=7277&picture=swan-on-lake" target="_blank">Swan On Lake</a> by Vera Kratochvil</p>
<p>Sakura Trees Photo
</p>
<p>HTML: <a href="http://www.publicdomainpictures.net/view-image.php?image=7080&picture=sakura-trees" target="_blank">Sakura Trees</a> by Petr Kratochvil</p>
<p>Tulip Background Photo
</p>
<p>HTML: <a href="http://www.publicdomainpictures.net/view-image.php?image=6480&picture=tulip-background" target="_blank">Tulip Background</a> by Petr Kratochvil
</p>
</div>

</body>

</html>
