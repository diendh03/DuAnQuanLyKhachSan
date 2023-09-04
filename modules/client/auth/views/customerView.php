<?php


?>
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
            outline: none;
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
            outline: none;

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
                            <a href="?role=client" class="header__nav--item--link">Trang chủ</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="?role=client&mod=phong" class="header__nav--item--link">Phòng</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="#" class="header__nav--item--link">Tin tức</a>
                        </li>
                        <li class="header__nav--item">
                            <a href="#" class="header__nav--item--link">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__search--box">
                    <form action="" method="post">
                        <input type="text" placeholder="Tìm kiếm ..." class="header__search--input">
                        <button type="submit" class="header__search--box--search--icon--box">
                            <i class="fa-solid fa-magnifying-glass header__search--box--search--icon"></i>
                        </button>
                    </form>
                </div>
                <div class="header__cart--box">
                    <a href="">
                        <i class="fa-sharp fa-solid fa-cart-shopping .header__cart--box--img"></i>
                        <!-- <img src="https://tingtong.vn/assets/images/nav1.svg" alt="cart" class="header__cart--box--img"> -->
                    </a>
                </div>
                <div class="header__account">
                 
                    <?php if(!isset($user)){?>
                    <a href="?role=client&mod=auth">
                        <button class="header__login--btn">Đăng nhập</button>
                    </a>
                    <a href="?role=client&mod=auth&action=register">
                        <button class="header__login--btn">Đăng ký</button>
                    </a>
                    <?php } else if($user['role'] == 2){?>
                        <a href="?role=admin">
                            <div class="anh-dai-dien">
                                <img src="assets/media/users/300_21.jpg" alt="">

                            </div>
                        </a>
                     
                        
                        <?php }else{?>
                            <a href="?role=client&mod=auth&action=customer&id_user=<?= $user['id']?>">
                            <div class="anh-dai-dien">
                                
                            <?php if(empty($user['thumb'])){?>
                                <img src="public/images/anhDaiDien.png" alt="avatar" class="header__user--img" />

                            
                            <?php }else{?>
                                <img src="public/uploads/<?= $user['thumb']?>" alt="avatar" class="header__user--img" />


                                <?php }?>
                                

                            </div>
                        </a>
                          
                            <?php }?>
                </div>
            </div>
        </header>
    


<div class="content2">
            <div class="breadcrumb">
                <p class="breadcrumb-title"><a href="./index.php">Trang chủ</a> - Thông tin cá nhân</p>
            </div>
            <section class="section__info">

                <div class="section__info--menu">
                <div class="info--menu__img--box">

                    <?php if(empty($user['thumb'])){?>
                        <img src="public/images/anhDaiDien.png" alt="avatar" class="header__user--img" />

                    
                    <?php }else{?>
                        <img src="public/uploads/<?= $user['thumb']?>" alt="avatar" class="header__user--img" />


                        <?php }?>
                        </div>
                    <div class="info--menu__username--box">
                        <p class="info--menu__username"></p>
                    </div>

                   
                        <div class="info--menu__function">
                            <div class="info--menu__function--box">
                                <a href="?role=client&mod=auth&action=update&id=<?= $user['id']?>" class="info--menu__function--link">
                                    <div class="info--menu__function--img--box">
                                        <img src="public/images/information.jpg" alt="" class="info--menu__function--img">
                                    </div>
                                    <p class="info--menu__function--label">Chỉnh sửa thông tin cá nhân</p>
                                </a>
                            </div>
                            <div class="info--menu__function--box">
                                <a href="?role=client&mod=bill&id_user=<?= $user['id']?>" class="info--menu__function--link">
                                    <div class="info--menu__function--img--box">
                                        <img src="public/images/cart_shop.jpg" alt="" class="info--menu__function--img">
                                    </div>
                                    <p class="info--menu__function--label">Quản Lý đặt phòng</p>
                                </a>
                            </div>
                            <div class="info--menu__function--box">
                                <a href="" class="info--menu__function--link">
                                    <div class="info--menu__function--img--box">
                                        <img src="public/images/wallet.jpg" alt="" class="info--menu__function--img">
                                    </div>
                                    <p class="info--menu__function--label">Ví của tôi</p>
                                </a>
                            </div>
                        </div>
                  
                        
                 

                    <div class="info--menu__logout">
                        <a href="?role=client&mod=auth&action=logout" class="info--menu__logout--link">
                            <div class="info--menu__logout--img--box">
                                <img src="public/images/signout.jpg" alt="" class="info--menu__logout--img">
                            </div>
                            <p class="info--menu__logout--label">Đăng xuất
                      
                            </p>
                        </a>
                    </div>
                </div>
                <div class="section__info--display">
                    <div class="section__info--display--box">
                        <label class="section__info--display--label">Họ và tên:</label>
                        <p class="section__info--display--textContent">
                            <?= $user['full_name']?>
                        </p>
                    </div>
                    <div class="section__info--display--box">
                        <label class="section__info--display--label">Email:</label>
                        <p class="section__info--display--textContent">
                        <p class="section__info--display--textContent">
                            <?= $user['email']?>
                        </p>
                        </p>
                    </div>
                    <div class="section__info--display--box">
                        <label class="section__info--display--label">Số điện thoại:</label>
                        <p class="section__info--display--textContent">
                        <p class="section__info--display--textContent">
                            <?= $user['numberphone']?>
                        </p>
                        </p>
                    </div>
                    <div class="section__info--display--box">
                        <label class="section__info--display--label">Mật khẩu:</label>
                        <p class="section__info--display--textContent">
                           
                            <input type="password" value="<?= $user['password']?>" style="border:none;padding:10px;" class="pass" readonly >
                     
                        </p>
                    </div>
                    <div class="section__info--display--box">
                        <label class="section__info--display--label">Ngày tạo:</label>
                        <p class="section__info--display--textContent">
                        <p class="section__info--display--textContent">
                            <?= $user['created_at']?>
                        </p>
                        </p>
                    </div>
                   
                </div>
            </section>
        </div>




               
<?php get_footer()?>