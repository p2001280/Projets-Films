
<?php
class View {
    private $_file;
    private $_t;

    public function __construct($action){
        $this->_file = 'View/View'.$action.'.php';

    }
    // genere et affiche la vue
    public function generate($data){
        //partie specifique de la vue
        $content = $this->generateFile($this->_file,$data);
        //Partie template
        $view = $this->generateFile('View/template.php',array('t' => $this->_t, 'content' => $content));
        echo $view;
    }
    //Genere et affiche la vue sans le template
    public function generateBase($data){
        //partie specifique de la vue
        $content = $this->generateFile($this->_file,$data);
        
        echo $content;
    }
    //genere un fichier vue et renvoie le resultat
    private function generateFile($file, $data){
        if(file_exists($file)){
            extract($data);

            ob_start();
            //on inclut le fichier vue
            require($file);

            return ob_get_clean();
        }
        else{
            throw new Exception('Fichier '.$file.' introuvable');

        }
    }

}

?>