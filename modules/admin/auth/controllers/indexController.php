<?php

function construct() {
   
    load_model('index');
}

function indexAction() {
    request_auth(false);
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function indexPostAction() {
    request_auth(false);
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu'],'header');
        header('Location: ?role=admin&mod=auth');
    }else{
        // xử lý đăng nhập
        $auth = get_auth_user($username, $password);
        if ($auth) {
            push_auth($auth);
            header('Location: ?role=admin');
        } else {
            push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác'],'header');
            header('Location: ?role=admin&mod=auth');
        }
    }
}
function signoutAction(){
    request_auth();
    // session_start();
    // load_view('signout');
    // session_start();
    // request_auth(false);

    unset($_SESSION['auth']);
    
    header("location: ?role=client");
}