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
    
    <title>Chamadas, Internet e telemóvel. Descomplica | UZO</title>
    <script src="js/menus.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="home-container">
    
      <?php
        include 'components/navbar.php';
      ?>

      <div class="container-xxl">
        <?php
          include 'components/swiper1.php';
        ?>
      </div>
        <div class="home-who">
          <div class="home-header">
            <div class="home-heading">
              <h2 class="home-text03">Inteligente é mudar para a UZO e POUPAR</h2>
            </div>
            <a href="tarifarios.php" class="home-navlink button">Ver tarifários</a>
          </div>
        </div>
        <div class="home-pricing">
          <div class="home-container1">
            <div class="home-container2">
              <div class="home-container3">
                <img
                  alt="image"
                  src="public/telemoveis-15-gb-oferta-uzo-secundario.webp"
                  class="home-image05"
                />
                <span class="home-text04">
                  <span>15GB GRÁTIS</span>
                  <br />
                </span>
                <span class="home-text07">
                  <span>As melhores ofertas em smartphones.</span>
                  <br />
                  <br />
                </span>
                <button class="home-button1 button">SABER MAIS</button>
              </div>
              <div class="home-container4">
                <img
                  alt="image"
                  src="public/internet-fatura-uzo-secundario.png"
                  class="home-image06"
                />
                <span class="home-text11">Mais internet no telemovel</span>
                <span class="home-text12">
                  Com fatura ou carregamentos, de 500MB a 2GB.
                </span>
                <button class="home-button2 button">SABER MAIS</button>
              </div>
              <div class="home-container5">
                <img
                  alt="image"
                  src="public/plano-uzo-mais-secundario.png"
                  class="home-image07"
                />
                <span class="home-text13">
                  <span>Fala de portugal</span>
                  <br />
                  <span>para o mundo</span>
                </span>
                <span class="home-text17">
                  Private Desde 1 Cêntimo por minuto, com plano UZO+.
                </span>
                <button class="home-button3 button">SABER MAIS</button>
              </div>
            </div>
          </div>
        </div>
        <div id="escolheUZO" class="home-book">
          <div class="home-content">
            <div class="home-left">
              <h2 class="home-text18">ESCOLHE UZO E DESCOMPLICA</h2>
              <div class="home-container6">
                <a href="tarifarios.php" class="home-navlink1 button">
                  <span class="home-text19">PEDIR CARTÃO GRÁTIS</span>
                </a>
                <a href="tarifarios.php" class="home-navlink1 button">
                  <span class="home-text20">CARREGAR CARTÃO</span>
                </a>
              </div>
            </div>
            <img alt="image" src="public/message.svg" class="home-image08" />
          </div>
        </div>
        <div class="home-vantagens-uzo">
          <div class="home-column">
            <div class="home-row" id="vantagensUZO"><h1>VANTAGENS UZO</h1></div>
            <div class="home-row1">
              <div class="home-stat">
                <img
                  alt="image"
                  src="public/ativar-instalar-uzo-icone.png"
                  class="home-image09"
                />
                <span class="home-text22">DESCOMPLICADO</span>
                <span class="home-text23">
                  <span>
                    Simples, claro e fácil. Adesão e gestão dos teus serviços
                    online,
                  </span>
                  <br />
                  <span>24h/dia.</span>
                </span>
              </div>
              <div class="home-stat1">
                <img
                  alt="image"
                  src="public/melhor-escolha-uzo-icone.webp"
                  class="home-image10"
                />
                <span class="home-text27">A MELHOR ESCOLHA</span>
                <span class="home-text28">
                  <span>
                    Os serviços que queres, com a máxima qualidade, velocidade 5G e
                  </span>
                  <br />
                  <span>fibra de última geração. Ao melhor preço.</span>
                </span>
              </div>
              <div class="home-stat2">
                <img
                  alt="image"
                  src="public/liberdade-uzo-icone.webp"
                  class="home-image11"
                />
                <span class="home-text32">TOTAL LIBERDADE</span>
                <span class="home-text33">
                  <span>
                    Com ou sem fidelização, sem extras que não precisas. Escolhe e
                  </span>
                  <br />
                  <span>paga só o que UZAS.</span>
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