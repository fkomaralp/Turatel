<?php

namespace Fkomaralp\Turatel;

use Fkomaralp\Rest\Client;

class Turatel extends Client
{
    /**
     * @var string Base uri
     */
    protected $baseUri = "https://processor.smsorigin.com/xml/process.aspx";

    /**
     *   Create client
     */
    public function __construct($useSsl = true)
    {
        if(!$useSsl){
            $this->baseUri = "http://processor.smsorigin.com/xml/process.aspx";
        }
    }

    public function __get($name)
    {
        dd("__get");

    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            dd("asd");
            return call_user_func_array(array($this, $name), $arguments);
        }

        return \Exception("method bulunamadı");
    }
}