<?php include_once 'view/layout/header.php'?>
    <!-- Menu Area End -->

    <!-- Header Start -->
    <header class="page-banner-area contact-page-banner">
        <div class="section-overlay d-flex">
            <div class="container">
                <div class="header-caption text-left">
                    <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                        data-wow-delay=".5s">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <li class="breadcrumb-item text-capitalize"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- Map Area Start -->
    <section class="map-area">
        <!--    Map Part Start-->
        <div class="google-map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663571253!2d89.56355961535161!3d22.813715829825558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd%20IT!5e0!3m2!1sen!2sbd!4v1571960441758!5m2!1sen!2sbd"
                height="500" style="border:0;" allowfullscreen=""></iframe></div>
        <div class="container">
            <div class="contact-part">
<!--                noti-->
<!--                <div class="alert alert-warning alert-dismissible fade show" role="alert">-->
<!--                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.-->
<!--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--                        <span aria-hidden="true">&times;</span>-->
<!--                    </button>-->
<!--                </div>-->

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-wraper">
                            <div class="contact-heading">
                                <h2>Do You Have Any Questions?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta.
                                    Cras in vulputate est consectetur adipiscing elit. Ut vehicula volutpat porta.</p>
                            </div>
                            <div class="contact-form-area">

                                <form action="?ctr=contact_submit" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name:"
                                                    id="name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email:"
                                                    id="user-email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group nessage-text">
                                                <textarea name="message" rows="3" class="form-control"
                                                    placeholder="Enter Your Message:" id="message" required></textarea>
                                            </div>
                                            <div class="contact-sub-btn">
                                                <button type="submit"
                                                    class="btn btn-effect section-button text-uppercase" name="btn_contact">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="address-cover-main">
                            <div class="address-box">
                                <h6>Address</h6>
                                <p>2025 M Street, Northwest,
                                    Washington, DC</p>
                            </div>
                            <div class="address-box">
                                <h6>Phone</h6>
                                <p><a href="tel:1242486444">+124 (2486) 444</a></p>
                                <p><a href="tel:1334444878">+133 (4444) 878</a></p>
                            </div>
                            <div class="address-box">
                                <h6>Mail</h6>
                                <p><a href="mailto:mail@example.com">mail@example.com</a></p>
                            </div>
                            <div class="address-box">
                                <h6>Follow Us</h6>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->

    <!-- Footer Start -->
<?php include_once 'view/layout/footer.php'?>