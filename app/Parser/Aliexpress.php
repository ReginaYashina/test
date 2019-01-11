<?php
namespace App\Parser;

use Symfony\Component\DomCrawler\Crawler;
use Auth;

class Aliexpress implements ParseContract
{
    //use ParseTrait;
    public $crawler;

    public function __construct()
    {
        set_time_limit(0);
        header('Content-Type: text/html; charset=utf-8');
    }

    public function getParse($url = null)
    {
     
        $file = file_get_contents($url);//весь html страницы, которую парсим
        $this->crawler = new Crawler($file);
		$body=$this->crawler->filter('body')->html();
        // $('$body').each(function(){
        //     var pct=$(this).filter('.item')
        // });
        // echo pct;
        echo $body;
    }
}