<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
</head>
<body>
    <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>DailyUI #001 - Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
  <link rel="stylesheet" href="{{asset('css/registration.css')}}">

  
</head>

<body>
  <!--
Follow me on
------------
Codepen: https://codepen.io/mycnlz/
Dribbble: https://dribbble.com/mycnlz
Pinterest: https://pinterest.com/mycnlz/
-->

<div class="container">
  <div class="row">
    <div class="d-flex justify-content-center mt-5">
      <form action="{{route('registration')}}" method="POST">
        @csrf
        <p class='field'>
          <label for='user'>Имя</label>
          <input class="py-4 bg-light" type='text' name='name' title='Username' id="name" autocomplete="off">
          <span class="d-none text-danger"> Заполните это поле! </span>
          <span id='valida' class='i i-warning'></span>
        </p>
        <p class='field'>
          <label for='pass'>Email</label>
          <input class="py-4 bg-light" type='email' name='email' title='Email' id="email" autocomplete="off">
          <span class="d-none text-danger"> Заполните это поле! </span>
          <span id='valida' class='i i-close'></span>
        </p>
        <p class='field'>
          <label for='pass'>Пароль</label>
          <input class="py-4 bg -light" type='password' name='pass' title='Password' id="password" autocomplete="off">
          <span class="d-none text-danger"> Заполните это поле! </span>
          <span id='valida' class='i i-close'></span>
        </p>
        <input class="mt-4" onclick="sendRequest()" type='submit' id='do_login' value='Регистрация' title='Регистрация' />
      </form>
    </div>
  </div>
</div>
<script>
  window.onload = function() {
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
  }
</script>

<script>
  function sendRequest(){
      let a = document.getElementsByTagName('input');
      
      Object.keys(a).forEach((i, idx) => {
          if(a[i].value==""){
              a[i].classList.add('is-invalid')
              let label = a[i].parentNode;
              let span = label.getElementsByTagName('span');
              span[0].classList.remove('d-none');
              i=a.length();
          }else{
              a[i].classList.remove('is-invalid')
              a[i].classList.add('is-valid')
              let label = a[i].parentNode;
              let span = label.getElementsByTagName('span');
              span[0].classList.remove('d-block');
              span[0].classList.add('d-none');
          }
      })

      let name = a[0].value;
      let email = a[1].value;
      let password = a[2].value;
        var formdata = new FormData();
      formdata.append("name", name);
      formdata.append("email", email);
      formdata.append("password", password);

      var requestOptions = {
      method: 'POST',
      body: formdata,
      redirect: 'follow'
      };

      fetch("/api/register", requestOptions)
      .then(response => response.json())
      .then(result => {
          let a = result['name'];
          if(a!=undefined){
              document.getElementById('userName').innerHTML=a;
              document.getElementById("button1").click();
          }

          let b = document.getElementsByTagName('input');
          setTimeout(() => {
              Object.keys(b).forEach((i, idx) => {
                  b[i].value="";
                  b[i].classList.remove('is-valid')
                  b[i].classList.remove('is-invalid')
              })
          }, 1000);

      })
      .catch(error => console.log('error', error));
 }

</script>

</body>
</html>