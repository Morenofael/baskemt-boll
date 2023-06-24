<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            require_once("Connection.php");
            $conn = Connection::getConnection();
            print_r($conn);
        ?>
        <div class="cards" >
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <!--<img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203500.png" class="card-img-top" alt="...">-->
                <div class="card-body">
                  <h5 class="card-title">Steven Adams</h5>
                  <p class="card-text">
                    2.11 m,1 20 kg<br>
                    20/7/1993 (29)<br>
                    Pitt<br>
                    2013: Rd 1, Pick 12 (OKC)</p>
                </div>
              </div>
            </div>
        </div>
        <br><br>   
    
</body>
</html>