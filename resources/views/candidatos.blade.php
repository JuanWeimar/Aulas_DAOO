<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Candidatos</h1>
    @if ($candidatos->count()>0)
        <x-layouts.candidatos>
            @foreach($candidatos as $candidato)
            <tr>
                <td><a href="candidato/{{$candidato->id}}">{{$candidato->id}}</a></td>
                <td>{{$candidato->nome_candidato}}</td>
                <td>{{$candidato->email_candidato}}</td>
                <td>{{$candidato->cpf}}</td>
                <td>{{$candidato->curriculo}}</td>
                <td>{{$candidato->competencia}}</td>
                <td><a href="{{route('delete', $candidato->id)}}" title="Deletar">Deletar</a></td>
                <td><a href="{{route('edit_candidato', $candidato->id)}}" title="Editar">Editar</a></td>
            </tr>
            @endforeach
        </x-layouts.candidatos>
    @else
    <p>Candidatos não encontrados! </p>
    @endif
    
</html>