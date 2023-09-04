<?php
function get_bill_id_user($id){
    $result = db_fetch_array("SELECT b.id_bill, b.id_user, b.id_phong, b.price, b.ngay_thue, b.ngay_tra,b.tong_tien,b.status, p.thumb, lp.name from bills b inner join loaiphong lp on b.loaiPhong_id = lp.id
    INNER join phong p on p.id = b.id_phong where b.id_user = $id;");
    return $result;
}
function create_bill($price, $loaiPhong_id, $ngayDat, $ngayTra,$id_user,$id_phong) {
    // $user = get_auth();
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
    ]);
    return $id;
}
function delete_bill($id) {
    db_delete('bills', "id_bill = $id");
    return true;
}
