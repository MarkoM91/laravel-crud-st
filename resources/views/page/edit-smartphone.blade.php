@extends('layout.smartphone-layout')

@section('content')
  <h1>EDIT CAR</h1>
  <div class="edit">
      <form method="post" action="{{ route('str.update', $smartphone->id) }}">
        @csrf
        @method ('PATCH')
        <div>
          <label for="brand">Brand</label>
          <input type="text" name="brand" value="{{ $smartphone->brand }}">
        </div>
        <div>
          <label for="model">Model</label>
          <input type="text" name="model" value="{{ $smartphone->model }}">
        </div>
        <div>
          <label for="display">Display</label>
          <input type="text" name="display" value="{{ $smartphone->display }}">
        </div>
        <div>
          <label for="mem_ext">Mem_ext</label>
          <input type="text" name="mem_ext" value="{{ $smartphone->mem_ext }}">
        </div>
        <button type="submit" name="SAVE NEW CAR">SAVE NEW CAR</button>
      </form>
  </div>
@stop
