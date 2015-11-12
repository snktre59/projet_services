<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    // Propriétés
    private $CI;
    private $var = array();
    private $theme = "theme_1";
    private $racine;
    private $tabMessage = array();

    /**
     * Constructeur
     */
    public function __construct()
    {
        // Instance CodeIgniter
        $this->CI = &get_instance();
        $this->set_theme("theme_1");
        $this->racine = substr($this->CI->router->fetch_class(), 0, 5);

        // Initialisation du tableau des CSS et JS
        $this->var['output'] = "";
        $this->var['css'] = array();
        $this->var['js'] = array();

        // Titre par défaut, avec le nom de la méthode et du contrôleur
        $this->var['titre'] = ucfirst($this->CI->router->fetch_method()).' - '.ucfirst($this->CI->router->fetch_class());

        // Initialisation avec la clé de configuration initialisée dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');

        // Gestion du flash message
        $this->var['tabFlashMessage'] = $this->get_flash_message();

        // CSS
        $this->ajouter_css("bootstrap.min");
        $this->ajouter_css("magnific-popup");
        $this->ajouter_css("owl.carousel");
        $this->ajouter_css("owl.theme");
        $this->ajouter_css("carousel-animate");
        $this->ajouter_css("theme");
        //$this->ajouter_css("font-awesome.min");

        // JS
        $this->ajouter_js("jquery-1.11.3.min");
        $this->ajouter_js("bootstrap.min");
        $this->ajouter_js("page/page.navbar-fixed-shrinked");
        $this->ajouter_js("owl.carousel");
        $this->ajouter_js("jquery-magnific-popup");
        $this->ajouter_js("jquery.waypoints");
        $this->ajouter_js("jquery.countTo");
        $this->ajouter_js("page/theme");
        $this->ajouter_js("page/page.home");
        $this->ajouter_js("style-switcher/style-switcher");
    }

    /**
     * Méthodes pour charger les vues
     */
    public function view($page, $data = array(), $theme=TRUE)
    {
        // 
        if ( ! file_exists(APPPATH.'/views/'.$page.'.php')) {
            show_404();
        }

        $this->var['output'] .= $this->CI->load->view($page, $data, true);
        if ($theme === TRUE) {
            $this->CI->load->view("./themes/".$this->theme, $this->var);
        }

    }

    public function set_theme($theme)
    {
        if (is_string($theme) AND !empty($theme) AND file_exists("./application/themes/".$theme.".php")) {
            $this->theme = $theme;
            return true;
        }
        return false;
    }

    public function set_titre($titre)
    {
        if (is_string($titre) AND !empty($titre)) {
            $this->var['titre'] = ucfirst($titre);
            return true;
        }
        return false;
    }

    // set_flash_message
    public function set_flash_message($statut, $message)
    {
        $this->tabMessage[] = array('statut' => $statut, 'message' => $message);
        $this->CI->session->set_flashdata('tabMessage', $this->tabMessage);
    }

    // get_flash_message
    public function get_flash_message()
    {
        $tabMessage = $this->CI->session->flashdata('tabMessage');
        if (empty($tabMessage) === FALSE) {
            return ($tabMessage);
        } else {
            return (array());
        }
    }

    public function set_charset($charset)
    {
        if (is_string($charset) AND !empty($charset)) {
            $this->var['charset'] = $charset;
            return true;
        }
        return false;
    }

    /**
     * Méthodes pour ajouter des feuilles de CSS et de JavaScript
     */
    public function ajouter_css($nom)
    {
        if (is_string($nom) AND !empty($nom) AND file_exists("./assets/theme_1/css/".$nom.".css")) {
            $this->var['css'][] = css_url($nom);
            return true;
        }
        return false;
    }

    public function ajouter_js($nom)
    {
        if (is_string($nom) AND !empty($nom) AND file_exists("./assets/theme_1/js/".$nom.".js")) {
            $this->var['js'][] = js_url($nom);
            return true;
        }
        return false;
    }
}