<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requin juvénile</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <main>
        <h1>Baby shark</h1>
        <div class="lyrics">
            <?php
            // Membres de la famille Requin
            $family = ['baby', 'mommy', 'daddy', 'grandma', 'grandpa'];

            ?>

            <?php foreach($family as $member): ?>

                <div class="verse member-<?php {echo"$member";} ?>" >

                    <?php for ($i = 0; $i<3; $i++):?>
                        <p>
                            <?php echo "$member shark doo doo doo doo doo"; ?>
                        </p>

                    <?php endfor; ?>

                    <p>
                        <?= $member ?> shark !
                    </p>

                </div>

            <?php endforeach; ?>


            <!-- Chaque couplet doit être représenté par une div comme celle-ci : 
            <div class="verse member-NOM-REQUIN">
                <p>Les paroles ici</p>
                <p>Encore des paroles là</p>
            </div>
            -->
        </div>
    </main>

</body>
</html>

