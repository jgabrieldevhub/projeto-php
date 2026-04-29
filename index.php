<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Website Mulheres</title>
</head>
<body>
     <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
        // aqui criar o array de mulheres
        $arrayMulheres = [
            ['Ada Lovelace','./img/ada-lovelace.webp','Matemática inglesa do século XIX, é considerada a primeira programadora da história. Trabalhou com Charles Babbage na Máquina Analítica e escreveu o primeiro algoritmo para ser processado por uma máquina, antecipando conceitos fundamentais da computação moderna.'],
            ['Grace Hopper','./img/grace-hopper.webp','Almirante da Marinha dos EUA e cientista da computação, foi pioneira no desenvolvimento de linguagens de programação. Criou o primeiro compilador e contribuiu para o COBOL, tornando a programação mais acessível e prática para aplicações comerciais.'],
            ['Dorothy Vaughan','./img/dorothy-vaughan.png','Matemática e programadora afro-americana, liderou a divisão de computação da NASA. Especializou-se em FORTRAN e teve papel essencial na transição para computadores eletrônicos, contribuindo para missões espaciais históricas.'],
            ['Marissa Mayer','./img/marissa-mayer.png','Engenheira e executiva, foi uma das primeiras funcionárias do Google, onde liderou produtos como busca e Gmail. Depois, tornou-se CEO do Yahoo, sendo uma das mulheres mais influentes do setor de tecnologia.'],
            ['Margaret Hamilton','./img/margareth-hamilton.webp','Cientista da computação que liderou o desenvolvimento do software de voo do programa Apollo. Seu trabalho foi crucial para o sucesso da missão Apollo 11 e popularizou o termo “engenharia de software” como disciplina essencial.'],
        ];
    ?>

    <div class="galeria">
        
        <?php
        /*cada item é o conjunto de informações de uma mulher*/
        for ($i = 0; $i < count($arrayMulheres); $i++) {         
        ?>
        <div class="item">
            <img src=<?php echo($arrayMulheres[$i][1])?>/>
            <h3><?php echo($arrayMulheres[$i][0])?></h3>
            <p><?php echo($arrayMulheres[$i][2])?></p>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>