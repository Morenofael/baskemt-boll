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
          header("location: cadastro.php");
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
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

    <div class="mb-3">
        <label for="inputNome" class="form-label">Nome do Jogador</label>
            <input id="inputNome" class="form-control" type="text" name="nome">
    </div> 

        <br>

    <div class="mb-3">
        <label for="inputAlt" class="form-label">Altura do Jogador</label>
        <input id="inputAlt" class="form-control" type="number" name="altura">
    </div>

    <br>

    <div class="mb-3">
        <label for="inputPeso" class="form-label">Peso do Jogador</label>
        <input id="inputPeso" class="form-control" type="text" name="peso">
    </div>

        <br>

    <div class="mb-3">
      <label for="inputNas" class="form-label">Data de Nascimento do Jogador</label>
      <input id="inputNas" class="form-control" type="date" name="nascimento">
    </div>

    <br>

    <div class="mb-3">
      <label for="inputUni" class="form-label">universidade que o Jogador atuou</label>
      <input id="inputUni" class="form-control" type="text" name="universidade">
    </div>

    <br>

    <div class="input-group">
      <span class="input-group-text">Pick Ano</span>
      <input type="number" name="pickYear" aria-label="Pick Ano" class="form-control">
      <span class="input-group-text">Round</span>
      <input type="number" name="pickRd" aria-label="Pick Round" class="form-control">
      <span class="input-group-text">Escolha</span>
      <input type="number" name="pickNum" aria-label="Pick Numero" class="form-control">
    </div>

    <br>

    <select name="pickTeam" class="form-select" aria-label="Default select example">
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
    
    <div class="mb-3">
      <label for="inputFoto" class="form-label">universidade que o Jogador atuou</label>
      <input id="inputFoto" class="form-control" type="text" name="fotoLink">
    </div>

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

    <br><br>

    <div class="table-responsive">
      <table class="table mt-2 table-responsive-lg">
          <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>Altura</td>
              <td>Peso</td>
              <td>Nascimento</td>
              <td>Universidade</td>
              <td>Pick</td>
              <td></td>
          </tr>
          
          <?php foreach($result as $reg): ?>
              <tr>
                  <td> <?php echo $reg['id'] ?> </td>
                  <td> <?php echo $reg['nome'] ?> </td>
                  <td> <?= $reg['altura'] ?> </td>
                  <td> <?= $reg['peso'] ?> </td>
                  <td> <?= $reg['nascimento'] ?> </td>
                  <td> <?= $reg['universidade'] ?> </td>
                  <td> <?= $reg['pickYear'] ?>: Rd <?= $reg['pickRd'] ?>, Pick <?= $reg['pickNum'] ?> (<?= $reg['pickTeam'] ?>)</td>
                  <td><a href="player_del.php?id=<?= $reg['id']; ?>"
                          onclick="return confirm('Confirma a exclusão?');">
                          Excluir</a></td>

              </tr>
          <?php endforeach; ?>
      </table>
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
            <button type="button" class="btn btn-outline-success"><a href="index.php">Voltar para a página anterior</a></button>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>   
