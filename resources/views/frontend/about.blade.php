@extends('frontend.pagelayout')
@section('content')
 <!-- ======= Breadcrumbs Section ======= -->
 <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Profil Puskesmas</li>
            </ol>
        </div>

        <!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tentang Kami</h2>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="{{ asset('frontend/assets/img/slide/bg1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p>
            Puskesmas Sukamulya Kecamatan Sukaresmi Kabupaten Garut merupakan salah satu Puskesmas Pedesaan milik Pemerintah daerah Kabupaten Garut
            yang terletak di Desa Sukamulya Kecamatan Sukaresmi Kabupaten Garut yang dapat melayani pasien Umum dan BPJS.
            Kami memiliki tujuan untuk memberikan layanan kesehatan berkualitas tinggi kepada masyarakat di wilayah
            Kecamatan Sukaresmi dan sekitarnya. Sebagai bagian integral dari sistem kesehatan,
            Puskesmas Sukamulya berperan penting dalam upaya meningkatkan derajat kesehatan masyarakat dan mewujudkan visi kesehatan yang optimal.
            Puskesmas Sukamulya memiliki fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan
            perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang
            setinggi-tingginya. Puskesmas Sukamulya memberikan pelayanan kesehatan yang berkualitas dan efektif untuk memberikan nilai terbaik,
            sehingga menjadi pilihan utama bagi semua masyarakat.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

    </div>
</section><!-- End Breadcrumbs Section -->

@endsection
