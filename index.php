<?php
// ÁREA DE PROGRAMAÇÃO PHP INTEGRADA

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
  <head>
    <!-- META TAGS - INÍCIO -->
      <!-- CHARSET UTF-8 -->
      <meta charset="utf-8">
      <!-- VIEWPORT - AJUSTE VISUAL -->
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- META TAGS - FIM-->
    <!-- CSS - INÍCIO -->
      <!-- CSS - BOOTSTRAP -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- CSS - PERSONALIZADO -->
      <link rel="stylesheet" href="css/folha_de_estilos_modelos.css?cache=<?php echo date("d/m/Y")."-".date("h:i:sa");?>">
      <!-- CSS - FONT AWESOME -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS - FIM -->
    <!-- JAVASCRIPTS - INÍCIO -->
      <!-- AJAX -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- JQUERY -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <!-- POPPER -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <!-- BOOTSTRAP JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- FONT AWESOME -->
      <script src="https://use.fontawesome.com/releases/v5.10.0/js/all.js" data-auto-a11y="true"></script>
      <!-- SCRIPT CARROSSEL -->
      <script src="js/carrossel.js"></script>
    <!-- JAVASCRIPS - FIM -->
    <!-- ÍCONE DA PÁGINA - INÍCIO -->
      <link rel="shortcut icon" type="image/x-icon" href="icones/icone.ico">
    <!-- ÍCONE DA PÁGINA - FIM -->
    <title>[ APPSTEME.COM.BR :: MODELOS - CARROSSEL ]</title>
  </head>
  <body>
    <script>
      // ESTE É O CONTEÚDO DOS CARDS MONTADOS EM FORMATAÇÃO JSON
      // JSON - ARRAY DE CARDS
      var cards = {
        "id": [
          1,
          2,
          3,
          4,
          5,
          6,
          7
          ],
        "titulo": [
          "Card 1",
          "Card 2",
          "Card 3",
          "Card 4",
          "Card 5",
          "Card 6",
          "Card 7"
          ],
        "texto": [
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
        ],
        "link": [
          1,
          2,
          3,
          4,
          5,
          6,
          7
        ]
      };
    </script>
  <!-- CONTEÚDO - INÍCIO -->
  <div id="conteiner_conteudo" class="container-fluid conteiner_geral_de_cards">
        <!-- MODELO - INÍCIO -->
        <div id="conteiner_lista_de_cards" class="carousel slide conteiner_interno_cards" data-ride="carousel">
          <div id="lista_de_cards" class="carousel-inner"></div>
          <a class="carousel-control-prev" href="#conteiner_lista_de_cards" role="button" data-slide="prev">
            <i class="fas fa-angle-left seta_esquerda"></i>
          </a>
          <a class="carousel-control-next" href="#conteiner_lista_de_cards" role="button" data-slide="next">
            <i class="fas fa-angle-right seta_direita"></i>
          </a>
        </div>
        <!-- MODELO - FIM -->
        <!-- MODAL DOS CARDS LINKS - INÍCIO -->
        <div class="modal fade" id="modal" role="dialog">
          <div class="modal-dialog">
            <!-- CONTEÚDO MODAL - INÍCIO -->
            <div class="modal-content text-center conteiner_principal_modal">
              <div class="modal-header">
                <div id="titulo_modal" class="modal-title"></div>
                <button type="button" class="close" style="color:#FFF; border:0rem;" onclick="fechaModal();">&times;</button>
              </div>
              <div id="conteudo_modal" class="modal-body"></div>
               <div class="modal-footer" ></div>
               <!-- TOAST - INÍCIO -->
               <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center conteiner_toast_padrao">
                 <div class="toast toast_padrao_card">
                   <div class="toast-header">
                     <strong class="mX-auto">Appsteme.com.br</strong>
                   </div>
                   <div class="toast-body mx-auto corpo_toast_padrao_card">
                     Produto inserido na cesta com sucesso !
                   </div>
                 </div>
              </div>
             <!-- TOAST - FIM -->
            </div>
           <!-- CONTEÚDO MODAL - FIM -->
         </div>
       </div>
       <!-- MODAL DOS CARDS LINKS - FIM -->
       <!-- LOGOMARCA PORTIFOLIO APPSTEME - INÍCIO -->
       <div style="padding-top:10rem; margin-left:-10rem; margin-right:-10rem;">
         <div class="row">
           <div class="mx-auto conteiner_descritivo" >
            <div class="titulo_descritivo">Carrossel de Produtos</div>
            <a href="https://www.appsteme.com.br" target="_blank">
             <img class="logomarca_transparente" src="imagens/logomarca/logomarca_transparente.png">
            </a>
            <div class="titulo_descritivo">Recursos Utilizados</div>
            <div class="conteudo_descritivo">HTML5, CSS3, Bootstrap e Java</div>
            <div class="titulo_descritivo">Créditos das Imagens</div>
            <div class="conteudo_descritivo">
              82979920 © creativecommonsstockphotos - Dreamstime.com
              <br>
              83064563 © creativecommonsstockphotos - Dreamstime.com
              <br>
              110720973 © creativecommonsstockphotos - Dreamstime.com
              <br>
              82948154 © creativecommonsstockphotos - Dreamstime.com
              <br>
              82949594 © creativecommonsstockphotos - Dreamstime.com
              <br>
              110418037 © creativecommonsstockphotos - Dreamstime.com
              <br>
              120142584 © creativecommonsstockphotos - Dreamstime.com
            </div>
           </div>
         </div>
       </div>
      <!-- LOGOMARCA PORTIFOLIO APPSTEME - FIM -->
  </div>
  <!-- CONTEÚDO - FIM -->
    <script>
          // COMANDO DE ACIONAMENTO DO JAVA QUE CARREGA E MONTA O CONTEÚDO DOS CARDS
          window.addEventListener('load', extraiTexto(cards));
    </script>
  </body>
</html>
