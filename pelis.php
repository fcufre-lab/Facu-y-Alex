<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Cine</title>
  <style>
    body {
      font-family: Arial;
      margin: 0;
    }

    header {
      background: #ddd;
      padding: 10px;
      text-align: center;
    }

    .banner {
      text-align: center;
      margin: 10px;
    }

    .banner img {
      width: 100px;
      height: 100px;
      background: #aaa;
    }

    .contenedor {
      display: flex;
      flex-direction: column;
      gap: 15px;
      padding: 10px;
    }

    .item {
      display: flex;
      gap: 10px;
      background: #eee;
      padding: 10px;
    }

    .item img {
      width: 100px;
      height: 70px;
      background: #aaa;
    }

    .texto {
      flex: 1;
    }
  </style>
</head>

<body>

   <nav>
    <img src="imagenes/Logo.png">
    <a href="index.php">Inicio</a>
    <a href="juegos.php">Juegos</a>
    <a href="pelis.php">Peliculas</a>
    <a href="series.php">Series</a>
  </nav>


  <header>
    <h1>Cine</h1>
  </header>

  <div class="banner">
    <img src="logo.png" alt="Logo Cine">
  </div>

  <div class="contenedor">
    <div class="item">
      <img src="peli1.jpg" alt="Pelicula 1">
      <div class="texto">
        <h2>El Padrino</h2>
        <p>Un clásico del cine de mafias.</p>
      </div>
    </div>

    <div class="item">
      <img src="peli2.jpg" alt="Pelicula 2">
      <div class="texto">
        <h2>Matrix</h2>
        <p>Una película que revolucionó la ciencia ficción.</p>
      </div>
    </div>
  </div>
</body>

</html>