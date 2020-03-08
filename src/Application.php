<?php declare(strict_types=1);


namespace Webscythe\Framework;


class Application
{
    /** @var Environment */
    private $environment;

    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    public function run()
    {
        var_dump($this->environment);
    }
}