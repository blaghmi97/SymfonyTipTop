<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYgY6cL5\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYgY6cL5/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYgY6cL5.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYgY6cL5\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerYgY6cL5\App_KernelProdContainer([
    'container.build_hash' => 'YgY6cL5',
    'container.build_id' => '021c8264',
    'container.build_time' => 1701538683,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYgY6cL5');
