<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="('path/to/font-awesome/css/font-awesome.min.css')">
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
<style>
body{
    background-color: #FBF8EC;
}
</style>
<nav class="navbar navbar-expand-xl navbar-light ">
    <div class="container">
    <a class="navbar-brand h6 my-1" href="#"><img class="py-4 px-2" src="{{asset('img/Group.svg')}}" alt="">СЕВЕРЯНОЧКА</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
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
            font-weight: 400;">Главная</p><i style="" class="fa fa-angle-right px-3"></i> <span style="color: var(--grayscale-hard, #414141);
            /* Desc/Text/XS */
            font-family: Rubik;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;">Каталог</span>
            <i style="" class="fa fa-angle-right px-3"></i> <span style="color: var(--grayscale-hard, #8F8F8F);
            /* Desc/Text/XS */
            font-family: Rubik;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;">Молоко, сыр, яйцо</span> </div>
        </div>
    </div>
</section>

<section class="section1">
    <div class="container">
        <div class="row">
            <div class="col-12 sale  d-flex justify-content-between">
                <h2 style="font-size: 48px;" class="mt-4 pb-4 ms-4">Молоко, сыр, яйцо</h2>
            </div>
        </div>
    </div>
</section>

<section class="section1 py-3 bg-system1">
    <div class="container">
        <div class="row">
            <div class="bg-system1">   
                <div class="shops d-flex mt-2">
                    <button class="py-2 px-3 ms-4">Товары нашего производства</button>
                    <button class="py-2 px-3 ms-3">Полезное питание</button>
                    <button class="py-2 px-3 ms-3">Без ГМО</button>
                </div>
            </div>    
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-3 ">
                <div class="filter_col ms-4" style="width: 260px">
                    <div class="col-12 pt-4"> <label class=" filter" style="background-color: #F3F2F1" for="">Фильтр</label></div>
                        <div class="d-flex filter_price mt-5" style="justify-content: space-between;">
                            <p class="">Цена</p>
                            <button class="mb-1">Очистить </button>
                        </div>
                    <div class="range " style="width: 260px"> 
                        <div class="range-price price_range ">     
                            <input style="width: 125px" type="number" name="min" value="0">
                           <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 12C4.5 11.7239 4.72386 11.5 5 11.5H19C19.2761 11.5 19.5 11.7239 19.5 12C19.5 12.2761 19.2761 12.5 19 12.5H5C4.72386 12.5 4.5 12.2761 4.5 12Z" fill="#414141"/>
                          </svg></span>
                            <input style="width: 125px" type="number" name="max" value="0">      
                          </div>
                          <div class="range-slider">
                          <span class="range-selected"></span>
                        </div>
                        <div class="range-input pb-5" >
                          <input type="range" class="min" min="0" max="200" value="60" step="10">
                          <input type="range" class="max" min="0" max="1000" value="680" step="10">
                        </div>  
                      </div> 
                      <script>
                        let rangeMin = 100;
                        const range = document.querySelector(".range-selected");
                        const rangeInput = document.querySelectorAll(".range-input input");
                        const rangePrice = document.querySelectorAll(".range-price input");
                        rangeInput.forEach((input) => {
                        input.addEventListener("input", (e) => {
                            let minRange = parseInt(rangeInput[0].value);
                            let maxRange = parseInt(rangeInput[1].value);
                            if (maxRange - minRange < rangeMin) {     
                            if (e.target.className === "min") {
                                rangeInput[0].value = maxRange - rangeMin;        
                            } else {
                                rangeInput[1].value = minRange + rangeMin;        
                            }
                            } else {
                            rangePrice[0].value = minRange;
                            rangePrice[1].value = maxRange;
                            range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
                            range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
                            }
                        });
                        });
                        rangePrice.forEach((input) => {
                        input.addEventListener("input", (e) => {
                            let minPrice = rangePrice[0].value;
                            let maxPrice = rangePrice[1].value;
                            if (maxPrice - minPrice >= rangeMin && maxPrice <= rangeInput[1].max) {
                            if (e.target.className === "min") {
                                rangeInput[0].value = minPrice;
                                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                            } else {
                                rangeInput[1].value = maxPrice;
                                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                            }
                            }
                        });
                        });
                      </script>
                        <div class="filter_col_3">
                            <p>Молоко</p>
                            <p>Сливки</p>
                            <p>Яйцо</p>
                        </div>
                        <div class="">
                            
                        </div>
                    </div>  
                </div>
            <div class="col-9">
                    <div class="shops d-flex mt-3">
                        <button class="py-2 px-3 ms-4">Фильтр 4 </button>
                        <button class="py-2 px-3 ms-3">Цена от 99 до 2599</button>
                        <button class="py-2 px-3 ms-3">Очистить фильтры</button>
                    </div>
                    <div class="col-12 row my-4">
                        <div class="col-4"> 
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                        <div class="col-4">
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                        <div class="col-4">
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                        <div class="col-4 my-3">
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                         <div class="col-4 my-3">
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                        <div class="col-4 my-3">
                            <div class="bg-white p-3 box-shadow">
                                <div class="position-relative">
                                    <div class="position-absolute slide"><i class="fa fa-angle-right slider"></i></div>
                                    <img class="w-100" src="{{asset('img/image (7).png')}}" alt="">
                                    <div class="position-absolute sales"><span>-50%</span></div>
                                </div>
                                <div class="d-flex price justify-content-between mt-4">
                                    <div class="w-50 ">
                                        <h5 class="mb-1">44,50₽</h5>
                                        <h6>C картой</h6>
                                    </div>
                                    <div class="float-end text-right">
                                        <h5 class="fw-normal mb-1" style="color:#606060;" >50,50₽</h5>
                                        <h6>Обычная</h6>
                                    </div>
                                </div>
                                <div>
                                    <p  class="product my-1">Г/Ц Блинчики с мясом вес, <br>Россия</p>
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
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-5"><button class="border-0 py-2 px-4" style="color: #606060; font-we">Показать ещё</button></div>
        </div>
    </div>
</section>

{{------------------------ Pagination ------------------------}}
<style>
    .center {
      text-align: center;
    }
    
    .pagination {
      display: inline-block;
    }
    
    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      margin: 0 4px;
    }
    
    .pagination a.active {
      color: #F63;
    }
    
    .pagination a:hover:not(.active) {background-color: #606060;}
    </style>
    
    
    <div class="center">
      <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">7</a>
      <a href="#">8</a>
      <a href="#">&raquo;</a>
      </div>
    </div>
{{------------------------ Pagination ------------------------}}

<footer>
    <section class="mt-5" style=" background-color: #FBF8EC;">
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
                                <a href=""><img class="px-2 ps-5" src="{{asset('img/phone.svg')}}" alt="">8 800 777 33 33</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>


<script src="('public/bootstrap/js/bootstrap.min.js')"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>