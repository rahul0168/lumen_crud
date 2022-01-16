
@include('layout.header')

<div class="container">
<div class="row">
    
    <center><h3 style="color:black;">Blog Post</h3></center>
<form method="POST" action="/store">
  <div class="col-md-12">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
</div>
<div class="col-md-12">

    <label>Description</label>

    <textarea rows="4" class="form-control" name="description"></textarea><br>
    <button class="btn btn-success" type="submit">Submit</button>
</div>
</form>
</div>
</div>

@extends('layout.footer')


