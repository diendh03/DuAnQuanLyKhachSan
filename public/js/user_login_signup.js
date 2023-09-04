const bigLabel = document.querySelector('.form__big--label');
const bigLabelTitle = document.querySelector('.form__big--label--title');
const bigLabelBtn = document.querySelector('.form__big--label--btn');

bigLabel.style.background = "linear-gradient(to right, #141e30, #243b55)";

let isUserLogin = bigLabelBtn.attributes.isLogin.value;

let isLogin = true;
// ktra khi có dữ liệu truyền vào
if(isUserLogin == 'true'){
  isLogin = true;
} else if(isUserLogin == 'false'){
  isLogin = false;
  bigLabel.style.right = '50%';
  bigLabelTitle.textContent = "Bạn đã có tài khoản?";
  bigLabelBtn.value = "Đăng nhập ngay";
}

// chỉ chuyển dổi qua lại giữa layout đang nhập và đăng ký
const handleChangeLoginEvent2 = () => {
  isLogin = !isLogin;

  if(isLogin == false){
    bigLabel.style.right = '50%';
    bigLabelTitle.textContent = "Bạn đã có tài khoản?";
    bigLabelBtn.value = "Đăng nhập ngay";
  } else if(isLogin == true){
    bigLabel.style.right = 0;
    bigLabelTitle.textContent = "Bạn chưa có tài khoản?";
    bigLabelBtn.value = "Đăng ký ngay";
  }
  bigLabel.style.transition = "all 0.3s linear";
}

bigLabelBtn.addEventListener('click',  handleChangeLoginEvent2);

