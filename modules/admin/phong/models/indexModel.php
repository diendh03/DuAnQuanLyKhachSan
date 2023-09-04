<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }
function get_list_phongs() {
    $result = db_fetch_array("SELECT id,loaiphong_id,create_id,count,price,title,description,thumb,status,created_at FROM phong");
    return $result;
}

function get_one_phong($id) {
    $result = db_fetch_row("SELECT id,loaiphong_id,create_id,count,price,title,description,thumb,status,created_at FROM phong WHERE id = $id ");
    return $result;
}

function create_phong($name,$price, $description,$category_id,$count,$status,$thumb) {
    $user = get_auth();
    $id = db_insert('phong', [
        'loaiphong_id' => $category_id,
        'create_id' => $user['id'],
        'count' => $count,
        'price' => $price,
        'title' => $name,
        'description' => $description,
        'status' => $status,
        'thumb' => $thumb,
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_phong($id,$name,$price, $description,$loaiphong_id,$count,$status,$thumb) {
    db_update('phong', [
        'loaiphong_id' => $loaiphong_id,
        'count' => $count,
        'price' => $price,
        'title' => $name,
        'description' => $description,
        'status' => $status,
        'thumb' => $thumb
    ], "id = $id");
    return true;
}

function delete_phong($id) {
    db_delete('phong', "id = $id");
    return true;
}

