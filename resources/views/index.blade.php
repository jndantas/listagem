<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="={{asset('css/app.css')}}" rel="stylesheet">
        <style>
            
            body{
                padding: 30px;
            }
          h2 {
            text-align: center;   
            }
         #usuarios {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
             margin:auto;
        }

        #usuarios td, #usuarios th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #usuarios tr:nth-child(even){background-color: #f2f2f2;}

        #usuarios tr:hover {background-color: #ddd;}

        #usuarios th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #4CAF50;
          color: white;
        }
        </style>
        <title>Usuários</title>
    </head>
    <body>
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <h2>Tabela de usuários</h2>
                </div>
                <div class="card-body">
                    <table id="usuarios">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Idade</th>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->sobrenome}}</td>
                                <td>{{$usuario->idade}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
        
    </body>
</html>
