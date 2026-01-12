<?php return array(
    'root' => array(
        'name' => 'company/plugin-name',
        'pretty_version' => '1.0.0',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'company/plugin-name' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'polyplugins/settings-class-for-wordpress' => array(
            'pretty_version' => '3.1.0',
            'version' => '3.1.0.0',
            'reference' => 'b46a4862258f340e1b69dffd3feceba03b900b7a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../polyplugins/settings-class-for-wordpress',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
