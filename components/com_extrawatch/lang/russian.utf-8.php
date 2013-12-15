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
DEFINE('_EW_MENU_STATS', "Стати�?тика");
DEFINE('_EW_MENU_GOALS', "Спецзадачи");
DEFINE('_EW_MENU_SETTINGS', "�?а�?тройки");
DEFINE('_EW_MENU_CREDITS', "Благодарно�?ти");
DEFINE('_EW_MENU_FAQ', "FAQ");
DEFINE('_EW_MENU_DOCUMENTATION', "Документаци�?");
DEFINE('_EW_MENU_LICENSE', "Лицензи�?");
DEFINE('_EW_MENU_DONATORS', "Спон�?оры");
DEFINE('_EW_MENU_SUPPORT', "Поддержи ExtraWatch и тогда реклама из админки будет удалкена))).");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "По�?ледние по�?етители");
DEFINE('_EW_VISITS_BOTS', "Боты");
DEFINE('_EW_VISITS_CAME_FROM', "Перешел из");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Ваш ExtraWatch модуль не опубликован! �?ова�? �?тати�?тика запи�?ана не будет. Дл�? публикации, зайдите в закладку управлени�? модул�?ми и опубликуйте модуль дл�? в�?ех �?траниц по которым Вы хотите видеть �?тати�?тику");
DEFINE('_EW_VISITS_PANE_LOADING', "Загружаем по�?ещени�?...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "Стати�?тика визитов за неделю");
DEFINE('_EW_STATS_WEEK', "�?едел�?");
DEFINE('_EW_STATS_THIS_WEEK', "'�?та недел�?");
DEFINE('_EW_STATS_UNIQUE', "уникальных");
DEFINE('_EW_STATS_LOADS', "загрузок");
DEFINE('_EW_STATS_HITS', "хитов");
DEFINE('_EW_STATS_TODAY', "�?егодн�?");
DEFINE('_EW_STATS_FOR', "за");
DEFINE('_EW_STATS_ALL_TIME', "За в�?е врем�?");
DEFINE('_EW_STATS_EXPAND', "Ра�?крыть");
DEFINE('_EW_STATS_COLLAPSE', "Свернуть");
DEFINE('_EW_STATS_URI', "Страницы");
DEFINE('_EW_STATS_COUNTRY', "Страны");
DEFINE('_EW_STATS_USERS', "Пользователи");
DEFINE('_EW_STATS_REFERERS', "Переходы");
DEFINE('_EW_STATS_IP', "IP адре�?а");
DEFINE('_EW_STATS_BROWSER', "Браузеры");
DEFINE('_EW_STATS_OS', "ОС");
DEFINE('_EW_STATS_KEYWORDS', "Ключевые �?лова");
DEFINE('_EW_STATS_GOALS', "Спецзадачи");
DEFINE('_EW_STATS_TOTAL', "В�?его");
DEFINE('_EW_STATS_DAILY', "Ежедневно");
DEFINE('_EW_STATS_DAILY_TITLE', "Стати�?тика за день");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Стати�?тика за в�?е врем�?");
DEFINE('_EW_STATS_LOADING', "загрузка...");
DEFINE('_EW_STATS_LOADING_WAIT', "загрузка... подождите");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "блокировка IP");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Введите IP вручную");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Введите IP который хотите заблокировать. (например 217.242.11.54 или 217.* или 217.242.* дл�? блокировки в�?ех IP вход�?щих в под�?еть)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "�?а �?амом деле забанить ");
DEFINE('_EW_STATS_PANE_LOADING', "Загружаем �?тати�?тику...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "�?а�?тройки");
DEFINE('_EW_SETTINGS_DEFAULT', "По умолчанию");
DEFINE('_EW_SETTINGS_SAVE', "Сохранить");
DEFINE('_EW_SETTINGS_APPEARANCE', "Внешний вид");
DEFINE('_EW_SETTINGS_FRONTEND', "Фронт�?нд");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "И�?тори�? и производительно�?ть");
DEFINE('_EW_SETTINGS_ADVANCED', "Дополнительно");
DEFINE('_EW_SETTINGS_IGNORE', "Игнорировать");
DEFINE('_EW_SETTINGS_BLOCKING', "Блокировка");
DEFINE('_EW_SETTINGS_EXPERT', "Эк�?перт");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Ты правда хочешь уничтожить ВСЮ �?тати�?тику?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Сбро�?ить в�?е");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Сбро�?ить в�?ю �?тати�?тику и данные по�?етителей");
DEFINE('_EW_SETTINGS_LANGUAGE', "Язык");
DEFINE('_EW_SETTINGS_SAVED', "�?а�?тройки были �?охранены");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Можешь добавить �?вой IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "в �?пи�?ок.");

// Other / mostly general.
DEFINE('_EW_TITLE', " AJAX монитор joomla в реальном времени");
DEFINE('_EW_BACK', "�?азад");
DEFINE('_EW_ACCESS_DENIED', "У Ва�? нет прав дл�? про�?мота �?того !");
DEFINE('_EW_LICENSE_AGREE', "Я �?огла�?ен �?о в�?еми правилами наверху");
DEFINE('_EW_LICENSE_CONTINUE', "Продолжить");
DEFINE('_EW_SUCCESS', "Операци�? прошла у�?пешно");
DEFINE('_EW_RESET_SUCCESS', "В�?�? �?тати�?тика у�?пешно �?терта");
DEFINE('_EW_RESET_ERROR', "Данные были �?терты не целиком, что то пошло не так...");
DEFINE('_EW_CREDITS_TITLE', "Благодарно�?ти");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Дневна�? и недельна�? �?тати�?тика");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX до�?туп запрещен: Пожалуй�?та про�?матривайте �?тати�?тику из домена указанного в configuration.php  joomla - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Может ты забыл www. в начале �?воего доменного имени. Твой javascript пытает�?�? получить до�?туп к ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "из");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "�?то за�?тавл�?ет его думать что �?то другой домен.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "получи по�?ледние обновлени�? в");
DEFINE('_EW_HEADER_CAST_YOUR', "Проголо�?уй");
DEFINE('_EW_HEADER_VOTE', "за");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Кликни дл�? вывода окна доп.инфо");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "�?аведи мышь дл�? вывода окна доп.инфо");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "yesterday&apos;s increase");
DEFINE('_EW_TOOLTIP_HELP', "Opens online external help for");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Закрыть �?то окно");
DEFINE('_EW_TOOLTIP_PRINT', "Печать");

// Goals.
DEFINE('_EW_GOALS_INSERT', "В�?тавить новое задание");
DEFINE('_EW_GOALS_UPDATE', "Обновить no. задани�?");
DEFINE('_EW_GOALS_ACTION', "Дей�?твие");
DEFINE('_EW_GOALS_TITLE', "�?овое задание");
DEFINE('_EW_GOALS_NEW', "�?овое задание");
DEFINE('_EW_GOALS_RELOAD', "Перезагрузить");
DEFINE('_EW_GOALS_ADVANCED', "Дополнительно");
DEFINE('_EW_GOALS_NAME', "Им�?");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI у�?ловие");
DEFINE('_EW_GOALS_URI_INVERSED', "URI обратное у�?ловие");
DEFINE('_EW_GOALS_GET_VAR', "GET переменна�?");
DEFINE('_EW_GOALS_GET_CONDITION', "GET у�?ловие");
DEFINE('_EW_GOALS_POST_VAR', "POST Переменна�?");
DEFINE('_EW_GOALS_POST_CONDITION', "POST У�?ловие");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Title У�?ловие");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Username у�?ловие");
DEFINE('_EW_GOALS_IP_CONDITION', "IP У�?ловие");
DEFINE('_EW_GOALS_IP_INVERSED', "IP обратное у�?ловие");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Перешел из у�?лови�?");
DEFINE('_EW_GOALS_BLOCK', "Блокировка");
DEFINE('_EW_GOALS_REDIRECT', "Преадре�?аци�? на URL");
DEFINE('_EW_GOALS_HITS', "Хитов");
DEFINE('_EW_GOALS_ENABLED', "Включено");
DEFINE('_EW_GOALS_EDIT', "Редактировать");
DEFINE('_EW_GOALS_DELETE', "Удалить");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Вы потер�?ете в�?ю недавнюю �?тати�?тику дл�? �?той задачи. Вы правда хотите удалить no �?того задани�?.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Страны");
DEFINE('_EW_FRONTEND_VISITORS', "По�?етители");
DEFINE('_EW_FRONTEND_TODAY', "Сегодн�?");
DEFINE('_EW_FRONTEND_YESTERDAY', "Вчера");
DEFINE('_EW_FRONTEND_THIS_WEEK', "�?а �?той неделе");
DEFINE('_EW_FRONTEND_LAST_WEEK', "�?а прошлой неделе");
DEFINE('_EW_FRONTEND_THIS_MONTH', "В �?том ме�?�?це");
DEFINE('_EW_FRONTEND_LAST_MONTH', "В прошлом ме�?�?це");
DEFINE('_EW_FRONTEND_TOTAL', "В�?его");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch в режиме отладки. Таким образом легде найти ошибки приложени�?.Чтобы выключить, измени переменную EXTRAWATCH_DEBUG в /components/com_extrawatch/config.php �? 1 на 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Мак�?имальное количе�?тво �?трок �?тати�?тики в ра�?крытом режиме.");
DEFINE('_EW_DESC_STATS_IP_HITS', "В�?е IP адре�?а, у которых меньше хитов в предыдущие дни чем �?то значение, будут удалены из IP и�?тории.");
DEFINE('_EW_DESC_STATS_URL_HITS', "В�?е URL, у которых меньше хитов в предыдущие дни чем �?то значение, будут удалены из и�?тории URL.");
DEFINE('_EW_DESC_IGNORE_IP', "Можно и�?ключить определенный IP из �?тити�?тики. Каждый адре�? должен начинать�?�? �? новой �?троки. В �?той на�?тройке можете и�?пользовать групповые �?имволы. �?апример 192.* проигнорирует 192.168.51.31, 192.168.16.2, и т.д. ");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Врем�? обновлени�? �?тати�?тики по по�?етител�?м в милли�?екундах, по умолчанию - 2000, будьте о�?торожны �? �?тим значением. По�?ле изменени�? обновите �?траницу б�?к�?нда ExtraWatch.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Врем�? обновлени�? общей �?тати�?тики  в милли�?екундах, по умолчанию - 4000, будьте о�?торожны �? �?тим значением. По�?ле изменени�? обновите �?траницу б�?к�?нда ExtraWatch.");
DEFINE('_EW_DESC_MAXID_BOTS', "Сколько по�?ещений Ботов хранить в базе данных.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Сколько реальных по�?ещений хранить в базе данных.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Сколько реальных по�?ещений хотите отображать в б�?к�?нде.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Сколько Ботов хотите отображать в б�?к�?нде.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Мак�?имальное количе�?тво букв отображаемых в заголовках и URL.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Мак�?имальное количе�?тво букв отображемых в правой панели �?тати�?тики.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Дней хранить �?тати�?тику в базе данных, 0 = бе�?конечно.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Когда вы находите�?ь в разных временных зонах чем ваш хо�?тинг-�?ервер. (положительное или отрицательное значение)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Компен�?аци�? недели, временной шаблон/(3600*24*7) начинает�?�? �? недели 1.1.1970, �?та компен�?аци�? корректирует дл�? того чтобы начать �? понедельника.");
DEFINE('_EW_DESC_DAY_OFFSET', "Компен�?аци�? дн�?, временной шаблон/(3600*24*7) начинает�?�? �? дн�? 1.1.1970, �?та компен�?аци�? корректирует дл�? того чтобы начать �? 00:00.");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Ипользовать пу�?тую иконку 1x1px icon в фронт�?нд вме�?то значка ExtraWatch.");
DEFINE('_EW_DESC_IP_STATS', "Дл�? включени�? �?тати�?тики IP адре�?ов. В некоторых �?транах длительное хранение IP адре�?ов в базах данных запрещено законом. И�?пользуете на �?вой �?трах и ри�?к.");
DEFINE('_EW_DESC_HIDE_ADS', "Эта на�?тройка �?крывает рекламный блок в б�?к�?нд, выключи е�?ли он теб�? дей�?твительно до�?тал. �?о о�?тавл�?�? его включенным, ты поддерживаешь материально разработчиков продукта. Большое �?па�?ибо, что решил не выключать.");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', " Снимите �?ту галку е�?ли хотите чтобы доп.инфо окно вылетало по наводке мыши, или о�?тавьте галку дл�? вызова окна кликом.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "По умолчанию �?то 'REDIRECT_URL', �?то нормально е�?ли Вы и�?пользуете перепи�?ку URL (sef), ножет быть изменено на 'SCRIPT_URL' е�?ли и�?пользовать лог только дл�? index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Сообщение которое увидит пользователь которого вы забанили по�?ред�?твом ExtraWatch.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Ширина popup окна �? доп.инфо");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Вы�?ота popup окна �? доп.инфо");
DEFINE('_EW_DESC_TOOLTIP_URL', "Вы можете вве�?ти URL Whois пои�?ковика зде�?ь, дл�? визуализации ip по�?етителей.{ip} подмен�?ет�? на ip по�?етител�? при нажатии на кнопку доп.инфо. �?апример http://somewebsite.com/query?iplookup={ip} По умолчанию �?то http://www.netip.de/search?query={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "Вы можете выбрать тип URI который будет проигнорирован в �?тати�?тике.  Вы можете и�?пользовать под�?тановочные знаки (* и ?) . �?апример.: /freel?n* или /guestbook, или /кака�?нибудьважна�?директори�?_dir/do_not_log_this.html, или даже .php чтобы и�?ключить .php файлы ");
DEFINE('_EW_DESC_GOALS_NAME', "�?аименование �?пецзадачи. Оно будет отображать�?�? в �?тати�?тике.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "В�?е что по�?ле вашего доменного имени. Дл�? http://www.codegravity.com/projects/  URI �?то: /projects/ (Пример: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET переменна�? �?то переменна�?, которую Вы можете обычно видеть в URL по�?ле  ? или &amp; знаков. К примеруhttp://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. Вы также можете и�?пользовать <u>*</u> в �?том поле, чтобы про�?мотреть в�?е полученные значени�?. (К примеру: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Зде�?ь Вы должны определить нужное �?оответ�?твие дл�? значени�? из предыдущего пол�?. (К примеру: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Очень похоже, но мы провер�?ем значени�? полученные из форм. Так, когда у Ва�? е�?ть форма на Вашем веб�?айте, у которого е�?ть поле &lt;input type='text' name='<u>experiences</u>' /&gt;. (К примеру: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Соответ�?вие значению из �?того POST пол�?. �?апример мы хотим проверить, е�?ть ли у пользовател�? �?обыти�? java. (К примеру: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Заголовок �?траницы, котора�? должна �?оответ�?твовать. (Пример: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Им�? залогинившего�?�? пользовател�?. (Пример: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP �? которого перешел пользователь: (Пример: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "�?екий URL �? которого перешел пользователь. (Пример: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "пользователь переме�?тит�?�? на URL указанный Вами. имеет более вы�?окий приоритет чем 'блокировка': (пример: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "How many chars to truncate in goals table");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "С�?ылка на codegravity.com, можете её выключить , �?О мы бы попро�?или Ва�? её там о�?тавить. Спа�?ибо");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Отображение флагов и процентного �?оотношени�? �?тран по�?етителей в фронт�?тде. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Е�?ли хотите изменить положение �?трок  По�?етители/Страны в модуле фронт�?нд. Снимите галку , и По�?етители будут показывать�?�? первыми.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Количе�?тво �?тран отображаемых в фронт�?нде");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Отображение количе�?тва по�?етителей в фронт�?тде по дн�?м,недел�?м и ме�?�?цам. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Врем�? жизни к�?ша в �?екундах дл�? �?тран по�?етителей отображаемых модулем фронт�?нд");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Врем�? жизни к�?ша в �?екундах дл�? по�?етителей отображаемых модулем фронт�?нд");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: Сегодн�?. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: Вчера. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_..");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: �?а �?той неделе. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: �?а прошлой неделе. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: В �?том ме�?�?це. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: В прошлом ме�?�?це. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Отображение количе�?тва по�?етителей в фронт�?нд модуле дл�?: В�?его. Е�?ли изменено, значение изменит�?�? только по проше�?твии времени указанного в CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "И�?пользуемый �?зыковой файл. Файл находит�?�? /components/com_extrawatch/lang/ Можете изменить его и переименовать в �?лбан�?кий например...");
DEFINE('_EW_DESC_GOALS', "Спецзадачи позвол�?ют Вам определ�?ть �?пециальные параметры. Когда �?ти параметры заданы, �?четчик �?пецзадач будет увеличивать�?�?. Таким образом Вы можете контролировать, по�?етил ли пользователь определенный URL, отправил определенное значение, имеет определенное им�? пользовател�? или перешел из определенного адре�?а. Вы можете также заблокировать или переадре�?овать таких пользователей на любой другой URL.");
DEFINE('_EW_DESC_GOALS_INSERT', "Во в�?ех обла�?т�?х кроме названи�? Вы можете и�?пользовать * и ? как под�?тановочные знаки. �?апример:?ear (будет �?оответ�?твовать: near, tear, ..), p*r (будет �?оответ�?твовать: pr, peer, pear ..)");
DEFINE('_EW_DESC_GOALS_BLOCK', "У�?тановить в 1, е�?ли Вы хотите, чтобы по�?етитель был заблокирован. Он не будет видеть о�?тальную ча�?ть �?одержани�?, только �?ообщение, что он был заблокирован - без любой переадре�?ации, и его IP добавлен к 'блокировка' �?тати�?тике (К примеру:<b>1</b> )");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "У�?ловие дл�? �?траны");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "2-х буквенный код �?траны в верхнем реги�?тре (Пр: <b>RU</b>)");
DEFINE('_EW_STATS_INTERNAL', "Внутренний");
DEFINE('_EW_STATS_FROM', "От");
DEFINE('_EW_STATS_TO', "К");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Добавить к задаче");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Добавить задачу к �?той �?тране");
DEFINE('_EW_MENU_REPORT_BUG', "�?апи�?ать о баге или �?делать предложение");
DEFINE('_EW_GOALS_COUNTRY', "Страна");

/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Е�?ли хотите, то названи�? �?тран будут в верхнем реги�?тре дл�? фронт�?нде(Пр: GERMANY, UNITED KINGDOM вме�?то Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Врем�? в �?екундах дл�? к�?шировани�? выборке пользователей дл�? фронт�?нда");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "�?ачальное значение в Total: дл�? фронт�?нда. Полезно е�?ли Вы мигрируете из других программ �?тати�?тики. (Пр.: 20000). У�?тановите значение 0 е�?ли Вам �?та функци�? не нужна.");
DEFINE('_EW_DESC_IGNORE_USER', "Игнорировать юзеров из �?того бок�?а. Один на �?трочку. (Пр.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Самый активный юзер за �?егодн�?");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Включить баны на о�?нове �?лов из �?пи�?ка ниже spamword ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "�?аиболее ча�?то в�?тречающие�?�? �?пам �?лова, и�?пользуемые �?пам-ботами. Вы можете и�?пользовать шаблоны зде�?ь, (Пр.: ph?rmac*). Е�?ли в на�?тройках выше данна�? функци�? включена, ExtraWatch проверит введенные в формы �?лова (запро�? HTTP POST) на вашем �?айте �? некоторыми из �?тих �?пам-�?лов. (Применимо не только дл�? форм базирующих�?�? на Joomla �?айтах - форумы, комментарии, также ве�?ьма �?ффективно блокирует �?пам-ботов, которые пытают�?�? под�?тавить �?пам во в�?е возможные формы)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "�?нти-Спам");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "A link in the frontend Users module - allows you to specify an URL, which is open when the user clicks the user name. Must contain the string {user}, which will be replaced by the actual user name. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");



/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Ключева�? фраза");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Мак�?имальное значение в закладке и�?тории (Example: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "В визитах показать только по�?леднюю �?траницу, не в�?е");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "В визитах �?крывать повтор�?ющие�?�? названи�? �?айтов");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Мак�?имальное количе�?тво по�?етителей в и�?тории визитов. Будьте о�?торожны �? �?той на�?тройкой, е�?ли у Ва�? вы�?окий трафик, может очень бы�?тро ра�?ти. В�?егда провер�?йте, �?колько данных и�?тории �?одержит таблица Status");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Сохранить данные в базе при удалении. Выберите �?ту опцию, перед удалением, е�?ли вы делаете обновление и хотите �?охранить ваши данные.");


/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Вы будете получать пи�?ьма �? отчетом за предыдущий день");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Email адре�? куда пер�?ылать отчет");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "В отчет будут включены только те �?троки чей процент выше, чем {value}. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Включить в отчет только <b>один  день �? положительными</b> изменени�?ми, �? результатом выше, чем {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Включить в отчет только <b>один день �? отрицательными </b>  изменени�?ми, �? результатомниже, чем {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна<i>(example: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Включить в отчет только <b>�?емь дней �? положительными</b>  изменени�?ми, �? результатом выше, чем {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Включить в отчет только <b>�?емь дней �? отрицательными</b>  изменени�?ми, �? результатом ниже {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Включить в отчет только <b>тридцать дней �? положительными</b>  изменени�?ми, �? результатом выше, чем {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Включить в отчет только <b>тридцать дней  �? отрицательными</b>  изменени�?ми, �? результатом ниже {value} процент. У�?тановите 0 е�?ли �?та опци�? Вам не нужна <i>(пример: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(функционал в ad-free вер�?ии)</b> Включете �?ту функцию е�?ли хотите добавить атрибут rel='nofollow' к Логотипу и �?�?ылке");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Мк�?имум знаков в почтовом адре�?е. Измен�?йте только е�?ли окно ввода адре�?а �?лишком маленькое");

DEFINE('_EW_MENU_HISTORY', "И�?тори�?");
DEFINE('_EW_MENU_EMAILS', "Почта");
DEFINE('_EW_MENU_STATUS', "Стату�?");
DEFINE('_EW_DESC_BLOCKED', "Эти IPs заблокированы anti-spam");


DEFINE('_EW_HISTORY_VISITORS', "И�?тори�? по�?ещений");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Показывать только %d по�?ледние запи�?и.
                Чтобы изменить �?то значение, идите в �?а�?тройки -&gt; И�?тори�? &amp; Производительно�?ть -&gt; HISTORY_MAX_DB_RECORDS . Будьте о�?торожны, �?та на�?тройка может увеличить нагрузку на �?айт.  ");
DEFINE('_EW_MENU_BUG', "Сообщить о баге");
DEFINE('_EW_MENU_FEATURE', "Запро�?ить ра�?ширение или дополнение");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Ключевое �?лово");

DEFINE('_EW_BLOCKING_UNBLOCK', "разблокировать");
DEFINE('_EW_STATS_KEYPHRASE ', "Ключева�? фраза");
DEFINE('_EW_STATUS_DATABASE', "Database status");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "им�? таблицы");
DEFINE('_EW_STATUS_DATABASE_ROWS', "колонки");
DEFINE('_EW_STATUS_DATABASE_DATA', "данные");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "в�?его");

DEFINE('_EW_EMAIL_REPORTS', "По�?лать пи�?ьмо");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Email отчет �?озданный за вчерашний день.");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Email фильтр значений");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "значение");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "процент");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-дневное изменение");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-дневное изменение");
DEFINE('_EW_EMAIL_REPORTS_30DAY_CHANGE', "30-дневное изменение");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch �?егодн�? заблокировал %d �?памеров, а в�?его: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Заблокированные IP");
DEFINE('_EW_ANTISPAM_SETTINGS', "�?а�?тройка �?нти-Спам");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX нагрузка на трафик");


DEFINE('_EW_HISTORY_PREVIOUS', "назад");
DEFINE('_EW_HISTORY_NEXT', "вперед");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Количе�?тво колонок дл�? �?тран");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Количе�?тво �?трок дл�? �?тран");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Показывать или нет названи�? �?тран");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Показывать флаги перед процентами");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET обратное �?о�?то�?ние");
DEFINE('_EW_GOALS_POST_INVERSED', "POST обратное �?о�?то�?ние");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Title обратное �?о�?то�?ние");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Username обратное �?о�?то�?ние");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Came from обратное �?о�?то�?ние");

DEFINE('_EW_STATS_MAP', "Карта по�?ледних по�?ещений");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Пожалуй�?та введите <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> ключь дл�? про�?мотра карты по�?ледних визиттов:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "ключ");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Пожалй�?та введите рабочий ключ полученный из: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "BAD REQUEST: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Пол�? формы подтверждени�?:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL параметры:");
DEFINE('_EW_VISIT_ADD_PAGE', " Добавить �?траницу к задаче");
DEFINE('_EW_VISIT_BLOCK_IP', " Заблокировать �?тот IP адре�?");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Добавить �?ту форму к задаче");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Добавить �?тот URL параметр как задачу");

DEFINE('_EW_TREND_EMPTY', "Пу�?то");

DEFINE('_EW_NOT_NUMBER', " Внимание: Значение введенное Вами не номер. ExtraWatch не бутет нормально работать!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Это 15-ти дневна�? пробна�? вер�?и�?. Дней о�?тало�?ь: <b>%d</b>. Пожалуй�?та приобретите пожизненную <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch лицензию дл�? Вашего домена</a> дл�? �?той и по�?ледующих вер�?ий.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Ваш пробный период закончил�?�?. Пожалуй�?та приобретите ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Лицензи�? активирована. Большое �?па�?ибо");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Ошибка: лицензионный ключ и домен не �?овпадают.</b><br/>Вы ввели такое же доменное им�? в поле активации как указано ниже? Пожалуй�?та �?в�?жите�?ь: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Ели �?ообщение �?верху Вы видите до�?таточно долго, Ваш рабочий �?айт может быть введен неверно.
                    Откройте components/com_extrawatch/config.php
                   ра�?комментитируйте, и укажите ваш рабочий �?айт. Пример.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Внимание: �?айт в Вашем браузере и Ваш рабочий �?айт в конфигурации: %s и %s не �?овпадают.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Set live site to: %s and continue...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Удалить обратные �?�?ылки");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "База знаний");
DEFINE('_EW_ADMINHEADER_FLOW', "Поток");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Графики");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Компоненты");
DEFINE('_EW_ADMINHEADER_REVIEW', "Обзор");
DEFINE('_EW_ADMINHEADER_WRITE', "�?апи�?ать ");

DEFINE('_EW_FLOW_TRAFFIC', "Поток траффика");
DEFINE('_EW_FLOW_SELECT_PAGE', "Выбор �?траницы:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Root outgoing links count:");
DEFINE('_EW_FLOW_NESTING', "Уровень вложенно�?ти:");
DEFINE('_EW_FLOW_SCALE', "Шкала:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Ad-free вер�?и�?");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Большое Вам �?па�?ибо за помощь!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Реги�?трационный ключ дл�? Вашего домена %s is: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Теперь Вы можете убрать обратные �?�?ылки и ExtraWatch логотип из фронт�?нда в на�?тройках ");


DEFINE('_EW_SIZES_LAST_CHECK', "По�?ледн�?�? проверка проводила�?ь на:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Размер component/module в /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Компонент");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "В�?его:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Размер");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Обновить в�?е");

DEFINE('_EW_SIZEDATABASE_TABLE', "Таблица");
DEFINE('_EW_SIZEDATABASE_SIZE', "Размер");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-дневные изменени�?");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-дневные изменени�?");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-дневные изменени�?");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "нет данных");
DEFINE('_EW_SIZEDATABASE_TOTAL', "В�?его:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Обновить в�?е");
DEFINE('_EW_SIZEMODULES_TOTAL', "В�?его:");
DEFINE('_EW_SIZEMODULES_MODULE', "Модуль");
DEFINE('_EW_SIZEMODULES_SIZE', "Размер");

DEFINE('_EW_SIZES_FILES', "Файлы &amp; Директории");
DEFINE('_EW_SIZES_BYTES', "бит");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Обновить");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Карта по�?ледних по�?ещений ipinfodb.com ключ из: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Группа �?мещени�? ча�?ового по�?�?а");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Обновить");
DEFINE('_EW_MENU_UPDATE_TITLE', "Б�?кап & Обновление");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "�?е до�?тупно в бе�?платной ве�?ии, проверьте закладку �? лицензией");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Спам защита включена");
DEFINE('_EW_SPAMWORD_LIST', "Спи�?ок �?пам �?лов");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Убрать повтор�?ющие�?�? названи�?");
DEFINE('_EW_TRUNCATE_VISITS', "Ограничить по�?ещени�?");
DEFINE('_EW_TRUNCATE_STATS', "Ограницить �?тати�?тику");
DEFINE('_EW_TRUNCATE_GOALS', "Ограничить задачи");
DEFINE('_EW_LIMIT_BOTS', "Огранчить ботов");
DEFINE('_EW_LIMIT_VISITORS', "Органичить по�?етителей");
DEFINE('_EW_TOOLTIP_WIDTH', "Ширина под�?казки");
DEFINE('_EW_TOOLTIP_HEIGHT', "Вы�?ота под�?казки");
DEFINE('_EW_TOOLTIP_URL', "URL под�?казки");
DEFINE('_EW_TOOLTIP_ONCLICK', "Под�?казка по клику");
DEFINE('_EW_IP_STATS', "IP cnnbcnbrf");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB key ");
DEFINE('_EW_ONLY_LAST_URI', "Только по�?ледние URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Спр�?тать Лого в фронт�?нд ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "No Follow дл�? фронт�?нд");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Фронт�?нд без обратных �?�?ылок");
DEFINE('_EW_FRONTEND_USER_LINK', "С�?ылки пользователей");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Фронт�?нд �?траны в начале");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Фронт�?нд �?траны �? названи�?ми");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Фронт�?нд �?траны в верхнем реги�?тре");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Фронт�?нд �?траны влаг в начале");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Фронт�?нд �?траны нумераци�?");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Фронт�?нд �?траны мак�?имум колонок");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Фронт�?нд �?траны мак�?имум �?трок");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "По�?етили");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "По�?етили вчера ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "По�?етили на �?той неделе ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "По�?етили на прошлой неделе ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "По�?етили за �?тот ме�?�?ц ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "По�?етили за прошлый ме�?�?ц");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Скрыть �?колько в�?его по�?етителей");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "�?ачальное значанеие дл�? по�?етителей фронт�?нда");
DEFINE('_EW_HISTORY_MAX_VALUES', "Мак�?имальное значение дл�? и�?тории");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Мак�?имальное количе�?тво запи�?ей дл�? и�?тории");
DEFINE('_EW_UPDATE_TIME_VISITS', "Врем�? обновлени�? по�?ещений");
DEFINE('_EW_UPDATE_TIME_STATS', "Врем�? обновлени�? �?тати�?тики");
DEFINE('_EW_STATS_MAX_ROWS', "Мак�?имум колонок �?тати�?тики");
DEFINE('_EW_STATS_IP_HITS', "Сти�?тика хитов IP");
DEFINE('_EW_MAXID_BOTS', "Мак�?имум ID ботов");
DEFINE('_EW_MAXID_VISITORS', "Мак�?имум ID по�?етителей");
DEFINE('_EW_STATS_KEEP_DAYS', "Хранить �?тати�?тику дней ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "К�?ш �?тран фронт�?нда ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "К�?ш по�?етителей фронт�?нда ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Удалить �?охраненные данные ");
DEFINE('_EW_IGNORE_IP', "Игнорировать IP");
DEFINE('_EW_IGNORE_URI', "Игнорировать URI");
DEFINE('_EW_IGNORE_USER', "Игнорировать пользовател�?");
DEFINE('_EW_BLOCKING_MESSAGE', "Сообщение дл�? заблокированных");
DEFINE('_EW_SERVER_URI_KEY', "URI �?ерверного ключа");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "�?ачальное значение по�?етителей фронт�?нда");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Запи�?и");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Что бы повы�?ить �?ффективно�?ть блокировки, Ван нужно опубликовать ExtraWatch агента ДО заполнени�? форм. Пр. на левой половине Вашего шаблона.
                    <br/>
                    Зайдите в управление модул�?ми -> ExtraWatch agent -> выбрать позицию модул�? - left");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Отчеты");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO �?очные отчеты по Ем�?йл активированы");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "По�?мотрите демо по у�?тановке");

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