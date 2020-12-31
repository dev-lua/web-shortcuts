<?php
$atalhos = Atalhos::get();
$selectedAtalhoId = $_POST['atalho'] ? $_POST['atalho'] : $atalho->id;

$exception = null;
if(isset($_GET['delete'])) {
    try {
        Atalhos::deleteById($_GET['delete']);
        addSuccessMsg('Atalho excluído com sucesso.');
    } catch(Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não é possível excluir o atalho com registros de ponto.');
        } else {
            $exception = $e;
        }
    }
}

loadTemplateView('atalhos', [
    'exception' => $exception,
    'selectedAtalhoId' => $selectedAtalhosId,
    'atalhos' => $atalhos
]);