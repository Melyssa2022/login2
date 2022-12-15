<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
    <br>







    <div class="container-fluid bg-secondary"><br>
<div class="row d-flex justify-content-center">
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="cadastrar_produtos.php" role="button">Cadastrar veiculos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="consultar_produtos.php" role="button">Consultar veiculos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="listar_produtos.php" role="button">Listar veiculos</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-primary" href="excluir_produtos.php" role="button">Excluir veiculos</a>

</div>

</div>
<br>
</div>

</div>


<div class="container-fluid bg-secondary"><br>
<div class="row d-flex justify-content-center">
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="cadastrar_vendedor.php" role="button">Cadastrar vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="consultar_vendedor.php" role="button">Consultar vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="listar_vendedor.php" role="button">Listar vendedor</a>
</div>
<div class="col md-4 d-flex justify-content-center">
<a class="btn btn-warning" href="excluir_vendedor.php" role="button">Excluir vendedor</a>

</div></div>
<br>
</div>

</div>
<br>






    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carro1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>CHEVROLET S10</h5>
        <p>2.8 16V TURBO DIESEL LTZ CD 4X4 AUTOMÁTICO, Cidade-Recife-PE, Ano-2021/2022, KM-4.367, Câmbio-Automática, Carroceria-Picape, Combustível-Diesel, Final de placa-5, Cor-Branco, Aceita troca-Sim</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="carro2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HONDA CIVIC</h5>
        <p>2.0 16V FLEXONE EX 4P CVT, Cidade-São Paulo-SP, Ano-2018/2018, KM-88.521, Câmbio-Automática.Carroceria-Sedã, Combustível-Gasolina e álcool, Final de placa-6, Cor-Preto, Aceita troca-Sim, Todas as revisões feitas pela concessionária-Sim, IPVA pago-Sim, Licenciado-Sim </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="carro3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>VOLKSWAGEN GOLF</h5>
        <p>1.4 TSI HÍBRIDO GTE DSG, Cidade-Taubaté-SP, Ano-2019/2020, KM-26.000, Câmbio-Automática, Carroceria-Hatchback, Combustível-Gasolina e elétrico, Final de placa-4, Cor-Azul, Aceita troca-Sim, Licenciado-Sim.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="moto1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>KAWASAKI S10</h5>
        <p>4 Tempos, 300 cilindros, 2014/2015, verde, Elétrico, 6 marchas, refrigeração líquida, freios-Disco/disco, KM-32.000, Esportivo, Injeção Eletrônica.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="moto2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BMW R 1250 GS PREMIUM</h5>
        <p>Cidade-Piraquara-PR, Ano-2020/2020, Marchas-6, Quilometragem-27.000, Tipo de motor-4 Tempos, Cor-Preto-Dourado, Refrigeração-líquida, Estilo-Trail, Cilindrada-1250, Partida-elétrica, Freio dia, teiro /traseiro-disco/disco, Alimentação-Injeção Eletrônica.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="moto3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HARLEY-DAVIDSON SOFTAIL BREAKOUT 114</h5>
        <p>Cidade-Araraquara-SP, Ano-2021/2021, Marchas-6, Quilometragem-4.200, Tipo de motor-4 Tempos, Cor-Preto-Preto, Refrigeração-ar, Estilo-Custom, Cilindrada-190, Partida-pedal e elétrica, Freio dianteiro /traseiro-disco/disco, Alimentação-Injeção Eletrônica</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



































































































<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    </div>
</body>
</html>