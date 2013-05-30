<?php

namespace GoldenBirdLabs\ReplaceAssetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatternsController extends Controller
{

	private $r;
	private $f;

	public function injection()
	{
		$this->fo = new FoldersController();
		$this->fi = new FilesController();
	}

	function __construct()
	{
		$this->injection();
	}
	
    public function image($select)
    {

    	switch ($select) {

        	case 'file':
        		return $this->fileImage();
        		break;

        	case 'folder':
        		return $this->folderImage();
        		break;
        	
        	default:
        		return 'sorry';
        		break;
        }	
    }

    private function folderImage()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fo->index('image');
		foreach ($a as $item) {
			$find[] = "src=\"".$item;
			$replace[] = "src=\"{{ asset('".$this->fo->root().$item;
			$find[] = "href=\"".$item;
			$replace[] = "href=\"{{ asset('".$this->fo->root().$item;
		}
		return array('find' => $find, 'replace' => $replace);
    }

	private function fileImage()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fi->index('image');
		foreach ($a as $item) {
			$find[] = $item.'"';
			$replace[] = $item."') }}\"";
		}
		return array('find' => $find, 'replace' => $replace);
    }

    public function css($select)
    {
    	switch ($select) {

        	case 'file':
        		return $this->fileCss();
        		break;

        	case 'folder':
        		return $this->folderCss();
        		break;
        	
        	default:
        		return 'sorry';
        		break;
        }	
    }

    private function folderCss()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fo->index('css');
		foreach ($a as $item) {
			$find[] = "href=\"".$item;
			$replace[] = "href=\"{{ asset('".$this->fo->root().$item;
		}
		return array('find' => $find, 'replace' => $replace);
    }

	private function fileCss()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fi->index('css');
		foreach ($a as $item) {
			$find[] = $item.'"';
			$replace[] = $item."') }}\"";
		}
		return array('find' => $find, 'replace' => $replace);
    }


    public function js($select)
    {
    	switch ($select) {

        	case 'file':
        		return $this->fileJs();
        		break;

        	case 'folder':
        		return $this->folderJs();
        		break;
        	
        	default:
        		return 'sorry';
        		break;
        }	
    }

    private function folderJs()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fo->index('js');
		foreach ($a as $item) {
			$find[] = "src=\"".$item;
			$replace[] = "src=\"{{ asset('".$this->fo->root().$item;
		}
		return array('find' => $find, 'replace' => $replace);
    }

	private function fileJs()
    {
    	$find = array();
    	$replace = array();	

		$a = $this->fi->index('js');
		foreach ($a as $item) {
			$find[] = $item.'"';
			$replace[] = $item."') }}\"";
		}
		return array('find' => $find, 'replace' => $replace);
    }

}
