@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __( 'REQUEST CERTIFICATE VERFICATION SYSTEM') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Rcv/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="graduateid" class="col-md-4 col-formlabel text-md-right">{{ __('graduateid') }}</label>
 <div class="col-md-6">
 <input id="graduateid" type="text" class="formcontrol @error('graduateid') isinvalid @enderror" name="graduateid" value="{{ old('graduateid') }}" required autocomplete="graduateid" autofocus>
 @error('graduteid')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyphone" class="col-md-4 col-formlabel text-md-right">{{ __('companyphone') }}</label>
 <div class="col-md-6">
 <input id="companyphone" type="text" class="formcontrol @error('companyphone') isinvalid @enderror" name="companyphone" value="{{ old('companyphone') }}" required autocomplete="companyphone">
 @error('companyphone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyname" class="col-md-4 col-formlabel text-md-right">{{ __('companyname') }}</label>
 <div class="col-md-6">
 <input id="companyname" type="text" class="formcontrol @error('companyname') isinvalid @enderror" name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname">
 @error('companyname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyemail" class="col-md-4 col-formlabel text-md-right">{{ __('companyemail') }}</label>
 <div class="col-md-6">
 <input id="companyemail" type="text" class="formcontrol @error('companyemail') isinvalid @enderror" name="companyemail" value="{{ old('companyemail') }}" required autocomplete="companyemail">
 @error('companyemail')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companyregion" class="col-md-4 col-formlabel text-md-right">{{ __('companyregion') }}</label>
 <div class="col-md-6">
 <input id="companyregion" type="text" class="formcontrol @error('companyregion') isinvalid @enderror" name="companyregion" value="{{ old('companyregion') }}" required autocomplete="companyregion">
 @error('companyregion')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="companycity" class="col-md-4 col-formlabel text-md-right">{{ __('companycity') }}</label>
 <div class="col-md-6">
 <input id="companycity" type="text" class="formcontrol @error('companycity') isinvalid @enderror" name="companycity" value="{{ old('companycity') }}" required autocomplet="companycity">
 @error('companycity')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="date" class="col-md-4 col-formlabel text-md-right">{{ __('date') }}</label>
 <div class="col-md-6">
 <input id="date" type="text" class="formcontrol @error('date') isinvalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date">
 @error('date')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="reasonofverification" class="col-md-4 col-formlabel text-md-right">{{ __('reasonofverification') }}</label>
 <div class="col-md-6">
 <input id="reasonofverification" type="text" class="formcontrol @error('reasonofverification') isinvalid @enderror" name="reasonofverification" value="{{ old('reasonofverification') }}" required autocomplete="reasonofverification">
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
 {{ __('Register') }}
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