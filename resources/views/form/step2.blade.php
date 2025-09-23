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
            <form method="POST" action="{{ route('form.step2') }}">
              @csrf

              <div class="form-group">
                  <label for="company">Company Name</label>
                  <br>
                  <input id="company" name="company" type="text" value="{{ old('company', session('form_data.company')) }}" class="form-control @error('company') is-invalid @enderror">

                  @error('company')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="addressline">Address Line</label>
                  <br>
                  <input id="addressline" name="addressline" type="text" value="{{ old('addressline', session('form_data.addressline')) }}" class="form-control @error('addressline') is-invalid @enderror">

                  @error('addressline')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="towncity">Town City</label>
                  <br>
                  <input id="towncity" name="towncity" type="towncity" value="{{ old('towncity', session('form_data.towncity')) }}" class="form-control @error('towncity') is-invalid @enderror">

                  @error('towncity')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="regionstate">Region/State</label>
                  <br>
                  <input id="regionstate" name="regionstate" type="text" value="{{ old('regionstate', session('form_data.regionstate')) }}" class="form-control @error('regionstate') is-invalid @enderror">

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

                  <input id="yearest" name="yearest" type="number" maxlength="4" value="{{ old('yearest', session('form_data.yearest')) }}" class="form-control @error('yearest') is-invalid @enderror ">

                  @error('yearest')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="website">Website</label>
                  <br>

                  <input id="website" name="website" type="text" value="{{ old('website', session('form_data.website')) }}" class="form-control @error('website') is-invalid @enderror ">

                  @error('website')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="brochure">Company Brochure</label>
                  <br>

                  <input id="brochure" name="brochure" type="text" value="{{ old('brochure', session('form_data.brochure')) }}" class="form-control @error('brochure') is-invalid @enderror ">

                  @error('brochure')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>

              <button type="submit" class="next-btn">Next</button>
          </form>

          <form method="GET" action="{{ route('form.step1') }}" style="margin-top: 1rem;">
              <button type="submit" class="back-btn">Back</button>
          </form>
        </div>
      </div>
    </div>

@endsection
