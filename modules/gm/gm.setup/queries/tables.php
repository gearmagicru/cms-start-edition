<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Применяются в качестве ключей при наполнении таблиц (см. queries.php).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

 /** @var string $step Текущий шаг */
$step = $installer->getStepName();
$data = array_merge_recursive(
    // «GearMagic: Система управления» (GM MS)
    require('tables/ms.php'),
    // «GearMagic: Управление сайтом» (GM CMS)
    require('tables/cms.php'),
    // Редакция «Стандарт» (GM CMS:STD)
    require('tables/cms-std.php')
);

// если шаг "Сборка" и применить демонстрационные данные
if ($applyDemo && $step === 'assembly') {
    $data = array_merge_recursive(
        $data,
        // Демонстрационные данные
        require('tables/demo.php')
    );
}
return $data;
