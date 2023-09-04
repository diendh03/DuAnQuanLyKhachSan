<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $item;
}
function create_user($name,$email,$numberphone,$password,$role,$thumb) {
    
    $id = db_insert('users', [
        'full_name' => $name,
        'email' => $email,
        'numberphone' => $numberphone,
        'password' => $password,
        'role' => $role,
        'thumb' => $thumb,
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}
function delete_user($id){
    $result = db_delete('users',"id = '$id'");
    return $result;
}
function get_count_user($email){
    $count_user = db_num_rows("SELECT * FROM users where email like '$email'");
    return $count_user;
}
function update_user($id,$name,$email,$phone,$password,$thumb){
    $result = db_update('users', [
        'full_name' => $name,
        'email' => $email,
        'numberphone' => $phone,
        'password' => $password,

        'thumb' => $thumb

    ], "id = $id");
    return $result;
}
