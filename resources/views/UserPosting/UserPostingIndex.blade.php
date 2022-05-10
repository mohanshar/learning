    @extends('backend.layouts.master')
    @section('content')


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    table {
text-align: center;
    }
</style>

  <table class="table">

  <thead>
      <tr>
          <th scope='col'>Id</th>
          <th scope='col'>Name</th>
          <th scope='col'>Location</th>
          <th scope='col'>Mobile Number</th>
          <th scope='col'>User</th>
          <th scope='col'>Description</th>
          <th scope='col'>Image</th>
          <th scope='col'>Status</th>
          <th scope='col'>Approved/Declined</th>
          <th scope='col'>Actions</th>
      </tr>
  </thead>

  <tbody>
      @if(isset($posts))
          @foreach($posts as $post)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->name }}</td>
          <td>{{ $post->location }}</td>
          <td>{{ $post->mobile_no }}</td>
          {{-- <td>{{ Auth::user()->name }}</td> --}}
          <td>{{ $post->description }}</td>
          <td>
              <img src="{{ $post->image }}" width="80px">
          </td>
          <td>{{ $post->status }}</td>
          <td>{{ $post->approved_declined }}</td>
              <td>
              <a href="{{ route('post.delete', $post->id) }}">Delete</a>
              </td>
      </tr>
          @endforeach
      @endif

          {{-- {{ isset($posts) ? $posts->links() : '' }} --}}

  </tbody>

  </table>


    @endsection
