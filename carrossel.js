function extraiTexto(json){

  var id_1, id_2, id_3 = "";
  var titulo_1, titulo_2, titulo_3 = "";
  var texto_1, texto_2, texto_3 = "";
  var link_1, link_2, link_3 = "";
  var conteudoCard = "";
  var i,j,k,l,numeroRandomico,planoDeFundo = "";

  // DEFINE O NÚMERO TOTAL DE CARDS EXISTENTES
  var numeroDeCards = Object.keys(json.id).length - 1;

  numeroRandomico = Math.floor(Math.random() * numeroDeCards + 1);
  planoDeFundo = "imagens/carrossel/produto_"+ numeroRandomico +".jpg";
  planoDeFundo = "url('" + planoDeFundo + "')";
  document.getElementById("conteiner_lista_de_cards").style.backgroundImage = planoDeFundo;

  for (i = 0; i <= numeroDeCards;) {

    if ((i + 2)<=numeroDeCards){
      j = i+1;
      k = i+2;
    }
    else
    {
          if ((i + 1)==(numeroDeCards)){
          j = i+1;
          k = 0;
          l = -2;
          }
          else if(i==(numeroDeCards)){
          j = 0;
          k = 1;
          l = -1;
          }
    }

    id_1 = json.id[i];
    titulo_1 = json.titulo[i].substring(0, 25);
    texto_1 = json.texto[i].substring(0, 100);
    link_1 = json.link[i];
    id_2 = json.id[j];
    titulo_2 = json.titulo[j].substring(0, 25);
    texto_2 = json.texto[j].substring(0, 100);
    link_2 = json.link[j];
    id_3 = json.id[k];
    titulo_3 = json.titulo[k].substring(0, 25);
    texto_3 = json.texto[k].substring(0, 100);
    link_3 = json.link[k];

    if (i==0){
      conteudoCard = conteudoCard + "<div id='item_de_lista_ativo' class='carousel-item active text-center'>";
    }
    else {
      conteudoCard = conteudoCard + "<div id='item_de_lista_padrao' class='carousel-item text-center'>";
    }

    // ---------------------------------------------------------------------------------------------------

    // PRIMEIRO CARD DA SEQUÊNCIA
      conteudoCard = conteudoCard + "<a href='#' data-toggle='modal' onclick='abreModal("+ link_1 +",&quot;"+ titulo_1 +"&quot;,&quot;"+ texto_1 +"&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card card_padrao text-center' style='background-image:url(&quot;imagens/carrossel/produto_"+ id_1 +".jpg&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card-body'>";
      conteudoCard = conteudoCard + "<div class='card-title  titulo_card_carrossel'>"+ titulo_1 +"</div>";
      conteudoCard = conteudoCard + "<div class='card-text  conteudo_card_carrossel'>"+ texto_1 +"</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</a>";

    // SEGUNDO CARD DA SEQUÊNCIA
      conteudoCard = conteudoCard + "<a href='#' data-toggle='modal' onclick='abreModal("+ link_2 +",&quot;"+ titulo_2 +"&quot;,&quot;"+ texto_2 +"&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card card_padrao text-center' style='background-image:url(&quot;imagens/carrossel/produto_"+ id_2 +".jpg&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card-body'>";
      conteudoCard = conteudoCard + "<div class='card-title  titulo_card_carrossel'>"+ titulo_2 +"</div>";
      conteudoCard = conteudoCard + "<div class='card-text  conteudo_card_carrossel'>"+ texto_2 +"</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</a>";

    // TERCEIRO CARD DA SEQUÊNCIA
      conteudoCard = conteudoCard + "<a href='#' data-toggle='modal' onclick='abreModal("+ link_3 +",&quot;"+ titulo_3 +"&quot;,&quot;"+ texto_3 +"&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card card_padrao text-center' style='background-image:url(&quot;imagens/carrossel/produto_"+ id_3 +".jpg&quot;);'>";
      conteudoCard = conteudoCard + "<div class='card-body'>";
      conteudoCard = conteudoCard + "<div class='card-title  titulo_card_carrossel'>"+ titulo_3 +"</div>";
      conteudoCard = conteudoCard + "<div class='card-text  conteudo_card_carrossel'>"+ texto_3 +"</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</div>";
      conteudoCard = conteudoCard + "</a>";

    // ---------------------------------------------------------------------------------------------------

    conteudoCard = conteudoCard + "</div>";

    // FATOR DE GIRO DOS CARDS PARA TORNÁ-LOS SEQUENCIADOS
    if((l==-1)||(l==-2)){
      i = l;
      l = 0;
    }
    i = i + 3;
  }
  document.getElementById("lista_de_cards").innerHTML = conteudoCard;
}

function toastCesta(item){
  console.log(item);
  $('.toast').toast({delay: 2500});
  $('.toast').toast('show');
}

function abreModal(lnk,tit,cont){
  $("#modal").modal('show');
  titulo_modal = "<span class='titulo_modal'>"+ tit + "</span>";
  imagem = "<div class='foto_modal' style='background-image:url(&quot;imagens/carrossel/produto_"+ lnk +".jpg&quot;);'>";
  texto_modal = "<div class='texto_modal'>"+ cont + "</div>";
  carrinho = "<a href='#' class='link_carrinho'>";
  carrinho = carrinho + "<div class='mx-auto conteiner_carrinho'>";
  carrinho = carrinho + "<div class='mx-auto cesta'>";
  carrinho = carrinho + "<i class='fas fa-shopping-basket font_cesta' onclick='toastCesta("+ lnk +");'></i>";
  carrinho = carrinho + "<div>";
  carrinho = carrinho + "</div>";
  carrinho = carrinho + "</a>";
  document.getElementById("titulo_modal").innerHTML = titulo_modal;
  document.getElementById("conteudo_modal").innerHTML = imagem + texto_modal + "</div>" + carrinho;
}

function fechaModal(titulo){
  $("#modal").modal('hide');
}
