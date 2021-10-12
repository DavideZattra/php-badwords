<!DOCTYPE html>
<?php

    $testo_di_prova = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias ducimus, nulla quidem tempore velit voluptatum non repellendus dignissimos modi eveniet veritatis numquam. Aspernatur animi molestiae dolor enim laborum voluptatibus sed vel quaerat exercitationem aut itaque consectetur velit, nemo consequuntur voluptas modi cum aliquam sapiente similique? Nostrum maiores, consequuntur est officiis quaerat numquam adipisci at placeat officia pariatur, magni, corporis explicabo.';
    $_GET[""]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        echo $testo_di_prova
        ?>
    </p>
    <p>
        <?php
        echo strlen($testo_di_prova)
        ?>
    </p>
    <p>
        <?php
        echo str_replace($_GET['badword'], '***', $testo_di_prova )
        ?>
    </p>
</body>
</html>