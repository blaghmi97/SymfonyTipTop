<?php

namespace ContainerYgY6cL5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $container->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($container->services['http_kernel'] ?? $container->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($container->privates['serializer'] ?? $container->load('getSerializerService')), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($container->privates['twig'] ?? $container->load('getTwigService')), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService())), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }
}
