@extends('layout.main')
@section('content')

<form action="{{route('postcreate')}}" method="post">
    <h1> AJOUTEZ UN ARTICLE </h1>
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">utilisateur</label>
        <input name="user" type="text" class="form-control" id="exampleFormControlInput1" placeholder="User">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom ar ticle</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom article">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">image</label>
          <input name="image" type="text" class="form-control" id="exampleFormControlInput1" placeholder="image">
        </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
</form>



@stop