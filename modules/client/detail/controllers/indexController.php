<?php


function construct() {
    load_model('index');
}
function indexAction(){
    
    load_view('index');
}

function detailAction(){
    $id = $_GET['id_room'];
    // $id_user = $_GET['id_user'];
    // $data['user'] = get_one_user($id_user);
    $data['room_detail']= get_one_room($id);
    $data['comment'] = get_list_comment($id);
    
    load_view('index',$data);

}
function bookingAction(){
    $id = $_GET['id_room'];
    $data['list_loai_phong'] = get_list_loai_phong();
    $data['room_detail']= get_one_room($id);
    $data['bills'] = get_list_bill_id($id);
    load_view('booking',$data);
}
function bookingPostAction(){
    $check= 0;
    $id = $_GET['id_room'];
    $bills = get_list_bill_id($id);
    $id_user = $_POST['id_user'];
    $id_phong = $_POST['id_phong'];
    $price = $_POST['price'];
    $loaiPhong_id = $_POST['loaiPhong_id'];
    // $slPhong = $_POST['slPhong'];
    $status = $_POST['status'];
    $time =time();
    $today = date("Y-m-d",$time);
    $ngayDat = $_POST['ngayDat'];
    $ngayTra = $_POST['ngayTra'];
    $_SESSION['booking'] = [];
    $array_booking = [$price, $loaiPhong_id, $ngayDat, $ngayTra,$id_user,$id_phong];
    array_push($_SESSION['booking'],$array_booking);
    // if($slPhong == 0){
    //     push_notification('danger', ['Phòng đã được đặt hết'],'header');
    //     header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
    // }else
    if(empty($ngayDat) || empty($ngayTra)){
        push_notification('danger', ['Bạn vui lòng nhập đủ thông tin'],'header');
        header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
    }else if(strtotime($ngayDat) < strtotime($today)){
        push_notification('danger', ['Ngày bắt đầu thuê không được nhỏ hơn thời gian hiện tại'],'header');
        header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
    }else if(strtotime($ngayDat) > strtotime($ngayTra)){
        push_notification('danger', ['Ngày trả phải lớn hơn ngày đặt'],'header');
        header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
    }else{
        foreach ($bills as $bill) {
            if( strtotime($bill['ngay_thue']) <= strtotime($ngayTra) && strtotime($ngayTra) < strtotime($bill['ngay_tra'])){
                $check = 1;
            }else if(strtotime($bill['ngay_thue']) < strtotime($ngayDat) && strtotime($ngayDat) <= strtotime($bill['ngay_tra'])){
                $check = 1 ;
            }else if(strtotime($ngayDat) < strtotime($bill['ngay_thue']) && strtotime($bill['ngay_thue']) < strtotime($ngayTra)&& strtotime($bill['ngay_tra']) ){
                $check = 1;
            }
        }
        if($check == 1){
            push_notification('danger', ['Đã có người đặt phòng'],'header');
            header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
        }else if($check == 0 ){
            create_bill($price, $loaiPhong_id, $ngayDat, $ngayTra,$id_user,$id_phong,$status);
            push_notification('primary',['Đơn bạn của bạn đang được xử lí'],'header');
            header("Location: ?role=client&mod=detail&action=booking&id_room=$id");
        }
    }
    
    
    // show_array($_SESSION['booking']);
}

function detailPostAction(){
    $id = $_GET['id_room'];
    $so_sao = $_POST['rating'];
    $description = $_POST['comment'];
    $id_user = $_POST['id_user'];
    $id_phong = $_POST['id_phong'];
    if(empty($description) || empty($so_sao) ){
        // create_bill($price, $loaiPhong_id, $ngayDat, $ngayTra,$id_user,$id_phong);
        push_notification('primary',['Vui lòng điền đầy đủ thông tin'],'header');
        header("Location: ?role=client&mod=detail&action=detail&id_room=$id");
    }else{
        create_comment($so_sao,$description,$id_user,$id_phong);
        header("Location: ?role=client&mod=detail&action=detail&id_room=$id");
    }

}
