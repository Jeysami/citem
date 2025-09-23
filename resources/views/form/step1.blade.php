@extends('layout')

@section('content')
    
    @if(session('success'))
        <div class="alert alert-success mt-3">
        </div>
    @endif

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="form-sub-main">
                <form method="POST" action="{{ route('form.step1') }}">
                  @csrf

                  <div class="form-group">
                      <label for="firstname">First Name</label>
                      <br>
                      <input id="firstname" name="firstname" type="text" value="{{ old('firstname', session('form_data.firstname')) }}" class="form-control @error('firstname') is-invalid @enderror">

                      @error('firstname')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <br>
                      <input id="lastname" name="lastname" type="text" value="{{ old('lastname', session('form_data.lastname')) }}" class="form-control @error('lastname') is-invalid @enderror">

                      @error('lastname')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                      <br>
                      <input id="emailaddress" name="emailaddress" type="emailaddress" value="{{ old('emailaddress', session('form_data.emailaddress')) }}" class="form-control @error('emailaddress') is-invalid @enderror">

                      @error('emailaddress')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="username">Username</label>
                      <br>
                      <input id="username" name="username" type="text" value="{{ old('username', session('form_data.username')) }}" class="form-control @error('username') is-invalid @enderror">

                      @error('username')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password">Password</label>
                      <br>
                      <input id="password" name="password" type="password" value="{{ old('password', session('form_data.password')) }}" class="form-control @error('password') is-invalid @enderror">

                      @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password_confirmation">Confirm Password</label>
                      <br>

                      <input id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password', session('form_data.password')) }}" class="form-control @error('password_confirmation') is-invalid @enderror ">

                      @error('password_confirmation')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="t_participation">Type of Participation</label>
                      <br>
                      <select id="t_participation" name="t_participation" value="{{ old('t_participation', session('form_data.t_participation')) }}" class="form-control @error('t_participation') is-invalid @enderror ">
                          <option value=''>---</option>
                          <option value='Buyer' @selected(old('t_participation', session('form_data.t_participation')) == 'Buyer')>Buyer</option>
                          <option value='Exhibitor' @selected(old('t_participation', session('form_data.t_participation')) == 'Exhibitor')>Exhibitor</option>
                          <option value='Visitor' @selected(old('t_participation', session('form_data.t_participation')) == 'Visitor')>Visitor</option>
                      </select>

                      @error('t_participation')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <button type="submit" class="next-btn">Next</button>
                </form>
              </div>
            </div>
          </div>
        </div>

  @include('footer') <!-- Footer here -->

@endsection
