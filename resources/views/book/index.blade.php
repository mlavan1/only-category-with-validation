@extends('book.layout')
<style>
    body{
        width:50%;
        font-size:100;
    }
    
</style>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5>Add New Category</h5>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('book.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('index.store') }}" method="POST">
    @csrf

    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category Name:</strong>
                    <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                
        </div>
    </div>
    <div class="pull-right">
                </div>  
                
@endsection