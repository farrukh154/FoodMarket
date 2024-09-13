<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.cssx" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com'">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container">
            <a class="navbar-brand h6 my-1" href="#"><img class="py-4 px-2" src="{{asset('img/Group.svg')}}" alt="">СЕВЕРЯНОЧКА</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarBasic">
                    <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                        <li class="nav-item">
                        <button onclick="window.location.href='{{ route('catalog') }}'" class=" mb-1 mx-3 my-3 catalogbtn"><i style="padding: 0 15px 0 0px;" class="fa fa-angle-left "></i>Каталог</button>
                        </li>
                            <input type="text" id="searchInput" style="border-color: #70C05B; width: 374px; margin: 0 15px;" class="form-control my-3 "  type="search" placeholder="Найти товар" aria-label="Найти товар">
                            <div class="search_block" id="dropdown" style="display: none; position: absolute;">
                                @forelse ($searchlist as $item)
                                    <a href="{{ route('search', $item->description) }}">{{ $item->description }}</a>
                                @empty
                                    No products
                                @endforelse
                               
                              </div>
                        <li>
                            <img src="img/heart.svg" class="w-50 py-1 heart" alt="">
                        <h6 class="" style="font-size: 12px; margin-left: 12px; font-family: Rubik; font-style: normal">Избранное</h6>
                        </li> 
                        <li>
                            <img style="margin-left: 30px" src="img/heart.svg" class="w-50 py-1  heart" alt="">
                        <h6 class="" style=" padding-top:3px; font-size: 12px; margin-left: 28px; font-family: Rubik; font-style: normal">Заказы</h6>
                        </li>
                        <li>
                            <img style="margin-left: 33px" src="img/heart.svg" class="w-50 py-1 heart" alt="">
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
                                            <form action="{{route('signup')}}" method="POST">
                                                @csrf
                                                <label class="w-50 m-0" for="">Ваше имя</label>
                                                <input class="w-100" style="height: 50px;" type='text' name='name' title='Username' id="name" autocomplete="off">
                                                <label class="w-50 m-0" for="">Ваш пароль</label>
                                                <input style="height: 50px;" type='password' name='pass' title='Password' id="password" autocomplete="off" class="w-100">
                                                <button class=" w-100 my-4 button_log align-items:center; justify-content:center">Вход</button>
                                                <div class=" d-flex">
                                                    <a href="{{ route('view_registration') }}"><button id="RegistrationBtn" class="btn btn-default " style="
                                                        border: 1px solid #70C05B;
                                                        border-radius: 4px;
                                                        color: #70C05B;
                                                        font-family: Rubik;
                                                        font-size: 12px;
                                                        font-style: normal;
                                                        font-weight: 400;
                                                        ">Регистрация</button></a>
                                                    <button class="btn btn-default mx-2" style="height: 24px;color: var(--grayscale-hardest, #606060);                                                text-align: center;
                                                    /* Desc/Text/XS */
                                                    font-family: Rubik;
                                                    font-size: 12px;
                                                    font-style: normal;
                                                    font-weight: 400;
                                                    border:none;
                                                    justify-content:space-between;">Забыли пароль?</button>
                                                </form>
                                                @auth
                                                <span>{{ Auth::user()->name }}</span>
                                            @else
                                                <!-- Код кнопки регистрации -->
                                            @endauth
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

          
          


<div class="container">
    <div class="row align-items-center">
        <div class="col-4 ">
            <img class="img-responsive my-2 float-end" style="" src="img/img6.png" alt="">
        </div>
        <div class="col-8 ">
            <h2  class="dostavka my-2">Доставка бесплатно от 1000 ₽</h2>
        </div> 
    </div>
</div>
</header>

    <section class="section1">
        <div class="container">
            <div class="row">
                <div class="col-12 sale mt-5 d-flex justify-content-between">
                    <h2 class="mt-5 pb-4">Акции</h2>
                    <button class="button_sale justify-content-end mt-5 ">Все акции   <i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>

<section class="py-3 bg-system1">
    <div class="container">
        <div class="row">
            <div class="col-3">
                @forelse($sale as $item)
                <div class="bg-white p-3 box-shadow">   
                    <div class="position-relative">
                        <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                        <img class="w-100" src="{{ asset('storage/' . $item->img) }}" alt="">
                        <div class="position-absolute sales"><span>{{$item->sale}}</span></div>
                    </div>
                    <div class="d-flex price justify-content-between mt-4">
                        <div class="w-50 ">
                            <h5 class="mb-1">{{$item->card_price}}</h5>
                            <h6>C картой</h6>
                        </div>
                        <div class="float-end text-right">
                            <h5 class="fw-normal mb-1" style="color:#606060;" >{{$item->price}}</h5>
                            <h6>Обычная</h6>
                        </div>
                    </div>
                    <div>
                        <p  class="product my-1">{{$item->description}}</p>
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
            @empty
            No Project Found
            @endforelse
        </div>
    </div>
</section>

<section class="section1">
    <div class="container">
        <div class="row">
            <div class="col-12 sale mt-5 d-flex justify-content-between">
                <h2 class="mt-5 pb-4">Новинки</h2>
                <button class="button_sale justify-content-end mt-5 ">Все новинки &nbsp; <i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>
   
<section class="py-3 bg-system1">
    <div class="container">
        <div class="row">
            <div class="col-3">
                @forelse($news as $item)
                <div class="bg-white p-3 box-shadow">   
                    <div class="position-relative">
                        <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                        <img class="w-100" src="{{asset("storage/".$item->img)}}" alt="">
                    </div>
                    <div class="d-flex price justify-content-between mt-4">
                        <div class="w-50 ">
                            <h5 class="mb-1">{{$item->card_price}}</h5>
                            <h6>C картой</h6>
                        </div>
                        <div class="float-end text-right">
                            <h5 class="fw-normal mb-1" style="color:#606060;" >{{$item->price}}</h5>
                            <h6>Обычная</h6>
                        </div>
                    </div>
                    <div>
                        <p  class="product my-1">{{$item->description}}</p>
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
            @empty
            No Project Found
            @endforelse
        </div>
    </div>
</section>

<section class="section1">
    <div class="container">
        <div class="row">
            <div class="col-12 sale mt-5 d-flex justify-content-between">
                <h2 class="mt-5 pb-4">Покупали раньше</h2>
                <button class="button_sale justify-content-end mt-5 ">Все покупки &nbsp; <i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="py-3 bg-system1">
    <div class="container">
        <div class="row">
            <div class="col-3">
                @forelse($early_purchase as $item)
                <div class="bg-white p-3 box-shadow">
                    <div class="position-relative">
                        <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                        <img class="w-100" src="{{asset("storage/".$item->img)}}" alt="">
                    </div>
                    <div class="d-flex price justify-content-between mt-4">
                        <div class="w-50 ">
                            <h5 class="mb-1">{{$item->card_price}}</h5>
                            <h6>C картой</h6>
                        </div>
                        <div class="float-end text-right">
                            <h5 class="fw-normal mb-1" style="color:#606060;" >{{$item->price}}</h5>
                            <h6>Обычная</h6>
                        </div>
                    </div>
                    <div>
                        <p  class="product my-1">{{$item->description}}</p>
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
            @empty
            No Project Found
            @endforelse
        </div>
    </div>
</section>


<section class="section1 py-3 bg-system1" style="">
<div class="container">
    <div class="row g-5">
        <div class="sale mt-5 d-flex justify-content-between">
            <h2 class="mt-5 ">Специальные предложения</h2>
        </div>
        <div class="position-relative col-6" style="margin: 50px 0; ">
            <div class=" d-flex " style="background: #FCD5BA; padding: 50px 0; border-radius: 4px; box-shadow: 0px 8px 16px 0px rgba(202, 147, 96, 0.50);" >
                <div class="col-5 loyalcard_txt ">
                    <h3>Оформите карту <br>  «Северяночка»</h3>      
                    <p>И получайте бонусы при покупке в магазинах и на сайте</p> 
                </div>
                <div class="col-7 loyalcard position-relative">
                    <img class="position-absolute w-50 " src="img/loyal_card.jpg" alt="">
                </div>
            </div>
        </div> 
        <div class="col-6 banner position-relative" style="margin: 50px 0; background: #E5FFDE; ">
            <div class="banner_1 w-100 d-flex  position-relative">
                <div class="col-6 ">
                    <h3 class="my-4 mx-4">Покупайте <br> акционные товары</h3>      
                    <p  class="my-4 mx-4">И получайте вдвое больше <br> бонусов</p> 
                </div>
                <div class="col-6 postion-absolute" >
                    <img style="margin-left:10px" src="img/image11.png" alt="">
                </div>
            </div>    
            </div>
        </div>
    </div> 
</section>


<section class="section1 py-3 bg-system1">
    <div class="container">
        <div class="row">
            <div class="col-12 sale mt-5 d-flex justify-content-between">
                <h2 class=" pb-4">Наши магазины</h2>
            </div>
        <div class="bg-system1">   
                <div class="shops d-flex">
                    <button class="py-2 px-3">п.Щельяюр</button>
                    <button class="py-2 px-3">д.Вертеп</button>
                    <button class="py-2 px-3">с.Краснобор</button>
                    <button class="py-2 px-3">д.Диюр</button>
                </div>
                <div class="maps mt-4" style="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.8059004964116!2d69.63271022570969!3d40.28006171394651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b1b2e4a1ca7f81%3A0xa5c22654ac048b06!2z0J_QkNCd0KfQqNCQ0J3QkdCVLCDQpdGD0LTQttCw0L3QtCwg0KLQsNC00LbQuNC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1691790852538!5m2!1sru!2s"  style="border:0; height:354px" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>    
        </div>
    </div>
</section>


<section class="section1" style="padding-bottom: 70px">
    <div class="container">
        <div class="row">
            <div class="col-12 sale mt-5 d-flex justify-content-between">
                <h2 class="mt-5 pb-4">Статьи</h2>
            </div>
            <div class="col-12 d-flex">
<div class="col-4  more"> 
    <div class="article">
        <img class="" style="border-radius: 4px" src="img/article_img.png" alt="">
    </div>
    <div class="px-2 py-2" style="background-color: #fff; width:376px;"> 
        <div>
            <div class="col-12 ">
                <p style="
                color:#8F8F8F;
                font-family: Rubik;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;">05.03.2021</p>
            </div>
        </div>
        <h6 style="
            color: var(--main-on-surface, #414141);
            font-family: Rubik;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;">Режим использования масок и <br> перчаток на территории магазинов</h6>
        <p style="
            color: #414141;
            font-family: Rubik;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;">Подробная информация о режимах <br>использования масок и перчаток на <br> территории магазинов "ЛЕНТА". Информация <br> обновляется каждый будний день.</p>
        <button class="more_btn" style="
            ">Подробнее</button>
    </div>
</div>
<div class="col-4  more"> 
    <div class="article">
        <img class="" style="border-radius: 4px" src="img/article_img2.png" alt="">
    </div>
        <div class="px-2 py-2" style="background-color: #fff; width:376px;"> 
            <div>
                <div class="col-12 ">
                    <p style="
                    color:#8F8F8F;
                    font-family: Rubik;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 400;">05.03.2021</p>
                </div>
            </div>
            <h6 style="
                color: var(--main-on-surface, #414141);
                font-family: Rubik;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;">Весеннее настроение для каждой</h6>
            <p style="
                color: #414141;
                font-family: Rubik;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;">8 Марта – это не просто Международный <br> женский день, это ещё день тюльпанов, <br> приятных сюрпризов и праздничных тёплых <br> пожеланий  <br><br></p>
            <button class="more_btn" style="
                ">Подробнее</button>
            </div>
        </div> 
<div class="col-4  more"> 
    <div class="article">
        <img class="" style="border-radius: 4px" src="img/article_img3.png" alt="">
    </div>
        <div class="px-2 py-2" style="background-color: #fff; width:376px;"> 
            <div>
                <div class="col-12 ">
                    <p style="
                    color:#8F8F8F;
                    font-family: Rubik;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 400;">05.03.2021</p>
                </div>
            </div>
            <h6 style="
                color: var(--main-on-surface, #414141);
                font-family: Rubik;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;">ЗОЖ или ФАСТФУД. А вы на чьей <br> стороне? Голосуем!</h6>
            <p style="
                color: #414141;
                font-family: Rubik;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;">Голосуйте за любимые категории, выбирайте <br> категорию-победителя в мобильном <br> приложении и получайте кешбэк 10% <br> баллами в апреле!</p>
            <button class="more_btn" style="
                ">Подробнее</button>
            </div>
        </div>
            </div>
        </div>     
    </div>
</section>


<footer>
    <section class="" style=" background-color: #FBF8EC;">
        <div class="container-fluid">
            <div class="row">
                <div class="footer_menu d-flex">
                    <div class="col-7 mx-4">
                        <ul class="d-flex mt-5 " >
                            <li class="me-4"><img src="img/logo.svg" alt=""></li>
                            <li class="me-4 mt-2 px-2">О компании</li> 
                            <li class="me-4 mt-2 px-2">Контакты</li>
                            <li class="me-4 mt-2 px-2">Вакансии</li>
                            <li class="me-4 mt-2 px-2">Статьи</li>
                            <li class="me-4 mt-2 px-2">Политика обработки персональных данных</li>
                        </ul>
                        </div>
                        <div class="col-4 footer_menu_2nd">
                            <ul class="py-5 ms-3">
                                <a href=""><img class="px-2" src="img/Group 469.svg" alt=""></a>
                                <a href=""><img class="px-2" src="img/vkontakte.svg" alt=""></a>
                                <a href=""><img class="px-2" src="img/Group 465.svg" alt=""></a>
                                <a href=""><img class="px-2" src="img/ok.svg" alt=""></a>
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


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>