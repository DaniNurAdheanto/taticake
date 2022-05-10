<!-- ***** Menu Area Starts ***** -->
<base href="/public">
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Klassy Week</h6>
                    <h2>This Week’s Special Meal Offers</h2>
                </div>
            </div>
        </div>



        <div class="col-lg-12">
            <section class='tabs-content'>
                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="right-list">
                            <div class="col-lg-12">
                                <img height="50" width="50" src="/foodimage/{{$data->image}}">
                                <h4 class='title'>{{$data->title}}</h4>
                                <p>Kue Lebaran Yang Sangat Indentik dengan Lebaran </p>
                                <div class="price">
                                    <h6>{{$data->Price}}K</h6>
                                    <input type="number" name="quantity" min="1" value="1" style="width: 70px;">
                                    <input type="submit" value="Add Cart">
                                </div>
                                <div class="tab-item">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </section>
        </div>

    </div>



</section>