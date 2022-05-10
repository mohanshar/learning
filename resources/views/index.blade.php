@extends('layouts.master')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">

<thead>
    <tr>
        <th scope='col'>id</th>
        <th scope='col'>Name</th>
        <th scope='col'>Contact</th>
        <th scope='col'>Profile Picture</th>
        <th scope='col'>Actions </th>
    </tr>
</thead>

<tbody>
    @if(isset($chPros))
        @foreach($chPros as $chPro)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $chPro->name }}</td>
        <td>{{ $chPro->contact }}</td>
        <td>
            <img src="{{ $chPro->image }}" height="50px" width="80px">
        </td>
            <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
            </td>
    </tr>
        @endforeach
    @endif
</tbody>

</table>


@endsection
