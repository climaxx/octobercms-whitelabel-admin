<?php

namespace BrunomagConcept\WhiteLabel;
use BrunomagConcept\WhiteLabel\Controllers\CSSAndJSCustomOverrides;
use Event;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'WhiteLabel Plugin',
            'description' => 'Admin overrides for custom admin layout and functionality.',
            'author' => 'Brunomag Concept Ltd',
            'icon' => 'icon-leaf'
        ];
    }

    public function boot()
    {

         Event::listen('backend.menu.extendItems', function($manager){
              // admin logo override in the admin + custom CSS/JS
             $overrides = new CSSAndJSCustomOverrides();
         });
         \Backend\Controllers\Auth::extend(function($controller) {
             //same files added for the login form
            $controller->addCss('/plugins/brunomagconcept/whitelabel/assets/css/admin-overrides.css', 'core');
            $controller->addJs('/plugins/brunomagconcept/whitelabel/assets/js/custom-javascript.js', 'core');
        });

    }
}

