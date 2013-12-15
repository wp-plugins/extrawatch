<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Ограничен до�?тъп');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "Стати�?тика");
DEFINE('_EW_MENU_GOALS', "Цели");
DEFINE('_EW_MENU_SETTINGS', "�?а�?тройки");
DEFINE('_EW_MENU_CREDITS', "Благодарно�?ти");
DEFINE('_EW_MENU_FAQ', "Че�?то задавани въпро�?и");
DEFINE('_EW_MENU_DOCUMENTATION', "Документаци�?");
DEFINE('_EW_MENU_LICENSE', "Лиценз");
DEFINE('_EW_MENU_DONATORS', "Дарители");
DEFINE('_EW_MENU_SUPPORT', "Поддържайте ExtraWatch и рекламите н�?ма да �?е показват.");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "По�?ледни по�?етители");
DEFINE('_EW_VISITS_BOTS', "Ботове");
DEFINE('_EW_VISITS_CAME_FROM', "Идва от");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Ваши�?т модул JoomlaWach не е публикуван.За това не �?а запи�?ани никакви �?тати�?тиче�?ки данни. Отидете в раздел модули и да зададете модул ExtraWatch - да �?е публикува във в�?ички �?траници");
DEFINE('_EW_VISITS_PANE_LOADING', "Зареждане...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "Стати�?тика на по�?ещени�?та през �?едмицата");
DEFINE('_EW_STATS_WEEK', "Седмица");
DEFINE('_EW_STATS_THIS_WEEK', "Тази �?едмица");
DEFINE('_EW_STATS_UNIQUE', "Уникални");
DEFINE('_EW_STATS_LOADS', "Зареждани�?");
DEFINE('_EW_STATS_HITS', "Хитове");
DEFINE('_EW_STATS_TODAY', "Дне�?");
DEFINE('_EW_STATS_FOR', "за");
DEFINE('_EW_STATS_ALL_TIME', "За цели�?т период");
DEFINE('_EW_STATS_EXPAND', "Подробно");
DEFINE('_EW_STATS_COLLAPSE', "Съкратено");
DEFINE('_EW_STATS_URI', "Страници");
DEFINE('_EW_STATS_COUNTRY', "Държави");
DEFINE('_EW_STATS_USERS', "Потребители");
DEFINE('_EW_STATS_REFERERS', "Препратки");
DEFINE('_EW_STATS_IP', "IP адре�?и");
DEFINE('_EW_STATS_BROWSER', "Браузер");
DEFINE('_EW_STATS_OS', "ОС");
DEFINE('_EW_STATS_KEYWORDS', "Ключови думи");
DEFINE('_EW_STATS_GOALS', "Цели");
DEFINE('_EW_STATS_TOTAL', "Общо");
DEFINE('_EW_STATS_DAILY', "За определен ден");
DEFINE('_EW_STATS_DAILY_TITLE', "Дневна �?тати�?тика за");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Обща �?тати�?тика");
DEFINE('_EW_STATS_LOADING', "Зареждане...");
DEFINE('_EW_STATS_LOADING_WAIT', "Зареждане... мол�? изчакайте");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "Блокиран IP адре�?");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Въведете ръчно IP адре�?а, който и�?кате да блокирате.");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "�?апишете IP адре�?а, който и�?кате да блокирате. (напр. 217.242.11.54 или 217.* или 217.242.* за блокиране на об�?ега �?лед звездичката)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Превключване на блокирани IP адре�?и");
DEFINE('_EW_STATS_PANE_LOADING', "Зареждам �?тати�?тиката...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "�?а�?тройки");
DEFINE('_EW_SETTINGS_DEFAULT', "Стандартни");
DEFINE('_EW_SETTINGS_SAVE', "Запомни");
DEFINE('_EW_SETTINGS_APPEARANCE', "Външен вид");
DEFINE('_EW_SETTINGS_FRONTEND', "Изглед на �?айта");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "И�?тори�? и изпълнени�?");
DEFINE('_EW_SETTINGS_ADVANCED', "Разширени�?");
DEFINE('_EW_SETTINGS_IGNORE', "Игнориране");
DEFINE('_EW_SETTINGS_BLOCKING', "Блокиране");
DEFINE('_EW_SETTINGS_EXPERT', "Ек�?перт");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "�?аи�?тина ли и�?кате да въз�?тановите в�?ички �?тати�?тиче�?ки данни и по�?етители?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Въз�?танов�?ване на в�?ички данни");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Въз�?танов�?ване на в�?ички �?тати�?тиче�?ки данни &amp; и по�?етители");
DEFINE('_EW_SETTINGS_LANGUAGE', "Език");
DEFINE('_EW_SETTINGS_SAVED', "�?а�?тройките б�?ха �?ъхранени");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Добавете Ваши�? IP адре�?");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "в �?пи�?ъка");

// Other / mostly general.
DEFINE('_EW_TITLE', "AJAX монитор за Joomla");
DEFINE('_EW_BACK', "�?азад");
DEFINE('_EW_ACCESS_DENIED', "�?�?мате права за до�?тъп");
DEFINE('_EW_LICENSE_AGREE', "Съгла�?ен �?ъм �? на�?то�?щите у�?лови�? &amp; и у�?лови�?та по-горе");
DEFINE('_EW_LICENSE_CONTINUE', "Продължи");
DEFINE('_EW_SUCCESS', "Операци�?та приключи у�?пешно");
DEFINE('_EW_RESET_SUCCESS', "В�?ички �?тати�?тиче�?ки данни и данни за по�?етителите б�?х�? изтрити");
DEFINE('_EW_RESET_ERROR', "Данните не б�?ха изтрити, нещо не �?е получи");
DEFINE('_EW_CREDITS_TITLE', "Благодарно�?ти");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Дневни и �?едмични �?тати�?тиче�?ки данни за:");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX до�?тъп отхвърлен: Мол�?, разгледайте �?тати�?тиката на домейна, който �?те по�?очили в configuration.php на Джумла");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Може би про�?то �?те забравили да въведете WWW. преди името на домейна в браузъра. Javascript тър�?и �?ъдържание ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "от");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "това го принуждава да �?и ми�?ли,че това е друг домейн");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Вземете най-нови�? код на това разширение от");
DEFINE('_EW_HEADER_CAST_YOUR', "Изпратете �?во�?");
DEFINE('_EW_HEADER_VOTE', "гла�?");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Кликнете за да отворите tooltip прозореца");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Отидете �? мишката на tooltip за да отворите прозореца");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "Увеличение &apos; от вчера");
DEFINE('_EW_TOOLTIP_HELP', "Отвари онлайн помощ за");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Затвори този прозорец");
DEFINE('_EW_TOOLTIP_PRINT', "Печат");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Добав�?не на нова цел");
DEFINE('_EW_GOALS_UPDATE', "Редактиране на цел номер");
DEFINE('_EW_GOALS_ACTION', "Дей�?твие");
DEFINE('_EW_GOALS_TITLE', "Заглавие на �?ова цел");
DEFINE('_EW_GOALS_NEW', "�?ова цел");
DEFINE('_EW_GOALS_RELOAD', "Обнов�?ване");
DEFINE('_EW_GOALS_ADVANCED', "Разширено");
DEFINE('_EW_GOALS_NAME', "Име");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI �?ъ�?то�?ние");
DEFINE('_EW_GOALS_URI_INVERSED', "URI обратно �?ъ�?то�?ние");
DEFINE('_EW_GOALS_GET_VAR', "GET променлива");
DEFINE('_EW_GOALS_GET_CONDITION', "GET �?ъ�?то�?ние");
DEFINE('_EW_GOALS_POST_VAR', "POST променлива");
DEFINE('_EW_GOALS_POST_CONDITION', "POST �?ъ�?то�?ние");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Заглавие-�?ъ�?то�?ние");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Потребител�?ко име-�?ъ�?то�?ние");
DEFINE('_EW_GOALS_IP_CONDITION', "IP �?ъ�?то�?ние");
DEFINE('_EW_GOALS_IP_INVERSED', "IP обратно �?ъ�?то�?ние");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Идва от �?ъ�?то�?ние");
DEFINE('_EW_GOALS_BLOCK', "Блокирай");
DEFINE('_EW_GOALS_REDIRECT', "Прена�?очи на URL");
DEFINE('_EW_GOALS_HITS', "По�?ещени�?");
DEFINE('_EW_GOALS_ENABLED', "Разрешени");
DEFINE('_EW_GOALS_EDIT', "Редактиране");
DEFINE('_EW_GOALS_DELETE', "Изтриване");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Вие ще загубите в�?ички �?ъще�?твуващи �?тати�?тиче�?ки данни за тази цел. �?аи�?тина ли и�?кате да изтриете в�?ичко?");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Държава");
DEFINE('_EW_FRONTEND_VISITORS', "По�?етители");
DEFINE('_EW_FRONTEND_TODAY', "Дне�?");
DEFINE('_EW_FRONTEND_YESTERDAY', "Вчера");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Тази �?едмица");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Миналата �?едмица");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Този ме�?ец");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Минали�?т ме�?ец");
DEFINE('_EW_FRONTEND_TOTAL', "Общо");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch е в debug режим. По този начин ще могат да �?е определ�?т причините за грешки. За да изключите, мол�?, променете �?тойно�?тта EXTRAWATCH_DEBUG в /components/com_extrawatch/config.php от 1 на 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Мак�?имален брой на редовете на данни �?лед декомпре�?и�? в обла�?тта на �?тати�?тиката");
DEFINE('_EW_DESC_STATS_IP_HITS', "В�?ички IP адре�?и, които имат по-малко хитове от предишните дни, ще бъдат изтрити от и�?тори�?та на IP адре�?и.");
DEFINE('_EW_DESC_STATS_URL_HITS', "В�?ички URL адре�?и, които �?а по-малко хитове от предишните дни, ще бъде заличена от и�?тори�?та URL адре�?и.");
DEFINE('_EW_DESC_IGNORE_IP', "Игнориране на IP адре�? в �?тати�?тиката.В�?еки адре�? отделно на нов ред. Можете да използвате звездичка. <br/>�?апример. 192.* ще игнорира 192.168.51.31, 192.168.16.2, и т.н..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Продължително�?т на поднов�?ване на по�?етителите в леви�? панел, в мили�?екунди, по подразбиране 2000, бъдете внимателни �? тази на�?тройка.За да има ефект, обновете през админи�?траци�?та интерфей�?а в ExtraWatch.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Продължително�?т на поднов�?ване на �?тати�?тиката в де�?ни�? панел в мили�?екунди, �?тандартно 2000, бъдете внимателни �? тази на�?тройка. а да има ефект, обновете през админи�?траци�?та интерфей�?а в ExtraWatch.");
DEFINE('_EW_DESC_MAXID_BOTS', "Колко запи�?а да �?е �?ъхран�?ват в базата данни.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Колко запи�?а на по�?етителите да �?е �?ъхран�?ват в базата данни.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Колко запи�?а да �?е виждат в леви�? панел в админи�?тратор�?ки�? интерфей�?.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Колко по�?етителите да �?е виждат в леви�? панел в админи�?тратор�?ки�? интерфей�?.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Мак�?имум �?имволи, които ще бъдат показани при дълги заглави�? и URI адре�?и");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Мак�?имум �?имволи, които ще да бъдат показани при дълги заглави�? в де�?ни�? �?тати�?тиче�?ки панел");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Брой дни, през които да �?е запази общата и�?тори�? на �?тати�?тиче�?ките данни в базата данни. 0 = безкрайно�?т.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "�?ко �?те в различна ча�?ова зона от �?ървъра ви, на който хо�?твате �?айта �?и.(Въведете положително или отрицателно чи�?ло, като разликата в ча�?ова зона)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Пром�?ната в рамките на �?едмицата, Timestamp/(3600*24*7) връща номера на �?едмицата от 1.1.1970, тази пром�?на е корекци�? на �?едмицата, започваща �? понеделник. При нормални �?лучаи, не е необходимо да �?е промен�?.");
DEFINE('_EW_DESC_DAY_OFFSET', "Пром�?ната в рамките на ден�?, Шimestamp/(3600*24) връща датата на ден�? от 1.1.1970, тази пром�?на е корекци�?, за да започва ден�?т от 00:00. При нормални �?лучаи, не е необходимо да �?е промен�?");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(Функционира в безплатната вер�?и�?)</b> Може да използвате празна икона 1x1px в началната �?траница");
DEFINE('_EW_DESC_IP_STATS', "Използване на IP адре�? в �?тати�?тиката. В н�?кои �?трани, IP адре�?а �?е �?чита за лични данни. Използвайте на �?вой �?об�?твен ри�?к.");
DEFINE('_EW_DESC_HIDE_ADS', "Тази на�?тройка �?крива рекламите, ако те наи�?тина ви дразн�?т.С поддържането им, Вие подкреп�?те по-нататъшното развитие на този ин�?трумент. Благодар�?.");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "�?ко и�?кате да �?е покажат непроверените в отделен прозорец карти и �?хеми, по�?тавете кур�?ора върху иконите, вме�?то да кликнете.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "По подразбиране тази на�?тройка е 'REDIRECT_URL', ако използвате url rewriting, можете да промените на 'SCRIPT_URL' ако във вашата �?тати�?тика �?е показва �?амо index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Съобщение, което показва допълнителна информаци�? по н�?какъв повод, защо �?а тези потребители блокирани.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Ширина на прозореца в tooltip");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Ви�?очина на прозореца в tooltip");
DEFINE('_EW_DESC_TOOLTIP_URL', "Тук можете да напишете в�?�?какъв адре�? за визуализиране на по�?етител�?ки�? IP адре�?.{ip} ще бъде заменен от реални�?т IP адре�?а на потребител�?. �?апример: http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "Можете да въведете в�?�?какъв URI, които и�?кате да бъде игнориран от �?тати�?тика. Можете да използвате заме�?тващи �?имволи (* и ?) тук. �?апр. : /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "Задайте името на целта. Това име ще видите в �?тати�?тиката.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Това, което �?е намира непо�?ред�?твено �?лед адре�?а на ваши�? домейн. За http://www.codegravity.com/projects/ е URI: /projects/ (Пример: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET променлива е обикновено това, което виждате в URL обикновено �?лед  знака ? или & amp; например: http://www.codegravity.com/index.php?<u>име</u>u=peter&amp;<u>фамили�?</u>=smith.Можете �?ъщо да използвате <u>*</u> в това поле, за в�?ички GET променливи.(Пример: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Тук можете да определите на какво да �?е равни променливата в предишното поле.(Пример: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "�?ещо подобно, но �?пазвайте �?тойно�?тите, впи�?ани във формул�?ра. Така, че ако имате на уеб�?айта �?и формул�?р, който има поле за въвеждане &lt;input type='text' name='<u>реги�?траци�?</u>' /&gt;. (Пример: <b>expert*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Стойно�?т, ко�?то е равна на променливата в предходното POST поле. �?апр. И�?каме да видим дали потребител�?т е направил опит за въвеждане в полето �?тойно�?т на Java.(Пример: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Заглавие на �?траница, ко�?то да �?ъответ�?тва. (Пример: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Име на влезли�?т потребител, за когото целта �?е прилага. (Пример: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP адре�?, от който идва по�?етител�?т. (Пример: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL, от който идва по�?етител�?т. (Пример: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "�?ко тези у�?лови�? �?а изпълнени, можете да прена�?очите потребител�?  към адре�? по Ваш избор. Има по-ви�?ок приоритет, отколкото 'блокиран': (Пример: <b>http://www.codegravity.com/chod-prec.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Колко �?имвола мак�?имум да �?е показват в таблицата за дълги имена");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Препратката до codegravity.com, можете да промените тази на�?тройка, но оцен�?ваме, ако т�? о�?тане.Благодар�?");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Преглед на общата �?тати�?тика в модула на �?айта. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "�?ко и�?кате  да пренаредите реда на По�?етители/Държави в модула на �?траницата. Махнете го, �?тати�?тиката на По�?етителите ще �?е покаже на първо м�?�?то,а �?лед това Държави.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Брой на държавите, които желаете да �?е показват в модула на �?айта");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Преглед на държавите в модула на �?айта. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Време в �?екунди колко че�?то да �?е актуализират �?тати�?тиче�?ките данни на държавите в модула на �?айта");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Време в �?екунди колко че�?то да �?е актуализира �?тати�?тиката за по�?етителите в модула на �?айта");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Преглед на по�?етителите на �?айта за: Дне�?. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Преглед на по�?етителите на �?айта за: Вчера. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Преглед на по�?етителите на �?айта за: Тази �?едмица. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Преглед на по�?етителите на �?айта за: Миналата �?едмица. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Преглед на по�?етителите на �?айта за: Този ме�?ец. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Преглед на по�?етителите на �?айта за: Минали�?т ме�?ец. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Преглед на по�?етителите на �?айта Общо �?лед ин�?талаци�?та на ExtraWatch. �?ко промените на�?тройките, тр�?бва да изчакате да изтече времето в CACHE_FRONTEND_  за да на�?тъп�?т промените.");
DEFINE('_EW_DESC_LANGUAGE', "Езиков файл, който ще използвате. Езиковите файлове �?е намират в /components/com_extrawatch/lang/. За да добавите нов език, първо �?е уверете, че той вече не е на �?траниците на този проект. �?ко там го н�?ма, копирайте english.php и го преименувайте на mojjazyk.php например и го по�?тавете на по-горни�? адре�?. Преведете в�?ички изрази в д�?�?но. �?ай-добре е да използвате кодировка UTF-8");
DEFINE('_EW_DESC_GOALS', "Целите Ви позвол�?ват да �?е определ�?т �?пециални параметри. �?ко �? тези параметри �?те �?ъгла�?ни, производително�?тта на бро�?ча �?е увеличава. По този начин можете да наблюдавате дали един по�?етител е по�?ещавал �?пецифични URL, дали е изпратил конкретна �?тойно�?т във формул�?ра, има �?пецифично име или идва от н�?кой адре�?. Можете да блокирате такъв по�?етител или да го прена�?очете към �?пециален URL адре�?.");
DEFINE('_EW_DESC_GOALS_INSERT', "Във в�?ички полета о�?вен имена може да използвате �?имволите * и ?. �?апример: ?ear (комбинира: near, tear, ..),  p*r (комбинира: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "�?а�?троите на 1, ако и�?кате да блокирате даден по�?етител, който отговар�? на критериите. �?�?ма да виждате о�?таналата ча�?т от �?ъдържанието на �?айта, �?амо �?ъобщение за неговото блокиране - без прена�?очване, и негови�? IP адре�? ще бъде добавен към �?пи�?ъка на блокираните в �?тати�?тиката. (Пример: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Изи�?квани�? на дадената държава");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "Държави обратно �?ъ�?то�?ние");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Двубуквени�?т код на дадена държава (�?апр.: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "Вътрешен");
DEFINE('_EW_STATS_FROM', "От");
DEFINE('_EW_STATS_TO', "До");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Добави цел");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Добави цел за тази държава");
DEFINE('_EW_MENU_REPORT_BUG', "�?апиши за грешки или дай предложение");
DEFINE('_EW_GOALS_COUNTRY', "Държава");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "�?ко и�?кате имената на държавите да �?а изпи�?ани �? главни букви на �?айта (�?апр.: GERMANY, UNITED KINGDOM вме�?то Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Време в �?екунди колко че�?то да �?е актуализират �?тати�?тиче�?ките данни на потребителите в �?айта");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Първоначална �?тойно�?т 'Общо:' на �?айта. Полезно, ако �?те преминали от друг �?тати�?тиче�?ки ин�?трумент. (�?апр. 20000). �?ко не и�?кате да използвате тази функци�? попълнете 0.");
DEFINE('_EW_DESC_IGNORE_USER', "Игнорирай потребителите от този textbox. Потребител�?ко име он-лайн. (�?апр.: myself {нов ред} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "�?ай-активните потребители към днешна дата от общи�?т брой");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Включва блокиране на изброените �?пам думи, показани по-долу?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "�?ай-използваните �?пам думи, използвани в �?пам ботове. Можете да използвате * и ?. (�?апр.: ph?rmac*).�?ко в на�?тройките по-горе е разрешено, ExtraWatch ще провери дали атакуващи�? изпратен формул�?р ( HTTP POST за�?вка) към �?айта Ви �?ъвпада �? една от тези думи. (Прилага �?е �?амо за �?айт под Joomla – форуми, коментари, това е до�?та ефективен начин за премахване на �?пам ботове, които �?е опитват да изпращат в�?�?какви възможни формул�?ри.");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "�?нти-Спам");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Линка, намиращ �?е в лицеви�? потребител�?ки модул, който Ви позвол�?ва да по�?очите �?пецифичен URL,който е отворен, когато потребител�?т кликне върху потребител�?кото �?и име. Тр�?бва да �?ъдържа низа {user}, който ще бъде заменен �? и�?тин�?кото име на потребител�?. (�?апр. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Ключови фрази");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Мак�?имални �?тойно�?ти в раздела И�?тори�?(Example: <i>100</i>)");
DEFINE('_EW_DESC_ONLY_LAST_URI', "В по�?ещени�?та показвай �?амо по�?ледната по�?етена �?траница, не в�?ички");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "В по�?ещени�?та �?крий повтар�?щи �?е заглави�? на по�?етени вече �?траници");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Мак�?имален брой на по�?етителите, които да �?е запаз�?т в базата данни - И�?тори�? на по�?ещени�?та. Бъдете внимателни �? тази на�?тройка, ако имате гол�?м трафик, може да ра�?те много по-бързо. Винаги провер�?вайте �?тату�?а колко данни �?е �?ъдържат в таблицата за И�?тори�?та .");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Включете таблиците в базата данни за деин�?талиране. Изберете тази опци�?, преди да деин�?талирате, ако правите ъпгрейд и и�?кате да запазите данните �?и.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Ще получите в�?�?ка вечер имейли �? отчети за предходни�? ден, които можете да прочетете на �?утринта");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Имейл  адре�?а, на който ще получите тези отчети");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Доклади �?амо за включените редове в електронната поща, когато този процент е по-ви�?ока от {value}. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Включва �?амо <b> за един ден </b> положителна пром�?на на �?тойно�?тта в имейла за отчитане на по-ви�?ок  {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Включва �?амо <b> за един ден </b> отрицателна пром�?на на �?тойно�?тта в имейла за отчитане на по-ни�?ък {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Включва �?амо <b> за �?едем дни </b> положителна пром�?на на �?тойно�?тта в имейла за отчитане на по-ви�?ок  {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Включва �?амо <b> за �?едем дни </b> отрицателна пром�?на на �?тойно�?тта в имейла за отчитане на по-ни�?ък {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Включва �?амо <b> за триде�?ет дни </b> положителна пром�?на на �?тойно�?тта в имейла за отчитане на по-ви�?ок  {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Включва �?амо <b> за триде�?ет дни </b> отрицателна пром�?на на �?тойно�?тта в имейла за отчитане на по-ни�?ък {value} процент. Задайте 0, ако не и�?кате да ползвате тази функци�? <i>(example: -13)</i>");
DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(Функционира в PRO вер�?и�?)</b> �?ктивирайте тази на�?тройка, ако и�?кате да направите връзката �? логото чрез атрибута rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Мак�?имален брой знаци на ред за име на имейла. Променете бро�?, ако Ваши�? имейл прозорец за �?ъобщени�? е твърде малък");

/* email reports - sergej*/
DEFINE('_EW_EMAIL_REPORTS_ENABLED', "Отчет имейли");
DEFINE('_EW_EMAIL_REPORTS_ADDRESS', "Имейл адре�?");
DEFINE('_EW_EMAIL_NAME_TRUNCATE', "Мак�?имален размер за име на имейла");
DEFINE('_EW_EMAIL_PERCENT_HIGHER_THAN', "Доклади за включените редове");
DEFINE('_EW_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Включи �?амо за един ден положителната пром�?на");
DEFINE('_EW_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Включи �?амо за един ден отрицателна пром�?на");
DEFINE('_EW_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Включи �?амо за �?едем дни положителна пром�?на");
DEFINE('_EW_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Включи �?амо за �?едем дни отрицателна пром�?на");
DEFINE('_EW_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Включи �?амо за триде�?ет дни положителна пром�?на");
DEFINE('_EW_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Включи �?амо за триде�?ет дни отрицателна пром�?на");
/* email reports - sergej*/

DEFINE('_EW_MENU_HISTORY', "И�?тори�?");
DEFINE('_EW_MENU_EMAILS', "Имейли");
DEFINE('_EW_MENU_STATUS', "Стату�?");
DEFINE('_EW_DESC_BLOCKED', "Тези IP адре�?и �?а били блокирани от анти-�?пам");
DEFINE('_EW_HISTORY_VISITORS', "И�?тори�? за по�?етителите");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Показани �?а �?амо %d от по�?ледните запи�?и.
                За да промените тази �?тойно�?ти, отидете в �?а�?тройки -&gt; И�?тори�? &amp; Изпълнение -&gt; HISTORY_MAX_DB_RECORDS. Бъдете внимателни, тази на�?тройка вли�?е върху времето за зареждане на данните по-долу.");
DEFINE('_EW_MENU_BUG', "Докладвай за грешки");
DEFINE('_EW_MENU_FEATURE', "И�?кане за елемент");
DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Ключови думи");
DEFINE('_EW_BLOCKING_UNBLOCK', "Деблокиране");
DEFINE('_EW_STATS_KEYPHRASE ', "Ключовата дума");
DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "Име на таблицата");
DEFINE('_EW_STATUS_DATABASE_ROWS', "Редове");
DEFINE('_EW_STATUS_DATABASE_DATA', "Данни");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "Общо");
DEFINE('_EW_EMAIL_REPORTS', "Имейл доклади");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Генериран доклад за филтрирани имейли от вчера");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Имейл �?тойно�?т на филтрите");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "Стойно�?т");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "Процент");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-дневна пром�?на");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-дневна пром�?на");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-дневна пром�?на");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch е блокирал %d �?памър попадени�? дне�?, общо: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Блокирани IP адре�?и");
DEFINE('_EW_ANTISPAM_SETTINGS', "�?нти-�?пам на�?тройки");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX трафик на актуализациите");
DEFINE('_EW_HISTORY_PREVIOUS', "Предишна");
DEFINE('_EW_HISTORY_NEXT', "Следваща");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Брой колони на държавите");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Брой редове на държавите");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Показване името на държавата или не");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Покажи знамената, а �?лед това процента");

/* ExtraWatch 1.2.14 translations */
DEFINE('_EW_GOALS_GET_INVERSED', "GET инвер�?но �?ъ�?то�?ние");
DEFINE('_EW_GOALS_POST_INVERSED', "POST инвер�?но �?ъ�?то�?ние");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Заглавие-обратно �?ъ�?то�?ние");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Потребител�?ко име обратно �?ъ�?то�?ние");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Идва от обратно �?ъ�?то�?ние");
DEFINE('_EW_STATS_MAP', "Карта на по�?ледното по�?ещение");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Мол�?, въведете <a href='http://www.ipinfodb.com/register.php' target='_blank'> ipinfodb.com </A> за да �?е по�?ви по�?ледното по�?ещение и карта:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "Ключ");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Мол�?, въведете валиден ключ, получен от: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "Грешно и�?кане:");
DEFINE('_EW_VISIT_SUBMITED_FIELDS', " Изпратени обла�?ти във формата:");
DEFINE('_EW_VISIT_URL_PARAMETERS', " URL параметри:");
DEFINE('_EW_VISIT_ADD_PAGE', " Добави �?траница като цел");
DEFINE('_EW_VISIT_BLOCK_IP', " Блокиране на този IP адре�?");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Добавете тази изпратена форма на променливата като цел");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', "Добави този URL параметър като цел");
DEFINE('_EW_TREND_EMPTY', "Празен");
DEFINE('_EW_NOT_NUMBER', " В�?ИМ�?�?ИЕ: Въведената �?тойно�?т не е чи�?ло. ExtraWatch н�?ма да работи нормално!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Това е 15-дневна пробна вер�?и�?. Дни в л�?во: <b>%d</b>. Мол�?, закупете през този период от <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch лиценз за Ваши�? домейн</a> за тази и пред�?то�?щите вер�?ии.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Вашата пробна вер�?и�? е изтекла. Мол�? закупете лиценз за ExtraWatch");
DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Лиценза е активиран у�?пешно. Благодар�? Ви!");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Грешка: лицензни�? ключ и домейна Ви не �?ъвпадат.</b><br/>Въвели ли �?те едно и �?ъщо име на домейна във формата, ко�?то виждате по-долу? Мол�? �?вържете �?е �? : support@codegravity.com");
DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "�?ко виждате �?ъобщението по-горе, като прекалено дълго, Ваши�? �?айт може да бъде грешен.
                    Отворете /com_extrawatch/config.php
                    и напишете адре�?а на �?айта Ви, напр.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");
DEFINE('_EW_ADMINBODY_LIVE_SITE', "Забележка: �?айта в браузъра и �?айта в конфигураци�?та: %s и %s не �?ъвпадат.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Задайте �?айта, за да: %s и продължете...");
DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Премахване на Backlink");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "База знани�?");
DEFINE('_EW_ADMINHEADER_FLOW', "Поток");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Графики");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Компоненти");
DEFINE('_EW_ADMINHEADER_REVIEW', "Преглед");
DEFINE('_EW_ADMINHEADER_WRITE', "Добави");
DEFINE('_EW_FLOW_TRAFFIC', "Поток на трафика ");
DEFINE('_EW_FLOW_SELECT_PAGE', "Изберете �?траница:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Root изход�?щи бро�? връзки:");
DEFINE('_EW_FLOW_NESTING', "�?иво:");
DEFINE('_EW_FLOW_SCALE', "Скала:");
DEFINE('_EW_COMERCIAL_AD_FREE', "Безплатна вер�?и�?");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Благодар�? Ви много за дарението!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Реги�?трационни�?т ключ за Ваши�? домейн %s е: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Сега можете да премахнете или �?криете ExtraWatch логото в интерфей�?а от на�?тройките");
DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Компонент");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Общо:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Размер");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Обнови в�?ичко");
DEFINE('_EW_SIZEDATABASE_TABLE', "Таблица");
DEFINE('_EW_SIZEDATABASE_SIZE', "Размер");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-дневна пром�?на");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-дневна пром�?на");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-дневна пром�?на");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "�?�?ма данни");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Общо:");
DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Обнови в�?ичко");
DEFINE('_EW_SIZEMODULES_TOTAL', "Общо:");
DEFINE('_EW_SIZEMODULES_MODULE', "Модул");
DEFINE('_EW_SIZEMODULES_SIZE', "Размер");
DEFINE('_EW_SIZES_FILES', "Файлове &amp; Директории");
DEFINE('_EW_SIZES_BYTES', "Байта");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Обнови");
DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");
DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_DESC_IPINFODB_KEY', "Карта на по�?ледното по�?ещение от: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Сила по ча�?ови зони");

/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "�?ктуализаци�?");
DEFINE('_EW_MENU_UPDATE_TITLE', "Резервно копие & �?ктуализаци�?");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "�?е �?е предлага в безплатната вер�?и�?, мол�? проверете раздела за лиценза");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Включи Спам думи");
DEFINE('_EW_SPAMWORD_LIST', "Спи�?ък �?ъ�? Спам думи");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Скриване на повтар�?щи �?е заглави�?");
DEFINE('_EW_TRUNCATE_VISITS', "Ограничаване на по�?ещени�?та");
DEFINE('_EW_TRUNCATE_STATS', "Ограничаване на �?тати�?тиката");
DEFINE('_EW_TRUNCATE_GOALS', "Ограничаване на целите");
DEFINE('_EW_LIMIT_BOTS', "Лимит на ботовете");
DEFINE('_EW_LIMIT_VISITORS', "Лимит на по�?етителите");
DEFINE('_EW_TOOLTIP_WIDTH', "Ширина на Tooltip");
DEFINE('_EW_TOOLTIP_HEIGHT', "Ви�?очина Tooltip");
DEFINE('_EW_TOOLTIP_URL', "URL на Tooltip");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip OnClick");
DEFINE('_EW_IP_STATS', "IP �?тати�?тика");
DEFINE('_EW_IPINFODB_KEY', "IP информаци�? за DB ключ");
DEFINE('_EW_ONLY_LAST_URI', "Само по�?леден URI");
DEFINE('_EW_FRONTEND_HIDE_LOGO', "Скрий логото");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Връзката �? логото");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Препратка");
DEFINE('_EW_FRONTEND_USER_LINK', "Потребител�?ки връзки");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Първо държавите");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Имената на държавите");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Имената на държавите �? главни букви");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Първо знамената на държавите");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Брой на държавите");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Брой колони");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Брой редове");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "По�?етители дне�?");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "По�?етители вчера");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "По�?етители през тази �?едмица");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "По�?етители през по�?ледната �?едмица");
DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "По�?етители през този ме�?ец");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "По�?етители през по�?ледни�? ме�?ец");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Скрий Общо по�?етители");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Общо първоначално");
DEFINE('_EW_HISTORY_MAX_VALUES', "Мак�?имални �?тойно�?ти");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Мак�?имален брой запи�?и");
DEFINE('_EW_UPDATE_TIME_VISITS', "�?ктуализаци�? на по�?ещени�?та");
DEFINE('_EW_UPDATE_TIME_STATS', "�?ктуализаци�? на �?тати�?тиката");
DEFINE('_EW_STATS_MAX_ROWS', "Мак�?имален брой редове");
DEFINE('_EW_STATS_IP_HITS', "Мак�?имален брой IP хитове");
DEFINE('_EW_MAXID_BOTS', "Мак�?имален брой запи�?и");
DEFINE('_EW_MAXID_VISITORS', "Мак�?имален брой по�?етители");
DEFINE('_EW_STATS_KEEP_DAYS', "Мак�?имален брой дни за �?ъхранение");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Кеш държави");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Кеш по�?етители");
DEFINE('_EW_CACHE_FRONTEND_USERS', "Кеш потребителите");
/* sergej */
DEFINE('_EW_LANGUAGE', "�?ктивен език");
DEFINE('_EW_UNINSTALL_KEEP_DATA', "Деин�?талиране на запазените данни");
/* sergej*/
DEFINE('_EW_IGNORE_IP', "Игнориране на IP");
DEFINE('_EW_IGNORE_URI', "Игнориране на URI");
DEFINE('_EW_IGNORE_USER', "Игнориране на Потребител");
DEFINE('_EW_BLOCKING_MESSAGE', "Блокиране на Съобщение");
DEFINE('_EW_SERVER_URI_KEY', "Сървър URI ключ");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Първоначален брой по�?етители");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Запи�?и");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " За да �?е блокира ефективно, тр�?бва да публикувате ExtraWatch agent преди в�?�?какво �?ъдържание или форми. �?апр. на л�?вата �?трана във Ваши�? шаблон.
                    <br/>
                   Отиди в Модул мениджъра -> ExtraWatch agent -> изберете позици�? като л�?во");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO доклади");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO имейл доклади в�?�?ка вечер");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Вижте Демо ин�?талаци�?");
/* sergej */
DEFINE('_EW_EMAIL_SEO_REPORTS_ENABLED', "Включи SEO доклади");

/** JW 1.2.18 */
DEFINE('_EW_ADMINHEADER_HEATMAP', "Heatmap");
DEFINE('_EW_HEATMAP_CLICKS', "clicks");
DEFINE('_EW_HEATMAP_TITLE', "title");
DEFINE('_EW_HEATMAP_CLICK_OPEN', "Click to open heatmap");
DEFINE('_EW_NO_DATA', "This section contains no data yet ...");
DEFINE('_EW_POSITION', "Search result num.");
DEFINE('_EW_BLOCKING_REASON', 'reason');
DEFINE('_EW_BLOCKING_UNAUTHORIZED_ACCESS', 'Unauthorized Access');
DEFINE('_EW_BLOCKING_BLOCKED_MANUALLY', 'Blocked manually');
DEFINE('_EW_BLOCKING_BAD_WORD', "bad word");
DEFINE('_EW_HEATMAP_OF', "of");
DEFINE('_EW_URI', "uri");
DEFINE('_EW_COUNT', "count");
DEFINE('_EW_SEO_REPORT_FOR', "SEO report for");
DEFINE('_EW_SEO_MOST_DYNAMIC_KEYPHRASES', "Most dynamic keyphrases");
DEFINE('_EW_SEO_MIN_POSITION', "min position");
DEFINE('_EW_SEO_AVG_POSITION', "average position");
DEFINE('_EW_SEO_MAX_POSITION', "max position");
DEFINE('_EW_SEO_CHANGE', "change");
DEFINE('_EW_SEO_DATE_OF_LAST_CHANGE', "date of last change");
DEFINE('_EW_SEO_TOTAL_VISITS_FROM_SEARCH_ENGINES', "Total visits by keyphrase from search engines");
DEFINE('_EW_GOAL_ADD_SUBMITTED_VALUE', "Add submitted variable as goal");
DEFINE('_EW_RENDERED_IN', "Rendered in");
DEFINE('_EW_DESC_SEO_RENDER_ONLY_CHANGED', "Render only values which were already used in previous days (have some percentage in change column)");
DEFINE('_EW_SEO_REPORT_SETTINGS', "SEO Report Settings");


DEFINE('_EW_HTTP500_ERROR', "Could not initialize ExtraWatch javascript functions! Browser could not load: \\n%s, because it returned HTTP 500 internal server error.  \\nThis usually of security restrictions by other components/plugins. Please check your .htaccess file in your root Joomla directory.  \\nIf you use Akeeba Admin tools, you need to go \ 'Akeeba htaccess maker\ ' -> \ 'Server Protection\ ' -> \ 'Exceptions\ ' -> \ 'Allow direct access to these files\ ', and add: \\n/components/com_joomlawatch/block.php \\n/components/com_joomlawatch/img.php \\n/components/com_joomlawatch/last.php \\n/components/com_joomlawatch/lastvisit.php \\n/components/com_joomlawatch/sizequery.php \\n/components/com_joomlawatch/sizequerytotal.php \\n/components/com_joomlawatch/stats.php \\n/components/com_joomlawatch/timezone.php \\n/components/com_joomlawatch/tooltip.php \\n/components/com_joomlawatch/trendtooltip.php \\n/components/com_joomlawatch/vars.php \\n/components/com_joomlawatch/visits.php \\n/components/com_joomlawatch/js/joomlawatch.js.php \\n/components/com_joomlawatch/js/maps.js.php ");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_JOOMLA',"Warning: No visits are currently being recorded. Your ExtraWatch Agent module is published, but most probably in position which does not exist in your template.
                <br/><br/>
                To fix this: <br/>
                1. go to Modules section -&gt; ExtraWatch Agent <br/>
                2. change the Position to 'left' or 'footer' (or some other position).<br/>
                3. check if new visits are being recorded
                <br/><br/>
                If this won't help, you can also: <br/>
                1. set 'Show Title' to 'Yes' in  Modules section -&gt; ExtraWatch Agent <br/>
                2. try to use some other positions of ExtraWatch agent module<br/>
                3. save<br/>
                4. after reload of your main page look for 'ExtraWatch Agent' text.<br/>
                5. this way you'll make sure the Agent module is published.<br/>
                6. after that you can set 'Show Title' back to 'No'.
                ");

/** Goals/Import IP */
DEFINE('_EW_GOALS', "Goals");
DEFINE('_EW_GOALS_IMPORT', "Import goals");
DEFINE('_EW_GOALS_IMPORT_XML', "Import XML");
DEFINE('_EW_GOALS_EXPORT', "Export goals");
DEFINE('_EW_GOALS_FILENAME', "Select goals previously exported as XML");
DEFINE('_EW_ANTISPAM_IMPORT_CSV', "import anti-spam ip csv");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_WORDPRESS',"Warning: No visits are being recorded. You must go to Appearance->Widgets section, <br/>find ExtraWatchAgent widget and drag&drop it to some of the containers on the right side. <br/>You can publish also other ExtraWatch modules this way. <br/><br/>Check the demonstration video:<br/><br/><iframe id='video-player' width='800' height='468' src='http://www.youtube.com/embed/uu_luBKJ8jI?enablejsapi=1&autoplay=1&rel=0&modestbranding=1&showinfo=0&showsearch=0&vq=hd1080' frameborder='0' allowfullscreen></iframe><br/><br/>In case of any questions about installation or problems, you can take advantage of our support on <a href='http://www.extrawatch.com' target='_blank'>http://www.extrawatch.com</a>");

/** 2.1 */
DEFINE('_EW_MENU_DOWNLOADS', "Downloads");
DEFINE('_EW_DOWNLOADS_FILE_NOT_FOUND', "FILE NOT FOUND");
DEFINE('_EW_DOWNLOADS_HTACCESS_NOT_WRITABLE', "Your .htaccess is not Writable.");
DEFINE('_EW_DOWNLOADS_HTACCESS_COULD_NOT_BE_CREATED', ".htaccess could not be created, Please create your own.");
DEFINE('_EW_DOWNLOADS_ADD_EXTENSION', "Add Extension");
DEFINE('_EW_DOWNLOADS_EXTENSION_NAME', "Extension Name");
DEFINE('_EW_DOWNLOADS_WARNING', "<b>Warning:</b> always backup your .htaccess file before adding new extension or path! Do not add 'php' as monitored extension. <br/>Be also careful with adding png/jpg, the download count will be increased once someone opens your page which contains images with this extension.");
DEFINE('_EW_DOWNLOADS_ADD_FILE_PATH', "Add File/Path");
DEFINE('_EW_DOWNLOADS_FILE_PATH_NAME', "File/Path Name");
DEFINE('_EW_DOWNLOADS_DOWNLOAD_MONITOR', "Download Monitor");
DEFINE('_EW_DOWNLOADS_EXTENSIONS_BEING_MONITORED', "Extensions Being Monitored");
DEFINE('_EW_DOWNLOADS_FILES_PATHS_BEING_MONITORED', "Files/Paths Being Monitored");
DEFINE('_EW_DOWNLOADS_EDIT_EXTENSION', "Edit Extension");
DEFINE('_EW_DOWNLOADS_EDIT_FILE_PATH', "Edit File/Path");
DEFINE('_EW_DOWNLOADS_EXTENSION', "Extension");
DEFINE('_EW_DOWNLOADS_ACTION', "Action");
DEFINE('_EW_DOWNLOADS_PATH', "Path");
DEFINE('_EW_DOWNLOADS_TODAY', "Today");
DEFINE('_EW_DOWNLOADS_YESTERDAY', "Yesterday");
DEFINE('_EW_DOWNLOADS_THIS_WEEK', "This Week");
DEFINE('_EW_DOWNLOADS_LAST_WEEK', "Last Week");
DEFINE('_EW_DOWNLOADS_THIS_MONTH', "This Month");
DEFINE('_EW_DOWNLOADS_LAST_MONTH', "Last Month");
DEFINE('_EW_DOWNLOADS_INCOMPLETE', "The required Information is incomplete");

DEFINE('_EW_STATS_SOCIAL_MEDIA', "Media");
DEFINE('_EW_MENU_AVAILABLE_IN_PRO',"Available in PRO version");
DEFINE('_EW_DOWNLOADS_TOTAL',"Total Downloads");


/** 3.0 - hosted version */
DEFINE('_EW_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");
DEFINE('_EW_DESC_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");


DEFINE('_EW_STATS_DEVICES', "Mobile Devices");

DEFINE('_EW_BLOCKED_BASED_ON_GOAL',"Blocked based on goal no. %s");


DEFINE('_EW_TIME_BETWEEN_VISITS',"Total time spent");
DEFINE('_EW_LEFT_WEBSITE',"Left website");
DEFINE('_EW_MENU_USERS',"Users");
DEFINE('_EW_USERS_BLOCK_IP_CONFIRM',"Do you really want to block this IP address?");
DEFINE('_EW_USERS_SHARING_HEADER',"Users sharing same login");
DEFINE('_EW_USERS_SHARING_DESC',"Contains users who accessed the website from different IP addresses and/or from different country but with same login. This might be a warning for you, that they're sharing their account with someone else.");
DEFINE('_EW_USERS_ACTIVITY_HEADER',"Latest user activity");
define('_EW_DESC_SEO_LIST_ENCRYPTED_KEYWORDS', "Google hides passing particular keywords from google search to websites. This will reveal the keyword's position,<br/> but not the keyword itself. Enable this option if you want to see also position of these encrypted keywords in stats.");

DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES',"Most popular keyphrases");
DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES_DESC',"These are the keyphrases by which was your website found. You can copy this list and use it with some 3rd party service, which will give you an overview of SERP (Search Engine Rank Position). You can then optimize your website using SEO techniques,	and watch the increase of traffic in right upper side of main dashboard - displayed as a cyan bar");

DEFINE('_EW_USERS_ALERT_EMAIL_SUBJECT',"Alert - user '%s' uses different IP address: '%s'");
DEFINE('_EW_USERS_ALERT_EMAIL_CONTENT',"You can block this user from ExtraWatch Users section");
DEFINE('_EW_MAX_RECORDS',"Displaying max. %d records");

DEFINE('_EW_DESC_USERS_SEND_ALERT_EMAILS',"If checked, you'll get an email once user uses different IP. This can help you to detect immediately, which user shares his login with someone else. Useful, if you're using paid accounts.");
DEFINE('_EW_DESC_SEO_SHOW_ALL_TIME_REPORT', "Do not filter by particular dates, show all time SEO report");

DEFINE('_EW_DOWNLOADS_ALLOW_ONLY_REFERRER', "Allow only when referred from: ");
DEFINE('_EW_DOWNLOADS_ALLOWED_REFERRER', "Allowed Referrer");
DEFINE('_EW_DOWNLOADS_NOT_ALLOWED',"File download restricted by ExtraWatch rule. Please contact: %s");

DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_SUBJECT',"Download restricted for IP: %s");
DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_BODY',"Someone from IP: %s attempted to download file: %s referred from %s, but it's restricted by ExtraWatch download referrer check");

DEFINE('_EW_ADMINHEADER_CLICK_AREAS', "Click Areas");
DEFINE('_EW_NO_TITLE','No Title');
DEFINE('_EW_CLICK_HEATMAP_FOR','Click Heatmap for ');
DEFINE('_EW_CLICK_AREAS_FOR','Clicks Areas for ');

DEFINE('_EW_GOALS_SEND_EMAIL','Send an email');
DEFINE('_EW_DESC_GOALS_SEND_EMAIL','You will get an email everytime the goal has been reached. Email address is taken from "Emails" section.');
DEFINE('_EW_GOAL_EMAIL_SUBJECT', "Goal '%s' was achieved, count: %d");
DEFINE('_EW_VISITS_GOAL_REACHED', " Goal '%s' was reached");

DEFINE('_EW_DOWNLOADS_TOTAL_WEEKLY', "Total weekly");
DEFINE('_EW_ACTIVE', "active");
DEFINE('_EW_DOWNLOAD_PRO', "Download PRO version");
DEFINE('_EW_VISITS_HEATMAP_CLICK_COUNT', "Total clicks today: %d");
DEFINE('_EW_HEATMAP_LOADING','Loading Heatmap table ...');
DEFINE('_EW_ANTISPAM_INVALID_EXTENSION', "Invalid extension type, .csv expected"); 
DEFINE('_EW_ANTISPAM_NUM_IP_FROM_CSV_IMPORTED', "Imported %d IP addresses from .csv file"); 