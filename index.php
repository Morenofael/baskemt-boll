<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
      require_once("Connection.php");
      $conn = Connection::getConnection();
      //print_r($conn);


      if(isset($_POST['submetido'])) {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : null;
        $peso = isset($_POST['peso']) ? $_POST['peso'] : null;
        $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : null;
        $universidade = isset($_POST['universidade']) ? $_POST['universidade'] : null;
        $pickYear = isset($_POST['pickYear']) ? $_POST['pickYear'] : null;
        $pickRd = isset($_POST['pickRd']) ? $_POST['pickRd'] : null;
        $pickNum = isset($_POST['pickNum']) ? $_POST['pickNum'] : null;
        $pickTeam = isset($_POST['pickTeam']) ? $_POST['pickTeam'] : null;
        $fotoLink = isset($_POST['fotoLink']) ? $_POST['fotoLink'] : null;
    
        $sql = 'INSERT INTO players (nome, altura, peso, nascimento, universidade, pickYear, pickRd, pickNum, pickTeam, fotoLink)' .
          ' VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
          $stmt = $conn->prepare($sql);
          $stmt->execute([$nome, $altura, $peso, $nascimento, $universidade, $pickYear, $pickRd, $pickNum, $pickTeam, $fotoLink]);
          header("location: index.php");
    }
    ?>


  

  <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary mb-1" data-bs-theme="dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img src="./imagens/logo-nba.png" alt="Logo da NBA">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">NBA-Trade</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/Morenofael/baskemt-boll">GitHub</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>
  <div class="container">

    
      
    <?php 
        $sql = "SELECT * FROM players";

        //Prepara e executa o comando SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //Armazena os resultados ($result é uma matriz)
        $result = $stmt->fetchAll();
    ?>

  
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach($result as $reg): ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo $reg['fotoLink'] ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5 class="card-title"><?php echo $reg['nome'] ?></h5>
                <p class="card-text">
                  <?php echo $reg['altura']."M  ".$reg['peso']."Kg <br>".
                    $reg['nascimento']." ".$reg['universidade']."<br>".
                    $reg['pickYear'].": RD ".$reg['pickRd'].", Pick ".$reg['pickNum']."(".$reg['pickTeam'].")";
                  ?>
                </p>
              </div>
              <button type="button" class="btn btn-success"><i class="bi bi-bag"></i> Compra</button>
            </div>
          </div>
        </div>

      <?php endforeach; ?>


    </div>
  </div>
    <footer class="bg-dark">
      <div class="container-fluid d-flex text-light mt-4 pt-4">
        <img src="imagens/logo-nba.png" alt="Logo da NBA" class="img-fluid">
        <div>
            <p>Sobre nós</p>
            <p>FAQ</p>
            <p>Jogadores</p>
            <p>Jurídico</p>
            <button type="button" class="btn btn-outline-success"><a href="cadastro.php"> Cadastrar jogador</a></button>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>