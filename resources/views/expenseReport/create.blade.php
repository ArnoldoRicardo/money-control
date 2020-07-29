@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Create a new report</h1>
    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a class="btn btn-danger" href="{{ route('expense_reports.index') }}">back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="{{ route('expense_reports.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Type a title" autofocus value="{{ old('title') }}">
                @error('title')
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