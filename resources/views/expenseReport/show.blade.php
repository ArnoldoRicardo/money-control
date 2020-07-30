@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Report "{{ $report->title}}"</h1>

    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a class="btn btn-danger" href="{{ route('expense_reports.index') }}">Back</a>
        <a class="btn btn-primary" href="{{ route('expense.create', $report->id) }}">New expense</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3>Details</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>

                @foreach($report->expenses as $expense)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->amount}}</td>
                    <td>{{$expense->created_at}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection