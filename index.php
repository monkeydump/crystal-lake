<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Crystal Lake - Chinese Hot Meals To Take Away</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta property="og:title" content="">

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="js/orderform04.js"></script>
    <!--    Put this here to get my Checkbox tally working??    -->
    <!--  http://www.mredkj.com/javascript/orderform.html  -->
    <script type="text/javascript">
    //<![CDATA[
    window.onload = setupScripts;
    function setupScripts()
    {
        var anOrder1 = new OrderForm();
		var anOrder2 = new OrderForm('a_');
		var anOrder3 = new OrderForm('b_', 2);
		var anOrder4 = new OrderForm('c_', -1, 2);
		var anOrder5 = new OrderForm('d_');
    }
    //]]>
    </script>
    <style type="text/css">
.chkbox {
	clear: left;
	float: left;
}
.desc {
	float: left;
	width: 9em;
	padding-left: 1em;
}
.price {
	float: left;
	width: 4em;
	padding-right: 1em;
	text-align: right;
}
.selbox {
	clear: right;
}
.total {
	clear: left;
}


</style>
</head>

<body>
	<div class="row">
		<!--<div class="twelve columns" id="background">-->
			<img class="img" src=/img/backdrop/lakeCropped.jpg alt="">
		<!--</div>-->
	</div>
    <section>
		
        <aside>
			<nav id="sidebar-nav-holder" class="vertical-nav" gumby-fixed="top" gumby-pin="[data-target='icons']">
            <ul id="sidebar-nav">
              
                <li class="active">
                  <!--<a href="#appetisers" class="skip" gumby-update gumby-duration="600" gumby-goto="[data-target='appetisers']">Appetisers</a>-->
				  <!--<p class="skiplink small primary"><a href="#" gumby-goto="[data-target='appetisers']">Appetisers</a></p>-->
				  <a href="#appetisers" class="toggle skip" gumby-trigger=".selector | .another" gumby-on="mouseover mouseout">Appetisers</a>
                </li>
                
                <li>
                  <a href="#soup" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='soup']">Soup</a>
				  <!--<p class="skip"><a href="#soup" gumby-goto="[data-target='soup']">Soup</a></p>-->
				  <!--<a href="#soup" class="skip" gumby-trigger=".selector | .another" gumby-on="mouseover mouseout">Soup</a>-->
                </li>
                
                <li>
                  <a href="#rice" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='rice']">Rice Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='rice']">Rice Dishes</a></p>-->
                </li>
                
                <li>
                  <a href="#chowMein" class="skip" gumby-update gumby-duration="600" gumby-goto="[data-target='chowMein']">Chow Mein Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='chowMein']">Chow Mein Dishes</a></p>-->
                </li>
                
                <li>
                  <a href="#chopSuey" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='chopSuey']">Chop Suey Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Chop Suey Dishes</a></p>-->
                </li>
                
                <li>
                  <a href="#omelette" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='omelette']">Omelette / Foo Yung</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Omelette / Foo Yung</a></p>-->
                </li>
                
                <li>
                  <a href="#chicken" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='chicken']">Chicken Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Chicken Dishes</a></p>-->
                </li>
                
                <li>
                  <a href="#beef" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='beef']">Beef Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='beef']">Beef Dishes</a></p>-->
                </li>
                
                <li>
                  <a href="#seafood" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='seafood']">Prawn & Seafood</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Prawn & Seafood</a></p>-->
                </li>
				
				<li>
                  <a href="#duck" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='duck']">Duck Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='duck']">Duck Dishes</a></p>-->
                </li>
				
				<li>
                  <a href="#pork" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='pork']">Pork Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='pork']">Pork Dishes</a></p>-->
                </li>
				
				<li>
                  <a href="#sweetSour" class="skip" gumby-update gumby-duration="600" gumby-goto="[data-target='sweetSour']">Sweet & Sour</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Sweet & Sour</a></p>-->
                </li>
				
				<li>
                  <a href="#curry" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='curry']">Curry Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='curry']">Curry Dishes</a></p>-->
                </li>
				
				<li>
                  <a href="#thai" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='thai']">Thai Curry</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Thai Curry</a></p>-->
                </li>
				
				<li>
                  <a href="#satay" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='satay']">Satay Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']"></a></p>-->
                </li>
				
				<li>
                  <a href="#vegetable" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='vegetable']">Vegetable Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']"></a></p>-->
                </li>
				
				<li>
	              <a href="#english" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='english']">English Dishes</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Vegetable Dishes</a></p>-->
                </li>
				
				<li>
                  <a href="#extra" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='extra']">Extra</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Extra</a></p>-->
                </li>
				
				<li>
                  <a href="#desserts" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='desserts']">Desserts</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Desserts</a></p>-->
                </li>
				
				<li>
                  <a href="#setDinners" class="toggle skip" gumby-update gumby-duration="600" gumby-goto="[data-target='setDinners']">Set Dinners</a>
				  <!--<p class="skip"><a href="#" gumby-goto="[data-target='']">Set Dinners</a></p>-->
                </li>
            </ul>
          </nav>
		</aside>
        <article>
        
	    <?php include 'includes/menu/appetisers.php' ; ?>

        <?php include 'includes/menu/soup.php' ; ?>
        
        <?php include 'includes/menu/rice.php' ; ?>
        
        <?php include 'includes/menu/chowMein.php' ; ?>
        
        <?php include 'includes/menu/chopSuey.php' ; ?>
        
        <?php include 'includes/menu/omelette.php' ; ?>
        
        <?php include 'includes/menu/chicken.php' ; ?>
        
        <?php include 'includes/menu/beef.php' ; ?>
        
        <?php include 'includes/menu/seafood.php' ; ?>
        
        <?php include 'includes/menu/duck.php' ; ?>
        
        <?php include 'includes/menu/pork.php' ; ?>
        
        <?php include 'includes/menu/sweetSour.php' ; ?>
        
        <?php include 'includes/menu/curry.php' ; ?>
        
        <?php include 'includes/menu/thai.php' ; ?>
        
        <?php include 'includes/menu/satay.php' ; ?>
        
        <?php include 'includes/menu/vegetable.php' ; ?>
        
        <?php include 'includes/menu/english.php' ; ?>
        
        <?php include 'includes/menu/extra.php' ; ?>
        
        <?php include 'includes/menu/desserts.php' ; ?>
        
        <?php include 'includes/menu/setDinner.php' ; ?>
        
        <?php include 'includes/menu/test.php' ; ?>
            </article>
    </section>

      

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="bower_components/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="bower_components/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

    
	
	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.-->

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script> 

	<script src="bower_components/gumby/js/plugins.js"></script>
	<script src="bower_components/gumby/js/main.js"></script>

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

  </body>
</html>
