<?php return array(
    'root' => array(
        'name' => 'yourname/aply-module-php',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'yourname/aply-module-php' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'yourvendor/mypackage' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '33e166aa80122b6966dbc61fcf84b5681caee001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../yourvendor/mypackage',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
