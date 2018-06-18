@extends('layouts/layout')

@section('head_extra')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/catalog/catalog.css">
    <link rel="stylesheet" href="/css/price.css">
    <link rel="stylesheet" href="/css/example.css">
    <link rel="stylesheet" href="/css/projects.css">
    <link rel="stylesheet" href="/css/clients.css">
    <link rel="stylesheet" href="/css/sizes.css">
    <script language="javascript" src="/js/cataloge/sort.js"></script>


    <link rel="stylesheet" href="/css/catalog/one.css">
    <script type="text/javascript" src="/js/cataloge/loupe/jquery.loupe.js"></script>
    <script language="javascript" src="/js/cataloge/loupe/loupe.js"></script>
    <script language="javascript" src="/js/cart/cart.js"></script>

@stop

@section('main')

    <section id="main">
        <div id="brand2" class="wrapper">
        <a class="navbar-brand" href="/"><img src="/images/college/logoHeader.png"></a>
        </div>
        <div class="button_catalog wrapper">
            <button value="#catalog">We create you dreams!</button>
        </div>

    </section>

@stop

@section('about')
    @include('about')
@stop

@section('catalog')
    @include('cataloge.cataloge')
@stop

@section('price')
    @include('price')
@stop

@section('sizes')
    <section id="sizes">
        <div class="pointer">
            <h2>
                Розміри нанесення
            </h2>
        </div>
        <div class="container">
            <div class="row block_sizes ">
                <div class="item_size">
                    <h3 class="">Розмір A3</h3>
                    <img src="images/A3size.png">
                </div>

                <div class="item_size">
                    <h3 class="">Розмір A4</h3>
                    <img src="images/A4size.png">
                </div>

                <div class="item_size">
                    <h3 class="">Розмір A5</h3>
                    <img src="images/A5size.png">
                </div>

                <div class="item_size">
                    <h3 class="">Розмір A6</h3>
                    <img src="images/A6size.png">
                </div>
            </div>
        </div>
    </section>
@stop

@section('example')

    <section id="example">
        <div class="img-overlay">
            <div class="pointer">
                <h2>
                    Приклади нанесення
                </h2>
            </div>
            <div class="container block_example">
                <div class="row">

                    <div class="item_example">
                        <h3>Плівка</h3>
                        <img src="/images/plivka.jpg">
                        <img src="/images/plivka.jpg">
                    </div>

                    <div class="item_example">
                        <h3>Флок</h3>
                        <img src="/images/flock.jpg">
                        <img src="/images/flock.jpg">
                    </div>

                    <div class="item_example">
                        <h3>Субліфлок</h3>
                        <img src="/images/subflock.jpg">
                        <img src="/images/subflock.jpg">
                    </div>

                    <div class="item_example">
                        <h3>Вишивка</h3>
                        <img src="/images/vishivka.jpg">
                        <img src="/images/vishivka2.jpg">
                    </div>

                </div>
            </div>
        </div>
    </section>

@stop

@section('projects')

  @include('projects')

@stop

@section('clients')

    <section id="clients">
        <div class="pointer">
            <h2>
               Наші клієнти
            </h2>
        </div>
        <div class="container block-clients">
            <img src="/images/clients/ibis.png">
            <img src="/images/clients/rojo.png">
            <img src="/images/clients/skif.png">
            <img src="/images/clients/beselia.png">
            <img src="/images/clients/abu.png">

            <img src="/images/clients/overground.png">

            <img src="/images/clients/vano.png">
            <img src="/images/clients/wow.png">
            <img src="/images/clients/serviceinua.png">
            <img src="/images/clients/titan.png">


        </div>
    </section>

@stop