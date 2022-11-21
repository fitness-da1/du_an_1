<?php include_once 'view/layout/header.php'?>

    <!-- Header Start -->
    <header class="page-banner-area blog-page-banner">
        <div class="section-overlay d-flex">
            <div class="container">
                <div class="header-caption text-left">
                    <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                        data-wow-delay=".5s">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <li class="breadcrumb-item text-capitalize"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Blog Page Area Start -->
    <section class="blog-page-area">
        <div class="container">
            <!-- Row Start-->
            <div class="row">

                <!-- Blog Post -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                <?php foreach ($blog as $blog): ?>
                    <div class="card wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="blog-thumb-box">
                            <img src="view/assets/img/blog-img/1.png" alt="Blog Img">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="?ctr=detail_blog&id=<?= $blog->id?>"><?= $blog->post_name?></a></h4>

                            <div class="card-footer">
                                <div class="card-footer-box d-flex">
                                    <div class="author-box"><a href="#"><img src="view/assets/img/blog-img/author-avatar.png"
                                                alt="Author"><span><?=$blog->id_author==1?'admin':'admin'?></span></a></div>
                                    <div class="blog-date text-uppercase"><i class="far fa-clock"></i><?=$blog->post_time?>
                                    </div>
                                </div>
                                <div class="card-footer-share text-right">
                                    <button><i class="fas fa-comments"></i></button>
                                    <button><i class="fas fa-share-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
               

                <!-- Blog Pagination Box-->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Blog Pagination Box-->

            </div>
            <!-- Row End-->

        </div>
    </section>
    <!-- Blog Page Area End -->



<?php include_once 'view/layout/footer.php'?>