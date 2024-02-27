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

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <h1>Jūsų KMI yra:</h1>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col fs-2">
            <span class="border"><?php echo round($kmi,2); ?></span>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col mt-3">
            <a href="/skaiciuokle" class="btn btn-primary"><i class="me-2 fa-solid fa-check"></i>Atgal į skaičiuoklę</a>
        </div>
    </div>
</div>
</body>
</html>
