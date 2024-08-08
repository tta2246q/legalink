<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="wedsite icon" type="jpg"
        href="https://th.bing.com/th?q=%e1%ba%a2nh+M%c3%a8o+Cute&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=VN&setlang=vi&adlt=moderate&t=1&mw=247">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>

<body class="body">
    <header>
        <div class="col-12 head-contact-info">
            <div class="row">
                <div class="col-6 ">
                    <a class="icon" href=""><i class="fa-brands fa-facebook"></i></a>
                    <a class="icon" href=""><i class="fa-brands fa-linkedin"></i></a>
                    <a class="icon" href=""><i class="fa-brands fa-pinterest"></i></a>
                    <a class="icon" href=""><i class="fa-brands fa-twitter"></i> </a>
                    <a class="icon" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col-6 ">
                    <div class="row contact-info">
                        <p><i class="fa-solid fa-phone"></i> +1-2345-2345-54</p>
                        <a class="link-email" href=""><i class="fa-regular fa-envelope-open"></i>
                            contact@Atornasite.co</a>
                    </div>
                </div>
            </div>

        </div>
        <hr class="hr-head" />
        <div class="fixed-header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="\assets\wp-content\uploads\sites\6\images\logo-attorna.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                HOME
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">Homepage 1</a>
                                <a class="dropdown-item" href="#">Homepage 2</a>
                                <a class="dropdown-item" href="#">Homepage 3</a>
                                <a class="dropdown-item" href="#">Homepage 4</a>
                                <a class="dropdown-item" href="#">Homepage 5</a>
                                <a class="dropdown-item" href="#">Homepage 6</a>
                                <a class="dropdown-item" href="#">Homepage 7</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PAGES
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">About Us</a>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Sub Dropdown
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="#">Single Attorney</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Contatc
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Contact</a>
                                        <a class="dropdown-item" href="#">Contact 2</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Features
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <div class="dropdown-item dropdown drop-down4">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                id="navbarDropdown3" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Set 1
                                            </a>
                                            <div class="dropdown-menu sub-menu4" aria-labelledby="navbarDropdown3">
                                                <a class="dropdown-item" href="#">Accordions & Toggles</a>
                                                <a class="dropdown-item" href="#">Alert Box</a>
                                                <a class="dropdown-item" href="#">Blockquotes</a>
                                                <a class="dropdown-item" href="#">Buttons</a>
                                                <a class="dropdown-item" href="#">Call To Action</a>
                                                <a class="dropdown-item" href="#">Column Services</a>
                                                <a class="dropdown-item" href="#">Columns</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item dropdown drop-down4">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                id="navbarDropdown3" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Set 2
                                            </a>
                                            <div class="dropdown-menu sub-menu4" aria-labelledby="navbarDropdown3">
                                                <a class="dropdown-item" href="#">Counters</a>
                                                <a class="dropdown-item" href="#">Count Down</a>
                                                <a class="dropdown-item" href="#">Dividers</a>
                                                <a class="dropdown-item" href="#">Dropcaps</a>
                                                <a class="dropdown-item" href="#">Featured Boxes</a>
                                                <a class="dropdown-item" href="#">Flip Boxes</a>
                                                <a class="dropdown-item" href="#">Icon Lists</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item dropdown drop-down4">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                id="navbarDropdown3" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Set 3
                                            </a>
                                            <div class="dropdown-menu sub-menu4" aria-labelledby="navbarDropdown3">
                                                <a class="dropdown-item" href="#">Icon</a>
                                                <a class="dropdown-item" href="#">Images</a>
                                                <a class="dropdown-item" href="#">Price Table</a>
                                                <a class="dropdown-item" href="#">Promo Boxes</a>
                                                <a class="dropdown-item" href="#">Skill Bar</a>
                                                <a class="dropdown-item" href="#">Skill Circle</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item dropdown drop-down4">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                id="navbarDropdown3" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Set 4
                                            </a>
                                            <div class="dropdown-menu sub-menu4" aria-labelledby="navbarDropdown3">
                                                <a class="dropdown-item" href="#">Social Shares</a>
                                                <a class="dropdown-item" href="#">Stunning Texts</a>
                                                <a class="dropdown-item" href="#">Tabs Horizontal</a>
                                                <a class="dropdown-item" href="#">Tabs Vertical</a>
                                                <a class="dropdown-item" href="#">Testimonial</a>
                                                <a class="dropdown-item" href="#">Titles</a>
                                                <a class="dropdown-item" href="#">Typography</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Team
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Team/ Plain Style</a>
                                        <a class="dropdown-item" href="#">Team/ Thumbnail Style</a>
                                        <a class="dropdown-item" href="#">Team/ Frame Style</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="">Gllery</a>
                                <a class="dropdown-item" href="#">Price Table</a>
                                <a class="dropdown-item" href="#">Maintenance</a>
                                <a class="dropdown-item" href="#">Coming Soon</a>
                                <a class="dropdown-item" href="#">404 Page</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PRACTICE AREAS
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">Corporate & Securities</a>
                                <a class="dropdown-item" href="#">E-commerce Law</a>
                                <a class="dropdown-item" href="#">Insurancev Law</a>
                                <a class="dropdown-item" href="#">Tax Law</a>
                                <a class="dropdown-item" href="#">Healthcare Law</a>
                                <a class="dropdown-item" href="#">Real Estate Law</a>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Layouts
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Practice Areas 1</a>
                                        <a class="dropdown-item" href="#">Practice Areas 2</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CASE STUDY
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Portfolio Grid
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Portfolio 2 Columns</a>
                                        <a class="dropdown-item" href="#">Portfolio 3 Columns</a>
                                        <a class="dropdown-item" href="#">Portfolio 4 Columns</a>
                                        <a class="dropdown-item" href="#">Portfolio 2 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Portfolio 3 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Portfolio 4 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Portfolio 2 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Portfolio 3 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Portfolio 4 Columns No Space</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Portfolio Modern
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Modern 2 Columns</a>
                                        <a class="dropdown-item" href="#">Modern 3 Columns</a>
                                        <a class="dropdown-item" href="#">Modern 4 Columns</a>
                                        <a class="dropdown-item" href="#">Modern 2 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Modern 3 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Modern 4 Columns No Space</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Portfolio Side Thumbnail
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Portfolio Left & Right Large
                                            Thumbnail</a>
                                        <a class="dropdown-item" href="#">Portfolio Left Large Thumbnail</a>
                                        <a class="dropdown-item" href="#">Portfolio Right Large Thumbnail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BLOG
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Blog Fuli
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Blog Full Right Sidebar With Rrame</a>
                                        <a class="dropdown-item" href="#">Blog Full Left Sidebar With Rrame</a>
                                        <a class="dropdown-item" href="#">Blog Full Both Sidebar With Rrame</a>
                                        <a class="dropdown-item" href="#">Blog Full Right Sidebar</a>
                                        <a class="dropdown-item" href="#">Blog Full Left Sidebar</a>
                                        <a class="dropdown-item" href="#">Blog Full Both Sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Blog Grid
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Blog Grid 2 Columns</a>
                                        <a class="dropdown-item" href="#">Blog Grid 3 Columns</a>
                                        <a class="dropdown-item" href="#">Blog Grid 4 Columns</a>
                                        <a class="dropdown-item" href="#">Blog Grid 2 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Blog Grid 3 Columns No Space</a>
                                        <a class="dropdown-item" href="#">Blog Grid 4 Columns No Space</a>
                                    </div>
                                </div>
                                <div class="dropdown-item dropdown drop-down3">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Blog Columns
                                    </a>
                                    <div class="dropdown-menu sub-menu3" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Blog 2 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Blog 3 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Blog 4 Columns With Frame</a>
                                        <a class="dropdown-item" href="#">Blog 2 Columns</a>
                                        <a class="dropdown-item" href="#">Blog 3 Columns</a>
                                        <a class="dropdown-item" href="#">Blog 4 Columns</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown drop-down2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SHOP
                            </a>
                            <div class="dropdown-menu sub-menu2" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">Woocommerce Page Item</a>
                                <a class="dropdown-item" href="#">Shop</a>
                                <a class="dropdown-item" href="#">My Account</a>
                                <a class="dropdown-item" href="#">Checkout</a>
                                <a class="dropdown-item" href="#">Cart</a>
                            </div>
                        </li>
                    </ul>
                    <button class="free-consulation"><a class="nav-link" href="">FREE
                            CONSULATTION</a></button>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="col-12 end pb-5">
            <div class="container-xl">
                <div class="row pt-5">
                    <div class="col-2">
                        <img class="logo-attorna" src="\assets\wp-content\uploads\sites\6\images\logo-attorna.png"
                            alt="logo">
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="row-2">
                            <h4>Contact Info</h4>
                        </div>
                        <div class="row-xl-9 col-12">
                            <p><i class="fa-solid fa-phone" style="color: #ecd689;"></i> (1)23456789</p>
                            <p><i class="fa-regular fa-envelope-open" style="color: #ecd689"></i>
                                contact@Attornafirm.co</p>
                            <p><i class="fa-regular fa-clock" style="color: #ecd689"></i> Mon-Fri 9.00-18.00</p>
                            <p><i class="fa-solid fa-map-pin" style="color: #ecd689"></i> 12th Wall Street NY CV564
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="row-2">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row-10">
                            <a class="useful-link" href="">Practice Areas</a><br>
                            <a class="useful-link" href="">Privacy & Policy</a><br>
                            <a class="useful-link" href="">Our Story</a><br>
                            <a class="useful-link" href="">Be Our Partner </a> <br>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="row-2">
                            <h4>Newsletter</h4>
                        </div>
                        <div class="row-5">
                            <p>subicribe to our Newsletter</p>
                        </div>
                        <div class="row-5 newletter">
                            <input type="text" placeholder="Enter your message..." class="text-box">
                            <button class="send-button"><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="/js/owl.carousel.js"></script>

        <script src="/js/style.js" defer></script>

    </footer>
</body>

</html>
