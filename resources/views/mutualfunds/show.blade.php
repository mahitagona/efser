@extends('app')
@section('content')
    <h1>Mutualfund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            
            <tr>
                <td>Number of Shares</td>
                <td><?php echo ($mutualfund['shares']); ?></td>
            </tr>
            <tr>
                <td>Number of Funds</td>
                <td><?php echo ($mutualfund['funds']); ?></td>
            </tr>
            <tr>
                <td>Share class per Fund</td>
                <td><?php echo ($mutualfund['shareperfund']); ?></td>
            </tr>
            <tr>
                <td>Market Value</td>
                <td><?php echo ($mutualfund['market_value']); ?></td>
            </tr>
            <tr>
                <td>Total Fund </td>
                <td><?php echo ($mutualfund['total_fund']); ?></td>
            </tr>
            <tr>
                <td>Percent Fund</td>
                <td><?php echo ($mutualfund['percent_fund']); ?></td>
            </tr>
            <tr>
                <td>Reporting Date</td>
                <td><?php echo ($mutualfund['reporting_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
        
