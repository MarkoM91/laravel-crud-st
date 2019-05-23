@extends('layout.smartphone-layout')

@section('content')
  <h1>CREATE NEW CAR</h1>
  <div class="edit">
      <form method="post" action="{{ route('str.store') }}">
        @csrf
        <div>
          <label for="brand">Brand</label>
          <input type="text" name="brand" value="">
        </div>
        <div>
          <label for="model">Model</label>
          <input type="text" name="model" value="">
        </div>
        <div>
          <label for="display">Display</label>
          <input type="text" name="display" value="">
        </div>
        <div>
          <label for="mem_ext">Mem_ext</label>
          <input type="text" name="mem_ext" value="">
        </div>
        <button type="submit" name="SAVE NEW CAR">SAVE NEW CAR</button>
      </form>
  </div>
@stop
