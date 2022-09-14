<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Vagas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Id da Vaga</th>
                <th>Descricao</th>
                <th>Area de atuacao</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$vaga->id}}</td>
                <td>{{$vaga->id_vaga}}</td>
                <td>{{$vaga->descricao}}</td>
                <td>{{$vaga->area_de_atuacao}}</td>
            </tr>
        </tbody>
    </table>
    <a href="../vagas">Voltar</a>
</html>