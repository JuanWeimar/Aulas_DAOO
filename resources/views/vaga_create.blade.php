<!DOCTYPE html>
<html lang="en">
<x-layouts.vaga_create>
    <form action="/vaga" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>ID da Vaga:</td>
                <td><input type="number" name="id_vaga"/></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><input type="text" name="descricao"/></td>
            </tr>
            <tr>
                <td>Area de atuacao:</td>
                <td><input type="text" name="area_de_atuacao"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/empresas" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</x-layouts.vaga_create>
</html>