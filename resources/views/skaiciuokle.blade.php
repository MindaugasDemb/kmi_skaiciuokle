<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KMI Skaiciuokle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container ">
    <div class="d-flex mt-3 justify-content-center">
    <h2>Įvesti duomenis</h2>
    </div>
    <div class="d-flex mt-3 justify-content-center">
    <form action="/rezultatas" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="row mb-3">
            <label for="ugis" class="form-label col-form-label">Ūgis (cm)</label>
            <div>
                <input class="form-control" type="number" name="ugis" id="ugis">
            </div>
        </div>

        <div class="row mb-3">
            <label for="svoris" class=" form-label col-form-label">Svoris (kg)</label>
            <div >
                <input class="form-control" type="number" name="svoris" id="svoris">
            </div>
        </div>

        <div class="row mb-1">
            <div >
                <button class="btn btn-success" type="submit"><i class="me-2 fa-solid fa-check"></i>Skaičiuoti KMI</button>
            </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>
