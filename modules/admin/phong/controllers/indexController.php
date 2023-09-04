<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['phongs'] = get_list_phongs();
    load_view('index', $data);
}

function createAction() {
    $notifications = get_notification();
    
    load_view('create',["notifications" => $notifications
]);
}

function createPostAction()
{
    $check = 1;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $status = $_POST['status'];
    // $filetoupload = $_POST['filetoupload'];
    $target_dir = "public/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $thumb = $_FILES["fileToUpload"]["name"];
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'png','jpeg','webp'];
    
    if (empty($thumb)) {
        push_notification('danger', ['Vui lòng tải hình ảnh lên'],'thumb');
        $check = 0;
    }else{
        if (!in_array($imageFileType, $allowedTypes)) {
            push_notification('danger', ['Bạn chỉ được tải ảnh PNG và JPG'],'thumb');
            $check = 0;
        } // Check if file already exists
        elseif (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
        } // Check file size
        elseif ($_FILES["fileToUpload"]["size"] > 5000000) {
            push_notification('danger', ['Ảnh tải lên không được quá 5MB'],'thumb');
            $check = 0;
        } elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $msg = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        }
    }
    if (empty($count)) {
        push_notification('danger', ['Vui lòng nhập số lượng'],'count');
        $check = 0;
    }
    if (empty($price)) {
        push_notification('danger', ['Vui lòng nhập giá phòng'],'price');
        $check = 0;
    }
    if (empty($name)) {
        $check = 0;
        push_notification('danger', ['Vui lòng nhập vào tên sản phẩm'],'name');
    }
    if($check == 0){
        header('Location: ?role=admin&mod=phong&action=create');
        die();
    }else if($check == 1){
        create_phong($name, $price, $description, $category_id, $count, $status, $thumb);
        push_notification('success', ['Tạo mới danh mục sản phẩm thành công'],"header");
        header('Location: ?role=admin&mod=phong');
    }
}

function deleteAction() {
    $id = $_GET['id_phong'];
    delete_phong($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=phong');
}

function updateAction()
{
    $id = $_GET['id_phong'];
    $prod = get_one_phong($id);
    $data['phong'] = $prod;
    if ($prod) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=phong');
    }
}

function updatePostAction()
{

    $id = $_GET['id_phong'];
    $prod = get_one_phong($id);
    if (!$prod) {
        header('Location: ?role=admin&mod=phong');
        die();
    }
    $target_dir = "public/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if ($_FILES["fileToUpload"]['size']== 0) {
        $thumb = $_POST['fileToUploads'];
    }else{
        $thumb = $_FILES["fileToUpload"]["name"];
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'png','jpeg'];
        if (!in_array($imageFileType, $allowedTypes)) {
            $msg = "Type is not allowed";
        } // Check if file already exists
        elseif (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
        } // Check file size
        elseif ($_FILES["fileToUpload"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
        } elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $msg = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        }
    }


    $name = $_POST['name'];
    $description = $_POST['description'];
    $loaiphong_id = $_POST['loaiphong_id'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $status = $_POST['status'];

    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên sản phẩm'
        ],'name');
        header('Location: ?role=admin&mod=phong&action=update&id_phong=' . $id);
    }
    update_phong($id, $name, $price, $description, $loaiphong_id, $count, $status, $thumb);
    push_notification('success', ['Chỉnh sửa sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=phong');
}