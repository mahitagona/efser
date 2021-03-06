@extends('app')

@section('content')
    <h1>Mutualfund</h1>
    <a href="{{url('/mutualfunds/create')}}" class="btn btn-success">Create Mutualfund</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th> 
            <th>Shares</th>
            <th>Funds</th>
            <th>shareperfund</th>
            <th>Market Value</th>
            <th>Total Fund</th>
            <th>Percent Fund</th>
            <th>Reporting Date</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutualfunds as $mutualfund)
            <tr>
                <td>{{ $mutualfund->customer->cust_number }}</td>
                <td>{{ $mutualfund->customer->name }}</td>
                <td>{{ $mutualfund->shares }}</td>
                <td>{{ $mutualfund->funds }}</td>
                <td>{{ $mutualfund->shareperfund}}</td>
                <td>{{ $mutualfund->market_value }}</td>
                <td>{{ $mutualfund->total_fund }}</td>
                <td>{{ $mutualfund->percent_fund }}</td>
                <td>{{ $mutualfund->reporting_date }}</td>
                <td><a href="{{url('mutualfunds',$mutualfund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualfunds.edit',$mutualfund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutualfund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
