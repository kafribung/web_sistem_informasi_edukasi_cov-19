@extends('layouts.master')
@section('title', 'Admin | Cov.id')
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
                            <h4 class="box-title text-center">Admin</h4>
                            <a href="/admin/create" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal =  1
                                    @endphp
                                    @foreach ($users as $user)
                                        
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role == 1 ? 'active' : 'no active'}}</td>
                                        <td>
                                            <a href="/admin/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                            <form action="/admin/{{$user->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Hapus Data {{$user->email}}?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
