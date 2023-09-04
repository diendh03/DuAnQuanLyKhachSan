<?php get_header('', 'Trang chủ');

?>
<?php $notifications = get_notification(); ?>

<main class="content-detail">

    <div class="content1">
        <?php if(empty($notification)) :
        ?>
        
            <?php foreach ($notifications as $notification) : ?>
                <div class="error_booking">
                    <?php foreach ($notification['msgs'] as $msg) : ?>
                        <div style="color: white;padding: 20px;
  background-color: #f44336;
  margin-bottom: 15px;" class="alert alert-<?php echo $notification['type'] ?>" role="alert"><?php echo $msg ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        
        <?php endif ?>
        <form action="" method="POST" enctype="multipart/form-data">


            <div class="content__product--detail row row-12">
                <div class="product__detail--img--box col-6">
                    <img src="public/uploads/<?= $room_detail['thumb'] ?>" alt="" class="product__detail--img">
                    <div class="product__description--box">
                        <label class="product__description--label">Mô tả phòng:</label>
                        <p class="product_description">
                            <?= $room_detail['description'] ?>
                        </p>
                    </div>
                </div>


                <div class="product__detail--info--box col-6">
                    <p class="product__name">
                        <?= $room_detail['title'] ?>
                    </p>
                    <div class="product__quantity--box">
                        <label class="product__quantity--label">Giá phòng:</label>
                        <p class="product__quantity">
                            <input type="text" readonly value="<?= $room_detail['price'] ?>$" class="type1" name="price">

                        </p>
                    </div>
                    <div class="product__quantity--box">
                        <label class="product__quantity--label">Loại phòng:</label>
                        <p class="product__quantity">
                            <input type="hidden" name='loaiPhong_id' value="<?= $room_detail['loaiphong_id'] ?>">
                            <input type="text" value="<?= $room_detail['name'] ?>" class="type1" readonly>


                        </p>
                    </div>
                    <div class="product__quantity--box">
                        <label class="product__quantity--label">Số lượng phòng còn:</label>
                        <p class="product__quantity">
                            <input type="text" readonly value="<?= $room_detail['count'] ?>" class="type1" name="slPhong">

                        </p>
                    </div>
                    <div class="product__quantity--box">
                   
                        <p class="product__quantity">
                            <input type="text" hidden value="1" class="type1" name="status">

                        </p>
                    </div>





                    <div class="product__quantity--box">
                        <label class="product__quantity--label"> Ngày đặt </label>
                        <p class="product__quantity">
                            <input type="date" max="" class="type1" name="ngayDat">

                        </p>

                    </div>
                    <div class="product__quantity--box">
                        <label class="product__quantity--label"> Ngày trả </label>

                        <p class="product__quantity">
                            <input type="date" max="" class="type1" name="ngayTra">

                        </p>

                    </div>
                    <?php if (isset($_SESSION['auth']['role']) && $_SESSION['auth']['role'] == 1) { ?>
                        <div class="product__buy--function">

                            <input type="hidden" name="id_user" value="<?= $_SESSION['auth']['id'] ?>">
                            <input type="hidden" name="id_phong" value="<?= $room_detail['id'] ?>">
                            <a href="?role=client&mod=detail&action=booking&id_room=<?= $room_detail['id'] ?>">
                                <button class="product__buy--function--buy--now">Đặt Phòng
                                    Ngay</button>
                            </a>





                        </div>
                    <?php } else { ?>

                    <?php } ?>



                </div>
            </div>

        </form>


    </div>



    </div>
</main>

<?php get_footer() ?>