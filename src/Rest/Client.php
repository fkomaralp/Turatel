<?php
namespace Fkomaralp\Turatel\Rest;

class Client
{
    public function sendsms()
    {
        return "asd";
    }

    public function __get($name)
    {
        dd("__get");
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array(array($this, $name), $arguments);
        }

        return \Exception("method bulunamadı");
    }

}