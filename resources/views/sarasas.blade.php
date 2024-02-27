<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pirkinių sąrasas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
<h2>Įvesti preke</h2>
<p>Cia bus forma</p>
        <form action="/rezultatas" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
<div class="row mb-3">
    <label class="col-sm-3 col-xl-1 form-label col-form-label">Prekė</label>
    <div class="col-sm-5 col-xl-3">
        <input class="form-control" type="text" name="pav" id="pav">
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-3 col-xl-1 form-label col-form-label">Vnt. kaina</label>
    <div class="col-sm-5 col-xl-3">
        <input class="form-control" type="number" name="kaina" id="kaina">
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-3 col-xl-1 form-label col-form-label">Kiekis</label>
    <div class="col-sm-5 col-xl-3">
        <input class="form-control" type="number"  name="kiekis" id="kiekis">
    </div>
</div>

<div class="row mb-1">
    <div class="col-5">
        <button class="btn btn-primary" ><i class="me-2 fa-solid fa-check" disabled></i>Pridėti</button>
    </div>
</div>

<div class="row mb-1">
    <div class="col-5">
        <button class="btn btn-success" type="submit"><i class="me-2 fa-solid fa-check"></i>Skaičiuoti</button>
    </div>
</div>
        </form>
    </div>
</body>
</html>
