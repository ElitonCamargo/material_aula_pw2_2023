<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeria de imagesn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <!-- Início -->
        <div class="container">
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Link imagem</label>
                    <input type="link" name="link" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>            
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <?php
                require_once "./DataBase.php";
                if(isset($_POST['link'])){
                    $link = $_POST['link'];
                    $descricao = $_POST['descricao'];
                    $cx = (new BaseDeDados())->getConexao();
                    $cmd = 'INSERT INTO imagem(`link`, `descricao`) VALUES (:link,:descricao)';
                    $declarar = $cx->prepare($cmd);
                    $declarar->bindValue(':link',$link);
                    $declarar->bindValue(':descricao',$descricao);                    
                    $declarar->execute();
                }
            ?>

            <hr>
            <h2>Lista de imagens</h2>
            
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    $cx = (new BaseDeDados())->getConexao();
                    $cmd = "SELECT * FROM imagem;";
                    $declaracao = $cx->prepare($cmd);
                    $declaracao->execute();
                    if($declaracao->rowCount()){
                        $declaracao->setFetchMode(PDO::FETCH_CLASS,'stdClass');
                        $imagens = $declaracao->fetchAll();
                        foreach ($imagens as $imagem) {
                            echo '
                            <div class="col">
                                <div class="card">
                                <img src="'.$imagem->link.'" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">'.$imagem->descricao.'</h5>
                                </div>
                                </div>
                            </div>
                            ';
                        }
                    }
                ?>
                
            </div>

        </div>
    <!-- Fim -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>