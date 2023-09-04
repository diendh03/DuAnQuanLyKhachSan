
<?php
function construct()
{
    request_auth();
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function indexAction()

{
    // $id = $_GET['id_user'];
    $bills = get_bill_id_user();
    //    show_array($list_users);
    $data['bills'] = $bills;
    load_view('index', $data);
}

function updateAction(){
    $id = $_GET['id_bill'];
    update_bill($id);
    header("location:?role=admin&mod=bills");
}
function lammoiAction(){
   
    delete_bill();
    header("location:?role=admin&mod=bills");
}
?>