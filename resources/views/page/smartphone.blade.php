@extends('layout.smartphone-layout')

@section('content')
<div class="show">
  <h1>Smartphones</h1>
  <table border="1">
    @foreach ($smartphones as $smartphone)

  <tr>
    <td>{{ $smartphone -> id }}</td>
    <td>{{ $smartphone -> brand }}</td>
    <td>{{ $smartphone -> model }}</td>
    <td>{{ $smartphone -> display }}</td>
    <td>{{ $smartphone -> mem_ext }}</td>
    <td><a href="{{ route('str.edit', $smartphone->id) }}"><i class="fas fa-edit"></i></a></td>
    <td>
      <form action="{{ route('str.destroy', $smartphone->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="button">
          <i class="fas fa-trash-alt"></i>
        </button>
      </form>

    </td>
  </tr>
  @endforeach
</table>
  <a href="{{ route('str.create')}}">Create New Smartphone</a>
</div>
@stop
