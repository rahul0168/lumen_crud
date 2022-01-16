@include('layout.header')
<div class="container">
<a href="/"><button class="btn btn-success" >Add Blog</button></a><br><br>

<table class="table table-striped">
    <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
@foreach ($blog as $blogs)
<tr>
    
        
    
    <td> {{ $blogs->name }}</td>
    <td> {{ $blogs->description }}</td>
    <td> <a href="/edit/{{$blogs->id}}"><button class="btn btn-primary">Edit</button></a></td>
    <td> <a href="/delete/{{$blogs->id}}"><button class="btn btn-danger">Delete</button></a></td>
</tr>
@endforeach
</table>
</div>
@extends('layout.footer')
