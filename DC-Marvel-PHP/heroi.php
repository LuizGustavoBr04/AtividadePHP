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
        <?php
            if(!empty($_POST['nome_heroi'])){
                $nome_heroi = strtolower($_POST['nome_heroi']);
                $universo = strtolower($_POST['universo']);
                if($universo=="dc"){
                    switch($nome_heroi){
                case "batman":
                    $img_heroi = "DC/Batman.jpeg";
                            break;
                case "aquaman":
                     $img_heroi = "DC/aquaman.jpeg";
                            break;
                case "superman":
                            $img_heroi = "DC/Superman.jpeg";
                            break;
                case "robin":
                     $img_heroi = "DC/Robin.jpeg";
                            break;
                case "flash":
                     $img_heroi = "DC/Flash.jpeg";
                            break;
                default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }else if($universo=="marvel"){
                    switch($nome_heroi){
                 case "thor":
                      $img_heroi = "Marvel/Thor.jpeg";
                            break;
                 case "homem de ferro":
                       $img_heroi = "Marvel/HomemdeFerro.jpeg";
                            break;
                 case "doutor estranho":
                        $img_heroi = "Marvel/DoutorEstranho.jpeg";
                            break;
                 case "hulk":
                        $img_heroi = "Marvel/Hulk.jpeg";
                            break;
                 case "homem aranha":
                        $img_heroi = "Marvel/HomemAranha.jpeg";
                            break;
                default:
                        $img_heroi = "Herói inválido.";
                            break;
                    }
                }

                ?>
                <section class="heroi"><?php mostrarHeroi($universo, $img_heroi); ?></section>
                <?php
            }else{
                $universo = $_POST['universo'];
                $img_heroi = "Digite um herói!!!";
                ?>
                <section class="heroi"><?php msgInvalido($universo, $img_heroi); ?></section>
                <?php
            }

            function mostrarHeroi($universo, $img_heroi){
                if($img_heroi=="Herói inválido."){
                    msgInvalido($universo, $img_heroi);
                }else{
                    ?>
                    <figure>
                        <img src="imgs/<?php echo $img_heroi; ?>" ><br>
                    </figure>
                    <a href="index.php" class="btn">Voltar</a>
                    <?php
                }
            }

            function msgInvalido($universo, $img_heroi){
                ?>
                <form action="universo.php" method="post">
                    <input type="hidden" name="universo" value="<?php echo $universo;?>">    
                    <h2>:(</h2><br>
                    <h3><?php echo $img_heroi; ?></h3><br>
                    <input type="submit" value="Voltar" class="btn">
                </form>
                <?php
            }
        ?>

    </main>
</body>
</html>