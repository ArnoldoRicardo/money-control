@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Reports</h1>

    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a class="btn btn-success" href="{{ route('expense_reports.create') }}">create new report</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expenserReports as $expenserReport)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>
                        <a href="{{ route('expense_reports.show',$expenserReport->id) }}">
                            {{$expenserReport->title}}
                        </a>
                    </td>
                    <td class="inline">
                        <a class="btn btn-primary" href="{{ route('expense_reports.edit',$expenserReport->id) }}">Edit</a>
                        <form action="{{ route('expense_reports.destroy',$expenserReport->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection