@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('Gsr/register') }}" role="button"> {{ __('New Gsr') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __(' graduate student List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
 firstname
 </th>
<th>
 middlename
 </th>
 <th>
 lastname
 </th>
 <th>
 yearofgraduation
 </th>
 <th>
 qualification
 </th>
 <th>
 gender
 </th>
 <th>
 department
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($Gsr as $Gsr)
 <tr>
 <td> {{ $Gsr->id }}</td>
 <td> {{ $Gsr->firstname }}</td>
 <td> {{ $Gsr->middlename }}</td>
 <td> {{ $Gsr->lastname }}</td>
 <td> {{ $Gsr->yearofgraduation }}</td>
 <td> {{ $Gsr->qualification }}</td>
 <td> {{ $Gsr->gender }}</td>
 <td> {{ $Gsr->department }}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Gsr/search/{{ $Gsr->id }}">Details</a>
</td>
<td>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Gsr/edit/{{$Gsr->id }}">Edit</a>
</td>
<td>
 <a class="btn btn-xs btndanger" title="Delete" href="/Gsr/delete/{{ $Gsr->id }}">Delete</a>
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