@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('GRADUATE STUDENT REGISTRATION ') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Gsr/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="id" class="col-md-4 col-formlabel text-md-right">{{ __('id') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="formcontrol @error('id') isinvalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="
name" autofocus>
 @error('id')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="firstname" class="col-md-4 col-formlabel text-md-right">{{ __('firstname') }}</label>
 <div class="col-md-6">
 <input id="firstname" type="text" class="formcontrol @error('firstname') isinvalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete
="firstname">
 @error('firstname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="middlename" class="col-md-4 col-formlabel text-md-right">{{ __('middlename') }}</label>
 <div class="col-md-6">
 <input id="middlename" type="text" class="formcontrol @error('middlename') isinvalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete
="middlename">
 @error('middlename')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="lastname" class="col-md-4 col-formlabel text-md-right">{{ __('lastname') }}</label>
 <div class="col-md-6">
 <input id="lastname" type="text" class="formcontrol @error('lastname') isinvalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete
="lastname">
 @error('lastname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="yearofgraduation" class="col-md-4 col-formlabel text-md-right">{{ __('yearofgraduation') }}</label>
 <div class="col-md-6">
 <input id="yearofgraduation" type="text" class="formcontrol @error('yearofgraduation') isinvalid @enderror" name="yearofgraduation" value="{{ old('firstname') }}" required autocomplete
="yearofgraduation">
 @error('yearofgraduation')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="qualification" class="col-md-4 col-formlabel text-md-right">{{ __('qualification') }}</label>
 <div class="col-md-6">
 <input id="qualification" type="text" class="formcontrol @error('qualification') isinvalid @enderror" name="qualification" value="{{ old('firstname') }}" required autocomplete
="qualification">
 @error('qualification')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="gender" class="col-md-4 col-formlabel text-md-right">{{ __('gender') }}</label>
 <div class="col-md-6">
 <input id="gender" type="text" class="formcontrol @error('gender') isinvalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete
="gender">
 @error('gender')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="department" class="col-md-4 col-formlabel text-md-right">{{ __('department') }}</label>
 <div class="col-md-6">
 <input id="department" type="text" class="formcontrol @error('department') isinvalid @enderror" name="department" value="{{ old('department') }}" required autocomplete
="department">
 @error('department')
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