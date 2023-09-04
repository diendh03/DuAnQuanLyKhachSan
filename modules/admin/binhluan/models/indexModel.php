<?php

function get_list_comments(){
    $result = db_fetch_array("SELECT comments.id,comments.id_user,comments.description,comments.create_at,phong.title FROM comments inner join phong on comments.id_phong = phong.id");
    return $result;
}

function delete_comment($id){
    $result = db_delete('comments', "id=$id");
    return $result;
}