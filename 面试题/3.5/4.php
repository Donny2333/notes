<?php


class Curl
{
    public $opt;
    public $data;
    
    function __construct($url)
    {
        $this->opt = [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ];
    }
    
    function exec()
    {
        $ch = curl_init();
        curl_opt_array($ch, $this->opt);
        $this->data = curl_exec($ch);
        curl_close($ch);
        return $this->data;
    }
}

;

class Preg
{
    
    function tagName($data, $tag)
    {
        preg_match('/<' . $tag . '.*>\s*(.*)\s*<\/' . $tag . '>/', $data, $str);
        return $str;
    }
    
    function className($data, $class)
    {
        preg_match('/<(.*)\s*class=.*(' . $class . ').*>\s*(.*)\s*<\/(.*)>/', $data, $str);
        return $str[0];
    }
    
}

$c    = new Curl('http://php.net/manual/en/langref.php');
$data = $c->exec();
$preg = new Preg();
echo $preg->tagName($data, 'li');  
