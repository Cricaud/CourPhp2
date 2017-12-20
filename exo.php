//exo1

<?php
$age=null;
$category=null;

function Category($age){

  print "Quel est l'age de votre enfant";


  if ($age <6) {
        echo "votre enfant est trop jeune";
  }

while ($i >= 6) {

  if ($age >= 6 && $age =< 7){
      $category="Poussin";
    }elseif ($age => 8 && $age =< 9 ) {
              $category="Pupille";
      }elseif ($age =>10 && $age =<11) {
              $category="Minime";
      }else {
      $category="Cadet";
      }

  echo $category;
}

};

print "Quel est l'age de votre enfant";
Insert $age=value;

 ?>


//exo2

<?php


 ?>
