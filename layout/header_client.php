<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House hotel</title>
    <link rel="shortcut icon" href="public/images/logo.png" type="image/x-icon">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
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

        .category--list .category--item:hover .category--item--link {
            background-color: gray;
            transition: .5s;
            color: white;
            box-shadow: 0px 0px 10px 10px rgb(200, 200, 200,0.5);
            border-radius: 10px;
            display: block;
        }
      

        .section {
            display: grid;
            grid-template-columns: 300px 1000px;
            gap: 100px;
        }

        .section__col_3 {}

        .section__col_3 h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 24px;

        }

        .category--list {
            /* flex: 1; */
        }

        .category--item {
            display: flex;
            flex-direction: column-reverse;
            line-height: 2   ;
            margin-bottom: 10px;
            /* border: 0.25px solid gray; */
            /* border-radius: 20px; */


        }

        .category--item--link {
            text-decoration: none;
            color: #121212;
            font-size: 16px;
            font-weight: 600;
     
            padding: 10px;
            display: block;
        }

        .section__col_9 {
            flex: 9;

        }

        .product--list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -30px;
        }

        .product--card {
            width: calc((100% / 3) - 30px);
            height: auto;
            margin-left: 30px;
            background-color: #fff;
            margin-bottom: 30px;
        }

        .product--card:hover .product--img {
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
        }

        .product--card a {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            width: 100%;
            height: auto;
        }

        .product--img--box {
            width: 100%;
            max-height: 240px;
            overflow: hidden;
        }

        .product--img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
        }

        .product--name {
            padding: 10px;
            flex: 1;
            color: #121212;
            font-weight: 600;
            font-size: 16px;
        }

        .product--price {
            padding: 10px;
            color: rgb(253, 74, 74);
            font-weight: 600;
            font-size: 16px;
        }

        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
            body::-webkit-scrollbar{
    height: 8px;
    width: 8px;
    
  }
  body::-webkit-scrollbar-thumb {
    background-image: linear-gradient(to bottom, #868483, #000);
    border-radius: 100rem;
  }
  body::-webkit-scrollbar-track {
    border-radius: 100rem;
    background-color: white;
  }
        /*reset css*/
        div,
        label {
            margin: 0;
            padding: 0;
        }



        h1 {
            font-size: 1.5em;
            margin: 10px;
        }

        /****** Style Star Rating Widget *****/
        #rating {
            border: none;
            float: left;
        }

        #rating>input {
            display: none;
            /* color: ; */
        }

        /*ẩn input radio - vì chúng ta đã có label là GUI*/
        #rating>label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        /*1 ngôi sao*/
        #rating>.half:before {
            content: "\f089";
            position: absolute;
        }

        /*0.5 ngôi sao*/
        #rating>label {
            color: #543434;
            float: right;
        }
        /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
        /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
        #rating>input:checked~label,
        #rating:not(:checked)>label:hover,
        #rating:not(:checked)>label:hover~label {
            color: #FFD700;
        }

        /* Hover vào các sao phía trước ngôi sao đã chọn*/
        #rating>input:checked+label:hover,
        #rating>input:checked~label:hover,
        #rating>label:hover~input:checked~label,
        #rating>input:checked~label:hover~label {
            color: #FFED85;
        }

        .db {
            display: flex;
        }

        .user--ratted--star {
            margin-left: 10px;
        }

        .product__detail--ratted--block {
            margin: 10px;
            border-bottom: 1px solid gray;
        }

        .user--ratted--info--link {
            display: flex;
            /* margin: 10px; */

        }

        .user__ratted--info {
            margin-bottom: 30px;

        }

        .user--ratted--name {
            display: flex;
            /* align-items: center; */
            margin-left: 10px;
            margin-top: 10px;
        }

        .user--ratted {
            margin-left: 30px;
        }

        .pass {
            border: none;
            padding: 10px;
        }

        .pass:focus {
            border: none;
            background-color: white;
        }

        .card .img {
            margin-top: 20px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            text-align: center;
            height: 375px;
        }

        .card .img img {
            width: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: 0.5s;
            height: 375px;
            /* display: none; */
        }

        .content1 {
            padding-top: 60px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 150px 0px;
        }

        .content-detail {
            background-color: rgb(226, 226, 226);

        }

        .anh-dai-dien img {
            border: 0.25px solid white;
            width: 40px;
            border-radius: 100%;
            overflow: hidden;
            height: 40px;
            object-fit: cover;
            display: block;
        }

        .content2 {
            padding: 80px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: rgb(226, 226, 226);
            margin-bottom: 20px;
        }

        /* Customer */
        .content {
            padding-top: 60px;
            max-width: 1200px;
            margin: 0 auto;
            height: 100%;
        }

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

        .info--menu__img--box img {
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

        .button_update {

            border: none;
            cursor: pointer;
            padding: 10px;
            background-color: #767070;
            color: white;
            transition: .5s;
            border-radius: 2px;

        }

        .button_update:hover {
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);

        }

        .type {
            outline: none;
        }

        .type1 {
            outline: none;
            width: 200px;
            background-color: #F8F8F8;
            color: #383838;
            border: none;
            height: 50px;
            padding: 0 15px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
            line-height: 1.6;
        }

        .product__quantity--label {
            width: 100px;
        }

        .product__detail--img {
            width: 100%;
            object-fit: cover;
            height: 300px;
        }

        .product__detail--img--box {
            height: 500px;
        }

        .product__detail--info--box {
            height: 500px;
        }

        .product__description--box {
            line-height: 1.6;
            margin-top: 20px;
        }

        .checked {
            color: orange;
        }

        .user--ratting--value--box1 {

            margin-bottom: 20px;
            margin-top: 20px;
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
                    <li class="header__nav--item ">
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

                <?php if (!isset($_SESSION['auth'])) { ?>
                    <a href="?role=client&mod=auth">
                        <button class="header__login--btn">Đăng nhập</button>
                    </a>
                    <a href="?role=client&mod=auth&action=register">
                        <button class="header__login--btn">Đăng ký</button>
                    </a>
                <?php } else if ($_SESSION['auth']['role'] == 2) { ?>
                    <a href="?role=admin">
                        <div class="anh-dai-dien">
                            <img src="assets/media/users/300_21.jpg" alt="">

                        </div>
                    </a>


                <?php } else { ?>
                    <a href="?role=client&mod=auth&action=customer&id_user=<?= $_SESSION['auth']['id'] ?>">
                        <div class="anh-dai-dien">

                            <?php if (empty($_SESSION['auth']['thumb'])) { ?>
                                <img src="public/images/anhDaiDien.png" alt="avatar" class="header__user--img" />


                            <?php } else { ?>
                                <img src="public/uploads/<?= $_SESSION['auth']['thumb'] ?>" alt="avatar" class="header__user--img" />


                            <?php } ?>


                        </div>
                    </a>

                <?php } ?>
            </div>
        </div>
    </header>