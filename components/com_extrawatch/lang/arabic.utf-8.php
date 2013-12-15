<?php

/**
 * ExtraWatch - برنامج جوملا للمتابعة ال�?ورية والحصول على بيانات المواقع مباشرةً
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - جميع الحقوق مح�?وظة!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('تصريح حصري');

//ExtraWatch مل�? اللغة - لعمل مل�? خاص للغة, �?قط قم بنسخ مل�? (english.php) إلى eg. german.php وقم بوضعه �?ي./components/com_extrawatch/lang/

// القائمة الرئيسية.
DEFINE('_EW_MENU_STATS', "بيانات �?ورية");
DEFINE('_EW_MENU_GOALS', "أهدا�?");
DEFINE('_EW_MENU_SETTINGS', "إعدادات");
DEFINE('_EW_MENU_CREDITS', "أسماء المشر�?ين");
DEFINE('_EW_MENU_FAQ', "أسئلة متكررة");
DEFINE('_EW_MENU_DOCUMENTATION', "تدوين");
DEFINE('_EW_MENU_LICENSE', "ترخيص");
DEFINE('_EW_MENU_DONATORS', "المساندين");
DEFINE('_EW_MENU_SUPPORT', "أخرج إعلاناتم من مخرجات البرنامج ExtraWatch ساند");


// الإطار الشمالي للزوار ال�?وريين.
DEFINE('_EW_VISITS_VISITORS', "أحدث نسخة");
DEFINE('_EW_VISITS_BOTS', "روبوت");
DEFINE('_EW_VISITS_CAME_FROM', "أتى من");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "لم يتم نشر الوحدة النمطية بعد! لم يتم تسجيل أية بيانات ، للنشر توجه إلى قطاع الوحدات النمطية وقم بنشر وحدك النمطية �?ي كل الص�?حات");
DEFINE('_EW_VISITS_PANE_LOADING', "جاري تحميل الزيارات");

// إطار البيانات والإحصاءات على اليمين.
DEFINE('_EW_STATS_TITLE', "بيانات الزيارات للأسبوع");
DEFINE('_EW_STATS_WEEK', "أسبوع");
DEFINE('_EW_STATS_THIS_WEEK', "هذا الأسبوع");
DEFINE('_EW_STATS_UNIQUE', "�?ريد");
DEFINE('_EW_STATS_LOADS', "تحميلات");
DEFINE('_EW_STATS_HITS', "عدد الزيارات");
DEFINE('_EW_STATS_TODAY', "لبيوم");
DEFINE('_EW_STATS_FOR', "لأجل");
DEFINE('_EW_STATS_ALL_TIME', "�?وري");
DEFINE('_EW_STATS_EXPAND', "توسيع");
DEFINE('_EW_STATS_COLLAPSE', "طي");
DEFINE('_EW_STATS_URI', "ص�?حات");
DEFINE('_EW_STATS_COUNTRY', "دول");
DEFINE('_EW_STATS_USERS', "مستخدمين");
DEFINE('_EW_STATS_REFERERS', "المرجعات");
DEFINE('_EW_STATS_IP', "بروتوكولات الإنترنت");
DEFINE('_EW_STATS_BROWSER', "المتص�?حات");
DEFINE('_EW_STATS_OS', "نظم التشغيل");
DEFINE('_EW_STATS_KEYWORDS', "كلمات مرشدة");
DEFINE('_EW_STATS_GOALS', "أهدا�?");
DEFINE('_EW_STATS_TOTAL', "مجموع كلي");
DEFINE('_EW_STATS_DAILY', "يومي");
DEFINE('_EW_STATS_DAILY_TITLE', "بيانات يومية");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "بيانات �?ورية");
DEFINE('_EW_STATS_LOADING', "جاري التحميل");
DEFINE('_EW_STATS_LOADING_WAIT', "جاري التحميل برجاء الانتظار");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "منع بروتوكول الإنترنت");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "الدخول إلى بروتوكول الإنترنت يدوياً");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "أدخل رقم الحاسوب المرغوب منع دخوله (على سبيل المثال 217.242.11.54 أو 217.242. لمنع دخول كل العناوين المطابقة لحرو�? الإحلال");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "إبدال منع");
DEFINE('_EW_STATS_PANE_LOADING', "تحميل البيانات");

// الإعدادات.
DEFINE('_EW_SETTINGS_TITLE', "إعدادات");
DEFINE('_EW_SETTINGS_DEFAULT', "االوضع الا�?اتراضي");
DEFINE('_EW_SETTINGS_SAVE', "ح�?ظ");
DEFINE('_EW_SETTINGS_APPEARANCE', "المظهر");
DEFINE('_EW_SETTINGS_FRONTEND', "الواجهة الأمامية");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "المح�?وظات وآداء خيار المعالجة المتعددة الغير متزامنة");
DEFINE('_EW_SETTINGS_ADVANCED', "خيارات متقدمة");
DEFINE('_EW_SETTINGS_IGNORE', "تجاهل");
DEFINE('_EW_SETTINGS_BLOCKING', "منع دخول");
DEFINE('_EW_SETTINGS_EXPERT', "خبير");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "هل تريد بال�?عل إعادة ضبط كل بيانات الزائر؟");
DEFINE('_EW_SETTINGS_RESET_ALL', "إعادة ضبط الكل");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "إعادة ضبط كل بيانات الزائر ومعلوماته");
DEFINE('_EW_SETTINGS_LANGUAGE', "اللغة");
DEFINE('_EW_SETTINGS_SAVED', "تم ح�?ظ الإعدادت");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "أض�? عنوان حاسوبك الرقمي");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "إلى القائمة.");

// غير ذلك / بيانات عامة �?ي العموم.
DEFINE('_EW_TITLE', "برنامج جوملا للمتابعة ال�?ورية والحصول على بيانات المواقع مباشرة");
DEFINE('_EW_BACK', "عودة");
DEFINE('_EW_ACCESS_DENIED', "ليس لديك أي تصريح لرؤية هذا!");
DEFINE('_EW_LICENSE_AGREE', "أوا�?ق على الشروط واللوائح أعلاه");
DEFINE('_EW_LICENSE_CONTINUE', "استمرار");
DEFINE('_EW_SUCCESS', "تمت العملية بنجاح");
DEFINE('_EW_RESET_SUCCESS', "تم مسح كل بيانات وإحصائيات الزائر");
DEFINE('_EW_RESET_ERROR', "لم يتم مسح البيانات، لقد وقع خطأ ما");
DEFINE('_EW_CREDITS_TITLE', "أسماء المشر�?ين");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "بيانات وإحصاءات يومية وأسبوعية لـ...");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', " Joomla لبرنامج configuration.php برجاء رؤية هذه الإحصائية من النطاق الذي حددته �?ي AJAX تم ر�?ض إعطاء الإذن من قبل برنامج ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', " قبل اسم النطاق الخاص بكwww. ربما نسيت أن تضع . الجا�?ا سكريبت الخاص بك يحاول الدخول ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "من");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "ما سبب ظنك أنه نطاق آخر");

// رأس الص�?حة.
DEFINE('_EW_HEADER_DOWNLOAD', "احصل على أحدث ش�?رة لملح الاسم من خلال");
DEFINE('_EW_HEADER_CAST_YOUR', "من �?ضلك ادلو");
DEFINE('_EW_HEADER_VOTE', "بصوتك");

// تعري�? الأدوات.
DEFINE('_EW_TOOLTIP_CLICK', "أنقر لإظهار تعري�? الأدوات");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "حرك ال�?أرة عليها لإظهار تعري�? الأدوات");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "زيادة الأمس");
DEFINE('_EW_TOOLTIP_HELP', "�?تح المساعدة الخارجية على الإنترنت لأجل");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "أغلق هذا الإطار");
DEFINE('_EW_TOOLTIP_PRINT', "اطبع");

// الأهدا�?.
DEFINE('_EW_GOALS_INSERT', "ادراج هد�? جديد");
DEFINE('_EW_GOALS_UPDATE', "تحديد رقم الهد�?");
DEFINE('_EW_GOALS_ACTION', "إجراءات");
DEFINE('_EW_GOALS_TITLE', "هد�? جديد");
DEFINE('_EW_GOALS_NEW', "هد�? جديد");
DEFINE('_EW_GOALS_RELOAD', "إعادة تحميل");
DEFINE('_EW_GOALS_ADVANCED', "إعداد متقدم");
DEFINE('_EW_GOALS_NAME', "اسم");
DEFINE('_EW_GOALS_ID', "تعري�?");
DEFINE('_EW_GOALS_URI_CONDITION', "حالة معر�? المصدر المنتظم");
DEFINE('_EW_GOALS_URI_INVERSED', "الحالة العكسية لمعر�? المصدر المنتظم");
DEFINE('_EW_GOALS_GET_VAR', "GET تباين الـ");
DEFINE('_EW_GOALS_GET_CONDITION', "GETحالة الـ");
DEFINE('_EW_GOALS_POST_VAR', "تباين التوزيع");
DEFINE('_EW_GOALS_POST_CONDITION', "حالة التوزيع");
DEFINE('_EW_GOALS_TITLE_CONDITION', "حالة العنوان");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "حالة اسم المستخدم");
DEFINE('_EW_GOALS_IP_CONDITION', "حالة العنوان الرقمي");
DEFINE('_EW_GOALS_IP_INVERSED', "حالة العنوان الرقمي العكسية");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "ناتج عن الحالة");
DEFINE('_EW_GOALS_BLOCK', "منع");
DEFINE('_EW_GOALS_REDIRECT', "إعادة توجيه لمحدد موقع المعلومات");
DEFINE('_EW_GOALS_HITS', "عدد الزيارات");
DEFINE('_EW_GOALS_ENABLED', "تم الت�?عيل");
DEFINE('_EW_GOALS_EDIT', "تحرير");
DEFINE('_EW_GOALS_DELETE', "مسح");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "ست�?قد كل البيانات الأخيرة لإحصائيات هذا الهد�?، هل أنت واثق من أنك تود مسح رقم الهد�?؟");

// واجهة أمامية.
DEFINE('_EW_FRONTEND_COUNTRIES', "دول");
DEFINE('_EW_FRONTEND_VISITORS', "زائرين");
DEFINE('_EW_FRONTEND_TODAY', "اليوم");
DEFINE('_EW_FRONTEND_YESTERDAY', "أمس");
DEFINE('_EW_FRONTEND_THIS_WEEK', "هذا الأسبوع");
DEFINE('_EW_FRONTEND_LAST_WEEK', "الأسبوع الماضي");
DEFINE('_EW_FRONTEND_THIS_MONTH', "هذا الشهر");
DEFINE('_EW_FRONTEND_LAST_MONTH', "الشهر الماضي");
DEFINE('_EW_FRONTEND_TOTAL', "المجموع الكلي");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "0 -1 من /components/com_extrawatch/config.php �?ي EXTRAWATCH_DEBUGبهذه الطريقة يمكنك اكتشا�? سبب الخطأ وللإغلاق برجاء تغيير قيمة ExtraWatch �?ي وضع معالجة الأخطاء");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "أقصى عدد للص�?و�? يظهر حين تكون الإحصائيات �?ي النمط الموسع");
DEFINE('_EW_DESC_STATS_IP_HITS', ".كل العنواين الرقمية التي حصلت على عدد زائرين أقل من هذه القيمة �?ي الأيام السابقة ستمسح تلقائياً من مح�?وظات العناوين الرقمية");
DEFINE('_EW_DESC_STATS_URL_HITS', ".جميع محددات مواقع المعلومات التي تتلقى عدد زائرين أقل �?ي لأيام السابقة من قيمة هذا اليوم سو�? يتم محوها من مح�?وظات العناوين الرقمية");
DEFINE('_EW_DESC_IGNORE_IP', ".استبعد عناوين رقمية محددة من البيانات الإحصائية وقم بال�?صل بخط جديد ويمكنك استخدام الإحلال هنا <br/>Eg. 192.* يتم تجاهل 192.168.51.31, 192.168.16.2, etc..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "ExtraWatchوقت التحديث للزائرين يقاس بالملليثانية والا�?تراضي هو 2000 وكن حذراً أثناء ذلك ثم أعد تحميل البيانات الخل�?ية لـ");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "ExtraWatch وقت تحديث البيانات الإحصائية يقاس بالملليثانية والم�?ترض هو 4000 وكن حذراً أثناء ذلك ثم أعد تحميل البيانات الخل�?ية لـ");
DEFINE('_EW_DESC_MAXID_BOTS', "كم عدد زيارات الروبوتات التي يمكن الإبقاء عليها بقاعدة البيانات");
DEFINE('_EW_DESC_MAXID_VISITORS', "كم عدد الزيارات الحقيقية التي يمكن الإباقء عليها �?ي قاعدة البيانات");
DEFINE('_EW_DESC_LIMIT_BOTS', "كم عدد الروبوتات التي ستراها �?ي البيانات الخل�?ية");
DEFINE('_EW_DESC_LIMIT_VISITORS', "كم عدد الزيارات الحقيقية التي ستراها �?ي البيانات الخل�?ية");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "أقصى عدد للأحر�? يمكن أن تظهر �?ي العناوين الطويلة ومعر�?ات المصادر المنتظمة");
DEFINE('_EW_DESC_TRUNCATE_STATS', "أقصى عدد أحر�? تظهر �?ي لوحة البيانات الإحصائية على اليمين");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "عدد الأيام التي يتم الإبقاء �?يها على الإحصائيات �?ي قاعدة البيانات، ص�?ر يساوي ما لا نهاية ");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "حين تكون �?ي نطاق زمني مختل�? عن الملقم المضي�? سواء كان يسبقك أو يقل عنك بالساعات");
DEFINE('_EW_DESC_WEEK_OFFSET', "إزاحة الأسبوع, الطابع الزمني/(3600*24*7) يعطي رقم الأسبوه بداءً من 1.1.1970, هذه الإزاحة بمثابة تصحيح لجعله يبدأ من الاثنين ");
DEFINE('_EW_DESC_DAY_OFFSET', "إزاحة اليوم, الطابع الزمني/(3600*24) gives يعطي رقم اليوم بداءً من 1.1.1970, هذه الإزاحة بمثابة تصحيح ليجعل اليوم يبدأ من 00:00 ");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(تعمل �?ي النسخة الاحترا�?ية)</b> استخدام علامة �?ارغة 1x1px أيقونة �?ي البيانات الأمامية");
DEFINE('_EW_DESC_IP_STATS', "لتش�?عيل إحصائيات العنوان الرقمي. �?ي بعض الدول يكون الاحت�?اظ بالعنوان الرقمي �?ي قاعدة البيانات مخال�?اً للقانون. استخدم الخاصية على مسؤوليتك الخاصة.");
DEFINE('_EW_DESC_HIDE_ADS', "هذا الإعداد يخ�?ي الإعلانات �?ي البيانات الخل�?ية, إذا كانت تزعجك كثيراً. بالإبقاء عليها, أنت تساند تطوير هذه الأداة أكثر. شكراً");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "أزل العلامةإذا كنت تريد إظهار تعري�? الأدوات عند القيام بتحريك ال�?أرة عليها بدلاً من النقر بال�?أرة عليها");
DEFINE('_EW_DESC_SERVER_URI_KEY', "الوضع الا�?تراضي هو 'REDIRECT_URL', وهذا هو الأمر القياسي لإعادة كتابة عناوين الـURL, يمكن الضبط على 'SCRIPT_URL' إذا تم التسجيل إلى index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "الرسالة التي تظهر للمستخدمين الممنوعين من الدخول أو أية معلومات أخرى عن سبب منعك لدخول أولئك المستخدمين.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "عرض تعري�? الأدوات");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "ارت�?اع تعري�? الأدوات");
DEFINE('_EW_DESC_TOOLTIP_URL', "هنا URL يمكنك وضع أي عنوان, لرؤية العنوان الرقمي لأي زائر. سيتم استبدال {ip} بالعنوان الرقمي للزائر. على سبيل المثال. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "يمكنك طباعة أي عنوان معر�? مصدر منتظم ترغب �?ي منعه من منطقة البيانات الإحصائية. يمكنك استخدام حرو�? الإحلال (* and ?) هنا. مثلاً.: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "حدد اسم الهد�? هنا وسيظهر الاسم �?ي البيانات الإحصائية");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "أي شيء يعقب اسم نطاقك. لأجل http://www.codegravity.com/projects/ معر�? المصادر المنتظم يكون: /projects/ (مثال على الاستخدام: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "متغير الـGET هو متغير يمكنك رؤيته بعد عنوان الـURL عادة بعد ? أو &amp; علامة. مثال. http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. يمكنك استخدام أيضاً <u>*</u> �?ي هذا المجال لعمل مسح لكل قيم الـGET. (Example to use: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "هنا عليك أن تحدد معادل معين لقيمة المجال السابق. (على سبيل المثال استخدام: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "مماثل جداً, لكننا نتحقق من القيم المعطاة من النماذج. لذا حين يكون لديك نموذج على موقعك الإلكتروني, وبه مجال &lt;نوع المدخلات='text' اسم='<u>خبرات</u>' /&gt;. (مثال الاستخدام: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "معادل لقيمة مجال الإرسال. مثال. نود أن نتحقق من كون المستخدم لديه java ex                                                                                                         periences. (Example to use: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "عنوان ص�?حة يجب أن يكون معادلاً. (مثال الاستخدام: <b>*مبرمجين مستقلين*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "اسم مستخدم قام بتسجيل دخوله. (مثلاً اسنخدام: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "عنوان رقمي يدل على أن المستخدم آت من: (مثلاً استخدام: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "عنوان الـURL الذي يأتي منه المستخدم. (مثال الاستخدام: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "يتم إعادة توجيه المستخدم إلى عنوان URL حددته أنت. له أولية أكثر من منع الدخول: (مثال الاستخدام: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "كم عدد الأحر�? التي ستقطع �?ي جدول الأهدا�?");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(يعمل �?ي نسخة المحتر�?ين)</b> رابط عودة إلى codegravity.com, يمكنك إبطال هذا, لكننا سنكون ممتنين لك لو استبقيت عليه. شكراً");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "اعرض مجموع البيانات الإحصائية للدول �?ي الوحدة النمطية للبيانات الأمامية. إذا تم التغيير, هذا الإعداد سيكون قيد التشغيل �?ي البيانات الأمامية عقب الوقت المحدد �?ي ذاكرة التخزين المؤقت CACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "إذا أردت أن تقوم بإبدال ترتيب الزائرين والدول �?ي البيانات الأمامية. قم بإلغاء الاختيار وحينها سيظهر الزائرين أولاً.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "عدد البلدان التي ستظهر �?ي البيانات الأمامية");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "اعرض الزائرين الدول �?ي الوحدة النمطية للبيانات الأمامية. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقت �?ي CACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "الوقت بالثانية لجلب مجموع عدد الدول �?ي البيانات الأميمية من ذاكرة التخزين المؤقتة");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "الوقت بالثانية لجلب عدد الزائرين �?ي البيانات الأمامية من ذاكرة التخزين المؤقتة");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "لعرض الزائرين �?ي البيانات الأمامية لـ: اليوم. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "لعرض الزائرين �?ي البيانات الأمامية لـ: أمس. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "لعرض الزائرين �?ي البيانات الأمامية لـ: هذا الأسبوع. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "لعرض الزائرين �?ي البيانات الأمامية لـ: الأسبوع الماضي. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "لعرض الزائرين �?ي البيانات الأمامية لـ: هذا الشهر. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "لعرض الزائرين �?ي البيانات الأمامية لـ: الشهر الماضي. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "لعرض مجموع الزائرين منذ تثبيت برنامج ExtraWatch. لو تم التغيير سيكون هذا الإعداد قيد التطبيق �?ي البيانات الأمامية بعد الوقت الذي تم ضبطه �?ي ذاكرة التخزين المؤقتة CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "مل�? اللغة المتاح للاستخدام. إنها متاحة �?ي /components/com_extrawatch/lang/. إذا أردا إدخال مل�? لغة آخر, أولاً تحقق من الص�?حة الرئيسية للمشروع, وإذا كان مل�? اللغة لا يزال غير موجود هناك, �?قط انسخ المل�? الا�?اتراضي english.php إلى على سبيل المثال. german.php and وضعه �?ي هذا الدليل. ثم قم بترجمة كل م�?اتيح القيم على اليمين.");
DEFINE('_EW_DESC_GOALS', "الأهدا�? تتيح لك تحديد معلمات محددة. حين تتطابق هذه المعلمات, يزداد عداد الأهدا�?. بهذه الطريقة يمكنك مراقبة ما إذا كان المستخدم بزيارة عنوان URL معين أو كونه أرسل قيمة معينة أو كونه لديه اسم مستخدم معين أو كونه جاء من عنوان معين ويمكنك كذلك منع دخول أو إعادة توجيه مثل أولئك المستخدمين إلى  عنوان URL آخر.");
DEFINE('_EW_DESC_GOALS_INSERT', "�?ي كل هذه المجالات عدا الاسم يمكنك استخدام * أو ? كحرو�? الإحلال. على سبيل المثال: ?ear (ستطابق: near, tear, ..),  p*r (ستطابق: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "اضبط على 1, لو أردت منع دخول هذا المستخدم. لن يرى بقية المحتوى, بل �?قط رسالة تعلمه بأنه تم منعه من الدخول - بدون إعادة توجيه وسيتم إضا�?ة عنوانه الرقمي إلى قائمة المنع �?ي البيانات الإحصائية (مثال على الاستخدام: <b>1</b>)");

/* new الترجمات */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "حالة الدولة");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "حالة الدولة العكسية");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "الدول ذات الرموز ثنائية الرقم تكون بالأعلى (Eg: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "دلخلي");
DEFINE('_EW_STATS_FROM', "من");
DEFINE('_EW_STATS_TO', "إلى");
DEFINE('_EW_STATS_ADD_TO_GOALS', "أض�? إلى الأهدا�?");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "أض�? هد�? لهذه الدولة");
DEFINE('_EW_MENU_REPORT_BUG', "الإبلاغ عن خطأ ما أو ميزة ما");
DEFINE('_EW_GOALS_COUNTRY', "دولة");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "لو أنك تريد أسماء الدول �?ي أعلى قائمة البيانات الأمامية (مثال: GERMANY, UNITED KINGDOM instead of Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "الوقت بالثانية لجلب المستخدمين من ذاكرة البيانات المؤقتة إلى البيانات الأمامية");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "تم عرض مجمل القيمة الأولية: �?ي البيانات الأمامية. هذا ي�?يد حين تنتقل من أداة بيانات أخرى. (مثال.: 20000). أعد الضبط إلى 0 إذا لم تكن تريد هذه الخاصية.");
DEFINE('_EW_DESC_IGNORE_USER', "تجاهل المستخدمين الموجودين �?ي الصندوق النصي. كل واحد بسطر وحده. (مثال.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "المستخدمين الأكثر نشاطاً من بين مجموع كلي");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "ت�?عيل الموانع بناءً على الكلمات المذكورة �?ي قائمة منع الإحالات الغير مرغوبة بالأس�?ل؟");
DEFINE('_EW_DESC_SPAMWORD_LIST', "معظم كلمات الإحالة الغير مرغوب بها المستخدمة من قبل روبوتات الإحالات. يمكنك استخدام الإحلال هنا, (مثال.: ph?rmac*). لو أن الإعداد أعلاه قيد التطبيق, سيقوم برنامج ExtraWatch بالتحقق ما إذا كان المهاجم قد قدم نموذجاً (طلب إرسال HTTP) على موقعك ببعض من ن�?س كلمات الإحالة الغير مرغوبة وهذا ينطبق �?ي حالة أن النموذج يحمل على موقع إلكتروني واقع �?ي Joomla �?قط إذا كانت منتديات أو تعليقات لكنه سيكون �?عال جداً �?ي منع دخول روبوتات الإحالات الغير مرغوبة والتي تحاول تسجيل كل النماذج الممكنة");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "مضاد الإحالات الغير مرغوبة");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', " (Eg. index.php?option=com_comprofiler&task=userProfile&user={user})يوجد رابط �?ي الوحدة النمطية بالبيانات الأمامية يتيح لك تحديد الـيو آر إل والذي يكون م�?توحاً حين يقوم المستخدم بالنقر على عنوان اسم المستخدم والذي يجب أن يحتوي على تسلسل أحر�? كلمة مستخدم والتي ستستبدل باسم المستخدم الحقيقي وعلى سبيل المثال ");

/* ترجمات 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "عبارة مرشدة");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "القيمة القصوى �?ي جدول المح�?وظات (مثال: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "�?ي الزيارات أظهر �?قط آخر ص�?حة تمت زيارتها وليس كل الص�?حات");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "ا�?ي الزيارات قم بإخ�?اء أسماء المواقع المكررة �?ي عنوان الص�?حة التي تم زيارتها");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "أقصى عدد زوار يسجل �?ي قاعدة بيانات مح�?وظات الزيارات. كن حذراً �?ي التعامل مع هذا الإعداد, لو أن موقعك يحظى بكثير من الزيارات, يمكن أن تيكاثر هذا بسرعة كبيرة. Statusدائماً ت�?قد كم البيانات الموجود �?ي جدول المح�?وظات �?ي قسم ");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "احت�?ظ بجداول قاعدة البيانات �?ي إزالة التثبيت وضع علامة على هذا الاختيار قبل إزالة التثبيت �?ي حال رغبتك �?ي القيام بتحسين وتود الاحت�?اظ بالبيانات");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "ستتلقى رسالة إلكترونية ليلية تحوي تقرير عن نشاط اليوم السابق ويمكنك قراءتها صباحاً");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "عنوان البريد الإلكتروني الذي ستتلقى عليه هذه التقارير");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "�?ي تقارير البريد الإلكتروني تضمن الص�?و�? التي تحوي نسبة مئوية أكثر من  {value}. اضبط على 0 إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "تضمن �?قط <b>زائد يوم واحد</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أعلى من (القيمة) مئوية. اضبط على 0 إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "تضمن �?قط <b>سالب يوم واحد</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أقل من (القيمة) مئوية. اضبط على ص�?ر إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "تضمن �?قط <b>زائد سبعة أيام</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أعلى من (القيمة) مئوية. اضبط على ص�?ر إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "تضمن �?قط <b>سالب سبعة أيام</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أقل من (القيمة) مئوية. اضبط على 0 إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "تضمن �?قط <b>زائد 28 يوم</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أعلى من (القيمة) مئوية. اضبط على 0 إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "تضمن �?قط <b>سالب 28 يوم</b> غير القيمة �?ي تقارير البريد الإلكتروني لتكون أقل من (القيمة) مئوية. اضبط على 0 إذا كنت لا تود استعمال هذه الخاصية <i>(مثال: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(يعمل �?ي نسخة المحتر�?ين)</b> قم بت�?عيل هذه الخاصية لو أنك تود إظهار الشعار المشير للبرنامج rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "هذا هو الحد الأقصى لعدد أحر اسم ص�? الرسالة الإلكترونية قم بتغيير هذا لو أن إطار الرسائل لدى عميل الالرسائل الإلكترونية الخاص بك أصغر كثيراً");

DEFINE('_EW_MENU_HISTORY', "المح�?وظات");
DEFINE('_EW_MENU_EMAILS', "رشائل إلكترونية");
DEFINE('_EW_MENU_STATUS', "وضع قاعدة البيانات");
DEFINE('_EW_DESC_BLOCKED', "هذه العناوين الرقمية تم منعها من قبل مضاد الإحالات الغير مرغوبة");


DEFINE('_EW_HISTORY_VISITORS', "مح�?وظات الزوار");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "إظهار آخر التقارير �?قط.
                لتغيير هذه القيمة اذهب للإعدادات -&gt; مح�?وظات &amp; آداء -&gt; HISTORY_MAX_DB_RECORDS . كن حذراً لأن هذا الإعداد يؤثر على وقت تحميل البيانات المبينة أدناه  ");
DEFINE('_EW_MENU_BUG', "الإبلاغ عن شائبة");
DEFINE('_EW_MENU_FEATURE', "طلب هذه الخاصية");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "كلمات مرشدة");

DEFINE('_EW_BLOCKING_UNBLOCK', "إلغاء المنع");
DEFINE('_EW_STATS_KEYPHRASE ', "عبارة مرشدة");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "اسم الجدول");
DEFINE('_EW_STATUS_DATABASE_ROWS', "ص�?و�?");
DEFINE('_EW_STATUS_DATABASE_DATA', "بيانات");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "مجموع كلي");

DEFINE('_EW_EMAIL_REPORTS', "تقارير البريد الإلكتروني");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "تقرير مص�?ي الرسائل الإلكترونية لأمي و�?قاً للإعداد");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "مص�?يات الرسائل الإلكترونية بناءً على القيمة");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "قيمة");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "مئوية");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "تغيير ليوم واحد");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "تغيير لسبعة أيام");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "تغيير لثمتنية وعشرون يوماً");
DEFINE('_EW_ANTISPAM_BLOCKED', "منعت دخول عدد من إحالات غير مرغوبة ExtraWatch, المجموع الكلي: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "أرقام العنواين الممنوعة من الدخول");
DEFINE('_EW_ANTISPAM_SETTINGS', "الإعدادات المضادة للإحالات الغير مرغوب �?يها");
DEFINE('_EW_TRAFFIC_AJAX', "لمقدار الزيارات عدا الخرائط AJAX تحديث");


DEFINE('_EW_HISTORY_PREVIOUS', "السابق");
DEFINE('_EW_HISTORY_NEXT', "التالي");

/** ترجمات إضا�?ية 1.2.11 لأجل دول �?ي ص�?و�?و أكثر */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "عدد أعمدة الدول الأقصى");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', " اأقصى عدد ص�?و�? أسماء الدول");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "لإظهار اسم الدولة أو إخ�?اءه");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "لإظهار إشارة الرسائل أولاً ثم المئويات");

/* ExtraWatch 1.2.14 ترجمات */

DEFINE('_EW_GOALS_GET_INVERSED', "GET الحالة المعكوسة للـ");
DEFINE('_EW_GOALS_POST_INVERSED', "الحالة المعكوسة لأمر الإرسال");
DEFINE('_EW_GOALS_TITLE_INVERSED', "الحالة المعكوسة للعنوان");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "الحالة المعكوسة لاسم المستخدم");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "نتج عن الحالة المعكوسة");

DEFINE('_EW_STATS_MAP', "خريطة آخر زيارة");
DEFINE('_EW_STATS_MAP_ENTER_KEY', " لعرض خريطة آخر زيارة<a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> :برجاء إدخال م�?تاح");
DEFINE('_EW_STATS_MAP_STORE_KEY', "م�?تاح تخزين");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "برجاء إدخال م�?تاح العنوان الرقمي بقاعدة البيانات بشكل صحيح كما رأيته �?ي: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "طلب غير صالح: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "تم التسليم من مجالات:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URL معلمات الـ");
DEFINE('_EW_VISIT_ADD_PAGE', " أض�? الص�?حة كهد�?");
DEFINE('_EW_VISIT_BLOCK_IP', " امنع دخول هذا العنوان الرقمي");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " أض�? هذا التسليم من المتغير كهد�?");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " كهد�? URL أض�? معلمات الـ");

DEFINE('_EW_TREND_EMPTY', "�?ارغ");

DEFINE('_EW_NOT_NUMBER', "لن يعمل بشكل صحيح ExtraWatch تحذير: القيمة التي أدخلتها ليست برقم صحيح، برنامج");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; هذه نسخة للتجربة مدتها 15 يوماً. الأيام الباقيةt: <b>%d</b>. برجاء شراء النسخة الدائمة <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch license for your domain</a> for this and upcoming versions.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', "ExtraWatchنسخة التجربة الخاصة بك انتهت برجاء شراء برنامج");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "تم ت�?عيل الترخيص بنجاح، شكراً");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Error: م�?تاح الترخيص ومجالك لا يتطابقان.</b><br/>هل اسم المجال الذي أدخلته �?ي وثيقة التبرع يطابق ذلك الذي تراه بأس�?ل؟ <br/>Click '<b>اطلب م�?تاح الت�?عيل المناسب</b>' بأس�?ل أو اتصل بـ: support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "إذا كنت ترى الرسالة أعلاه لوقت أطول من اللازم �?قد يكون موقعك الحالي غير صحيح
                    ا�?تح العناصر/com_extrawatch/config.php
                    أزل التعليق واضبط موقعك الحالي كالآتي على سبيل المثال:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "تحذير: الموقع الموجود �?ي متص�?حك وموقعك الحالي لا يتطابقان");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "اضبط الموقع ال�?وري على... ثم استمر إلى...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "إزالة رابط العودة");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "قاعدة معلوماتية");
DEFINE('_EW_ADMINHEADER_FLOW', "تد�?ق");
DEFINE('_EW_ADMINHEADER_GRAPHS', "رسوم بيانية");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "المعناصر");
DEFINE('_EW_ADMINHEADER_REVIEW', "مراجعة");
DEFINE('_EW_ADMINHEADER_WRITE', "اكتب ");

DEFINE('_EW_FLOW_TRAFFIC', "تد�?ق الزيارات للموقع");
DEFINE('_EW_FLOW_SELECT_PAGE', "اختيار الص�?حة:");
DEFINE('_EW_FLOW_OUTG_LINKS', "التعداد الجذري للروابط الصادرة:");
DEFINE('_EW_FLOW_NESTING', "مستوى التضمين:");
DEFINE('_EW_FLOW_SCALE', "مقياس:");

DEFINE('_EW_COMERCIAL_AD_FREE', "نسخة خالية من الإعلانات");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "شكراً جزيلاً على تبرعك!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "م�?تاح تسجيل مجالك �?ي: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "الآن يمكنك إزالة رابط العودة لموقعك أو إخ�?اء شعار جوملاواتش من البيانات الأمامية من خلال الإعدادت ");


DEFINE('_EW_SIZES_LAST_CHECK', "آخر ت�?تيش حدث �?ي:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "أزرق = حجم العنصر/الوحدة النمطية �?ي/دليل المدراء");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "عنصر أساسي");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "المجموع:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "حجم");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "تحديث الكل");

DEFINE('_EW_SIZEDATABASE_TABLE', "جدول");
DEFINE('_EW_SIZEDATABASE_SIZE', "حجم");
DEFINE('_EW_SIZEDATABASE_1DAY', "تغيير ليوم واحد");
DEFINE('_EW_SIZEDATABASE_7DAY', "تغيير لـ7 أيام");
DEFINE('_EW_SIZEDATABASE_28DAY', "تغيير لـ28 يوماً");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "لا توجد بيانات");
DEFINE('_EW_SIZEDATABASE_TOTAL', "المجموع:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "تحديث الكل");
DEFINE('_EW_SIZEMODULES_TOTAL', "المجموع:");
DEFINE('_EW_SIZEMODULES_MODULE', "الوحدة النمطية");
DEFINE('_EW_SIZEMODULES_SIZE', "الحجم");

DEFINE('_EW_SIZES_FILES', "المل�?ات والدلائل");
DEFINE('_EW_SIZES_BYTES', "وحدات البايت");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "تحديث");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "أحجام جداول قاعدة البيانات");


DEFINE('_EW_DESC_IPINFODB_KEY', "خريطة الزيارة الأخيرة ipinfodb.com م�?تاح من: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "�?رض إزاحة المنطقة الزمنية");


/* ExtraWatch 1.2.17 ترجمات */
DEFINE('_EW_MENU_UPDATE', "تحديث");
DEFINE('_EW_MENU_UPDATE_TITLE', "المساعدة والتحديث");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "هذا البرنامج غير متاح له نسخة مجانية برجاء الدخول لعلامة جدول الترخيص");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "ت�?عيل حظر كلمات الإحالات الغير مرغوبة");
DEFINE('_EW_SPAMWORD_LIST', "قائمة بكلمات الإحالات الغير مرغوبة");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "إخ�?اء العنوان المتكرر");
DEFINE('_EW_TRUNCATE_VISITS', "قطع الزيارات");
DEFINE('_EW_TRUNCATE_STATS', "قطع البيانات الإحصائية");
DEFINE('_EW_TRUNCATE_GOALS', "قطع الأهدا�?");
DEFINE('_EW_LIMIT_BOTS', "الحد من الروبوتات");
DEFINE('_EW_LIMIT_VISITORS', "الحد من الزائرين");
DEFINE('_EW_TOOLTIP_WIDTH', "عرض تعري�? الأدوات");
DEFINE('_EW_TOOLTIP_HEIGHT', "ارت�?اع تعري�? الأدوات");
DEFINE('_EW_TOOLTIP_URL', " URLتعري�? أدوات الـ");
DEFINE('_EW_TOOLTIP_ONCLICK', "تعري�? الأدوات عند النقر");
DEFINE('_EW_IP_STATS', "بيانات إحصائية للعنوان الرقمي");
DEFINE('_EW_IPINFODB_KEY', "م�?تاح قاعدة البيانات لمعلومات العنوان الرقمي ");
DEFINE('_EW_ONLY_LAST_URI', "الأخيرة �?قط URI الـ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "إخ�?اء شعار البيانات الأمامية ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "عدم اتباع البيانات الأمامية");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "عدم وجود رابط عودة بالبيانات الأمامية");
DEFINE('_EW_FRONTEND_USER_LINK', "روابط مستخدمي البيانات الأمامية");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "دول البيانات الأمامية أولاً");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "أسماء دول البيانات الأمامية");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "دول البيانات الأمامية بأعلى");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "أعلام دول البيانات الأمامية تأتي أولاً ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "إق�?ال لوحة الأرقام لدول البيانات الأمامية");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "أقصى عدد عواميد لدول البيانات الأمامية");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "أقصى عدد ص�?و�? لدول البيانات الأمامية");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "زوار البيانات الأمامية اليوم ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "زوار البيانات الأمامية أمس ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "زوار البيانات الأمامية هذا الأسبوع ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "زوار البيانات الأمامية الأسبوع الماضي ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "زوار البيانات الأمامية هذا الشهر ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "وار البيانات الأمامية الشهر الماضي");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "إخ�?اء عدد زوار البيانات الأمامية الكلي");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "واجهة أمامية وكلية");
DEFINE('_EW_HISTORY_MAX_VALUES', "أقصى قوائم للمح�?وظات");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "أقصى عدد لسجلات المح�?وظات");
DEFINE('_EW_UPDATE_TIME_VISITS', "زيارات تحديث الوقت");
DEFINE('_EW_UPDATE_TIME_STATS', "تحديث وقت البيانات الإحصائية");
DEFINE('_EW_STATS_MAX_ROWS', "أقصى عدد لص�?و�? البيانات الإحصائية");
DEFINE('_EW_STATS_IP_HITS', "عدد زيارات العنوان الرقمي بالبيانات الإحصائية");
DEFINE('_EW_MAXID_BOTS', "أقصى عدد للروبوتات ذوي التعري�?ات");
DEFINE('_EW_MAXID_VISITORS', "أقصى عدد للزائرين ذوي التعري�?ات");
DEFINE('_EW_STATS_KEEP_DAYS', "أيام الاحت�?اظ بالبيانات الإحصائية ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "ذاكرة تخزين مؤقت لدول البيانات الأمامية ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "ذاكرة تخزين مؤقت لزوار البيانات الأمامية ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "إلغاء تثبيت خ�?ظ البيانات ");
DEFINE('_EW_IGNORE_IP', "تجاهل العنوان الرقمي");
DEFINE('_EW_IGNORE_URI', " URIتجاهل الـ");
DEFINE('_EW_IGNORE_USER', "تجاهل المستخدم");
DEFINE('_EW_BLOCKING_MESSAGE', "رسالة منع");
DEFINE('_EW_SERVER_URI_KEY', "للملقم URI م�?تاح");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "التمهيد الكلي لزوار البيانات الأمامية");
DEFINE('_EW_SIZEDATABASE_RECORDS', "سجلات");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " قبل أي محتوى أو صيخة وعلى سبيل المثال على يسار القالب الخاص بك ExtraWatch لت�?عيل هذا المنع عليك أن تنشر وكيل
                    <br/>
                    الذهاب إلى إدارة الوحدة النمطية -> ExtraWatch وكيل -> اختيار المكان على اليسار");

DEFINE('_EW_EMAIL_SEO_REPORTS', "تقارير رئيس مجلي الإدارة");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "تم ت�?عيل بريد التقارير المرسلة لرئيس مجلي الإدارة ليلياً");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "مشاهدة العرض التوضيحي للتثبيت");

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

DEFINE('_EW_STATS_SOCIAL_MEDIA', "شبكات اجتماعية");


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