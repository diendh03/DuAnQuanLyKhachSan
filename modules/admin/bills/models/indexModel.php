
<?php
    function get_bill_id_user(){
        $result = db_fetch_array("SELECT b.id_bill, b.id_user, b.id_phong, b.price, b.ngay_thue, b.ngay_tra,b.tong_tien,b.status,p.title, lp.name,u.full_name,u.email,u.numberphone,u.id from bills b inner join users u on b.id_user = u.id
        INNER join phong p on b.id_phong = p.id 
         INNER join loaiphong lp on b.loaiPhong_id = lp.id
       
       
        ");
        return $result;
    }
    function update_bill($id){
        $result = db_update('bills',[
            'status' => 2

        ],"id_bill=$id");
        return $result;
    }
    function delete_bill() {
        db_delete('bills', "ngay_tra < now()");
        return true;
    }
    
?>  