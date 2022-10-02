@include('sweetalert::alert')
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>KONTAK</h6>
                        <h2>Apabila Ada Petanyaan Silakan Kontak Kami</h2>
                    </div>
                    <p style="font-size: 15px; text-align: justify;">Berikut Ini Adalah Kontak Kami. Apabila ini Bertanya Tentang Produk / Pesanan Ataupun Konfirmasi Pembayaran Silakan Hubungi Di Nomer Telpon Atau Email Berikut ini! <br> <br> <b>Perhatian untuk mengisi form konfirmasi pembayaran NAMA, ALAMAT, dan NOMER TELPON harus sama dengan form pengiriman. </b></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Nomer Telpon</h4>
                                <span><a>0851-5606-1958</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <span><a>taticakebekasi@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('konfirmasipayment')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Konfirmasi Pembayaran </h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Nama Anda*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Anda*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Nomer Telpon*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" name="address" placeholder="Alamat*" required="">
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input name="date" id="date" type="text" class="form-control" placeholder="Tanggal Pembelian*" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="file" name="image" required="">
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Pesan*" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Konfirmasi Pembayaran</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->