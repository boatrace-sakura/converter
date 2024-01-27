<?php

return [
    'Converter' => \DI\create('\Boatrace\Sakura\Converter')->constructor(
        \DI\get('MainConverter')
    ),
    'MainConverter' => function ($container) {
        return $container->get('\Boatrace\Sakura\MainConverter');
    },
];
