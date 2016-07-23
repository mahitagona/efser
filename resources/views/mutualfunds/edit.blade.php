@extends('app')
@section('content')
    <h1>Update Mutualfund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
     <div class="form-group">
        {!! Form::label('shares', 'Shares:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('funds', 'Funds:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('shareperfund', 'Shareperfund:') !!}
        {!! Form::text('shareperfund',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('market_value', 'Market Value:') !!}
        {!! Form::text('market_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('total_fund', 'Total Fund:') !!}
        {!! Form::text('total_fund',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('percent_fund', 'Percent Fund:') !!}
        {!! Form::text('percent_fund',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('reporting_date', 'Reporting Date:') !!}
        {!! Form::text('reporting_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
