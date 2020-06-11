@extends('layouts.master')
@section('title', 'Video Create | COv.Id')
@section('content')

 <!-- Content -->
<div class="content">
    
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class=" card ">
                    <div class="card-body ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="box-title text-center">Add Video</h4>
                            </div>
                            <div class="card-body">
                                <form action="/video" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="control-label mb-1">Title</label>
                                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"  autofocus autocomplete="off" value="{{old('title')}}">
    
                                        @error('title')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="video" class="control-label mb-1">Vidoe</label>
                                        <input id="video" name="video" type="url" class="form-control @error('video') is-invalid @enderror"  autocomplete="off" value="{{old('video')}}">
    
                                        @error('video')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">Description</label>
                                        <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror"  >{{old('description')}}</textarea>
    
                                        @error('description')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>
    
    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-info btn-block">Tambah Video</button>
                                    </div>
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   

@push('after_script')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
    </script>
@endpush
@endsection

