<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/icone.png" type="image/icone.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Marvel e DC</title>
</head>
<body>
    
    <main>
        <section class="box">
         <h1>Escolha um Universo Abaixo:</h1>
            <form action="universo.php" method="post">
         <input type="radio" class="ipt-rdo" name="universo" value="Marvel">Marvel<br>
         <input type="radio" class="ipt-rdo" name="universo" value="DC">DC<br>
         <input type="submit" value="Confirmar" class="btn">
            </form>
        </section>
    </main>
</body>
</html>