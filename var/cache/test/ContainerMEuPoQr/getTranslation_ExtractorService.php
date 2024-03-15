<?php

namespace ContainerMEuPoQr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ExtractorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ChainExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'PhpExtractor.php';

        $container->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ($container->privates['translation.extractor.php'] ?? ($container->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor())));
        $instance->addExtractor('twig', ($container->privates['twig.translation.extractor'] ?? $container->load('getTwig_Translation_ExtractorService')));

        return $instance;
    }
}
