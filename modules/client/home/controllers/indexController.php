<?php

function construct() {
    // request_auth(false);
    load_model('index');
}

function indexAction() {

    $data['rooms']= get_list_room(); 
    
 
//     // $data['users']= get_auth();
//     show_array(get_auth());
// die;
    load_view('index',$data);
}
// function indexPostAction(){
    
//     $data['users']= get_one_user($id); 

//     load_view('index',$data);
// }






