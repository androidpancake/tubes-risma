@extends('layouts.header')
@section('content')
@auth

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p></p>
            <h1>Profile</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
      <div id="form_status"></div>
      <div class="contact-form">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

          <p>
            <div class="row mb-3">
                <label for="inputEmail3" name="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10" name="email" disabled>
                    {{ Auth::user()->email }} 
                </div>
            </div>
            <div class="row mb-3">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" value="{{ Auth::user()->name }}" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="Kata Sandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                <input type="password" name="password_baru" class="form-control" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Konfirmasi Kata Sandi" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-sm-10">
                <input type="password" name="password_baru_confirmation" class="form-control" value="">
                </div>
            </div>
          </p>
          <p><input type="submit" name="update" value="Update"></p>
        </form>
      </div>

    </div>
  </div>


    



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>
@endauth
@include('layouts.footer')
@endsection