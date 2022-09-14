<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Curriculo</th>
                <th>Competencia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$candidato->id}}</td>
                <td>{{$candidato->nome_candidato}}</td>
                <td>{{$candidato->email_candidato}}</td>
                <td>{{$candidato->cpf}}</td>
                <td>{{$candidato->curriculo}}</td>
                <td>{{$candidato->competencia}}</td>
            </tr>
        </tbody>
    </table>
        <a href="../candidatos">Voltar</a>
</html>