<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area do membro</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background: #ccc;
        }
        .container {
            padding-top: 10px;
            width: 400px;
            margin: 50px auto;
            background: #fff;
            /*box-shadow: 5px 10px #888888;*/
            box-shadow: 10px 10px 8px 10px #888888;
            border-radius: 10px;
        }
        .container .img-circle {
            border-radius: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            
        }
        h3 {
            text-align: center;
            color: #ccc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 19px;
        }
    </style>
</head>
<body>
       <div class="container">
            <img src="images/user.jpg" class="img-circle img-thumbnail"/>

            <h3>Area restrita do membro</h3>
            <form action="{{ route('login')}}"  method="post" >
                {{ csrf_field() }}
                    <div class="pb-block" id="divLoginContro">   
                        <div class="row">
                                <div class="form-group col-md-12">
                                            <input
                                                    id="email"
                                                    type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    autofocus
                                            >
            
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                            <input
                                                    id="password"
                                                    type="password"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password"
                                                    value="{{ old('password') }}"
                                                    autofocus
                                            >
            
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                    </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sess&atilde;o</button>
                            </div>
                        </div>
                    </div>
                </form>
       </div>
</body>
</html>