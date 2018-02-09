{% extends "layouts/default.twig" %}

{% block title %}
    <div class="ui text container">
        <h1 class="ui inverted header">
            Gerenciamento de Usuarios
        </h1>
        {#<h2>Façam os exercícios sempre </h2>#}
        {#<div class="ui huge primary button">Início</div>#}
    </div>
{% endblock %}

{% block content %}
    <!--Cadastro de usuario-->
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastro de Usuário</h3>
                <div class="ui form">
                    <form name="usuario" action="usuario/cadastroJson" method="post">
                        <div class="three fields">
                            <div class="field">
                                <label>Nome</label>
                                <input name="nome" type="text" value="" placeholder="Nome">
                            </div>
                            <div class="field">
                                <label>E-mail</label>
                                <input name="email" type="text" placeholder="E-mail">
                            </div>
                            <div class="field">
                                <label>Senha</label>
                                <input name="senha" type="password" placeholder="Senha">
                            </div>
                        </div>
                        <div class="ui buttons">
                            <a href="" type="reset" class="ui button">Apagar</a>
                            <div class="or"></div>
                            <button type="submit" class="ui positive button">Salvar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        {{ content() }}
    </div>

    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastros</h3>
                <table class="ui compact celled definition table">
                    <thead class="full-width">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Teste</td>
                        <td>teste@teste.com</td>
                        <td>123</td>
                        <td><a href="">editar</a> | <a href="">excluir</a></td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
{% endblock %}