<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUynisy1\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUynisy1/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUynisy1.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUynisy1\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUynisy1\appProdProjectContainer([
    'container.build_hash' => 'Uynisy1',
    'container.build_id' => '63df2de1',
    'container.build_time' => 1606736790,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUynisy1');
