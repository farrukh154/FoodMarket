<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
        <section class="section1">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-4 logo">
                        <h1>MF</h1>
                    </div>
                    <div class="col-lg-8 menu">
                    <ul>
                        <li><a href="#section2">Главная</a></li>
                        <li><a href="#section3">Об авторе</a></li>
                        <li><a href="#section7">Работы</a></li>
                        <li><a href="#section6">Процесс</a></li>
                        <li><a href="#section9">Контакты</a></li>
                     </ul> 
                    </div>
                 </div>
            </div>
        </section>

        <section class="section2" id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 image">
                        <img src="{{asset('storage/'.$header->image)}}" alt="" >
                    </div>
                    <div class="col-lg-6 text">
                        <h2>{{$header->title}}</h2>
                        <p>{{$header->description}}</p>
                        <a href="#section9"><button  class="button1">{{$header->button_text}}</button></a>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section class="section3" id="section3">
        <div class="container">
            <div class="row">
                <h2>{{$body->title}}</h2>
                <p>{{$body->description}}</p>
            </div>
        </div>
    </section>
    <section class="section4">
        <div class="container">
            <div class="row">
                @forelse ($project as $item)    
                <div class="col-2">
                    <div class="col-6 ">
                        <img src="{{asset("storage/".$item->image)}}" alt="">
                    </div>
                    <div class="col-6">
                        <h3>{{$item->count}}</h3>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @empty
                No Project Found
            @endforelse
            </div>
           
        </div>
    </div>
    </section>
    <section class="section5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 block1">
                    <h3>{{$skills->title}}</h3>
                    <div class="block2"></div>
                    <h5>{{$skills->description1}}</h5>
                    <h5>{{$skills->description2}}</h5>
                    <h5>{{$skills->description3}}</h5>
                </div>
                <div class="col-lg-6 photo">
                    <img src="{{asset("storage/".$skills->image)}}" alt="">
                </div>   
            </div>
        </div>
    </section>

    <section class="section6" id="section6">
        <div class="container">
            <div class="row">
                <h4>{{$work->title}}</h4>
                <p>{{$work->description}}</p>
                <img src="img/image4.png" alt="">
            </div>
        </div>
    </section>
    <section class="section7" id="section7">
        <div class="container">
            <div class="row">
                @forelse ($photo as $item)    
                <div class="col-3 p-0">
                    <img class="w-100" src="{{asset("storage/".$item->image)}}" alt="">
                </div>
                @empty
                No Project Found
                @endforelse
            </div>
        </div>
    </section>
    
    <section class="section8">
        <img src="img/image8.png" alt="">
        <img src="img/image8.png" alt="">
        <img src="img/image8.png" alt="">
        <img src="img/image8.png" alt="">
    </section>


    <section class="section9" id="section9">
        <div class="container">
            <div class="row">
                <h2>{{$booking->title}}</h2>
                 <p>{{$booking->description}}</p>
                <div class="col-lg-6">
                    <form action="{{ route('messageme')}}" method="POST">
                        @csrf
                        <input name="name" type="text" class="name" type="text" placeholder="Ваше имя">
                        <input name="message" class="message" type="text" placeholder="Сообщение">
                        <button type="submit"  class="button2">{{$booking->button_txt}}</button>
                </div>
             <div class="col-lg-6">
                <input name="email" type="email" class="email"placeholder="Ваш e-mail">
             </div>  
        </form>
            </div>
        </div>
    </section>

    <section class="section10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 footer1">
                    <h5>МИРЗОЕВ ФАРРУХ</h5>
                    <p>(с) 2018. Все права защищены.</p>
                    <form action="{{ route('emailme')}}" method="POST">
                        @csrf
                        <input name="email" type="email" class="email2" placeholder="Оставьте свой email">
                        <button type="submit"  class="button3">ОТПРАВИТЬ</button>
                    </form>
            </div>
        </div>
    </section>
</body>
</html>
