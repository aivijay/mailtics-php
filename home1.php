<!--
 Setting jquery tab handlers - vijay
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Leopard Dashboard</title>
	<script src="js/apple/jquery-1.2.6.min.js" type="text/javascript"></script>
	<script src="js/apple/jquery.ui.interaction.min.js" type="text/javascript"></script>
	<script src="js/apple/dashboard.js" type="text/javascript"></script> 
	<script src="js/apple/jquery.jqDock.min.js" type="text/javascript"></script>
	<style type="text/css">
		@import url(style.css);
	</style>
</head>
<body>
	<div id="wrapper">
	<ul id="desktopItems">
		<li id="macintoschHD">
			<span>Macintosch HD</span>
		</li>
	</ul>
	<div class="draggableWindow">
		<h1><span></span>Leopard Dashboard with jQuery</h1>
		<div class="content">
			<h2>jQuery is awesome!</h2>
			<p>jQuery is pretty cool. I mean, look at all this cool stuff it can do. A dock (<a href="http://www.wizzud.com/jqDock/">Sourced from Wizzud.com! Thanks!</a>), a dashboard, and draggable windows! Awesome! If you didn't get here via it, this is the demo of a tutorial from <a href="http://nettuts.com">Nettuts</a>.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<div class="draggableWindow" id="smaller">
		<h1><span></span>A smaller window</h1>
		<div class="content">
			<p>A small dialogue window styled in style.css</p>
		</div>
	</div>
		
		<div id="dashboardWrapper">
			<ul id="widgets">
				<li class="widget"><img src="js/apple/images/widgets/googlesearch.png" alt="" /></li>
				<li class="widget"><img src="js/apple/images/widgets/date.png" alt="" /></li>
				<li class="widget"><img src="js/apple/images/widgets/dictionary.png" alt="" /></li>
				<li class="widget stickyWidget"><textarea rows="10" cols="10">This is a text widget! You can make any type of widget you want, simply by adding the class 'widget' to an li element within the Dashboard unordered list. Don't stop there though, create custom looking widgets by adding another class (e.g. myClass) and styling that in style.css. Like this one!</textarea></li>
			</ul>
			<div id="addWidgets">
			<span id="openAddWidgets">Add/remove widgets</span>
			<div id="dashPanel">
				<ul>
					<li><img src="js/apple/images/widgets/thumbs/sticky.png" alt="" id="sticky" class="widgetThumb" /><span>Sticky</span></li>
					<li><img src="js/apple/images/widgets/thumbs/clock.png" alt="" id="clock" class="widgetThumb" /><span>Clock</span></li>
					<li><img src="js/apple/images/widgets/thumbs/weather.png" alt="" id="weather" class="widgetThumb" /><span>Weather</span></li>
				</ul>
			</div>
    </div>
		</div>
	</div>
	<ul id="dock">
		<li><img src="js/apple/images/finder.png" alt="Finder" title="finder" class="dockItem"/></li>
		<li><img src="js/apple/images/dashboard.png" alt="Dashboard" id="dashboardLaunch" title="Dashboard" class="dockItem"/></li>
	    <li><img src="js/apple/images/mail.png" alt="Mail" title="finder" class="dockItem" /></li>
	    <li><img src="js/apple/images/coda.png" alt="Coda" title="Coda" class="dockItem" /></li>
	</ul>
	<div class="stack">
	<img src="js/apple/images/stack.png" alt="stack"/>
		<ul id="stack1">
			<li><span>Acrobat</span><img src="js/apple/images/adobeAcrobat.png" alt="" /></li>
			<li><span>Aperture</span><img src="js/apple/images/aperture.png" alt="" /></li>
			<li><span>Photoshop</span><img src="js/apple/images/photoshop.png" alt="" /></li>
			<li><span>Safari</span><img src="js/apple/images/safari.png" alt="" /></li>
			<li><span>Finder</span><img src="js/apple/images/finder.png" alt="" /></li>
		</ul>
	</div>
</body>
</html>




