<!DOCTYPE html>
<html lang="en">

<x-layouts.empresa_create>
    <form action="/empresa" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome da Empresa:</td>
                <td><input type="text" name="nome_empresa"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email_empresa"/></td>
            </tr>
            <tr>
                <td>CNPJ:</td>
                <td><input type="text" name="cnpj"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="senha_empresa"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/empresas" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</x-layouts.empresa_create>

</html>