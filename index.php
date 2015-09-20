<?php include "includes/head.php" ?>
<?php include "includes/header.php" ?>
		<main>
            <?php include "includes/getthecar.php" ?>
            <h1 class="papa">Papa, j'ai besoin de ta voiture pour :</h1>
            <form action="#" method="GET">
                <div>
                    <label for="q1">Faire les courses</label>
                    <input name="q1" id="q1" type="checkbox" <?php isChecked("1") ?>/>
                </div>
                <div>
                    <label for="q2">Aller en soirée</label>
                    <input name="q2" id="q2" type="checkbox" <?php isChecked("2") ?>/>
                </div>
                <div>
                    <label for="q3">Apprendre à rouler à ma copine</label>
                    <input name="q3" id="q3" type="checkbox" <?php isChecked("3") ?>/>
                </div>
                <div>
                    <label for="q4">Aller à l'entretien</label>
                    <input name="q4" id="q4" type="checkbox" <?php isChecked("4") ?>/>
                </div>
                <div>
                    <label for="q5">Déménager un pote</label>
                    <input name="q5" id="q5" type="checkbox" <?php isChecked("5") ?>/>
                </div>
                <div>
                    <label for="q6">Faire du shopping</label>
                    <input name="q6" id="q6" type="checkbox" <?php isChecked("6") ?>/>
                </div>
                <div>
                    <label for="q7">Aller au car wash</label>
                    <input name="q7" id="q7" type="checkbox" <?php isChecked("7") ?>/>
                </div>
                <input type="submit" value="Alors, t'es d'accord ?"/>
            </form>
            <section class="response">
                <?php if($isAsked)responseDady($for, $against); ?>
            </section>
		</main>

<?php include "includes/footer.php" ?>
<?php include "includes/foot.php" ?>