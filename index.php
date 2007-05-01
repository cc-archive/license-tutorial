<?php

$total_pages = 10;

# Build list of pages we can access
for ($i = 1; $i <= $total_pages; $i++) {
  $pages[$i] = "$i.php";
}

if ($_GET['p']) {
  include_once ($pages[$_GET['p']]);
} else {
  include_once ($pages[1]);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Licensing Tutorial &mdash; Creative Commons</title>
	<style type="text/css" media="screen">
	  @import url('http://creativecommons.org/includes/style.css');
    @import url('style.css');
	</style>
	
	<script type="text/javascript" charset="utf-8">
	 function popup(page) {
	    window.open ("popup.php?p=" + page,"infownd","resizable=0,width=350,height=400");
	    
	    return false;
	    
	 }
	 function puzzle() {
 	    window.open ("puzzle/index.php" ,"puzzlewnd","resizable=1,width=470,height=570,scrollbars=1");

 	    return false;

 	 }
   
	</script>
</head>
<body>
      <div id="header-wrapper">
        <div id="header-main">
          <a href="/license/" class="cc-actions"><img src="http://creativecommons.org/images/publish.png" border="0" class="publish" /> <h4>License</h4>Your Work</a>

          <a href="http://search.creativecommons.org/" class="cc-actions"><img src="http://creativecommons.org/images/find.png" border="0" /> <h4>Find</h4>CC Licensed Work</a>

          <a href="/"><img src="http://creativecommons.org/images/cc-title.png" alt="creative commons" id="cc-title" border="0" /></a>
        </div>
      </div>
      <div id="wrapper"><div id="wrapper-ie">

      <div class="jurisdictions">
        <h4><a href="/sitemap">Search Site</a>&nbsp;&nbsp;&nbsp;&nbsp;</h4><strong>|</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        <h4><a href="/worldwide">Worldwide</a>&nbsp;</h4>
<!-->
        <select name="sortby" onchange="orderby(this)">
          <option value="">Select a jurisdiction</option>
           <script type="text/javascript"
                   src="http://api.creativecommons.org/rest/dev/support/jurisdictions.js?locale=en"></script>
        </select>
-->      </div>
      <div class="clear">&nbsp;</div>



  		<div id="body">

  			<div id="splash">
  				<h3 class="category"></h3>
  				<h2><?= $page_title ?></h2>
  				<div id="splash-menu"></div>
  			</div>

  			<div id="content">
  				<div id="main-content">
  				  
  		<div id="page">		  
  				  
  <div id="cctut">
    <div class="sidebar">
      <ul>
        
        <li><a href="?p=1">1. Your copyright</a></li>
        <li><a href="?p=2">2. Where Creative Commons fits&nbsp;in</a></li>
        <li><a href="?p=3">3. Introducing the Freedoms License&nbsp;Generator</a></li>
        <li><a href="?p=4">4. Choose freedoms to grant</a></li>
        <li><a href="?p=5">5. Choosing limitations on the granted&nbsp;freedoms</a></li>
        <li><a href="?p=6">6. Limit freedoms</a></li>
				<li><a href="?p=7">7. Limitation exception</a></li>
        <li><a href="?p=8">8. Select a jurisdiction for your&nbsp;license</a></li>
        <li><a href="?p=9">9. Specify rights beyond the CC&nbsp;license</a></li>
        <li><a href="?p=10">10. Your license</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="main">
        <?= $page_content ?>
        <br clear="all"/>
      </div>
      <ul class="nav">
				<? if ($page_prev) { ?><li class="previous"><a href="?p=<?= $page_prev ?>">Previous</a></li><? } ?>
        <? if ($page_next) { ?><li class="next"><a href="?p=<?= $page_next ?>">Next</a></li><? } else { ?>
          <li class="next"><a href="?p=1">First</a></li><? } ?>
      </ul>
    </div>
  </div>
  <!--
  </div>
  </div>
  <div id="sidebar">
  <ul>
  	<li><strong><a href="/">Home</a></strong></li>
  	<li><strong><a href="/weblog/">Weblog</a></strong></li>
  	<li><strong><a href="/about/">About</a></strong></li>

  	<li><strong><a href="/faq">FAQ</a></strong></li>
  	<li><strong><a href="/contact">Contact</a></strong></li>
  	<li><strong><a href="/presskit">Press Kit</a></strong></li>
  	<li><strong><a href="/policies">Policies</a></strong></li>
  	<li><strong><a href="/privacy">Privacy</a></strong></li>
  	<li><strong><a href="/sitemap">Sitemap</a></strong></li>

  </ul>
  <br />
  <h4>Explore</h4>
  <ul>
  <li><a href="/audio/">Audio</a></li>
  <li><a href="/video/">Video</a></li>
  <li><a href="/image/">Images</a></li>
  <li><a href="/text/">Text</a></li>
  <li><a href="/education/">Education</a></li>
  <li><a href="/software/">Software</a></li></ul>

  <br />
  <h4>The Commons</h4>
  <ul>
    <li><img src="/images/commons/sc.png" /> <a href="http://sciencecommons.org">Science Commons</a></li>
    <li><img src="/images/commons/ic.png" /> <a href="http://icommons.org">iCommons</a></li>
    <li><img src="/images/commons/cci.png" /> <a href="http://creativecommons.org/worldwide">ccInternational</a></li>
    <li><img src="/images/commons/labs.png" /> <a href="http://labs.creativecommons.org/">ccLabs</a></li>

    <li><img src="/images/commons/mix.png" /> <a href="http://ccmixter.org">ccMixter</a></li>
  </ul>
--></div>
  </div>			</div>
  			<div class="clear">&nbsp;</div>

  		</div>
  		</div></div>
  		<div id="footer" dir="" align="left">

  			<div id="sub-footer">
          <div class="ccExtras">
            <h2><a href="http://wiki.creativecommons.org/Tools">Tools</a></h2>
            Publish from your desktop, browse with mozCC, and more...
          </div>
          <div class="ccExtras">
            <h2><a href="http://wiki.creativecommons.org/Developers">Developers</a></h2>
            Help put Creative Commons into your applications.
          </div>

          <div class="ccExtras">
            <h2><a href="http://creativecommons.org/discuss">Discuss</a></h2>
            Join our discussion lists. Read and contribute to our <a href="http://wiki.creativecommons.org/">wiki</a>.
          </div>
          <div class="ccExtras">
            <h2><a href="http://wiki.creativecommons.org/Events">Events</a></h2>
            Join us at the next Creative Commons event.
          </div>

          <div class="ccExtras">
            <h2><a href="/featured-projects">Featured Projects</a></h2>
            Read about people and projects that use CC.
          </div>
  				<div class="clear">&nbsp;</div>
  			</div>
  			<p align="center">

  				<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img src="http://i.creativecommons.org/l/by/3.0/88x31.png" alt="Creative Commons License" style="border: medium none ;" height="31" width="88"></a><br>

  Except where otherwise <a class="subfoot" href="/policies#license">noted</a>, content on this site is<br />
  licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" class="subfoot">Creative Commons Attribution 3.0 License</a>

  			</p>
  		</div>
</body>
</html>
