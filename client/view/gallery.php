<?php include_once 'view/layout/header.php'?>

<!-- Header Start -->
    <header class="page-banner-area gallery-page-banner">
        <div class="section-overlay d-flex">
            <div class="container">
                <div class="header-caption text-left">
                    <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                        data-wow-delay=".5s">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <li class="breadcrumb-item text-capitalize"><a href="?ctr=home">Home</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Masonry Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!--Our Gallery Area Start-->
    <section class="our-gallery-area">
        <div class="container">

            <!--Our Gallery Button Start-->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="gallery-filter-btn btn-group-toggle justify-content-center d-flex"
                        data-toggle="buttons">
                        <label class="btn btn-sm position-relative active wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="fitness" />Fitness
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="strength" />Strength Training
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="gym" />Gym
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="running" />Running
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s"
                            data-wow-delay=".25s">
                            <input type="radio" name="shuffle-filter" value="weight" />Weight Lose
                        </label>
                    </div>
                </div>
            </div>
            <!--Our Gallery Button End-->

            <!--Our Gallery image Start-->
            <div class="row shuffle-wrapper">
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn"
                    data-groups="[&quot;fitness&quot;,&quot;strength&quot;]" data-wow-duration="0.5s"
                    data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/1.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn" data-groups="[&quot;gym&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/2.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/2.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn" data-groups="[&quot;running&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/3.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn"
                    data-groups="[&quot;weight&quot;,&quot;gym&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/4.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/4.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn" data-groups="[&quot;fitness&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/5.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/5.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn" data-groups="[&quot;strength&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/7.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/7.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn"
                    data-groups="[&quot;gym&quot;,&quot;fitness&quot;,&quot;running&quot;]" data-wow-duration="0.5s"
                    data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/8.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/8.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn" data-groups="[&quot;strength&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/9.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="view/assets/img/gallery-img/7.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn"
                    data-groups="[&quot;gym&quot;,&quot;fitness&quot;,&quot;running&quot;]" data-wow-duration="0.5s"
                    data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="view/assets/img/gallery-img/6.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox" data-gall="myGallery"
                                    href="view/assets/img/gallery-img/gallery-large-img/6.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Our Gallery image End-->
        </div>
    </section>
    <!--Our Gallery Area End-->

    <!-- Footer Start -->

    <!-- Shuffle js filter and masonry Start -->
    <script>

        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;

        var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
            itemSelector: '.shuffle-item',
            buffer: 1
        });

        jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
            var input = evt.currentTarget;
            if (input.checked) {
                myShuffle.filter(input.value);
            }
        });

    </script>
    <!-- Shuffle js filter and masonry Start -->

<?php include_once 'view/layout/footer.php'?>
