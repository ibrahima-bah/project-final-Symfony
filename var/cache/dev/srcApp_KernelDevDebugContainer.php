<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC3Vsb2Q\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC3Vsb2Q/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC3Vsb2Q.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC3Vsb2Q\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerC3Vsb2Q\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'C3Vsb2Q',
    'container.build_id' => '3e6aa25b',
    'container.build_time' => 1626177142,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC3Vsb2Q');
