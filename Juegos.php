<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Videojuegos</title>
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

    header p {
      margin: 0;
    }

    .collage {
      display: flex;
      justify-content: space-around;
      margin: 10px;
    }

    .collage img {
      width: 100px;
      height: 70px;
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
      width: 80px;
      height: 60px;
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
    <h1>Videojuegos</h1>
    <p>y su impacto cultural</p>
  </header>

  <div class="collage">
    <img src="game1.jpg" alt="Juego 1">
    <img src="game2.jpg" alt="Juego 2">
    <img src="game3.jpg" alt="Juego 3">
  </div>

  <div class="contenedor">
    <div class="item">
      <img src="juego1.jpg" alt="Juego">
      <div class="texto">
        <h2>The Last of Us</h2>
        <p>Un juego que combina narrativa y emoción.</p>
      </div>
    </div>

    <div class="item">
      <img src="juego2.jpg" alt="Juego">
      <div class="texto">
        <h2>Mario Bros</h2>
        <p>Un clásico que marcó generaciones y la historia de los videojuegos.</p>
      </div>
    </div>
  </div>
</body>

</html>'