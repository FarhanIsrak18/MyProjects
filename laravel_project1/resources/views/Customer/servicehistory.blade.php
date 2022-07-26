@extends('Customer.customerlayout')
@section('demo')
<table class="table table-striped table-dark">
    <tr>
        <th>Service ID</th>
        <th>Total cost</th>
        <th>Address</th>
    </tr>
    @foreach($servicehistory as $sh)
    <tr>
        <td>{{$sh->list}}</td>
        <td>{{$sh->amount}}</td>
        <td>{{$sh->address}}</td>
    </tr>
    @endforeach
</table>
@endsection