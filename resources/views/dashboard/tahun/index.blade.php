<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Calculator</title>
</head>
<body>
    <h1>Leap Year Calculator</h1>

    <form action="/calculate" method="POST">
        @csrf
        <label for="start_year">Start Year:</label>
        <input type="number" id="start_year" name="start_year" required>
        <br><br>
        <label for="end_year">End Year:</label>
        <input type="number" id="end_year" name="end_year" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    @if (isset($leapYears))
        <h2>Leap Years:</h2>
        <ul>
            @foreach ($leapYears as $year)
                <li>{{ $year }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
