@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Report "{{ $report->title}}"</h1>

    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a class="btn btn-danger" href="{{ route('expense_reports.index') }}">back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        content
    </div>
</div>

@endsection