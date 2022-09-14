<x-app-layout>
    <x-slot name="header">
        <h1>Vagas</h1>
    </x-slot>
    @if ($vagas->count()>0)

    <div class="flex flex-col w-full h-full pt-10 bg-gray-600/50">
        <div class="flex flex-col justify-center w-3/5 shadow dark:bg-gray-700 h-auto m-1 p-3 bg-white self-center rounded-md">
            <x-layouts.vagas>
                @foreach($vagas as $vaga)
                <tr>
                    <td><a href="vaga/{{$vaga->id}}">{{$vaga->id}}</a></td>
                    <td>{{$vaga->id_vaga}}</td>
                    <td>{{$vaga->descricao}}</td>
                    <td>{{$vaga->area_de_atuacao}}</td>
                    <td><a href="{{route('delete', $vaga->id)}}" title="Deletar">Deletar</a></td>
                    <td><a href="{{route('edit', $vaga->id)}}" title="Editar">Editar</a></td>
                </tr>
                @endforeach
            </x-layouts.vagas>
            @else
            <p>Empresas não encontradas! </p>
            @endif
        </div>
    </div>
</x-app-layout>