<!DOCTYPE html>
<html>

<head>
    <title>Prime Number Finder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 50px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-group button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .output {
            margin-top: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        .output h2 {
            margin-top: 0;
        }

        .output ul {
            list-style-type: none;
            padding: 0;
        }

        .output ul li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Find Prime Numbers</h1>
        <form method="POST" action="/calculate">
            @csrf
            <div class="form-group">
                <label for="start_number">Bilangan Awal:</label>
                <input type="number" id="start_number" name="start_number" required>
            </div>
            <div class="form-group">
                <label for="end_number">Bilangan Akhir:</label>
                <input type="number" id="end_number" name="end_number" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
        @if (isset($primes))
            <div class="output">
                <h2>Bilangan Prima antara {{ $start_number }} dan {{ $end_number }}:</h2>
                <ul>
                    @foreach ($primes as $prime)
                        <li>{{ $prime }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>

</html>
