<?php include_once '././view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Contact Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="full_name" placeholder="name Here">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="email" placeholder="email here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="message" placeholder="message">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="status">
                                            <option>Select</option>
                                            <option value="0">Hoạt Động</option>
                                            <option value="1">Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_contact">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=contact_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '././view/layout/footer.php'; ?>