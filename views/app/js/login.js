function goLogin(){
  var connect, form, response, result, user, pass, sesion;
  user = __('username_login').value;
  pass = __('pass_login').value;
  sesion = __('check_login').checked ? true : false;
  form = 'user=' + user + '&pass=' + pass + '&sesion=' + sesion;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function(){
      if (connect.readyState == 4 && connect.status == 200) {
          if (connect.responseText == 1) {
            result = '<div class="alert alert-dismissible alert-success">';
            result += '<h4>Conectado!</h4>';
            result+=  '<p>Estamos redireccionandote...</p></div>';
            __('validador_login').innerHTML = result;
            location.reload();
          }else {
            __('validador_login').innerHTML = connect.responseText;
          }
      }else if (connect.readyState != 4) {
          result = '<div class="alert alert-dismissible alert-warning">';
          result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result += '<h4>Warning!</h4>';
          result+=  '<p>Estamos tratando de loguearte</p></div>';
          __('validador_login').innerHTML = result;
      }
  }
  connect.open('POST', 'ajax.php?mode=login', true);
  connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  connect.send(form);
}
