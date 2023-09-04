<?php
function get_list_room()
{
    $result = db_fetch_array("SELECT * FROM `phong` ");
    return $result;
}
function get_one_user($id)
{
    // $id = $_GET['id_user'];
    $result = db_fetch_row("SELECT * FROM `users` WHERE id ='$id'");
    return $result;
}
function get_list_loaiphong()
{
    $result = db_fetch_array("SELECT * FROM `loaiphong` ");
    return $result;
}
function get_list_room_id($id){
    //  = $_GET['id_loaiphong'];
    $result = db_fetch_array("SELECT * FROM `phong` WHERE loaiphong_id = $id");
    return $result;
}
