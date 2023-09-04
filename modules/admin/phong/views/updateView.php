<?php get_header('', 'Chỉnh sửa sản phẩm') ?>
<?php
    include "modules/admin/loaiphong/models/indexModel.php";
    $loaiphongs = get_list_loaiphongs();
?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
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
                    <h3 class="card-title">Form thông tin sản phẩm mới</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên tiêu đề</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập vào tên danh mục" value="<?php echo $phong['title'] ?>" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control select2" name="loaiphong_id">
                                    <option value="<?php echo $phong['loaiphong_id'] ?>" hidden><?php echo $phong['loaiphong_id'] ?></option>
                                    <?php foreach ($loaiphongs as $loaiphong) : ?>
                                        <option value="<?php echo $loaiphong['id'] ?>"><?php echo $loaiphong['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        <div class="form-group mb-1">
                            <label for="descriptionloaiphongInput">Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" id="descriptionloaiphongInput" rows="3"><?php echo $phong['description'] ?></textarea>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Số lượng trong kho</label>
                                <input type="number" name="count" class="form-control"  value="<?php echo $phong['count'] ?>" placeholder="Nhập vào số lượng" />
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Giá cho mỗi sản phẩm</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control"  value="<?php echo $phong['price'] ?>"  placeholder="Giá cho mỗi sản phẩm" aria-describedby="basic-addon2" />
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Hình Ảnh Upload</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="hidden" name="fileToUploads" value="<?php echo $phong['thumb'] ?>">
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select class="form-control select2" name="status" value="<?php echo $phong['status'] ?>" hidden>
                                    <option value="1">Nháp</option>
                                    <option value="2">Công khai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Chỉnh sửa</button>
                        <a href="?role=admin&mod=phong" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>