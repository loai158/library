@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Upload File</div>
    <div class="panel-body">
        @include('partial.alert')
        <form action="{{route('upload.save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="text" name="author" id="author" placeholder="Enter Author" class="form-control"/>
            </div>
            <div class="form-group">
                <textarea name="info" class="form-control" id="info" placeholder="Some info on Book"></textarea>
            </div>
              <div class="form-group">
                    <select class="form-control" name="category">
                        @if (count($allcategories) > 0)
                            @foreach($allcategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endif
                    </select>
              </div>
            <div class="form-group">
                <input type="file" name="image" id="image" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="file" name="book" id="book" class="form-control"/>
            </div>
            <div class="form-group">
               <button type="submit" name="uplaod" class="btn btn-primary btn-block">Upload Book</button>
            </div>
        </form>
    </div>
</div>

@endsection
