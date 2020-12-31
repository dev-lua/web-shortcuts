<main class="content">
<?php
renderTitle(
    'Acessar Atalhos',
    'Procure seus atalhos cadastrados.',
    'icofont-reply-all'
);
include(TEMPLATE_PATH . "/messages.php");
?>
<!--  Novo atalho  -->
<a class="btn btn-lg btn-danger mb-3" href="salvar_atalho.php">Novo Atalho</a>

<!-- Formulário para pesquisar atalho específico -->
<form class="mb-4" action="#" method="post">
    <div class="input-group">   
        <select name="atalho" class="form-control mr-2" placeholder="Selecione o atalho...">
            <option value="">Procure o atalho aqui...</option>
                <?php
                // Mostrar todos os atalhos cadastrados
                    foreach($atalhos as $atalho) {
                        $selected = $atalho->id === $selectedAtalhoId ? 'selected' : '';
                        echo "<option value='{$atalho->id}' {$selected}>{$atalho->titulo}</option>";
                    }
                ?>
        </select>
        <!-- Botão para pesquisar -->
        <button class="btn btn-warning ml-2">
            <i class="icofont-search"></i>
        </button>
    </div>
</form>

<div id="resultado-pesquisa">
    <h4>Resultado da pesquisa</h4>
    <div class="card-body">
        <div class="summary-boxes">
            <?php if($selected): ?>
                <div class="summary-box">
                    <!-- Titulo -->
                    <h3 class="title"><?= $atalho->titulo ?></h3>
                    <!-- Imagem -->
                    <img src="assets/img/<?= $atalho->img_logo ?>" class="img-logo"> 
                    <!-- Subtitulo e links -->
                    <p class="subtitle"><a href="<?= $atalho->link_subtitulo1 ?>" target="_blank"><?= $atalho->subtitulo1 ?></a></p>
                    <p class="subtitle"><a href="<?= $atalho->link_subtitulo2 ?>" target="_blank"><?= $atalho->subtitulo2 ?></a></p>
                    <div>
                        <a href="salvar_atalho.php?update=<?= $atalho->id ?>" class="btn btn-warning rounded-circle mr2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $atalho->id ?>" class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>   
</div>

<div class="card">
    <div class="card-header">
        <p class="mb-0">Aqui você encontra e arquiva seus atalhos de sites de maneira mais rápida!</p>
    </div>
    <div class="card-body">
        <div class="summary-boxes">
            <?php foreach($atalhos as $atalho): ?>
                <div class="summary-box">
                    <!-- Titulo -->
                    <h3 class="title"><?= $atalho->titulo ?></h3>
                    <!-- Imagem -->
                    <img src="assets/img/<?= $atalho->img_logo ?>" height="120"> 
                    <!-- Subtitulo e links -->
                    <p class="subtitle"><a href="<?= $atalho->link_subtitulo1 ?>" target="_blank"><?= $atalho->subtitulo1 ?></a></p>
                    <p class="subtitle"><a href="<?= $atalho->link_subtitulo2 ?>" target="_blank"><?= $atalho->subtitulo2 ?></a></p>
                    <div>
                        <a href="salvar_atalho.php?update=<?= $atalho->id ?>" class="btn btn-warning rounded-circle mr2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $atalho->id ?>" class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>   
</div>
</main>