<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложения «GearMagic: Управление сайтом» (GM CMS).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'gm.fe.site', // Веб-сайт
        'gm.be.articles', // Материалы сайта
        'gm.be.article_categories', // Категории материала
        'gm.be.mediafiles' // Медиафайлы
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'gm.be.references.articles', // Справочники / Типы материалов
        'gm.be.references.media_types', // Справочники / Типы медиаданных
        'gm.be.references.media_folders', // Справочники / Структура медиапапок
        'gm.be.references.media_dialogs', // Справочники / Медиа диалоги
        'gm.be.references.folder_profiles' // Справочники / Профили папок
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'gm.wd.article', // Материал
        'gm.wd.articles', // Список материалов
        'gm.wd.breadcrumbs', // Навигационная цепочка
        'gm.wd.fine_uploader' // Fine Uploader
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'site' // Сайт
    ]
];
