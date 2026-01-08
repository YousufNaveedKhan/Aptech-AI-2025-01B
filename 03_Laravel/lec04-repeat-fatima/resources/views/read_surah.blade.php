<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $ayahs['englishName'] }} | QuranApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        nav .navbar-brand {
            font-family: 'Amiri Quran', serif;
            text-align: center;
            font-size: 30px;
            margin-left: 10px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        table {
            font-family: 'Amiri Quran', serif;
        }

        th {
            font-size: 35px;
        }

        td {
            font-size: 27px;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">الْقُرْآن الْكَرِيْم</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav><br><br><br>


    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" style="text-align: right">{{ $ayahs['name'] }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ayahs['ayahs'] as $index => $ayah)
                    <tr>
                        <td style="text-align: right">
                            {{ $ayah['text'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>