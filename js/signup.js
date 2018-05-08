
function validateEmail(sEmail) {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if (filter.test(sEmail)) {
    return true;
  }
  else {
    return false;
  }
}

function chkPwd(str){
  var reg_pwd = /^.*(?=.{6,20})(?=.*[0-9])(?=.*[a-zA-Z]).*$/;
  if(!reg_pwd.test(str)){
    return false;
  }
  return true;
}

$("#signupForm").submit(function(evt) {
  // username 유효성 검사
  var username2 = $("#username2").val();

  if( username2.length < 4 ) {
    alert("이름을 4자 이상 입력해주세요.");
    evt.preventDefault();
    return false;
  }

  // password 유효성 검사
  if(!chkPwd( $.trim($('#password2').val()))){
    alert('비밀번호를 확인하세요.₩n(영문,숫자를 혼합하여 6~20자 이내)');
    $('#mpassword2').val('');
    $('#mpassword2').focus();
    evt.preventDefault();
    return false;
  }


  // email 유효성 검사
  var sEmail = $('#email').val();
  if ($.trim(sEmail).length == 0) {
    alert('이메일 주소를 입력해주세요.');
    evt.preventDefault();
    return false;
  }
  if (!validateEmail(sEmail)) {
    alert('잘못된 이메일 형식입니다');
    evt.preventDefault();
    return false;
  }
  return true;

});
