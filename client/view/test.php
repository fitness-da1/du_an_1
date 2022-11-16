<?php include_once './view/layout/header.php' ?>

<header class="page-banner-area trainers-page-banner">
    <div class="section-overlay d-flex">
        <div class="container">
            <div class="header-caption text-left">
                <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s"
                    data-wow-delay=".5s">Pricing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <li class="breadcrumb-item text-capitalize"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Pricing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>


<!--        danh sách các gói-->
<section class="section section-pricing-detail mb-0">
    <div class="container">
        <div class="row m-pricing-detail">

            <div class="col-lg-7 content-text m-b-md-3">

                        <span class="detail-enterprise-js d-none ">
                            <ul class="tag-inline tag-col-3 nav nav-tabs m-b-24px m-t-md-3 d-block text-center"></ul>
                            <div class="tab-content"></div>
                        </span>

                <span class="detail-personal-js">

                            <ul class="tag-inline tag-col-3 nav nav-tabs m-b-24px m-t-md-3 d-block text-center">
                                <?php foreach ($plant_type as $item => $type): ?>
                                    <li class="nav-item d-inline-block ">
                                    <a data-short-title="<?= $type->name_type ?>"
                                       data-package-list="<?= $type->type_id ?>"
                                       class="nav-link <?= $type->type_id==1?'active':null ?>" data-toggle="tab"
                                       href="#package-personal-list-<?= $type->type_id ?>"><?= $type->name_type ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>

<!--                                                                <li class="nav-item d-inline-block">-->
                                <!--                                                                    <a data-short-title="Classic-Plus"-->
                                <!--                                                                       data-package-list="16"-->
                                <!--                                                                       class="nav-link active" data-toggle="tab"-->
                                <!--                                                                       href="#package-personal-list-16">Classic-Plus</a>-->
                                <!--                                                                </li>-->
                                <!---->
                                <!--                                 <li class="nav-item d-inline-block">-->
                                <!--                                    <a data-short-title="Citipassport"-->
                                <!--                                       data-package-list="2"-->
                                <!--                                       class="nav-link " data-toggle="tab"-->
                                <!--                                       href="#package-personal-list-2">Citipassport</a>-->
                                <!--                                </li>-->
                                <!---->
                                <!--                                 <li class="nav-item d-inline-block">-->
                                <!--                                    <a data-short-title="Royal"-->
                                <!--                                       data-package-list="31"-->
                                <!--                                       class="nav-link " data-toggle="tab"-->
                                <!--                                       href="#package-personal-list-31">Royal</a>-->
                                <!--                                </li>-->
                                <!---->
                                <!--                                <li class="nav-item d-inline-block">-->
                                <!--                                    <a data-short-title="Signature"-->
                                <!--                                       data-package-list="29"-->
                                <!--                                       class="nav-link " data-toggle="tab"-->
                                <!--                                       href="#package-personal-list-29">Signature</a>-->
                                <!--                                </li>-->
                            </ul>
                    <!--Thời gian gói-->
                            <div class="tab-content">
<!--                                //gói-->
                                <div class="tab-pane fade show active" id="package-personal-list">

                                    <div class="row align-items-center">
                                        <div class="col-md-6 item-selection-wrapper">
                                            <div class="item-selection nav nav-tabs border-bottom-0">

                                                <a class="item-month " href="#package-classic-0" data-toggle="tab">
                                                    <div class="title">1</div>tháng
                                                </a>

                                                <!--                                                <a class="item-month active" href="#package-classic-3"-->
                                                <!--                                                   data-toggle="tab"><div class="title">36</div> tháng</a>-->
                                                <!---->
                                                <!--                                                <a class="item-month " href="#package-classic-4" data-toggle="tab"><div-->
                                                <!--                                                            class="title">14</div> tháng </a>-->
                                                <!--                                                                                                <a class="item-month "-->
                                                <!--                                                                                                   href="#package-classic-2"-->
                                                <!--                                                                                                   data-toggle="tab">-->
                                                <!--                                                    <div class="title">6</div> tháng                                                </a>-->
                                                <!--                                                                                                <a class="item-month "-->
                                                <!--                                                                                                   href="#package-classic-1"-->
                                                <!--                                                                                                   data-toggle="tab">-->
                                                <!--                                                    <div class="title">3</div> tháng                                                </a>-->
                                                <!--                                                    <a class="item-month " href="#package-classic-0" data-toggle="tab">-->
                                                <!--                                                    <div class="title">1</div>tháng-->
                                                <!--                                                    </a>-->
                                            </div>
                                        </div>
                                        <!--chi phi-->
                                        <!--                                        <div class="col-md-6 item-content-wrapper">-->
                                        <!--                                            <div class="item-content tab-content p-y-12px">-->
                                        <!---->
                                        <!--                                               <ul class="tab-pane fade active show" id="package-classic-3">-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                        <!--                                                        <div class="label-title text-space">36 tháng</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Tổng chi phí:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            26,840,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / tháng</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            745,556 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / ngày:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            24,852 VNĐ</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                                                                        <li>-->
                                        <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                        <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                        <!--                                                    </li>-->
                                        <!--                                                </ul>-->
                                        <!---->
                                        <!--                                                <ul class="tab-pane fade " id="package-classic-4">-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                        <!--                                                        <div class="label-title text-space">14 tháng</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Tổng chi phí:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            12,160,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / tháng</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            868,571 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / ngày:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            28,952 VNĐ</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                                                                        <li>-->
                                        <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                        <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                        <!--                                                    </li>-->
                                        <!--                                                </ul>-->
                                        <!--                                                                                                                                                <ul class="tab-pane fade "-->
                                        <!--                                                                                                                                                    id="package-classic-2">-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                        <!--                                                        <div class="label-title text-space">6 tháng</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Tổng chi phí:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            7,830,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / tháng</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            1,305,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / ngày:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            43,500 VNĐ</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                                                                        <li>-->
                                        <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                        <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                        <!--                                                    </li>-->
                                        <!--                                                </ul>-->
                                        <!--                                                                                                                                                <ul class="tab-pane fade "-->
                                        <!--                                                                                                                                                    id="package-classic-1">-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                        <!--                                                        <div class="label-title text-space">3 tháng</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Tổng chi phí:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            4,910,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / tháng</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            1,636,667 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / ngày:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            54,556 VNĐ</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                                                                        <li>-->
                                        <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                        <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                        <!--                                                    </li>-->
                                        <!--                                                </ul>-->
                                        <!--                                                                                                                                                <ul class="tab-pane fade "-->
                                        <!--                                                                                                                                                    id="package-classic-0">-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                        <!--                                                        <div class="label-title text-space">1 tháng</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Tổng chi phí:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            2,315,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / tháng</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            2,315,000 VNĐ-->
                                        <!--                                                        </div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                    <li>-->
                                        <!--                                                        <div class="label-text">Chi phí / ngày:</div>-->
                                        <!--                                                        <div class="label-title text-space">-->
                                        <!--                                                            77,167 VNĐ</div>-->
                                        <!--                                                    </li>-->
                                        <!--                                                                                                        <li>-->
                                        <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                        <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                        <!--                                                    </li>-->
                                        <!--                                                </ul>-->
                                        <!--                                                                                            </div>-->
                                        <!--                                        </div>-->

                                    </div>
                                </div>
                            </div>


                    <!--                                                    <div class="tab-pane fade show " id="package-personal-list-2">-->
                    <!--                                                        <div class="row align-items-center">-->
                    <!--                                                            <div class="col-md-6 item-selection-wrapper">-->
                    <!--                                                                <div class="item-selection nav nav-tabs border-bottom-0">-->
                    <!--                                                                                                                                                                    <a class="item-month active"-->
                    <!--                                                                                                                                                                       href="#package-classic-plus-0"-->
                    <!--                                                                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">42</div> tháng                                                </a>-->
                    <!--                                                                                                                    <a class="item-month "-->
                    <!--                                                                                                                       href="#package-classic-plus-1"-->
                    <!--                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">18</div> tháng                                                </a>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!---->
                    <!--                                                            <div class="col-md-6 item-content-wrapper">-->
                    <!--                                                                <div class="item-content tab-content p-y-12px">-->
                    <!--                                                                                                                                                                                                                    <ul class="tab-pane fade active show"-->
                    <!--                                                                                                                                                                                                                        id="package-classic-plus-0">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">42 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                31,310,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                745,476 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                24,849 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                                                                    <ul class="tab-pane fade "-->
                    <!--                                                                                                                                                                        id="package-classic-plus-1">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">18 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                15,580,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                865,556 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                28,852 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                        </div>-->
                    <!--                                                    </div>-->
                    <!---->
                    <!--                                                    <div class="tab-pane fade show " id="package-personal-list-3">-->
                    <!--                                                        <div class="row align-items-center">-->
                    <!--                                                            <div class="col-md-6 item-selection-wrapper">-->
                    <!--                                                                <div class="item-selection nav nav-tabs border-bottom-0">-->
                    <!--                                                                                                                                                                    <a class="item-month active"-->
                    <!--                                                                                                                                                                       href="#package-citipassport-1"-->
                    <!--                                                                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">48</div> tháng                                                </a>-->
                    <!--                                                                                                                    <a class="item-month "-->
                    <!--                                                                                                                       href="#package-citipassport-0"-->
                    <!--                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">24</div> tháng                                                </a>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                            <div class="col-md-6 item-content-wrapper">-->
                    <!--                                                                <div class="item-content tab-content p-y-12px">-->
                    <!--                                                                                                                                                                                                                    <ul class="tab-pane fade active show"-->
                    <!--                                                                                                                                                                                                                        id="package-citipassport-1">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">48 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                37,800,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                787,500 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                26,250 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                                                                    <ul class="tab-pane fade "-->
                    <!--                                                                                                                                                                        id="package-citipassport-0">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">24 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                21,240,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                885,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                29,500 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                        </div>-->
                    <!--                                                    </div>-->
                    <!---->
                    <!--                                                    <div class="tab-pane fade show " id="package-personal-list-4">-->
                    <!--                                                        <div class="row align-items-center">-->
                    <!--                                                            <div class="col-md-6 item-selection-wrapper">-->
                    <!--                                                                <div class="item-selection nav nav-tabs border-bottom-0">-->
                    <!--                                                                                                                                                                    <a class="item-month active"-->
                    <!--                                                                                                                                                                       href="#package-royal-0"-->
                    <!--                                                                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">30</div> tháng                                                </a>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                            <div class="col-md-6 item-content-wrapper">-->
                    <!--                                                                <div class="item-content tab-content p-y-12px">-->
                    <!--                                                                                                                                                                                                                    <ul class="tab-pane fade active show"-->
                    <!--                                                                                                                                                                                                                        id="package-royal-0">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">30 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                31,565,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                1,052,167 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                35,072 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                        </div>-->
                    <!--                                                    </div>-->
                    <!---->
                    <!--                                                    <div class="tab-pane fade show " id="package-personal-list-5">-->
                    <!--                                                        <div class="row align-items-center">-->
                    <!--                                                            <div class="col-md-6 item-selection-wrapper">-->
                    <!--                                                                <div class="item-selection nav nav-tabs border-bottom-0">-->
                    <!--                                                                                                                                                                    <a class="item-month active"-->
                    <!--                                                                                                                                                                       href="#package-signature-1"-->
                    <!--                                                                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">60</div> tháng                                                </a>-->
                    <!--                                                                                                                    <a class="item-month "-->
                    <!--                                                                                                                       href="#package-signature-0"-->
                    <!--                                                                                                                       data-toggle="tab">-->
                    <!--                                                                        <div class="title">24</div> tháng                                                </a>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                            <div class="col-md-6 item-content-wrapper">-->
                    <!--                                                                <div class="item-content tab-content p-y-12px">-->
                    <!--                                                                                                                                                                                                                    <ul class="tab-pane fade active show"-->
                    <!--                                                                                                                                                                                                                        id="package-signature-1">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">60 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                149,395,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                2,489,917 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                82,997 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                                                                    <ul class="tab-pane fade "-->
                    <!--                                                                                                                                                                        id="package-signature-0">-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Thời gian tập luyện:</div>-->
                    <!--                                                                            <div class="label-title text-space">24 tháng</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Tổng chi phí:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                89,240,000 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / tháng</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                3,718,333 VNĐ-->
                    <!--                                                                            </div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                        <li>-->
                    <!--                                                                            <div class="label-text">Chi phí / ngày:</div>-->
                    <!--                                                                            <div class="label-title text-space">-->
                    <!--                                                                                123,944 VNĐ</div>-->
                    <!--                                                                        </li>-->
                    <!--                                                                                                                            <li>-->
                    <!--                                                                            <button type="submit"-->
                    <!--                                                                                    class="btn btn-brand btn-sm"-->
                    <!--                                                                                    data-toggle="modal"-->
                    <!--                                                                                    data-target=".modal-sign-up">Đăng ký ngay</button>-->
                    <!--                                                                        </li>-->
                    <!--                                                                    </ul>-->
                    <!--                                                                                                                </div>-->
                    <!--                                                            </div>-->
                    <!--                                                        </div>-->
                    <!--                                                    </div>-->
            </div>
            </span>

        </div>

        <div class="col-lg-5 content-bg stripe-section">
            <!--                        <div class="stripe-vector-1"><img alt="Chi tiết giá tập gym yoga tại TPHCM"-->
            <!--                                                          src="themes/citigym/images/svg/stripe-section-left-grey.svg">-->
            <!--                        </div>-->
            <!--                        <div class="stripe-vector-2"><img alt="Chi tiết giá tập gym yoga tại TPHCM"-->
            <!--                                                          src="themes/citigym/images/svg/stripe-section-right-grey.svg">-->
            <!--                        </div>-->
            <div class="content-img text-center">
                <img src="view/themes/citigym/images/citigym-expert/expert-2.png" class="content">
            </div>
        </div>
    </div>
    </div>
</section>


<!--                        ===================================-->
<!--                            start table dịch vụ-->
<!--                        ===================================-->

<section class="section section-pricing-table stripe-section mb-0"
         style="background-image: url(themes/citigym/images/clubs/2-2.jpg);">
    <!--            <div class="stripe-vector-1"><img alt="Chi tiết giá tập gym yoga tại TPHCM"-->
    <!--                                              src="themes/citigym/images/svg/stripe-section-left.svg">-->
    <!--            </div>-->
    <!--            <div class="stripe-vector-2"><img alt="Chi tiết giá tập gym yoga tại TPHCM"-->
    <!--                                              src="themes/citigym/images/svg/stripe-section-right.svg">-->
    <!--            </div>-->
    <div class="container">

        <table class="table pricing-table table-responsive detail-enterprise-js d-none">
            <thead>
            <tr>
                <th class="border-top-0"></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <table class="table pricing-table table-responsive detail-personal-js">
            <thead>
            <tr>
                <th class="border-top-0"></th>
                <th>
                    <span class="title" data-short-title="Classic">Classic</span>
                    <br>
                </th>
                <th>
                    <span class="title" data-short-title="Classic-Plus">Classic-Plus</span>
                    <br>
                </th>
                <th>
                    <span class="title" data-short-title="Citipassport">Citipassport</span>
                    <br>
                </th>
                <th>
                    <span class="title" data-short-title="Royal">Royal</span>
                    <br>
                </th>
                <th>
                    <span class="title" data-short-title="Signature">Signature</span>
                    <br>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tập luyện tại 01 CLB đã chọn.</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Tham gia Yoga và Group X tại 01 CLB đã chọn.</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Tự do tập luyện tại tất cả câu lạc bộ trong hệ thống CITIGYM.</td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Không giới hạn thời gian luyện tập</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Tham gia tất cả các lớp Yoga và Group X tại tất cả các CLB trong hệ thống CITIGYM</td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>1 buổi định hướng luyện tập riêng biệt và tư vấn dinh dưỡng</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được sử dụng dịch vụ thư giãn sau luyện tập (sauna và steambath)</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Nước uống miễn phí</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Dịch vụ khăn tập thể thao cao cấp.</td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Hệ thống khóa từ thông minh, bảo mật tối ưu Esmart Locker</td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được dẫn theo 1 người thân đi tập cùng (người đi cùng được phục vụ như quyền lợi thẻ
                    classic)
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
                <td></td>
            </tr>
            <tr>
                <td>Được dẫn theo 1 người thân đi tập cùng (người đi cùng được phục vụ như quyền lợi thẻ
                    Citipassport)
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Bộ đồ dùng tắm gội - vệ sinh cao cấp.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được tặng 01 ly nước trái cây hoặc ly sinh tố đạm dinh dưỡng;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>01 lần chuyển nhượng cho người thân trong gia đình (Cha, Mẹ, Vợ, Chồng, Con, Anh Chị Em
                    ruột, Con nuôi…) không thu phí
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được ưu tiên đặt chỗ các lớp Yoga và GroupX trước 48 tiếng (hôm nay và ngày mai)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được tặng 30 buổi PT (đối với gói Signature 24 tháng và 60 tháng) hoặc 50 buổi PT (đối với
                    gói Signature 10 năm)
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Giữ xe miễn phí tại tất cả các CLB (không quá 4 tiếng)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Được ưu đãi 20% chiết khấu cho dịch vụ tại CITISPA &amp; các dịch vụ thuộc chuỗi Nova F&amp;B</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Lối vào check-in ưu tiên cho hội viên Signature</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Phục vụ thảm tập Yoga có logo Signature khi tham gia lớp</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            <tr>
                <td>Sử dụng khu vực VIP Lounge dành riêng cho hội viên Signature (Không áp dụng cho Khách đi
                    kèm)
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight"><i
                            class="remixicon-checkbox-circle-fill font-size-20 text-success"></i></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<!--                        ===================================-->
<!--                            end table dịch vụ-->
<!--                        ===================================-->


<!--                        ===================================-->
<!--                            start form đăng kí tư vấn-->
<!--                        ===================================-->

<!--<div class="modal modal-sign-up fade">-->
<!--    <form method="POST" action="https://citigym.com.vn/chinh-sach-gia" accept-charset="UTF-8" id="contactForm">-->
<!--        <input name="_token" type="hidden" value="F2I3OgSYfw1ZfSkHelvrQJZLxJgIC2hOel82lrF4">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h5 class="modal-title title-s1">Đăng ký tham quan câu lạc bộ</h5>-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                        <i class="remixicon-close-line"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class="modal-body p-x-3 p-y-3">-->
<!--                    <form action="#">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="form-group">-->
<!--                                    <input type="text" name="name" class="form-control" placeholder="Họ tên"/>-->
<!--                                    <ul class="list-unstyled ml-1 mt-1" data-validation="eden-validation"-->
<!--                                        data-field="name"></ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="form-group">-->
<!--                                    <input type="number" name="phone" class="form-control"-->
<!--                                           placeholder="Số điện thoại"/>-->
<!--                                    <ul class="list-unstyled ml-1 mt-1" data-validation="eden-validation"-->
<!--                                        data-field="phone"></ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="form-group">-->
<!--                                    <select class="form-control" name="subject">-->
<!--                                        <option value="">Câu lạc bộ bạn muốn tham gia</option>-->
<!--                                        <option value="CITIGYM THÀNH THÁI QUẬN 10">CITIGYM THÀNH THÁI QUẬN 10-->
<!--                                        </option>-->
<!--                                        <option value="CITIGYM SUNRISE SOUTH, QUẬN 7">CITIGYM SUNRISE SOUTH,-->
<!--                                            QUẬN 7-->
<!--                                        </option>-->
<!--                                        <option value="CITIGYM VẠN HẠNH MALL, QUẬN 10">CITIGYM VẠN HẠNH MALL,-->
<!--                                            QUẬN-->
<!--                                            10-->
<!--                                        </option>-->
<!--                                        <option value="CITIGYM GOLDEN MANSION, QUẬN PHÚ NHUẬN">CITIGYM GOLDEN-->
<!--                                            MANSION, QUẬN PHÚ NHUẬN-->
<!--                                        </option>-->
<!--                                        <option value="CITIGYM SUN AVENUE, QUẬN 2">CITIGYM SUN AVENUE, QUẬN 2-->
<!--                                        </option>-->
<!--                                    </select>-->
<!--                                    <ul class="list-unstyled ml-1 mt-1" data-validation="eden-validation"-->
<!--                                        data-field="subject"></ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="form-group">-->
<!--                                    <select class="form-control" name="content">-->
<!--                                        <option value="">Giờ nào chúng tôi có thể gọi bạn?</option>-->
<!--                                        <option value="9am-12pm">9am-12pm</option>-->
<!--                                        <option value="12pm-2pm">12pm-2pm</option>-->
<!--                                        <option value="2pm-5pm">2pm-5pm</option>-->
<!--                                        <option value="5pm-10pm">5pm-10pm</option>-->
<!--                                    </select>-->
<!--                                    <ul class="list-unstyled ml-1 mt-1" data-validation="eden-validation"-->
<!--                                        data-field="content"></ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <button type="submit" data-control="submit" class="btn btn-brand">Đăng ký ngay</button>-->
<!--                    </form>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->

<!--                        ===================================-->
<!--                            end form đăng kí tư vấn-->
<!--                        ===================================-->

</div>
</main>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.popup').addClass('show');
        }, 2 * 1000);

        setTimeout(function () {
            $('.popup .close').trigger('click');
        }, 30 * 1000);
    });
</script>

<script>
    // Change to Short Title for Package Title
    if (window.innerWidth < 992) {
        document.querySelectorAll('.section-pricing-detail .tag-inline li a, table.pricing-table thead th .title').forEach(function (el, index) {
            el.textContent = el.getAttribute('data-short-title');
        });
    }

    function changeMobileBanner() {
        $('.main-breadcrumb > .breadcrumb-bg').each(function (index, el) {
            window.innerWidth <= 480 ? $(el).attr('style', $(el).attr('data-mobile-src')) : $(el).attr('style', $(el).attr('data-desktop-src'));
            $('.main-breadcrumb').css('opacity', '1');
        });
    }

    $(document).ready(function () {
        changeMobileBanner();
        $('#breadcrumb-banner').show();

        // Check input from
        $('input[name="type"]').click(function () {
            $(this).next().addClass('white');

            if ($(this).attr('checked')) {
                $(this).prop('checked', false); // tạo thuộc tính
                $(this).removeAttr('checked'); //xóa thuộc tính
            } else {
                $(this).prop('checked', true);
                $(this).attr('checked', true); //lấy giá trị or thêm thuộc tính
            }

            $(this).siblings('input').prop('checked', false);
            $(this).siblings('input').removeAttr('checked');

            if ($('#enterprise').is(':checked')) {
                $('.detail-personal-js').addClass('d-none');
                $('.detail-enterprise-js').removeClass('d-none');
                $('label.white').removeClass('white');
                $('.text-right').addClass('white');
            } else {
                $('label.white').removeClass('white');
                $('.text-left').addClass('white');
                $('.detail-personal-js').removeClass('d-none');
                $('.detail-enterprise-js').addClass('d-none');
            }
        });

        // Change select plant month
        var temp = 0;
        var amount_current = $('.amount-register').val();
        var month_current;
        $('select').on('change', function () {
            var typeTab = "";
            amount_current = $(this).val();
            month_current = parseInt($('.main-month.active .extra-month.active').attr('data-month'));

            if ($('.main-month.active .extra-month.active').hasClass('package-classic')) {
                typeTab = ".package-classic";
            } else {
                typeTab = ".package-citipassport";
            }
            // kiem kqcuoi
            var childEl = $(`[number_regiester="${amount_current}"] [data-detail="${month_current}"]`);

            // active cai tab can chon
            var parentEl = childEl.parents('.main-month');
            $('.main-month').removeClass('active');
            parentEl.addClass('active');
            //UL kq  da dc active vao luc click month

            // chinh lai dropdowns

            //chinh cua3 tab classic or la2 cai khac
            $(typeTab + ` .amount-register option[value="${amount_current}"]`).prop('selected', true);

            if ($('.main-month').hasClass('active')) {
                var checkId = $('.main-month.active').attr('id');

                $('.nav-link.active').attr('href', '#' + checkId);
            }
        });


        // Click

        $('.extra-month').on('click', function () {
            var month_current = parseInt($(this).attr('data-month')); // thêm thuộc tính
            var typeTab = "";

            if ($(this).hasClass('package-classic')) {
                typeTab = "package-classic";
                $('.package-classic.active').removeClass('active');
                $(`.package-classic[data-month="${month_current}"]`).addClass('active');
            } else {
                typeTab = "package-citipassport";
                $('.package-citipassport.active').removeClass('active');
                $(`.package-citipassport[data-month="${month_current}"]`).addClass('active');
            }

            var parentElOld = $(this).parents('.main-month');
            var number_regiester = parentElOld.attr('number_regiester');

            //result end
            var childEl = $(`[number_regiester="${amount_current}"] [data-detail="${month_current}"]`);
            var parentEl = childEl.parents('.main-month');
            var parentElResult = $(`[data-detail="${month_current}"]`).parents('.tab-detail.' + typeTab);

            parentElResult.addClass('active show');
        })
    });

    $(window).resize(function (event) {
        changeMobileBanner();
        $('#breadcrumb-banner').show();
    });

</script>

<style>
    .pricing-table.table thead th:not(:first-child) {
        vertical-align: baseline;
    }

    .section-pricing-detail .item-selection .item-month:last-child {
        border-right: none !important;
    }

    .tag-inline > li {
        padding: 0 10px;
    }

    .main-title {
        white-space: nowrap;
    }

    .pricing-table.table tbody td:not(:first-child),
    .pricing-table.table tbody th:not(:first-child) {
        width: 12%;
    }

    .pricing-table.table thead th {
        padding: 16px 8px;
    }

    .section-pricing-detail .content-bg.stripe-section .stripe-vector-1 {
        top: -15%;
    }

    .section-pricing-detail .content-bg .stripe-vector-1 img, .section-pricing-detail .content-bg .stripe-vector-2 img {
        width: 120%;
    }

    .section-pricing-detail .content-bg.stripe-section .stripe-vector-2 {
        bottom: -15%;
        -webkit-transform: translateX(30%);
        -ms-transform: translateX(30%);
        transform: translateX(30%);
    }

    .pricing-table.table thead tr .w-enterprise {
        width: 20%;
    }

    .section-pricing-detail {
        max-width: 100%;
        position: relative;
    }

    @media (max-width: 992px) {
        .pricing-table.table tbody td:not(:first-child),
        .pricing-table.table tbody th:not(:first-child) {
            width: 15%;
        }
    }


    @media (max-width: 767.98px) {
        .pricing-table.table thead tr th {
            width: 25%;
        }

        .pricing-table.table tbody td:not(:first-child),
        .pricing-table.table tbody th:not(:first-child) {
            width: 25%;
        }

        .pricing-table.table thead tr .w-enterprise {
            width: 50%;
        }

        .pricing-table.table tbody td.w-enterprise:not(:first-child),
        .pricing-table.table tbody th.w-enterprise:not(:first-child) {
            width: 50%;
        }

        .main-title {
            white-space: pre-line;
            line-height: normal;
        }

        .tag-inline.tag-col-3 > .nav-item {
            margin-right: 12px;
            margin-bottom: 12px;
        }

        .tag-inline > .nav-item .nav-link {
            padding: 8px 0;
        }
    }

    .aha-customer-chat-plugin-mobile {
        z-index: 99999;
    }

    @media (max-width: 560px) {
        .main-breadcrumb:before {
            height: 440px;
        }

        .item-selection {
            /* display: grid !important;
            grid-template-columns: 1fr 1fr; */
            /* grid-row-gap: 15px; */
        }
    }

    @media (max-width: 450px) {
        .pricing-table.table thead th:not(:first-child) {
            padding: 10px 0 !important;
        }

        .pricing-table.table thead th .title {
            font-size: 11px;
        }

    }

    @media (max-width: 480px) {
        .section-pricing-detail .item-selection .item-month {
            padding: 24px 0;
        }

        .section-pricing-detail .item-selection .item-month {
            width: 75px;
        }
    }

    @media (max-width: 400px) {
        .type-switcher input[type="radio"]:checked + label + .switch,
        .type-switcher input[type="radio"]:checked + label:nth-of-type(n) + .switch {
            -webkit-transform: translateX(100px);
            -moz-transform: translateX(100px);
            -ms-transform: translateX(100px);
            -o-transform: translateX(100px);
            transform: translateX(100px);
        }

        .type-switcher label {
            width: 100px;
            font-size: 14px;
        }

        .type-switcher .switch {
            width: 100px;
        }

        .tag-inline > .nav-item .nav-link {
            font-size: 12px;
        }


        .section-pricing-detail .item-selection .item-month .title {
            font-size: 24px;
        }

        .tag-inline.tag-col-3 > .nav-item {
            width: calc(40% - 12px);
        }
    }

    @media (max-width: 360px) {
        .section-pricing-detail .item-selection .item-month {
            width: 60px;
        }
    }
</style>

<?php include_once './view/layout/footer.php' ?>
