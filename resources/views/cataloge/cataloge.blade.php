<section id="catalog">
    <div class="pointer">
        <h2>
            Каталог
        </h2>
    </div>
    <button type="button" class="navbar-toggle collapse-filter wrapper hidden-md hidden-lg" data-toggle="collapse" data-target="#filter-collapse-1">
        <span>Фільтри</span>
    </button>
    <div class="container cataloge">

        <div class="collapse hidden-md hidden-lg" id="filter-collapse-1">
            <div>
                <span>Продукт</span>
                <div class="product">
                    <ul class="nav ">
                        <li>
                            <button  class="btn all">Все</button>
                        </li>

                        <li>
                            <button  class="btn tshirts">Футболки</button>
                        </li>

                        <li>
                            <button   class="btn polo">Поло</button>
                        </li>

                        <li>
                            <button  class="btn hoodie">Худи</button>
                        </li>

                        <li>
                            <button  class="btn sweatshirts">Свитшоты</button>
                        </li>

                        <li>
                            <button  class="btn bombers">Бомберы</button>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>

            <div>
                <span>Размеры</span>


                <div class="sizes_product">
                    <ul class="nav">
                        @foreach($size as $sizes)
                        <li>
                        <button  class="filter_btn" value="{{$sizes->size_i}}">{{$sizes->name}}</button>
                        </li>

                        @endforeach

                    </ul>
                </div>
                <hr>

            </div>

        </div>
        <a href="#back" id="back_to_catalog">Назад</a>
        <div class="filter hidden-sm hidden-xs">
            <div>
                <a  class="off-product"><i class="fa fa-sort-up"></i>Продукт</a>
                <a  class="on-product"><i class="fa fa-sort-down"></i>Продукт</a>
                <div class="product">
                    <ul class="nav ">
                        <li>
                            <button  class="btn typeClothes" value="all">Все</button>
                        </li>

                        <li>
                            <button   class="btn typeClothes" value="tshirt">Футболки</button>
                        </li>

                        <li>
                            <button   class="btn typeClothes" value="polo">Поло</button>
                        </li>

                        <li>
                            <button  class="btn typeClothes">Худи</button>
                        </li>

                        <li>
                            <button  class="btn typeClothes">Свитшоты</button>
                        </li>

                        <li>
                            <button  class="btn typeClothes">Бомберы</button>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>

            <div>
                <a  class="off-sizes"><i class="fa fa-sort-up"></i>Размеры</a>
                <a  class="on-sizes"><i class="fa fa-sort-down"></i>Размеры</a>

                <div class="sizes_product">
                    <ul class="nav">
                        <li>
                            <button  class="filter_btn" value="S">XS</button>
                        </li>
                        <li>
                            <button  class="filter_btn" value="S">S</button>
                        </li>
                        <li>
                            <button  class="filter_btn" value="S">M</button>
                        </li>

                        <li>
                            <button  class="filter_btn" value="S">L</button>
                        </li>

                        <li>
                            <button  class="filter_btn" value="S">XL</button>
                        </li>

                        <li>
                            <button  class="filter_btn" value="S">XXL</button>
                        </li>
                    </ul>
                </div>
                <hr>

            </div>

        </div>


        <div class="content row">
            @include('/cataloge/preview/widget_item', array('content' => $content))

        </div>

        <div class="content2 row">

        </div>
        <div class="wrapper row">
            <div class="pag">
                {{$content->links()}}
            </div>

        </div>
    </div>
</section>