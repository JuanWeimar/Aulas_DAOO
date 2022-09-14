<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Empresas</h1>
    @if ($empresas->count()>0)
        <x-layouts.empresas>
            @foreach($empresas as $empresa)
            <tr>
                <td><a href="empresa/{{$empresa->id}}">{{$empresa->id}}</a></td>
                <td>{{$empresa->nome_empresa}}</td>
                <td>{{$empresa->email_empresa}}</td>
                <td>{{$empresa->cnpj}}</td>
                <td><a href="{{route('delete', $empresa->id)}}" title="Deletar">Deletar</a></td>
                <td><a href="{{route('edit_empresa', $empresa->id)}}" title="Editar">Editar</a></td>
            </tr>
            @endforeach
        </x-layouts.empresas>
    @else
    <p>Empresas não encontradas! </p>
    @endif
    
</html>