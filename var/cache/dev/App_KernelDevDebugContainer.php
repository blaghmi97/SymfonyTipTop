<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZGH3Bzq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZGH3Bzq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZGH3Bzq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZGH3Bzq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZGH3Bzq\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZGH3Bzq',
<<<<<<< HEAD
    'container.build_id' => '9b55a320',
    'container.build_time' => 1710513805,
=======
    'container.build_id' => '6b789c88',
    'container.build_time' => 1711207080,
>>>>>>> dev
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZGH3Bzq');
