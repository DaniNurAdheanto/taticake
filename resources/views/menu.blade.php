<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>MENU</h6>
                    <h2>Pilihan Produk Kue Kami Dengan Rasa Berkualitas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($data as $data)
            <div class="col-lg-4">
                <div class="chef-item">
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                        @csrf
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img height="250" width="150" src="{{asset('/storage/menu/'.$data->image)}}">
                        </div>
                        <div class=" down-content">
                            <h4 class='title'>{{$data->title}}</h4>
                            <p style="color: black;" class='description'>{{$data->description}}</p>
                            <div class="price">
                                <p style="font-size: 20px ;"><b>{{$data->Price}} K</b></p>
                            </div>
                            <br>
                            <input type="number" name="quantity" min="1" value="1" style="width: 70px;">
                            <input style="color: red;" type="submit" value="+ KERANJANG">
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>