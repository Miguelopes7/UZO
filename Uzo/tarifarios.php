<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://conteudos.uzo.pt/Style Library/Uzo/uzo.ico" sizes="16x16">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Tarifários móveis baratos, sem surpresas na fatura | UZO</title>
    <script src="js/menus.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tarifario.css">
</head>
<body>
    <div class="home-container">
    
      <?php
        include 'components/navbar.php';
      ?>

    <div class="container-xxl">
      <?php
        include 'components/swiper2.php';
      ?>
    </div>

<?php
  // Conectar ao banco de dados
  include 'bd/config.php';
  $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

  // Consultar os dados da tabela "tarifario"
  $sql = "SELECT * FROM tarifario";
  $motor = $ligacao->prepare($sql);
  $motor->execute();
  $dadosTarifario = $motor->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="tarifrios-pricing">
      <div class="tarifrios-container02">
        <?php 
          $vIncremento = 0;
          foreach ($dadosTarifario as $tarifario) { 
          //Criação de variáveis para simplificação de código
          $fidelizacao = $tarifario['fidelizacao'];
          $plafond_NET = $tarifario['plafond_NET'];
          $plafond_oferta = $tarifario['plafond_oferta'];
          $plafond_Mins = $tarifario['plafond_Mins'];
          $nome_tarif = $tarifario['nome_tarif'];
          $preco_tarif = $tarifario['preco_tarif'];
          $vantagem_adesao = $tarifario['vantagem_adesao'];
          if($nome_tarif == "Tarifario_A")
            $vIncremento = 1;
          if($nome_tarif == "Tarifario_B")
            $vIncremento = 2;
          if($nome_tarif == "Tarifario_C")
            $vIncremento = 3;
        ?>
          
        <div class="tarifrios-pricing-card">
          <?php
            if($fidelizacao == 0 || $nome_tarif == "Tarifario_B"){
              if ($fidelizacao == 0) {
                echo '<span class="tarifrios-text070">SEM FIDELIZAÇÃO';
              } 
              else {
                if ($nome_tarif == "Tarifario_B") {
                  echo '<span class="tarifrios-text071">+10GB EXTRA';
                }
              }
              echo '</span>';
            }
            else{
              echo '<span class="tarifrios-text072"><br></span>';
            }
          ?>
          <span class="tarifrios-text40">
            <?php 
              echo $plafond_NET; 
              if($plafond_oferta != null){echo " + ", $plafond_oferta;}
            ?>
          </span>
          <div class="tarifrios-container03">
            <span class="tarifrios-text08">€</span>
            <span class="tarifrios-text09"><?php echo $preco_tarif; ?>,00</span>
            <span class="tarifrios-text10">/ mês</span>
          </div>
          <span class="tarifrios-text11">
            <span>Inclui <?php echo $vantagem_adesao; 
              if($vantagem_adesao == "1ª mensalidade") { echo " grátis";}?>
            </span>
            <br />
          </span>
          <div class="tarifrios-container04">
            <div class="tarifrios-container05">
              <span class="tarifrios-text14">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                  </svg> 
                  <?php
                    echo "$plafond_NET de dados móveis";
                  ?>
              </span>
              <?php if($plafond_NET == "4GB"){echo '
                  <span class="tarifrios-text15">
                    <span>4GB</span>
                    <span class="tarifrios-text17">1GB</span>
                  </span>
                ';}
              ?>
              <?php 
                if($nome_tarif == "Tarifario_A"){echo '
                  <span class="tarifrios-text18"><span class="oferta">OFERTA:</span> Mantém o número e recebe +6GB/mês durante 24 meses</span>';
                }
                else if($nome_tarif == "Tarifario_B"){echo '
                  <span class="tarifrios-text18"><span class="oferta">OFERTA:</span> 10GB adicionais durante 24 meses</span>';
                }
              ?>
            </div>
            <div class="tarifrios-container06">
              <span class="tarifrios-text19">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <?php echo $plafond_Mins; ?>
            </span>
            </div>
          </div>
          <button class="tarifrios-button1 button" data-bs-toggle="modal" data-bs-target="#<?php echo $nome_tarif; ?>">ADERIR</button>
        </div>
        
        <?php  
        include 'form.php';
        ?>
        
        <script>
          function buscarDadosCP<?php echo $vIncremento; ?>() {

            //Obter as variáveis
            var codigoPostal = document.getElementById("codigo-postal" + "<?php echo $vIncremento; ?>").value;
            var pEndereco = document.getElementById("endereco" + "<?php echo $vIncremento; ?>");
            var divEndereco = document.getElementById("divEndereco" + "<?php echo $vIncremento; ?>");

            // Criar uma solicitação AJAX
            var xhr = new XMLHttpRequest();

            // Configurar a solicitação
            xhr.open('GET', 'buscar_endereco.php?codigoPostal=' + codigoPostal, true);

            // Definir a função de callback quando a solicitação for concluída
            xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                // Converter a resposta JSON em um objeto JavaScript
                var dadosCP = JSON.parse(xhr.responseText);

                // Verificar se os dados foram encontrados
                if (dadosCP && dadosCP.morada) {
                  // Atualizar o elemento HTML com os dados do código postal
                  var endereco = dadosCP.morada + ', ' + dadosCP.num_cod_postal + '-' + dadosCP.ext_cod_postal;
                  pEndereco.textContent = endereco;

                  // Exibir o elemento de endereço
                  divEndereco.style.display = 'block';
                } 
                else {
                  // Se os dados não foram encontrados, exibir uma mensagem de erro
                  pEndereco.textContent = 'Código postal não encontrado';
                  divEndereco.style.display = 'block';
                }
              }
            };

            // Enviar a solicitação
            xhr.send();
          }
        </script>

        <?php  
        } //fecho do foreach tarifario
        ?>
      </div>
    </div>

    <?php
    // Fechar a ligação com o banco de dados
    $ligacao = null;
    ?>

    <div class="tarifrios-steps">
      <div class="tarifrios-container15">
        <div class="tarifrios-container16">
          <h1 class="tarifrios-text41">Escolha mais fácil, não há</h1>
        </div>
        <div class="tarifrios-container17">
          <div class="tarifrios-step">
            <div class="tarifrios-container18">
              <div class="tarifrios-circulo">
                
                <div class="tarifrios-picture">
                  <img
                    alt="certo"
                    src="public/external/successuzoiconepng1469-yb45.png"
                    class="tarifrios-icons-img"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container20">
              <h1 class="tarifrios-text42">TOTAL LIBERDADE</h1>
              <span class="tarifrios-text43">
                Com ou sem fidelização, é fácil aderir e mudar de tarifário. De
                1GB a 30GB, escolhe e paga só o que UZAS.
              </span>
            </div>
          </div>
          <div class="tarifrios-step1">
            <div class="tarifrios-container21">
              <div class="tarifrios-circulo">
                
                <div class="tarifrios-picture">
                  <img
                    alt="velocidade movel uzo"
                    src="public/external/velocidademoveluzoiconepng1470-w3cp.png"
                    class="tarifrios-icons-img"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container23">
              <h1 class="tarifrios-text44">5G</h1>
              <span class="tarifrios-text45">
                <span>Net móvel 5G incluída em todos os tarifários UZO.</span>
                <br />
              </span>
            </div>
          </div>
          <div class="tarifrios-step2">
            <div class="tarifrios-container24">
              <div class="tarifrios-circulo">
                
                <div class="tarifrios-picture">
                  <img
                    alt="fatura eletronica uzo"
                    src="public/external/faturaeletronicauzoiconepng1471-q6ej.png"
                    class="tarifrios-icons-img"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container26">
              <h1 class="tarifrios-text48">SEM SURPRESAS NA FATURA</h1>
              <span class="tarifrios-text49">
                <span>
                  Podes pré-definir um valor máximo mensal para consumos não
                  incluídos na mensalidade, a debitar na fatura.
                </span>
                <br />
              </span>
            </div>
          </div>
          <div class="tarifrios-step3">
            <div class="tarifrios-container27">
              <div class="tarifrios-circulo">
                
                <div class="tarifrios-picture">
                  <img
                    alt="consulta faturas uzo"
                    src="public/external/consultafaturasuzoiconepng1471-n61.png"
                    class="tarifrios-icons-img"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container29">
              <h1 class="tarifrios-text52">CONTROLO DE CONSUMOS</h1>
              <span class="tarifrios-text53">
                Recebes SMS de alerta ao atingir 80% e 100% do plafond. Podes
                consultar plafond disponível a qualquer momento, ligando *#123#.
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tarifrios-vantagens-uzo">
      <div class="tarifrios-column">
        <div class="tarifrios-row">
          <h1 class="tarifrios-text54">
            ADERE AO DÉBITO DIRETO COM OFERTA DE 5GB
          </h1>
        </div>
        <div class="tarifrios-row1">
          <div class="tarifrios-stat">
            <img
              alt="image"
              src="public/desconto-euro-uzo-icone.png"
              class="tarifrios-image4"
            />
            <span class="tarifrios-text55">GRÁTIS</span>
            <span class="tarifrios-text56">
              Sem custos de adesão ou manutenção e com oferta de 5GB grátis,
              válidos por 30 dias.
            </span>
          </div>
          <div class="tarifrios-stat1">
            <img
              alt="image"
              src="public/safe-buy-uzo-icone.png"
              class="tarifrios-image5"
            />
            <span class="tarifrios-text57">SEGURO</span>
            <span class="tarifrios-text58">
              Permite conferir antecipadamente o valor e a data do débito, na
              fatura mensal ou definir um prazo para autorização no Multibanco.
            </span>
          </div>
          <div class="tarifrios-stat2">
            <img
              alt="image"
              src="public/consulta-faturas-uzo-icone.png"
              class="tarifrios-image6"
            />
            <span class="tarifrios-text59">FLEXÍVEL</span>
            <span class="tarifrios-text60">
              Permite alterar o valor máximo de débito, ou definir um prazo para
              a autorização, no Multibanco.
            </span>
          </div>
        </div>
      </div>
    </div>

      <?php
        include 'components/footer.php';
      ?>
        
      </div>
    
    
</body>
</html>

