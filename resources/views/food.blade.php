@include('sweetalert::alert')
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>MENU</h6>
                    <h2>Pilihan Produk Kue Kami Dengan Rasa Berkualitas</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="post">
                    @csrf
                    <div class="item">
                        <div style="background-image : url('/storage/menu/{{$data->image}}');" class='card'>
                            <div class="price">
                                <h6>{{$data->Price}} K</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{$data->title}}</h1>
                                <p class='description'>{{$data->description}}</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                        <input type="number" name="quantity" min="1" value="1" style="width: 70px;">
                        <input style="color: red;" type="submit" value="+ KERANJANG">
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</section>