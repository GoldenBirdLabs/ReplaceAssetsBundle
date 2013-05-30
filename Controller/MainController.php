<?php

namespace GoldenBirdLabs\ReplaceAssetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
	public function runAction()
	{
		$file = new FilesController();
        $p = new PatternsController();
		$folder = new FoldersController();
        $folder->listDirectory(array('.html.twig'));


		$tt = $file->getTextoTeste();

		var_dump($tt);

        $tt = $this->processImage($p,$tt);
        $tt = $this->processCss($p,$tt);
        $tt = $this->processJs($p,$tt);
    	
    	var_dump($tt);

        // $dir = new DirectoryIterator($path = $this->get('kernel')->getRootDir().DS.'web'.DS);

        




        // foreach (new \RecursiveDirectoryIterator($path) as $fileInfo) {
        //     if($fileInfo->isDot()) continue;
        //     echo $fileInfo->getFilename() . "<br>\n";
        // }

    	echo '<br/>final';
    	exit();

	}

    private function processImage($p,$tt)
    {
        // image
        foreach ($p->image('folder')['find'] as $k => $item) {
            $tt = str_replace($item, $p->image('folder')['replace'][$k], $tt);
        }

        foreach ($p->image('file')['find'] as $k => $item) {
            $tt = str_replace($item, $p->image('file')['replace'][$k], $tt);
        }

        return $tt;
    }

    private function processCss($p,$tt)
    {
        // css
        foreach ($p->css('folder')['find'] as $k => $item) {
            $tt = str_replace($item, $p->css('folder')['replace'][$k], $tt);
        }

        foreach ($p->css('file')['find'] as $k => $item) {
            $tt = str_replace($item, $p->css('file')['replace'][$k], $tt);
        }

        return $tt;
    }

    private function processJs($p,$tt)
    {
        // js
        foreach ($p->js('folder')['find'] as $k => $item) {
            $tt = str_replace($item, $p->js('folder')['replace'][$k], $tt);
        }

        foreach ($p->js('file')['find'] as $k => $item) {
            $tt = str_replace($item, $p->js('file')['replace'][$k], $tt);
        }

        return $tt;
    }

}