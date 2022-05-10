@extends('frontend.layouts.master')
@section('content')

    <div class="intro-wrapper">
        <div class="container">
            <form action="{{ route('post.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control"  placeholder="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Location" name="location">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input type="text" class="form-control" placeholder="User" name="user">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Description" name="description"></textarea>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <input type="text" class="form-control" placeholder="Status" name="status">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Approved/Declined</label>
                        <input type="text" class="form-control" placeholder="Approved/Declined" name="approved_declined">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
    <br>
    <br>
            </form>

        </div>
    </div>
@endsection
