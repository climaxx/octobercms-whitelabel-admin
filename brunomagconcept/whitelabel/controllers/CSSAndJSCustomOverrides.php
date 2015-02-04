<?php namespace BrunomagConcept\WhiteLabel\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use Cms\Widgets\AssetList;
  
class CSSAndJSCustomOverrides extends Controller
{
   
    /*
     * Outputs the necessary scripts and styles upon initialization
     */
    public function __construct()
    {
        parent::__construct();
        $this->addCustomCSSandJS();
     }
     
     /***
      * Function addCustomCSSandJS
      * Adds needed CSS or JS in order to provide further functionality in the admin interface
      
      */
     public function addCustomCSSandJS(){
        
        $this->addCss('/plugins/brunomagconcept/whitelabel/assets/css/admin-overrides.css', 'core');
        $this->addJs('/plugins/brunomagconcept/whitelabel/assets/js/custom-javascript.js', 'core');
        echo $this->makeAssets();
        
     }
     
    

}
