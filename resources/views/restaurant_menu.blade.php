<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>ShadyTreePub Cafe - Restaurant </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8" />
		<link type="image/x-icon" href="images/favicon.png" rel="icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<style>
		
		    .col-lg-12 {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                overflow-x: auto;
                overflow-y: hidden;
                white-space: nowrap;
                margin-bottom: 10px
            }
		
	        .col-lg-12 img {
                max-width: 100%;
                height: auto;
                display: inline-block;
            }
		</style>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-142494086-2');
		</script>
	    
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">
                <img src={{ asset('images/restaurant_menu/menu_1.jpg') }}/>
            </div>
            <div class="col-lg-12">
                <img src={{ asset('images/restaurant_menu/menu_2.jpg') }}/>
            </div>
        </div>
    </body>
</html>