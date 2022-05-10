@extends('frontend.layouts.master')
@section('content')
    <div class="intro-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xl-4 ms-auto mt-5">
                    <h3>Let's start something big together</h3>
                    <label for="">Get your update <span>news</span></label>
                    <div class="news-form">

                        <form action="{{ route('send.mail') }}" method="post">

                            @csrf

                            <input type="text" name="name" value="" placeholder="Enter your name" required="true">
                            <input type="email" name="email" value="" placeholder="Enter your email" required="true">
                            <button class="main-btn" type="submit">Send <img style="width: 15px; margin-left: 15px;"
                                                                             src="{{ asset('img/icon/arrow-right-icon-black.svg') }}" alt=""></button>

                        </form>

    </div>
@endsection
