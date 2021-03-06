<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Promoções</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/murilo.css">
  <link rel="stylesheet" href="css/arielle.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/event.js"></script>
  <script src="js/effects.js"></script>
</head>
<body>
    <?php 
      session_start();
      require_once('../cms/model/DAO/Conexao.php');   
      $conex = new Conexao();
      $con = $conex->connectDatabase();

    ?>
  <header><?php require_once 'header.php'; ?></header>

    <div class="principal">
      <div class="titulo_pagina font-titulo">
          <h1 class="title-pag-promocoes">Promoções</h1>
      </div>
      <?php		
					$sql = "SELECT * FROM tbl_promocao WHERE status = 1";
					$stm = $con->prepare($sql);
					$success = $stm->execute();
					foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){	
      ?>
      <div class="section-three-conteudo centralizar_elemento">
        <div class="section-three-conteudo-imagem centralizarY">
          <img class="centralizar_elemento" src="img/7upPromocao.jpg" alt="Promoção">
        </div>
        <div class="section-three-conteudo-infomarcao">
          <div class="section-three-conteudo-titulo"><?php echo (utf8_decode($result['titulo'])) ?></div>
          <div class="section-three-conteudo-texto">
            <?php echo (utf8_decode($result['descricao'])) ?>
          </div>
          <br><br><br><div class="titleRegulamento">Regulamento</div>
          <br>
          <ol>
            <li class="textRegulamento">1 - Compre refrigerantes de lata da 7up</li>
            <li class="textRegulamento">2 - Junte as latas</li>
            <li class="textRegulamento">3 - Vá até o estabelecimento no qual comprou e troque suas latas por cupons de sorteio</li>
            <li class="textRegulamento">4 - Agora é só esperar para o sorteio</li>
            <li class="textRegulamento">5 - O resultado será divulgado aqui no nosso site!</li>
          </ol>
        </div>
      </div>

      <?php } ?>

    </div>
  <footer> <?php require_once 'footer.html'; ?></footer>
  </body>
</html>
