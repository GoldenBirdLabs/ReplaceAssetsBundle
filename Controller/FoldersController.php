<?php

namespace GoldenBirdLabs\ReplaceAssetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
define("DS", DIRECTORY_SEPARATOR);

class FoldersController extends Controller
{
    public function index($select)
    {
        switch ($select) {

        	case 'image':
        		return $this->image();
        		break;

        	case 'css':
        		return $this->css();
        		break;

        	case 'js':
        		return $this->js();
        		break;
        	
        	default:
        		return 'sorry';
        		break;
        }
    }

    private function image()
    {
    	return array('img');
    }

    private function css()
    {
    	return array('css');
    }

    private function js()
    {
    	return array('js');
    }

    public function root()
    {
    	return 'bundles'.DS.'site'.DS;
    }

    public function listDirectory($whitelist)
    {
        
        var_dump($this->get('kernel'));
        // $files = array();
        // $iter = new \RecursiveDirectoryIterator($path);

        // foreach (new \RecursiveIteratorIterator($iter) as $item) {
        //     foreach ($whitelist as $ext) {
        //         if($ext == substr($item, -10))
        //             $files[] = $item;
        //     }
        // }
        // return $files;
    }

}
