{% extends "layouts/default.twig" %}

{% block title %}
    <div class="ui text container">
        <h1 class="ui inverted header">
            Gerenciamento de Emprestimos
        </h1>
        {#<h2>Façam os exercícios sempre </h2>#}
        {#<div class="ui huge primary button">Empréstimo</div>#}
    </div>
{% endblock %}

{% block content %}
    <!--Cadastro de emprestimo-->
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastro de empréstimo</h3>
                <div class="ui form">
                    <form name="" action="" method="post">
                        <div class="three fields">
                            <div class="field">
                                <label>Usuário</label>
                                <select name="usuario">
                                    <option value="1">Usuario 1</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Livro</label>
                                <select name="livro">
                                    <option value="1">Livro 1</option>
                                </select>
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
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastros</h3>
                <table class="ui compact celled definition table">
                    <thead class="full-width">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Livro</th>
                        <th>Autor</th>
                        <th>Gênero</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Teste</td>
                        <td>teste@teste.com</td>
                        <td>Nome do Livro</td>
                        <td>Nome do Autor</td>
                        <td>Nome do Genero</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
{% endblock %}