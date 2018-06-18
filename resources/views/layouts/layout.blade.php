<!DOCTYPE html>

<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">

    <title>  UniwearStyle </title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="/images/logo.jpg">


    <script  src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>



    <script language="javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="/bootstrap/css/fa/font-awesome.css" type="text/css" media="screen" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="/js/index.js"></script>

    <link rel="stylesheet" href="/css/layout.css">
    <link href="/css/auth.css" rel="stylesheet">
    <script language="javascript" src="/js/menu.js"></script>


    @yield('head_extra')
</head>
<body>

<header role="banner" class="navbar navbar-default navbar-fixed-top"  id="head">
    <div>

        <button type="button" class="navbar-toggle collapse-mobile " data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>




    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <nav class="menu wrapper" role="navigation">

            <ul class="nav nav-justified menu-mobile">

                <li>
                    <a href="#main"  class="scroll-js">Головна</a>
                </li>

                <li>
                    <a href="#about" class="scroll-js">Про нас</a>
                </li>

                <li>
                    <a href="#catalog" class="scroll-js">Каталог</a>
                </li>

                <li>
                    <a href="#price"  class="scroll-js">Таблиця цін нанесення</a>
                </li>

                <li>
                    <a href="#sizes"  class="scroll-js">Розміри нанесення</a>
                </li>

                <li>
                    <a href="#example"  class="scroll-js">Приклади нанесення</a>
                </li>
                <li>
                    <a href="#projects"  class="scroll-js">Наші проекти</a>
                </li>

                <li>
                    <a href="#clients"  class="scroll-js">Наші клієнти</a>
                </li>



                @if(Sentinel::getUser())
                    @if(Sentinel::inRole('admin') or Sentinel::inRole('moderator'))
                        <li>

                            <a href="/admin"><i class="fa fa-wrench "></i>Панель адміна</a>
                        </li>
                    @endif
                @endif

            </ul>
        </nav>



    </div>

</header>




@yield('content')
@yield('main')
@yield('about')
@yield('catalog')
@yield('price')
@yield('sizes')
@yield('example')
@yield('projects')
@yield('clients')



<div id="footer">
    <div class="container">

            <div class="wrapper">
        <div class="footer_social ">
            <a href="#"><i class="fa fa-vk fa-2x "></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
        </div>




        <div class="copy ">
            <div> &copy;UniwearStyle</div>
            <div>   CREATED BY <a href="http://kazni/" class="">Kazni</a></div>
        </div>
            </div>
    </div>
</div>

</body>
</html>