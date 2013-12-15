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

defined('_JEXEC') or die('নির�?দিষ�?টদের �?লাকা');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.
DEFINE('_EW_MENU_STATS', "সরাসরি অবস�?থান");
DEFINE('_EW_MENU_GOALS', "লক�?ষ�?যগ�?লি");
DEFINE('_EW_MENU_SETTINGS', "ব�?যবস�?থাপনা");
DEFINE('_EW_MENU_CREDITS', "স�?বীকৃতি সমূহ");
DEFINE('_EW_MENU_FAQ', "প�?রশ�?নোত�?তর");
DEFINE('_EW_MENU_DOCUMENTATION', "নথিকরণ");
DEFINE('_EW_MENU_LICENSE', "অন�?মতি পত�?র");
DEFINE('_EW_MENU_DONATORS', "আমাদের অন�?শারিরা");
DEFINE('_EW_MENU_SUPPORT', "পেছনের বিজ�?ঞাপনগ�?লি সরানোর জন�?য জ�?মলাওয়াচকে অন�?শরন কর�?ন");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "সর�?বশেষ পরিদর�?শক");
DEFINE('_EW_VISITS_BOTS', "বটসমূহ");
DEFINE('_EW_VISITS_CAME_FROM', "যেখান থেকে �?সেছিলেন");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', " আপনার জ�?মলাওয়াচ মডিউলটি প�?রকাশিত হয়নি/ কোন নত�?ন অবস�?থান ধারণ করা হয়নি। প�?রকাশ করতে হলে মডিউল বিভাগে প�?রবেশ কর�?ন �?বং সকল পৃষ�?ঠায় �?টি প�?রকাশ কর�?ন");
DEFINE('_EW_VISITS_PANE_LOADING', "পরিদর�?শনের জন�?য লোড হচ�?ছে। ");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "সপ�?তাহের অবস�?থানগ�?লি পরিদর�?শন কর�?ন");
DEFINE('_EW_STATS_WEEK', "সপ�?তাহ");
DEFINE('_EW_STATS_THIS_WEEK', "বর�?তমান সপ�?তাহ");
DEFINE('_EW_STATS_UNIQUE', "অনন�?য");
DEFINE('_EW_STATS_LOADS', "লোডগ�?লি");
DEFINE('_EW_STATS_HITS', "হিটগ�?লি");
DEFINE('_EW_STATS_TODAY', "আজ");
DEFINE('_EW_STATS_FOR', "জন�?য");
DEFINE('_EW_STATS_ALL_TIME', "সর�?বসময়");
DEFINE('_EW_STATS_EXPAND', "বিস�?তৃত কর�?ন");
DEFINE('_EW_STATS_COLLAPSE', "পাতিত কর�?ন");
DEFINE('_EW_STATS_URI', "পৃষ�?ঠাগ�?লি");
DEFINE('_EW_STATS_COUNTRY', "দেশগ�?লি");
DEFINE('_EW_STATS_USERS', "ব�?যবহারকারীরা");
DEFINE('_EW_STATS_REFERERS', "পরিচয় করিয়েছে যারা");
DEFINE('_EW_STATS_IP', "আইপি গ�?লি");
DEFINE('_EW_STATS_BROWSER', "ব�?রাউজারগ�?লি");
DEFINE('_EW_STATS_OS', "ও�?স");
DEFINE('_EW_STATS_KEYWORDS', "মূলশব�?দগ�?লি");
DEFINE('_EW_STATS_GOALS', "লক�?ষগ�?লি");
DEFINE('_EW_STATS_TOTAL', "সর�?বমোট");
DEFINE('_EW_STATS_DAILY', "প�?রতিদিন");
DEFINE('_EW_STATS_DAILY_TITLE', "প�?রতিদিনের অবস�?থান");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "সর�?বসময়ের অবস�?থান");
DEFINE('_EW_STATS_LOADING', "লোড হচ�?ছে...");
DEFINE('_EW_STATS_LOADING_WAIT', "লোড হচ�?ছে... �?কট�? অপেক�?ষা কর�?ন");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "অবর�?দ�?ধ আইপিগ�?লি");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "সরাসরি আইপি প�?রবেশ কর�?ন");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "অবর�?দ�?ধ করার জন�?য �?কটি আইপি প�?রবেশ করান ( যেমন, 217.242.11.54 or 217.* অথবা 217.242.* �?ই ওয়াইল�?ডকার�?ডের সাথে মিলে যায় �?মন সকল আইপি বন�?ধ করার জন�?য)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "আসলেই বন�?ধ করার জন�?য পরিবর�?তন");
DEFINE('_EW_STATS_PANE_LOADING', "অবস�?থান গ�?লি লোড করা হচ�?ছে");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "ব�?যবস�?থাপনা");
DEFINE('_EW_SETTINGS_DEFAULT', "পূর�?বাবস�?থান");
DEFINE('_EW_SETTINGS_SAVE', "সংরক�?ষন কর�?ন");
DEFINE('_EW_SETTINGS_APPEARANCE', "যেভাবে আবির�?ভাব");
DEFINE('_EW_SETTINGS_FRONTEND', "সামনের দিক");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "ঘটনাবলি �?বং কৃতিত�?ব");
DEFINE('_EW_SETTINGS_ADVANCED', "আরো অগ�?রগতি");
DEFINE('_EW_SETTINGS_IGNORE', "�?ড়িয়ে যান");
DEFINE('_EW_SETTINGS_BLOCKING', "অবর�?দ�?ধ কর�?ন");
DEFINE('_EW_SETTINGS_EXPERT', "বিশেষজ�?ঞ");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "আপনি কি আসলেই সকল পরিসংখ�?যান �?বং পদিদর�?শক তথ�?য প�?নরাস�?থাপন করতে চান?");
DEFINE('_EW_SETTINGS_RESET_ALL', "সবকিছ�? প�?নরাস�?থাপন কর�?ন");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "সকল পরিসংখ�?যান �?বং পরিদর�?শক তথ�?য প�?নরাস�?থাপন কর�?ন");
DEFINE('_EW_SETTINGS_LANGUAGE', "ভাষা");
DEFINE('_EW_SETTINGS_SAVED', "ব�?যবস�?থাপনাগ�?লি সংরক�?ষন হলো");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "আপনার আইপি যোগ কর�?ন");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "লিস�?টে যান");

// Other / mostly general.
DEFINE('_EW_TITLE', "�?কটি চলমান-সময়ের �?জাক�?স জ�?মলা মনিটর");
DEFINE('_EW_BACK', "পেছনে");
DEFINE('_EW_ACCESS_DENIED', "�?টি দেখার জন�?য আপনার কোন অন�?মতি নেই!");
DEFINE('_EW_LICENSE_AGREE', "উপরের নিয়মকান�?ন �?বং শর�?তাগ�?লি সাথে আমি �?কমত");
DEFINE('_EW_LICENSE_CONTINUE', "�?গিয়ে যান");
DEFINE('_EW_SUCCESS', "সক�?রিয়তা সফল হয়েছে");
DEFINE('_EW_RESET_SUCCESS', "সকল পরিসংখ�?যান �?বং পরিদর�?শক তথ�?য সফলতার সাথে ম�?ছে গেছে");
DEFINE('_EW_RESET_ERROR', "তথ�?য সাফল�?যের সাথে মোছা সম�?ভব হয়নি, সম�?ভ�?যবত: কোন কিছ�? ভ�?ল হয়েছে");
DEFINE('_EW_CREDITS_TITLE', "স�?বীকৃতি সমূহ");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "প�?রতিদিনের �?বং সাপ�?তাহিক অবস�?থানগ�?লি");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "�?জাক�?স আপনাকে অন�?মতি দেয়নি; দয়া করে আপনার ডোমেইন �?র �?ই পরিসংখ�?যানগ�?লি ঠিক করে দিন। জ�?মলা তে configuration.php দেখ�?ন-");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "আপনি হয়তো �?ইম�?হূর�?তে আপনার ডোমেইন �?র সামনে www. দিতে ভ�?লে গেছেন। আপনার জাভাস�?ক�?রিপ�?ট প�?রবেশকরার চেস�?টা করছে");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "থেকে");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "আপনি কিভাবে ব�?�?লেন যে �?টি �?কটি অন�?য ডোমেইন?");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "সর�?বশেষ �?ক�?সটেন�?সন কোড পেতে হলে যান");
DEFINE('_EW_HEADER_CAST_YOUR', "দয়া করে আপনার");
DEFINE('_EW_HEADER_VOTE', "ভোট");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "ট�?লটিপ দেখানোর জন�?য ক�?লিক কর�?ন");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "ট�?লটিপ দেখানোর জন�?য মাউসটি উপরে নিয়ে যান");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "গতকালের অগ�?রসরতা");
DEFINE('_EW_TOOLTIP_HELP', "বাইরের আরো অনলাইন সাহায�?য পেতে");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "�?ই উইন�?ডোটি বন�?ধ কর�?ন");
DEFINE('_EW_TOOLTIP_PRINT', "ছাপান/প�?রিন�?ট কর�?ন");

// Goals.
DEFINE('_EW_GOALS_INSERT', "নত�?ন লক�?ষ�?য প�?রবেশ করান");
DEFINE('_EW_GOALS_UPDATE', "লক�?ষ�?যের নাম�?বার আপডেট কর�?ন");
DEFINE('_EW_GOALS_ACTION', "কাজ");
DEFINE('_EW_GOALS_TITLE', "নত�?ন লক�?ষ�?যের নাম");
DEFINE('_EW_GOALS_NEW', "নত�?ন লক�?ষ�?য");
DEFINE('_EW_GOALS_RELOAD', "প�?নরায় লোডকর�?ন ");
DEFINE('_EW_GOALS_ADVANCED', "আরো অগ�?রগতি");
DEFINE('_EW_GOALS_NAME', "নাম");
DEFINE('_EW_GOALS_ID', "আইডি");
DEFINE('_EW_GOALS_URI_CONDITION', "ইউআরআই �?র শর�?ত");
DEFINE('_EW_GOALS_URI_INVERSED', "ইউআরআই �?র উল�?টো শর�?ত");
DEFINE('_EW_GOALS_GET_VAR', "গেট �?র ভ�?যারিয়েবল");
DEFINE('_EW_GOALS_GET_CONDITION', "গেট �?র শর�?ত");
DEFINE('_EW_GOALS_POST_VAR', "পোস�?ট ভ�?যারিয়েবল");
DEFINE('_EW_GOALS_POST_CONDITION', "পোস�?ট �?র শর�?ত");
DEFINE('_EW_GOALS_TITLE_CONDITION', "টাইটেল �?র শর�?ত");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "ইউজারনেইম �?র শর�?ত");
DEFINE('_EW_GOALS_IP_CONDITION', "আইপি �?র শর�?ত");
DEFINE('_EW_GOALS_IP_INVERSED', "আইপি �?র উল�?টো শর�?ত");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "কেইম ফ�?রম �?র শর�?ত");
DEFINE('_EW_GOALS_BLOCK', "বন�?ধ কর�?ন");
DEFINE('_EW_GOALS_REDIRECT', "ইউআর�?ল �? প�?নারায় নিয়ে যান");
DEFINE('_EW_GOALS_HITS', "হিটসংখ�?যা");
DEFINE('_EW_GOALS_ENABLED', "সক�?রিয়করা হলো");
DEFINE('_EW_GOALS_EDIT', "সম�?পাদনা কর�?ন");
DEFINE('_EW_GOALS_DELETE', "ম�?ছে দিন");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "আপনি �?ই লক�?ষ�?যের কারণে সাম�?প�?রতিক সকল পরিসংখ�?যান তথ�?য হারিয়ে ফেলতে পারেন। আপনি কি আসলেই �?ই লক�?ষ�?য সংখ�?যাটি ম�?ছতে চান?");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "দেশগ�?লি");
DEFINE('_EW_FRONTEND_VISITORS', "পরিদর�?শকরা");
DEFINE('_EW_FRONTEND_TODAY', "আজ");
DEFINE('_EW_FRONTEND_YESTERDAY', "গতকাল");
DEFINE('_EW_FRONTEND_THIS_WEEK', "�?ই সপ�?তাহ");
DEFINE('_EW_FRONTEND_LAST_WEEK', "গত সপ�?তাহ");
DEFINE('_EW_FRONTEND_THIS_MONTH', "�?ই মাস");
DEFINE('_EW_FRONTEND_LAST_MONTH', "গত মাস");
DEFINE('_EW_FRONTEND_TOTAL', "সর�?বমোট");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "জ�?মলাওয়াচ �?খন ডিবাগ ম�?ডে সক�?রিয়। �?রমাধ�?যমে আপনি ভ�?লের কারণগ�?লি খ�?�?জে পেতে পারেন। �?টি বন�?ধ করতে হলে EXTRAWATCH_DEBUG �?র /components/com_extrawatch/config.php  1 থেকে 0 তে পরিবর�?তন কর�?ন।");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "সবচেয়ে বড় সারি গ�?লি দেখা যাবে যখন সব অবস�?থানগ�?লি বিস�?তৃত করবেন");
DEFINE('_EW_DESC_STATS_IP_HITS', "গত কয়েকদিনের যেসব আইপি ঠিকানা গ�?লিতে কম যাওয়া হয়েছে সেগ�?লি আইপি ইতিহাস থেকে ম�?ছে দেওয়া হবে।");
DEFINE('_EW_DESC_STATS_URL_HITS', "গত কয়েকদিনের যেসব ইউআর�?ল গ�?লিতে কম যাওয়া হয়েছে সেগ�?লি আইপি ইতিহাস থেকে ম�?ছে দেওয়া হবে");
DEFINE('_EW_DESC_IGNORE_IP', " কিছ�? নির�?দিষ�?ট অবস�?থানের আইপি থেকে। �?কটি আলাদা লাইন সহ, আপনি �?খানকার ওয়াইল�?ডকার�?ড গ�?লি ব�?যবহার করতে পারবেন.... <br/>যেমন. 192.* �?ড়িয়ে চলবে 192.168.51.31, 192.168.16.2, ইত�?যাদি");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "প�?রতি মিলিসেকেন�?ড �?র যেসকল পরিদর�?শকরা প�?ন:রাবস�?থান নিয়েছেন সেই সময়টি, নির�?দিষ�?ট করা আছে 2000, �?ই ব�?যপারে সাবধাণ থাক�?ন। �?রপর জ�?মলাওয়াচের পেছনের দিকগ�?লি প�?ন:রায় লোড কর�?ন।");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "প�?রতি মিলিসেকেন�?ড �?র যেসকল অবস�?থানগ�?লি প�?ন:রাবস�?থান নিয়েছে সেই সময়টি, নির�?দিষ�?ট করা আছে 2000, �?ই ব�?যপারে সাবধাণ থাক�?ন। �?রপর জ�?মলাওয়াচের পেছনের দিকগ�?লি প�?ন:রায় লোড কর�?ন।");
DEFINE('_EW_DESC_MAXID_BOTS', "�?ই ডাটাবেসে কতগ�?লি বট পরিদর�?শন করার অন�?মতি রাখা হবে?");
DEFINE('_EW_DESC_MAXID_VISITORS', "�?ই ডাটাবেসে কতগ�?লি সত�?যিকার পরিদর�?শক পরিদর�?শন করার অন�?মতি রাখা হবে?");
DEFINE('_EW_DESC_LIMIT_BOTS', "আপনি পেছনের ভাগে কতগ�?লি বট দেখতে চান?");
DEFINE('_EW_DESC_LIMIT_VISITORS', "আপনি পেছনের ভাগে কতগ�?লি সত�?যিকার পরিদর�?শক দেখতে চান?");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "সবচেয়ে বেশী যতগ�?লি অক�?ষর পদবী �?বং ইউআর�?ল�? দেখানো হবে");
DEFINE('_EW_DESC_TRUNCATE_STATS', "সবচেয়ে বেশী যতগ�?লি অক�?ষর ডানপাশের পরিসংখ�?যান বিভাগে দেখানো হবে");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "পরিসংখ�?যান ডাটাবেসে যে দিন গ�?লি রাখা হবে, 0 = অসীম");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "আপনি যদি আলাদা টাইমজোন থেকে হোন তাহলে আপনার হোস�?টকৃত সার�?ভারটি। (ঘন�?টা হিসাবে যোগকৃত অথবা বিয়োগকৃত সংখ�?যা)");
DEFINE('_EW_DESC_WEEK_OFFSET', "সপ�?তাহের অফসেট হলো, সময়ছাপ/(৩৬০০*২৪*৭)। ১.১.১৯৭০,থেকে সাপ�?তাহিক সংখ�?যা দিয়ে, �?ই অফসেটি টি হলো �?কটি ভ�?লসংশোধণ যাতে সপ�?তাহের দিন সোমবার থেকে শ�?র�? হয়ে ");
DEFINE('_EW_DESC_DAY_OFFSET', "দিনের অফসেট হলো,  সময় ছাপ/(৩৬০০*২৪) ১.১.১৯৭০ থেকে দিনের সংখ�?যা দিয়ে থাকে। �?ই অফসেটটি হলো �?কটি ভ�?ল সংশোধণ যাতে �?টি ০০:০০ থেকে শ�?র�? হতে পারে");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(প�?রো ভার�?সনে কাজ করবে)</b> �?কটি খালি জায়গা রাখা হলো যা,  সামনের ভাগে �?কটি 1x1px আইকোন দিতে পারে");
DEFINE('_EW_DESC_IP_STATS', "�?ই আইপি ঠিকানার পরিসংখ�?যান চাল�? করতে।  কিছ�? কিছ�? দেশে অনেক সময়ের জন�?য আইপি ডাটাবেসে রাখা আইনত নিষিদ�?ধ । আপনার নিজস�?ব �?�?�?কি নিয়ে ব�?যবহার কর�?ন।");
DEFINE('_EW_DESC_HIDE_ADS', "�?ই ব�?যবস�?থাপনা পেছনের বিজ�?ঞাপনগ�?লি ল�?কিয়ে রাখে, যদি �?গ�?লি আপনাকে আসলেই বিরক�?ত করে থাক। �?গ�?লি রেখে আপনি আমাদের �?ই ট�?লের আরো উন�?নয়নের জন�?য সহায়তা করছেন। ধন�?যবাদ");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "আপনি যদি মাউসক�?লিক ছাড়াই মাউস-ওভারের সময় ট�?লটিপ দেখাতে চান তাহলে 'আনচেক' কর�?ন।");
DEFINE('_EW_DESC_SERVER_URI_KEY', "সাধারণত: 'REDIRECT_URL'ব�?যবহার করা হয়, যা কিনা ইউআর�?ল নত�?ন ভাবে লেখার জন�?য �?কটি সাধারণ মান, �?কে 'SCRIPT_URL' দিয়েও সেট করা যায়, যদি �?টি শ�?ধ�?মাত�?র index.php তে প�?রবেশ করে। ");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "সংক�?ষিপ�?ত বার�?তা, অবর�?দ�?ধ ব�?যবহারকারী বা আরো তথ�?যসমগ�?র। যেগ�?লি প�?রকাশ করে যে আপনি কেন তাদের কে অবর�?দ�?ধ করেছেন ");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "ট�?লটিপের প�?রস�?থ");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "ট�?লটিপের দৈর�?ঘ�?য");
DEFINE('_EW_DESC_TOOLTIP_URL', "আপনি �?খানে ইউআর�?ল রাখতে পারেন, পরিদর�?শকের আইপি প�?রদর�?শন করানোর জন�?য। �?ই {ip} টি পরিদর�?শকের আইপি দিয়ে প�?রতিস�?থাপন হবে. যেমন. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "আপনি �?খানে যেকোন আইপি লিখতে পারেন, যেগ�?লি আপনি �?ড়িয়ে চলতে চান। আপনি �?খানে ওয়াইল�?ডকার�?ড (* and ?) ব�?যবহার করতে পারেন। যেমন,: /freel?n*");
DEFINE('_EW_DESC_GOALS_NAME', "�?ইস�?থানে আপনার লক�?ষের নাম ঠিককর�?ন। �?ই নামটি আপনার অবস�?থায় য�?ক�?ত হবে �?বং দেখা যাবে।");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "আপনার ডোমেইন নাম সম�?পর�?কিত সবরকমের তথ�?য।  http://www.codegravity.com/projects/ �?র জন�?য ইউআরআই হলো : /projects/(উদাহরন সরূপ: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "গেট ভেরিয়েবল হলো �?মন �?কটি ভেরিয়েবল যা কিনা আপনার ইউআরআই সাধারণত �?কটি ? অথবা &amp; চিহ�?নের জন�?য ব�?যবহার হয়। যেমন, http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. �?ছাড়াও আপনি <u>*</u> ব�?যবহার করতে পারে �?ই ফিল�?ডে যা আপনার সকল গেট মান স�?ক�?যান করতে ব�?যবহার হয়।(উদাহরণসরূপ: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "�?খানে আপনি �?মন �?কটি মান ব�?যবহার করবেন যা আনার আগের ফিল�?ডের মানর মতই। (উদাহরণসরূপ: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "অনেকটাই মিলেছে, কিন�?ত�? আমরা �?সব মান চাচ�?ছি যেগ�?লি ফর�?ম থেকে জমা নেয়া হয়েছে।  তাই আপনার ওয়েবসাইটে যখন �?কটি ফর�?ম থাকবে, যার �?কটি ফিল�?ড আছে &lt;input type='text' name='<u>experiences</u>' /&gt;. (উদাহরণসরূপ: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "পোস�?ট ফিল�?ড থেকে �?ইরূপ �?কটি মান পাওয়া যাবে। যেমন: আমরা জানতে চাচ�?ছি,  ব�?যবহারকারীর জাভা সম�?পর�?কে অভিজ�?ঞতা আছে। (উদাহরণসরূপ: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "পৃষ�?ঠার �?মন �?কটি পদবী থাকবে যা কিনা পূর�?বের কোন পদবীর সাথেমিলে যাবে।(উদাহরণসরূপ: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "�?কজন প�?রবেশকৃত ব�?যবহারকারীর নাম(উদাহরণসরূপ: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "�?কজন প�?রবেশকৃত ব�?যবহারকারীর আইপি: (উদাহরণসরূপ: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "�?কজন প�?রবেশকৃত ব�?যবহারকারীর আইপি।(Example to use: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "আপনার ঠিক করা �?কটি আইপিতে ব�?যবহারকারী প�?রবেশের পূণনির�?দেশ। 'অবর�?দ�?ধ'দের থেকে তাদের অগ�?রাধিকার উচ�?চতর: (উদাহরণসরূপ: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "লক�?ষের ছক থেকে আপনি কতগ�?লি অক�?ষর ছা�?টাই করবেন");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(প�?রো ভার�?সনে কাজ করবে)</b> codegravity.com �? �?কটি পৃষ�?ঠসংযোগ, আপনি �?টি অকেজো করে দিতে পারেন। তবে আপনি �?টি সতেজ রাখার জন�?য আমরা আপনার তারিফ করবো। ধন�?যবাদ! ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "দেশের সকল অবস�?থান সামনের দিকের মডিউলে দেখাবে। যদি পরিবর�?তন করা হয়, �?ই ব�?যবস�?থাপনা  কাজে লাগবে আপনি যদি সময়েকে CACHE_FRONTEND_ �? সেট করেন।");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', ' আপনি যদি ব�?যবহারকারি/দেশের অন�?ক�?রম বিনিময় করতে চান, তাহলে "Uncheck" কর�?ন, �?বং �?র ফলে প�?রথমে পরিদর�?শকদের দেখাবে। ');
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "দেশগ�?লির সংখ�?যা সামনের দিকে দেখাবে");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "সামনের দিকের মডিউলে দেশের পরিদর�?শকদের দেখাবে। যদি পরিবর�?তন করাহয়, তাহলে �?টি তখনই পাল�?টাবে যখন CACHE_FRONTEND_ �?র সময় নির�?ধারন করা হবে।  ");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "সময় সেকেন�?ড �?ককে ভান�?ডার থেকে দেশের সর�?বমোট সময় সামনে নিয়ে আসবে।");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "সময় সেকেন�?ড �?ককে ভান�?ডার থেকে পরির�?দশকদের তালিকা সামনে নিয়ে আসবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "পরিদর�?শকদের সামনে দেখানোর জন�?য: আজ। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "পরিদর�?শকদের সামনে দেখানোর জন�?য: গতকাল। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "পরিদর�?শকদের সামনে দেখানোর জন�?য: �?ই সপ�?তাহের। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "পরিদর�?শকদের সামনে দেখানোর জন�?য: গত সপ�?তাহের। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "পরিদর�?শকদের সামনে দেখানোর জন�?য: �?ই মাসের। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "পরিদর�?শকদের সামনে দেখানোর জন�?য:গত মাসের। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে।");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "জ�?মলাওয়াচ ইন�?সটলের সময় থেকে সর�?বমোট পরিদর�?শক সংখ�?যা দেখানোর জন�?য। যদি পরিবর�?তন করা হয়, তাহলে �?ই ব�?যবস�?থাপনা সামনে দেখাবে যখন CACHE_FRONTEND_... �? সময় নির�?ধারণ করা হবে। ");
DEFINE('_EW_DESC_LANGUAGE', "যে নথিটি ভাষার জন�?য ব�?যবহার করবেন, �?গ�?লি রাখা আছে /components/com_extrawatch/lang/. আপনি যদি সম�?পূর�?ণ নত�?ন �?কটি ভাষার নথি বানাতে চান, তাহলে প�?রথমেই প�?রজেক�?টের হোমপেইজ চেককর�?ন �?বং যদি সেখানে ভাষার নথিটি না থাকে তাহলে, শ�?ধ�?মাত�?র english.php নথিটি নকল কর�?ন। যেমন, english.php কে germen.php হিসাবে নাম দিন �?বং �?টিকে �?ই স�?থানে রাখ�?ন। �?রপর ডানপাশের সকল প�?রয়োজনীয় শব�?দগ�?লির ভাষান�?তর কর�?ন।");
DEFINE('_EW_DESC_GOALS', "লক�?ষ�?য আপনাকে সকল বিশেষ পরামিতি সনাক�?ত করতে অন�?মতি দিবে। যদি �?ইসব পরামিতি মিলে যায়, তাহলে লক�?ষের গনক বেড়ে যাবে। �?ই ভাবে আপনি লক�?ষ রাখাতে পারবেন যে কোন ব�?যবহারকারি কোন নির�?দিস�?ট ইউআর�?ল পরিদর�?শন করেছেন, অথবা কোন বিশেষ মান পোস�?টকরেছেন, যার �?কটি নির�?দিষ�?ট ব�?যবহাহৃত নাম আছে অথবা কোন নির�?দিষ�?ট ঠিকানা থেকে �?সেছেন। আপনি �?ছাড়াও নির�?দিস�?ট কোন ব�?যবহারকারিকে অবর�?দ�?ধ বা অন�?যকোন ইউআর�?ল �?র দিকে প�?ন:র�?নির�?দেশ দিতে পারবেন। ");
DEFINE('_EW_DESC_GOALS_INSERT', "শ�?ধ�? নামের ফিল�?ড ছাড়া আর সকল ফিল�?ডে আপনি * �?বং ? ওয়াইল�?ডকার�?ড হিসাবে ব�?যবহার করতে পারবেন।  উদাহরণসরূপ:  ?ear (মিলে যাবে: near, tear, ..)ইত�?যাদির সাথে,  p*r (মিলে যাবে: pr, peer, pear ..)ইত�?যাদির সাথে। ");
DEFINE('_EW_DESC_GOALS_BLOCK', "1 �? নির�?ধারণ কর�?ন, আপনি যদি কোন পরিদর�?শককে অবর�?দ�?ধ করতে চান। তিনি আর বাকি বিষয়বস�?ত�?গ�?লি দেখতে পাবেন�?না, শ�?ধ�? �?কটি বার�?তা যাবে যে তিনি অবর�?দ�?ধ হয়েছেন �?বং কোন ধরণের নির�?দেশ ছাড়াই তা�?র আইপিটি অবর�?দ�?ধ অবস�?থানে চলে যাবে।(উদাহরণসরূপ: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "দেশের শর�?তাবলি");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "দেশের জন�?য উল�?টো শর�?তাবলি");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "২-অক�?ষরের দেশের কোড (যেমন: <b>BN</b>)");
DEFINE('_EW_STATS_INTERNAL', "ভেতরগত");
DEFINE('_EW_STATS_FROM', "থেকে");
DEFINE('_EW_STATS_TO', "তে");
DEFINE('_EW_STATS_ADD_TO_GOALS', "লক�?ষ�?যসমূহে য�?ক�?ত কর�?ন");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "�?ই দেশের জন�?য লক�?ষ�?য য�?ক�?ত কর�?ন।");
DEFINE('_EW_MENU_REPORT_BUG', "ভ�?ল বা বৈশিষ�?ট�?যের বিবরণ দিন ");
DEFINE('_EW_GOALS_COUNTRY', "দেশ");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "আপনি যদি সামনের দিকে বড়হাতের অক�?ষরে দেশের নামগ�?লি পেতে চান।(যেমন: GERMANY, UNITED KINGDOM instead of Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "সময় সেকেন�?ড �?ককে ভান�?ডার থেকে সামনের দিকে ব�?যবহারকারিদের নিয়ে আসবে");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "সর�?বমোট �?র প�?রাথমিক মান: সামনের দিকেin frontend. আপনি যখন অন�?যান অবস�?থার ট�?ল ব�?যবহার করবেন তখন দরকার হতে পারে। (যেমন : 20000).  0 তে নির�?ধারণ কর�?ন,যদি আপনি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান। .");
DEFINE('_EW_DESC_IGNORE_USER', "�?ক লাইন করে �?ই টেক�?স�?টবক�?সের ব�?যবহারকারীদের �?ড়িয়ে চল�?ন।(যেমন: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "সর�?বমোট ব�?যবহারকারিদের মধ�?যে আজকের সবচেয়ে কার�?যকরী ব�?যবহারকারী");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "�?ইসকল বাজেশব�?দের উপর নিষেধাজ�?ঞা জারি কর�?ন।");
DEFINE('_EW_DESC_SPAMWORD_LIST', "বটদের দ�?বার ব�?যবহৃত সবচেয়ে বেশি মিলে �?মন বাজে শব�?দ গ�?লি। আপনি �?খানে ওয়াইল�?ডকার�?ড ব�?যবহার করতে পারবেন। (যেমন: ph?rmac*). যদি �?ই ব�?যবস�?থাপনা চাল�? করা হয়, জ�?মলাওয়াচ দেখবে যদি কোন আক�?রমনকারী কোন HTTP পোস�?ট থেকে �?ই ধরনের কিছ�? বাজে শব�?দ আপনার ওয়েবসাইটে ব�?যবহার করছে। (তখনই কাজ করবে যদি ফর�?মটি কোন জ�?মলা দ�?বারা তৈরী ওয়েব সাইট থেকে আসে- ফোরাম, কমেন�?ট, �?বং আরো সংস�?ফূর�?ত ভাবে কাজ করে যেকোন সম�?ভাব�?য ফর�?ম �?র জন�?য।");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "বাজে শব�?দ-বিরোধী");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "ব�?যবহারকারীদের মডিউলের জন�?য �?কটি লিংক- আপনাকে �?কটি ইউআর�?ল সনাক�?ত করতে অন�?মতি দেয়,  �?টি খ�?লে যায় যখন কোন ব�?যবহারকারি তার নাম �? ক�?লিক করে। অবস�?যই {user} স�?ট�?রিং টি থাকতে হবে, যা কিনা আসল ব�?যবহারকারীর নামদ�?বার প�?রতিস�?থাপন হবে। (যেমন index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "মূল বাক�?যাংশ");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "ইতিহাস ট�?যাবের সর�?বোচ�?চ মান(যেমন: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "পরিদর�?শনগ�?লিতে শ�?ধ�? মাত�?র শেষ যেই পৃষ�?ঠা পরিদর�?শনকরা হয়েছে সেগ�?লি দেখায়, সবগ�?লি নয়");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "পরিদর�?শনগ�?লিতে যে যে সাইট গ�?লি বারবার পরিদর�?শন করা হয় সেগ�?লির পদবী পরিদর�?শিত পদবীর ছক থেকে ল�?কিয়ে রাখা হয়।");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "পরিদর�?শন ইতিহাসের ডাটাবেসে সবচেয়ে বেশি পরিদর�?শকদের সংখ�?যা সংরক�?ষন করা হয়। �?ই ব�?যবস�?থাপনা সম�?পর�?কে সতর�?ক থাক�?ন। আপনার সাইটে যদি উচ�?চতর পরিদর�?শক চলাচল থাকে, �?টি খ�?ব তাড়াতাড়ি বেড়ে যেতে পারে। সবসময় দেখে রাখ�?ন, অবস�?থানের জন�?য ইতিহাস ছক কত বেশি তথ�?য রাখছে।");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "ডাটাবেস ছকগ�?লি আনইন�?সটলে রাখ�?ন। আপনি যদি কোন আপগ�?রেড করতে চান �?বং আপনার তথ�?য সংরক�?ষন করতে চান তাহলে,�?ই বিকল�?পটি দেখে রাখ�?ন");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "আপনি রাতের ই-বার�?তাগ�?লির সাথে গতকালের প�?রতিবেদনগ�?লি পাবেন, যা আপনি সকালে পড়তে পারবেন।");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "সেই ই-বার�?তা ঠিকানা যেটিতে আপনি �?ই প�?রতিবেদনগ�?লি পাবেন।");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "শতাংশর মান যেখানে {value} থেকে উচ�?চতর সেখান শ�?ধ�?মাত�?র সারি দেখাবে প�?রতিবেদনে। আপনি যদি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান তাহলে ০ তে মান ঠিক কর�?ন।<i>(যেমন: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "শ�?ধ�? মাত�?র<b>�?কদিন য�?ক�?ত হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মানগ�?লি {value} �?র শতাংশ মান থেকে উচ�?চতর হয়।যদি আপনি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান, তাহলে 0 তে মান ঠিক কর�?ন ।<i>(যেমন: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "শ�?ধ�? মাত�?র<b>�?কদিন বিয়োগ হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মানগ�?লি {value} �?র শতাংশ মান থেকে নিম�?নতর হয়। যদি আপনি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান, তাহলে 0 তে মান ঠিক কর�?ন ।<i>(যেমন: -5)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "শ�?ধ�? মাত�?র<b>সাতদিন য�?ক�?ত হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মানগ�?লি {value} �?র শতাংশ মান থেকে উচ�?চতর হয়।যদি আপনি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান, তাহলে 0 তে মান ঠিক কর�?ন । <i>(যেমন: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "শ�?ধ�? মাত�?র <b>সাতদিন বিয়োগ হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মান গ�?লো {value}�?র শতাংশ মান থেকে নিন�?মতর হয়। �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চাইলে মান ০ তে ঠিক কর�?ন।<i>(যেমন: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "শ�?ধ�? মাত�?র<b>২০দিন য�?ক�?ত হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মানগ�?লি {value} �?র শতাংশ মান থেকে উচ�?চতর হয়।যদি আপনি �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চান, তাহলে 0 তে মান ঠিক কর�?ন । <i>(যেমন: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "শ�?ধ�? মাত�?র <b>২০দিন বিয়োগ হবে</b> যদি ই-বার�?তা প�?রতিবেদনের পরিবর�?তিত মান গ�?লো {value}�?র শতাংশ মান থেকে নিন�?মতর হয়। �?ই বৈশিষ�?ট�?যটি ব�?যবহার করতে না চাইলে মান ০ তে ঠিক কর�?ন<i>(যেমন: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(প�?রো ভার�?সনে কাজ করবে)</b> �?ই ব�?যবস�?থাপনাটি চাল�? কর�?ন যদি আপনি লোগো �?র লিংক টি attribute rel='nofollow' �?র মাধ�?যমে বের করতে চান।");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "ই-বার�?তাগ�?লির সারি নামের জন�?যে সবচেয়ে বেশি অক�?ষর। আপনার ই-বার�?তা সেবাপ�?রদাণকারির বার�?তা উইন�?ডোটি যদি অনেক ছোট হয়ে থাকে তাহলে �?ই মান পরিবর�?তন করে ফেল�?ন।");

DEFINE('_EW_MENU_HISTORY', "ইতিহাস");
DEFINE('_EW_MENU_EMAILS', "ই-বার�?তাগ�?লি");
DEFINE('_EW_MENU_STATUS', "ডিবি অবস�?থান");
DEFINE('_EW_DESC_BLOCKED', "স�?প�?যাম/বাজে শব�?দ বিরোধীর মাধ�?যমে �?ই আইপি গ�?লি অবর�?দ�?ধ করা হয়েছে।");


DEFINE('_EW_HISTORY_VISITORS', "পরিদর�?শকের ইতিহাস");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "শ�?ধ�?মাত�?র  %dটি শেষ তথ�?য দেখানো হচ�?ছে।
                �?র মান পরিবর�?তন করতে হলে, Settings�? যান -&gt; History &amp; Performance -&gt; HISTORY_MAX_DB_RECORDS . সাবধান, this setting affects load times of the data below.�?ই ব�?যবস�?থাপনা তৈরী হওয়ার সময়কে প�?রভাবিত করতে পারে। ");
DEFINE('_EW_MENU_BUG', "সমস�?যার প�?রতিবেদন");
DEFINE('_EW_MENU_FEATURE', "বৈশিষ�?ট�?য অন�?রোধ কর�?ন");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "মূলশব�?দ");

DEFINE('_EW_BLOCKING_UNBLOCK', "অনবর�?দ�?ধ");
DEFINE('_EW_STATS_KEYPHRASE ', "মূল বাক�?যাংশগ�?লি");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "ছকের নাম");
DEFINE('_EW_STATUS_DATABASE_ROWS', "সারিগ�?লি");
DEFINE('_EW_STATUS_DATABASE_DATA', "তথ�?য");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "সব�?যমোট");

DEFINE('_EW_EMAIL_REPORTS', "ই-বার�?তা প�?রতিবেদন");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "গতকালের ই-বার�?তা থেকে পরিস�?র�?ত প�?রতিবেদন");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "ই-বার�?তার মান পরিস�?রবণ");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "মান");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "শতাংশ");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "১দিনের পরিবর�?তন");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "৭দিনের পরিবর�?তন");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "২৮দিনের পরিবর�?তন");
DEFINE('_EW_ANTISPAM_BLOCKED', "জ�?মলাওয়াচ %dটি স�?প�?যামার হিট অবর�?দ�?ধ করেছে , সর�?বমোট: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "অবর�?দ�?ধ আইপি ঠিকানা");
DEFINE('_EW_ANTISPAM_SETTINGS', "স�?প�?যাম বিরোধী ব�?যবস�?থাপনা");
DEFINE('_EW_TRAFFIC_AJAX', "�?জাক�?স �?র ট�?রাফিক আপডেট (মানচিত�?র ছাড়া)");


DEFINE('_EW_HISTORY_PREVIOUS', "প�?রোনো");
DEFINE('_EW_HISTORY_NEXT', "পরে");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "দেশগ�?লির কলাম সংখ�?যা");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "দেশগ�?লির সারি সংখ�?যা");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "দেশের নাম দেখাবে অথবা দেখাবেনা");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "আগে পতাকা দেখাবে ,তারপর শতাংশ");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "গেট �?র উল�?টো শর�?তগ�?লি");
DEFINE('_EW_GOALS_POST_INVERSED', "পোস�?ট �?র উল�?টো শর�?তগ�?লি");
DEFINE('_EW_GOALS_TITLE_INVERSED', "টাইটেল �?র উল�?টো শর�?তগ�?লি");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "ইউজারনেইম উল�?টো শর�?তগ�?লি");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "কেইম ফ�?রম �?র উল�?টো শর�?তগ�?লি");

DEFINE('_EW_STATS_MAP', "সর�?বশেষ পরিদর�?শন মানচিত�?র");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "দয়া করে প�?রবেশ করান <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> শেষ মানচিত�?র দেখানোর চাবি:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "চাবি সংরক�?ষন কর�?ন");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "দয়া করে বৈধ ipinfodb চাবি দেখান যেগ�?লো নেয়া হয়েছে : <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> থেকে");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "মন�?দ অন�?রোধ:  ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "যেই ফিল�?ডগ�?লো থেকে নেয়া:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "ইউআর�?ল পরামিতি:");
DEFINE('_EW_VISIT_ADD_PAGE', " লক�?ষ�?যহিসাবে পৃষ�?ঠা যোগ কর�?ন");
DEFINE('_EW_VISIT_BLOCK_IP', " �?ই আইপি ঠিকানাটি অবরোধ কর�?ন।");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', "�?ই ফর�?ম ভেরিয়েবলটি লক�?ষ�?য হিসাবে যোগ কর�?ন");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', "�?ই ইউআর�?ল পরামিতিটি লক�?ষ�?য হিসাবে যোগ কর�?ন");

DEFINE('_EW_TREND_EMPTY', "খালি");

DEFINE('_EW_NOT_NUMBER', " সতর�?কীকরণ: যে মানটি আপনি প�?রবেশ করিয়েছেন তা কোন সংখ�?যা নয়। জ�?মলাওয়াচ ঠিক মতো কাজ করবেনা!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; �?টি ১৫ দিনের মূল�?যায়ন সংস�?করণ। আর বাকি রয়েছে: <b>%d</b>দিন। অন�?গ�?রহপূর�?বক আজীবন সংস�?করণ টি ক�?রয় কর�?ন <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>ExtraWatch license for your domain</a> �?ই ভার�?সনের জন�?য �?বং আগামী ভার�?সনের জন�?য");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " আপনার পরীক�?ষা সংস�?করণের মেয়াদপূর�?তী হয়েছে। দয়া করে জ�?মলাওয়াচ ক�?রয় কর�?ন।");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "অন�?মতিপত�?র সাফল�?যের সাথে চাল�? হয়েছে! ধন�?যবাদ");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>ভ�?ল!!: আপনার অনমতিপত�?রের চাবি �?বং ডোমেইন মিলছেনা</b><br/>আপনি ডোনেশন ফর�?মে প�?রদত�?ত আপনার �?কই ডোমেইন টি দেখতে পাচ�?ছেন?মূল চাল�?করণ চাবির জন�?য<b>' নিচে ক�?লিক কর�?ন '</b> <br/>অথবা যোগাযোগ কর�?ন: support@codegravity.com<br/>�?");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "আপনি যদি উপরের বার�?তাটি অনেক�?ষন ধরে দেখতে থাকেন, তাহলে ব�?�?তে হবে আপনার লাইভ সাইটটি হয়তো সমস�?যা করছে।
                    �?টি খ�?ল�?ন components/com_extrawatch/config.php
                    কমেন�?ট উঠিয়ে দিন, �?বং আপনার নিজস�?ব সাইটটি প�?রবেশ করান. যেমন:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "সতর�?কীকরণ: আপনার ব�?রাউজারের সাইটটি �?বং আপনার লাইভ সাইট �?র কনফিগারেশন: %s �?বং %s মিলছেনা!! ");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "লাইভ সাইটটিকে সক�?রিয় কর�?ন: %s �?বং চালিয়ে যান...");

DEFINE('_EW_ADMINHEADER_JW', "জ�?মলাওয়াচ ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "পেছনের লিংক গ�?লি ম�?ছে ফেল�?ন");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "জ�?ঞানকোষ");
DEFINE('_EW_ADMINHEADER_FLOW', "প�?রবাহ");
DEFINE('_EW_ADMINHEADER_GRAPHS', "গ�?রাফগ�?লি");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "উপাদানগ�?লি");
DEFINE('_EW_ADMINHEADER_REVIEW', "পর�?যালোচনা");
DEFINE('_EW_ADMINHEADER_WRITE', "লিখ�?ন ");

DEFINE('_EW_FLOW_TRAFFIC', "ট�?রাফিক প�?রবাহ");
DEFINE('_EW_FLOW_SELECT_PAGE', "পৃষ�?ঠা নির�?বাচন কর�?ন:");
DEFINE('_EW_FLOW_OUTG_LINKS', "মূল বহির�?গামী লিংক গণনা:");
DEFINE('_EW_FLOW_NESTING', "নীড়ের স�?তর:");
DEFINE('_EW_FLOW_SCALE', "মাপদন�?ড:");

DEFINE('_EW_COMERCIAL_AD_FREE', "বিজ�?ঞাপণ ম�?ক�?ত ভার�?সন");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "আপনার ডোনেশনের জন�?য ধন�?যবাদ!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "আপনার ডোমেইন �?র নিবন�?ধন চাবি হলো %s: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "�?খন আপনি পেছনের লিংক ম�?ছতে পারবেন অথবা ব�?যবস�?থাপনার সামনে থেকে জ�?মলাওয়াচের লোগোটি ল�?কিয়ে ফেলতে পারবেন");


DEFINE('_EW_SIZES_LAST_CHECK', "সর�?বশেষ নিরীক�?ষা চালানো হয়েছিলো.. :");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Size of component/module in /administrator directory");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "উপাদান");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "সর�?বমোট:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "আকার");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "সবকিছ�? রিফ�?রেশ কর�?ন");

DEFINE('_EW_SIZEDATABASE_TABLE', "ছক");
DEFINE('_EW_SIZEDATABASE_SIZE', "আকার");
DEFINE('_EW_SIZEDATABASE_1DAY', "১দিনের পরিবর�?তন");
DEFINE('_EW_SIZEDATABASE_7DAY', "৭দিনের পরিবর�?তন");
DEFINE('_EW_SIZEDATABASE_28DAY', "২৮দিনের পরিবর�?তন");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "কোন তথ�?য নেই");
DEFINE('_EW_SIZEDATABASE_TOTAL', "সর�?বমোট:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "সবকিছ�? রিফ�?রেশ কর�?ন");
DEFINE('_EW_SIZEMODULES_TOTAL', "সর�?বমোট:");
DEFINE('_EW_SIZEMODULES_MODULE', "মডিউল");
DEFINE('_EW_SIZEMODULES_SIZE', "আকার");

DEFINE('_EW_SIZES_FILES', "নথি �?বং নির�?দেশিকাগ�?লি");
DEFINE('_EW_SIZES_BYTES', "বাইট গ�?লো");
DEFINE('_EW_SIZES_KB', "কেবি");
DEFINE('_EW_SIZES_MB', "�?মবি");
DEFINE('_EW_SIZES_GB', "জিবি");
DEFINE('_EW_SIZES_REFRESH', "রিফ�?রেশ");

DEFINE('_EW_STATS_FOOTER', "জ�?মলাওয়াচ &copy;2006-2013 মাতিজ কোভাল �?র মাধ�?যমে।");

DEFINE('_EW_STATUS_MB', "�?মবি");
DEFINE('_EW_STATUS_DATABASE', "ডাটাবেসের ছকের আকার");


DEFINE('_EW_DESC_IPINFODB_KEY', "সর�?বশেষ পরির�?দশন মানচিত�?র ipinfodb.com �?র চাবি থেকে : <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "টাইমজোনের অফসেট ফোর�?স কর�?ন");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "আপডেট কর�?ন");
DEFINE('_EW_MENU_UPDATE_TITLE', "ব�?যাকআপ সংরক�?ষন �?বং আপগ�?রেড কর�?ন ");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "ম�?ক�?ত ভার�?সনে পাওয়া যায়না, অন�?গ�?রহ করে অন�?মতিপত�?রের ট�?যাবে দেখেনিন।");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "স�?পাম-শব�?দের নিষেধাজ�?ঞা চাল�?");
DEFINE('_EW_SPAMWORD_LIST', "স�?প�?যাম-শব�?দের তালিকা");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "বারবার আসা পদবীগ�?লি ল�?কিয়ে রাখ�?ন");
DEFINE('_EW_TRUNCATE_VISITS', "পরিদর�?শন ছা�?টাই কর�?ন");
DEFINE('_EW_TRUNCATE_STATS', "অবস�?থান ছা�?টাই কর�?ন");
DEFINE('_EW_TRUNCATE_GOALS', "লক�?ষ�?য ছা�?টাই কর�?ন");
DEFINE('_EW_LIMIT_BOTS', "বটগ�?লি সীমাবদ�?ধ কর�?ন");
DEFINE('_EW_LIMIT_VISITORS', "পরিদর�?শক সীমাবদ�?ধ কর�?ন");
DEFINE('_EW_TOOLTIP_WIDTH', "ট�?লটিপের প�?রস�?থ");
DEFINE('_EW_TOOLTIP_HEIGHT', "ট�?লটিপের উচ�?চতা");
DEFINE('_EW_TOOLTIP_URL', "ট�?লটিপের ইউআর�?ল");
DEFINE('_EW_TOOLTIP_ONCLICK', "ক�?লিকের সময় ট�?লটিপ");
DEFINE('_EW_IP_STATS', "আইপ অবস�?থান");
DEFINE('_EW_IPINFODB_KEY', "আইপি �?র তথ�?য �?বং ডিবি চাবি ");
DEFINE('_EW_ONLY_LAST_URI', "মাত�?র শেষ ইউআরআই ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "ফ�?রন�?ট �?ন�?ড লোগো ল�?কান");
DEFINE('_EW_FRONTEND_NOFOLLOW', "ফ�?রন�?ট �?ন�?ড কোন অন�?শরন নয়");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "ফ�?রন�?ট �?ন�?ড কোন ব�?যাকলিংক থাকবেনা");
DEFINE('_EW_FRONTEND_USER_LINK', "ফ�?রন�?ট �?ন�?ড সারির ব�?যবহারকারীদের লিংক");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "ফ�?রন�?ট �?ন�?ড দেশগ�?লি আগে");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "ফ�?রন�?ট �?ন�?ড দেশগ�?লির নাম");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "ফ�?রন�?ট �?ন�?ড দেশগ�?লির নাম বড় হাতে অক�?ষরে");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "ফ�?রন�?ট �?ন�?ড দেশগ�?লিরপতাকা আগে ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "ফ�?রন�?ট �?ন�?ড দেশগ�?লির সংখ�?যা");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "ফ�?রন�?ট �?ন�?ড দেশগ�?লির সবচেয়ে বড় কলাম");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "ফ�?রন�?ট �?ন�?ড �?র দেশগ�?লি সবচেয়ে বড় সারি");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "ফ�?রন�?ট �?ন�?ড �? পরিদর�?শকদের ইতিহাস ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "ফ�?রন�?ট �?ন�?ড �? গতকালে পরিদর�?শকরা");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "ফ�?রন�?ট �?ন�?ড �? �?ই সপ�?তাহের পরিদর�?শকরা");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "ফ�?রন�?ট �?ন�?ড �? গত সপ�?তাহের পরিদর�?শকরা");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "ফ�?রন�?ট �?ন�?ড �? �?ই মাসের পরিদর�?শকরা");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "ফ�?রন�?ট �?ন�?ড �? গত মাসের পরিদর�?শকরা");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "ফ�?রন�?ট �?ন�?ড �? সর�?বমোট পরিদর�?শক সংখ�?যা ল�?কানো");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "ফ�?রন�?ট �?ন�?ড �? সর�?বমোট প�?রাথমিক পরিদর�?শক");
DEFINE('_EW_HISTORY_MAX_VALUES', "ইতিহাসের সবচেয়ে বেশি মান");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "ইতিহাসের সর�?বোচ�?চ সংরক�?ষন ক�?ষমতা");
DEFINE('_EW_UPDATE_TIME_VISITS', "পরিদর�?শনের সময় আপডেট কর�?ন");
DEFINE('_EW_UPDATE_TIME_STATS', "অবস�?থানের সময় আপডেট কর�?ন");
DEFINE('_EW_STATS_MAX_ROWS', "অবস�?থানের সর�?বোচ�?চ সারি");
DEFINE('_EW_STATS_IP_HITS', "অবস�?থানের সর�?বোচ�?চ হিট সংখ�?যা");
DEFINE('_EW_MAXID_BOTS', "সর�?বোচ�?চ বটগ�?লির আইডি");
DEFINE('_EW_MAXID_VISITORS', "সর�?বোচ�?চ পরিদর�?শকের আইডি");
DEFINE('_EW_STATS_KEEP_DAYS', "যতদিন ধরে অবস�?থান টি রাখা");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "ভান�?ডার ফ�?রন�?ট �?ন�?ড �? দেশগ�?লি ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "ভান�?ডার ফ�?রন�?ট �?ন�?ড �? পরিদর�?শকরা");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "আনইন�?স�?টলের পর রেখে দেয়া তথ�?য গ�?লো ");
DEFINE('_EW_IGNORE_IP', "আইপি �?ড়িয়ে চল�?ন");
DEFINE('_EW_IGNORE_URI', "ইউআরআই �?ড়িয়ে চল�?ন");
DEFINE('_EW_IGNORE_USER', "ব�?যবহারকারি �?ড়িয়ে চল�?ন");
DEFINE('_EW_BLOCKING_MESSAGE', "বার�?তা অবরূদ�?ধ কর�?ন");
DEFINE('_EW_SERVER_URI_KEY', "সার�?ভারের ইউআরআই চাবি");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "ফ�?রন�?ট �?ন�?ড �? পরিদর�?শকদের প�?রাথমিক সকল নাম");
DEFINE('_EW_SIZEDATABASE_RECORDS', "ধারণকৃত তথ�?যগ�?লি");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', "অবরোধকে কাজে লাগাতে হলে আপনাকে জ�?মলাওয়াচের �?জেন�?টে কে সকল তথ�?য অথবা ফর�?ম �?র আগে প�?রকাশ করতে হবে। যেমন: আপনার টেম�?প�?লেটের বাম পাশে
                    <br/>
                    আপনি �?খন module manager �? যান -> ExtraWatch agent গিয়ে -> select position as left কর�?ন");

DEFINE('_EW_EMAIL_SEO_REPORTS', "�?স ই ও �?র প�?রতিবেদন");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "�?স ই ও �?র রাতের ই-বার�?তা প�?রতিবেদন চাল�?");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "ইন�?সটলেশনের উদাহরণ দেখ�?ন");

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