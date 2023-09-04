

<?php
function get_auth_user_login($email,$pass){
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");
    return $result;
}

function create_user($fullname, $email,$phone,$password,$role){
   
    $insert_user = db_insert('users',
    [
        'full_name' => $fullname,
        'email' => $email,
        'numberphone' => $phone,
        'password' => $password,
        'role' => $role,
        'created_at' => date('Y-m-d H:i:s')
    ]
    );
    return $insert_user;
}
function get_count_user($email){
    $count_user = db_num_rows("SELECT * FROM users where email like '$email'");
    return $count_user;
}
function get_one_user($id){
    // $id = $_GET['id_user'];
    $result = db_fetch_row("SELECT * FROM `users` WHERE id ='$id'");
    return $result;
}
function update_user($id,$name,$email,$phone,$password,$thumb){
db_update("users",
        [
            'full_name' => $name,
            'email' => $email,
            'numberphone' => $phone,
            'password' => $password,
            'thumb' => $thumb,
        ]
    ,"id=$id");
    
        }

