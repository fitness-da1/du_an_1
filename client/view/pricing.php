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
                    <!--tên plant-->
                            <ul class="tag-inline tag-col-3 nav nav-tabs m-b-24px m-t-md-3 d-block text-center">
                                    <li class="nav-item d-inline-block" id="plant_type">
                                    </li>
                            </ul>
                    <!--end tên plant-->

                    <!--Thời gian gói-->
                            <div class="tab-content">
<!--                                //gói-->
                                <div class="tab-pane fade show active" id="package-personal-list">

                                    <div class="row align-items-center">
                                        <div class="col-md-6 item-selection-wrapper">
<!--                                            hạn gói-->
                                            <div class="item-selection nav nav-tabs border-bottom-0" id="plant_exp">

<!--                                                <a class="item-month" href="#package-classic-0" data-toggle="tab">-->
                                                <!--                                                    <div class="title">1</div>tháng-->
                                                <!--                                                </a>-->

                                            </div>
                                            <!--                                         end hạn gói-->
                                        </div>
                                        <!--chi phi-->
                                        <div class="col-md-6 item-content-wrapper">
<!--                                            price-->
                                            <div class="item-content tab-content p-y-12px">
                                                <ul class="tab-pane fade show" id="plant_price">



<!--                                                    <li>-->
<!--                                                       <button type="submit" class="btn btn-brand btn-sm"-->
<!--                                                               data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
<!--                                                    </li>-->
                                                </ul>


                                                <!--                                                    <li>-->
                                                <!--                                                        <div class="label-text">Thời gian tập luyện:</div>-->
                                                <!--                                                        <div class="label-title text-space">36 tháng</div>-->
                                                <!--                                                    </li>-->
                                                <!---->
                                                <!--                                                   <li>-->
                                                <!--                                                        <button type="submit" class="btn btn-brand btn-sm"-->
                                                <!--                                                                data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>-->
                                                <!--                                                    </li>-->

                                            </div>
                                            <!--                                            end price-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                </span>
            </div>

            <div class="col-lg-5 content-bg stripe-section">
                <div class="content-img text-center">
                    <img src="view/themes/citigym/images/citigym-expert/expert-2.png" class="content">
                </div>
            </div>
        </div>
</section>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->





<script>

    //lấy thể loại plant
    $(document).ready(function () {
        $.ajax({
            url: "?ctr=get_type_plant",
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#plant_type').html("");
                for (i = 0; i < data.length; i++) {
                    var plant_type = data[i];

                    var str = `
                    <a class="nav-link"
                        href="#package-personal-list-${plant_type['type_id']}"
                        data-toggle="tab"
                        data-package-list="${plant_type['type_id']}"
                        data-short-title="${plant_type['name_type']}"
                        id="name_type">
                            ${plant_type['name_type']}
                    </a>
                                `;
                    $('#plant_type').append(str);

                    if (plant_type['type_id'] == 1) {
                        $("#plant_type a").addClass("active");

                    }
                }

                $('.nav-link').click(function () {
                    var plat_type=$(this).attr('data-short-title');
                    $.get('?ctr=get_month_plant',{name_type:plat_type},function (data) {
                        $('#plant_exp').html(data);
                    })

                });

                // $('.item-month').click(function () {
                //     var plant_id=$(this).attr('data-month');
                //     $.get('?ctr=get_plant_price',{plant_id:plant_id},function (data) {
                //         $('#plant_price').html(data);
                //     })
                // });

            }
        });
  });



    // $('.item-month')

   //lấy hạn plant-->
// <!--    function get_month(plant_type) {-->
//        // var name_type = $('#name_type').val();-->
// <!--        $.ajax({-->
// <!--            url: "?ctr=get_month_plant&name_type=" + plant_type,-->
// <!--            dataType: 'json',-->
// <!--            success: function (data) {-->
// <!--                console.log(data);-->
// <!--                $('#plant_exp').html("");-->
// <!--                for (i = 0; i < data.length; i++) {-->
// <!--                    var plant_exp = data[i];-->
// <!--                    var str = `-->
// <!--                    <a class="item-month"-->
// <!--                        href="#package-classic-${plant_exp['plant_exp']}"-->
// <!--                        data-toggle="tab"-->
// <!--                        data-month="${plant_exp['plant_id']}">-->
//                   //      <div class="title">${plant_exp['plant_exp']}</div>tháng
//                   // </a>
// <!--                                `;-->
// <!--                    $('#plant_exp').append(str);-->
// <!--                }-->
// <!--                $('a[data-month').on('click', function (e) {-->
// <!--                    e.preventDefault();-->
// <!--                    let plant_id = $(this).attr('data-month');-->
// <!--                    get_price(plant_id);-->
// <!--                    $("#plant_price").show();-->
// <!--                });-->
// <!--            }-->
// <!--        });-->
// <!--    }-->
// <!---->
// <!--    lấy giá-->
// <!--    function get_price(plant_id) {-->
// <!--        $.ajax({-->
// <!--            url: "?ctr=get_plant_price&plant_id=" + plant_id,-->
// <!--            dataType: 'json',-->
// <!--            success: function (data) {-->
// <!--                console.log(data);-->
// <!--                 $('#plant_price').html("");-->
// <!--                for (i = 0; i < data.length; i++) {-->
// <!--                    var plant_price = data[i];-->
// <!--                    var str = `-->
// <!---->
// <!--                               <li>-->
// //                                <div class="label-text">Thời gian tập luyện:</div>--
// // <!--                                 <div class="label-title text-space">${plant_price['plant_exp']}</div>-->
// // <!--                               </li>-->
// <!---->
// <!---->
// <!--                                `;-->
// <!--                    $('#plant_price').append(str);-->
// <!--                }-->
//                // $('a[data-month').on('click',function (e) {-->
//               //     $('#plant_price').load('str');-->
//                // });-->
// <!--            }-->
// <!--        });-->
// <!--    }-->
// <!---->
// <!--    -->
</script>


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


</div>
</main>

<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        setTimeout(function () {-->
<!--            $('.popup').addClass('show');-->
<!--        }, 2 * 1000);-->
<!---->
<!--        setTimeout(function () {-->
<!--            $('.popup .close').trigger('click');-->
<!--        }, 30 * 1000);-->
<!--    });-->
<!--</script>-->

<!--<script>-->
<!--    // Change to Short Title for Package Title-->
<!--    if (window.innerWidth < 992) {-->
<!--        document.querySelectorAll('.section-pricing-detail .tag-inline li a, table.pricing-table thead th .title').forEach(function (el, index) {-->
<!--            el.textContent = el.getAttribute('data-short-title');-->
<!--        });-->
<!--    }-->
<!---->
<!--    function changeMobileBanner() {-->
<!--        $('.main-breadcrumb > .breadcrumb-bg').each(function (index, el) {-->
<!--            window.innerWidth <= 480 ? $(el).attr('style', $(el).attr('data-mobile-src')) : $(el).attr('style', $(el).attr('data-desktop-src'));-->
<!--            $('.main-breadcrumb').css('opacity', '1');-->
<!--        });-->
<!--    }-->
<!---->
<!--    $(document).ready(function () {-->
<!--        changeMobileBanner();-->
<!--        $('#breadcrumb-banner').show();-->
<!---->
<!--        // Check input from-->
<!--        $('input[name="type"]').click(function () {-->
<!--            $(this).next().addClass('white');-->
<!---->
<!--            if ($(this).attr('checked')) {-->
<!--                $(this).prop('checked', false); // tạo thuộc tính-->
<!--                $(this).removeAttr('checked'); //xóa thuộc tính-->
<!--            } else {-->
<!--                $(this).prop('checked', true);-->
<!--                $(this).attr('checked', true); //lấy giá trị or thêm thuộc tính-->
<!--            }-->
<!---->
<!--            $(this).siblings('input').prop('checked', false);-->
<!--            $(this).siblings('input').removeAttr('checked');-->
<!---->
<!--            if ($('#enterprise').is(':checked')) {-->
<!--                $('.detail-personal-js').addClass('d-none');-->
<!--                $('.detail-enterprise-js').removeClass('d-none');-->
<!--                $('label.white').removeClass('white');-->
<!--                $('.text-right').addClass('white');-->
<!--            } else {-->
<!--                $('label.white').removeClass('white');-->
<!--                $('.text-left').addClass('white');-->
<!--                $('.detail-personal-js').removeClass('d-none');-->
<!--                $('.detail-enterprise-js').addClass('d-none');-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Change select plant month-->
<!--        var temp = 0;-->
<!--        var amount_current = $('.amount-register').val();-->
<!--        var month_current;-->
<!--        $('select').on('change', function () {-->
<!--            var typeTab = "";-->
<!--            amount_current = $(this).val();-->
<!--            month_current = parseInt($('.main-month.active .extra-month.active').attr('data-month'));-->
<!---->
<!--            if ($('.main-month.active .extra-month.active').hasClass('package-classic')) {-->
<!--                typeTab = ".package-classic";-->
<!--            } else {-->
<!--                typeTab = ".package-citipassport";-->
<!--            }-->
<!--            // kiem kqcuoi-->
<!--            var childEl = $(`[number_regiester="${amount_current}"] [data-detail="${month_current}"]`);-->
<!---->
<!--            // active cai tab can chon-->
<!--            var parentEl = childEl.parents('.main-month');-->
<!--            $('.main-month').removeClass('active');-->
<!--            parentEl.addClass('active');-->
<!--            //UL kq  da dc active vao luc click month-->
<!---->
<!--            // chinh lai dropdowns-->
<!---->
<!--            //chinh cua3 tab classic or la2 cai khac-->
<!--            $(typeTab + ` .amount-register option[value="${amount_current}"]`).prop('selected', true);-->
<!---->
<!--            if ($('.main-month').hasClass('active')) {-->
<!--                var checkId = $('.main-month.active').attr('id');-->
<!---->
<!--                $('.nav-link.active').attr('href', '#' + checkId);-->
<!--            }-->
<!--        });-->
<!---->
<!---->
<!--        // Click-->
<!---->
<!--        $('.extra-month').on('click', function () {-->
<!--            var month_current = parseInt($(this).attr('data-month')); // thêm thuộc tính-->
<!--            var typeTab = "";-->
<!---->
<!--            if ($(this).hasClass('package-classic')) {-->
<!--                typeTab = "package-classic";-->
<!--                $('.package-classic.active').removeClass('active');-->
<!--                $(`.package-classic[data-month="${month_current}"]`).addClass('active');-->
<!--            } else {-->
<!--                typeTab = "package-citipassport";-->
<!--                $('.package-citipassport.active').removeClass('active');-->
<!--                $(`.package-citipassport[data-month="${month_current}"]`).addClass('active');-->
<!--            }-->
<!---->
<!--            var parentElOld = $(this).parents('.main-month');-->
<!--            var number_regiester = parentElOld.attr('number_regiester');-->
<!---->
<!--            //result end-->
<!--            var childEl = $(`[number_regiester="${amount_current}"] [data-detail="${month_current}"]`);-->
<!--            var parentEl = childEl.parents('.main-month');-->
<!--            var parentElResult = $(`[data-detail="${month_current}"]`).parents('.tab-detail.' + typeTab);-->
<!---->
<!--            parentElResult.addClass('active show');-->
<!--        })-->
<!--    });-->
<!---->
<!--    $(window).resize(function (event) {-->
<!--        changeMobileBanner();-->
<!--        $('#breadcrumb-banner').show();-->
<!--    });-->
<!---->
<!--</script>-->

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
