<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
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
<style>
body{
    background-color: #FBF8EC;
}
</style>
    <nav class="navbar navbar-expand-xl navbar-light ">
        <div class="container">
        <a class="navbar-brand h6 my-1" href="#"><img class="py-4 px-2" src="{{asset('img/Group.svg')}}" alt="">СЕВЕРЯНОЧКА</a>
        <button href="#" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarBasic">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                    <button class=" mb-1 mx-3 my-3 catalogbtn"><i style="padding: 0 15px 0 0px;" class="fa fa-angle-left "></i>Каталог</button>
                    </li>
                    <form class="">
                        <input style="border-color: #70C05B; width: 374px; margin: 0 15px;" class="form-control my-3 "  type="search" placeholder="Найти товар" aria-label="Найти товар">
                    </form>
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
                </ul>
            </div>
        </div>
    </nav>

<section>
    <div class="container">
        <div class="row">
            <div class="d-inline-flex ms-4 mt-4" ><p style="font-family: Rubik;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;">Главная</p><i style="" class="fa fa-angle-right px-3"></i> <span style="color: var(--grayscale-hard, #8F8F8F);
                /* Desc/Text/XS */
                font-family: Rubik;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;">Каталог</span> </div>
            </div>
        </div>
    </section>

<section class="section1">
    <div class="container">
        <div class="row">
            <div class="col-12 sale  d-flex justify-content-between">
                <h2 style="font-size: 64px;" class="mt-4 pb-4 ms-4">Каталог</h2>
            </div>
        </div>
    </div>
</section>


<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div onclick="window.location.href='{{ route('milk') }}';" class="catalog-linear"><p  style="cursor: pointer;"  class="ms-4">Молоко, сыр, яйцо</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear2"><p class="ms-4">Хлеб</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear3"><p class="ms-4">Фрукты и овощи</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear4"><p class="ms-4">Замороженные продукты</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear5"><p class="ms-4">Напитки</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear6"><p class="ms-4">Кондитерские изделия</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear7"><p class="ms-4">Чай, кофе</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear8"><p class="ms-4">Бакалея</p></div>
            </div>
            <div class="col-3 ">
                <div class="catalog-linear9"><p class="ms-4">Здоровое питание</p></div>
            </div>
            <div class="col-6">
                <div class="catalog-linear10"><p class="ms-4">Зоотовары</p></div>
            </div>
            <div class="col-3">
                <div class="catalog-linear11"><p class="ms-4">Детское питание</p></div>
            </div>
            <div class="col-6">
                <div class="catalog-linear12"><p class="ms-4">Мясо, птица, колбаса</p></div>
            </div>
            <div class="col-3">
                <div class="catalog-linear13"><p class="ms-4">Непродовольственные товары</p></div>
            </div>
        </div>
    </div>
</section>
    

<footer>
    <section class="mt-5" style=" background-color: #FBF8EC;">
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
                                <a href=""><img class="px-2" src="{{asset('img/Group 469.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/vkontakte.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/Group 465.svg')}}" alt=""></a>
                                <a href=""><img class="px-2" src="{{asset('img/ok.svg')}}" alt=""></a>
                                <a href=""><img class="px-2 ps-5" src="{{asset('img/phone.svg')}}" alt="">8 800 777 33 33</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

</body>