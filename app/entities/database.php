<?php
$script = [
    [
        'id' => 1,
        'usuario' => 'Maicon',
        'query' => "create table usuarios (
            id serial,
            login varchar not null,
            senha varchar not null,
            nome varchar not null
        )"
    ],
    [
        'id' => 2,
        'usuario' => 'Maicon',
        'query' => "insert into usuarios (login, senha, nome) values ('admin', 'admin', 'admin')"
    ],
    [
        'id' => 3,
        'usuario' => 'Maicon',
        'query' => "alter table usuarios add column authToken varchar"
    ],
    [
        'id' => 4,
        'usuario' => 'Maicon',
        'query' => 'alter table usuarios add column data_login TIMESTAMP'
    ]
];
