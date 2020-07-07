@extends('layouts.master_page')
@section('title', 'Cov.id | Edukasi Lengkap Covid-19')
@section('content')
     <!--::our client part start::-->

     <section id="informasi" class="event_part">
        <div class="container">
            <div class="featured-property-half d-flex ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-heading">
                            <h3>{{$video->title}}</h3>
                            <h6>Ditulis Oleh : {{$video->user->name}} - {{$video->created_at->format('d M Y')}} </h6>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="text-center">
                            <iframe style="width:600px; height:400px;" src="{{$video->video}}"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-12 m-4">
                        <div class="text">
                            <div class="mb-5">
                                {!! $video->description !!}
                            </div>
                            <ul class="list-unstyled">
                                <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$video->created_at->format('d M Y')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--::our client part end::-->

@endsection