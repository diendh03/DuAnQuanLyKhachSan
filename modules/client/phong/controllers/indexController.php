

<?php

function construct() {
    // request_auth(false);
    load_model('index');
}

function indexAction() {

    load_view('index');
}
function loadviewPhongAction(){
    $data['listrooms']=get_list_loaiphong();
    
    if(!isset($_GET['id_loaiphong'])){
        $data['rooms']= get_list_room();
    }else if(isset($_GET['id_loaiphong'])){
        $id= $_GET['id_loaiphong'];
        $data['rooms']= get_list_room_id($id);  
    }
    load_view('index',$data);

}