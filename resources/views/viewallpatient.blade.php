@extends("theme")

@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6">
<table class="table">
<tr>
    <th>Code</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Symptoms</th>
    <th>Diagnosis</th>
</tr>
@foreach($patient as $patient)
<tr>
    <td>{{$patient->pcode}}</td>
    <td>{{$patient->pname}}</td>
    <td>{{$patient->paddress}}</td>
    <td>{{$patient->pmob}}</td>
    <td>{{$patient->psym}}</td>
    <td>{{$patient->pdia}}</td>
    <td><a class="btn-btn-warning" href="/patient/{{$patient->id}}/edit">Edit</a></td>
</tr>
@endforeach


</table>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>

@endsection