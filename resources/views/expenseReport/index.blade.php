<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Reports</title>
</head>

<body>
    <h1>Reports</h1>
    <ul>
        @foreach($expenserReports as $expenserReport)
        <li>
            {{$expenserReport->title}}
        </li>
        @endforeach
    </ul>

</body>

</html>