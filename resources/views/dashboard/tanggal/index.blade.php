<!DOCTYPE html>
<html>
<head>
    <title>Weekends Finder</title>
</head>
<body>
    <h1>Find Weekends</h1>
    <form method="POST" action="/calculate">
        @csrf
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    @if (isset($weekends))
        <h2>Weekends between {{ $start_date->format('Y-m-d') }} and {{ $end_date->format('Y-m-d') }}:</h2>
        <ul>
            @foreach ($weekends as $weekend)
                <li>{{ $weekend }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
