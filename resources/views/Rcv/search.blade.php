@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Request certificate Detail') }}
 </div>
 <div class="card-body">
 companyphone: {{ $Rcv->companyphone }}
 <br>
 companyname : {{ $Rcv->companyname }}
 <br>
 companyemail : {{ $Rcv->companyemail }}
 <br>
 companyregion : {{ $Rcv->companyregion }}
 <br>
 companycity : {{ $Rcv->companycity }}
 <br>
 date : {{ $Rcv->date }}
 <br>
 reasonofverification : {{ $Rcv->reasonofverification }}
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Rcv/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection