<?php get_header('', 'header') ?>

<main>
    <div class="content">
        <div class="breadcrumb">
            <p class="breadcrumb-title"><a href="./index.php">Trang chủ</a> - Phòng</p>
        </div>

        <section class="section">
            <div class="section__col_2" style="font-weight: bold;">
                <h3>Danh Sách Loại Phòng</h3>
                <ul class="category--list">
                   

                        <li class="category--item">
                            <a href="?role=client&mod=phong&action=loadviewPhong" class="category--item--link">Tất cả phòng</a>
                        </li>
                  


                </ul>

               
                <ul class="category--list">
                    <?php foreach ($listrooms as $listroom) : ?>

                        <li class="category--item">
                            <a href="?role=client&mod=phong&action=loadviewPhong&id_loaiphong=<?=$listroom['id'] ?>" class="category--item--link"><?= $listroom['name'] ?></a>
                        </li>
                    <?php endforeach ?>


                </ul>
              
            </div>
            <div class="section__col_10">

            <div class="show_product" style="width: 1000px;">
                        <?php foreach($rooms as $room):?>

                        <div class="card 1">
                            <div class="basicInfor" style="height: 300px;">
                                <div class="title">
                                    <!-- <div class="category">Phòng lẻ</div> -->
                                    <div class="name"><?= $room['title']?></div>
                                    
                                </div>
                                <div class="img">
                                    <div class="item">
                                        <input type="radio" name="color" id="phong11">
                                        <img src="public/uploads/<?= $room['thumb']?>"
                                            alt="" style="height: 200px;">
                                    </div>
                                    
                                </div>
                                
                                <div class="addcart">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                                <div class="view_detail">
                                    <a href="?role=client&mod=detail&action=detail&id_room=<?= $room['id']?>"> <button class="btn_view_detail">
                                            Xem Thêm <i class="fa-solid fa-right-to-bracket"></i>
                                        </button> </a>
                                </div>

                            </div>
                            <div class="more">
                                <div class="stars">
                                    <i class="fa-regular fa-star text_yellow"></i>
                                    <i class="fa-regular fa-star text_yellow"></i>
                                    <i class="fa-regular fa-star text_yellow"></i>
                                    <i class="fa-regular fa-star text_yellow"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="price"><?= $room['price']?> $</div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    
                        
                       

                       
                        
                    </div>
            </div>
        </section>
    </div>


</main>

<?php get_footer() ?>