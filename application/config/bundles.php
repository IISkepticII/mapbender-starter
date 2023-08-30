<?php

return [
    Symfony\Bundle\AclBundle\AclBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],

    // Mapbender Core, must stay enabled
    Mapbender\CoreBundle\MapbenderCoreBundle::class => ['all' => true],
    Mapbender\FrameworkBundle\MapbenderFrameworkBundle::class => ['all' => true],

    // User management bundles
    FOM\CoreBundle\FOMCoreBundle::class => ['all' => true],
    FOM\ManagerBundle\FOMManagerBundle::class => ['all' => true],
    FOM\UserBundle\FOMUserBundle::class => ['all' => true],

    // OWS Proxy
    OwsProxy3\CoreBundle\OwsProxy3CoreBundle::class => ['all' => true],

    // Optional Mapbender bundles
    Mapbender\WmcBundle\MapbenderWmcBundle::class => ['all' => true],
    Mapbender\WmsBundle\MapbenderWmsBundle::class => ['all' => true],
    Mapbender\WmtsBundle\MapbenderWmtsBundle::class => ['all' => true],
    Mapbender\ManagerBundle\MapbenderManagerBundle::class => ['all' => true],
    Mapbender\PrintBundle\MapbenderPrintBundle::class => ['all' => true],
    Mapbender\MobileBundle\MapbenderMobileBundle::class => ['all' => true],

    // Mapbender extensions
    Mapbender\CoordinatesUtilityBundle\MapbenderCoordinatesUtilityBundle::class => ['all' => true],
    //Mapbender\DataManagerBundle\MapbenderDataManagerBundle::class => ['all' => true],
    //Mapbender\DataSourceBundle\MapbenderDataSourceBundle::class => ['all' => true],
    //Mapbender\DigitizerBundle\MapbenderDigitizerBundle::class => ['all' => true],
];
