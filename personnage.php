<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo '<p>Bonjour</p>'; 

class Personnage{
    public $vie = 80;
    public $atk = 20;

    public function crier(){
        echo 'Pret pour la bataille';
    }

    public function regenerer(){
        $this->vie = 100;
    }

    public function mort(){
        return $this->vie <= 0;
    }
}



?>

</body>
</html>