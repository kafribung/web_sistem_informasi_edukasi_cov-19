@extends('layouts.master_page')
@section('title', 'Cov.id | Edukasi Lengkap Covid-19')
@section('content')
     <!--::our client part start::-->

     <section id="informasi" class="event_part">
        <div class="container">
            <div class="featured-property-half d-flex ">
                <div class="row">
                    <div class="col-sm-12 ml-5 mr-5 mt-5">
                        <h2>{{$artikel->title}}</h2>
                        <h6>Ditulis Oleh : {{$artikel->user->name}}</h6>
                    </div>

                    <div class="col-sm-12">
                        <div class="text-center">
                            <img src="{{ url($artikel->img) }}" width="600px" height="400px">
                        </div>
                    </div>
                    <div class="col-sm-12 ml-5 mr-5 mt-0 mb-5">
                        <div class="text">
                            
                            <div class="mb-5">
                                {!! $artikel->description !!}
                            </div>

                            <ul class="list-unstyled">
                                <li><a href=""> <span class="flaticon-calendar"></span> </a>{{$artikel->created_at->format('d M Y')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--::our client part end::-->

@endsection