<?php
    //install.php

    //Criar a base de dados que suporta o site
    include 'config.php';

    // Remover a base de dados se ela existir
    $ligacao = new PDO("mysql:host=$host", $user, $password);
    $motor = $ligacao->prepare("DROP DATABASE IF EXISTS $base_dados");
    $motor->execute();
    $ligacao = null;

    //Criar a base de dados
    $ligacao = new PDO("mysql:$host", $user, $password);
    $motor = $ligacao->prepare("CREATE DATABASE $base_dados"); //criar base dados com ligação 
    $motor->execute(); //executa a variável motor
    $ligacao = null; //fecha a ligação

    echo '<p>Database criada com sucesso.</p><hr>';

    //Abrir a base de dados para adicionar as tabelas
    $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

    //Tabela "users" - utilizadores do site
    $sql="CREATE TABLE tarifario(
        id_tarifario int primary key auto_increment,
        nome_tarif varchar(25),
        fidelizacao boolean,
        preco_tarif float,
        vantagem_adesao varchar (255),
        plafond_NET varchar(255),
        plafond_oferta varchar (255),
        plafond_Mins varchar(255)
    )";

    $motor = $ligacao->prepare($sql);
    $motor->execute();
    echo '<p>Tabela "tarifario" criada com sucesso.</p>';

    // Criar a tabela "form_adesao"
    $sql = "CREATE TABLE form_adesao (
        id_user int primary key auto_increment,
        datahora_adesao datetime,
        primeiro_nome varchar(255),
        ultimo_nome varchar(255),
        telemovel_pessoal varchar(255),
        email varchar(255),
        codigo_postal varchar(8),
        contribuinte int,
        cartao_cidadao int,
        manter_numero boolean,
        operador_atual varchar(255),
        telemovel_cliente varchar(255),
        email_faturacao varchar(255),
        telemovel_faturacao varchar(255),
        iban varchar(34),
        primeiro_nome_titular_conta varchar(255),
        ultimo_nome_titular_conta varchar(255),
        cod_promo varchar(255),
        marketing_MEO boolean,
        marketing_GrupoAltice boolean
    )";

    $motor = $ligacao->prepare($sql);
    $motor->execute();
    echo '<p>Tabela "form_adesao" criada com sucesso.</p>';

    // Criar a tabela "utilizador"
    $sql = "CREATE TABLE utilizador (
        id_user int,
        id_tarifario int,
        foreign key (id_user) references form_adesao(id_user) ON DELETE CASCADE,
        foreign key (id_tarifario) references tarifario(id_tarifario) ON DELETE CASCADE
    )";
    
    $motor = $ligacao->prepare($sql);
    $motor->execute();
    echo '<p>Tabela "utilizador" criada com sucesso.</p>';

    // Inserir dados na tabela "tarifario"
    $sql = "INSERT INTO tarifario (nome_tarif, fidelizacao, preco_tarif, vantagem_adesao, plafond_NET, plafond_oferta, plafond_Mins)
    VALUES
        ('Tarifario_A', false, 10.00, '1ª mensalidade + 6GB/mês', '4GB', '6GB', '2000 minutos/SMS'),
        ('Tarifario_B', true, 12.00, '1ª mensalidade + 10GB/mês', '6GB', '10GB', '2000 minutos/SMS'),
        ('Tarifario_C', true, 25.00, '1ª mensalidade', '30GB', null, '5000 minutos/SMS')
    ";

    $motor = $ligacao->prepare($sql);
    $motor->execute();
    echo '<p>Dados inseridos na tabela "tarifario" com sucesso.</p>';

    // Criar a tabela codigos_postais
    $sql ="CREATE TABLE codigos_postais 
    (
        id_morada int primary key auto_increment,
        morada	VARCHAR(512),
        num_cod_postal	INT,
        ext_cod_postal	INT,
        desig_postal	VARCHAR(512)
    )";

    $motor = $ligacao->prepare($sql);
    $motor->execute();
    echo '<p>Tabela codigos_postais criada com sucesso.</p>';

    $ligacao = null;

    echo '<hr>';
    echo '<p>Database - processo de criação completo.</p>';
?>
