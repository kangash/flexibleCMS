<?php 

namespace Content;

class Plugin extends \Engine\Plugin
{

    public function details()
    {
        return [
            'name'        => 'Plugin Demo',
            'description' => 'Demonstration plugin',
            'author'      => 'Kangash Eduard',
            'icon'        => 'icon-leaf'
        ];
    }

    public function init()
    {
        
    }



}