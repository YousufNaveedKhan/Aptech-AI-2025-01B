
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lec03 - QuranApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&display=swap" rel="stylesheet">
    <style>
        nav .navbar-brand {
            font-family: 'Amiri Quran', serif;
            text-align: center;
            font-size: 30px;
            margin-left: 10px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        td {
            font-family: "Amiri Quran", serif;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index">الْقُرْآن الْكَرِيْم</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav><br><br><br>


    <div class="container mt-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Surah Name</th>
                    <th scope="col">Surah English Name</th>
                    <th scope="col">Surah English Meaning</th>
                    <th scope="col">Revelation Place</th>
                    <th scope="col">Verses</th>
                    <th scope="col">Read Surah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mySurahs as $surah)
                    <tr>
                        <td>{{ $surah['number'] }}</td>
                        <td>{{ $surah['name'] }}</td>
                        <td>{{ $surah['englishName'] }}</td>
                        <td>{{ $surah['englishNameTranslation'] }}</td>
                        <td>{{ $surah['revelationType'] }}</td>
                        <td>{{ $surah['numberOfAyahs'] }}</td>
                        <td>
                            <a href="/read/{{ $surah['number'] }}" class="btn btn-outline-secondary">Read</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
