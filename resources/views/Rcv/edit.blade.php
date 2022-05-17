@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('gradate student registration Edit') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Rcv/update') }}">
 @csrf
<input type="hidden" value="{{ $Rcv->graduateid }}" name ='graduateid'>
 <div class="form-group row">
 <label for="companyphone" class="col-md-4 col-form-label text-mdright">{{ __('companyphone') }}</label>
 <div class="col-md-6">
 <input id="companyphone" type="text" class="formcontrol @error('companyphone') is-invalid @enderror" name="companyphone" value="{{ $Rcv->companyphone}}" required autocomplete="companyphone" autofocus>
 @error('companyphone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyname" class="col-md-4 col-form-label text-mdright">{{ __('companyname') }}</label>
 <div class="col-md-6">
 <input id="companyname" type="text" class="formcontrol @error('companyname') is-invalid @enderror" name="companyname" value="{{ $Rcv->companyname }}" autocomplete="companyname">
 @error('companyname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyemail" class="col-md-4 col-form-label text-mdright">{{ __('companyemail') }}</label>
 <div class="col-md-6">
 <input id="companyemail" type="text" class="formcontrol @error('companyemail') is-invalid @enderror" name="companyemail" value="{{ $Rcv->companyemail }}" autocomplete="companyemail">
 @error('companyemail')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyregion" class="col-md-4 col-form-label text-mdright">{{ __('companyregion') }}</label>
 <div class="col-md-6">
 <input id="companyregion" type="text" class="formcontrol @error('companyregion') is-invalid @enderror" name="companyregion" value="{{ $Rcv->companyregion }}" autocomplete="companyregion">
 @error('companyregion')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companycity" class="col-md-4 col-form-label text-mdright">{{ __('companycity') }}</label>
 <div class="col-md-6">
 <input id="companycity" type="text" class="formcontrol @error('companycity') is-invalid @enderror" name="companycity" value="{{ $Rcv->companycity }}" autocomplete="companycity">
 @error('companycity')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="date" class="col-md-4 col-form-label text-mdright">{{ __('date') }}</label>
 <div class="col-md-6">
 <input id="date" type="text" class="formcontrol @error('date') is-invalid @enderror" name="date" value="{{ $Rcv->date }}" autocomplete="date">
 @error('date')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="reasonofverification" class="col-md-4 col-form-label text-mdright">{{ __('reasonofverification') }}</label>
 <div class="col-md-6">
 <input id="reasonofverification" type="text" class="formcontrol @error('reasonofverification') is-invalid @enderror" name="reasonofverification" value="{{ $Rcv->reasonofverification }}" autocomplete="reasonofverification">
 @error('reasonofverification')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Update') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection
 