<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title> Galeria de Imagens </title>

    <link rel="stylesheet" href="../../style/body/body.css">
    <link rel="stylesheet" href="../../style/menu/menu.css">
    <link rel="stylesheet" href="../../style/alert/alert.css">
    <link rel="stylesheet" href="../../style/form-img/form-img.css">
    <link rel="stylesheet" href="../../style/list-img/list-img.css">
    <link rel="stylesheet" href="../../style/modal/modal.css">

</head>
<body>
    <main>
        <section>

            <div class="modal">
                <div>
                    <img src="" class="img-modal">
                </div>
            </div>

        </section>
        <header>

            <div class="menu">
                <h1 class="title"> Galeria de Fotos </h1>
            </div>

        </header>
        <section>

            <div class="form-img">
                <div class="alert-img">
                    <span class="msg-alert-img"></span>
                </div>
                <form action="/salvar-foto" method="POST" enctype = "multipart/form-data" id="form-img">
                    <input type="text" name="name" id="input-save-name" placeholder="Nome do arquivo">
                    <input type="file" name="img" id="file-save-img">
                    <button type="submit" id="btn-save-img"> Salvar Arquivo </button>
                </form>
            </div>

            <div class="list-img">
                <table id="list-img">
                    <tbody>
                    <?php foreach ($photos as $photo): ?>
                        <tr>
                            <td id="td-img"> <img src="../../img/<?php echo $photo->getName() ?>" alt="imagem" id="icon-img"> </td>
                            <td id="td-name-img"> <span> <?php echo $photo->getName()?> </span> </td>
                            <td id="td-delete-img"> <a href="deletar-foto?id=<?php echo $photo->getId() ?>" id="delete-img"> deletar </a> </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="module" src="../../script/main.js"></script>
 
</body>
</html> 

