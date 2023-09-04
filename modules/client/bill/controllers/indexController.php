<?php 
    function construct(){
        request_auth();
        load_model('index');
    }
    function indexAction(){
        $id = $_GET['id_user'];
        $data['bills'] = get_bill_id_user($id);
        load_view('index',$data);
    }
    function deleteAction(){
        $id_user = $_GET['id_user'];
        $id = $_GET['id_bill'];
        delete_bill($id);
        push_notification('success', ['Xoá đơn đặt phòng thành công'],'header');
        header("Location: ?role=client&mod=bill&id_user=$id_user");
    }
?>