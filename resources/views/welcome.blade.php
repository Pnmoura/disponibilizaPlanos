<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Disponibiliza Planos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Disponibiliza planos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

        </div>
    </div>
</nav>

<div class="container mt-4">
    <form action="/disponibilidade" method="POST">
        @csrf
        @method('POST')
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Consulte aqui</h5>
                    <p class="card-text">
                        Consulte aqui através do seu CEP a viabilidade de planos para sua região.
                    </p>

                    <div class="form-floating mb-3">
                        <input type="string" class="form-control no-arrows" id="floatingInputDisabled" placeholder="00000-000">
                        <label for="floatingInputDisabled">CEP: </label>
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-primary" value="Buscar viabilidade">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>
