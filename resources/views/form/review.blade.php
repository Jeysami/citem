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
            <form method="POST" action="{{ route('form.review') }}">
                @csrf

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <br>
                    <input readonly id="firstname" name="firstname" type="text" value="{{ old('firstname', session('form_data.firstname')) }}" class="form-control @error('firstname') is-invalid @enderror">

                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <br>
                    <input readonly id="lastname" name="lastname" type="text" value="{{ old('lastname', session('form_data.lastname')) }}" class="form-control @error('lastname') is-invalid @enderror">

                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label  for="emailaddress">Email Address</label>
                    <br>
                    <input readonly id="emailaddress" name="emailaddress" type="emailaddress" value="{{ old('emailaddress', session('form_data.emailaddress')) }}" class="form-control @error('emailaddress') is-invalid @enderror">

                    @error('emailaddress')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <br>
                    <input readonly id="username" name="username" type="text" value="{{ old('username', session('form_data.username')) }}" class="form-control @error('username') is-invalid @enderror">

                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <br>
                    <input readonly id="password" name="password" type="password" value="{{ old('password', session('form_data.password')) }}" class="form-control @error('password') is-invalid @enderror">

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <br>

                    <input readonly id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password', session('form_data.password')) }}" class="form-control @error('password_confirmation') is-invalid @enderror ">

                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="t_participation">Type of Participation</label>
                    <br>
                    <input readonly id="t_participation" name="t_participation" type="text" value="{{ old('t_participation', session('form_data.t_participation')) }}" class="form-control @error('t_participation') is-invalid @enderror">
                    

                    @error('t_participation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="company">Company Name</label>
                    <br>
                    <input readonly id="company" name="company" type="text" value="{{ old('company', session('form_data.company')) }}" class="form-control @error('company') is-invalid @enderror">

                    @error('company')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="addressline">Address Line</label>
                    <br>
                    <input readonly id="addressline" name="addressline" type="text" value="{{ old('addressline', session('form_data.addressline')) }}" class="form-control @error('addressline') is-invalid @enderror">

                    @error('addressline')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="towncity">Town City</label>
                    <br>
                    <input readonly id="towncity" name="towncity" type="towncity" value="{{ old('towncity', session('form_data.towncity')) }}" class="form-control @error('towncity') is-invalid @enderror">

                    @error('towncity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="regionstate">Region/State</label>
                    <br>
                    <input readonly id="regionstate" name="regionstate" type="text" value="{{ old('regionstate', session('form_data.regionstate')) }}" class="form-control @error('regionstate') is-invalid @enderror">

                    @error('regionstate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <br>
                    <select id="country" name="country" value="{{ old('country', session('form_data.country')) }}" class="form-control @error('country') is-invalid @enderror ">
                        <option value=''>---</option>
                        <option value='1'>Buyer</option>
                        <option value='2'>Exhibitor</option>
                        <option value='3'>Visitor</option>
                    </select>

                    @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="yearest">Year Established</label>
                    <br>

                    <input readonly id="yearest" name="yearest" type="number" maxlength="4" value="{{ old('yearest', session('form_data.yearest')) }}" class="form-control @error('yearest') is-invalid @enderror ">

                    @error('yearest')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <br>

                    <input readonly id="website" name="website" type="text" value="{{ old('website', session('form_data.website')) }}" class="form-control @error('website') is-invalid @enderror ">

                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="brochure">Company Brochure</label>
                    <br>

                    <input readonly id="brochure" name="brochure" type="text" value="{{ old('brochure', session('form_data.brochure')) }}" class="form-control @error('brochure') is-invalid @enderror ">

                    @error('brochure')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="next-btn">Submit</button>
            </form>

            <form method="GET" action="{{ route('form.step2') }}" style="margin-top: 1rem;">
                <button type="submit" class="back-btn">Back</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection