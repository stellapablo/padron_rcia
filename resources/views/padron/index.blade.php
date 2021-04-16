<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Consulta de Padrón</title>
    <meta name="description" content="Consulta del Padrón de la Ciudad de Resistencia">
    <link rel="icon" type="image/png" sizes="512x521" href="assets/img/favicon-Municipalidad.png?h=856c3754203616682742065db9a987bd">
    <link rel="icon" type="image/png" sizes="512x521" href="assets/img/favicon-Municipalidad.png?h=856c3754203616682742065db9a987bd">
    <link rel="icon" type="image/png" sizes="512x521" href="assets/img/favicon-Municipalidad.png?h=856c3754203616682742065db9a987bd">
    <link rel="icon" type="image/png" sizes="512x521" href="assets/img/favicon-Municipalidad.png?h=856c3754203616682742065db9a987bd">
    <link rel="icon" type="image/png" sizes="512x521" href="assets/img/favicon-Municipalidad.png?h=856c3754203616682742065db9a987bd">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=716ef6782bea738733afee46d8292615">
</head>

<body style="background-image: url(&quot;assets/img/background.jpg?h=861461483ffdee67b96cf1e351e7ffac&quot;);background-repeat: no-repeat;background-size: cover;">
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="/"><img src="assets/img/logo.png?h=10721d254b3b917164b683bae566f78d"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Consultar Padrón</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <!-- End: Navigation Clean -->
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-6">
                <h1 class="text-center" style="font-size: 30px;">Padron vecinal de la Ciudad</h1>
                <!-- Start: formulario -->
                <div class="border rounded shadow-lg" style="background-color: #2e77a8;padding: 20px;color: rgb(255,255,255);padding-top: 32px;">
                    <h2 class="text-center" style="font-size: 20px;">CONSULTE SUS DATOS<br></h2>
                    <form action="{{ route('padron.query') }}" method="POST">
                        @csrf                        
                        <div class="form-group d-lg-flex align-items-lg-center"><input class="form-control" type="number" name="dni" placeholder="DNI"></div>
                        <div class="form-group d-lg-flex align-items-lg-center">
                            <select class="form-control" name="genero">
                                <option value="" selected="">Genéro</option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="form-group d-lg-flex justify-content-lg-center align-items-lg-center"><button class="btn btn-light btn-lg" type="submit">Buscar</button></div>
                    </form>
                </div>
                <!-- End: formulario -->
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>