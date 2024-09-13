<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('css/order.css') }}">
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
<body style="background-color: #FBF8EC;">
    <header style="background-image:none; height:auto">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container">
            <a class="navbar-brand h6 my-1" href="#"><img class="py-4 px-2" src="{{asset('img/Group.svg')}}" alt="">СЕВЕРЯНОЧКА</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarBasic">
                    <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                        <li class="nav-item">
                        <button onclick="window.location.href='{{ url('catalog') }}'" class=" mb-1 mx-3 my-3 catalogbtn"><i style="padding: 0 15px 0 0px;" class="fa fa-angle-left "></i>Каталог</button>
                        </li>
                        <form class="">
                            <input type="text" id="searchInput" style="border-color: #70C05B; width: 374px; margin: 0 15px;" class="form-control my-3 "  type="search" placeholder="Найти товар" aria-label="Найти товар">
                            <div class="search_block" id="dropdown" style="display: none; position: absolute;">
                                <a>Молоко, сыр, яйцо</a>
                                <a >Молоко</a>
                                <a >Cherry</a>
                                <a>Grape</a>
                                <a >Orange</a>
                              </div>
                        </form>
                        <li>
                            <img src="{{asset('img/heart.svg')}}" class="w-50 py-1 heart" alt="">
                        <h6 class="" style="font-size: 12px; margin-left: 12px; font-family: Rubik; font-style: normal">Избранное</h6>
                        </li>
                        <li>
                            <img style="margin-left: 30px" src="{{asset('img/heart.svg')}}" class="w-50 py-1  heart" alt="">
                        <h6 class="" style=" padding-top:3px; font-size: 12px; margin-left: 28px; font-family: Rubik; font-style: normal">Заказы</h6>
                        </li>
                        <li>
                            <img style="margin-left: 33px" src="{{asset('img/heart.svg')}}" class="w-50 py-1 heart" alt="">
                        <h6 class="" style="font-size: 12px; margin-bottom:1px;  margin-left: 29px; font-family: Rubik; font-style: normal">Корзина</h6>
                        </li>
                        {{-- <li>
                            <div style="font-family: Rubik;font-style: normal; display:flex; align-items:center;" class="fs-6 mx-5  my-2 "><img src="img/avatar.svg" alt=""><span style="" class="px-3">Алексей</span><i class="fa fa-angle-right mx-4" aria-hidden="true"></i></div>
                        </li> --}}
                         <button id="myBtn" class="form-control px-4 mt-3 ms-5" style="height:40px; width:100%; background-color:#70C05B; color:#fff;">Вход</button>
                            <!-- Trigger/Open The Modal -->

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content pb-5 col-6">
                                <span class="close">&times;</span>
                                <div style="margin:0 auto; align-items:center; justify-content:center">
                                    <div class="modal_register" style="margin: 0 auto;">
                                        <p class="my-5" style="">Вход</p>
                                        <div class="mt-2 " style="width:70%;margin:0 auto;  align-items:center;">
                                            <label class="w-50 m-0" for="">Телефон</label>
                                            <input style="height: 50px; " class="w-100" type="text">
                                            <button class=" w-100 my-4 button_log align-items:center; justify-content:center">Вход</button>
                                            <div class=" d-flex">
                                                <button id="RegistrationBtn" class="btn btn-default " style="
                                                    border: 1px solid #70C05B;
                                                    border-radius: 4px;
                                                    color: #70C05B;
                                                    font-family: Rubik;
                                                    font-size: 12px;
                                                    font-style: normal;
                                                    font-weight: 400;
                                                    ">Регистрация</button>
                                                <button class="btn btn-default mx-2" style="height: 24px;color: var(--grayscale-hardest, #606060);
                                                text-align: center;
                                                /* Desc/Text/XS */
                                                font-family: Rubik;
                                                font-size: 12px;
                                                font-style: normal;
                                                font-weight: 400;
                                                border:none;
                                                justify-content:space-between;">Забыли пароль?</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                    
                            </div>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function() {
                            modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                            modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                            }
                        </script>
                      {{-- <li>
                        //     <div style="font-family: Rubik;font-style: normal; display:flex; align-items:center;" class="fs-6 mx-5  my-2 "><img src="img/avatar.svg" alt=""><span style="" class="px-3">Алексей</span><i class="fa fa-angle-right mx-4" aria-hidden="true"></i></div>
                        // </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
</header>

<section>
    <div class="container">
        <div class="row">
            <h5 class="mt-5" style="color: var(--main-on-surface, #414141);
            /* Desc/Header/M */
            font-family: Rubik;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;">Результаты поиска</h5>
            <p class="py-3" style="color: var(--main-on-surface, #414141);
            /* Desc/Text/L */
            font-family: Rubik;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;">По запросу <span style="color:#F63">Еда</span></p>
        </div>
    </div>
</section>


<div class="container pb-5">
    <div class="row">
        @foreach ($result as $item)
        <div class="col-3">
            <div class="bg-white p-3 box-shadow">
                <div class="position-relative">
                    <div class="position-absolute slide"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                      </svg></div>
                    <img class="w-100" src="{{asset("storage/".$item->img)}}" alt="">
                </div>
                <div class="d-flex price justify-content-between mt-4">
                    <div class="w-50 ">
                        <h5 class="mb-1">44,50₽</h5>
                    </div>
                </div>
                <div>
                    <p  class="product my-1">{{ $item->description }}</p>
                </div>
                <div>
                    <p><span class="active"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.10326 1.81698C7.47008 1.07374 8.52992 1.07374 8.89674 1.81699L10.1185 4.29249C10.2641 4.58763 10.5457 4.7922 10.8714 4.83953L13.6033 5.2365C14.4235 5.35568 14.751 6.36365 14.1575 6.94219L12.1807 8.8691C11.945 9.09884 11.8375 9.42984 11.8931 9.75423L12.3598 12.4751C12.4999 13.292 11.6424 13.9149 10.9088 13.5293L8.46534 12.2446C8.17402 12.0915 7.82598 12.0915 7.53466 12.2446L5.09119 13.5293C4.35756 13.9149 3.50013 13.292 3.64024 12.4751L4.1069 9.75423C4.16254 9.42984 4.05499 9.09884 3.81931 8.8691L1.8425 6.94219C1.24898 6.36365 1.57649 5.35568 2.39671 5.2365L5.12859 4.83953C5.4543 4.7922 5.73587 4.58763 5.88153 4.29249L7.10326 1.81698Z" fill="#FF6633"/>
                        </svg>
                    </span>
                        <span class="active"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.10326 1.81698C7.47008 1.07374 8.52992 1.07374 8.89674 1.81699L10.1185 4.29249C10.2641 4.58763 10.5457 4.7922 10.8714 4.83953L13.6033 5.2365C14.4235 5.35568 14.751 6.36365 14.1575 6.94219L12.1807 8.8691C11.945 9.09884 11.8375 9.42984 11.8931 9.75423L12.3598 12.4751C12.4999 13.292 11.6424 13.9149 10.9088 13.5293L8.46534 12.2446C8.17402 12.0915 7.82598 12.0915 7.53466 12.2446L5.09119 13.5293C4.35756 13.9149 3.50013 13.292 3.64024 12.4751L4.1069 9.75423C4.16254 9.42984 4.05499 9.09884 3.81931 8.8691L1.8425 6.94219C1.24898 6.36365 1.57649 5.35568 2.39671 5.2365L5.12859 4.83953C5.4543 4.7922 5.73587 4.58763 5.88153 4.29249L7.10326 1.81698Z" fill="#FF6633"/>
                            </svg>
                        </span>
                        <span class="disactive">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.10326 1.81698C7.47008 1.07374 8.52992 1.07374 8.89674 1.81699L10.1185 4.29249C10.2641 4.58763 10.5457 4.7922 10.8714 4.83953L13.6033 5.2365C14.4235 5.35568 14.751 6.36365 14.1575 6.94219L12.1807 8.8691C11.945 9.09884 11.8375 9.42984 11.8931 9.75423L12.3598 12.4751C12.4999 13.292 11.6424 13.9149 10.9088 13.5293L8.46534 12.2446C8.17402 12.0915 7.82598 12.0915 7.53466 12.2446L5.09119 13.5293C4.35756 13.9149 3.50013 13.292 3.64024 12.4751L4.1069 9.75423C4.16254 9.42984 4.05499 9.09884 3.81931 8.8691L1.8425 6.94219C1.24898 6.36365 1.57649 5.35568 2.39671 5.2365L5.12859 4.83953C5.4543 4.7922 5.73587 4.58763 5.88153 4.29249L7.10326 1.81698Z" fill="#BFBFBF"/>
                                </svg>
                        </span>
                        <span class="disactive">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.10326 1.81698C7.47008 1.07374 8.52992 1.07374 8.89674 1.81699L10.1185 4.29249C10.2641 4.58763 10.5457 4.7922 10.8714 4.83953L13.6033 5.2365C14.4235 5.35568 14.751 6.36365 14.1575 6.94219L12.1807 8.8691C11.945 9.09884 11.8375 9.42984 11.8931 9.75423L12.3598 12.4751C12.4999 13.292 11.6424 13.9149 10.9088 13.5293L8.46534 12.2446C8.17402 12.0915 7.82598 12.0915 7.53466 12.2446L5.09119 13.5293C4.35756 13.9149 3.50013 13.292 3.64024 12.4751L4.1069 9.75423C4.16254 9.42984 4.05499 9.09884 3.81931 8.8691L1.8425 6.94219C1.24898 6.36365 1.57649 5.35568 2.39671 5.2365L5.12859 4.83953C5.4543 4.7922 5.73587 4.58763 5.88153 4.29249L7.10326 1.81698Z" fill="#BFBFBF"/>
                            </svg>
                        </span>
                        <span class="disactive">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.10326 1.81698C7.47008 1.07374 8.52992 1.07374 8.89674 1.81699L10.1185 4.29249C10.2641 4.58763 10.5457 4.7922 10.8714 4.83953L13.6033 5.2365C14.4235 5.35568 14.751 6.36365 14.1575 6.94219L12.1807 8.8691C11.945 9.09884 11.8375 9.42984 11.8931 9.75423L12.3598 12.4751C12.4999 13.292 11.6424 13.9149 10.9088 13.5293L8.46534 12.2446C8.17402 12.0915 7.82598 12.0915 7.53466 12.2446L5.09119 13.5293C4.35756 13.9149 3.50013 13.292 3.64024 12.4751L4.1069 9.75423C4.16254 9.42984 4.05499 9.09884 3.81931 8.8691L1.8425 6.94219C1.24898 6.36365 1.57649 5.35568 2.39671 5.2365L5.12859 4.83953C5.4543 4.7922 5.73587 4.58763 5.88153 4.29249L7.10326 1.81698Z" fill="#BFBFBF"/>
                            </svg>
                        </span>
                    </p>
                </div>
                <button class=" w-100 p-2 basket">В корзину</button>
            </div>
        </div>
        @endforeach
        
    </div>
</div>


<footer>
    <section class="" style=" background-color: #FBF8EC;">
        <div class="container-fluid">
            <div class="row">
                <div class="footer_menu d-flex">
                    <div class="col-7 mx-4">
                        <ul class="d-flex mt-5 " >
                            <li class="me-4"><img src="{{asset('img/logo.svg')}}" alt=""></li>
                            <li class="me-4 mt-2 px-2">О компании</li> 
                            <li class="me-4 mt-2 px-2">Контакты</li>
                            <li class="me-4 mt-2 px-2">Вакансии</li>
                            <li class="me-4 mt-2 px-2">Статьи</li>
                            <li class="me-4 mt-2 px-2">Политика обработки персональных данных</li>
                        </ul>
                        </div>
                        <div class="col-4 footer_menu_2nd">
                            <ul class="py-5 ms-3">
                                <a href=""><img class="px-2" src="{{asset('img/Group 469.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/vkontakte.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/Group 465.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/ok.svg')}}" alt=""></a>
                                <a href=""><img class="px-2 ps-5" src="img/phone.svg" alt="">8 800 777 33 33</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

          
<script>
    const input = document.getElementById('searchInput');
    const dropdown = document.getElementById('dropdown');
    
    input.addEventListener('input', filterDropdown);
    
    function filterDropdown() {
      dropdown.style.display = "block";
      const filterValue = input.value.toLowerCase();
      const a = dropdown.querySelectorAll('a');
      for (let i = 0; i < a.length; i++) {
        const option = a[i];
        const optionValue = option.innerText.toLowerCase();
        
        if (optionValue.includes(filterValue)) {
          option.style.display = '';
        } else {
          option.style.display = 'none';
        }
      }
    }
  </script>
</body>
</html>