{% extends "layouts/default.twig" %}

{% block title %}
    <div class="ui text container">
        <h1 class="ui inverted header">
            Gerenciamento de Livros
        </h1>
    </div>
{% endblock %}

{% block content %}
    <!--Cadastro de livros-->
    <div class="row">
        <div class="left aligned column">
            <div class="sixteen wide column">
                <h3 class="ui header">Cadastro de Livros</h3>
                <div class="ui form">
                    <form name="" action="" method="post">
                        <div class="three fields">
                            <div class="field">
                                <label>Titulo</label>
                                <input name="titulo" type="text" placeholder="Titulo do livro">
                            </div>
                            <div class="field">
                                <label>Ano</label>
                                <input name="ano" type="text" placeholder="Ano">
                            </div>
                            <div class="field">
                                <label>Edição</label>
                                <input name="senha" type="text" placeholder="Edição">
                            </div>
                            <div class="field">
                                <label>Autor</label>
                                <select name="autor">
                                    <option value="1">Autor</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Gênero</label>
                                <select name="autor">
                                    <option value="1">Genero</option>
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
                        <th>Titulo</th>
                        <th>Ano</th>
                        <th>Edição</th>
                        <th>Autor</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Teste</td>
                        <td>teste@teste.com</td>
                        <td>123</td>
                        <td>123</td>
                        <td><a href="">editar</a> | <a href="">excluir</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}