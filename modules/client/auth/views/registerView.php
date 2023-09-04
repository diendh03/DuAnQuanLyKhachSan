




<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <link rel="shortcut icon" href="public/images/logo.png" type="image/x-icon">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- reset css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- nunito font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="public/css/user_login_signup.css">
  <!-- js -->
  <script src="public/js/user_login_signup.js" defer></script>
  <style>
      .signup__form--box{ 
    background-color: #fff;
  
    width: 600px;
  
  }
  .backToHomepage--box{
    width: 1200px;
    margin-bottom: 10px;
    margin-top: 20px;
    margin-left: 32%;
  }
 
  
  </style>
</head>
<body>
  <div class="container">
    <div class="backToHomepage--box">
      <a href="?role=client" class="backToHomepage">
        <i class="fa-solid fa-arrow-left"></i>
        <button>Quay lại trang chủ</button>
      </a>
    </div>
   
      <!-- <div class="form__big--label">
        <p class="form__big--label--title">Bạn chưa có tài khoản?</p>
        <input type="submit" value="Đăng ký ngay" class="form__big--label--btn" isLogin="">
      </div> -->
      <div class="signup__form--box">
        <div class="header__form--box">
          <div class="header__logo--box" style="margin: 0px 10px;">
            <img src="public/images/logo.png" alt="" class="header__logo">
          </div>
          <p class="header__title--box">Đăng ký tài khoản</p>
        </div>
        <div class="body__form--box">
          <!-- Form action Signup -->
          <form action="" class="login--form" method="post">
            <div class="form-control">
              <div class="form-input-label-box">
                <label class="form-input-label">Họ và tên</label>
              </div>
              <input type="text" name="fullname" class="form-input-fill" required>
            </div>
            <div class="form-control">
              <div class="form-input-label-box">
                <label class="form-input-label">Email</label>
              </div>
              <input type="text" name="email" class="form-input-fill" required>
            </div>
            <div class="form-control">
              <div class="form-input-label-box">
                <label class="form-input-label">Số điện thoại</label>
              </div>
              <input type="text" name="phonenumber" class="form-input-fill" required>
            </div>
            <div class="form-control">
              <div class="form-input-label-box">
                <label class="form-input-label">Mật khẩu</label>
              </div>
              <input type="password" name="password" class="form-input-fill" required>
            </div>
            <div class="form-control">
          
              <input type="hidden" name="role" value="1" class="form-input-fill">
            </div>
            <div class="form-control">
             
                <!-- <select name="maLoaiNguoiDung" class="form-input-fill">
                
                </select> -->
            </div>
            <!-- <input type="hidden" name="anhDaiDien" class="form-input-fill" value="https://cdn-icons-png.flaticon.com/512/1144/1144709.png"> -->
              <div class='exportErr'>
              <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg): ?>
                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
                <div class="button">
            <button type="" class="submit-btn">Đăng ký</button>

                <a href="?role=client&mod=auth">
     
     <input type="button" class="submit-btn" value="Đăng nhập">

    
           
         </a>
                </div>
            
            
         
          </form>
        </div>
      </div>
  </div>
</body>
</html>
