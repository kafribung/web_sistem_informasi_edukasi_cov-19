@extends('layouts.master')
@section('title', 'Team | Cov.id')
@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card-body ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="box-title text-center">Team</h4>
                            <a href="/team/create" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIM</th>
                                        <th>Img</th>
                                        <th>Job</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal =  1
                                    @endphp
                                    @foreach ($teams as $team)
                                        
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>{{$team->name}}</td>
                                        <td>{{$team->nim}}</td>
                                        <td>
                                            <img src="{{url($team->img)}}" alt="Gambar {{$team->name}}">
                                        </td>
                                        <td>{{$team->job}}</td>

                                        <td>
                                            <a href="/team/{{$team->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                            <form action="/team/{{$team->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Hapus Data {{$team->name}}?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>
            </div>
        </div>

        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
    
@endsection
