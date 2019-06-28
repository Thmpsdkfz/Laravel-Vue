<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado de Participantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Registro de Participantes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                @if(count($errors) > 0)

                    <div class="alert alert-danger"> 
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                
                <form method="post" action="/grabar">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" placeholder="" name="fullname" value="">
                    </div>
                    <div class="form-group">
                        <label>DNI</label>
                        <input type="text" class="form-control" placeholder="" name="gid" value="">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="" name="email" value="">
                    </div>
                    <button type="submit" class="btn btn-default">Grabar</button>
                    </form>                
                </div>
            </div>
        </div>


    </body>
</html>