<?php

require_once 'layout\layout2.php';

session_start();

$layout = New Layout('Cart');
?>

<?php $layout->printheader();?>
<main>
    <h1>Hey im here </h1>
</main>

<?php $layout->printfooter();?>