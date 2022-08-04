<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6 id="pembuat">Pembuat</h6>
                    <h2>Kami Menyediakan<br> bahan-bahan terbaik untuk anda</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($data2 as $data2)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <img height="300" width="290" src="{{asset('/storage/pembuat/'.$data2->image)}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{$data2->name}}</h4>
                        <br>
                        <span>{{$data2->speciality}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->