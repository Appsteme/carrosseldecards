# carrosseldecards

Carrossel de 3 Cards

Desenvolvedor : Marcelo Tosta - App e Web Developer (Appsteme.com.br)

Descrição do Projeto

Objetivo : Disponibilizar resposivamente na web um carrossel demonstrativo de itens, segmentado em grupos de 3, com opções de avanço e recuo na navegação do conjunto apresentado. Os itens apresentados possuem título e descrição (com limitação de caracteres definida em programação) e são clicáveis, abrindo com esta ação um modal que permite uma outra complementar de aquisição do referido item. O processamento da compra não é escopo desta ferramenta, apenas a estruturação do carrossel.

Recursos : Desenvolvido com o uso das linguagens HTML5, CSS3, JavaScript e Bootstrap.

Estrutura : Possui uma página principal chamada de "index.php". Possui também sub-pastas chamadas "css", "icones", "imagens" e "js". Dentro da pasta "imagens", existem duas outras sub-pastas chamadas de "logomarca" e "carrossel". 

As imagens utilizadas para compor o carrossel de itens ficam armazenadas na pasta de nome "carrossel".

Os arquivos referentes às linguagens utilizadas ficam armazenados nas pastas respectivas.

Os dados que são parte da composição dos itens do carrossel devem ser repassados em formatação json conforme exemplo : 

JSON - ARRAY DE CARDS

      cards = {
        "id": [
          1,
          2,
          3
          ],
        "titulo": [
          "Card 1",
          "Card 2",
          "Card 3"
          ],
        "texto": [
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
        ],
        "link": [
          1,
          2,
          3
        ]
      };



