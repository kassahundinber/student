@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('gradate student registration Edit') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Gsr/update') }}">
 @csrf
<input type="hidden" value="{{ $Gsr->id }}" name ='id'>
 <div class="form-group row">
 <label for="firstname" class="col-md-4 col-form-label text-mdright">{{ __('firstname') }}</label>
 <div class="col-md-6">
 <input id="firstname" type="text" class="formcontrol @error('firstname') is-invalid @enderror" name="firstname" value="{{ $Gsr->firstname}}" required autocomplete="firstname" autofocus>
 @error('firstname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="middlename" class="col-md-4 col-form-label text-mdright">{{ __('middlename') }}</label>
 <div class="col-md-6">
 <input id="middlename" type="text" class="formcontrol @error('middlename') is-invalid @enderror" name="middlename" value="{{ $Gsr->middlename }}" autocomplete="middlename">
 @error('middlename')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="lastname" class="col-md-4 col-form-label text-mdright">{{ __('lastname') }}</label>
 <div class="col-md-6">
 <input id="lastname" type="text" class="formcontrol @error('lastname') is-invalid @enderror" name="lastname" value="{{ $Gsr->lastname }}" autocomplete="lastname">
 @error('lastname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="yearofgraduation" class="col-md-4 col-form-label text-mdright">{{ __('yearofgraduation') }}</label>
 <div class="col-md-6">
 <input id="yearofgraduation" type="text" class="formcontrol @error('yearofgraduation') is-invalid @enderror" name="yearofgraduation" value="{{ $Gsr->yearofgraduation }}" autocomplete="yearofgraduation">
 @error('yearofgraduation')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="qualification" class="col-md-4 col-form-label text-mdright">{{ __('qualification') }}</label>
 <div class="col-md-6">
 <input id="qualification" type="text" class="formcontrol @error('qualification') is-invalid @enderror" name="qualification" value="{{ $Gsr->qualification }}" autocomplete="qualification">
 @error('qualification')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="gender" class="col-md-4 col-form-label text-mdright">{{ __('gender') }}</label>
 <div class="col-md-6">
 <input id="gender" type="text" class="formcontrol @error('gender') is-invalid @enderror" name="gender" value="{{ $Gsr->gender }}" autocomplete="gender">
 @error('gender')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="department" class="col-md-4 col-form-label text-mdright">{{ __('department') }}</label>
 <div class="col-md-6">
 <input id="department" type="text" class="formcontrol @error('department') is-invalid @enderror" name="department" value="{{ $Gsr->department }}" autocomplete="department">
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
 