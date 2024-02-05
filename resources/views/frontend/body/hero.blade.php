<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            @php
                $heros = App\Models\Hero::select('id', 'title','description','hero_image')->orderBy('id', 'desc')->get();
            @endphp

            @foreach ($heros as $hero )
            <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/slide/'.$hero->hero_image) }})">
                <div class="container">
                    <h2>{!! $hero->title !!}</h2>
                    {{-- {!! $name !!} --}}
                    {!! $hero->description !!}
                </div>
            </div>
            @endforeach

            {{-- <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/slide/slide.png') }})">
                <div class="container">
                    <h2>Selamat Datang di<span class=""> UPT Puskesmas Sukamulya </span></h2>
                    <p>"Melayani dengan Penuh Keikhlasan"</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/bg1.png') }})">
                <div class="container">
                    <h2>VISI</h2>
                    <p>”Garut yang Bertaqwa, Maju dan Sejahtera”</p>
                </div>
            </div>

             <!-- Slide 3 -->
             <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/bg3.png') }})">
                <div class="container">
                    <h2>MISI</h2>
                    <ol >
                        <li>Mewujudkan kualitas kehidupan masyarakat yang agamis, sehat, cerdas, dan berbudaya.</li>
                        <li>Mewujudkan pelayanan publik yang profesional dan amanah disertai tata kelola pemerintahan daerah yang baik dan bersih.</li>
                        <li>Mewujudkan pemerataan pembangunan yang berkeadilan serta kemantapan infrastruktur sesuai daya dukung dan daya tampung lingkungan serta fungsi ruang.</li>
                        <li>Meningkatkan kemandirian ekonomi masyarakat berbasis potensi lokal dan industri pertanian serta pariwisata yang berdaya saing disertai pengelolaan sumber daya alam secara berkelanjutan.</li>
                    </ol>
                </div>
            </div> --}}

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
