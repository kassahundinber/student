@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('Rcv/register') }}" role="button"> {{ __('New Rcv') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Request certificate verfication system List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 graduate id
 </th>
<th>
 company phone
 </th>
<th>
 company name
 </th>
 <th>
company email
 </th>
 <th>
 company region
 </th>
 <th>
 company city
 </th>
 <th>
 date
 </th>
 <th>
 reason of verification
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($Rcv as $Rcv)
 <tr>
 <td> {{ $Rcv->graduateid }}</td>
 <td> {{ $Rcv->companyphone }}</td>
 <td> {{ $Rcv->companyname }}</td>
 <td> {{ $Rcv->companyemail }}</td>
 <td> {{ $Rcv->companyregion }}</td>
 <td> {{ $Rcv->companycity }}</td>
 <td> {{ $Rcv->date }}</td>
 <td> {{ $Rcv->reasonofverification }}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Rcv/search/{{ $Rcv->id }}">Details</a>
</td>
<td>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Rcv/edit/{{$Rcv->id }}">Edit</a>
</td>
<td>
 <a class="btn btn-xs btndanger" title="Delete" href="/Rcv/delete/{{ $Rcv->id }}">Delete</a>
 </td>

 </tr>
@endforeach
 </tbody>
 </table>
 
 </div>
 </div>
 </div>
 </div>
</div>
@endsection