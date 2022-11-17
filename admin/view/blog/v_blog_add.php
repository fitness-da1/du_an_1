<?php include_once '././/view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post">
                        <div class="card-body">
                            <h4 class="card-title">Class Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Post name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="post_name" placeholder=" Post name here">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Post avatar</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" id="validatedCustomFile" name="post_avatar" required>
                                        <!-- <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Post content:</h4>
                                            <!-- Create the editor container -->
                                            <!-- <input type="text" class="" name="post_content" required> -->
                                            <textarea name="post_content" id="post_content" cols="70" rows="10"></textarea>
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_blog">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=blog_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- This Page JS -->
<script src="./view/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="./view/dist/js/pages/mask/mask.init.js"></script>
<script src="./view/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="./view/assets/libs/select2/dist/js/select2.min.js"></script>
<script src="./view/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="./view/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="./view/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="./view/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="./view/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="./view/assets/libs/quill/dist/quill.min.js"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>

<?php include_once '././/view/layout/footer.php'; ?>