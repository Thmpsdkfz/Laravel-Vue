<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Listado de Participantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Listado de Participantes</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>DNI</th>
                                    <th>Email</th>
                                    <th>Fecha Creacion</th>
                                    <th>Fecha Actualizacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="participante in participantes">
                                    <td>@{{participante.id}}</td>
                                    <td v-text="participante.fullname"></td>
                                    <td>@{{participante.gid}}</td>
                                    <td>@{{participante.email}}</td>
                                    <td>@{{participante.created_at}}</td>
                                    <td>@{{participante.updated_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>

        <script src="/js/app.js"></script>

    </body>
</html>