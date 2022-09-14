<!DOCTYPE html>
<html lang="en">

<x-layouts.candidato_create>
    <form action="/candidato" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome_candidato"/></td>
            </tr>
            <tr>
                <td>Competencia:</td>
                <td><textarea name="competencia" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email_candidato"/></td>
            </tr>
            <tr>
                <td>Curriculo:</td>
                <td><input type="text" name="curriculo"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="senha_candidato"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/candidatos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</x-layouts.candidato_create>

</html>