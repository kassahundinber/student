@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Graduate Stuedent Detail') }}
 </div>
 <div class="card-body">
 firstname: {{ $Gsr->firstname }}
 <br>
 middlename : {{ $Gsr->middlename }}
 <br>
 lastname : {{ $Gsr->lastname }}
 <br>
 yearofgraduation : {{ $Gsr->yearofgraduation }}
 <br>
 qualification : {{ $Gsr->qualification }}
 <br>
 gender : {{ $Gsr->gender }}
 <br>
 department : {{ $Gsr->department }}
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Gsr/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection