



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House hotel</title>
    <link rel="shortcut icon" href="public/images/logo.png" type="image/x-icon">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
        integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
<!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/detail.css">
    <style>
        .pass{
            border: none;
            padding: 10px;
        }
        .pass:focus{
            border: none;
            background-color: white;
        }
        .card .img{
    margin-top: 20px;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
    text-align: center;
    height: 375px;
}
.card .img img{
    width: 100%;
    object-fit: cover;
    transform: scale(1);
    transition: 0.5s;
    height: 375px;
    /* display: none; */
}
.content1{
        padding-top: 60px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 150px 0px;
    }
    .show_product{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 32px;
    padding: 50px;
    width: 1500px;
    margin: auto;
}
    .content-detail{
        background-color: rgb(226, 226, 226);
        
    }
    .anh-dai-dien img{
        border: 0.25px solid white;
    width: 40px;
    border-radius: 100%;
    overflow: hidden;
    height: 40px;
    object-fit: cover;
    display: block;
    }
    .content2{
        padding: 80px;
            max-width: 1200px;
            margin: 0 auto;
                background-color: rgb(226, 226, 226);   
        margin-bottom: 20px;
    }
    /* Customer */
    .breadcrumb {
            text-align: center;
            margin-block: 40px 20px;
            
            
        }

        .breadcrumb a {
            text-decoration: none;
            color: #121212;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
        }

        .breadcrumb a:hover {
            color: rgb(253, 74, 74);
        }

        .breadcrumb-title {
            text-decoration: none;
            color: rgb(157, 157, 157);
            font-size: 16px;
            font-weight: 600;
        }

        .section__info {
            display: flex;
        }

        .section__info--menu {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -ms-border-radius: 6px;
            -o-border-radius: 6px;
            overflow: hidden;
        }

        .info--menu__img--box {
            width: 200px;
            height: 200px;
            border: 50%;
            margin-bottom: 20px;
        }
        .info--menu__img--box img{
            width: 100%;
        }
        .info--menu__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info--menu__username--box {
            margin-bottom: 20px;
        }

        .info--menu__username {
            font-size: 20px;
            font-weight: 600;
        }

        .info--menu__function {
            margin-block: 20px;
        }

        .info--menu__function--box {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .info--menu__function--box:hover .info--menu__function--link,
        .info--menu__logout:hover .info--menu__logout--link {
            box-shadow: 0 2px 4px 1px rgba(0, 0, 0, 0.1);
            transform: scale(1.04);
            -webkit-transform: scale(1.04);
            -moz-transform: scale(1.04);
            -ms-transform: scale(1.04);
            -o-transform: scale(1.04);
        }
       
        .info--menu__function--link {
            /* border: none; */
            outline: none;
            border: none;
            /* background-color: #767070; */
            /* color: white; */
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 10px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            width: 100%;
            height: auto;
            transition: all 0.12s ease-in-out;
            -webkit-transition: all 0.12s ease-in-out;
            -moz-transition: all 0.12s ease-in-out;
            -ms-transition: all 0.12s ease-in-out;
            -o-transition: all 0.12s ease-in-out;
            font-size: 18px;
        }


        .info--menu__function--img--box {
            width: 40px;
            height: 40px;
        }

        .info--menu__function--img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .info--menu__function--label {
            margin-left: 10px;
            font-size: 16px;
            font-weight: 500;
            color: #121212;
        }

        .info--menu__logout {
            width: 100%;
            margin-top: 40px;
        }

        .info--menu__logout--link {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 10px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transition: all 0.12s ease-in-out;
            -webkit-transition: all 0.12s ease-in-out;
            -moz-transition: all 0.12s ease-in-out;
            -ms-transition: all 0.12s ease-in-out;
            -o-transition: all 0.12s ease-in-out;
        }

        .info--menu__logout--img--box {
            width: 40px;
            height: 40px;
        }

        .info--menu__logout--img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .info--menu__logout--label {
            margin-left: 10px;
            font-size: 16px;
            font-weight: 500;
            color: #121212;
        }

        .section__info--display {
            background-color: #fff;
            flex: 1;
            margin-left: 60px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -ms-border-radius: 6px;
            -o-border-radius: 6px;
            padding: 40px;
            line-height: 3;
        }

        .section__info--display--box {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .section__info--display--label {
            font-size: 18px;
            font-weight: 600;
            width: 160px;
        }

        .section__info--display--textContent {
            font-size: 18px;

        }
        .button_update{
           
    border: none;
    cursor: pointer;
    padding: 10px;
    background-color: #767070;
    color: white;
    transition: .5s;
    border-radius: 2px;

}
.button_update:hover{
    background-color: rgba(0, 0, 0, 0.7);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);

}
.type{
    outline: none;
}
.counter{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 200px;
    margin-right: 200px;
    margin-bottom: 50px;

    /* overflow: hidden; */
}
.menu_services{
    width: 135px;
    text-align: center;
    float: left;
    margin-right: 50px;
}
.box_icon_services{
    color: #c6c6c6;
    text-align: center;
    font-size: 60px;
    line-height: 60px;
    position: relative;
    top: 0px;
    transition: 0.2s;
    transition-duration: 0.2s;
    transition-timing-function: ease;
    transition-delay: 0s;
    transition-property: all;
    margin-bottom: 30px;
}
.menu_services a {
    text-decoration: none;
}
.menu_services a strong{
    display: block;
    font-weight: 400;
    margin-top: 14px;
    color: #433e3e;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: 0s;
    transition-property: all;
    transition: 0.3s;
    transform: translate(0px,0px);

}
.menu_services .box_icon_services :hover {
    transform: translate(0px,10px);
    color: #121212;
}

.menu_services :hover strong {
    color: red;
}
.hotel_location{
    display: flex;
    justify-content: space-between;
    width: 1400px;
   margin: auto;
}

.contact{
    width: 100%;
    margin-left: 100px;
    line-height: 2;
}
.heading1{
    font-size: 24px;
    margin-bottom: 10px;
}
.address{
    margin-bottom: 20px;
    
}
    </style>
</head>

<body>
    

        <header class="header">
            <div class="header__wrap">
                <div class="header__logo--box">
                    <a href="#">
                        <img src="public/images/logo.png" alt="main-logo" class="logo-box__img">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav--list">
                        <li class="header__nav--item active">
                            <a href="?role=client&mod=home" class="header__nav--item--link">Trang chủ</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="?role=client&mod=phong&action=loadviewPhong" class="header__nav--item--link">Phòng</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="#" class="header__nav--item--link">Tin tức</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="#" class="header__nav--item--link">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                
              
                <div class="header__account">
                 
                    <?php if(!isset($_SESSION['auth'])){?>
                    <a href="?role=client&mod=auth">
                        <button class="header__login--btn">Đăng nhập</button>
                    </a>
                    <a href="?role=client&mod=auth&action=register">
                        <button class="header__login--btn">Đăng ký</button>
                    </a>
                    <?php } else if($_SESSION['auth']['role'] == 2){?>
                        <a href="?role=admin">
                            <div class="anh-dai-dien">
                                <img src="assets/media/users/300_21.jpg" alt="">

                            </div>
                        </a>
                     
                        
                        <?php }else{?>
                            <a href="?role=client&mod=auth&action=customer&id_user=<?= $_SESSION['auth']['id']?>">
                            <div class="anh-dai-dien">
                                
                            <?php if(empty($_SESSION['auth']['thumb'])){?>
                                <img src="public/images/anhDaiDien.png" alt="avatar" class="header__user--img" />

                            
                            <?php }else{?>
                                <img src="public/uploads/<?= $_SESSION['auth']['thumb']?>" alt="avatar" class="header__user--img" />


                                <?php }?>
                                

                            </div>
                        </a>
                          
                            <?php }?>
                </div>
            </div>
        </header>
    


<main>
            <div class="content">
                
                <section class="section_1 section--banner">
                    <div class="section_1--banner--box">
                        <!-- <img src="public/images/slide1.webp" alt=""> -->
                       <iframe src="public/css/slider.html" ></iframe>
                     
                    </div>
                    <div class="bookRooms">
                        <div class="container">
                            <form action="" method="" class="form">
                                <div class="input-group">
                                    <label for="">Họ và tên</label>
                                    <input type="text" class="type">
                                </div>
                                
                                <div class="input-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" class="type">
                                </div>
                                <div class="input-group">
                                    <label for="">Ngày đặt phòng</label>
                                    <input type="date" class="type">
                                </div>
                                <div class="input-group">
                                    <label for="">Loại phòng</label>
                                    <select name="" id="" class="type">
                                      
                                        <option value="" class="item active">Phòng đơn</option>
                                        <option value="" class="item">Phòng đôi</option>
                                    </select>
                                </div>
                               
                                <div class="input-group">
                                    <label for="">Địa điểm</label>
                                    <input type="text" disabled placeholder="Ninh Bình">
                                </div>
                                <div class="input-group-button">
                                    <br>
                                    <button type="submit" class="button-bookRoom">
                                        Tìm kiếm
                                      
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </section>
                <section class="section_2 section--introduce">
                    <div class="section_2--introduce-box">
                        <div class="section_2--introduce-title">
                            <button class="section_2--title">
                                Chào Mừng Bạn Đến Với Ánh Dương Hotel
                            </button>
                            <p class="section_2--title1">
                                Tận Hưởng Kỳ Nghỉ Dưỡng Tại Khách Sạn Biển Sang Trọng Hàng Đầu Đông Nam Á
                            </p>
                        </div>
                        <div class="section_2--content letter-spacing">
                            Tọa lạc tại một trong những cung đường biển đẹp nhất Việt Nam, khách sạn Four Points by
                            Sheraton Danang theo phong cách nghỉ dưỡng với 36 tầng sẽ là điểm đến lý tưởng mới cho du
                            khách khi đến với thành phố biển xinh đẹp này. <br>
                            Từ ban công riêng tại mỗi phòng trong 390 phòng khách được thiết kế hiện đại pha lẫn cổ
                            điển, bạn có thể tận hưởng bình minh trên biển hay hoàng hôn trên vịnh Đà Nẵng cùng toàn
                            cảnh thành phố về đêm. Tất cả giường ngủ của khách sạn Four Points Danang được thiết kế và
                            cung cấp độc quyền chỉ dành cho thương hiệu này, với tên gọi Four Points by Sheraton Four
                            Comfort BedTM nhằm đem đến giấc ngủ sâu và thoải mái nhất cho quý khách. <br>
                            Xuyên suốt trong quá trình nghỉ dưỡng, du khách có thể nhâm nhi một tách cà phê hảo hạng tại
                            The Lounge trong sảnh chờ, dùng bữa tại nhà hàng The Eatery, hoặc chỉ đơn thuần là thư giãn
                            tại hồ bơi tầng thượng với một ly cocktail mát lạnh hay bia thủ công mát lạnh nằm trong bộ
                            sưu tập Best Brews tại Horizon Rooftop Bar. <br>
                         
                        </div>
                        <div class="section_2--img">
                            <img src="public/images/content-right.webp"
                                alt="">
                        </div>
                    </div>
                   
                  
                </section>
                <div class="product_box">
                    <div class="title_box">
                        <b></b>
                        <h3 class="title_product_box">Phòng Nghỉ</h3>
                        <b></b>
                    </div>
                    <div class="show_product">
                        <?php foreach($rooms as $room):?>
                          
                        <div class="card 1">
                            <div class="basicInfor">
                                <div class="title">
                                    <!-- <div class="category">Phòng lẻ</div> -->
                                    <div class="name"><?= $room['title']?></div>
                                    
                                </div>
                                <div class="img">
                                    <div class="item">
                                        <input type="radio" name="color" id="phong11">
                                        <img src="public/uploads/<?= $room['thumb']?>"
                                            alt="">
                                    </div>
                                    
                                </div>
                                
                                <div class="addcart">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                               
                                <div class="view_detail">
                                    <a href="?role=client&mod=detail&action=detail&id_room=<?= $room['id']?>&id_user=<?= $room['id_user']?>"> <button class="btn_view_detail">
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

                    <div class="hotel-services" >
                    <div class="hotel-services__title title_box" style="margin-top: 90px;">
                        <b></b>
                        <h3 class="title_product_box">Dịch Vụ</h3>
                        <b></b>
                    </div>
                    <h2 class="title_box" style="margin-top: -18px;" >(Bao Gồm Trong Giá)</h2>
                    <ul class="counter">
                        <li class="menu_services">
                            <a href="#">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-mug-saucer"></i>
                                </span>
                                <br>
                                <strong>Cà Phê Tối & Sáng </strong>
                            </a>
                        </li>
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-tv"></i>
                                </span>
                                <br>
                                <strong> Ti Vi </strong>
                            </a>
                        </li>
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-map"></i>
                                </span>
                                <br>
                                <strong>Bản Đồ Thành Phố</strong>
                            </a>
                        </li>
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-wifi"></i>
                                </span>
                                <br>
                                <strong>Wifi Miễn Phí</strong>
                            </a>
                        </li>
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <br>
                                <strong>Điện Thoại</strong>
                            </a>
                        </li>
                        </ul>
                        <ul class="counter">
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <!-- <i class="fa-solid fa-mug-saucer"></i> -->
                                    <!-- <i class="fa-regular fa-suitcase-rolling"></i> -->
                                    <i class="fa-solid fa-person-walking-luggage"></i>
                                </span>
                                <br>
                                <strong>Tủ Để Hành Lý
                                </strong>
                            </a>
                        </li>
                   
                    
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-solid fa-utensils"></i>
                                </span>
                                <br>
                                <strong>Nhà Hàng</strong>
                            </a>
                        </li>
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <i class="fa-regular fa-face-smile"></i>
                                    <!-- <i class="fa-solid fa-mug-saucer"></i> -->
                                </span>
                                <br>
                                <strong>Nụ Cười Của Chúng Tôi</strong>
                            </a>
                        </li>
                      
                        <li class="menu_services">
                            <a href="">
                                <span class="box_icon_services">
                                    <!-- <i class="fa-solid fa-mug-saucer"></i> -->
                                    <i class="fa-regular fa-notes-medical"></i>+
                                    <!-- <i class="fa-regular fa-face-smile"></i> -->
                                </span>
                                <br>
                                <strong>Tủ Thuốc Y Tế</strong>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                </div>
                <div class="location_hotel">
                    <div class="hotel-services__title title_box" style="margin-top: 90px;">
                        <b></b>
                        <h3 class="title_product_box">Vị Trí</h3>
                        <b></b>
                    </div>
                    <div class="hotel_location">
                       
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.593297168288!2d105.72882541485477!3d21.048953185987475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454593e86fd5b%3A0x93d430573c4ff812!2zMTEwIE5nLiA4MCDEkC4gWHXDom4gUGjGsMahbmcsIFh1w6JuIFBoxrDGoW5nLCBIw6AgTuG7mWksIDEwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1670337010471!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       <div class="contact">
                           <h1 class="heading1"> Địa điểm</h1>
                           <p class="address">
                               Khách sạn Hiện đại này nằm ở Phố Ave New York và cách Quảng trường Thời đại vài bước chân. Khách sạn cung cấp bữa sáng kiểu lục địa miễn phí hàng ngày, Wi-Fi miễn phí và đồ giải khát 24 giờ.
                           </p>
                           <p><i class='bx bx-map' style='color:#e82727' ></i>     110 ngõ 80 Xuân Phương Nam Từ Liêm Hà Nội</p>
                           <p><i class='bx bx-phone' style='color:#e82727'  ></i>     0787127502</p>
                           <p><i class='bx bxl-gmail' style='color:#e82727' ></i>     son@gmail.com</p>
                       </div>
                   </div>

                </div>


            



    </div>
    </main>
    <?php get_footer()?>