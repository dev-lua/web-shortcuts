<?php
session_start();

$exception = null;
$atalhoDado = [];

if(count($_POST) === 0 && isset($_GET['update'])) {
    $atalho = Atalhos::getOne(['id' => $_GET['update']]);
    $atalhoDado = $atalho->getValues();
    
} elseif(count($_POST) > 0) {
    try {
        $dbAtalho = new Atalhos($_POST);
        
        if($dbAtalho->id) {
            $dbAtalho->update();
            addSuccessMsg('Atalho alterado com sucesso!'); 
            exit();
        } else {
            $dbAtalho->insert();
            addSuccessMsg('Atalho cadastrado com sucesso!'); 
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $atalhoDado = $_POST;
    }
}

//Se não tiver nenhum erro no formulário
if(count($exception) == 0){
    // Movendo as imagens dos atalhos para seu diretório
    $nomeDoArquivo = $_FILES['img_logo']['name'];
    $dir = 'assets/img/'; //Diretório para uploads
    move_uploaded_file($_FILES['img_logo']['tmp_name'], $dir. $nomeDoArquivo);
}

loadTemplateView('salvar_atalho', $atalhoDado + ['exception' => $exception]);