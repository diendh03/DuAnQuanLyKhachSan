<?php get_header('', 'Danh sách hóa đơn') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Quản lý hóa đơn</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Danh sách hóa đơn
                            <span class="d-block text-muted pt-2 font-size-sm">Danh sách các hóa đơn có trên hệ thống</span>
                        </h3>
                    </div>
                    
                    <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="?role=admin&mod=bills&action=lammoi" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Làm mới</a>
                    <!--end::Button-->
                </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #1">ID hóa đơn</th>
                               
                                <th title="Field #2">Thông tin người đặt</th>
                                
                              
                              
                                <th title="Field #4">Ngày đặt phòng</th>
                                <th title="Field #4">Ngày trả phòng</th>
                               
                                <th title="Field #4">Tổng tiền</th>
                               
                                <th title="Field #4">Trạng thái</th> 
                                <th title="Field #4">Chức năng</th> 
                                <th title="Field #2">Thông tin phòng</th>

                                <!-- <th title="Field #4">   </th>  -->
                                <!-- <th title="Field #5">Mật khẩu</th>
                                <th title="Field #6">Vai Trò</th>
                                <th title="Field #7">Hành Động</th>
                                <th title="Field #8">Ngày tạo</th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bills as $bill) : ?>
                                <tr>
                                    <td><?php echo ($bill['id_bill']) ?></td>
                                    <td>
                                      
                                        Tên:<?php echo ($bill['full_name']) ?> <br>
                                        Mail:<?php echo ($bill['email']) ?> <br>
                                        SĐT: <?php echo ($bill['numberphone']) ?>
                                </td>
                                    <td><?php echo ($bill['ngay_thue']) ?></td>
                                    <td><?php echo ($bill['ngay_tra']) ?></td>   
                                    <td><?php echo ($bill['tong_tien']) ?>VNĐ</td>   
                                    <td >

                                   
                                                        
                                    <?php if($bill['status'] == 1){?>
                        <div class="btn btn-warning">
                                Đang xử lý
                        </div>
                        
                        <a href="?role=admin&mod=bills&action=update&id_bill=<?php echo $bill['id_bill'] ?>"  >
                            <button class="btn btn-primary" style="width: 95.72px;">
                                Cập nhật
                            </button>
                        </a>
                        <?php }else if($bill['status'] == 2){?>
                            <button class="btn btn-primary">
                            Đặt thành công
                            </button>
                            
                            <?php }?>
                                            
                                       
                                </td>   

                                    <td>
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            
                                            <a href="?role=admin&mod=users&action=delete&id_user=<?php echo $user['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $user['full_name'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')" class="btn btn-sm btn-clean btn-icon" title="Delete"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg> </span> </a>
                                        </span>
                                    </td> -->
                                    <td>
                                        Id phòng: <?php echo ($bill['id_phong']) ?> <br>
                                        Loại phòng: <?php echo ($bill['name']) ?> <br>
                                        Tên phòng: <?php echo ($bill['title']) ?> <br>
                                        Giá phòng trên ngày: <?php echo ($bill['price']) ?>VNĐ <br>
                                </td>   
                                 
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>