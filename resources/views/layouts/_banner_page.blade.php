<section class="banner_part">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="banner_text text-center">
                    <div class="banner_text_iner">
                        <h2>COVID-19 DAPAT DISEMBUHKAN</h2>
                        @php
                            use App\Models\Motivasi;
                            $motivasi = Motivasi::inRandomOrder()->first();
                        @endphp
                        <div>
                            {!! $motivasi->description !!}
                        </div>
                        <a href="https://corona.alodokter.com/cek-risiko-tertular-virus-corona-gratis?ref=Cov.id" target="_blank" class="btn_2">Periksa Diri</a>

                        <img src="{{ asset('asset/img/ilustrasi.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>