{% extends "layouts/default.twig" %}

{% block title %}
    <div class="ui text container">
        <h1 class="ui inverted header">
            Treinamento Phalcon
        </h1>
        <h2>Façam os exercícios sempre </h2>
        <div class="ui huge primary button">Início</div>
    </div>
{% endblock %}

{% block content %}
    <div class="row">
        Bem vindo ao treinamento Phalcon
    </div>
    <div class="row">{{ content() }}</div>
{% endblock %}