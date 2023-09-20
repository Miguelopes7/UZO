<div class="modal fade" id="<?php echo $nome_tarif; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">RESUMO DO TARIFÁRIO 
                <?php
                    echo $plafond_NET; 
                    if($plafond_oferta != ''){echo " + ", $plafond_oferta;}
                ?>
                </h1>
            </div> 
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $vIncremento ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $vIncremento ?>">
                            <div class="form-resumo">
                                <?php
                                    if($fidelizacao == 0 || $nome_tarif == "Tarifario_B"){
                                        echo '<span>';
                                        if ($fidelizacao == 0) {
                                            echo '<span class="form-text01">SEM FIDELIZAÇÃO';
                                        } 
                                        else {
                                            if ($nome_tarif == "Tarifario_B") {
                                                echo '<span class="form-text02">+10GB EXTRA';
                                            }
                                        }
                                        echo '</span><br>';
                                    }
                                ?>
                                <span class="form-plafond">
                                    <?php 
                                    echo $plafond_NET; 
                                    if($plafond_oferta != null){echo " + ", $plafond_oferta;}
                                    ?>
                                </span>
                                <div>
                                    <span class="form-euro">€</span>
                                    <span class="form-price"><?php echo $preco_tarif; ?>,00</span>
                                    <span class="form-mes">/ mês</span>
                                </div>
                                <span>
                                    <span class="form-inclui">Inclui <?php echo $vantagem_adesao; 
                                        if($vantagem_adesao == "1ª mensalidade") { echo " grátis";}?>
                                    </span>
                                    <br />
                                </span>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne<?php echo $vIncremento ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="tarifrios-container04">
                                <div class="tarifrios-container05">
                                    <h4>VANTAGENS DE ADESÃO</h4>
                                    <span class="tarifrios-text14">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                            <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                                            <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                                        </svg> 
                                        <?php echo $plafond_NET; ?> de dados móveis
                                    </span>
                                    <!-- <?php if($plafond_NET == "4GB"){echo '
                                        <span class="tarifrios-text15">
                                            <span>4GB</span>
                                            <span class="tarifrios-text17">1GB</span>
                                        </span>
                                        ';}
                                    ?> -->
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
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        <div class="modal-body">
            
            <form method="POST" action="processar_form.php">
                <h5>DADOS DE ADESÃO</h5>
                <input type="hidden" name="nome_tarif" value="<?php echo $nome_tarif; ?>"> <!-- Para guardar o $nome_tarif e enviar ao processar_form.php -->
                <fieldset class="form-group">
                    <div class="row g-2">
                        <div class="col-md form-floating">
                            <input type="text" class="form-control" id="primeiro-nome" name="primeiro-nome" placeholder="José" required>
                            <label for="primeiro-nome">Primeiro nome</label>
                        </div>
                        <div class="col-md form-floating">
                            <input type="text" class="form-control" id="ultimo-nome" name="ultimo-nome" placeholder="Silva" required>
                            <label for="ultimo-nome">Último nome</label>                
                        </div>
                    </div>
                </fieldset>
                <div class="row g-2 form-group">
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel<?php echo $vIncremento ?>" name="telemovel" pattern="^(\+?351)?9\d\d{7}$" maxlength="13" placeholder="900000000" required>
                        <label for="telemovel<?php echo $vIncremento ?>">Telemóvel</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="email" class="form-control" id="email<?php echo $vIncremento ?>" name="email" placeholder="josesilva@uzo.pt" required>
                        <label for="email<?php echo $vIncremento ?>">Email</label>
                    </div>
                </div>
                <div class="row g-2 form-group">
                    <div class="form-floating col-md">
                        <input type="text" class="form-control" id="codigo-postal<?php echo $vIncremento; ?>" name="codigo-postal" placeholder="0000-000" pattern="^\d{4}-\d{3}?$" maxlength="8" required>
                        <label for="codigo-postal<?php echo $vIncremento; ?>">Código postal</label>
                    </div>
                    <div class="col-md"><button id="validar<?php echo $vIncremento; ?>" class="btn btn-outline-secondary validar" type="button" onclick="buscarDadosCP<?php echo $vIncremento; ?>()">Validar</button></div>
                </div>
                <div class="col-md" id="divEndereco<?php echo $vIncremento; ?>" style="display: none;"><p id="endereco<?php echo $vIncremento; ?>"></p></div>
                <hr>
                <br>
                <h5>DOCUMENTAÇÃO</h5>
                <div class="row g-2 form-group">
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="nif" name="nif" placeholder="Nº de contribuinte" pattern="^\d{9}$" maxlength="9" required>
                        <label for="nif">Nº contribuinte</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="nip" name="nip" pattern="^\d{9}$" maxlength="9" placeholder="000000000" required>
                        <label for="nip">Nº de identificação pessoal</label>
                    </div>
                </div>

                <hr>
                <br>
                <div class="tip">
                    <h5 class="tip">NÚMEROS DE TELEMÓVEL 
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
                        </svg>
                    </h5>
                    <span class="tiptext">Para manter o número de telemóvel atual, selecionar 'Quero manter o meu número'. Caso contrário, será atribuído um novo número ao cartão de telemóvel enviado.</span> 
                </div>
                <div class="form-check form-group">
                    <input type="checkbox" class="form-check-input" id="save-num<?php echo $vIncremento ?>" name="save-num" checked>
                    <label class="form-check-label" for="save-num<?php echo $vIncremento ?>">Quero manter o meu número</label>
                </div>
                <span id="naoManterNumeroSpan<?php echo $vIncremento ?>" style="display: none;">Como não pretendes manter o teu número de telemóvel atual, 
                        será enviado um cartão de telemóvel com um novo número.</span>
                <div class="row g-2 form-group">
                    <div class="form-floating col-md">
                        <select class="form-control" id="operador-atual<?php echo $vIncremento ?>" name="operador-atual">
                            <option>MEO/MOCHE/UZO</option>
                            <option>LYCAMOBILE</option>
                            <option>VECTONE</option>
                            <option>CONTINENTE</option>
                            <option>PHONE-IX</option>
                            <option>NOS COMUNICAÇÕES, S.A. (antes ZON)</option>
                            <option>NOWO (antes Cabovisão)</option>
                            <option>VODAFONE</option>
                            <option>OPTIMUS</option>
                        </select>
                        <label for="operador-atual<?php echo $vIncremento ?>" id="operador_atual_label<?php echo $vIncremento ?>">Operador atual</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel1<?php echo $vIncremento ?>" name="telemovel1" pattern="^(\+?351)?9\d\d{7}$" placeholder="900000000" maxlength="13" required>
                        <label for="telemovel1<?php echo $vIncremento ?>" id="telemovel1_label<?php echo $vIncremento ?>">Nº telemóvel a manter</label>
                    </div>
                </div>

                <hr>
                <br>
                <h5>DADOS DE FATURAÇÃO</h5>
                <div class="tip">
                    <h6 class="tip">FATURA ELETRÓNICA
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
                    </svg></h6>
                    <span class="tiptext">A mensalidade inclui desconto de €1 por mês para adesões à fatura eletrónica enquanto esta permanecer ativa.</span>
                </div>
                <div class="row g-2 form-group">
                    <div class="form-floating col-md">
                        <input type="email" class="form-control" id="email1<?php echo $vIncremento ?>" name="email1" placeholder="josesilva@uzo.pt" required>
                        <label for="email1<?php echo $vIncremento ?>">Email Faturação</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel2<?php echo $vIncremento ?>" name="telemovel2" pattern="^(\+?351)?9\d\d{7}$" placeholder="900000000" maxlength="13" required>
                        <label for="telemovel2<?php echo $vIncremento ?>">Telemóvel Faturação</label>
                    </div>
                </div>

                <hr>
                <br>
                <h5>MÉTODO DE PAGAMENTO</h5>
                <div class="tip">                    
                    <h6 class="tip">DÉBITO DIRETO
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
                    </svg></h6>
                    <span class="tiptext">Grátis, seguro, flexível e cómodo.</span>
                </div>
                <div class="form-floating col-md form-group">
                    <input type="text" class="form-control" id="iban" name="iban" pattern="^PT\d{2}\d{4}\d{4}\d{11}\d{2}$" placeholder="PT500000" maxlength="25">
                    <label for="iban">IBAN (opcional)</label>
                </div>
                <div class="row g-2">
                <div class="form-floating col-lg form-group">
                    <input type="text" class="form-control" id="primeiro-nome1" name="primeiro-nome1" placeholder="José">
                    <label for="primeiro-nome1">Primeiro nome do titular da conta (opcional)</label>
                </div>
                <div class="form-floating col-lg form-group">
                    <input type="text" class="form-control" id="ultimo-nome1" name="ultimo-nome1" placeholder="Silva">
                    <label for="ultimo-nome1">Último nome do titular da conta (opcional)</label>
                </div>
                </div>
                
                <div class="form-floating col-md form-group">
                    <input type="text" class="form-control" id="promocode" name="promocode" placeholder="xyz000">
                    <label for="promocode">Código promocional (opcional)</label>
                </div>

                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cond<?php echo $vIncremento ?>" name="cond" required>
                    <label class="form-check-label small" for="cond<?php echo $vIncremento ?>">Li e aceito os 
                        <a href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-utilizacao-site.pdf" target="_blank">termos e condições de utilização do site</a>
                        e as 
                        <a href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-da-oferta.pdf" target="_blank">condições da oferta</a>
                        .
                    </label>
                </div>

                <br>
                <div class="form-group">
                    
                    <label class= "small">Autorizo o tratamento dos meus dados para efeito de comunicações de marketing da MEO.</label>
                    
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioMEO" id="radio1<?php echo $vIncremento ?>" value="option1">
                        <label class="form-check-label" for="radio1<?php echo $vIncremento ?>">
                            Autorizo
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioMEO" id="radio2<?php echo $vIncremento ?>" value="option2">
                        <label class="form-check-label" for="radio2<?php echo $vIncremento ?>">
                            Não Autorizo
                        </label>
                        </div>
                        <label class= "small sm2">Inclui o tratamento de dados pessoais, de tráfego, de localização geográfica, perfil e/ou consumo. Os contactos são maioritariamente realizados por SMS 
                        ou correio eletrónico, mas também poderão ser realizados por outros meios.</label>
                </div>
                
                <br>
                <div class="form-group">
                    
                    <label class="small">Autorizo a partilha dos meus dados a empresas do Grupo Altice Portugal <sup>(a)</sup> para efeito de comunicações de marketing.</label>
                    
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioGrupoAltice" id="radio3<?php echo $vIncremento ?>" value="option1">
                        <label class="form-check-label" for="radio3<?php echo $vIncremento ?>">
                            Autorizo
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioGrupoAltice" id="radio4<?php echo $vIncremento ?>" value="option2">
                        <label class="form-check-label" for="radio4<?php echo $vIncremento ?>">
                            Não Autorizo
                        </label>
                        </div>
                        <label class="small sm2">Inclui a transmissão de dados pessoais, de tráfego, de localização geográfica, perfil e/ou consumo. Se escolher Autorizo, poderá ser contactado por outras empresas 
                            do Grupo Altice Portugal para apresentação de conteúdos ou de produtos e serviços do seu interesse. Os contactos são maioritariamente realizados por SMS ou correio eletrónico, 
                            mas também poderão ser realizados por outros meios.</label>
                        <label class="small sm2"><sup>(a)</sup> constituído pela PT Portugal SGPS, S.A. e pelas empresas direta ou indiretamente detidas por esta.</label>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" name="submit" value="Submeter Formulário">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (){
        // Obtém referências para os campos do formulário
        var telemovelAdesao = document.getElementById("telemovel<?php echo $vIncremento ?>");
        var emailAdesao = document.getElementById("email<?php echo $vIncremento ?>");
        var telemovelManter = document.getElementById("telemovel1<?php echo $vIncremento ?>");
        var telemovelFaturacao = document.getElementById("telemovel2<?php echo $vIncremento ?>");
        var emailFaturacao = document.getElementById("email1<?php echo $vIncremento ?>");
        // Adiciona um ouvinte de evento de input ao campo de adesão do telemóvel
        telemovelAdesao.addEventListener("input", function () {
            //Coloca o valor do telemovelAdesao no telemovelManter e no telemovelFaturacao
            telemovelManter.value = this.value;
            telemovelFaturacao.value = this.value;
        });
        // Adiciona um ouvinte de evento de input ao campo de adesão de email
        emailAdesao.addEventListener("input", function () {
            //Coloca o valor do emailAdesao no emailFaturacao
            emailFaturacao.value = this.value;
        });

        // Função para mostrar/ocultar campos e definir valores vazios quando "Quero manter o meu número" no form é desmarcado
        document.getElementById("save-num<?php echo $vIncremento ?>").addEventListener("change", function () {
            //Obtém as variáveis necessários para o JS funcionar através dos IDs presentes no form
            var campoMantemNumero = document.getElementById("save-num<?php echo $vIncremento ?>");
            var operadorAtual = document.getElementById("operador-atual<?php echo $vIncremento ?>");
            var telemovel1 = document.getElementById("telemovel1<?php echo $vIncremento ?>");
            var labelOperadorAtual = document.getElementById("operador_atual_label<?php echo $vIncremento ?>");
            var labelTelemovel1 = document.getElementById("telemovel1_label<?php echo $vIncremento ?>");
            var naoManterNumeroSpan = document.getElementById("naoManterNumeroSpan<?php echo $vIncremento ?>");

            if (this.checked) {
                // Se a opção estiver marcada 
                // Block serve para mostrar campos
                operadorAtual.style.display = "block";
                telemovel1.style.display = "block";
                labelOperadorAtual.style.display = "block";
                labelTelemovel1.style.display = "block";
                naoManterNumeroSpan.style.display = "none"; //esconde a frase de não manter número
                operadorAtual.value = operadorAtual.options[0].value; // Define a primeira opção como padrão
                telemovel1.setAttribute("required", "required"); //campo telemovel volta a aparecer e portanto volta a ser obrigatório
            } else {
                // Se a opção estiver desmarcada, ocultar campos e definir valores como vazios
                operadorAtual.style.display = "none";
                telemovel1.style.display = "none";
                labelOperadorAtual.style.display = "none";
                labelTelemovel1.style.display = "none";
                naoManterNumeroSpan.style.display = "block"; //mostra a frase de não manter número
                operadorAtual.value = "";
                telemovel1.value = "";
                telemovel1.removeAttribute("required"); //campo telemovel como está escondido e é nulo, já deixa de ser obrigatório
            }
        });
    });
    
     
</script>