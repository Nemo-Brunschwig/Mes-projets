<?php

if (isset($_GET['desc'])){
    $desc=join("&nbsp;", explode("_", $_GET['desc']));
}
if (isset($_GET['img'])){
    $img=$_GET['img'];
}
if(isset($_GET['title'])){
    $title=join("&nbsp;", explode("_", $_GET['title']));
}
if(isset($_GET['color'])){
    $color=$_GET['color'];
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>DiscordEmbed</title>
    
    <meta name="theme-color" content=<?php if(isset($_GET['color'])) echo "#".$color; ?>>
    <meta property="og:image" content=<?php if(isset($_GET['img'])) echo $img; ?>>
    <meta property="og:image:type" content="image/png">
    <meta property="og:title" content=<?php if(isset($_GET['title'])) echo $title; ?>>
    <meta property="og:description" content=<?php if(isset($_GET['desc'])) echo $desc; ?>>
    <meta property="og:site_name" content="developed by Mizari">
 
    <!-- On peut avoir d'autres méta-données ici -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script>
        /*var btncopy = document.querySelector('.js-copy');
        if(btncopy) {
            btncopy.addEventListener('click', docopy);
        }*/
        
        function copy() {
        
            // Cible de l'élément qui doit être copié
            var fromElement = document.querySelector("#CopyURL");
            if(!fromElement) return;
            
            // Sélection des caractères concernés
            var range = document.createRange();
            var selection = window.getSelection();
            range.selectNode(fromElement);
            selection.removeAllRanges();
            selection.addRange(range);
            
            try {
                // Exécution de la commande de copie
                var result = document.execCommand('copy');
                if (result) {
                    // La copie a réussi
                    alert('Copié !');
                }
            }
            catch(err) {
                // Une erreur est surevnue lors de la tentative de copie
                alert(err);
            }
            
            // Fin de l'opération
            selection = window.getSelection();
            if (typeof selection.removeRange === 'function') {
                selection.removeRange(range);
            } else if (typeof selection.removeAllRanges === 'function') {
                selection.removeAllRanges();
            }
        }
    </script>
  </head>
  <body>
    <div class="container">
        <form action="#" method="POST">
            <h1>Generate an embed</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" name="desc">
            </div>
            <div class="form-group">
                <label for="color">Color (hexa code)</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">#</div>
                    </div>
                    <input type="text" class="form-control" id="color" name="color">
                </div>
            </div>
            <div class="form-group">
                <label for="img">Image URL</label>
                <input type="text" class="form-control" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        $url = array();
        if (isset($_POST['title']) && $_POST['title']){
            $url[] = "title=".join("_", explode(" ",$_POST['title']));
        }
        if (isset($_POST['desc']) && $_POST['desc']){
            $url[] = "desc=".join("_", explode(" ",$_POST['desc']));
        }
        if (isset($_POST['color']) && $_POST['color']){
            $url[] = "color=".$_POST['color'];
        }
        if (isset($_POST['img']) && $_POST['img']){
            $url[] = "img=".$_POST['img'];
        }
        ?>
        <div class="input-group mt-5 mb-5">
            <div class="input-group-prepend">
                <span class="input-group-text">Your URL :</span>
            </div>
            <span class="border col-10" id="CopyURL"><?php echo "https://discordembed.000webhostapp.com/?".join("&", $url); ?></span>
            <div class="input-group-append">
                <input class="btn btn-success js-copy" type="button" onclick="copy()" value="Copy">
            </div>
        </div>
        <div classe="mt-5 mb-5"></div>
        <h1>My Discord Server 🧙‍♂️</h1>
        <iframe src="https://discordapp.com/widget?id=585906194724552706&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </div>
  </body>
<html>
