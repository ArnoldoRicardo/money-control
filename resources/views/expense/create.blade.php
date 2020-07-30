@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Create a new expense</h1>
    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a class="btn btn-danger" href="{{ route('expense_reports.show', $report->id) }}">back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="{{ route('expense.store', $report->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Type a description" autofocus value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="Type a amount" autofocus value="{{ old('amount') }}">
                @error('amount')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection