<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN6ixh99\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN6ixh99/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerN6ixh99.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerN6ixh99\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerN6ixh99\appDevDebugProjectContainer(array(
    'container.build_hash' => 'N6ixh99',
    'container.build_id' => 'ae45d202',
    'container.build_time' => 1530648199,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerN6ixh99');
