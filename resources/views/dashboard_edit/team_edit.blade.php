@extends('layouts.master')
@section('title', 'Team Edit | Cov.id')
@section('content')

 <!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!--  /Traffic -->
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Team</strong>
                        </div>
                        <div class="card-body">
                            <form action="/team/{{$team->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="off" value="{{old('name')? old('name') : $team->name}}">

                                    @error('name')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nim" class="control-label mb-1">NIM</label>
                                    <input id="nim" name="nim" type="number" class="form-control @error('nim') is-invalid @enderror"  required autocomplete="off" value="{{old('nim') ? old('nim') : $team->nim}}">

                                    @if ($errors->has('nim'))
                                        <p class="alert alert-danger">{{$errors->first('nim')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Img</label>

                                    <img src="{{ url($team->img)}}" width="200" height="200" alt="{{$team->name}}">
                                    <input id="img" name="img" type="file" class="form-control @error('img') is-invalid @enderror"  accept="image/*" autocomplete="off">

                                    @error('img')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="job" class="control-label mb-1">Job</label>
                                    <input id="job" name="job" type="text" class="form-control @error('job') is-invalid @enderror"  required autocomplete="off" value="{{old('job') ? old('job') : $team->job}}">

                                    @if ($errors->has('job'))
                                        <p class="alert alert-danger">{{$errors->first('job')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-warning btn-block">Update Team</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.orders -->
        <!-- /#add-category -->
    </div>
    <!-- .animated -->

</div>
<!-- /.content -->   
@endsection

