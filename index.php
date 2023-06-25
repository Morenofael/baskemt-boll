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

    <form action="" method="POST">
      
        <input type="text" name="nome" 
            placeholder="Informe o Nome do Jogador" />
            
        <br>

        <input type="number" name="altura"
            placeholder="Informe a altura do Jogador" />

        <br>

        <input type="text" name="peso"
            placeholder="Informe o peso do Jogador" />

        <br>

        <input type="date" name="nascimento"
            placeholder="Informe a data de nascimento do Jogador" />

        <br>

        <input type="text" name="universidade"
            placeholder="Informe a Universidade do Jogador" />

        <br>

        <input type="number" name="pickYear"
            placeholder="Informe o ano de Draft do Jogador" />

        <br>

        <input type="number" name="pickRd"
            placeholder="Informe o round de Draft do Jogador" />

        <br>

        <input type="number" name="pickNum"
            placeholder="Informe o número da pick de Draft do Jogador" />

        <br>

        <select name="pickTeam">
            <option value="">---TIME DE DRAFT---</option>
            <option value="GSW">Golden State Warriors</option>
            <option value="LAL">Los Angeles Lakes</option>
            <option value="DEN">Denver Nuggets</option>
            <option value="LAC">LA Clippers</option>
            <option value="PHX">Phoenix Suns</option>
            <option value="SAC">Sacramento Kings</option>
            <option value="BOS">Boston Celtics</option>
            <option value="BKN">Brooklyn Nets</option>
            <option value="NYK">New York Knicks</option>
            <option value="P76">Philadelphia 76ers</option>
            <option value="TOR">Toronto Raptors</option>
            <option value="CHI">Chicago Bulls</option>
            <option value="CLE">Cleveland Cavaliers</option>
            <option value="DET">Detroit Pistons</option>
            <option value="IND">Indiana Pacers</option>
            <option value="MIL">Milwaukee Bucks</option>
            <option value="ATL">Atlanta Hawks</option>
            <option value="CHA">Charlotte Hornets</option>
            <option value="MIA">Miami Heat</option>
            <option value="ORL">Orlando Magic</option>
            <option value="WAS">Washington Wizards</option>
            <option value="MIN">Minnesota Timberwolves</option>
            <option value="OKC">Oklahoma City Thunder</option>
            <option value="POR">Portland Trail Blazers</option>
            <option value="UTA">Utah Jazz</option>
            <option value="DAL">Dallas Mavericks</option>
            <option value="HOU">Houston Rockets</option>
            <option value="MEM">Memphis Grizzlies</option>
            <option value="NOP">New Orleans Pelicans</option>
            <option value="SAS">San Antonio Spurs</option>







        </select>

        <br>

        <input type="text" name="fotoLink"
            placeholder="Adicione um link de foto do Jogador" />

        <br>

        <button type="submit">Cadastrar</button>

        <input type="hidden" name="submetido" value="1" />
    </form>
      
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
              <button type="button" class="btn btn-success"><i class="bi bi-bag"></i> Success</button>
            </div>
          </div>
        </div>

      <?php endforeach; ?>


    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>