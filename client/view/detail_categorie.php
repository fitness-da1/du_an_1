<?php include_once 'view/layout/header.php'?>
<header class="page-banner-area trainers-page-banner">
    <div class="section-overlay d-flex">
        <div class="container">
            <div class="header-caption text-left">
                <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                    data-wow-delay=".5s">Our Categorie</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <li class="breadcrumb-item text-capitalize"><a href="?ctr=home">Home</a></li>
                        <li class="breadcrumb-item text-capitalize"><a href="?ctr=categorie">Categorie</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page"><?=$detail_categorie->categories_name?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>
        <section class="section section-service-detail-info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 content-text m-b-md-5 wow fadeInLeft">
                        <div class="feature-title"
                             style="background-image: url(view/themes/citigym/images/services/sports-couple-doing-battle-ropes-cross-fitness-3PJLG75.jpg)">
<!--                            Stretching-->
                            <?=$detail_categorie->categories_name?>
                        </div>
<!--                        <p>Strectching - Phương pháp căng cơ trị liệu sử dụng dụng cụ chuyên biệt như ống lăn, foam-->
<!--                            roller, trigger point, máy xung điện..., giúp duỗi dài và mở rộng toàn bộ cơ thể,-->
<!--                            giúp duy trì một cơ thể dẻo dai, khỏe mạnh, tăng phạm vi chuyển động và độ linh-->
<!--                            hoạt của cơ khớp.</p>-->
                        <p><?=$detail_categorie->categories_meaningful?></p>
                    </div>
                    <div class="col-lg-6 content-bg stripe-section wow fadeInRight">
                        <div class="stripe-vector-1"><img alt="Hình đăng ký tham quan CLB"
                                                          src="view/themes/citigym/images/svg/stripe-section-left-grey.svg">
                        </div>
                        <div class="stripe-vector-2"><img alt="Hình đăng ký tham quan CLB"
                                                          src="view/themes/citigym/images/svg/stripe-section-right-grey.svg">
                        </div>
                        <img alt="" src="view/themes/citigym/images/features/af1i9380-removebg.png"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-service-detail-feature wow fadeInRight">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title"><?=$detail_categorie->categories_name?></h2>
                </div>
                <div class="row introduce_service">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="item-img">
                                <img src="view/themes/citigym/images/features/feature-2.jpg"
                                     alt="Hình đăng ký tham quan CLB" class="content"/>
                            </div>
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon" >
                                        <i class="fa-regular fa-clock"></i>
                                    </div>
                                    <div class="title">Thời lượng</div>
                                    <b class="h2">10 phút</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="item-img">
                                <img alt="Hình đăng ký tham quan CLB"
                                     src="view/themes/citigym/images/features/feature-1.jpg" class="content"/>
                            </div>
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-burning"></i>
                                    </div>
                                    <div class="title">Calories</div>
                                    <b class="h2">200</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="item-img">
                                <img alt="Hình đăng ký tham quan CLB"
                                     src="view/themes/citigym/images/features/feature-3.jpg" class="content"/>
                            </div>
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-biceps"></i>
                                    </div>
                                    <div class="title">Kỹ năng</div>
                                    <b class="h2">Dành cho trình độ nâng cao</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="item-img">
                                <img alt="Hình đăng ký tham quan CLB"
                                     src="view/themes/citigym/images/features/feature-4.jpg" class="content"/>
                            </div>
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-barbell"></i>
                                    </div>
                                    <div class="title">Địa điểm</div>
                                    <b class="h2">Citigym Thành Thái - Vạn Hạnh</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section section-service-detail-feature-1 wow fadeInRight"
                 style="background-image: url(view/themes/citigym/images/banners/banner-3.jpg)">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-title">Lợi ích khóa học</h3>
                    <div class="sub-description mx-auto">Căng cơ thể thao sau luyện tập sẽ giúp giải quyết những
                        sự căng chặt, giúp máu lưu thông và cơ thể nhẹ nhàng thoải mái hơn, giúp cơ thể tăng độ
                        linh hoạt, không gặp khó khăn trong những hoạt động hàng ngày.
                    </div>
                </div>
                <div class="row benefit_course">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-muscle"></i>
                                    </div>
                                    <div class="title">Tăng cường sức mạnh</div>
                                    <div class="sub-description mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-muscle-1"></i>
                                    </div>
                                    <div class="title">Cơ bắp dẻo dai</div>
                                    <div class="sub-description mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-kneecap"></i>
                                    </div>
                                    <div class="title">Cơ thể vững chãi</div>
                                    <div class="sub-description mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="icon">
                                        <i class="customicon-heart"></i>
                                    </div>
                                    <div class="title">Cơ thể vững chãi</div>
                                    <div class="sub-description mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

<!--        <section class="section wow fadeInLeft">-->
<!--            <div class="container">-->
<!--                <div class="section-title"></div>-->
<!--                <h3 class="sub-description seo-desc"></h3>-->
<!--                <div class="card-list">-->
<!--                    <div class="row intro_trainer">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
    </div>
<?php include_once 'view/layout/footer.php'?>
