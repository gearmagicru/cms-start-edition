<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложения «GearMagic: Система управления» (GM MS).
 * 
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'gm.be.terms', // Термины
        'gm.be.workspace', // Рабочее пространство
        'gm.be.menu', // Главное меню Панели управления
        'gm.be.dashboard', // Информационная панель
        'gm.be.traybar', // Панель уведомлений
        'gm.be.partitionbar', // Панель разделов
        'gm.be.recovery', // Восстановление доступа к Панели управления
        'gm.be.signin', // Авторизация в Панели управления
        'gm.be.users', // Пользователи
        'gm.be.user_roles', // Роли и права доступа пользователей
        'gm.be.templates', // Шаблоны
        'gm.be.languages', // Языки
        'gm.be.mp', // Маркетплейс
        'gm.be.config', // Конфигурация
        'gm.be.guide', // Справочная информация
        'gm.be.audit_log', // Журнал аудита
        'gm.be.debug_toolbar', // Панель инструментов отладчика
        'gm.be.error_report', // Отчёт об ошибке
        'gm.be.task', // Системные задачи
        'gm.be.references', // Справочники
        'gm.be.filemanager', // Файловый менеджер
        'gm.fe.api', // API
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'gm.be.config.desk', // Конфигурация / Панель Конфигурации
        'gm.be.config.api_routes', // Конфигурация / API Маршрутизация
        'gm.be.config.autorun', // Конфигурация / Автозапуск
        'gm.be.config.cache', // Конфигурация / Кэш
        'gm.be.config.datetime', // Конфигурация / Дата и Время
        'gm.be.config.defense', // Конфигурация / Настройка доступа по IP-адресу
        'gm.be.config.ipblacklist', // Конфигурация / Чёрный список IP-адресов
        'gm.be.config.ipblocklist', // Конфигурация / Список заблокированных IP-адресов
        'gm.be.config.ipwhitelist', // Конфигурация / Белый список IP-адресов
        'gm.be.config.license', // Конфигурация / Лицензия
        'gm.be.config.logger', // Конфигурация / Логирование
        'gm.be.config.mail', // Конфигурация / Почта
        'gm.be.config.services', // Конфигурация / Службы
        'gm.be.config.session', // Конфигурация / Сессия
        'gm.be.config.timezone', // Конфигурация / Региональные настройки
        'gm.be.config.upload', // Конфигурация / Загрузка
        'gm.be.config.url', // Конфигурация / Маршрутизация
        'gm.be.config.version', // Конфигурация / Версия
        'gm.be.config.wspace', // Конфигурация / Рабочее пространство
        'gm.be.config.audit', // Конфигурация / Настройки аудита
        'gm.be.mp.desk', // Маркетплейс / Панель Маркетплейс
        'gm.be.mp.catalog', // Маркетплейс / Каталог Маркетплейс
        'gm.be.mp.mmanager', // Маркетплейс / Менеджер модулей
        'gm.be.mp.emanager', // Маркетплейс / Менеджер расширений модулей
        'gm.be.mp.wmanager', // Маркетплейс / Менеджер виджетов
        'gm.be.mp.pmanager', // Маркетплейс / Менеджер плагинов
        'gm.be.mp.themes', // Маркетплейс / Темы оформления
        'gm.be.references.desk', // Справочники / Панель справочников
        'gm.be.references.elements', // Справочники / Элементы интерфейса
        'gm.be.references.properties', // Справочники / Свойства элементов интерфейса
        'gm.be.config.page', // Конфигурация / Информация о сайте
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'gm.ds.shortcuts', // Модули и Расширения
        'gm.ds.version', // Версия системы
        'gm.ds.license', // Лицензия
        'gm.wd.codemirror', // CodeMirror
        'gm.wd.tinymce', // TinyMCE
        'gm.wd.kcaptcha', // KCaptcha
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'guide', // Справка
        'settings', // Конфигурация
        'users', // Пользователи и права доступа
        'region', // Регион и языки
        'logging', // Логирование и ошибки
        'debug', // Отладка
        'workspace', // Интерфейс
        'system', // Система
        'appearance', // Оформление
        'tools', // Инструменты
        'defense', // Проактивная защита
        'other', // Другое
        'marketplace', // Маркетплейс
    ],
    // информационная панель
    'dashboards' => [
        'desktop'
    ],
    // панель уведомлений
    'traybar' => [
        'audit',
        'debugger',
        'dashboard',
        'exit'
    ],
    // идентфикаторы ролей пользователей
    'roles' => [
        'root'
    ]
];