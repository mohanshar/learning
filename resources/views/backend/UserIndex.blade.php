@extends('backend.layouts.master')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">

<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Name</th>
        <th scope='col'>Address</th>
        <th scope='col'>Contact</th>
        <th scope='col'>Email</th>
        <th scope='col'>Image</th>
    </tr>
</thead>

<tbody>
    @if(isset($profiles))
        @foreach($profiles as $profile)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ Auth::user()->name }}</td>
        <td>{{ $profile->address }}</td>
        <td>{{ $profile->contact }}</td>
        <td>{{ $profile->email }}</td>

        <td>
            <img src="{{ $profile->image }}" height="50px" width="80px">
        </td>

    </tr>
        @endforeach
    @endif
</tbody>

</table>


@endsection
