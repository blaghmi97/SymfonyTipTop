<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMEuPoQr\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMEuPoQr/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerMEuPoQr.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerMEuPoQr\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerMEuPoQr\App_KernelTestDebugContainer([
    'container.build_hash' => 'MEuPoQr',
    'container.build_id' => '26463528',
    'container.build_time' => 1710511854,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMEuPoQr');
