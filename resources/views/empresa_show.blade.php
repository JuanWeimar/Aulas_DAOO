<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Empresas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CNPJ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$empresa->id}}</td>
                <td>{{$empresa->nome_empresa}}</td>
                <td>{{$empresa->email_empresa}}</td>
                <td>{{$empresa->cnpj}}</td>
            </tr>
        </tbody>
    </table>
        <a href="../empresas">Voltar</a>
</html>