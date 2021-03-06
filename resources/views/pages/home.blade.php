@extends('layouts.master_page')
@section('title', 'Cov.id | Edukasi Lengkap Covid-19')
@section('content')
     <!--::our client part start::-->
    <div>
        <section id="informasi" class="event_part">
            <div class="container">
                <div class="featured-property-half d-flex">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="section-heading">
                                <h4>Artikel Terbaru</h4>
                                <div class="line"></div>
                            </div>
                            <div class="image">
                                <img title="{{$artikel->title}}" alt="{{$artikel->title}}" src="{{ url($artikel->img)}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text" style="margin-top: 12%">
                                <h3><a href="/show/artikel/{{$artikel->slug}}" class="post-title">{{$artikel->title}}</a></h3>
                                <ul>
                                    <li>Ditulis Oleh : {{$artikel->user->name}}</li>
                                </ul>
                                <div class="mb-5">
                                    {!! Str::limit($artikel->description, 500) !!}
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$artikel->created_at->format('d M Y')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="section-heading">
                                <h4>Video Terbaru</h4>
                                <div class="line"></div>
                            </div>
                            <div class="image ml-4 mb-30 mr-2">
                                <iframe  style="width:100%; height:280px;" src="{{$video->video}}"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6" >
                            <div class="text" style="margin-top: 15%">
                                <h3><a href="/show/video/{{$video->slug}}" class="post-title">{{$video->title}}</a></h3>
                                <ul>
                                    <li>Ditulis Oleh : {{$video->user->name}}</li>
                                </ul>
                                <div class="mb-5">
                                    {!! Str::limit($video->description, 500) !!}
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$video->created_at->format('d M Y')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- All Artikels & Videos --}}
                    <div class="pad">
                        <!-- All Artikels -->
                        <div class="row">
                            <div class="col-sm-12 section-heading style-2">
                                <h4>Artikel Lengkap</h4>
                                <div class="line"></div>
                            </div>
                            
                            @foreach ($artikels as $artikel)
                            <div class=" col-sm-4">
                                <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img title="{{$artikel->title}}" alt="{{$artikel->title}}" src="{{ url($artikel->img)}}">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <h4><a href="/show/artikel/{{$artikel->slug}}" class="post-title">{{$artikel->title}}</a></h4>
                                            <ul>
                                                <li>Ditulis Oleh : {{$artikel->user->name}}</li>
                                            </ul>
                                            <div>{!! Str::limit($artikel->description, 70) !!}</div>
                                            <ul class="list-unstyled">
                                                <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$artikel->created_at->format('d M Y')}}</li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- END All Artikels -->

                        <!-- All Videos -->
                        <div class="row">
                            <div class="col-sm-12 section-heading style-2">
                                <h4>Video Lengkap</h4>
                                <div class="line"></div>
                            </div>

                            @foreach ($videos as $video)
                                <div class="col-sm-4 pb-4">
                                    <div class="single-post-area">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <iframe class="responsive-iframe"  src="{{$video->video}}"></iframe>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <h4><a href="/show/video/{{$video->slug}}" class="post-title">{{$video->title}}</a></h4>
                                            <ul>
                                                <li>Ditulis Oleh : {{$video->user->name}}</li>
                                            </ul>
                                            <div>{!! Str::limit($video->description, 70) !!}</div>
                                            <ul class="list-unstyled">
                                                <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$video->created_at->format('d M Y')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <!-- END All Videos -->
                    </div>
                </div>
            </div>

        </section>
        <!--::our client part start::-->
        <!--::Rumas Sakit::-->
        <section class="kasus" id="rumahSakit">
            <div class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <button href="#" class="btn btn-primary" disabled>Rumash Sakit Rujukan Covid-19</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <iframe style="height:1400px; width:100%; border: none;" src="https://databoks.katadata.co.id/datapublishembed/114994/132-rumah-sakit-rujukan-covid-19-di-indonesia"></iframe>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="pad">
                                <img src="{{asset('asset/img/132-RS-Rujukan-Cov-id.png')}}" alt="Error" title="Gambar Rumah Sakit Rujukan">
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::Rumah Sakit::-->
    
        <!--::Kasus::-->
        <section class="kasus" id="kasus">
            <div class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <button href="#" class="btn btn-primary" disabled>Kasus Indonesia</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-center">Lebih Dari <a href="">29.000</a> Orang Sembuh dari Penyakit Ini </h4>
                        </div>
                    </div>
    
                    <div class="row text-center">
                        <div class="col-sm-4">
                                <div class="count-box ">
                                    <div class="box1">
                                        <span data-toggle="counter-up">{{$indonesia[0]['positif']}}</span>
                                    </div>
                                    <p><strong>Terjangkit</strong></p>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="count-box">
                                    <div class="box2">
                                        <span data-toggle="counter-up">{{$indonesia[0]['sembuh']}}</span>
                                    </div>
                                    <p><strong>Sembuh</strong></p>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="count-box">
                                    <div class="box3">
                                        <span data-toggle="counter-up">{{$indonesia[0]['meninggal']}}</span>
                                    </div>
                                    <p><strong>Meninggal</strong></p>
                                </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-peta">
                                <h5 class="text-center">Tabel Sebaran</h5>
                            </div>
                        </div>

                        <div class="col-sm-12 table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">Positif</th>
                                        <th scope="col">Sembuh</th>
                                        <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal= 1
                                    @endphp
                                    @foreach ($provinsis as $provinsi)
                                        <tr>
                                            <th scope="row">{{$angkaAwal}}</th>
                                            <td>{{$provinsi['attributes']['Provinsi']}}</td>
                                            <td>{{number_format($provinsi['attributes']['Kasus_Posi'])}}</td>
                                            <td>{{number_format($provinsi['attributes']['Kasus_Semb'])}}</td>
                                            <td>{{number_format($provinsi['attributes']['Kasus_Meni'])}}</td>
                                        </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @endforeach

                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::Kasus::-->

        <section class="hotline" id="global">
            <div class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <button href="#" class="btn btn-primary" disabled>Kasus Global</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-center">Jumlah Pasien Sembuh Lebih Banyak Dari yang Meninggal </h4>
                        </div>
                    </div>
    
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="count-box">
                                <div class="box1">
                                    <span data-toggle="counter-up">{{$global_positif['value']}}</span>
                                </div>
                                <p><strong>Terjangkit</strong></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="count-box">
                                <div class="box2">
                                    <span data-toggle="counter-up">{{$global_sembuh['value']}}</span>
                                </div>
                                <p><strong>Sembuh</strong></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="count-box">
                                <div class="box3">
                                    <span data-toggle="counter-up">{{$global_meninggal['value']}}</span>
                                </div>
                                <p><strong>Meninggal</strong></p>
                            </div>
                        </div>
                    </div>
    
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <div class="text-peta">
                                <h5 class="text-center">Tabel Sebaran</h5>
                            </div>
                        </div>

                        <div class="col-sm-12 table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Negara</th>
                                        <th scope="col">Positif</th>
                                        <th scope="col">Sembuh</th>
                                        <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal= 1
                                    @endphp
                                    @foreach ($globals as $global)
                                        <tr>
                                            <th scope="row">{{$angkaAwal}}</th>
                                            <td>{{$global['attributes']['Country_Region']}}</td>
                                            <td>{{number_format($global['attributes']['Confirmed'])}}</td>
                                            <td>{{number_format($global['attributes']['Recovered'])}}</td>
                                            <td>{{number_format($global['attributes']['Deaths'])}}</td>
                                        </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @endforeach

                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::Hotline::-->
        
        <!--::End Hotline ::-->
    
        <section class="team" id="team">
            <div class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <button href="#" class="btn btn-primary" disabled> Team</button>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-sm-12">
                            
                                <h4>Team Pengembang</h4>
                            </center>
                        </div>
                    </div>
    
    
                    <div class="site-section block-13">
                        <div class="container" data-aos="fade-up">
                            <div class="nonloop-block-13 owl-carousel">
                                
                                @foreach ($teams as $team)
                                    <div class="text-center p-3 p-md-3 bg-white">
                                        <div class="mb-4">
                                            <img src="{{url($team->img)}}" alt="Image"
                                                class="w-50 mx-auto img-fluid rounded-circle">
                                        </div>
                                        <div class="text-black">
                                            <h3 class="font-weight-light h5">{{$team->name}}</h3>
                                            <p class="font-italic">&ldquo;{{$team->job}}&rdquo;</p>
                                            <p class="font-italic">&ldquo;{{$team->nim}}&rdquo;</p>

                                        </div>
                                    </div>
                                @endforeach

    
                            </div>
    
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::our client part end::-->
    </div>

@endsection