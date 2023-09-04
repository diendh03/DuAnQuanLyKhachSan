<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['loaiphongs'] = get_list_loaiphongs();
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}

function createPostAction() {
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục'],'header');
        header('Location: ?role=admin&mod=loaiphong&action=create');
        die();
    }
    create_loaiphong($name, $description);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=loaiphong');
}

function deleteAction() {
    $id = $_GET['id_cate'];
    delete_loaiphong($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=loaiphong');
}

function updateAction()
{
    $id = $_GET['id_cate'];
    $cate = get_one_loaiphong($id);
    $data['loaiphong'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=loaiphong');
    }
}

function updatePostAction() {
    $id = $_GET['id_cate'];
    $cate = get_one_loaiphong($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=loaiphong');
        die();
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ],'header');
        header('Location: ?role=admin&mod=loaiphong&action=update&id_cate='.$id);
    }
    update_loaiphong($id, $name, $description);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=loaiphong');
}