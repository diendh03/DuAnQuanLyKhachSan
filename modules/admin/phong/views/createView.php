<?php get_header('', 'Tạo mới sản phẩm') ?>
<?php
include "modules/admin/loaiphong/models/indexModel.php";
$categories = get_list_loaiphongs();
?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tạo mới sản phẩm</h5>
            <!--end::Page Title-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form thông tin phòng mới</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>Tên Phòng</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập vào tên phòng" />
                                <?php foreach ($notifications as $notification) : ?>
                                    <?php if ($notification['err'] == "name") : ?>

                                        <?php foreach ($notification['msgs'] as $msg) : ?>
                                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="form-group">
                                <label>Loại Phòng</label>
                                <select class="form-control select2" name="category_id">
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group mb-1">
                                <label for="descriptionCategoryInput">Chi tiết phòng</label>
                                <textarea name="description" id="kt-ckeditor-1"></textarea>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Số lượng phòng</label>
                                <input type="number" name="count" class="form-control" placeholder="Nhập vào số lượng" />
                                <?php foreach ($notifications as $notification) : ?>
                                    <?php if ($notification['err'] == "count") : ?>
                                        <?php foreach ($notification['msgs'] as $msg) : ?>
                                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Giá phòng</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control" placeholder="Giá cho mỗi sản phẩm"  />
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                                    <?php foreach ($notifications as $notification) : ?>
                                    <?php if ($notification['err'] == "price") : ?>
                                        <?php foreach ($notification['msgs'] as $msg) : ?>
                                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Trạng thái phòng</label>
                                <select class="form-control select2" name="status">
                                    <option value="1">Còn phòng</option>
                                    <option value="2">Hết phòng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-3">
                            <div class="form-group">
                                <div><label>Hình ảnh đại diện</label></div>
                                <div class="image-input image-input-outline" id="kt_image_1">
                                    <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"></div>

                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Thay đổi">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="thumb" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="thumb_remove" />
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Xoá ảnh đại diện">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-9">
                            <div>
                                <label>Hình ảnh phòng</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <?php foreach ($notifications as $notification) : ?>
                                    <?php if ($notification['err'] == "thumb") : ?>

                                        <?php foreach ($notification['msgs'] as $msg) : ?>
                                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- <div class="dropzone dropzone-default dropzone-primary" name="filetoupload" id="kt_dropzone_3">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Kéo thả hình ảnh cần upload</h3>
                                    <span class="dropzone-msg-desc">Chỉ chấp nhận tải lên file hình ảnh</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                    <button type="reset" class="btn btn-secondary">Làm lại</button>
                    <a href="?role=admin&mod=production" class="btn btn-default">Quay về</a>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
<?php get_footer() ?>