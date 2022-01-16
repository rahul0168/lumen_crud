@include('layout.header')
<div class="container">
    <div class="row">
        
        <center><h3 style="color:black;">Edit Blog Post</h3></center>
<form method="POST" action="/update/{{$blog->id}}">
    <div class="col-md-12">
    <label>Name</label>
    <input type="text" name="name" value="{{ $blog->name }}" class="form-control">
    </div>
    <div class="col-md-12">
    <label>Description</label>

    <textarea rows="4" name="description" class="form-control">{{ $blog->description }}</textarea><br>
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>
</div>
</div>

@extends('layout.footer')
