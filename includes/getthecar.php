<?php
/*
 * Exercice
 * By Kévin Kévers - www.kevinkevers.be
 * 19/09/15
 *
 * Input                Output:
 *
 * 3 yes - y<=1 no      OK
 * 2 yes - 1 no         A condition que
 * 3 yes - 2 no         Peut-être
 * x<3 yes - y<1 no     dégage,punk
 *
 */

// CHECK THE BOXES PREVIOUSLY CHOSEN
function isChecked($chosen){
    if(isset($_GET['q'.$chosen]))
        echo('checked = "checked"');
}

// DISPLAY THE CAR
function displayCar(){
    echo('<h2 class="ok"> Ok !
<img src="img/nice-car.jpg" alt="Mon papa en voiture">

</h2>');
}

// RETURN THE RESPONSE OF THE DAD
function responseDady($for,$against){
    echo('<h1>Réponse du papa :</h1>');

    if($for < 3 && $against == 0)
        displayCar();

    else if($for == 3 && $against <= 1)
        displayCar();

    else if($for == 2 && $against <= 1)
        echo('<h2>Ok à condition que tu fasses encore quelque chose pour moi.</h2>');

    else if($for == 3 && $against == 2)
    {
        echo('<h2 class="maybe">Peut-être ! <br>');
        $luck = rand(0,1);
        if ($luck == 1)
            echo('Bon allais c\'est bon pour cette fois-ci !
            <img src="img/nice-car.jpg" alt="Mon papa en voiture">');
        else
            echo('Mais je crois que je vais dire non cette fois-ci !');
        echo('</h2>');
    }

    else
        echo('<h2 class="no">Dégage, punk !</h2>');
}

// CHECK IF THERE IS A GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET) {
    $isAsked = true;
    $for = 0;
    $against = 0;
    $nbrQuestions = 7;
// GET THE ANSWER AND SORT IT ACCORDING TO MY THOUGHTS OF WHAT WAS GOOD OR NOT
    for ($i = 1; $i <= $nbrQuestions; $i++) {
        if (isset($_GET['q' . $i])) {

            if ($i == 1 || $i == 4 || $i == 7)
                $for++;
            else
                $against++;
        }
    }

}


?>