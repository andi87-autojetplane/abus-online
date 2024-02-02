@extends('frontend.pagelayout');
@section('content')
     <!-- ======= Breadcrumbs Section ======= -->
     <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Kontak</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Kontak</h2>
            <p>Peta Lokasi di Google Maps : </p>
          </div>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8368854822343!2d107.7959749737963!3d-7.259397371317738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68a4d10001ea73%3A0x413df03845304f7d!2sUPT%20PUSKESMAS%20SUKAMULYA!5e0!3m2!1sid!2sid!4v1706721563265!5m2!1sid!2sid"
            style="border:0;border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Alamat kami</h3>
                    <p>Jalan Sukamulya No. 12 Kp. Sukahurip RT/RW 001/006 Desa Sukamulya Kecamatan Sukaresmi Kabupaten Garut Provinsi Jawa Barat Kode Pos 44163</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Kami</h3>
                    <p>pkm.sukamulyagarut@gmail.com<br>contact@pkmsukamulya.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Hubungi Kami</h3>
                    <p>+62 822-1907-9848<br>+62 821-2743-8552</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Perihal" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="7" placeholder="Pesan" required=""></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
@endsection
