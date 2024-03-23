<?php

namespace ContainerWrXQA3A;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__PWwUYYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..PWwUYY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..PWwUYY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'game' => ['privates', 'App\\Repository\\GameRepository', 'getGameRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'game' => 'App\\Repository\\GameRepository',
        ]);
    }
}
