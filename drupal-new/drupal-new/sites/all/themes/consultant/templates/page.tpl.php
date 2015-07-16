<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="<?php echo $front_page;?>"><img src="<?php print $logo; ?>" title="Consultant" alt="<?php $site_name?>" width="160" height="39" border="0" /></a> </div>
		 <!--< ?php if ($main_menu): ?>-->
		 <?php print render($page['header']); ?>
	      <div>
	        <?php 
             	$menu = menu_navigation_links('menu-header-menus');
             	print theme('links__menu_main_page', array('links' => $menu));
            ?>
	      </div> <!-- /#main-menu -->
    

		
		<!--< ?php endif; ?>-->
		<form action="" method="post">
			<h2>members login</h2>
			<label>Log In:</label>
		<input name="Your name" type="text" id="Yourname" />
		<label>Password:</label>
		<input name="password" type="password" id="password" />
		<input name="" type="submit" class="button" value="Login" />
		<div id="register"><a href="#">register now</a></div>
		</form>
		<h2>services</h2>
		<ul class="linkone">
			<li><a href="#">pit tellus, at</a></li>
			<li><a href="#">iaculis ante</a></li>
			<li><a href="#">ante eget</a></li>
			<li><a href="#">massa. Vestibu</a></li>
			<li><a href="#">lum facilisis.</a></li>
			<li><a href="#">Quisque vel est.</a></li>
			<li><a href="#">Donec ante</a></li>
			<li><a href="#">velit, eleifend</a></li>
			<li><a href="#">ucont cont,</a></li>
			<li><a href="#">ucont cont,</a></li>
			<li><a href="#">rhoncus</a></li>
		</ul>
  </div>
  <div id="rightPan">
   	<h1>A new begining<br /><span>senectus et netus et<br /> 
    malesuada</span> </h1>
	
	<?php print render($page['content']);?>
<div id="rightmorePan">
      <p class="textposition">culis ante  faucibus enim.</p>
    <a href="#">more</a></div>    
<div id="rightaddPan">	  
    <div id="rightaddonePan">
		<p class="whitetext">g-consultant</p>
		<p class="whitetextbig">new launch</p>
	  <a href="#">view      </a></div>
	
    <div id="rightaddtwoPan">
		<p class="whitetext">g-consultant</p>
		<p class="whitetextbig">solutions</p>
	  <a href="#">view      </a></div>
	</div>
	<h4>g-consultant updates<br /><span>24rth august 2006</span></h4>
	<p><span class="boldtext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. DonecSed fringilla ligula dolor, eleifend cursus,</span> tincidunt id, tempus id, elitau auguearcu. Nulla pede sapien, varius vitae, </p>
	<p class="bottompadding">Praesent quis ipsum. Ut dui tellus, dapibus vitae,vehicula vitae,aculis ante  congue vel, risus. <span class="magedacolortext">Aenean a pede.</span> Sed fringilla, quam ut facilisis consequat, elit augue suscipit tellus, at iaculis ante ante eget massa. Vestibulum facilisis. Quisque vel est. Donec ante velit,eleifend ucont cont, euismod et, rhoncus eget,sapien. Integer condimentum nunca culis ante  faucibus enim. Pellentesque habitant </p>
	
	<div id="rightmorenextPan">
      <p class="textposition">culis ante  faucibus enim.</p>
    <a href="#">more</a></div> 
  </div>
</div>
  
  
<div id="footermainPan">
  <div id="footerPan">
  	<?php 
             	$menu_footer = menu_navigation_links('menu-footer-menu');
             	print theme('links__menu_main_page', array('links' => $menu_footer));
            ?>
	<?php print render($page['footer_firstcolumn']); ?>

	<!--<div id="footerPanhtml"><a href="http://validator.w3.org/check?uri=referer" target="_blank">html</a></div>
    <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">css</a></div>
	<ul class="templateworld">
  	<li>Design By:</li>
	<li><a href="http://www.templateworld.com" target="_blank">Template World</a></li>
  </ul>-->
  </div>
</div>
