<?php
    // Conecta-se à base de dados
    include 'bd/config.php';

    try {
        $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão com a base de dados: " . $e->getMessage());
    }
    
    // Obter o código postal da solicitação AJAX
    $codigoPostal = $_GET['codigoPostal'];
    
    // Consulta SQL para buscar os dados com base no código postal
    $sql = "SELECT morada, num_cod_postal, ext_cod_postal FROM codigos_postais WHERE num_cod_postal = ? AND ext_cod_postal = ?";
    
    try {
        $motor = $ligacao->prepare($sql);
    
        // Separe o código postal em número e extensão
        //list($num_cod_postal, $ext_cod_postal) = explode('-', $codigoPostal);
        $codigos = explode('-', $codigoPostal);
        if (count($codigos) == 2) {
            $num_cod_postal = $codigos[0];
            $ext_cod_postal = $codigos[1];
        } else {
            $num_cod_postal = '1000';
            $ext_cod_postal = '100';
        }
    
        // Vincule os parâmetros à consulta
        $motor->bindParam(1, $num_cod_postal, PDO::PARAM_INT);
        $motor->bindParam(2, $ext_cod_postal, PDO::PARAM_INT);
    
        // Execute a consulta
        $motor->execute();
    
        // Obtenha os resultados na variável $dadosCP
        $dadosCP = $motor->fetch(PDO::FETCH_ASSOC);

        // Verifique se os dados foram encontrados
        if ($dadosCP) {
            // Envie os dados de volta como JSON
            header('Content-Type: application/json');
            echo json_encode($dadosCP);
        } else {
            // Se os dados não foram encontrados, envie uma resposta vazia com status 404
            http_response_code(404);
        }
        
    } catch (PDOException $e) {
        die("Erro na consulta SQL: " . $e->getMessage());
    }
    
    // Feche a conexão PDO
    $ligacao = null;
?>