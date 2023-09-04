<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    request_auth();
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function createAction() {
    load_view('create');
}
function addAction() {
    echo "Thêm dữ liệu";
}
function createPostAction() {
    $name = $_POST['name'];
    // $description = $_POST['description'];
    $email = $_POST['email'];
    $numberphone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $count_user = get_count_user($email);
    // $thumb = $_FILES['thumb'];
    $target_dir = "public/uploads/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
    $thumb = $_FILES["thumb"]["name"];
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'png','jpeg'];
    if (!in_array($imageFileType, $allowedTypes)) {
        $msg = "Type is not allowed";
    } // Check if file already exists
    elseif (file_exists($target_file)) {
        $msg = "Sorry, file already exists.";
    } // Check file size
    elseif ($_FILES["thumb"]["size"] > 5000000) {
        $msg = "Sorry, your file is too large.";
    } elseif (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
        $msg = "The file " . basename($_FILES["thumb"]["name"]) . " has been uploaded.";
    }
    if (empty($name) || empty($email) || empty($numberphone) || empty($password) || empty($role) || empty($thumb) ) {
        push_notification('danger', ['Vui lòng nhập đủ thông tin'],'header');
        header('Location: ?role=admin&mod=users&action=create');
        die();
    }else if($count_user > 0){
        push_notification('danger', ['Email đã tồn tại'],'header');
        // var_export($count_user);
        header('Location: ?role=admin&mod=users&action=create');
        die;
    } 

    create_user($name, $email,$numberphone,$password,$role,$thumb);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=users');
}
function updateAction() {
    $id = $_GET['id_user'];
    $update_user = get_user_by_id($id);

     $data['update_user'] = $update_user;
    load_view('update', $data);


    
}
function updatePostAction(){
    $id = $_GET['id_user'];
  
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $target_dir = "public/uploads/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
    if ($_FILES["thumb"]['size']== 0) {
        $thumb = $_POST['thumb_remove'];
    }else{
        $thumb = $_FILES["thumb"]["name"];
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'png','jpeg'];
        if (!in_array($imageFileType, $allowedTypes)) {
            $msg = "Type is not allowed";
        } // Check if file already exists
        elseif (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
        } // Check file size
        elseif ($_FILES["thumb"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
        } elseif (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
            $msg = "The file " . basename($_FILES["thumb"]["name"]) . " has been uploaded.";
        }
    }
    if(empty($name) || empty($email) || empty($password) || empty($phone) ){
        push_notification('danger',['Vui lòng nhập đủ thông tin'],'header');
        header('location: ?role=client&mod=auth&action=update');
    }else{
        update_user($id,$name,$email,$phone,$password,$thumb);
        // push_notification('success',['Chỉnh sửa thành công'],'header');
    //     $user=array(
    //         'id'=>$id,
    //         'full_name'=>$name,
    //         'email'=>$email,
    //         'password'=>$password,
    //         'numberphone'=>$phone,
    //         'thumb'=>$thumb,
    //         'role' => '1',
    //         'created_at' => date('Y-m-d H:i:s')
    //     );
        
    //   push_auth($user);
    //   show_array(push_auth($user))  ;
    //   die;
    
        header("location: ?role=admin&mod=users");
    }

}
function deleteAction(){
    $id = $_GET['id_user'];
    delete_user($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công'],'header');
    header('Location: ?role=admin&mod=users');
}

