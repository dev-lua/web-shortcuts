<main class="content">
    <?php
    renderTitle(
        'Cadastro de Atalho',
        'Crie e atualize o atalho',
        'icofont-pixels'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" name="id" value="<= $id ?>"> -->
        
        <!-- Campo para o titulo  -->
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="titulo">Título Principal</label>
                <input type="text" id="titulo" name="titulo" placeholder="Informe o título"  value="<?= $titulo ?? '' ?>"
                    class="form-control <?= $errors['titulo'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['titulo'] ?>
                </div>
            </div>
        </div>
        
        <!-- Campo para o imagem  -->
        <div>
            <label for="img_logo" >Imagem/Logo Marca (formato .png)</label>
            <input type="file" id="img_logo" name="img_logo"value="<?= $img_logo ? $img_logo : 'logo_padrao.png' ?>" 
                class="form-control <?= $errors['img_logo'] ? 'is-invalid' : '' ?> ">
            <div class="invalid-feedback">
                <?= $errors['img_logo'] ?>
            </div>
        </div><br>
        
        <!-- Campo para a Subtitulo 1 -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="subtitulo1">Subtitulo nº 1</label>
                <input type="text" id="subtitulo1" name="subtitulo1" placeholder="Informe o subtitulo"  value="<?= $subtitulo1 ?? '' ?>"
                    class="form-control <?= $errors['subtitulo1'] ? 'is-invalid' : '' ?> ">
                <div class="invalid-feedback">
                    <?= $errors['subtitulo1'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="link_subtitulo1">Link do 1º subtitulo</label>
                <input type="text" id="link_subtitulo1" name="link_subtitulo1" placeholder="Informe o link"  value="<?= $link_subtitulo1 ?? '' ?>"
                    class="form-control <?= $errors['link_subtitulo1'] ? 'is-invalid' : '' ?> ">
                <div class="invalid-feedback">
                    <?= $errors['link_subtitulo1'] ?>
                </div>
            </div>
        </div>

        <!-- Campo para a Subtitulo 2 -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="subtitulo2">Subtitulo nº 2</label>
                <input type="text" id="subtitulo2" name="subtitulo2" placeholder="Informe o subtitulo" value="<?= $subtitulo2 ?? '' ?>"
                    class="form-control <?= $errors['subtitulo2'] ? 'is-invalid' : '' ?> ">
                <div class="invalid-feedback">
                    <?= $errors['subtitulo2'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="link_subtitulo2">Link do 2º subtitulo</label>
                <input type="text" id="link_subtitulo2" name="link_subtitulo2" placeholder="Informe o link"  value="<?= $link_subtitulo2 ?? '' ?>"
                    class="form-control <?= $errors['link_subtitulo2'] ? 'is-invalid' : '' ?> ">
                <div class="invalid-feedback">
                    <?= $errors['link_subtitulo2'] ?>
                </div>
            </div>
        </div>
        
        <div>
            <button class="btn btn-danger btn-lg">Salvar</button>
            <a href="/atalhos.php"  class="btn btn-secondary btn-lg" >Voltar</a>
        </div>
    </form>
</main>