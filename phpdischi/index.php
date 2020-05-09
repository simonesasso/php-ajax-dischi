<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <header>
      <h1>Spotify</h1>
    </header>
    <nav>
      <button type="button" name="button" id="tutti">Vedi tutti</button>
      <input type="text" id="filtro_txt" placeholder="Nome artista">
      <button type="button" name="button" id="filtro">Filtra</button>
    </nav>
    <div class="container">
      <div class="cont-ul">
        <ul>

        </ul>
      </div>
    </div>


    <!-- template handlebar ----------------------------------------------------->
    <script id="template-lista" type="text/x-handlebars-template">

      <li>
        <div class="container-locandina">
          <img src={{immagine}} alt="img">
          <div class="info">
           <h4>Titolo: {{titolo}}</h4>
           <h6>Autore: {{autore}}</h6>
           <div>Genere: {{{genere}}}</div>
           <span>Anno:{{{anno}}}</span>
         </div>
       </div>




      </li>
    </script>

    <!-- Include Handlebars from a CDN -->
   <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js" charset="utf-8"></script>
  </body>
</html>
