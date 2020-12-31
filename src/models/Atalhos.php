<?php
class Atalhos extends Model {
    protected static $tableName = 'atalhos';
    protected static $columns = [
        'id',
        'titulo',
        'img_logo',
        'subtitulo1',
        'link_subtitulo1',
        'subtitulo2',
        'link_subtitulo2'
    ];

    public static function getActiveAtalhosCount() {
        return static::getCount(['raw' => 'end_date IS NULL']);
    }

    //Inserindo usuário no BD
    public function insert() {
        
        $this->validate();
        if(!$this->subtitulo2) $this->subtitulo2 = null;
        if(!$this->link_subtitulo2) $this->link_subtitulo2 = null;
        if(!$this->img_logo) $this->img_logo = $_FILES['img_logo']['name'];
        return parent::insert();
    }

    //Atualizando usuário no BD
    public function update() {
        $this->validate();
        if(!$this->subtitulo2) $this->subtitulo2 = null;
        if(!$this->link_subtitulo2) $this->link_subtitulo2 = null;
        if(!$this->img_logo) $this->img_logo = $_FILES['img_logo']['name']; 
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->titulo) {
            $errors['titulo'] = 'TITULO é um campo obrigatório!';
        }

        if(!$this->subtitulo1) {
            $errors['subtitulo1'] = 'O 1º SUBTITULO é um campo obrigatório!';
        }

        if(!$this->link_subtitulo1) {
            $errors['link_subtitulo1'] = 'LINK do 1º subtitulo é um campo obrigatório!';
        } elseif(!filter_var($this->link_subtitulo1, FILTER_VALIDATE_URL)) {
            $errors['link_subtitulo1'] = 'LINK de 1º subtitulo é inválido!';
        }

        // Subtitulo 2, campo não obrigatório
        if($this->subtitulo2) {
            // Se o subtitulo 2 for preenchido, obrigatóriamente o link também será
            if(!$this->link_subtitulo2) {
                $errors['link_subtitulo2'] = 'LINK do 2º subtitulo é um campo obrigatório!';
            } elseif(!filter_var($this->link_subtitulo2, FILTER_VALIDATE_URL)) {
                $errors['link_subtitulo2'] = 'LINK de 2º subtitulo é inválido!';
            }
        }
            
        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    } 
}