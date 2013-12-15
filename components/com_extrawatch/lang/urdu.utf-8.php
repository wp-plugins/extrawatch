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
DEFINE('_EW_MENU_STATS', "لائیو اعدادوشمار");
DEFINE('_EW_MENU_GOALS', "ا�?دا�?");
DEFINE('_EW_MENU_SETTINGS', "ترتیبات");
DEFINE('_EW_MENU_CREDITS', "کریڈٹس");
DEFINE('_EW_MENU_FAQ', "عمومی سوالات");
DEFINE('_EW_MENU_DOCUMENTATION', "دستاویز بندی");
DEFINE('_EW_MENU_LICENSE', "لائسنس");
DEFINE('_EW_MENU_DONATORS', "حامی");
DEFINE('_EW_MENU_SUPPORT', "جمل�? واچ کی مدد کریں اور بیک اینڈ سے اپنے اشت�?ارات ختم کروائیں");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "تاز�? ترین وزیٹرز");
DEFINE('_EW_VISITS_BOTS', "بوٹس");
DEFINE('_EW_VISITS_CAME_FROM', "ج�?اں سے آئے");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "آپکا جمل�? واچ موڈیول شائع ن�?یں �?وا۔نئے اعدادوشمار ریکارڈ ن�?یں کیے جا ر�?ے۔ اس کو شائع کرنے کرنے کے لئے، موڈیولز سیکشن میں جائیں اور اس کو تمام ص�?حات پر شائع کریں");
DEFINE('_EW_VISITS_PANE_LOADING', "وزٹس لوڈ �?و ر�?ے �?یں۔۔۔");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "�?�?ت�? بھر کےوزٹ کے اعدادوشمار");
DEFINE('_EW_STATS_WEEK', "�?�?ت�?");
DEFINE('_EW_STATS_THIS_WEEK', "اس �?�?ت�?");
DEFINE('_EW_STATS_UNIQUE', "من�?رد");
DEFINE('_EW_STATS_LOADS', "لوڈز");
DEFINE('_EW_STATS_HITS', "�?ٹس");
DEFINE('_EW_STATS_TODAY', "آج");
DEFINE('_EW_STATS_FOR', "کے لیے");
DEFINE('_EW_STATS_ALL_TIME', "تمام وقت");
DEFINE('_EW_STATS_EXPAND', "پھیلایئں");
DEFINE('_EW_STATS_COLLAPSE', "سمیٹیں");
DEFINE('_EW_STATS_URI', "ص�?حات");
DEFINE('_EW_STATS_COUNTRY', "ممالک");
DEFINE('_EW_STATS_USERS', "یوزرز");
DEFINE('_EW_STATS_REFERERS', "حوال�? دینے والے");
DEFINE('_EW_STATS_IP', "IPs");
DEFINE('_EW_STATS_BROWSER', "براؤزرز");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "کی ورڈز");
DEFINE('_EW_STATS_GOALS', "ا�?دا�?");
DEFINE('_EW_STATS_TOTAL', "مجموع�?");
DEFINE('_EW_STATS_DAILY', "روزان�?");
DEFINE('_EW_STATS_DAILY_TITLE', "روزان�? کے اعدادوشمار");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "تمام وقت کے اعدادوشمار");
DEFINE('_EW_STATS_LOADING', "لوڈنگ۔۔۔");
DEFINE('_EW_STATS_LOADING_WAIT', "لوڈ �?و ر�?ا �?ے ۔۔۔۔۔انتطار �?رمائیں");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', " بلاکنگIP");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "کا خود اندراج کریں IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "ً آئی پی ایڈریس کا اندراج کریں جس کو آپ بلاک کرنا چا�?تے �?یں مثلاً 45۰217۰242۰11 یا 217۰* ان تمام آئی پیز کو بلاک کرنے کے لیے جو وائلڈ کارڈ سے میچ کرتے �?یں");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "کیا واقعی بلاکنگ کو ٹوگل کرنا �?ے ");
DEFINE('_EW_STATS_PANE_LOADING', "اعدادوشمار لوڈ �?و ر�?ے �?یں۔۔۔");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "ترتیبات");
DEFINE('_EW_SETTINGS_DEFAULT', "ڈی�?الٹ");
DEFINE('_EW_SETTINGS_SAVE', "مح�?وظ کریں");
DEFINE('_EW_SETTINGS_APPEARANCE', "ظا�?ریت");
DEFINE('_EW_SETTINGS_FRONTEND', "�?رنٹ اینڈ");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "تاریخ اور کارکردگی");
DEFINE('_EW_SETTINGS_ADVANCED', "مزید");
DEFINE('_EW_SETTINGS_IGNORE', "نظر انداز کریں");
DEFINE('_EW_SETTINGS_BLOCKING', "بلاکنگ");
DEFINE('_EW_SETTINGS_EXPERT', "ما�?ر");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "کیا آپ واقعی تمام اعدادوشمار اور وزیٹرڈیٹا کو ری سیٹ کرنا چا�?تے �?یں؟");
DEFINE('_EW_SETTINGS_RESET_ALL', "سب کو ری سیٹ کریں");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "تمام اعدادوشمار اور وزیٹرڈیٹا کو ری سیٹ کریں");
DEFINE('_EW_SETTINGS_LANGUAGE', "زبان");
DEFINE('_EW_SETTINGS_SAVED', "ترتیبات مح�?وظ �?و گئیں");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "شامل کریںIPاپنا");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "�?�?رست میں");

// Other / mostly general.
DEFINE('_EW_TITLE', "جمل�? مانیٹر AJAX ایک رئیل ٹائم");
DEFINE('_EW_BACK', "پیچھے");
DEFINE('_EW_ACCESS_DENIED', "آپ کے پاس اس کو دیکھنے کی کوئی اجازت ن�?یں");
DEFINE('_EW_LICENSE_AGREE', "میں اوپروالی شرائط و ضوابط سے مت�?ق �?وں");
DEFINE('_EW_LICENSE_CONTINUE', "جاری �?ے");
DEFINE('_EW_SUCCESS', "آپریشن کامیاب ر�?ا");
DEFINE('_EW_RESET_SUCCESS', "تمام اعدادوشمار اور وزیٹر ڈیٹا کامیابی سےختم �?و گیا �?ے");
DEFINE('_EW_RESET_ERROR', "ڈیٹا کامیابی سے ختم ن�?یں �?وا،کچھ غلط �?و گیا �?ے");
DEFINE('_EW_CREDITS_TITLE', "کریڈٹس");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "روزان�? اور �?�?ت�? وار اعدادوشمار ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', " نے اجازت ن�?یں دی۔م�?ربانی کر کے ی�? اعدادوشماراس ڈومین سے دیکھیں جو آپ نے جمل�? کی کون�?یگیوریشن۔پی ایچ پی  میں مخصوص کی �?ے ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "شائد آپ ڈومین کے نام سے پ�?لے ڈبلیو ڈبلیو  ڈبلیو لگانا بھول گئے �?یں۔ آپکا جاوا سکرپٹ ایکسس کرنے کی کوشش کر ر�?ا �?ے۔ ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "کی جانب سے");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "کیا چیز اس کو ایک مختل�? ڈومین بناتی �?ے");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "تاز�? ترین ایکسٹین کا کوڈ حاصل کریں سے");
DEFINE('_EW_HEADER_CAST_YOUR', "برا�? م�?ربانی اپنا کاسٹ کریں");
DEFINE('_EW_HEADER_VOTE', "ووٹ");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "ٹول ٹپ دیکھنے کے لئے کلک کریں");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "ٹول ٹپ دیکھنے کے لئے ماوس پوائنٹر کو اوپر رکھیں");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "گزشت�? دن کا اضا�?�?");
DEFINE('_EW_TOOLTIP_HELP', "آن لائن بیرونی مدد کھولتا �?ےکے لئے");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "ی�? ونڈو بند کر دیں");
DEFINE('_EW_TOOLTIP_PRINT', "پرنٹ کریں");

// Goals.
DEFINE('_EW_GOALS_INSERT', "ایک نیا �?د�? داخل کریں");
DEFINE('_EW_GOALS_UPDATE', "ایک گول نمبر کو اپ ڈیٹ کریں");
DEFINE('_EW_GOALS_ACTION', "ایکشن");
DEFINE('_EW_GOALS_TITLE', "نیا �?د�? کا ٹائٹل");
DEFINE('_EW_GOALS_NEW', "نیا �?د�?");
DEFINE('_EW_GOALS_RELOAD', "ری لوڈ");
DEFINE('_EW_GOALS_ADVANCED', "ایڈوانسڈ");
DEFINE('_EW_GOALS_NAME', "نام");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', " کی شرطURI");
DEFINE('_EW_GOALS_URI_INVERSED', " کی الٹی شرطURI");
DEFINE('_EW_GOALS_GET_VAR', "GET var");
DEFINE('_EW_GOALS_GET_CONDITION', " کی شرطGET");
DEFINE('_EW_GOALS_POST_VAR', "POST Var");
DEFINE('_EW_GOALS_POST_CONDITION', "کی شرطPOST");
DEFINE('_EW_GOALS_TITLE_CONDITION', "عنوان کی شرط");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "یوزر کے نام کی شرط");
DEFINE('_EW_GOALS_IP_CONDITION', " کی شرطIP");
DEFINE('_EW_GOALS_IP_INVERSED', " کی الٹی شرطIP");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "ج�?اں سے آئے کی شرط");
DEFINE('_EW_GOALS_BLOCK', "بلاک");
DEFINE('_EW_GOALS_REDIRECT', "کی طر�? ری ڈائریکٹ URL");
DEFINE('_EW_GOALS_HITS', "�?ٹس");
DEFINE('_EW_GOALS_ENABLED', "Enabled");
DEFINE('_EW_GOALS_EDIT', "ایڈٹ");
DEFINE('_EW_GOALS_DELETE', "ڈیلیٹ");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "آپ تمام حالی�? اعدادوشمار کھو دیں گے۔ کیا آپ واقعی ایک گول نمبر کو ڈیلیٹ کرنا چا�?تے �?یں");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "ممالک");
DEFINE('_EW_FRONTEND_VISITORS', "وزیٹرز");
DEFINE('_EW_FRONTEND_TODAY', "آج");
DEFINE('_EW_FRONTEND_YESTERDAY', "کل");
DEFINE('_EW_FRONTEND_THIS_WEEK', "اس �?�?ت�?");
DEFINE('_EW_FRONTEND_LAST_WEEK', "گزشت�? �?�?ت�?");
DEFINE('_EW_FRONTEND_THIS_MONTH', "اس ما�?");
DEFINE('_EW_FRONTEND_LAST_MONTH', "گزشت�? ما�?");
DEFINE('_EW_FRONTEND_TOTAL', "مجموع�?");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "جمل�? واچ ڈی بگ موڈ میں �?ے۔ اس طرح سے آپ غلطیوں کی وج�? تلاش کر سکتے �?یں۔ اس کو بند کرنے کے لئے اس کی ویلیو کو 1 سے 0 کر دیں EXTRAWATCH_DEBUG in /components/com_extrawatch/config.php");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "جب اعدادوشمار پھیلاو والے موڈ میں �?وں تو کتنی قطاریں دکھائی جائیں");
DEFINE('_EW_DESC_STATS_IP_HITS', "تمام آئی پی ایڈریسز جن پر پچھلے دنوں میں اس ویلیو سے کم �?ٹس �?وئی �?یں و�? آئی پی کی �?سٹری میں سے ختم �?و جایئن گے۔");
DEFINE('_EW_DESC_STATS_URL_HITS', " تمام یو آر ایلز جن پر پچھلے دنوں میں اس ویلیو سے کم �?ٹس �?وئی �?یں و�? آئی پی کی �?سٹری میں سے ختم �?و جایئن گے");
DEFINE('_EW_DESC_IGNORE_IP', "اعدادوشمار میں سے مخصوص آئی پی نکالیں۔ ایک نئی لائن سے علیحد�? کریں۔ آپ ی�?اں وائلڈ کارڈ بھی استعمال کر سکتے �?یں۔ <br />مثلاً .*192 نظر انداز کرے گا <br/>Eg. 192.* 192.168.51.31, 192.168.16.2, etc..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "وزیٹرز کا ری�?ریش �?ونے کا وقت ملی سیکنڈز میں، ڈی�?الٹ 2000 �?ے،اس سے محتاط ر�?یں۔ پھر جمل�? واچ بیک اینڈ کو دوبار�? لوڈ کریں");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "اعدادوشمار کا ری�?ریش �?ونے کا وقت ملی سیکنڈز میں، ڈی�?الٹ 4000 �?ے،اس سے محتاط ر�?یں۔ پھر جمل�? واچ بیک اینڈ کو دوبار�? لوڈ کریں");
DEFINE('_EW_DESC_MAXID_BOTS', " ایک ڈیٹابیس میں کتنےبوٹ وزیٹس رکھے جائیں");
DEFINE('_EW_DESC_MAXID_VISITORS', "ایک ڈیٹابیس میں کتنےحقیقی  وزیٹس رکھے جائیں");
DEFINE('_EW_DESC_LIMIT_BOTS', "بیک اینڈ میں آپ کتنے بوٹس دیکھیں گے");
DEFINE('_EW_DESC_LIMIT_VISITORS', "بیک اینڈ میں آپ کتنے حقیقی وزیٹرز دیکھیں گے");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "زیاد�? سے زیاد�? حرو�? جو ک�? لمبے عنوانات اور یو۔آر۔آئیز میں دکھانے �?یں");
DEFINE('_EW_DESC_TRUNCATE_STATS', " زیاد�? سے زیاد�? حرو�? جو ک�? دائیں اعدادوشمارکے پینل میں دکھانے �?یں");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "ڈیٹا بیس میں اعدادوشمار کتنے دن رکھےجائیں، 0 = لا محدود");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "جب آپ اپنے �?وسٹنگ سرور سے ایک مختل�? ٹائم زون میں �?وں۔ مثبت یا من�?ی قدر گھنٹوں میں)");
DEFINE('_EW_DESC_WEEK_OFFSET', "�?�?ت�? کا آ�? سیٹ، ٹائم سٹیمپ 3600 * 24 * 7 �?�?ت�? کا نمبر دیتی �?ے1970۔1۔1 سے۔ ی�? آ�? سیٹ ایک تصیح �?ے اس کو سوموار سے شروع کرنے کے لئے");
DEFINE('_EW_DESC_DAY_OFFSET', " دن کا آ�? سیٹ، ٹائم سٹیمپ 3600 * 24 دن کا نمبر دیتی �?ے1970۔1۔1 سے۔ ی�? آ�? سیٹ ایک تصیح �?ے اس کو 00:00 پر شروع کرنے کے لئے");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>( ورژن میں کار آمدPRO)</b> ایک خالی آئیکون 1بائی 1 کو �?رنٹ اینڈ میں استعمال کرنے کے لیے");
DEFINE('_EW_DESC_IP_STATS', "آئی پی ایڈریس کے اعدادوشمار کو کریں۔ بعض ممالک میں، آئی پی کو لمبے عرصے تک ڈیٹا بیس میں رکھنا قانوناً منع �?ے۔ اپنی ذم�? داری پر استعمال کریں ");
DEFINE('_EW_DESC_HIDE_ADS', "ی�? ترتیب اشت�?ارات کو بیک اینڈ سے چھپاتی �?ے، اگر ی�? واقعی آپ کو تنگ کرتے �?یں تو۔ ان کو رکھتے �?وئے آپ اس ٹول کی مزید ترقی میں معاون �?وں گے۔ آپ کا شکری�? ");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', " ان چیک کریں، اگر آپ ماوس کلک کی بجائے ماوس اوور پر ٹول ٹپ دکھانا چا�?تے �?یں");
DEFINE('_EW_DESC_SERVER_URI_KEY', " 'SCRIPT_URL'ڈی�?الٹ �?ے،   جو ک�? معیار �?ے اگر آپ یو آر ایل کو دوبار�? لکھ ر�?ے �?یں تو، اگر ی�? صر�? انڈیکس کو لاگ کر ر�?ا �?ے تو اس کو ایسے بھی سیٹ کیا جا سکتا �?ے 'REDIRECT_URL'");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "پیغام جو بلاکڈ یوزر کو دکھائی دے گا یا مزید معلومات ک�? آپ ان یوزرز کو کیوں بلاک کر ر�?ے �?یں");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "ٹول ٹپ کی چوڑائی");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "ٹول ٹپ کی لمبائی");
DEFINE('_EW_DESC_TOOLTIP_URL', "آپ ی�?اں کوئی بھی یو آر ایل لکھ سکتے �?یں، وزیٹر کا آئی پی دیکھنے کے لیے۔ {آئی پی} وزیٹر کے آئی پی سے بدل دیا جاےَ گا. Eg. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "آپ ی�?اں کوئی بھی یو آر آئی جس کو آپ اعدادوشمار سے نظر انداز کرنا چا�?تے �?یں، لکھ سکتے �?یں۔ آپ ی�?اں وائلڈ کارڈ * یا ؟ بھی استعمال کر سکتے �?یں۔ . Eg.: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "ی�?اں ایک �?د�? کا نام مخصوص کریں۔ ی�? نام آپ اعدادوشمار میں دیکھیں گے");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "�?ر و�? چیز جو آپکی ڈومین نیم کے بعد �?وتی �?ے جیسے http://www.codegravity.com/projects/ the URI is: /projects/ (Example to use: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', " ایک ایسا ویریبل جس کو آپ عام طور پریو آرایل میں دیکھ سکتے �?یں ؟ کے بعد جیسےGET. Eg. http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. آپ ساری ویلیو کھوجنے کے لیے* بھی استعمال کر سکتے �?یں. (Example to use: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "ی�?اں آپ کو گزشت�? �?یلڈ سے ایک ویلیو کا جوڑ مخصوص کرنا �?و گا۔ مثلاً: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "بلکل ایسے �?ی مگر �?م و�? ویلیوز چیک کر ر�?ے �?یں جو �?ارمز سے جمع �?وئی �?یں۔ چناچ�? جب آپ اپنی ویب سائٹ پر �?ارم بنائیں گے، جس میں ایک �?یلڈ �?و گی &lt;input type='text' name='<u>experiences</u>' /&gt;. (Example to use: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "�?یلڈ کی اس ویلیو کے لیے ایک میچ مثلاً �?م ی�? جاننا چا�?تے �?یں ک�? یوزر کو جاوا کا تجرب�? �?ےPOST (مثلاً: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "ایک ص�?ح�? کا عنوان جس کو میچ کرنا �?ے۔ (مثلاً: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "ایک لاگڈ ان یوزر کا ایک نام مثلاً (<b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "آئی پی ج�?اں سے یوزر آیا �?ے: مثلاً (<b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', " ج�?اں سے یوزر آیا �?ے: مثلاً ایک یو آر ایل (<b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "یوزر آپکی مخصوص کرد�? یو۔آر۔آئی پر ری ڈائریکٹ �?و گیا �?ے۔ اس کی ا�?میت 'بلاکنگ' سے زیاد�? �?ے۔ مثلاً  ( <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "کتنے حرو�? گولز ٹیبل میں سے کم کرنے �?یں");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "کوڈ  گریوٹی ڈاٹ کام کا بیک لنک، آپ اس کوبند کر سکتے �?یں، لیکن �?م آپ کے مشکور �?وں گے اگر آپ اس کو ر�?نے دیں گے۔ آپکا شکری�? <b>(functional in PRO version)</b>");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "�?رنٹ اینڈ موڈیول میں ممالک کے کل اعدادوشمار دکھائیں۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گیCACHE_FRONTEND_ ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "اگر آپ ویزٹرز/ممالک کی ترتیب آپس میں بدلنا چا�?تے �?یں تو اس کو ان چیک کر دیں اور وزیٹرز پ�?لے ظا�?ر �?وں گے");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "ممالک کی تعداد جو ک�? �?رنٹ اینڈ میں ظا�?ر کرنے �?یں");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "�?رنٹ اینڈ موڈیول میں وزیٹرز کے کل اعدادوشمار دکھائیں۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گیCACHE_FRONTEND_");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "�?رنٹ اینڈ میں ممالک کا مجموع�? حاصل کرنے میں کیشے کا وقت سیکنڈز میں");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', " �?رنٹ اینڈ میں وزیٹرز کا مجموع�? حاصل کرنے میں کیشے کا وقت سیکنڈز میں");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "�?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے: آج کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گیCACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "�?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے: کل کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', " �?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے: اس �?�?ت�? کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', " �?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے: گزشت�? �?�?تے کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', " �?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے: اس ما�? کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی  CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', " �?رنٹ اینڈ  میں وزیٹرز دکھانے کے لئے:گزشت�? ما�? کے لیے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', " کل وزیٹرز دکھانے کے لئےجب سے جمل�? واچ انسٹال کی گئی �?ے۔ اگر تبدیلی کی گئی، ی�? سیٹنگ یا ترتیب مقرر�? وقت کے بعد �?رنٹ اینڈ میں موثر �?و گی CACHE_FRONTEND_...");
DEFINE('_EW_DESC_LANGUAGE', "زبان کی �?ائل استعمال کرنے کے لیے۔ اگر آپ ایک نئی زبان کی �?ائل بنانا چا�?تے �?یں تو پ�?لے پروجیکٹ کا �?وم پیج دیکھیں اور اگر زبان کی �?ائل ابھی بھی ی�?اں ن�?یں �?ے تو بس انگلش ڈاٹ پی ایچ پی اس ڈائریکٹری میں کاپی کر دیں۔ پھردائیں طر�? تمام ا�?م ویلیوز کا ترجم�? کریں۔ /components/com_extrawatch/lang/");
DEFINE('_EW_DESC_GOALS', "گولز آپ کو سپیشل پیرامیٹرز مخصوص کرنے کے قابل بناتے �?یں۔ جب ی�? پیرامیٹر میچ کرتے �?یں تو گول کاونٹر بڑھ جاتا �?ے۔ اس طرح سے آپ نگرانی کر سکتے �?یں ک�? یوزر نے ایک مخصوص لنک کو وزٹ کیا �?ے، ایک خاص ویلیو کو پوسٹ کیا �?ے، ایک خاص یوزر کا نام �?ے یا ایک خاص ایڈریس سے آیا �?ے۔ آپ ایسے یوزر کو بلاک یا کسی دوسرے لنک پر بھیج سکتے�?یں۔");
DEFINE('_EW_DESC_GOALS_INSERT', "نام کی �?یلڈ کے علاو�? تمام میں آپ * یا ؟ وائلڈ کارڈ کے طور پر استعمال کر سکتے �?یں: مثلاً: ?ear (will match: near, tear, ..),  p*r (will match: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "1 پر سیٹ کریں اگر آپ وزیٹر کو بلاک کرنا چا�?تے �?یں۔ و�? باقی مواد ن�?یں دیکھ سکے گا، صر�? ی�? پیغام ک�? و�? بلاک �?و گیا �?ے۔ بغیر کسی ری ڈائریکش کے اور اسکا آئی پی 'بلاکڈ' اعدادوشمار میں شامل �?و گیا �?ے (Example to use: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "ملک کے لیے شرط");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "ملک کے لیے  الٹی شرط");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', " 2 حرو�? کا ملک کا کوڈ بڑے حرو�? میں(Eg: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "اندرونی");
DEFINE('_EW_STATS_FROM', "سے");
DEFINE('_EW_STATS_TO', "کو");
DEFINE('_EW_STATS_ADD_TO_GOALS', " گولز میں درج کریں");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "اس ملک کے لیے گول کا اضا�?�? کریں");
DEFINE('_EW_MENU_REPORT_BUG', "بگ یا �?یچر کو رپورٹ کریں");
DEFINE('_EW_GOALS_COUNTRY', "ملک");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "اگر آپ چا�?تے �?یں ک�? ممالک کے نام بڑے حرو�? میں �?وں �?رنٹ اینڈ میں (Eg: GERMANY, UNITED KINGDOM کی بجائے Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', " �?رنٹ اینڈ میں یوزرز حاصل کرنے میں کیشے کا وقت سیکنڈز میں");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "ابتدائی ویلیو جو مجموعے میں نظر آئے: �?رنٹ اینڈ میں۔ کارآمد �?ے اگر آپ کسی دوسرے ٹول سے آئے �?یں تو مثلاً 2000۔ واپس 0 پر سیٹ کر دیں اگر آپ ی�? �?یچر استعمال کرنا ن�?یں چا�?تے");
DEFINE('_EW_DESC_IGNORE_USER', "اس ٹیکسٹ باکس میں درج یوزرز کو نظر انداز کریں۔ ایک �?ر لائن میں۔(Eg.: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', " آج کا سب سے زیاد�? متحرک یوزر، مجموعے میں سے");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "نیچے سپیم ورڈ کی لسٹ میں سےال�?اظ پر مشتمل بینزکو قابل بنایئں؟");
DEFINE('_EW_DESC_SPAMWORD_LIST', "عام سپیم ال�?اظ جو سپیم بوٹس استعمال کرتے �?یں۔ آپ ی�?اں وائلڈ کارڈ استعمال کر سکتے �?یں۔ اگر درج بالا سیٹنگ قابل عمل �?وئی، جمل�? واچ ی�? چیک کرے گا ک�? کیا حمل�? آور نےآپکی ویب سائٹ پر ان سپیم ال�?اظ پر مشتمل ایک �?ارم جمع کروایا �?ے۔ کام کرتا �?ے اگر �?ارم صر�? جمل�? والی ویب سائٹ لوڈ کرے- �?ورم، آراء، لیکن ی�? بلاک کرنے کے لیے مکمل موثر ان سپیم بوٹس کے خلا�? �?ے جو �?ر ممکن �?ارم جمع کروانے کی کوشش کرتے �?یں۔)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "اینٹی-سپیم");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "ایک لنک �?رنٹ اینڈ یوزرز کے موڈیول میں- آپ کو ایک یو آر ایل مخصوص کرنے کے قابل بناتا �?ے، جو تب کھلے گی جب یوزر یوزرنیم پر کلک کرے گا۔ لازماً {یوزر} کی سٹرنگ پر مشتمل �?و، جو اصل یوزر سے بدل جائے گا۔ (Eg. index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "کی �?ریزز");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "زیاد�? سے زیاد�? ویلیو، �?سٹری کے ٹیب میں (Example: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "وزٹس میں صر�? آخری وزٹ کیا گیا ص�?ح�? دکھائیں، سارے ن�?یں");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "وزٹس میں وزٹ کیے گئے ص�?ح�? کے عنوان سے سائٹ کا مکرر نام چھپائیں");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "وزٹ �?سٹری کے لیے زیاد�? سے زیاد�? وزیٹرز کی تعداد جو ڈیٹا بیس میں رکھنی �?ے۔ اس ترتیب سے محتاط ر�?یں، اگر آپ کے پاس ٹری�?ک زیاد�? �?ے تو ی�? ب�?ت تیزی سے بڑھ سکتا �?ے۔ �?میش�? چیک کریں ک�? �?سٹری ٹیبل سٹیٹس میں کتنا ڈیٹا رکھتا �?ے");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "ان انسٹال کرنے پر ڈیٹا بیس ٹیبل ر�?نے دیں۔  اس آپشن کو ان انسٹال کرنے سے پ�?لے چیک لگا دیں اگر آپ ایک اپ گریڈ کر ر�?ے �?یں اور ڈیٹا رکھنا چا�?تے �?یں");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', " آپ گزشت�? دن کی رپورٹس کے ساتھ شب کی ای میلز موصول کریں گے جو آپ صبح کو پڑھ سکتے �?یں");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "ای میلز ایڈریس جس پر آپ ی�? رپورٹس موصول کریں گے");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "ای میل رپورٹس میں صر�? و�? قطاریں شامل کریں ج�?اں �?یصد {ویلیو} سے زیاد�? �?ے۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "ای میل رپورٹس میں صر�? ایک مثبت دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے زیاد�? �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(example: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', " ای میل رپورٹس میں صر�? ایک من�?ی دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے کم �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(example: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', " ای میل رپورٹس میں صر�? سات مثبت دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے زیاد�? �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً<i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', " ای میل رپورٹس میں صر�? سات من�?ی دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے کم �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(example: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', " ای میل رپورٹس میں صر�? اٹھائیس مثبت دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے زیاد�? �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(example: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', " ای میل رپورٹس میں صر�? اٹھائیس من�?ی دن کی تبدیل شد�? ویلیوز شامل کریں جو{ویلیو}  �?یصد سے کم �?یں۔ اس کو 0 پر سیٹ کر دیں اگر آپ اس �?یچر کو استعمال ن�?یں کرنا چا�?تے۔ مثلاً <i>(example: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(ورژن میں کارآمد PRO)</b>آپ لوگوکا لنک �?را�?م کرد�? وص�? کے ساتھ بنانا چا�?تے �?یں اس ترتیب کو �?عال کریں اگر rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', " ای میل کی قطارکے نام کے زیاد�? سے زیاد�? حرو�?۔ اس کو تبدیل کرلیں اگر آپکے ای میل کلائنٹ کی ونڈو ب�?ت چھوٹی �?ے");

DEFINE('_EW_MENU_HISTORY', "تاریخ");
DEFINE('_EW_MENU_EMAILS', "ای میلز");
DEFINE('_EW_MENU_STATUS', "ڈیٹا بیس کا سٹیٹس");
DEFINE('_EW_DESC_BLOCKED', "ی�? آئی پیز اینٹی-سپیم کی طر�? سے بلاک تھے");


DEFINE('_EW_HISTORY_VISITORS', "ویزیٹرز کی �?سٹری");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "صر�? آخری ریکارڈز دکھا ر�?ا �?ے۔ اس ویلیو کو تبدیل کرنے کے لیے ترتیبات اور پھر �?سٹری اور پر�?ارمنس میں HISTORY_MAX_DB_RECORDS ۔ محتاط ر�?یں، ی�? ترتیب ذیلی ڈیٹا کے لوڈ �?ونے کے دورانئے پر اثر انداز �?و سکتی �?ے   ");
DEFINE('_EW_MENU_BUG', "بگ کو رپورٹ کریں");
DEFINE('_EW_MENU_FEATURE', "�?یچر کی درخواست کریں");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "کی ورڈز");

DEFINE('_EW_BLOCKING_UNBLOCK', "ان بلاک");
DEFINE('_EW_STATS_KEYPHRASE ', "کی �?ریز");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "ٹیبل کا نام");
DEFINE('_EW_STATUS_DATABASE_ROWS', "قطاریں");
DEFINE('_EW_STATUS_DATABASE_DATA', "ڈیٹا");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "مجموع�?");

DEFINE('_EW_EMAIL_REPORTS', "ای میل رپورٹس");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "کل سے �?لٹر شد�? ای میل رپورٹ بنائی گئی");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "ای میل کی ویلیو کے �?لٹرز");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "ویلیو");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "�?یصد");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1 دن کی تبدیلی");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', " 7 دن کی تبدیلی ");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', " 28 دن کی تبدیلی ");
DEFINE('_EW_ANTISPAM_BLOCKED', "جمل�? واچ نے سپیمرز �?ٹس کو آج بلاک کیا �?ے، کل: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "بلاکڈ آئی پی ایڈریسز");
DEFINE('_EW_ANTISPAM_SETTINGS', "اینٹی-سپیم کی ترتیب");
DEFINE('_EW_TRAFFIC_AJAX', " ٹری�?ک کو اپ ڈیٹ کرتا �?ے، سوائے نقشوں کےAJAX");


DEFINE('_EW_HISTORY_PREVIOUS', "پیچھے");
DEFINE('_EW_HISTORY_NEXT', "آگے");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "ممالک کے کالمز کی تعداد");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "ممالک کی قطاروں کی تعداد");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "ملک کا نام دکھائے ک�? ن�?");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "پ�?لے پرچم دکھائے، پھر �?یصد");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "کی الٹی شرطGET");
DEFINE('_EW_GOALS_POST_INVERSED', "کی الٹی شرطPOST");
DEFINE('_EW_GOALS_TITLE_INVERSED', " عنوان کی الٹی شرط");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "یوزر نیم کی کی الٹی شرط");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', " ج�?اں سے آئےکی الٹی شرط");

DEFINE('_EW_STATS_MAP', " تاز�? ترین وزٹ میپ");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "آخری وزٹ میپ ظا�?ر کرنے کے لیے ی�? لکھیں <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> ");
DEFINE('_EW_STATS_MAP_STORE_KEY', "سٹور کی");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "م�?ربانی کر کے مستند ipinfodb  کی درج کریں جو آپ نے ادھر سے حاصل کی �?ے <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "  بری درخواست");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "جمع شد�? �?ارم کی �?یلڈز");
DEFINE('_EW_VISIT_URL_PARAMETERS', "یو آر ایل پیرامیٹرز");
DEFINE('_EW_VISIT_ADD_PAGE', " �?د�? کے طور پر ص�?ح�? شامل کریں");
DEFINE('_EW_VISIT_BLOCK_IP', " ایڈریس کو بلاک کریں IP اس ");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " اس جمع شد�? �?ارم کے ویریبل کو گول کے طور پرایڈ کریں");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " یو آر ایل پیرامیٹرکو گول کے طور پر ایڈ کریں اس");

DEFINE('_EW_TREND_EMPTY', "خالی");

DEFINE('_EW_NOT_NUMBER', "خبردار :  آپ نے جس ویلیو کا اندراج کیا �?ے و�? ایک �?ندس�? ن�?یں �?ے۔ جمل�? واچ ٹھیک طرح سے کام ن�?یں کرے گا");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp;  ی�? 15 دن کا ایویلوایشن ورژن �?ے۔%d دن باقی �?یں۔ م�?ربانی کر کے اپنی ڈومین کے لیے جمل�? واچ کا تا حیات لائسنس خریدیں اس کے لیے اور آنے والے ورژنز کے: <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'> جمل�? واچ لائسنس کا تا حیات  </a> ");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " آپکے عارضی ورژن کی معیاد ختم �?و گئی �?ے۔ برائے م�?ربانی جمل�? واچ خریدیں");
DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "  لائسنس کامیابی سے �?عال �?و گیا �?ے۔ آپکا شکری�?");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "غلط : لائسنس کی اورآپکی ڈومین میچ ن�?یں کرتے۔ کیا آپ نےی�?ی ڈومین کا نام ڈونیشن �?ارم میں لکھا تھا جو آپ نیچے دیکھ ر�?ے �?یں؟ درست کی کے لیے درخواست کریں یا رابط�? کریں : support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "اگر آپ کا�?ی دیر سے ی�?ی پیغام دیکھ ر�?ے �?یں تو آپکی لائیو سائٹ شائد غلط �?ے۔
                    components/com_extrawatch/config.php اس کو اوپن کریں
                    کمنٹ ختم کریں اور اپنی اصل لائیو سیٹ کریں:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "خبردار: آپکے براوزر میں موجود سائٹ اور کن�?یگیوریش میں لائیو سائٹ آپس میں ن�?یں ملتیں");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "لائیو سائٹ کو %s پر سیٹ کریں اور جاری رکھیں");

DEFINE('_EW_ADMINHEADER_JW', "جمل�? واچ ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "بیک لنک کو ختم کریں");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "علمی بنیاد");
DEFINE('_EW_ADMINHEADER_FLOW', "ب�?او");
DEFINE('_EW_ADMINHEADER_GRAPHS', "گرا�?س");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "کمپوننٹس");
DEFINE('_EW_ADMINHEADER_REVIEW', "ریویو");
DEFINE('_EW_ADMINHEADER_WRITE', "لکھیں ایک ");

DEFINE('_EW_FLOW_TRAFFIC', "ٹری�?ک کا ب�?او");
DEFINE('_EW_FLOW_SELECT_PAGE', "ص�?ح�? منتخب کریں");
DEFINE('_EW_FLOW_OUTG_LINKS', "روٹ کے بیرونی لنکس کی تعداد");
DEFINE('_EW_FLOW_NESTING', "نیسٹنگ کا لیول");
DEFINE('_EW_FLOW_SCALE', "پیمان�?");

DEFINE('_EW_COMERCIAL_AD_FREE', "اشت�?ارات سے پاک ورژن");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "عطی�? دینے کے لیے آپ کا ب�?ت شکری�?");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "آپ کی%s ڈومین کی رجسٹریشن کی ی�? �?ے ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "اب آپ بیک لنک کو ختم کر سکتے �?یں یا جمل�? واچ کا لوگو چھپا سکتے �?یں �?رنٹ اینڈ سے ترتیبات سے ");


DEFINE('_EW_SIZES_LAST_CHECK', "آخری چیک تب کیا گیا تھا:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Size of component/module in /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "اجزاء");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "مجموع�?:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "سائز");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "سب کو ری�?ریش کریں");

DEFINE('_EW_SIZEDATABASE_TABLE', "ٹیبل");
DEFINE('_EW_SIZEDATABASE_SIZE', "سائز");
DEFINE('_EW_SIZEDATABASE_1DAY', " 1 دن کی تبدیلی ");
DEFINE('_EW_SIZEDATABASE_7DAY', " 7 دن کی تبدیلی ");
DEFINE('_EW_SIZEDATABASE_28DAY', " 28 دن کی تبدیلی ");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "کوئی ڈیٹا ن�?یں");
DEFINE('_EW_SIZEDATABASE_TOTAL', "مجموع�?:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', " سب کو ری�?ریش کریں ");
DEFINE('_EW_SIZEMODULES_TOTAL', "مجموع�?:");
DEFINE('_EW_SIZEMODULES_MODULE', "موڈیول");
DEFINE('_EW_SIZEMODULES_SIZE', "سائز");

DEFINE('_EW_SIZES_FILES', " �?ائلیں اور ڈائریکٹریاں");
DEFINE('_EW_SIZES_BYTES', "بائٹس");
DEFINE('_EW_SIZES_KB', "کلو بائٹس");
DEFINE('_EW_SIZES_MB', "میگا بائٹس ");
DEFINE('_EW_SIZES_GB', "گیگا بائٹس ");
DEFINE('_EW_SIZES_REFRESH', "ری�?ریش");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "میگا بائٹس");
DEFINE('_EW_STATUS_DATABASE', "ڈیٹا بیس کے ٹیبل کا سائز");


DEFINE('_EW_DESC_IPINFODB_KEY', "آخری وزٹ کا میپ سے <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "ٹائم زون آ�? سیٹ کولازمی بنائیں ");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "اپ ڈیٹ");
DEFINE('_EW_MENU_UPDATE_TITLE', " بیک اپ اور اپ گریڈ");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "�?ری ورژن میں دستیاب ن�?یں، برائے م�?ربانی لائسنس ٹیب کو چیک کریں");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "سپیم کے ال�?اظ کو �?عال کریں");
DEFINE('_EW_SPAMWORD_LIST', "سپیم کے ال�?اظ کی �?�?رست");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Hide Repetitive Title");
DEFINE('_EW_TRUNCATE_VISITS', "وزٹس کو مختصر کریں");
DEFINE('_EW_TRUNCATE_STATS', "اعداد و شمار کو مختصر کریں");
DEFINE('_EW_TRUNCATE_GOALS', "گولز کو مختصر کریں");
DEFINE('_EW_LIMIT_BOTS', "  بوٹس  کو محدود کریں");
DEFINE('_EW_LIMIT_VISITORS', " وزیٹرز کو محدود کریں");
DEFINE('_EW_TOOLTIP_WIDTH', "ٹول ٹپ کی چوڑائی");
DEFINE('_EW_TOOLTIP_HEIGHT', "ٹول ٹپ کی لمبائی");
DEFINE('_EW_TOOLTIP_URL', "URLٹول ٹپ کی ");
DEFINE('_EW_TOOLTIP_ONCLICK', "ٹول ٹپ کلک کرنے پر");
DEFINE('_EW_IP_STATS', " کے اعدادوشمارIP");
DEFINE('_EW_IPINFODB_KEY', "IP Info DB key ");
DEFINE('_EW_ONLY_LAST_URI', "URI صر�? آخری");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "�?رنٹ اینڈ کا لوگو چھپائیں ");
DEFINE('_EW_FRONTEND_NOFOLLOW', " �?رنٹ اینڈ کو نو �?الو کریں");
DEFINE('_EW_FRONTEND_NO_BACKLINK', " �?رنٹ اینڈ کے بیک لنک نو کریں");
DEFINE('_EW_FRONTEND_USER_LINK', "�?رنٹ یوزر کے لنکس");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', " �?رنٹ اینڈ ممالک کا پ�?لا");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', " �?رنٹ اینڈ ممالک کا نام");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', " �?رنٹ اینڈ ممالک بڑے حرو�? میں");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', " �?رنٹ اینڈ ممالک کے پرچم کی �?�?رست");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', " �?رنٹ اینڈ ممالک کا نمبر");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', " �?رنٹ اینڈ ممالک کے زیاد�? سے زیاد�? کالم");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', " �?رنٹ اینڈ ممالک کی زیاد�? سے زیاد�? قطاریں ");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "آج کے �?رنٹ اینڈ وزیٹرز ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', " کل کے �?رنٹ اینڈ وزیٹرز ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', " اس �?�?ت�? کے �?رنٹ اینڈ وزیٹرز");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', " گزشت�? �?�?ت�? کے �?رنٹ اینڈ وزیٹرز");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', " اس ما�? کے �?رنٹ اینڈ وزیٹرز");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "گزشت�? ما�? کے �?رنٹ اینڈ وزیٹرز ");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', " �?رنٹ اینڈ وزیٹرز کا مجموع�? چھپائیں");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', " �?رنٹ اینڈ وزیٹرز کا مجموع�? ابتدائی ");
DEFINE('_EW_HISTORY_MAX_VALUES', "�?سٹری کی سب سے زیاد�? ویلیوز");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "�?سٹری کی سب سے زیاد�? ریکارڈز");
DEFINE('_EW_UPDATE_TIME_VISITS', "ٹائم وزٹس کو اپ ڈیٹ کریں");
DEFINE('_EW_UPDATE_TIME_STATS', "ٹائم سٹیٹس کو اپ ڈیٹ کریں");
DEFINE('_EW_STATS_MAX_ROWS', "اعدادوشمار کی سب سے زیاد�? قطاریں");
DEFINE('_EW_STATS_IP_HITS', " اعدادوشمار کی آئی پی �?ٹس");
DEFINE('_EW_MAXID_BOTS', " سے زیاد�? آئی ڈی بوٹس زیاد�?");
DEFINE('_EW_MAXID_VISITORS', " سے زیاد�? آئی ڈی ویزٹرز زیاد�? ");
DEFINE('_EW_STATS_KEEP_DAYS', "اعدادوشمار رکھنے کے دن ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', " �?رنٹ اینڈ ممالک کا کیشے ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', " �?رنٹ اینڈ ویزٹرز کا کیشے ");

DEFINE('_EW_UNINSTALL_KEEP_DATA', "ان انسٹال کا رکھا جانیوالا ڈیٹا");
DEFINE('_EW_IGNORE_IP', "کو نظر انداز کریں IP");
DEFINE('_EW_IGNORE_URI', "کو نظر انداز کریں URI");
DEFINE('_EW_IGNORE_USER', "یوزرکو نظر انداز کریں ");
DEFINE('_EW_BLOCKING_MESSAGE', "بلاکنگ کا پیغام");
DEFINE('_EW_SERVER_URI_KEY', "سرور کی یو آر آئی کی");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', " �?رنٹ اینڈ وزیٹرز کا مجموع�? ابتدائی ");
DEFINE('_EW_SIZEDATABASE_RECORDS', "ریکارڈز");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " بلاکنگ کو موثر بنانے کی لیے، آپ کوکسی بھی مواد یا �?ارمز سے پ�?لے جمل�? واچ ایجنٹ کو شائع کرنے کی ضرورت �?ے۔ مثلاً آپ کے ٹیمپلیٹ کی بائیں جانب.
                    <br/>
                    پر جا ئیں Module Manager -> ExtraWatch agent -> select position as left");

DEFINE('_EW_EMAIL_SEO_REPORTS', " رپورٹسSEO");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', " کی شبان�? ای میل رپورٹس �?عال �?وئیںSEO");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "انسٹالیشن کی مثال دیکھیں ");

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