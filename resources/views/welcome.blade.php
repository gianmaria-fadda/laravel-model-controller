@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Model Controller
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{ $movie->id  }}</th>
            <td>{{ $movie->title  }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
