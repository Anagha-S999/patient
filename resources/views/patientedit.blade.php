@extends("theme")

@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6">
<form action="/patientedit" method="post">
{{csrf_field()}}
<table class="table">
<tr>
    <td>Patient code</td>
    <td><input name="pcode" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Name</td>
    <td><input name="pname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name="paddress" name="address" id="" cols="10" rows=""></textarea></td>
</tr>
<tr>
    <td>Phone</td>
    <td><input name="pmob" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Symptoms</td>
    <td><input name="psym" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Diagnosis</td>
    <td><input name="pdia" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-primary">Submit</button></td>
</tr>

</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>

@endsection