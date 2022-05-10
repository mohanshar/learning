@extends('frontend.layouts.master')
@section('content')

<div class="intro-wrapper">
    <div class="container">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card card-registration my-4">
                    {{-- <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                        <img
                          src="{{ asset('img\img4.webp') }}"
                          alt="Sample photo"
                          class="img-fluid"
                          style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
                      </div> --}}
                      <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Update your information</h3>
                                <form action="{{ route('update.profile') }}" name="form" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="row">
                            <div class="form-outline mb-4">
                              <div class="form-outline">
                                <input type="text" id="form3Example1m" value="{{ Auth::user()->name ? Auth::user()->name : '' }}" class="form-control form-control-lg" name="name" />
                                <label class="form-label" for="form3Example1m">Name</label>
                              </div>
                            </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example8" value="{{ Auth::user()->address ? Auth::user()->address : '' }}" class="form-control form-control-lg" name="address" />
                            <label class="form-label" for="form3Example8">Address</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example97" value="{{ Auth::user()->contact ? Auth::user()->contact : '' }}" class="form-control form-control-lg" name="contact" />
                            <label class="form-label" for="form3Example97">Phone Number</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example97" value="{{ Auth::user()->email ? Auth::user()->email : '' }}" class="form-control form-control-lg" name="email" />
                            <label class="form-label" for="form3Example97">Email ID</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="file" id="form3Example97" value="{{ Auth::user()->image ? Auth::user()->image : '' }}" class="form-control form-control-lg" name="image" />
                            <label class="form-label" for="form3Example97">Upload profile</label>
                          </div>

                          <div class="d-flex justify-content-end pt-3">
                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                            <input type="submit" class="btn btn-warning btn-lg ms-2" value="Update information">
                          </div>
                                </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
</div>

<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
</style>



@endsection


