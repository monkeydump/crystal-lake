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
<!--    <script type="text/javascript" src="js/orderform04.js"></script>-->
    <!--    Put this here to get my Checkbox tally working??    -->
    <!--  http://www.mredkj.com/javascript/orderform.html  -->
    <script type="text/javascript">
    //<![CDATA[
/*    window.onload = setupScripts;
    function setupScripts()
    {
        var anOrder1 = new OrderForm();
		var anOrder2 = new OrderForm('a_');
		var anOrder3 = new OrderForm('b_', 2);
		var anOrder4 = new OrderForm('c_', -1, 2);
		var anOrder5 = new OrderForm('d_');
    }*/
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

        <?php

        // Define menu items in a PHP multidimensional array
        $menu = array();
        $menu['Appetisers'] = array(
            array(
                'numRef' => 01,
                'description' => "Barbecued Spare Ribs <em>(with sauce)</em>",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 02,
                'description' => "Hors D'oeuvres (For 2 Persons)",
                'costAmount' => "6.80",
            ),
            array(
                'numRef' => 03,
                'description' => "Barbecued Spare Ribs with Honey Sauce",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 04,
                'description' => "Peking Spare Ribs with Sauce",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 05,
                'description' => "Spare Ribs with Spice, Salt & Chilli",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 06,
                'description' => "Mashed Prawn with Sesame Seed on Toast",
                'costAmount' => "3.00",
            ),
            array(
                'numRef' => 07,
                'description' => "Chicken with Sesame Seed on Toast",
                'costAmount' => "2.90",
            ),
            array(
                'numRef' => 08,
                'description' => "Crispy Wan Ton in Sweet & Sour Sauce",
                'costAmount' => "3.20",
            ),
            array(
                'numRef' => 09,
                'description' => "Crispy Duck Spring Rolls",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 10,
                'description' => "Crispy Spring Rolls",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 11,
                'description' => "Vegetarian Spring Rolls",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 12,
                'description' => "Vegetarian Mini Spring Rolls <em>(8 Pieces)</em>",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 13,
                'description' => "House Spring Rolls",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 14,
                'description' => "Prawn Cutlet",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 15,
                'description' => "Prawn in Spice, Salt & Chilli",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 16,
                'description' => "Squid in Spice, Salt & Chilli",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 16.1,
                'description' => "Beef in Spice, Salt & Chilli",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 17,
                'description' => "Deep Fried Shanghai Dumplings ",
                'costAmount' => "3.30",
            ),
            array(
                'numRef' => 18,
                'description' => "Crispy Seaweed ",
                'costAmount' => "2.90",
            ),
            array(
                'numRef' => 19,
                'description' => "Smoked Shredded Chicken",
                'costAmount' => "4.00",
            ),
            array(
                'numRef' => 20,
                'description' => "Prawn Crackers",
                'costAmount' => "1.50",
            ),
            array(
                'numRef' => 21,
                'description' => "Crispy Noodles",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 22,
                'description' => "Deep Fried Chicken Wings Chef Special",
                'costAmount' => "2.80",
            ),
            array(
                'numRef' => 23,
                'description' => "Sweet & Sour Spare Ribs",
                'costAmount' => "4.70",
            ),
            array(
                'numRef' => 24,
                'description' => "Tempura Vegetables Bento",
                'costAmount' => "3.30",
            ),
            array(
                'numRef' => 25,
                'description' => "Tempura Prawns Bento",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 26,
                'description' => "Chicken in Breadcrumbs with Tonkatsu Sauce",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 27,
                'description' => "Pork in Breadcrumbs with Tonkatsu Sauce",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 28,
                'description' => "Vegetable Samoa",
                'costAmount' => "2.60",
            ),
        );
        $menu['Soup'] = array(
            array(
                'numRef' => 29,
                'description' => "Chicken & Sweet Corn Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 30,
                'description' => "Chicken & Noodle Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 31,
                'description' => "Chicken & Mushroom Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 32,
                'description' => "Peking Hot & Sour Soup",
                'costAmount' => "2.50",
            ),
            array(
                'numRef' => 33,
                'description' => "Thai Tom Yum Goong",
                'costAmount' => "2.50",
            ),
            array(
                'numRef' => 34,
                'description' => "Wan Ton Soup",
                'costAmount' => "2.50",
            ),
            array(
                'numRef' => 35,
                'description' => "Beef with Egg Flower Soup",
                'costAmount' => "2.90",
            ),
            array(
                'numRef' => 36,
                'description' => "Mixed Vegetable Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 37,
                'description' => "Sweet Corn Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 38,
                'description' => "Tomato with Egg Flower Soup",
                'costAmount' => "2.00",
            ),
            array(
                'numRef' => 39,
                'description' => "Crab Meat Sweet Corn Soup",
                'costAmount' => "2.50",
            ),
        );
        $menu['Rice'] = array(
            array(
                'numRef' => 40,
                'description' => "Chicken Fried Rice",
                'costAmount' => "3.40",
            ),
             array(
                'numRef' => 41,
                'description' => "Roast Pork Fried Rice",
                'costAmount' => "3.40",
            ),
              array(
                'numRef' => 42,
                'description' => "Beef Fried Rice",
                'costAmount' => "3.40",
            ),
               array(
                'numRef' => 43,
                'description' => "Shrimp Fried Rice",
                'costAmount' => "3.50",
            ),
                array(
                'numRef' => 44,
                'description' => "King Prawn Fried Rice",
                'costAmount' => "4.60",
            ),
                 array(
                'numRef' => 45,
                'description' => "Special Fried Rice",
                'costAmount' => "3.50",
            ),
                  array(
                'numRef' => 46,
                'description' => "Singapore Style Fried Rice",
                'costAmount' => "4.60",
            ),
                   array(
                'numRef' => 47,
                'description' => "House Special with Boiled Rice",
                'costAmount' => "4.50",
            ),
                    array(
                'numRef' => 48,
                'description' => "Crystal Fried Rice",
                'costAmount' => "3.30",
            ),
                     array(
                'numRef' => 49,
                'description' => "Mixed Vegetable Fried Rice",
                'costAmount' => "3.00",
            ),
                      array(
                'numRef' => 50,
                'description' => "Mushroom Fried Rice",
                'costAmount' => "3.00",
            ),
                       array(
                'numRef' => 51,
                'description' => "Egg Fried Rice",
                'costAmount' => "2.20",
            ),
                        array(
                'numRef' => 52,
                'description' => "Plain Boiled Rice",
                'costAmount' => "2.00",
            ),
                     array(
                'numRef' => 53,
                'description' => "Crispy Roast Pork & Green Bean Fried Rice",
                'costAmount' => "3.60",
            ),
        );
        $menu['Chow Mein'] = array(
            array(
                'numRef' => 54,
                'description' => "Chicken Chow Mein",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 55,
                'description' => "Roast Pork Chow Mein",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 56,
                'description' => "Beef Chow Mein",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 57,
                'description' => "Shrimp Chow Mein",
                'costAmount' => "3.70",
            ),
            array(
                'numRef' => 58,
                'description' => "King Prawn Chow Mein",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 59,
                'description' => "Special Chow Mein",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 60,
                'description' => "Singapore Vermicelli",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 61,
                'description' => "Special Vermicelli",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 62,
                'description' => "House Special Chow Mein - Crispy Noodle",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 63,
                'description' => "Mixed Vegetables Chow Mein",
                'costAmount' => "3.30",
            ),
            array(
                'numRef' => 64,
                'description' => "Mushroom Chow Mein",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 65,
                'description' => "Monk's Vegetables Chown Mein",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 66,
                'description' => "Fried Ho Fun with Beef",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 67,
                'description' => "Plain Chow Mein <em>(Large)</em>",
                'costAmount' => "2.80",
            ),
            array(
                'numRef' => 68,
                'description' => "Fried Chicken in Crispy Noodles",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 69,
                'description' => "Kam Heong Udon Noodles",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 70,
                'description' => "Fried Ho Fun with Green Peppers in Black Bean Sauce",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 71,
                'description' => "Fried Ho Fun with Seafood",
                'costAmount' => "4.80",
            ),
        );
        $menu['Chop Suey'] = array(
            array(
                'numRef' => 72,
                'description' => "Chicken Chop Suey",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 73,
                'description' => "Beef Chop Suey",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 74,
                'description' => "Shrimp Chop Suey",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 75,
                'description' => "King Prawn Chop Suey",
                'costAmount' => "4.50",
            ),
            array(
                'numRef' => 76,
                'description' => "Special Chop Suey",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 77,
                'description' => "Mushroom Chop Suey",
                'costAmount' => "3.00",
            ),
        );
        $menu['Omelette / Foo Yung'] = array(
            array(
                'numRef' => 78,
                'description' => "Chicken Omelette / Foo Yung",
                'costAmount' => "3.50",
            ),
            array(
                'numRef' => 79,
                'description' => "Shrimp Omelette / Foo Yung",
                'costAmount' => "3.50",
            ),
            array(
                'numRef' => 80,
                'description' => "King Prawn Omelette / Foo Yung",
                'costAmount' => "4.60",
            ),
            array(
                'numRef' => 81,
                'description' => "Special Omelette / Foo Yung",
                'costAmount' => "3.60",
            ),
            array(
                'numRef' => 82,
                'description' => "Mushroom Omelette / Foo Yung",
                'costAmount' => "3.30",
            ),
            array(
                'numRef' => 83,
                'description' => "Plain Omelette / Foo Yung",
                'costAmount' => "2.80",
            ),
            array(
                'numRef' => 84,
                'description' => "Cheese Omelette / Foo Yung",
                'costAmount' => "3.00",
            ),
        );
        $menu['Chicken Dishes'] = array(
            array(
                'numRef' => 85,
                'description' => "Chicken with Green Pepper in Black Bean Sauce",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 86,
                'description' => "Chicken with White Mushrooms",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 87,
                'description' => "Chicken with Mixed Vegetables",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 88,
                'description' => "Chicken with Beansprouts",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 89,
                'description' => "Chicken with Ginger & Spring Onions",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 90,
                'description' => "Chicken in Oyster Sauce",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 91,
                'description' => "Chicken in Lemon Sauce",
                'costAmount' => "3.80",
            ),
            array(
                'numRef' => 92,
                'description' => "Pan Fried Chicken with Garlic & Spring Onion",
                'costAmount' => "3.90",
            ),
            array(
                'numRef' => 93,
                'description' => "Chicken with Bamboo Shoots & Cashew Nuts",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 94,
                'description' => "Chicken with Chinese Mushrooms & Bamboo Shoots",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 95,
                'description' => "Chicken with Ginger & Pineapple",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 96,
                'description' => "Crystal Fried Chicken",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 97,
                'description' => "Kung Po Chicken",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 98,
                'description' => "Szechuan Chicken",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 99,
                'description' => "Chicken with Cashew Nuts in Yellow Bean Sauce",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 100,
                'description' => "Chicken in Sea Spicy Sauce",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 101,
                'description' => "Chicken with Mixed Nuts in Special Sauce",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 102,
                'description' => "Fried Chicken with Black Vinegar & Sesame",
                'costAmount' => "4.20",
            ),
            array(
                'numRef' => 103,
                'description' => "Nonya Spicy Roast Chicken",
                'costAmount' => "4.20",
            ),
        );
        
        
        // Include the aside template which uses the $menu array variable
        include __DIR__.'/templates/aside.php';

        // Include the article template which also uses the $menu array which in turn calls the foodItems and foodItem templates
        include __DIR__.'/templates/article.php';

        ?>

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

    <script type="text/javascript">
        $(function() {

            // jQuery on click binding when anything with the "selectable" class is clicked
            $('.selectable').on('click', function() {
                $tr = $(this).parent();
                $quantity = $tr.find('select');
                if ($quantity.val() == 0 || $quantity.val() == undefined) {
                    $quantity.val(1);
                    updateSelectedState($tr, $quantity.val());
                }
            })

            // jQuery on change binding when a food item quantity is changed
            $('.foodItem .quantity select').on('change', function() {
                $tr = $(this).parent().parent();
                updateSelectedState($tr, $(this).val());
            });

        });

        // Simple function to add and remove the "selected" class if an item is selected or not
        function updateSelectedState($tr, quantity) {
            if (quantity > 0) {
                $tr.addClass('selected');
            } else {
                $tr.removeClass('selected');
            }
        }

    </script>

    <style>
        .selected {
            background: green;
        }
    </style>

  </body>
</html>
