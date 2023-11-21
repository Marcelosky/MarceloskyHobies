<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloscuentos.css">
    <link rel="icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/variables.css">
   

    <title>Cuento</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning" >
                    <div class="container-fluid">
                      <a class="navbar-brand" href="MarceloskyWeb.php">La web de Marcelosky</a>
                      <a class="navbar-brand" href="cuentos.php">Cuentos</a>
                      <a class="navbar-brand" href="fibo.php">Fibonacci</a>
                     
                    </div>
                  </nav>
                  <br>
<h4>Seleccione un idioma</h4>
<p>
<form id="listado" action="cuentos.php" method="POST" >
    <select name="idioma">
        <option value="">--seleccionar--</option>
        <option value="español">español</option>
        <option value="ingles">ingles</option>
        <option value="frances">frances</option>
    </select>
<input type="submit">
</form>
</p>

<?php
 

    
 $lang="";
 
 if(isset($_POST['idioma'])){
     if($_POST['idioma'] =='español'){
         $lang = "Varias adolescentes habían ido a pasar la noche en casa de una amiga, aprovechando que sus 
         padres estaban de viaje. Cuando apagaron las luces se pusieron a hablar de un viejo al que
          acababan de enterrar en un cementerio cercano. Se decía que lo habían enterrado vivo y que 
          se le podía escuchar arañando el ataúd, intentando salir.
         Una de las chicas se burló de aquella idea, así que las otras la desafiaron a que se levantara y 
         fuera a visitar la tumba. Como prueba de que había ido, tenía que clavar una estaca de madera sobre 
         la tierra de la tumba. La chica se fue y sus amigas apagaron la luz otra vez y esperaron a que volviera.
         Pero pasó una hora, y otra más, sin que tuvieran noticias de su amiga. Se quedaron en la cama despiertas, 
         cada vez más aterradas. Llegó la mañana y la chica no había aparecido. Aquel mismo día, los padres de la chica 
         regresaron a casa y, junto al resto de padres, acudieron al cementerio. Encontraron a la chica tirada sobre la 
         tumba… Muerta. Al agacharse para clavar la estaca en el suelo, había pillado también el bajo de su falda. 
         Cuando intentó levantarse y no pudo, creyó que el viejo muerto la había agarrado. Murió del susto en el acto.";
     }
     
 
     if($_POST['idioma'] =='ingles'){
         $lang = "Several teenagers had gone to spend the night at a friend's house, taking advantage of the fact that their
         parents were away. When the lights went out they started talking about an old man whom
           they had just been buried in a nearby cemetery. It was said that he had been buried alive and that
           he could be heard clawing at the coffin, trying to get out.
         One of the girls scoffed at that idea, so the others dared her to get up and
         went to visit the grave. As proof that he had come, he had to drive a wooden stake into
         the land of the grave. The girl left and her friends turned off the light again and waited for her to come back.
         But an hour passed, and another more, without any news of their friend. They stayed in bed awake,
         increasingly terrified. The morning came and the girl had not appeared. That same day, the girl's parents
         They returned home and, together with the rest of the parents, went to the cemetery. They found the girl lying on the
         tomb… dead. Bending down to drive the stake into the ground, it had also caught the hem of her skirt.
         When she tried to get up and couldn't, she thought the dead old man had grabbed her. He died of fright on the spot.";
     }   
     if($_POST['idioma'] =='frances'){
             $lang = "Plusieurs adolescents étaient allés passer la nuit chez un ami, profitant du fait que leur
             les parents étaient absents. Lorsque les lumières se sont éteintes, ils ont commencé à parler d'un vieil homme qui
               ils venaient d'être enterrés dans un cimetière voisin. On a dit qu'il avait été enterré vivant et que
               on pouvait l'entendre griffer le cercueil, essayant de sortir.
             Une des filles s'est moquée de cette idée, alors les autres l'ont mise au défi de se lever et
             allé visiter la tombe. Comme preuve qu'il était venu, il dut enfoncer un pieu en bois dans
             le pays de la tombe. La fille est partie et ses amis ont de nouveau éteint la lumière et ont attendu qu'elle revienne.
             Mais une heure passa, et une autre de plus, sans aucune nouvelle de leur ami. Ils sont restés au lit éveillés,
             de plus en plus terrifié. Le matin est venu et la fille n'était pas apparue. Le même jour, les parents de la fille
             Ils rentrèrent chez eux et, avec le reste des parents, se rendirent au cimetière. Ils ont trouvé la jeune fille allongée sur le
             tombeau… mort. Se penchant pour enfoncer le pieu dans le sol, il avait également attrapé l'ourlet de sa jupe.
             Quand elle a essayé de se lever et n'a pas pu, elle a pensé que le vieil homme mort l'avait attrapée. Il est mort de peur sur le coup.";
            
 }
}
 ?>


<h4 class="cuentos"><?= $lang ?></h4>











 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>