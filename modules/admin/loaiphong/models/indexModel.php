<?php
function get_list_loaiphongs() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `loaiphong` c JOIN `users` u ON c.create_id = u.id");
    return $result;
}

function get_one_loaiphong($id) {
    $result = db_fetch_row("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `loaiphong` c JOIN `users` u ON c.create_id = u.id WHERE c.id = $id");
    return $result;
}

function create_loaiphong($name, $description) {
    $user = get_auth();
    $id = db_insert('loaiphong', [
        'name' => $name,
        'description' => $description,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_loaiphong($id, $name, $description) {
    db_update('loaiphong', [
        'name' => $name,
        'description' => $description
    ], "id = $id");
    return true;
}

function delete_loaiphong($id) {
    db_delete('loaiphong', "id = $id");
    return true;
}