<?php

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="https://conteudos.uzo.pt/Style Library/Uzo/uzo.ico" sizes="16x16">
    
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        
        <title>Tarifários móveis baratos, sem surpresas na fatura | UZO</title>
        <script src="js/menus.js" defer></script>
        <link rel="stylesheet" href="css/style.css">
    </head>';

    include 'components/navbar.php';
    //Processar Submissão Form
    include 'bd/config.php';

    try{

        $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

        // Dados do formulário
        $primeiroNome = $_POST['primeiro-nome'];
        $ultimoNome = $_POST['ultimo-nome'];
        $telemovelPessoal = $_POST['telemovel'];
        $email = $_POST['email'];
        $codigoPostal = $_POST['codigo-postal'];
        $contribuinte = $_POST['nif'];
        $cartaoCidadao = $_POST['nip'];
        $manterNumero = isset($_POST['save-num']) ? 1 : 0;
        $operadorAtual = !empty($_POST['operador-atual']) ? $_POST['operador-atual'] : null;
        $telemovelCliente = !empty($_POST['telemovel1']) ? $_POST['telemovel1'] : null;
        $emailFaturacao = $_POST['email1'];
        $telemovelFaturacao = $_POST['telemovel2'];
        $iban = !empty($_POST['iban']) ? $_POST['iban'] : null;
        $primeiroNomeTitular = !empty($_POST['primeiro-nome1']) ? $_POST['primeiro-nome1'] : null;
        $ultimoNomeTitular = !empty($_POST['ultimo-nome1']) ? $_POST['ultimo-nome1'] : null;
        $codPromo = !empty($_POST['promocode']) ? $_POST['promocode'] : null;
        $marketingMEO = isset($_POST['radioMEO']) && $_POST['radioMEO'] === 'option1' ? 1 : 0;
        $marketingGrupoAltice = isset($_POST['radioGrupoAltice']) && $_POST['radioGrupoAltice'] === 'option1' ? 1 : 0;

        //Verificar se já existem os mesmos dados
        $motor = $ligacao->prepare("SELECT email FROM form_adesao WHERE email = ?");
        $motor->bindParam(1, $email, PDO::PARAM_STR);
        $motor->execute();

        if($motor->rowCount() != 0){ // significa que encontrou um email igual
            echo '   
                <div class="mensagem-container">
                    <div>
                        <h1>Este email já está em uso</h1>
                    </div>
                    <hr>
                    <div>
                        <a href="tarifarios.php" class="btn btn-primary">Regressar aos Tarifários</a>
                    </div>
                </div>
            ';
        }
        else{ // procede com a submissão dos novos dados
            $motor = $ligacao->prepare("SELECT MAX(id_user) AS MaxID FROM form_adesao");
            $motor->execute();
            $id_temp = $motor->fetch(PDO::FETCH_ASSOC)['MaxID']; // buscar IDs
            if($id_temp == null) // caso não haja ainda IDs(ID null), atribui ID 1
                $id_temp = 1;
            else{ // auto incrementa ID
                $id_temp++;
            }

            // Inserir dados na tabela "form_adesao"
            $sql = 
                "INSERT INTO form_adesao (
                datahora_adesao,
                primeiro_nome,
                ultimo_nome,
                telemovel_pessoal,
                email,
                codigo_postal,
                contribuinte,
                cartao_cidadao,
                manter_numero,
                operador_atual,
                telemovel_cliente,
                email_faturacao,
                telemovel_faturacao,
                iban,
                primeiro_nome_titular_conta,
                ultimo_nome_titular_conta,
                cod_promo,
                marketing_MEO,
                marketing_GrupoAltice
                )
                VALUES (
                NOW(),
                :primeiroNome,
                :ultimoNome,
                :telemovelPessoal,
                :email,
                :codigoPostal,
                :contribuinte,
                :cartaoCidadao,
                :manterNumero,
                :operadorAtual,
                :telemovelCliente,
                :emailFaturacao,
                :telemovelFaturacao,
                :iban,
                :primeiroNomeTitularConta,
                :ultimoNomeTitularConta,
                :codPromo,
                :marketingMEO,
                :marketingGrupoAltice
                )
            ";

            $motor = $ligacao->prepare($sql);
            $motor->bindParam(':primeiroNome', $primeiroNome, PDO::PARAM_STR);
            $motor->bindParam(':ultimoNome', $ultimoNome, PDO::PARAM_STR);
            $motor->bindParam(':telemovelPessoal', $telemovelPessoal, PDO::PARAM_STR);
            $motor->bindParam(':email', $email, PDO::PARAM_STR);
            $motor->bindParam(':codigoPostal', $codigoPostal, PDO::PARAM_STR);
            $motor->bindParam(':contribuinte', $contribuinte, PDO::PARAM_INT);
            $motor->bindParam(':cartaoCidadao', $cartaoCidadao, PDO::PARAM_INT);
            $motor->bindParam(':manterNumero', $manterNumero, PDO::PARAM_BOOL);
            $motor->bindParam(':operadorAtual', $operadorAtual, PDO::PARAM_STR);
            $motor->bindParam(':telemovelCliente', $telemovelCliente, PDO::PARAM_STR);
            $motor->bindParam(':emailFaturacao', $emailFaturacao, PDO::PARAM_STR);
            $motor->bindParam(':telemovelFaturacao', $telemovelFaturacao, PDO::PARAM_STR);
            $motor->bindParam(':iban', $iban, PDO::PARAM_STR);
            $motor->bindParam(':primeiroNomeTitularConta', $primeiroNomeTitular, PDO::PARAM_STR);
            $motor->bindParam(':ultimoNomeTitularConta', $ultimoNomeTitular, PDO::PARAM_STR);
            $motor->bindParam(':codPromo', $codPromo, PDO::PARAM_STR);
            $motor->bindParam(':marketingMEO', $marketingMEO, PDO::PARAM_BOOL);
            $motor->bindParam(':marketingGrupoAltice', $marketingGrupoAltice, PDO::PARAM_BOOL);

            $motor->execute();

            
            //Preenchimento com sucesso
            echo "
                <div class='mensagem-container'>
                    <div>
                        <h1>Bem-vindo ao mundo UZO!</h1>
                        <h2>O/A $ultimoNome aderiu com sucesso! Irá receber uma mensagem no email: $emailFaturacao </h2>
                    </div>
                    <hr>
                    <div>
                        <a href='tarifarios.php' class='btn btn-primary'>Regressar aos Tarifários</a>
                    </div>
                </div>
            ";
            //Fecho destas divs mais abaixo

            //Tabela Utilizador
            $id_user = $ligacao->lastInsertId(); // Obter o ID do Utilizador recém-inserido na tabela form_adesao

            $nome_tarif = $_POST['nome_tarif'];

            if($nome_tarif == "Tarifario_A"){
                $id_tarifario = 1;
            }
            else if($nome_tarif == "Tarifario_B"){
                $id_tarifario = 2;
            }
            else if($nome_tarif == "Tarifario_C"){
                $id_tarifario = 3;
            }

            // Atualizar a tabela utilizador para criar a associação
            $sql = "UPDATE utilizador SET id_tarifario = :id_tarifario WHERE id_user = :id_user";
            $sql = "INSERT INTO utilizador (id_user, id_tarifario) VALUES (:id_user, :id_tarifario)";

            $motor = $ligacao->prepare($sql);
            $motor->bindParam(':id_tarifario', $id_tarifario, PDO::PARAM_INT);
            $motor->bindParam(':id_user', $id_user, PDO::PARAM_INT);

            try {
                $motor->execute();
            } catch (PDOException $e) {
                echo '
                    <h2>Erro ao criar associação entre tabelas:</h2>
                ';
                $e->getMessage(); //mensagem de erro
                echo '
                    <hr>
                    <div>
                        <a href="tarifarios.php" class="btn btn-primary">Regressar aos Tarifários</a>
                    </div>
                </div>
                ';
            }

        }   // fim else -> submissão de novos dados

    } //fim Try
    catch (PDOException $e) {
        echo '
            <div class="mensagem-container">
                <div>
                    <h1>Erro ao inserir dados:</h1>
        ';
        $e->getMessage();
        echo '
            </div>
            <hr>
            <div>
                <a href="tarifarios.php" class="btn btn-primary">Regressar aos Tarifários</a>
            </div>
        </div>
        ';
    }

    include 'components/footer.php';
    // Fechar a ligação com o banco de dados
    $ligacao = null;
?>