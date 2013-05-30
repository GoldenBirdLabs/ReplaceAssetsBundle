<?php

namespace GoldenBirdLabs\ReplaceAssetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilesController extends Controller
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
    	return array('.png','.jpg','jpeg','.gif');
    }

    private function css()
    {
    	return array('.css');
    }

    private function js()
    {
    	return array('.js');
    }

	public function getTextoTeste()
	{
		return '

			<a href="#"><img src="img/slider/web.png" alt="" width="980" height="351" /></a>
          	<a href="#"><img src="img/slider/laptop.png" alt="" width="980" height="351" /></a>
          	<a href="#"><img src="img/slider/mobile.png" alt="" width="980" height="351" /></a>
          	<a href="#"><img src="img/slider/typo.png" alt="" width="980" height="351" /></a>   


          	<link rel="icon" type="image/png" href="favicon.ico">
  			<link rel="apple-touch-icon" href="apple-touch-icon.png">
  			<link rel="stylesheet" href="css/style.css">
  			<script src="js/libs/modernizr-2.5.3.min.js"></script>

		';
	}
}