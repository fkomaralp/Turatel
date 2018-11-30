<?php

use Fkomaralp\Turatel\Client;

class SendSms extends Domain
{

    public function __construct(Client $client)
    {
        parent::__construct($client);

        $this->baseUri = "http://processor.smsorigin.com/xml/process.aspx";
    }

    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        throw new \Exception('Unknown domain ' . $name);
    }
    /**
     * Magic call to lazy load contexts
     *
     * @param string $name Context to return
     * @param mixed[] $arguments Context to return
     * @return mixed The requested context
     * @throws Exception For unknown contexts
     */
    public function __call($name, $arguments) {
        $method = 'context' . ucfirst($name);
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }
        throw new TwilioException('Unknown context ' . $name);
    }
}