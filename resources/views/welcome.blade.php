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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
@endsection
