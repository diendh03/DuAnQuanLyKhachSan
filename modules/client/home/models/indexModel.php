<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}
function get_list_room(){
    $result = db_fetch_array("SELECT * FROM `phong` limit 9 ");
    return $result;
}
function get_one_user($id){
    // $id = $_GET['id_user'];
    $result = db_fetch_row("SELECT * FROM `users` WHERE id ='$id'");
    return $result;
}