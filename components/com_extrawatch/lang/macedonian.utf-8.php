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

defined('_JEXEC') or die('Restricted access');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "Стати�?тика во живо");
DEFINE('_EW_MENU_GOALS', "Цели");
DEFINE('_EW_MENU_SETTINGS', "Поде�?увања");
DEFINE('_EW_MENU_CREDITS', "За�?луги");
DEFINE('_EW_MENU_FAQ', "ЧПП");
DEFINE('_EW_MENU_DOCUMENTATION', "Документација");
DEFINE('_EW_MENU_LICENSE', "Лиценца");
DEFINE('_EW_MENU_DONATORS', "Подржувачи");
DEFINE('_EW_MENU_SUPPORT', "Подржи ја ExtraWatch и отр�?трани ги рекламите од позадината.");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "По�?ледни по�?етители");
DEFINE('_EW_VISITS_BOTS', "Ботови");
DEFINE('_EW_VISITS_CAME_FROM', "Дојде од");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Вашиот ExtraWatch модул не е објавен! �?е зачувува нови �?тати�?тики. За да ја објавите, одете во �?екцијата за модули и објавете ја на �?ите �?трани.");
DEFINE('_EW_VISITS_PANE_LOADING', "Вчитува по�?ети...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "�?еделна �?тати�?тика за по�?етено�?т");
DEFINE('_EW_STATS_WEEK', "�?едела");
DEFINE('_EW_STATS_THIS_WEEK', "оваа недела");
DEFINE('_EW_STATS_UNIQUE', "уникатни");
DEFINE('_EW_STATS_LOADS', "вчитувања");
DEFINE('_EW_STATS_HITS', "по�?ети");
DEFINE('_EW_STATS_TODAY', "дене�?");
DEFINE('_EW_STATS_FOR', "за");
DEFINE('_EW_STATS_ALL_TIME', "Сите времиња");
DEFINE('_EW_STATS_EXPAND', "прошири");
DEFINE('_EW_STATS_COLLAPSE', "�?обери");
DEFINE('_EW_STATS_URI', "Страни");
DEFINE('_EW_STATS_COUNTRY', "Земји");
DEFINE('_EW_STATS_USERS', "Кори�?ници");
DEFINE('_EW_STATS_REFERERS', "Препраќачи");
DEFINE('_EW_STATS_IP', "IP-а");
DEFINE('_EW_STATS_BROWSER', "Прели�?тувачи");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "Клучни зборови");
DEFINE('_EW_STATS_GOALS', "Цели");
DEFINE('_EW_STATS_TOTAL', "Вкупно");
DEFINE('_EW_STATS_DAILY', "Дневно");
DEFINE('_EW_STATS_DAILY_TITLE', "Дневна �?тати�?тика");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Стати�?тика на �?ите времиња");
DEFINE('_EW_STATS_LOADING', "�?е вчитува...");
DEFINE('_EW_STATS_LOADING_WAIT', "�?е вчитува... ве молиме почекајте");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP Блокирање");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Вне�?и рачно IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Вне�?и ја IP адре�?ата која �?акаш да ја блокираш. (на пр. 217.242.11.54 или 217.* или 217.242.* за да ги блокираш �?ите IP адре�?и кој �?оодве�?твуваат �?о * карактерот.)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Вклучи блокирање на ");
DEFINE('_EW_STATS_PANE_LOADING', "Вчитува �?тати�?тика...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "Поде�?увања");
DEFINE('_EW_SETTINGS_DEFAULT', "Стандардно");
DEFINE('_EW_SETTINGS_SAVE', "Зачувај");
DEFINE('_EW_SETTINGS_APPEARANCE', "Изглед");
DEFINE('_EW_SETTINGS_FRONTEND', "Предна �?трана");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "И�?торија и Перформан�?и");
DEFINE('_EW_SETTINGS_ADVANCED', "�?апредно");
DEFINE('_EW_SETTINGS_IGNORE', "Игнорирај");
DEFINE('_EW_SETTINGS_BLOCKING', "Блокирање");
DEFINE('_EW_SETTINGS_EXPERT', "Ек�?перт");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Дали нави�?тина �?акате да ги ре�?етирате �?ите �?тати�?тики и по�?ети?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Ре�?етирај ги �?ите");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Ре�?етирај ги �?ите �?тати�?тики и дата на по�?етители");
DEFINE('_EW_SETTINGS_LANGUAGE', "Јазик");
DEFINE('_EW_SETTINGS_SAVED', "Поде�?увањата �?е зачувани");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Додади ја твојата IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "во ли�?тата.");

// Other / mostly general.
DEFINE('_EW_TITLE', "Ви�?тин�?ки AJAX џумла монитор");
DEFINE('_EW_BACK', "�?азад");
DEFINE('_EW_ACCESS_DENIED', "�?емате дозвола за да го погледнете ова !");
DEFINE('_EW_LICENSE_AGREE', "Се �?огла�?увам �?о горенаведените начини и у�?лови");
DEFINE('_EW_LICENSE_CONTINUE', "Продолжи");
DEFINE('_EW_SUCCESS', "Проце�?от е у�?пешен");
DEFINE('_EW_RESET_SUCCESS', "Сите �?тати�?тики и дата од по�?етителу е у�?пешно избришана");
DEFINE('_EW_RESET_ERROR', "Датата �?Е Е у�?пешно избришана, нешто е погрешно");
DEFINE('_EW_CREDITS_TITLE', "За�?луги");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Дневни и неделни �?тати�?тики за");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "Дозвола за AJAX забранета: Ве молиме видете ги �?тати�?тиките од вашиот поддомен на вашата џумла кој што �?те го навеле во configuration.php - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Можеби �?те заборавиле да додадете www. пред вашиот поддомен. Вашиот javascript �?е обидува да при�?тапи ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "од");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "тоа што го ми�?ли дека е друг различен поддомен.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Земете го по�?ледниот код на ек�?тензијата од");
DEFINE('_EW_HEADER_CAST_YOUR', "Ве молиме дајте го �?војот");
DEFINE('_EW_HEADER_VOTE', "гла�?");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Кликни за да �?е покаже �?овет");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Поминете �?о глувчето за да �?е покаже �?овет");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "вчерашно зголемување");
DEFINE('_EW_TOOLTIP_HELP', "Отвара надворешна помош за");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Затворете го прозорецов");
DEFINE('_EW_TOOLTIP_PRINT', "Принтај");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Вне�?и нова цел");
DEFINE('_EW_GOALS_UPDATE', "�?журирај ја целта бр.");
DEFINE('_EW_GOALS_ACTION', "�?кција");
DEFINE('_EW_GOALS_TITLE', "�?ова цел");
DEFINE('_EW_GOALS_NEW', "�?ова цел");
DEFINE('_EW_GOALS_RELOAD', "Превчитај");
DEFINE('_EW_GOALS_ADVANCED', "�?апредно");
DEFINE('_EW_GOALS_NAME', "Име");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "У�?лов за URI");
DEFINE('_EW_GOALS_URI_INVERSED', "Спротивен у�?лов за URI");
DEFINE('_EW_GOALS_GET_VAR', "GET var");
DEFINE('_EW_GOALS_GET_CONDITION', "GET у�?лов");
DEFINE('_EW_GOALS_POST_VAR', "POST Var");
DEFINE('_EW_GOALS_POST_CONDITION', "POST у�?лов");
DEFINE('_EW_GOALS_TITLE_CONDITION', "�?а�?лов");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Кори�?ничко име");
DEFINE('_EW_GOALS_IP_CONDITION', "IP у�?лов");
DEFINE('_EW_GOALS_IP_INVERSED', "IP �?противен у�?лов");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Дојден од");
DEFINE('_EW_GOALS_BLOCK', "Блокирај");
DEFINE('_EW_GOALS_REDIRECT', "Прена�?очи URL");
DEFINE('_EW_GOALS_HITS', "По�?ети");
DEFINE('_EW_GOALS_ENABLED', "Овозможено");
DEFINE('_EW_GOALS_EDIT', "Измени");
DEFINE('_EW_GOALS_DELETE', "Избриши");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Ќе ги изгубите �?ите �?корешни �?тати�?тики од оваа цел. Дали нави�?тина �?акате да ја избришете целта �?о бр.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Држави");
DEFINE('_EW_FRONTEND_VISITORS', "По�?етители");
DEFINE('_EW_FRONTEND_TODAY', "Дене�?");
DEFINE('_EW_FRONTEND_YESTERDAY', "Вчера");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Оваа �?едела");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Минатата �?едела");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Овој Ме�?ец");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Минатиот Ме�?ец");
DEFINE('_EW_FRONTEND_TOTAL', "Вкупно");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch е во режим на поправка. �?а овој начин можете да откриете што ги предизвикува грешките. За да го и�?клучите, ве молиме �?менете ја вредно�?та EXTRAWATCH_DEBUG во /components/com_extrawatch/config.php од 1 во 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Да �?е покажуваат мак�?имум редови кога �?тати�?тиките �?е во издолжен режим.");
DEFINE('_EW_DESC_STATS_IP_HITS', "Сите IP адре�?и кој што имале помалку по�?ети во изминатите денови од оваа вредно�?т ќе бидат избришани од IP и�?торијата.");
DEFINE('_EW_DESC_STATS_URL_HITS', "Сите URL-а кој што имале помалку по�?ети во изминатите денови од оваа вредно�?т ќе бидат избришани од IP и�?торијата.");
DEFINE('_EW_DESC_IGNORE_IP', "Отфрли изве�?ни IP-а од �?тати�?тиката. Одвои ги �?о нова линија. Тука може да кори�?тите помошен карактер. <br/>�?а пр. 192.* ќе игнорира 192.168.51.31, 192.168.16.2, итн..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Времето на по�?етители во мили�?екунди, �?тандардно е 2000, бидете внимателни. Потоа о�?вежете ја ExtraWatch во админи�?трација.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Времето на �?тати�?тики во мили�?екунди, �?тандардно е 4000, бидете внимателни. Потоа о�?вежете ја ExtraWatch во админи�?трација.");
DEFINE('_EW_DESC_MAXID_BOTS', "Колку по�?ети од ботови да чува во датабаза.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Колку ви�?тин�?ки по�?етители да чува во датабаза.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Колку бота да гледате во админи�?трација.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Колку ви�?тин�?ки по�?етители да гледате во админи�?трација.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Мак�?имум карактери да �?е покажуваат во долгите на�?лови и во урито.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Мак�?имум карактери да �?е покажуваат во де�?ниот панел за �?тати�?тика.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Денови да чува �?тати�?тиката во датабаза, 0 = бе�?конечно.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Кога �?те во различна времен�?ка зона од вашиот хо�?тинг �?ервер. (позитивна или негативна вредно�?т во ча�?ови)");
DEFINE('_EW_DESC_WEEK_OFFSET', "�?еделен оф�?ет, точното време/(3600*24*7) го дава бројот на неделата од 1.1.1970, овој оф�?ет е и�?правка за да почне �?о понеделник ");
DEFINE('_EW_DESC_DAY_OFFSET', "Дневен оф�?ет, точното време/(3600*24) го дава бројот на денот од 1.1.1970, овој оф�?ет е и�?правка за да почне �?о 00:00 ");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(функционално во PRO верзијата)</b> За да кори�?тите празна 1x1px иконка на предната �?трана");
DEFINE('_EW_DESC_IP_STATS', "За да овозможите �?тати�?тики за IP адре�?и. Во некој држави чувањето на IP адре�?а во датабаза на подолг период е забрането �?о закон. Кори�?тете на �?вој ризик.");
DEFINE('_EW_DESC_HIDE_ADS', "�?ко ви �?метаат рекламите, тогаш ова поде�?ување ги крие рекламите во админи�?трација. �?ко ги чувате, �?о тоа и го подржувате развојот на оваа алатка. Ви Благодариме");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Одштиклирај, ако �?акаш �?оветот да �?е прикаже �?о надминување на поинтерот, на�?проти клик.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "Стандардно е 'REDIRECT_URL', кое кори�?ти url препишување, може да биде поде�?ено на 'SCRIPT_URL' ако го логира �?амо index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Порака која �?е прикажува на блокиран кори�?ник или информација �?о образложение зашто �?е блокирани банираните кори�?ници.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Должина на �?оветот(балончето)");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Ви�?ина на �?оветот(балончето)");
DEFINE('_EW_DESC_TOOLTIP_URL', "Тука можете да �?тавите било кое URL, за да го визуализирате ip-то на по�?етителот. Овој {ip} ќе биде �?менет од ip-то на по�?етителот. �?а пр. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "Тука може да пишете било кое URI кое �?акате да биде игнорирано од �?тати�?тиките. Тука може да кори�?тите помошни карактери (* и ?). �?а пр.: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "Тука наведи име за целта. Ова име ќе го гледате во �?тати�?тиката.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Се што е по�?ле вашиот поддомен. За http://www.codegravity.com/projects/ URI-то е: /projects/ (Пример: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET променлива е променлива која може да ја видите во URL-то по�?ле карактерот ? или &amp; знакот. �?а пр. http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. И�?то така може да кори�?тите <u>*</u> во ова поле за да ги �?кенира �?ите get вредно�?ти. (Пример: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Тука мора да наведете �?оодветно�?т за вредно�?т од претходното поле. (Пример: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Прилично �?лично, но ние ги проверуваме вредно�?тите вне�?ени во формите. Така да, кога имате форма на вашата веб-�?трана, и има поле &lt;input type='text' name='<u>experiences</u>' /&gt;. (Пример: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Совпаѓање на вредно�?т од POST полето. Пр. �?акаме да провериме, дали кори�?никот има и�?ку�?тво во java. (Пример: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "�?а�?лов на �?трана кој нема �?овпаѓање. (Пример: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Име на логиран кори�?ник. (Пример: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP од која кори�?никот доаѓа: (Пример: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "URL од која кори�?никот доаѓа. (Пример: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Кори�?никот е прена�?очен до URL �?пецифициран од тебе. Има поголем приоритет отколу 'блокирање': Пример: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Колку карактери да �?крати во табелата за цели");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(функционално во PRO верзија)</b> Позадин�?ки линк до codegravity.com, можете да го оневозможите, но би го ценеле тоа ако �?тои непроменет. Ви Благодариме");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Прикажи ги вкупните �?тати�?тики за држави на модулот од предната �?трана. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "�?ко �?акте да го �?мените редот на По�?етители/Држави на предна �?трана. Одштиклирајте го, и по�?етителите први ќе �?е појават.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Да прикаже број на држави на предна �?трана");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Прикажи по�?етители од држави во модулот на предната �?трана.  �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Број на �?екунди за да ги кешира вкупниот број на држави од предната �?трана");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Број на �?екунди за да ги кешира по�?етителите од предната �?трана");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Да прикаже по�?етители на предна �?трана за: дене�?. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Да прикаже по�?етители на предна �?трана за: вчера. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Да прикаже по�?етители на предна �?трана за: оваа недела. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Да прикаже по�?етители на предна �?трана за: минатата недела. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Да прикаже по�?етители на предна �?трана за: овој ме�?ец. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Да прикаже по�?етители на предна �?трана за: минатиот ме�?ец. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Да прикаже вкупен број на по�?етители од по�?ледната ExtraWatch ин�?талација. �?ко е променет, ова поде�?ување ќе биде ефективно на предната �?трана откога времето ќе биде �?етирано во CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "Кој фајл за јазик. Тие �?е наоѓаат во /components/com_extrawatch/lang/. �?ко �?акате да направите превод, прво проверете на домашната �?трана од овој проект, и ако тој превод не по�?тои, �?амо копирајте го english.php во на пр. german.php и вне�?ете го во овој директориум. Потоа, �?амо преведете ги �?ите клучни вредно�?ти од де�?но.");
DEFINE('_EW_DESC_GOALS', "Целите ви овозможуваат да �?пецифицирате �?пецијални периметри. Кога овие параметри ќе �?е �?овпаднат, бројачот �?е зголемува. �?а овој начин можете да �?ледите дали кори�?никот по�?етил �?пецифична URL, по�?тирал �?пецифична вредно�?т, има �?пецифицно кори�?ничко име или дошол од �?пецифична адре�?а. И�?то така таквите кори�?ници можете да блокирате или да прена�?очите кон некое друго URL.");
DEFINE('_EW_DESC_GOALS_INSERT', "Во �?ите полиња, о�?вен тоа за име, можете да кори�?тите * и ? како помошни карактери. �?а пример: ?ear (will match: near, tear, ..),  p*r (ќе �?е �?овпадне �?о: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "�?аме�?ти на 1, ако �?акаш кори�?никот да биде блокиран. Тој нема да го гледа о�?татокот од �?одржината, туку �?амо пораката дека е блокиран - без никакво прена�?очување и неговата IP ќе биде додадена во 'блокирани' �?тати�?тики (Пример: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "У�?лов за Држава");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "Спротивен у�?лов за Држава");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Код на држава �?о 2 две големи букви (�?а пр: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "Внатрешен");
DEFINE('_EW_STATS_FROM', "Од");
DEFINE('_EW_STATS_TO', "До");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Додади во целите");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Додади цел за оваа држава");
DEFINE('_EW_MENU_REPORT_BUG', "Пријави грешка или можно�?т");
DEFINE('_EW_GOALS_COUNTRY', "Држава");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "�?ко �?акате имињата на државите да �?е прикажуваат �?о големи букви на предната �?трана (Пр: GERMANY, UNITED KINGDOM на�?проти Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Време во �?екунди за да ги и�?кешира кори�?ниците на предната �?трана.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Почетна вредно�?т која �?е покажува: на предна �?трана. Кори�?но кога мигрира од друга алатка за �?тати�?тика. (Пр.: 20000). �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т.");
DEFINE('_EW_DESC_IGNORE_USER', "Игнорирај ги кори�?ниците напишани во формава за тек�?т. По еден на линија. (Пример.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "�?ајактивни кори�?ници дене�? од вкупно");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Овозможи ги бановите базирани на зборовите од ли�?тата на �?пам зборови подоле ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "�?ајче�?то кори�?тени �?пам зборови од �?пам ботови. Тука можете да кори�?тите помошен карактер, (Пр.: ph?rmac*). �?ко поде�?увањето од погоре е овозможено, ExtraWatch ќе провери дали напаѓачот ја поднел формата (HTTP POST побарување) на вашата веб-�?трана �?о некој од �?пам зборовите. (Се одне�?ува �?амо ако формата вчитува �?умла базирана веб-�?трана - форум, коментари, но е прилично ефика�?на за да ги блокира �?пам ботовите кој пробуваат да �?е вметнат и подне�?ат �?одржина во �?екоја до�?тапна форма)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "�?нти-�?пам");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Линк на предната �?трана на модулот за кори�?ници - дозволува да наведете URL, кој �?е отвара кога кори�?никот ќе кликне на кори�?ничкото име. Мора да има низа {user}, која ќе биде заменета �?о актуелното кори�?ничко име. (Пр. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Клучни фрази");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Мак�?имум вредно�?ти во табот кај и�?торија (Пример: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "Во по�?ети покажи ги �?амо по�?ледните по�?етени �?трани, а не �?ите");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "Во по�?ети �?криј ги повторувачките имиња на �?трани");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Мак�?имум број на по�?етители да �?е чуваат во датабаза за и�?торија на по�?ети. Бидете внимателни �?о ова поде�?ување, ако имате голем �?ообраќај, може да ра�?те премногу брзо. Секогаш проверувај во �?тату�? колку дата �?е �?одржи во табелата за и�?торија");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Држи ги табелите од датабазата на деин�?талација. Штиклирај ја оваа опција пред деин�?талација ако правиш ажурирање и �?акаш да �?и ја зачуваш датата.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Ќе добиете ноќни извештаи на е-пошта за претходниот ден, кој што ќе можете да ги прочитате изутрината");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "�?дре�?а за е-пошта на која ќе добивате извештаи");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Вклучи �?амо редови во извештаите од е-пошта кога процентот е поголем од {value}. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Вклучи �?амо <b>позитивен еден ден</b> во извештаите од е-пошта кога процентот е поголем од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Вклучи �?амо <b>негативен еден ден</b> во извештаите од е-пошта кога процентот е помал од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Вклучи �?амо <b>позитивен �?едми ден</b> во извештаите од е-пошта кога процентот е поголем од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Вклучи �?амо <b>негативен �?едми ден</b> во извештаите од е-пошта кога процентот е помал од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Вклучи �?амо <b>позитивен двае�?ет и о�?ми ден</b> во извештаите од е-пошта кога процентот е поголем од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Вклучи �?амо <b>негативен двае�?ет и о�?ми ден</b> во извештаите од е-пошта кога процентот е помал од {value} процент. �?аме�?ти назад на 0 ако не �?акате да ја кори�?тите оваа можно�?т. <i>(пример: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(фунцкионално во PRO верзијата)</b> Овозможи го ова поде�?ување ако �?акаш да го направиш линкот на логото да биде рендериран �?о атрибутот rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Мак�?имум карактери на е-пошта име. Смени го ова ако вашиот прозорец за е-пошта е премногу мал.");

DEFINE('_EW_MENU_HISTORY', "И�?торија");
DEFINE('_EW_MENU_EMAILS', "Е-пошти");
DEFINE('_EW_MENU_STATUS', "DB Стату�?");
DEFINE('_EW_DESC_BLOCKED', "Овие IP-а беа блокирани од анти-�?пам");


DEFINE('_EW_HISTORY_VISITORS', "И�?торија на по�?етители");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Прикажува �?амо %d по�?ледни реги�?три.
                За да ја �?мените оваа вредно�?т, идете во Поде�?увања -&gt; И�?торија и Перформан�?и -&gt; HISTORY_MAX_DB_RECORDS . Бидете внимателни, ова поде�?ување влијае на времето на вчитување на датата.  ");
DEFINE('_EW_MENU_BUG', "Пријави грешка");
DEFINE('_EW_MENU_FEATURE', "Побарај можно�?т");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Клучни зборови");

DEFINE('_EW_BLOCKING_UNBLOCK', "одблокирај");
DEFINE('_EW_STATS_KEYPHRASE ', "Клучна фраза");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "име на табела");
DEFINE('_EW_STATUS_DATABASE_ROWS', "редови");
DEFINE('_EW_STATUS_DATABASE_DATA', "дата");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "вкупно");

DEFINE('_EW_EMAIL_REPORTS', "Извештаи од е-пошта");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Филтриран е-пошта извештај од вчера");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Вредно�?т за филтер на е-пошта");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "вредно�?т");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "процент");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-ден измена");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-дена измена");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-дена измена");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch дене�?ка блокираше %d по�?ети од �?пам, вкупно: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Блокирани IP адре�?и");
DEFINE('_EW_ANTISPAM_SETTINGS', "�?нти-�?пам поде�?увања");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX ажурирања на �?ообраќај (о�?вен мапи)");


DEFINE('_EW_HISTORY_PREVIOUS', "претходен");
DEFINE('_EW_HISTORY_NEXT', "�?леден");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Број на колони од држави");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Број на редови од држави");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Прикажи или не, имиња на држави");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Прикажи прво знамиња, потоа проценти");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET �?противен у�?лов");
DEFINE('_EW_GOALS_POST_INVERSED', "POST �?противен у�?лов");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Спротивен у�?лов за �?а�?лов");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Спротивен у�?лов за Кори�?ничко име");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Дојдено од �?протиен у�?лов");

DEFINE('_EW_STATS_MAP', "По�?ледна по�?ета од мапа");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Молиме вне�?ете <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> клуч за да �?е прикаже по�?ледниот по�?етител од мапа:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "клуч");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Молиме вне�?ете валиден ipinfodb клуч кој го добивте од: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "ЛОШО ПОБ�?РУВ�?ЊЕ: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Вне�?ени полиња од формата:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL параметри:");
DEFINE('_EW_VISIT_ADD_PAGE', " Додади ја �?траната како цел");
DEFINE('_EW_VISIT_BLOCK_IP', " Блокирајте ја оваа IP адре�?а");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Вне�?ете ја оваа вне�?ена променлива од формата како цел");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Вне�?ете ги параметрите на ова URL како цел");

DEFINE('_EW_TREND_EMPTY', "Празно");

DEFINE('_EW_NOT_NUMBER', " В�?ИМ�?�?ИЕ: Вредно�?та која ја вне�?овте не е број. ExtraWatch нема да работи и�?правноw!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Ова е 15 дневна пробна верзија. О�?танати денови: <b>%d</b>. Ве молиме купете ја вечната <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch лиценца за вашиот поддомен</a> за оваа и за наредните верзии кој �?ледат.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Вашата пробна верзија е и�?течена. Ве молиме купете ја ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Лиценцата е активирана у�?пешно. Ви Благодариме");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Грешка: Клучот за лиценца и вашиот поддомен не �?е �?овпаѓаат.</b><br/>Дали го вне�?овте и�?тиот поддомен во формата за донација и�?то како што го гледате подоле? <br/>Кликни на '<b>побарај го точниот клуч за активација</b>' подоле, или контактирајте не на: support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "�?ко ја гледате горната порака веќе подолго време, тогаш вашата �?трана во живо можеби е погрешна.
                    Отворете во components/com_extrawatch/config.php
                    одкоментирајте, и наме�?тете ја вашата актуелна �?трана во живо. �?а пр.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Внимание: �?траната во вашиот прели�?тувач и �?траната во живо во конфигурација: %s и %s не �?е �?овпаѓаат.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "�?аме�?ти ја живата �?трана во: %s и продолжи...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "От�?трани заднин�?ки линк");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "База на знаење");
DEFINE('_EW_ADMINHEADER_FLOW', "Проток");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Графикони");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Компоненти");
DEFINE('_EW_ADMINHEADER_REVIEW', "Рецензија");
DEFINE('_EW_ADMINHEADER_WRITE', "�?апиши ");

DEFINE('_EW_FLOW_TRAFFIC', "Промет на �?ообраќај");
DEFINE('_EW_FLOW_SELECT_PAGE', "Одбери �?трана:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Број на надворешни линкови:");
DEFINE('_EW_FLOW_NESTING', "�?иво на гнездење:");
DEFINE('_EW_FLOW_SCALE', "Размер:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Верзија �?лободна од рекламирање");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Ви благодариме многу за вашата донација!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Реги�?тар�?киот клуч за вашиот поддомен %s е: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Сега можете да го от�?траните заднин�?киот линкот или да го �?криете логото на ExtraWatch на предната �?трана од поде�?увања ");


DEFINE('_EW_SIZES_LAST_CHECK', "По�?ледна проверка е направена на:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Големина на component/module во /administrator директориум");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Компонента");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Вкупно:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Големина");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "О�?вежи ги �?ите");

DEFINE('_EW_SIZEDATABASE_TABLE', "Табела");
DEFINE('_EW_SIZEDATABASE_SIZE', "Големина");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-ден измена");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-дена измена");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-дена измена");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "нема дата");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Вкупно:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "О�?вежи ги �?ите");
DEFINE('_EW_SIZEMODULES_TOTAL', "Вкупно:");
DEFINE('_EW_SIZEMODULES_MODULE', "Модул");
DEFINE('_EW_SIZEMODULES_SIZE', "Големина");

DEFINE('_EW_SIZES_FILES', "Фајлови и Директориуми");
DEFINE('_EW_SIZES_BYTES', "бајти");
DEFINE('_EW_SIZES_KB', "Кб");
DEFINE('_EW_SIZES_MB', "Мб");
DEFINE('_EW_SIZES_GB', "Гб");
DEFINE('_EW_SIZES_REFRESH', "О�?вежи");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 од Матеј Ковал");

DEFINE('_EW_STATUS_MB', "Mб");
DEFINE('_EW_STATUS_DATABASE', "Големина на табелите во датабаза");


DEFINE('_EW_DESC_IPINFODB_KEY', "По�?ледна по�?ета на мапа од ipinfodb.com �?о клуч од: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Фор�?ирај ја времен�?ката зона");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "�?журирај");
DEFINE('_EW_MENU_UPDATE_TITLE', "Бекап и �?адгради");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "�?е е до�?тапно во �?лободната верзија, ве молиме проверете го јазичето за лиценца");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Овозможи банирање на �?пам зборови");
DEFINE('_EW_SPAMWORD_LIST', "Ли�?та на �?пам зборови");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Сокри ги повторувачките на�?лови");
DEFINE('_EW_TRUNCATE_VISITS', "Скрати ги по�?етите");
DEFINE('_EW_TRUNCATE_STATS', "Скрати ги �?тати�?тиките");
DEFINE('_EW_TRUNCATE_GOALS', "Скрати ги целите");
DEFINE('_EW_LIMIT_BOTS', "Лимитирај Ботови");
DEFINE('_EW_LIMIT_VISITORS', "Лимитирај По�?етители");
DEFINE('_EW_TOOLTIP_WIDTH', "Должина на �?оветот");
DEFINE('_EW_TOOLTIP_HEIGHT', "Ви�?ина на �?оветот");
DEFINE('_EW_TOOLTIP_URL', "Совет URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Совет на клик");
DEFINE('_EW_IP_STATS', "IP �?тати�?тика");
DEFINE('_EW_IPINFODB_KEY', "IP инфо DB клуч ");
DEFINE('_EW_ONLY_LAST_URI', "Само по�?ледното URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Скриј лого на предна �?трана ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Без �?ледење на предна �?трана");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Без заднин�?ки линк на предна �?трана");
DEFINE('_EW_FRONTEND_USER_LINK', "Линкови на предна �?трана за кори�?ник");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Прво држави на предна �?трана");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Имиња на држави на предна �?трана");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Држави �?о големи букви на предна �?трана");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Прво знамињата на државите на предна �?трана ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Број на држави на предна �?трана");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Мак�?имум колони на држави на предна �?трана");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Мак�?имум редови на држави на предна �?трана");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Денешни по�?етители на предна �?трана ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Вчерашни по�?етители на предна �?трана ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "По�?етители од оваа недела на предна �?трана ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "По�?етители од минатата недела на предна �?трана ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "По�?етители од овој ме�?ец на предна �?трана ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "По�?етители од минатиот ме�?ец на предна �?трана");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Скриј вкупен број на по�?етители на предна �?трана");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Вкупно на предна �?трана");
DEFINE('_EW_HISTORY_MAX_VALUES', "И�?тори�?ки мак�?имум вредно�?ти");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "И�?тори�?ки мак�?имум реги�?три");
DEFINE('_EW_UPDATE_TIME_VISITS', "�?журирај ги времен�?ките по�?ети");
DEFINE('_EW_UPDATE_TIME_STATS', "�?журирај ги времен�?ките �?тати�?тики");
DEFINE('_EW_STATS_MAX_ROWS', "Стати�?тика мак�?имум редови");
DEFINE('_EW_STATS_IP_HITS', "Стати�?тика за IP по�?ети");
DEFINE('_EW_MAXID_BOTS', "Мак�?имум ID ботови");
DEFINE('_EW_MAXID_VISITORS', "Мак�?имум id По�?етители");
DEFINE('_EW_STATS_KEEP_DAYS', "Стати�?тика зачувај денови ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Кеширај ги државите од предната �?трана ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Кеширај ги по�?етителите од предната �?трана ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Деин�?талирај Keep Data ");
DEFINE('_EW_IGNORE_IP', "Игнорирај IP");
DEFINE('_EW_IGNORE_URI', "Игнорирај URI");
DEFINE('_EW_IGNORE_USER', "Игнорирај Кори�?ник");
DEFINE('_EW_BLOCKING_MESSAGE', "Блокирана Порака");
DEFINE('_EW_SERVER_URI_KEY', "Сервер URI клуч");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Вкупно по�?етители на предна �?трана");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Реги�?тар");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " За да биде блокирањето у�?пешно, мора да го објавите ExtraWatch агентот ПРЕД било која �?одржина или форма. �?а пр. на левата �?трана од вашиот шаблон.
                    <br/>
                    Иди во менаџерот за модули -> ExtraWatch агент -> одбери позиција за лево");

DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Извештаи");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "Овозможени SEO ноќни е-пошта извештаи");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Погледни го демото за ин�?талација");

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