@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class=" Default Box ">Add New Categories</h3>
            <div class="box-tools pull-right">
                <a class="btn btn-primary" href="{{route('categories.index')}}" > View All Categories</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @include('partial.alert')
            <form action="{{route('categories.store')}}" method='post'>
                @csrf
                <div class = "form-group">
                    <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Category Name " >
                </div>
                <div class="form-group">
                    <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            The footer of the box
        </div>
        <!-- box-footer -->
    </div>
    <!-- /.box -->

@stop


