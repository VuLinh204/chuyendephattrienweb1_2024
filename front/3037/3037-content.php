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
        <section class="type-3037">
            <div class="container">
                <div class="row">
                    <!-- Contact Info -->
                    <!-- Contact Info -->
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2 class="title">Contact Details</h2>

                            <!-- Accordion với checkbox làm trigger -->
                            <div class="accordion">
                                <!-- Corporate Office Accordion -->
                                <div class="accordion-item">
                                    <input type="checkbox" id="accordion1" class="accordion-checkbox">
                                    <label for="accordion1" class="accordion-btn">
                                        <h5>Corporate Office</h5>
                                    </label>
                                    <div class="accordion-content">
                                        <ul class="contact-info-list">
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-home"></i></span>
                                                <h5>32, Breaking Street,<br> <span class="dsc">2nd cross, New York, USA 10002</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-phone"></i></span>
                                                <h5>Call Us <br> <span class="dsc">+321 4567 89 012 & 79 023</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-envelope"></i></span>
                                                <h5>Mail Us <br> <span class="dsc">Support@Repairplus.com</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-clock-o"></i></span>
                                                <h5>Opening Time <br> <span class="dsc">Mon - Sat: 09.00am to 18.00pm</span></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Regional Office Accordion -->
                                <div class="accordion-item">
                                    <input type="checkbox" id="accordion2" class="accordion-checkbox">
                                    <label for="accordion2" class="accordion-btn">
                                        <h5>Regional Office</h5>
                                    </label>
                                    <div class="accordion-content">
                                        <ul class="contact-info-list">
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-home"></i></span>
                                                <h5>32, Breaking Street,<br> <span class="dsc">2nd cross, New York, USA 10002</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-phone"></i></span>
                                                <h5>Call Us <br> <span class="dsc">+321 4567 89 012 & 79 023</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-envelope"></i></span>
                                                <h5>Mail Us <br> <span class="dsc">Support@Repairplus.com</span></h5>
                                            </li>
                                            <li>
                                                <span class="icon-holder"><i class="fa fa-clock-o"></i></span>
                                                <h5>Opening Time <br> <span class="dsc">Mon - Sat: 09.00am to 18.00pm</span></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-md-8">
                        <div class="contact-form">
                            <h2 class="title">Contact Form</h2>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Your Mail*" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="message" class="form-control" placeholder="Your Message.." rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="SEND MESSAGE" class="submit-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>