    <?php
    $url_host = $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div class="type-3021">
            <section class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="row-ct col-lg-6 col-md-5 col-sm-12 col-xs-12">
                            <div class="welcome">
                                <p>Welcome to Repairplus Experts, Theme for Repair Shops</p>
                            </div>
                        </div>
                        <div class="row-ct col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="top-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <header class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo-container">
                            <div class="logo text-center"><a href="#">
                                    <picture title="Awesome Logo">
                                        <source type="image/webp">
                                        <img src="http://tk.commonsupport.com/repairplus/wp-content/themes/repairplus/images/resources/logo.png" alt="Awesome Logo">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <div class="icon-holder"> <i class="fa fa-home"></i></div>
                                        <div class="text-holder">
                                            <h5>321, Breaking Street</h5>
                                            <h6>Newyork ,USA 10002</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder"> <i class="fa fa-clock-o"></i></div>
                                        <div class="text-holder">
                                            <h5>Opening Time</h5>
                                            <h6>Mon - Sat: 09.00 to 18.00</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder"> <i class="fa fa-envelope"></i></div>
                                        <div class="text-holder">
                                            <h5>Mail Us</h5>
                                            <h6>Supportyou@Repairplus.com</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <nav class="main-menu">
                                <ul class="navigation">
                                    <li class="menu-item active"><a href="#">HOME</a></li>
                                    <li class="menu-item">
                                        <a href="#">SERVICES</a>
                                        <ul class="submenu">
                                            <li><a href="#">Smartphone Repair</a></li>
                                            <li><a href="#">Tablet &amp; iPad Repair</a></li>
                                            <li><a href="#">Desktop &amp; Mac Repair</a></li>
                                            <li><a href="#">Game Console Repair</a></li>
                                            <li><a href="#">LCD &amp; LED TV Repair</a></li>
                                            <li><a href="#">MP3 &amp; MP4 Player Repair</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">PAGES</a>
                                        <ul class="submenu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Meet Our Team</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                            <li><a href="#">Pricing Plans</a></li>
                                            <li><a href="#">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">SHOP</a>
                                        <ul class="submenu">
                                            <li><a href="#">Shop Products</a></li>
                                            <li><a href="#">Single Product</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">BLOG</a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog Default</a></li>
                                            <li><a href="#">Blog Single</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item" style="border-right: 1px solid #999;"><a href="#">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="customer-care pull-left">
                                <div class="phone-icon"> <i class="fa fa-mobile"></i></div>
                                <div class="title-holder">
                                    <h5>Customer Care</h5>
                                    <h4>1800-56-78-9012</h4>
                                </div>
                            </div>
                            <div class="top-search-box pull-right">
                                <ul class="search-box">
                                    <li style="list-style: none;">
                                        <form action="#" method="get">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

    </html>