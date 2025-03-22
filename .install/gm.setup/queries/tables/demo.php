<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM СMS).
 * Редакции «Старт» (GM CMS:STR).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

/** @var bool $isRu Текущая установка в русской локализации*/
$isRu = $installer->isRu();

return [
    // права доступа к информационным панелям
    '{{panel_dashboard_roles}}' => require('demo/panel_dashboard_roles.php'),
];
