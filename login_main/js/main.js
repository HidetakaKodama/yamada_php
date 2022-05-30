'use strict';
{
    // window.onload = function() {
    //     // 計算ボタンを押した際の動作を設定
    //     document.getElementById('btn').onclick = function() {
    //       post();
    //     };
      
    //     xhr = new XMLHttpRequest();
    //   };
      
    //   function post() {
    //     xhr.open('POST', 'http://localhost/php/Todo_php/work/app/functions.php', true);
    //     xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
    //     var request = "user_id" + user_id.value;
    //     xhr.send(request);
    //   }

var count = 0;

function clickBtn() {
  count ++;
document.frmRegist.count.value = count;
document.frmRegist.submit();
}

  }