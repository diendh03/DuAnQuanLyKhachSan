<?php


function construct() {
    // request_auth(false);
    load_model('index');
}
function indexAction(){
    $notifications = get_notification();
    // request_auth(false);
    load_view('index', [
        "notifications" => $notifications
    ]);
}
function indexPostAction(){
    request_auth(false);
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if(empty($email) || empty($pass)){
        push_notification('danger', ['Bạn vui lòng nhập đủ thông tin'],'header');
        header('Location: ?role=client&mod=auth');
    }else{
        $user= get_auth_user_login($email,$pass);
      
        if ($user == true) {
            // show_array($auth);
            // die;
            push_auth($user);
            header('Location: ?role=client');
        } else {
            push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác'],'header');
            header('Location: ?role=client&mod=auth');
        }
    }

    

}
function logoutAction(){
    request_auth();
    // session_start();
    // load_view('signout');
    // session_start();
    // request_auth(false);

    unset($_SESSION['auth']);
    
    header("location: ?role=client");
}
function registerAction(){
    $notifications = get_notification();
    // request_auth(false);
    load_view('register', [
        "notifications" => $notifications
    ]);

}
function registerPostAction(){
    // request_auth(false);
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $count_user = get_count_user($email);
    // var_export($count);
    if(empty($fullname) || empty($email) ||  empty($phone) || empty($password) ){
        push_notification('danger', ['Bạn vui lòng nhập đủ thông tin'],'header');
        header('Location: ?role=client&mod=auth&action=register');
    }else if($count_user > 0){
        push_notification('danger', ['Email đã được đăng ký'],'header');
        // var_export($count_user);
        header('Location: ?role=client&mod=auth&action=register');
    } 
    else{
        create_user($fullname,$email,$phone,$password,$role);
        push_notification('primary',['đăng ký thành công'],'header');
        header('Location: ?role=client&mod=auth&action=register');
        // var_export($count_user);

    }
}

function customerAction(){
    $id = $_GET['id_user'];
    $data['user']= get_one_user($id); 
   
    load_view('customer',$data);
}

function updateAction(){
    $id = $_GET['id'];
    $update_user = get_one_user($id);
    $data['user'] = $update_user;
    load_view('update',$data);
    
}
function updatePostAction(){
    $id = $_GET['id'];
    $update_user = get_one_user($id);
    if (!$update_user) {
        header('Location: ?role=client&mod=auth');
        die;
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $target_dir = "public/uploads/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
    if ($_FILES["thumb"]['size']== 0) {
        $thumb = $_POST['thumbs'];
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
    
        header("location: ?role=client&mod=auth&action=customer&id_user=$id");
    }


}

