




<div class="container info">

    <div class="images">
        <?php
        $images = $item->image;
        $image = explode(',', $images);


        ?>



        <div class="main-image" >

                 <img src="/images/sizes/{{$item->clothes_type}}.jpg"  name="main_img">

        </div>

        <div class="additional_image">
            <a href="javascript:l_image ('/images/sizes/{{$item->clothes_type}}.jpg')"><img src="/images/sizes/{{$item->clothes_type}}.jpg"></a>
            @foreach($image as $items)
                <a href="javascript:l_image ('/{{$items}}')"><img src="/{{$items}}"></a>
            @endforeach

        </div>

    </div>
<hr class="hidden-lg hidden-md">
    <div class="infoTshirt">
        <div>
            <h2 id="tshirt_name">{{$item->name}}</h2>
            <h3 ><span > от 10шт {{$item->priceTo10}}</span> грн</h3>
            <h3 ><span >от 20шт {{$item->priceTo20}}</span> грн</h3>
            <h3 ><span >от 50шт {{$item->priceTo50}}</span> грн</h3>
            <p>Пол: <span id="gender">{{$item->gender}}</span></p>
        </div>

        @if($item->stock == 0)
            <h2 class="span_stock wrapper">Немає в наявності</h2>
        @else
            <div class="size_catalog">
                <label for="size">Розміри в наявності</label>
                <select class="form-control" name="size">
                    @foreach($item->cataloge_sizes as $sizes)
                        <option value="{{$sizes->name}}">{{$sizes->name}}</option>
                    @endforeach
                </select>


            </div>
        @endif

        <div class="desc">
            <h4 class="wrapper">Описание товара</h4>
            <p>{{$item->description}}</p>
        </div>
        <hr class="hidden-lg hidden-md">
    </div>


</div>

