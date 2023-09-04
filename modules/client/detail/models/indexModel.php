

<?php
function get_list_bill_id($id){
    $result = db_fetch_array("SELECT * FROM `bills` where id_phong = $id" );
    return $result;
}
function get_one_room($id){
    $result = db_fetch_row("SELECT p.*,lp.name,lp.description as descripition FROM `phong` p join `loaiphong` lp on p.loaiphong_id = lp.id where p.id = $id ");
    return $result;
}
function get_one_user($id){
    // $id = $_GET['id_user'];
    $result = db_fetch_row("SELECT * FROM `users` WHERE id ='$id'");
    return $result;
}
function get_list_loai_phong(){
    $result = db_fetch_array("SELECT * FROM `loaiphong`");
    return $result;
}
function create_bill($price, $loaiPhong_id, $ngayDat, $ngayTra,$id_user,$id_phong,$status) {
    $user = get_auth();
    $date_diff= abs(strtotime($ngayTra)-strtotime($ngayDat));
    $date_diff2 = floor($date_diff /(86400));
    // show_array($date_diff2);
    $all_price = $price*$date_diff2;
    $id = db_insert('bills', [
        
        'price' => $price,
        'loaiPhong_id'=> $loaiPhong_id,
        'ngay_thue' => $ngayDat,
        'ngay_tra' => $ngayTra,
        'id_user' => $id_user,
        'id_phong' => $id_phong,
        'create_at' => date('Y-m-d H:i:s'),
        'tong_tien' => $all_price,
        'status' => $status
    ]);
    return $id;
}
function get_list_comment($id){
    
    $result = db_fetch_array("SELECT c.*, u.thumb, u.full_name FROM `comments` c join `users` u on c.id_user =u.id WHERE id_phong = $id");
    return $result;
}
function create_comment($so_sao,$comment,$id_user,$id_phong){
    $id = db_insert('comments', [
        'so_sao' => $so_sao,
        'description'=> $comment,
        'id_user' => $id_user,
        'id_phong' => $id_phong,
        'create_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}
