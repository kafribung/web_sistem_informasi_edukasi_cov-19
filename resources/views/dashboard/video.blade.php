@extends('layouts.master')
@section('title', 'Video | Cov.id')
@section('content')

 <!-- Content -->
<div class="content">
    
    <!-- Animated -->
    <div class="animated fadeIn">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        <div class="row">
             @foreach ($videos as $video)
                <div class="col-md-3">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header">
                                <h5 class="badge badge-info">Vidoe</h5>
                                <strong class="card-title mb-3">{{$video->title}}</strong>
                            </div>

                            <div class="card-header alt bg-dark">
                                <iframe class="align-self-center mr-3" style="width:100%" src="{{$video->video}}"></iframe>
                            </div>

                            <div class="card-body">
                                {!! Str::limit($video->description, 80) !!}
                            </div>

                            <hr>

                            @if ($video->author())
                                <div class="card-text text-sm-center">
                                    <a href="/video/{{$video->slug}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                    <form action="/video/{{$video->id}}" method="POST" class="d-inline-flex">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Hapus Data {{$video->title}} ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            @endif


                        </section>
                    </aside>
                </div>

             @endforeach
                

        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   
@endsection

