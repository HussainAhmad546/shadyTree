<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShadyTreePub Cafe - Restaurant </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Shady Tree: Your go-to spot for pub grub and fast food. A must-visit restaurant with a chill vibe.">
    <meta name="keywords" content="Shady Tree, go-to spot, pub grub, fast food, must-visit restaurant,  chill vibe">
    <meta charset="utf-8" />
    <link type="image/x-icon" href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-142494086-2');
    </script>
</head>

<body>

    <div class="modal fade" tabindex="-1" id="popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">×</a>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('images/popup/popup.jpg')}}" alt="" class="img-responsive" style="width: 100%">
                </div>
            </div>
        </div>
    </div>

    <!-- Start preloader -->
    <div id="preloader">
        <label></label>
    </div>
    <!-- End preloader -->
    <header id="header">
        <div class="container">
            <div class="row m-0">
                <div class="col-xl-3 col-lg-2 col-md-4 col-3 p-0">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="/">
                            <img alt="pizzon" src="images/header-logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-8 col-9 p-0 text-right">
                    <div id="menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="level">
                                <a href="/" class="page-scroll">Home</a>
                            </li>
                            <li class="level">
                                <a href="{{route('menu')}}" class="page-scroll">Menu</a>
                            </li>
                            <li class="level">
                                <a href="{{route('photos')}}" class="page-scroll">Our Gallery</a>
                            </li>
                            <li class="level">
                                <a href="{{route('looking-back')}}" class="page-scroll">Looking Back</a>
                            </li>
                            <li class="level">
                                <a href="{{route('here-we-are')}}" class="page-scroll">Here We Are</a>
                            </li>
                            <li class="level">
                                <a href="{{route('about-us')}}" class="page-scroll">About Us</a>
                            </li>
                            <li class="level">
                                <a href="{{route('contact-us')}}" class="page-scroll">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" header-right-link">
                        <ul>
                            <li class="call-icon">
                                <a href="tel:+16045679305">
                                    <span class="fa fa-phone"
                                        style="color:#FC3222;margin-right:5px;position:relative;top:2px;font-size:20px"></span>
                                    <div class="link-text">604-567-9305</div>
                                </a>
                            </li>


                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                    type="button"><span></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <button type="button" class="" data-toggle="modal" data-target="#exampleModal"
        style="font-weight: 700;background: #FC3222;position: fixed;bottom: 30px;right: 30px;border: 1px solid #FC3222;color:white;z-index:5">
        Opening Hours
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: url(images/dialog-bg.jpg);">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="margin-left: 60px;color:white;">Hours</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-bottom: 50px;">
                    <div id="accordion">
                        <div class="card" style="border:none;background:inherit;">
                            <div class="card-header" id="headingOne"
                                style="width: 80%;border-bottom: 1px solid #DADCE0;margin:auto;padding:0.75rem 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne" style="color:#fff;">
                                        Opening Hours
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion" style="width:80%;margin:auto;color:#fff;">
                                <div class="card-body" style="border-bottom:1px solid white;">
                                    <ul>
                                        <li>Monday : <span>11:00 AM - 12:00 AM</span></li>
                                        <li>Tuesday : <span>11:00 AM - 12:00 AM</span></li>
                                        <li>Wednesday : <span>11:00 AM - 12:00 AM</span></li>
                                        <li>Thursday : <span>11:00 AM - 12:00 AM</span></li>
                                        <li>Friday : <span>11:00 AM - 2:00 AM</span></li>
                                        <li>Saturday : <span>10:00 AM - 2:00 AM</span></li>
                                        <li>Sunday : <span>10:00 AM - 12:00 AM</span></li>
                                        <li style="margin-top:15px;">We are open every day except Christmas Eve and
                                            Christmas Day.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border:none;background:inherit;">
                            <div class="card-header" id="headingTwo"
                                style="width: 80%;border-bottom: 1px solid #DADCE0;margin:auto;padding:0.75rem 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        style="color:#fff;">
                                        Happy Hours
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                                style="width:80%;margin:auto;color:#fff;">
                                <div class="card-body" style="border-bottom:1px solid white;">
                                    <ul>
                                        <li>Monday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Tuesday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Wednesday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Thursday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Friday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Saturday : <span>2:30 PM - 5:30 PM</span></li>
                                        <li>Sunday : <span>2:30 PM - 5:30 PM</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-scrolling">
        <a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>

    @yield('content')

    <footer class="footer">
        <div class="menu-top-bg">
            <img src="images/menu-bottom-bg.png" alt="meu-bg" style="margin-top:30px;">
        </div>
        <div class="container">
            <div class="footer">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="footer-logo">
                            <a href="/"><img src="images/footer-logo.png" alt="fooret-logo"></a>
                            <p class="footer-des">40456 Government Road Garibaldi Highlands (Squamish), B.C. V0N 1T0</p>
                            <ul>
                                <li>phone - <a href="tel:+16045679305">604-567-9305</a></li>
                                <li>email - <a href="mailto:info@shadytreepub.ca">info@shadytreepub.ca</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="opening-hours">
                            <h2>Opening Hours</h2>
                            <ul>
                                <li>Monday - Thursday : <span>11:00 AM - 12:00 AM</span></li>
                                <li>Friday : <span>11:00 AM - 2:00 AM</span></li>
                                <li>Saturday : <span>10:00 AM - 2:00 AM</span></li>
                                <li>Sunday : <span>10:00 AM - 12:00 AM</span></li>
                                <li>We are open every day except Christmas Eve and Christmas Day.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 footer-box">
                        <div class="useful-links">
                            <h2>useful links</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('menu')}}">Menu</a></li>
                                <li><a href="{{route('about-us')}}">About Us</a></li>
                                <li><a href="{{route('photos')}}">Our Gallery</a></li>
                                <li><a href="{{route('looking-back')}}">Looking Back</a></li>
                                <li><a href="{{route('here-we-are')}}">Here We Are</a></li>
                                <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
                        <p class="copy-text">© Shady Tree Pub All Rights Reserved. Website by <a
                                href="https://bmgroupinc.com/" target="_blank">BM Group</a></p>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 copyright-box">
                        <ul>
                            <li><a href="https://www.facebook.com/people/The-Shady-Tree-Pub/100054253971216/"
                                    target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/shadytree.seatosky/" target="_blank"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    setTimeout(function() {
        document.getElementById("happy-hours").style.display = "none";
    }, 15000);
     // JavaScript to open and navigate through the popup

	 const popup = document.getElementById("image-popup");
    const popupImage = document.getElementById("popup-image");
    const closePopup = document.getElementById("close-popup");
	const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');

	const galleryImages = document.querySelectorAll(".single-photo img");
	  // Function to open the popup with a specific image
	  function openPopup(imageSrc) {
        popupImage.src = imageSrc;
        popup.style.display = "block";
        document.body.style.overflow = "hidden"; // Prevent scrolling
    }
	 // Function to close the popup
	 function closeImagePopup() {
        popup.style.display = "none";
        document.body.style.overflow = "auto"; // Restore scrolling
    }
	 // Attach click event listeners to each gallery image
	 galleryImages.forEach((image) => {
        image.addEventListener("click", () => {
            openPopup(image.src);
        });
    });


function openPopup(index) {
    currentIndex = index;
    const imageSrc = galleryImages[index].src;
    popupImage.src = imageSrc;
    popup.style.display = 'block';
}

galleryImages.forEach((image, index) => {
    image.addEventListener('click', () => openPopup(index));
});

function closePopupHandler() {
    popup.style.display = 'none';
}

closePopup.addEventListener('click', closePopupHandler);

function navigate(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = galleryImages.length - 1;
    } else if (currentIndex >= galleryImages.length) {
        currentIndex = 0;
    }
    openPopup(currentIndex);
}

prevButton.addEventListener('click', () => navigate(-1));
nextButton.addEventListener('click', () => navigate(1));

    </script>
</body>

</html>