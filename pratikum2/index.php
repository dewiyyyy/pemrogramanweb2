<?php
include"orang.php";
include"Bankcastomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Hello pratikum2</h1>   
 <div class="div">
    <?php
    $nasabah = new Bankcastomer();
    $nasabah->setCustomerName('Dewi lupiani');
    $nasabah->setAddress('Egland');
    $nasabah->setEmail('dewiluviani@gmail.com');
    $nasabah->setCard('prioritas');
    $nasabah->getAcc('Jane');

    $nasabah->insertCard();
    $nasabah->enterPIN(12345);

 ?>
 </div>   
    
</body>
</html>