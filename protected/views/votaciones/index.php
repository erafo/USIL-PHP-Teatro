<?php
$this->breadcrumbs=array(
	'Votaciones',
);?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=398003753579713";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1><?php echo $this->message; ?></h1>

<div class="fb-comments" data-href="http://example.com" data-num-posts="2" data-width="470"></div>


