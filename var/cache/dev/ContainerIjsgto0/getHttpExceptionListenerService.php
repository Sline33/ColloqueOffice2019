<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'http_exception_listener' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener.php';

return $this->services['http_exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener(NULL, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, true, 'UTF-8');
