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
DEFINE('_EW_MENU_GOALS', "Спецзавданн�?");
DEFINE('_EW_MENU_SETTINGS', "У�?тановки");
DEFINE('_EW_MENU_CREDITS', "Под�?ки");
DEFINE('_EW_MENU_FAQ', "FAQ");
DEFINE('_EW_MENU_DOCUMENTATION', "Документаці�?");
DEFINE('_EW_MENU_LICENSE', "Ліцензі�?");
DEFINE('_EW_MENU_DONATORS', "Спон�?ори");
DEFINE('_EW_MENU_SUPPORT', "Дл�? видаленн�? рекламного �?паму з бекенда заплатіть роші ExtraWatch ))).");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "О�?танні відвідувачі");
DEFINE('_EW_VISITS_BOTS', "Боти");
DEFINE('_EW_VISITS_CAME_FROM', "Перейшов з...");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Ваш ExtraWatch модуль не опубліковано! �?ової �?тати�?тики запи�?ано не буде. Дл�? публікації, зайдіть в закладку керуванн�? модул�?ми і опублікуйте модуль дл�? в�?іх �?торінок, де Ви хочете бачити �?тати�?тику");
DEFINE('_EW_VISITS_PANE_LOADING', "Завантажуємо відвідувачів...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "Стати�?тика відвідувань за тиждень");
DEFINE('_EW_STATS_WEEK', "Тиждень");
DEFINE('_EW_STATS_THIS_WEEK', "Цей тиждень");
DEFINE('_EW_STATS_UNIQUE', "Унікальних");
DEFINE('_EW_STATS_LOADS', "Завантажень");
DEFINE('_EW_STATS_HITS', "Хітів");
DEFINE('_EW_STATS_TODAY', "Сьогодні");
DEFINE('_EW_STATS_FOR', "За");
DEFINE('_EW_STATS_ALL_TIME', "За ве�?ь ча�?");
DEFINE('_EW_STATS_EXPAND', "Розгорнути");
DEFINE('_EW_STATS_COLLAPSE', "Згорнути");
DEFINE('_EW_STATS_URI', "Сторінки");
DEFINE('_EW_STATS_COUNTRY', "Країна");
DEFINE('_EW_STATS_USERS', "Кори�?тувачі");
DEFINE('_EW_STATS_REFERERS', "Переходи");
DEFINE('_EW_STATS_IP', "IP адре�?и");
DEFINE('_EW_STATS_BROWSER', "Браузери");
DEFINE('_EW_STATS_OS', "ОС");
DEFINE('_EW_STATS_KEYWORDS', "Ключові �?лова");
DEFINE('_EW_STATS_GOALS', "Спецзавданн�?");
DEFINE('_EW_STATS_TOTAL', "В�?ього");
DEFINE('_EW_STATS_DAILY', "За день");
DEFINE('_EW_STATS_DAILY_TITLE', "Стати�?тика за день");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Стати�?тика за ве�?ь ча�?");
DEFINE('_EW_STATS_LOADING', "завантаженн�? ...");
DEFINE('_EW_STATS_LOADING_WAIT', "завантаженн�? ... зачекайте");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP Блокуванн�?");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Введіть IP вручну");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Введіть IP �?кий хочете заблокувати. (�?априклад 217.242.11.54 або 217 .* або 217.242 .* дл�? блокуванн�? в�?іх IP вход�?ть до підмережа)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "�?а�?правді заблокувати");
DEFINE('_EW_STATS_PANE_LOADING', "Завантажуємо �?тати�?тику ...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "Опції");
DEFINE('_EW_SETTINGS_DEFAULT', "За замовчуванн�?м");
DEFINE('_EW_SETTINGS_SAVE', "Зберегти");
DEFINE('_EW_SETTINGS_APPEARANCE', "Зовнішній вигл�?д");
DEFINE('_EW_SETTINGS_FRONTEND', "Frontend");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "І�?торі�? та продуктивні�?ть");
DEFINE('_EW_SETTINGS_ADVANCED', "Додатково");
DEFINE('_EW_SETTINGS_IGNORE', "Ігнорувати");
DEFINE('_EW_SETTINGS_BLOCKING', "Блокуванн�?");
DEFINE('_EW_SETTINGS_EXPERT', "Ек�?перт");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Ви дій�?но хочете �?терти ВСЮ �?тати�?тику?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Стерти в�?е");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Стерти в�?ю �?тати�?тику і дані відвідувачів");
DEFINE('_EW_SETTINGS_LANGUAGE', "Мова");
DEFINE('_EW_SETTINGS_SAVED', "Опції були збережені");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Можете додати �?вій IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "до �?пи�?ку.");

// Other / mostly general.
DEFINE('_EW_TITLE', "AJAX монітор joomla в реальному ча�?і");
DEFINE('_EW_BACK', "�?азад");
DEFINE('_EW_ACCESS_DENIED', "До�?туп заборонено!");
DEFINE('_EW_LICENSE_AGREE', "Я згоден з у�?іма правилами, наведеними вище");
DEFINE('_EW_LICENSE_CONTINUE', "Продовжити");
DEFINE('_EW_SUCCESS', "Операці�? пройшла у�?пішно");
DEFINE('_EW_RESET_SUCCESS', "В�?�? �?тати�?тика у�?пішно знищена");
DEFINE('_EW_RESET_ERROR', "Помилка у видаленні даних");
DEFINE('_EW_CREDITS_TITLE', "Под�?ки");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Щоденна та щотижнева �?тати�?тика по...");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX до�?туп заборонений: Будь ла�?ка перегл�?дайте �?тати�?тику з домену, вказаного в configuration.php joomla -");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Може ви забули набрати www. на початку �?вого доменного імені. Ваш javascript намагаєть�?�? отримати до�?туп до");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "з");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "це змушує його думати що це інший домен.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Отримай о�?танні оновленн�? з");
DEFINE('_EW_HEADER_CAST_YOUR', "Віддай �?вій");
DEFINE('_EW_HEADER_VOTE', "голо�?");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Кликни дл�? виведенн�? вікна додаткової інформації");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "�?аведіть мишку дл�? виведенн�? вікна додаткової інформації");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "Вчорашні збільшенн�?");
DEFINE('_EW_TOOLTIP_HELP', "Відкрити зовнішню он-лайн допомогу дл�?");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Закрити це вікно");
DEFINE('_EW_TOOLTIP_PRINT', "Роздрукувати");

// Goals.
DEFINE('_EW_GOALS_INSERT', "В�?тавити нове �?пецзавданн�?");
DEFINE('_EW_GOALS_UPDATE', "Поновити no. �?пецзавданн�?");
DEFINE('_EW_GOALS_ACTION', "Ді�?");
DEFINE('_EW_GOALS_TITLE', "�?ове �?пецзавданн�?");
DEFINE('_EW_GOALS_NEW', "�?ове �?пецзавданн�?");
DEFINE('_EW_GOALS_RELOAD', "Перезавантажити");
DEFINE('_EW_GOALS_ADVANCED', "Додатково");
DEFINE('_EW_GOALS_NAME', "Ім'�?");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "URI умова");
DEFINE('_EW_GOALS_GET_VAR', "GET змінна");
DEFINE('_EW_GOALS_GET_CONDITION', "GET умова");
DEFINE('_EW_GOALS_POST_VAR', "POST Змінна");
DEFINE('_EW_GOALS_POST_CONDITION', "POST Умова");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Title Умова");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Username умова");
DEFINE('_EW_GOALS_IP_CONDITION', "IP Умова");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Перейшов з умови");
DEFINE('_EW_GOALS_BLOCK', "Блокуванн�?");
DEFINE('_EW_GOALS_REDIRECT', "Преадре�?аці�? на URL");
DEFINE('_EW_GOALS_HITS', "Хітів");
DEFINE('_EW_GOALS_ENABLED', "Включено");
DEFINE('_EW_GOALS_EDIT', "Редагувати");
DEFINE('_EW_GOALS_DELETE', "Видалити");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Ви втратите в�?ю недавню �?тати�?тику дл�? цього �?пецзавданн�?. Ви правда хочете видалити no цього �?пецзавданн�?.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Країни");
DEFINE('_EW_FRONTEND_VISITORS', "Відвідувачі");
DEFINE('_EW_FRONTEND_TODAY', "Сьогодні");
DEFINE('_EW_FRONTEND_YESTERDAY', "Вчора");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Цього тижн�?");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Минулого тижн�?");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Цього мі�?�?ц�?");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Минулого мі�?�?ц�?");
DEFINE('_EW_FRONTEND_TOTAL', "В�?ього");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch в режимі налагодженн�?. Таким чином легше знайти помилки додатка.Щоб вимкнути, змініть змінну EXTRAWATCH_DEBUG в / components / com_extrawatch / config.php з 1 на 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Мак�?имальна кількі�?ть р�?дків �?тати�?тики в розкритому режимі.");
DEFINE('_EW_DESC_STATS_IP_HITS', "В�?і IP адре�?и, у �?ких менше хітів в попередні дні, ніж це значенн�?, будуть видалені з IP і�?торії.");
DEFINE('_EW_DESC_STATS_URL_HITS', "В�?і URL, у �?ких менше хітів в попередні дні ніж це значенн�?, будуть видалені з і�?торії URL.");
DEFINE('_EW_DESC_IGNORE_IP', "Можна виключити певний IP з �?тати�?тики. Кожен адре�?а повинна починати�?�? з нового р�?дка. У цій на�?тройці можете викори�?товувати групові �?имволи. �?априклад 192 .* проігнорує 192.168.51.31, 192.168.16.2, і т.д.");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Ча�? оновленн�? �?тати�?тики по відвідувачам у мілі�?екундах, за замовчуванн�?м - 2000, будьте обережні з цим значенн�?м. Пі�?л�? зміни обновіть �?торінку бекенда ExtraWatch.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Ча�? оновленн�? загальної �?тати�?тики в мілі�?екундах, за замовчуванн�?м - 4000, будьте обережні з цим значенн�?м. Пі�?л�? зміни обновіть �?торінку бекенда ExtraWatch.");
DEFINE('_EW_DESC_MAXID_BOTS', "Скільки відвідувань ботів зберігати в базі даних.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Скільки реальних відвідувань зберігати в базі даних.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Скільки реальних відвідувань хочемо бачити в бекенді.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Скільки ботів хочемо бачити в бекенді.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Мак�?имальна кількі�?ть знаків, �?кі відображають�?�? в заголовках та URL.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Мак�?имальна кількі�?ть знаків, �?кі відображають�?�?в правій панелі �?тати�?тики.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Днів зберігати �?тати�?тику в базі даних, 0 = не�?кінченно.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Коли ви перебуваєте в різних ча�?ових зонах, ніж ваш хо�?тинг-�?ервер. (Позитивне або негативне значенн�?)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Компен�?аці�? тижн�?, тимча�?овий шаблон / (3600 * 24 * 7) починаєть�?�? з тижн�? 1.1.1970, ц�? компен�?аці�? коригує дл�? того щоб почати з понеділка.");
DEFINE('_EW_DESC_DAY_OFFSET', "Компен�?аці�? дн�?, тимча�?овий шаблон / (3600 * 24 * 7) починаєть�?�? з дн�? 1.1.1970, ц�? компен�?аці�? коригує дл�? того щоб почати з 00:00.");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Викори�?товувати порожню іконку 1x1px icon в фронтендах замі�?ть значка ExtraWatch.");
DEFINE('_EW_DESC_IP_STATS', "Дл�? включенн�? �?тати�?тики IP адре�?. У де�?ких країнах тривале зберіганн�? IP адре�? в базах даних заборонено законом. Викори�?товуєте на �?вій �?трах і ризик.");
DEFINE('_EW_DESC_HIDE_ADS', "Цей параметр приховує рекламний блок у бекендах, вимкнiть �?кщо він Ва�? дій�?но ді�?тав. �?ле залишаючи його включеним, Ви підтримуєте матеріально розробників продукту. Велике �?па�?ибі, що вирішили не виключати.");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Зніміть цю позначку �?кщо хочете щоб доп.інфо вікно з�?вл�?ло�?�? за наведенн�?м мишки, або залишити позначку дл�? виклику вікна кліком.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "За замовчуванн�?м це 'REDIRECT_URL', це нормально, �?кщо Ви викори�?товуєте ли�?туванн�? URL (sef), може бути змінено на 'SCRIPT_URL' �?кщо викори�?товувати лог тільки дл�? index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Повідомленн�? �?ке побачить кори�?тувач, �?кого ви заблокували за допомогою ExtraWatch.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Ширина popup вікна з доп.інфо");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Ви�?ота popup вікна з доп.інфо");
DEFINE('_EW_DESC_TOOLTIP_URL', "Ви можете вве�?ти URL Whois пошукача тут, дл�? візуалізації ip відвідувачів. (Ip) замінюєть�?�? на ip відвідувача при нати�?ненні на кнопку додаткової інформації . �?априклад http://somewebsite.com/query?iplookup = (ip ) За замовчуванн�?м це http://www.netip.de/search?query = (ip) ");
DEFINE('_EW_DESC_IGNORE_URI', "Ви можете вибрати тип URI �?кий буде проігноровано в �?тати�?тиці. Ви можете викори�?товувати знаки під�?тановки (* і?). �?априклад.: / Freel? N * або / guestbook, або / будь�?каважливадиректорi�?_dir / do_not_log_this.html, або навіть. php щоб виключити. php файли ");
DEFINE('_EW_DESC_GOALS_NAME', "�?айменуванн�? �?пецзавданн�?. Воно буде відображати�?�? в �?тати�?тиці.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "В�?е що пі�?л�? вашого доменного імені. Дл�? http://www.codegravity.com/projects/ URI це: / projects / (Приклад: <b> / projects * </b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET мінлива це змінна, �?ку Ви можете звичайно бачити в URL пі�?л�? ? або & знаків. �?априклад http: / / www.codegravity.com / index.php? <u> Name </u> = peter & <u> surname </u> = smith. Ви також можете викори�?товувати <u> * </u> у цьому полі, щоб перегл�?нути в�?і отримані значенн�?. (�?априклад: <b> n * me </b>) ");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Тут Ви повинні визначити потрiбну відповідні�?ть дл�? значенн�? з попереднього пол�?. (�?априклад: <b> p? T * r </b>)");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Дуже �?хоже, але ми перевір�?ємо значенн�? отримані з форм. Так, коли у Ва�? є форма на вашому веб-�?айті, у �?кого є поле &lt;input type = 'text' name = '<u> experiences </u> '/&gt;. (�?априклад: <b> exper * ces </b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Відповідні�?ть значенню з цього POST пол�?. �?априклад ми хочемо перевірити, чи є у кори�?тувача події java. (�?априклад: <b> * java * </b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Заголовок �?торінки, �?ка повинна відповідати. (Приклад: <b> * freelance programmers * </b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Ім'�? кори�?тувача, �?кий залогiнив�?�?. (Приклад: <b> psmith * </b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "IP з �?кого перейшов кори�?тувач: (Приклад: <b> 201.9 ?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "Який�?ь URL з �?кого перейшов кори�?тувач. (Приклад: <b> * www.google .* </b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Кори�?тувач перемі�?тить�?�? на URL вказаний Вами. Має більш ви�?окий пріоритет ніж 'блокуванн�?': (приклад: <b> http://www.codegravity.com/goaway.html </b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "How many chars to truncate in goals table");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "По�?иланн�? на codegravity.com, можете її вимкнути, �?ЛЕ ми б попро�?или Ва�? її там залишити. Спа�?ибi");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Відображенн�? прапорів і процентного �?піввідношенн�? країн відвідувачів в фронтетдi. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Якщо хочете змінити положенн�? р�?дків Відвідувачі / Країни в модулі фронтенд. Зніміть позначку, і Відвідувачі будуть показані першими.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Кількі�?ть країн �?кі відображають�?�? в фронтенді");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Відображенн�? кілько�?ті відвідувачів у фронтендi по дн�?х, тижн�?х і мі�?�?ц�?х. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Ча�? житт�? кешу в �?екундах дл�? країн відвідувачів відображають�?�? модулем фронтенд");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Ча�? житт�? кешу в �?екундах дл�? відвідувачів відображають�?�? модулем фронтенд");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Відображенн�? кілько�?ті відвідувачів у фронтендів модулі дл�?: Сегодн�?. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: Вчора. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ..");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: �?а цьому тижні. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: Минулого тижн�?. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: У цьому мі�?�?ці. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: Минулого мі�?�?ц�?. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Відображенн�? кілько�?ті відвідувачів у фронтенд модулі дл�?: В�?ього. Якщо змінено, значенн�? змінить�?�? тільки пі�?л�? ча�?у зазначеного в CACHE_FRONTEND_ ...");
DEFINE('_EW_DESC_LANGUAGE', "Викори�?таний мовний файл. Файл знаходить�?�? / components / com_extrawatch / lang / Можете змінити його і перейменувати в �?лбан�?ька наприклад ...");
DEFINE('_EW_DESC_GOALS', "Спецзавданн�? дозвол�?ють Вам визначати �?пеціальні параметри. Коли ці параметри задані, лічильник �?пецзавдань буде збільшувати�?�?. Таким чином Ви можете контролювати, чи відвідав кори�?тувач вказаний URL, відправив певне значенн�?, має певне ім'�? кори�?тувача або перейшов з певної адре�?и. Ви можете також заблокувати або переадре�?увати таких кори�?тувачів на будь-�?кий інший URL. ");
DEFINE('_EW_DESC_GOALS_INSERT', "У в�?іх обла�?т�?х окрім назви Ви можете викори�?товувати * та ? �?к знаки під�?тановки. �?априклад: ? Ear (буде відповідати: near, tear, ..), p * r (буде відповідати: pr, peer, pear ..)");
DEFINE('_EW_DESC_GOALS_BLOCK', "В�?тановити в 1, �?кщо Ви хочете, щоб відвідувач був заблокований. Він не буде бачити іншу ча�?тину змі�?ту, тільки повідомленн�?, що він був заблокований - без будь-�?кої переадре�?ації, і його IP доданий до 'блокіровка' �?тати�?тикою ( �?априклад: <b> 1 </b>) ");

/* New translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Умови країни");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "2-буквенний код країни великими лiтерами (Eg: <b> TH </b>)");
DEFINE('_EW_STATS_INTERNAL', "Внутрiшнiй");
DEFINE('_EW_STATS_FROM', "От");
DEFINE('_EW_STATS_TO', "До");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Додати цiль");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Додати цiль до цiєї країни");
DEFINE('_EW_MENU_REPORT_BUG', "Повiдомити про помилки та можливо�?тi");
DEFINE('_EW_GOALS_COUNTRY', "Країна");

/* Translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Якщо Ви хочете щоб назви країн були великими лiтерами у фронтендi (Приклад: �?iМЕЧЧИ�?�?, СПОЛУЧЕ�?Е КОРОЛiВСТВО замi�?ть �?iмеччина, Сполучене Kоролiв�?тво)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Ча�? у �?екундах щоб зробити вибiрку кори�?тувачiв у фронтендi");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Початкові значенн�?, наведенi в цілому: у фронтендi. Кори�?но коли Ви переходите з iнших за�?обiв �?тати�?тики. (Приклад: 20000). Повернiть�?�? до значенн�? 0 �?кщо Ви не викори�?товуєте цю можливi�?ть.");
DEFINE('_EW_DESC_IGNORE_USER', "Iгнорувати кори�?тувачiв �?кi вказані у цьому тек�?тi. По одному у р�?дку. (Приклад: �? (р�?док) mark_ *)");
DEFINE('_EW_FRONTEND_USERS_MOST', "�?айбільш активні кори�?тувачі �?ьогодні від загальної кілько�?ті");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Включити заборони на о�?нові �?лів зі нижчерозташованого �?пи�?ку �?пам�?лів");
DEFINE('_EW_DESC_SPAMWORD_LIST', "�?айбільш ча�?то уживані �?пам-ботами �?пам-�?лова. Ви можете викори�?товувати знаки пiд�?тановки тут, (Приклад: ph? Rmac *). Якщо налаштуванн�?, �?ке вказано вище, до�?тупне, ExtraWatch перевiрить чи атакуючий заповнив форму ( HTTP POST запит) на вашому веб-�?айтi з декiлькома цими �?пам �?ловами. (За�?то�?овуєть�?�?, �?кщо форму завантажує тільки Joomla-�?айт - форум, коментарі, але є цілком ефективним за�?обом дл�? блокуванн�? �?пам-ботів, �?кі намагають�?�? заповнити в�?і можливі форми) ");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "A link in the frontend Users module - allows you to specify an URL, which is open when the user clicks the user name. Must contain the string {user}, which will be replaced by the actual user name. (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Ключові фрази");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Мак�?имальні значенн�? в і�?торії вкладці (Приклад: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "У візити показують тільки о�?танню �?торінку відвідали, не в�?і");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "У відвідувань приховувати повторювані назви �?айту в відвіданою �?торінки назва");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Мак�?имальна Кількі�?ть відвідувачів, щоб мати в базі даних дл�? Відвідати і�?торії. Будьте обережні з цією опцією, �?кщо у ва�? ви�?окий трафік, вона може ро�?ти дуже швидко. Завжди перевір�?йте, �?кільки даних і�?торії таблиц�? мі�?тить в �?тату�?і.");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Тримайте таблиць бази даних на видаленні. Виберіть цю опцію, перш ніж видалити, �?кщо ви робите оновленн�? і хочете зберегти ваші дані.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Ви будете отримувати нічні ли�?ти зі звітів за попередній день, �?кий Ви бачите на ранок");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Email адре�?а, на �?ку ви будете отримувати ці повідомленн�?");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Тільки включає р�?дки в електронній пошті звіти, де від�?оток вище, ніж значенн�? {}. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Тільки включати <b>позитивний один день</b> змінювати значенн�? в звітах електронної пошти вище, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Тільки включатиe <b>негативні один день</b> змінювати значенн�? в звітах електронної пошти нижче, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Тільки включати<b>позитивні �?ім днів</b>змінювати значенн�? в звітах електронної пошти вище, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Тільки включати <b>негативне �?ім днів</b> змінювати значенн�? в звітах електронної пошти нижче, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Тільки включати <b>позитивні тридц�?ть день</b> змінювати значенн�? в звітах електронної пошти вище, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Тільки включати<b>негативні тридц�?ть день</b> змінювати значенн�? в звітах електронної пошти нижче, ніж {} значенн�? від�?отка. В�?тановіть у 0, �?кщо ви не хочете викори�?товувати цю функцію <i>(приклад: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(функціонал в ПРО-вер�?ії)</b> Увімкніть цей параметр, �?кщо ви хочете зробити логотип по�?иланн�?м відображаєть�?�? з атрибутом rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Мак�?имум �?имволів електронної пошти ім'�? по�?піль. Змініть це, �?кщо ваш поштовий клієнт вікні повідомлень занадто малий");

DEFINE('_EW_MENU_HISTORY', "І�?торі�?");
DEFINE('_EW_MENU_EMAILS', "Ли�?ти");
DEFINE('_EW_MENU_STATUS', "Стату�?");
DEFINE('_EW_DESC_BLOCKED', "Ці IP-адре�?и були заблоковані анти-�?пам");


DEFINE('_EW_HISTORY_VISITORS', "Відвідувачі І�?торі�?");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Показані тільки %d о�?танні запи�?и.
                Щоб змінити це значенн�?, перейдіть в розділ �?алаштуванн�? -&gt; І�?торі�? &amp; Продуктивні�?ть -&gt; HISTORY_MAX_DB_RECORDS .Будьте обережні, цей параметр впливає на ча�? завантаженн�? даних нижче.  ");
DEFINE('_EW_MENU_BUG', "Повідомити про помилку");
DEFINE('_EW_MENU_FEATURE', "Запит функцій");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Ключові �?лова");

DEFINE('_EW_BLOCKING_UNBLOCK', "відкрити");
DEFINE('_EW_STATS_KEYPHRASE ', "Ключову фразу");
DEFINE('_EW_STATUS_DATABASE', "База даних �?тату�?");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "ім'�? таблиці");
DEFINE('_EW_STATUS_DATABASE_ROWS', "р�?дків");
DEFINE('_EW_STATUS_DATABASE_DATA', "дані");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "загальний");

DEFINE('_EW_EMAIL_REPORTS', "Звіти по електронній пошті");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Згенеровано фільтруєть�?�? електронній пошті звіт з учорашнього дн�?");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Фільтри електронної пошти Значенн�?");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "значенн�?");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "від�?оток");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1-день зміни");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7-день зміни");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28-день зміни");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch заблокувало %d Спамер Сьогодні хіти, загальна: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Заблоковані IP �?дре�?и");
DEFINE('_EW_ANTISPAM_SETTINGS', "�?нти-Спам �?а�?тройки");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX оновлень трафіку");


DEFINE('_EW_HISTORY_PREVIOUS', "попередній");
DEFINE('_EW_HISTORY_NEXT', "на�?тупний");


/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Кількі�?ть �?товпців країн");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Кількі�?ть р�?дків країн");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Відображенн�? назви країн чи ні");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Показати прапори, а потім від�?отки");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "GET зворотне �?тан");
DEFINE('_EW_GOALS_POST_INVERSED', "POST зворотне �?тан");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Title зворотне �?тан");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Username зворотне �?тан");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Came from зворотне �?тан");

DEFINE('_EW_STATS_MAP', "О�?таннє карти Відвідати");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Будь ла�?ка, введіть <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> дл�? відображенн�? о�?таннього візиту мапі:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "store key");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "будь ла�?ка, введіть дій�?ний ipinfodb ключ, �?кий ви отримали від: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "BAD REQUEST: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "пред�?тавлені полів форми:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL пред�?тавлені полів форми:");
DEFINE('_EW_VISIT_ADD_PAGE', " Додати �?торінку в �?ко�?ті мети");
DEFINE('_EW_VISIT_BLOCK_IP', " Блок цю IP-адре�?у");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Додати в пред�?тавленому вигл�?ді змінної �?к мета");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Додати URL параметр, �?к мета");

DEFINE('_EW_TREND_EMPTY', "Порожній");

DEFINE('_EW_NOT_NUMBER', " ПОПЕРЕДЖЕ�?�?Я: Введене значенн�? не є чи�?лом. ExtraWatch не буде працювати належним чином!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Це 15-денна ознайомлювальна вер�?і�?. Залишило�?ь днів: <b>%d</b>. Будь ла�?ка, придбайте житт�? <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch Ліцензі�? дл�? вашого домену</a> дл�? цього і на�?тупних вер�?і�?х.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Ваше демо-вер�?ії закінчив�?�?. Будь ла�?ка, придбайте ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Ліцензі�? у�?пішної активації. Спа�?ибі");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b> Помилка: ліцензійний ключ і ваш домен не збігають�?�?.</b><br/>Ви ввели той же ім'�? домену в форму активації, �?к той, �?кий ви бачите нижче? Будь ла�?ка, зв'�?жіть�?�? з: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Якщо ви бачите повідомленн�? вище занадто довго, веб-�?айту та можуть бути неправильними.
                    Open the components/com_extrawatch/config.php
                    розкоментувати, і в�?тановити фактичний живий �?айт. Eg.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Попередженн�? :�?айта у вашому браузері і живий �?айт в конфігурації: %s and %s не збігають�?�?.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "В�?тановити жити �?айту: %s і продовжити...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Видалити зворотних");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "База знань");
DEFINE('_EW_ADMINHEADER_FLOW', "Потік");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Графіки");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Компоненти");
DEFINE('_EW_ADMINHEADER_REVIEW', "Огл�?д");
DEFINE('_EW_ADMINHEADER_WRITE', "�?апи�?ати ");

DEFINE('_EW_FLOW_TRAFFIC', "Tран�?портний потік");
DEFINE('_EW_FLOW_SELECT_PAGE', "Вибрати �?торінку:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Коренева вихідних враховують по�?иланн�?:");
DEFINE('_EW_FLOW_NESTING', "Рівень вкладено�?ті:");
DEFINE('_EW_FLOW_SCALE', "Ма�?штаб:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Ad-безкоштовну вер�?ію");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Спа�?ибі вам велике за ваше пожертвуванн�?!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Реє�?траційний ключ дл�? вашого домену %s є: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Тепер ви можете видалити або приховати зворотного ExtraWatch логотип в інтерфей�?і від налаштуванн�? ");


DEFINE('_EW_SIZES_LAST_CHECK', "О�?танн�? перевірка була виконана:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Size of component/module in /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Компонент");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Загальний:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Розмір");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Оновити в�?е");

DEFINE('_EW_SIZEDATABASE_TABLE', "Стіл");
DEFINE('_EW_SIZEDATABASE_SIZE', "озмір");
DEFINE('_EW_SIZEDATABASE_1DAY', "1-День змін");
DEFINE('_EW_SIZEDATABASE_7DAY', "7-День змін");
DEFINE('_EW_SIZEDATABASE_28DAY', "28-День змін");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "немає даних");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Загальний:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Оновити в�?е");
DEFINE('_EW_SIZEMODULES_TOTAL', "Загальний:");
DEFINE('_EW_SIZEMODULES_MODULE', "Модуль");
DEFINE('_EW_SIZEMODULES_SIZE', "Розмір");

DEFINE('_EW_SIZES_FILES', "Файли &amp; Каталоги");
DEFINE('_EW_SIZES_BYTES', "bytes");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Оновленн�?");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by Матей Коваль");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "О�?танній візит map ipinfodb.com key from: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Force Timezone Offset");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Оновленн�?");
DEFINE('_EW_MENU_UPDATE_TITLE', "Резервне копіюванн�? і відновленн�?");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "�?едо�?тупний у безкоштовній вер�?ії, будь ла�?ка, перевірте ліцензію вкладці");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Спам �?лова Пан Включити");
DEFINE('_EW_SPAMWORD_LIST', "Спам Спи�?ок �?лів");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Приховати Повторювані �?азва");
DEFINE('_EW_TRUNCATE_VISITS', "Truncate відвідувань");
DEFINE('_EW_TRUNCATE_STATS', "Truncate Стати�?тика");
DEFINE('_EW_TRUNCATE_GOALS', "Truncate Цілі");
DEFINE('_EW_LIMIT_BOTS', "Гранична bots");
DEFINE('_EW_LIMIT_VISITORS', "Гранична Відвідувачі");
DEFINE('_EW_TOOLTIP_WIDTH', "Ширина Tooltip");
DEFINE('_EW_TOOLTIP_HEIGHT', "Ви�?ота Tooltip");
DEFINE('_EW_TOOLTIP_URL', "Tooltip URL");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip OnClick");
DEFINE('_EW_IP_STATS', "IP-�?тати�?тику");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB key ");
DEFINE('_EW_ONLY_LAST_URI', "Тільки в минулому URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Фронт Логотип �?ховати End ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Front End No Follow");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Front End �?Е зворотне по�?иланн�?");
DEFINE('_EW_FRONTEND_USER_LINK', "Фронт по�?иланн�? кори�?тувача");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Фронт країн Кінець першої");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Front End Країни Ім'�?");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Front End Countreis Верхній регі�?тр");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Фронт Країни Кінець прапора першого ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Front End Країни Кількі�?ть");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Front End Країни Мак�? Стовпці");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Front End Країни Мак�? Р�?дки");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Front End Відвідувачів �?ьогодні ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Front End Відвідувачі Вчора ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "Front End Відвідувачі цього тижн�? ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "Front End Відвідувачі Минулого тижн�? ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "Front End Відвідувачі цього мі�?�?ц�?");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "Front End Відвідувачі за о�?танній мі�?�?ць");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Front End Приховати Відвідувачі В�?ього");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Front End У�?ього Початкові");
DEFINE('_EW_HISTORY_MAX_VALUES', "Цінно�?ті І�?торі�? Мак�?а");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "І�?торі�? Мак�?а запи�?ів");
DEFINE('_EW_UPDATE_TIME_VISITS', "Ча�? оновленн�? відвідувань");
DEFINE('_EW_UPDATE_TIME_STATS', "Ча�? оновленн�? �?тати�?тика");
DEFINE('_EW_STATS_MAX_ROWS', "Стати�?тика Мак�? р�?дків");
DEFINE('_EW_STATS_IP_HITS', "Стати�?тика хітів IP");
DEFINE('_EW_MAXID_BOTS', "Max ID bots");
DEFINE('_EW_MAXID_VISITORS', "Max id відвідувачі");
DEFINE('_EW_STATS_KEEP_DAYS', "Стати�?тика Тримайте днів");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Кеш Країни Front End ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Кеш Відвідувачі Front End ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Видаленн�? Зберігати дані ");
DEFINE('_EW_IGNORE_IP', "Ігнорувати IP");
DEFINE('_EW_IGNORE_URI', "Ігнорувати URI");
DEFINE('_EW_IGNORE_USER', "Ігнорувати Кори�?тувач");
DEFINE('_EW_BLOCKING_MESSAGE', "Блокуванн�? повідомлень");
DEFINE('_EW_SERVER_URI_KEY', "Сервер URI ключ");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Фронт Відвідувачі Кінець В�?ього Початкові");
DEFINE('_EW_SIZEDATABASE_RECORDS', "блік");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Дл�? того, щоб блокуванн�? ефективним, необхідно опублікувати ExtraWatch агента до будь-�?кого змі�?ту чи форми. �?априклад. на лівій �?тороні у вашому шаблоні.
                    <br/>
                    Go to Module Manager -> ExtraWatch agent -> оберіть позицію лівого");
DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Звіти");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Nightly електронною поштою повідомленн�? дозволені");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Годинники у�?тановки демо-");

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