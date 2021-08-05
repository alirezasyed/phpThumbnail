<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Télécharger la vidéo YouTube </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>

<body>
    
  <form action="" method="POST">
    <header>Télécharger</header>

    <div class="url-input">
      <span class="title">Coller l'URL de la vidéo :</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=lqwdD2ivIbM" required>
        <input class="hidden-input" type="hidden" name="imgurl">
        <span class="bottom-line"></span>
      </div>
    </div>

    <div class="preview-area">
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Collez l'URL de la vidéo pour voir l'aperçu </span>
    </div>
    
    <button class="download-btn" type="submit" name="button">Télécharger</button>
  </form>

</body>
</html>
