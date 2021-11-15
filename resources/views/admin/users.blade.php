@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')

 <div class="box">
      <div class="box-header with-border">
        <h3 class=" Default Box " > Users</h3>
        <div class="box-tools pull-right">
         <a class="btn btn-primary" > Add User</a>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class ='table table-border' >
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                </tr>
            </thead>
            @if(count($users)>0)
                @foreach($users as $user)
                    <tr>
                         <td>{{$user->id}}</td>
                         <td>{{$user->name}}</td>
                         <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        The footer of the box
      </div>
      <!-- box-footer -->
    </div>
<!-- /.box -->

@stop






