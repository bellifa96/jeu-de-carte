<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container696rlrh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container696rlrh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container696rlrh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container696rlrh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container696rlrh\App_KernelDevDebugContainer([
    'container.build_hash' => '696rlrh',
    'container.build_id' => '5ad4f1d1',
    'container.build_time' => 1583503973,
], __DIR__.\DIRECTORY_SEPARATOR.'Container696rlrh');
