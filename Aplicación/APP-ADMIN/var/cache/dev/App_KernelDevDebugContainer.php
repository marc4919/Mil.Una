<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container24eWKRp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container24eWKRp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container24eWKRp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container24eWKRp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container24eWKRp\App_KernelDevDebugContainer([
    'container.build_hash' => '24eWKRp',
    'container.build_id' => '34121e70',
    'container.build_time' => 1645186747,
], __DIR__.\DIRECTORY_SEPARATOR.'Container24eWKRp');
