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
DEFINE('_EW_MENU_STATS', "ライブ開始");
DEFINE('_EW_MENU_GOALS', "目標");
DEFINE('_EW_MENU_SETTINGS', "設定");
DEFINE('_EW_MENU_CREDITS', "クレジット");
DEFINE('_EW_MENU_FAQ', "良�??�?�る質�?");
DEFINE('_EW_MENU_DOCUMENTATION', "情報管�?�");
DEFINE('_EW_MENU_LICENSE', "ライセンス");
DEFINE('_EW_MENU_DONATORS', "サ�?ーター");
DEFINE('_EW_MENU_SUPPORT', "ジュームラ・ウォッ�?をサ�?ート�?��?��??�?��?��?�。�??�?��?�る�?�広告表示�?��?��?��?�利用�?��?��?��?��?��?�。");


// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "最近�?�訪�?者");
DEFINE('_EW_VISITS_BOTS', "ボット");
DEFINE('_EW_VISITS_CAME_FROM', "出身");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "ジュームラ・ウォッ�?モジュール�?�発行�?�れ�?��?��?��?�ん�?新�?状態�?�記録�?�れ�?��?��?��?�ん。 発行�?�る�?��?��?モジュールセクション�?�アクセス�?��?�??�?��?�全ページ上�?�発行�?��?��??�?��?��?�。");
DEFINE('_EW_VISITS_PANE_LOADING', "訪�?者読込�?�...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "週別訪�?者状�?");
DEFINE('_EW_STATS_WEEK', "週");
DEFINE('_EW_STATS_THIS_WEEK', "今週");
DEFINE('_EW_STATS_UNIQUE', "固有");
DEFINE('_EW_STATS_LOADS', "読込�?�");
DEFINE('_EW_STATS_HITS', "ヒット");
DEFINE('_EW_STATS_TODAY', "今日");
DEFINE('_EW_STATS_FOR', "目的");
DEFINE('_EW_STATS_ALL_TIME', "最高");
DEFINE('_EW_STATS_EXPAND', "拡大");
DEFINE('_EW_STATS_COLLAPSE', "崩壊");
DEFINE('_EW_STATS_URI', "ページ");
DEFINE('_EW_STATS_COUNTRY', "国");
DEFINE('_EW_STATS_USERS', "ユーザー");
DEFINE('_EW_STATS_REFERERS', "�?�照");
DEFINE('_EW_STATS_IP', "IP");
DEFINE('_EW_STATS_BROWSER', "ブラウザ");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "キーワード");
DEFINE('_EW_STATS_GOALS', "目標");
DEFINE('_EW_STATS_TOTAL', "�?�計");
DEFINE('_EW_STATS_DAILY', "毎日");
DEFINE('_EW_STATS_DAILY_TITLE', "毎日�?�状�?");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "最高�?�状�?");
DEFINE('_EW_STATS_LOADING', "読込�?�中...");
DEFINE('_EW_STATS_LOADING_WAIT', "読込�?�中...�?��?�ら�??�?�待�?��??�?��?��?�");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IPブロッキング");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "IPを手動入力");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "ブロック�?��?��?�IPアドレスを入力�?��?��??�?��?��?�。(例 217.242.11.54 或�?��?� 217.* 或�?��?� 217.242.* ワイルドカード�?�一致�?�る�?�れら全�?��?�IPをブロック�?�る)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "実際�?�トグルブロッキング先 ");
DEFINE('_EW_STATS_PANE_LOADING', "読込�?�状�?...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "設定");
DEFINE('_EW_SETTINGS_DEFAULT', "�?期設定");
DEFINE('_EW_SETTINGS_SAVE', "�?存");
DEFINE('_EW_SETTINGS_APPEARANCE', "外見");
DEFINE('_EW_SETTINGS_FRONTEND', "先頭");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "履歴�?��?�パフォーマンス");
DEFINE('_EW_SETTINGS_ADVANCED', "詳細");
DEFINE('_EW_SETTINGS_IGNORE', "無視");
DEFINE('_EW_SETTINGS_BLOCKING', "ブロッキング");
DEFINE('_EW_SETTINGS_EXPERT', "エクスパート");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "全統計�?�訪�?者データを本当�?�リセット�?��?��?��?�？");
DEFINE('_EW_SETTINGS_RESET_ALL', "全�?�をリセット");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "全統計�?��?�訪�?者データをリセット");
DEFINE('_EW_SETTINGS_LANGUAGE', "言語");
DEFINE('_EW_SETTINGS_SAVED', "設定�?��?存�?�れ�?��?��?�。");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "IP追加");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "リスト�?�");

// Other / mostly general.
DEFINE('_EW_TITLE', "リアルタイムAJAXジュームラ・モニター");
DEFINE('_EW_BACK', "戻る");
DEFINE('_EW_ACCESS_DENIED', "�?�れを閲覧承�?を得�?��?��?��?�ん�?");
DEFINE('_EW_LICENSE_AGREE', "上記�?�諸�?�件�?��?��?�?��?��?�。");
DEFINE('_EW_LICENSE_CONTINUE', "続�?�る");
DEFINE('_EW_SUCCESS', "オペレーション�?功");
DEFINE('_EW_RESET_SUCCESS', "全統計�?��?�訪�?者データ�?�無事�?�削除�?�れ�?��?��?�。");
DEFINE('_EW_RESET_ERROR', "データ�?�無事�?�削除�?�れ�?��?�ん�?��?��?�。�?題�?�発生�?��?��?��?�。");
DEFINE('_EW_CREDITS_TITLE', "クレジット");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "毎日�?��?�毎週�?�状�?");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX承�?拒�?�：ジュームラ - 構�?.php�?�記載�?��?�ドメイン�?�ら�?��?�統計を閲覧�?��?��??�?��?��?�");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "www.�?�ドメイン�??を�?�忘れ�?��?��?�。�?��?�?��?�ジャ�?スクリプト�?�アクセスを試�?��?��?��?��?�");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "アクセス元");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "異�?�るドメイン�?��?�る�?��?�考�?��?��?��?��?��?��?��?��?��?��?��?�");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "最新�?�拡張コード�?�得先");
DEFINE('_EW_HEADER_CAST_YOUR', "以下を変�?��?��?��??�?��?��?�");
DEFINE('_EW_HEADER_VOTE', "投票");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "ツール�?ップを表示�?�る�?��?�?�クリック");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "ツール�?ップを表示�?�る�?��?�?�マウスを�?�?�る");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "昨日�?�増加�?");
DEFINE('_EW_TOOLTIP_HELP', "次�?�オンライン外部ヘルプを開�??");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "�?��?�ウィンドウを閉�?�る");
DEFINE('_EW_TOOLTIP_PRINT', "�?�刷");

// Goals.
DEFINE('_EW_GOALS_INSERT', "目標挿入");
DEFINE('_EW_GOALS_UPDATE', "目標番�?�更新");
DEFINE('_EW_GOALS_ACTION', "アクション");
DEFINE('_EW_GOALS_TITLE', "新�?目標");
DEFINE('_EW_GOALS_NEW', "新�?目標");
DEFINE('_EW_GOALS_RELOAD', "�?読込�?�");
DEFINE('_EW_GOALS_ADVANCED', "詳細");
DEFINE('_EW_GOALS_NAME', "�?�??");
DEFINE('_EW_GOALS_ID', "ID");
DEFINE('_EW_GOALS_URI_CONDITION', "URI状態");
DEFINE('_EW_GOALS_URI_INVERSED', "URI�??転状態");
DEFINE('_EW_GOALS_GET_VAR', "�?�得�?ージョン");
DEFINE('_EW_GOALS_GET_CONDITION', "�?�得状態");
DEFINE('_EW_GOALS_POST_VAR', "�?スト�?ージョン");
DEFINE('_EW_GOALS_POST_CONDITION', "POST状態");
DEFINE('_EW_GOALS_TITLE_CONDITION', "タイトル状態");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "ユーザー�??状態");
DEFINE('_EW_GOALS_IP_CONDITION', "IP状態");
DEFINE('_EW_GOALS_IP_INVERSED', "IP�??転状態");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "状態�?�起因");
DEFINE('_EW_GOALS_BLOCK', "ブロック");
DEFINE('_EW_GOALS_REDIRECT', "URL�?�リダイアル");
DEFINE('_EW_GOALS_HITS', "ヒット");
DEFINE('_EW_GOALS_ENABLED', "有効");
DEFINE('_EW_GOALS_EDIT', "編集");
DEFINE('_EW_GOALS_DELETE', "削除");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "�?��?�目標�?��?��?�?�全�?��?�最近�?�統計データを失�?��?��?�。目標番�?�を本当�?�削除�?��?��?��?�？");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "国");
DEFINE('_EW_FRONTEND_VISITORS', "訪�?者");
DEFINE('_EW_FRONTEND_TODAY', "今日");
DEFINE('_EW_FRONTEND_YESTERDAY', "昨日");
DEFINE('_EW_FRONTEND_THIS_WEEK', "今週");
DEFINE('_EW_FRONTEND_LAST_WEEK', "先週");
DEFINE('_EW_FRONTEND_THIS_MONTH', "今月");
DEFINE('_EW_FRONTEND_LAST_MONTH', "先月");
DEFINE('_EW_FRONTEND_TOTAL', "�?�計");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "ジュームラ・ウォッ�?�?�修正モード�?��?�。�?�れ�?�よりエラー原因を修復�?��??�?��?�。オフ�?��?�る�?��?��?/components/com_extrawatch/config.php�?�EXTRAWATCH_DEBUG値�?�1�?�ら0を変更�?��?��??�?��?��?�");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "状態�?�拡張モード�?�際�?最大行数�?�表示�?�れ�?��?�");
DEFINE('_EW_DESC_STATS_IP_HITS', "数日間ヒット�?��?��?��?��?�全IPアドレス�?��?�。�?��?�値�?�IP履歴�?�ら削除�?�れ�?��?�");
DEFINE('_EW_DESC_STATS_URL_HITS', "数日間ヒット�?��?��?��?��?�全URL�?��?�。�?��?�値�?�IP履歴�?�ら削除�?�れ�?��?�");
DEFINE('_EW_DESC_IGNORE_IP', "統計�?�ら特定�?�IPを排除�?�る。新�?ライン�?�離�?�。�?��?��?�ワイルドカードを使用�?��??�?��?�。 <br/>例 192.* �?�192.168.51.31�?192.168.16.2�?�?��?�を無視�?��?��?�");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "訪�?者�?�秒�?��?�?�時間をリフレッシュ�?��?�?期設定�?�2000�?�際�?��?�注�?�??�?��?��?�。ジュームラ・ウォッ�?�?ックエンドを�?�?�読�?�込ん�?��??�?��?��?�。");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "統計�?�秒�?��?�?�時間をリフレッシュ�?��?�?期設定�?�4000�?�際�?��?�注�?�??�?��?��?�。ジュームラ・ウォッ�?�?ックエンドを�?�?�読�?�込ん�?��??�?��?��?�。");
DEFINE('_EW_DESC_MAXID_BOTS', "データベース�?��?存�?�るボット訪�?者数");
DEFINE('_EW_DESC_MAXID_VISITORS', " データベース�?��?存�?�る実際�?�訪�?者数");
DEFINE('_EW_DESC_LIMIT_BOTS', "�?ックエンド�?�見られるボット数");
DEFINE('_EW_DESC_LIMIT_VISITORS', "�?ックエンド�?�見られる実際�?�訪�?者数");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "長�?�タイトル�?�URI�?�表示�?�れる最大文字数");
DEFINE('_EW_DESC_TRUNCATE_STATS', "正�?��?�統計パ�?ル�?�表示�?�れる最大文字数");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "統計をデータベース内�?��?存�?�る日数 0 = 無�?");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "ホストサー�?ー�?�別�?�タイムゾーン�?��?�る場�?� (プラス或�?�マイナス時数)");
DEFINE('_EW_DESC_WEEK_OFFSET', "ウィーク・オフセット�?タイムスタンプ/(3600*24*7)�?�1.1.1970年1月1日�?�ら�?�週数を設定�?��?��?�。�?��?�オフセット�?�より�?月曜日�?�ら開始�?�る様�?�修正�?�れ�?��?�");
DEFINE('_EW_DESC_DAY_OFFSET', "日付オフセット�?タイムスタンプ/(3600*24)�?�1.1.1970年1月1日�?�ら�?�日数を設定�?��?��?�。�?��?�オフセット�?�より�?00：00�?�ら開始�?�る様�?�修正�?�れ�?��?�");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "<b>(プロ�?ージョン内機能)</b>フロントエンド�?�ブランク�?�1x1pxアイコンを使用�?��?��?� ");
DEFINE('_EW_DESC_IP_STATS', "アドレス統計を有効�?��?��?��?�。複数�?�国�?��?�長時間データベース内�?�IPを�?存�?�る�?��?��?�法律�?��?�?�られ�?��?��?��?�。リスクを�?�承知�??�?��?��?�。");
DEFINE('_EW_DESC_HIDE_ADS', "�?��?�設定�?��?��?本当�?�広告を見�?��??�?��?�場�?��?�?ックエンド�?�広告を隠�?��?��?�。広告を�?存�?�る�?��?��?��?本ツール�?�更�?�る開発をサ�?ート�?�る�?��?��?��?�り�?��?�。�?�り�?��?��?��?��?��?��?��?�。");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "マウスクリック�?�代�?り�?�マウスオー�?ー�?�ツール�?ップを表示�?�る�?��?��?アン�?ェック�?��?��?��??�?��?��?�。");
DEFINE('_EW_DESC_SERVER_URI_KEY', "�?期設定�?�'REDIRECT_URL'�?��?�。リライト�?�るURLを使用�?�る場�?��?�?�れ�?�基準�?��?�。�?��?�index.php�?��?�記録�?�る場�?��?'SCRIPT_URL'�?�設定�?�れ�?��?�。");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "ブロック�?�れ�?�ユーザー�?�表示�?�れるメッセージ或�?��?�れら�?�ユーザー�?�ブロック�?�れる�?�由�?��?��?��?��?�詳細");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "ツール�?ップ幅");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "ツール�?ップ高�?�");
DEFINE('_EW_DESC_TOOLTIP_URL', "訪�?者�?�IPを視覚化�?�る�?��?�?��?�?��?��?�URLを入力�?��??�?��?�。訪�?者�?�IP�?��??�?�{ip}�?�置�??�?��?�られ�?��?�。例 http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "統計�?�ら無視�?�れ�?��?�URIを入力�?��??�?��?�。ワイルドカード(* and ?)を�?��?��?�使用�?��??�?��?�。例: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "目標�??を�?��?��?�記入�?��?��??�?��?��?�。�?��?��??�?�?�統計内�?�表示�?�れ�?��?�。");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "ドメイン�??�?�後�?全�?�。http://www.codegravity.com/projects/�?�関�?�るURI: /projects/ (Example to use: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "GET変数�?��?通常a ?や &amp;マーク�?�後�?��?URL内�?�見られる変数�?��?�。 例 http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith。�?��?�フィールド内�?�全�?��?�GET値をスキャン�?�る�?��?�?� <u>*</u>を使用�?�る�?��?�も�?��??�?��?�。 (使用例: <b>n*me</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "�?��?��?��?回�?�フィールド�?�ら数値�?�一致を指定�?�る必�?�?��?�り�?��?� (使用例: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "�?��?�似�?��?��?��?��?��?フォーム�?�ら�?信�?�れ�?�値を確�?�?��?��?��?��?�。�?��?�?��?�ウェブサイト上�?�フォームを�?��?�?��?��?�れ�?��?フィールド&lt;input type='text' name='<u>experiences</u>' /&gt;�?��?�り�?��?�。 (使用例: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "�?��?��?ストフィールド�?�ら一致�?��?�値。 例 ユーザー�?�ジャ�?�?�使用経験�?��?�る�?��?��?��?�確�?�?��?��?�。 (使用例: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "一致�?��?��??ページタイトル。 (使用例: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "ログインユーザー�?? (使用例: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "ユーザー�?�アクセス元IP (使用例: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "ユーザー�?�アクセス元URL (使用例: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "�?��?��?��?�特定�?��?�URL�?�ユーザー�?�リダイレクト�?�れ�?��?��?�。'ブロッキング'より�?高�?�優先度: (使用例: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "目標表�?�切り詰�?�?ャート数");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "<b>(プロ�?ージョン�?�機能)</b> codegravity.com�?��?��?ックリンクを無効�?��?��??�?��?��?��?�??�?��?��?��?�利用�?��?��?��?�る�?�助�?�り�?��?�。�?��?�解�?��?��?��??�?�り�?��?��?��?��?��?��?��?�。");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "フロントエンドモジュール�?��?�国�?��?統計表示。変更�?��?�場�?��?CACHE_FRONTEND_ �?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "フロントエンド�?�訪�?者/国�?�順番を入れ替�?��?��?�場�?��? 未確�?�?��?��?��??�?��?��?�。�??�?��?�る�?��?先�?�訪�?者�?��?�れ�?��?�。");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "フロントエンド�?�国�?�数�?�表示�?�れ�?��?�");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "フロントエンドモジュール�?�国�?�訪�?者�?�表示�?�れ�?��?�。変更�?��?�場�?��?CACHE_FRONTEND_�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "フロントエンド�?�国�?��?数を�?存�?�る�?��?�数秒�?��?�り�?��?�。");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "フロントエンド�?�訪�?者を�?存�?�る�?��?�数秒�?��?�り�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "本日�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "昨日�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "今週�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "先週�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "今月�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "先月�?�訪�?者をフロントエンド�?�表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_...�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "ジュームラ・ウォッ�?をインストール以�?�?�訪�?者数を表示�?��?��?�。変更�?��?�場�?��?CACHE_FRONTEND_..�?�時間設定後�?フロントエンド内�?��?��?�設定�?�効果的�?��?�。");
DEFINE('_EW_DESC_LANGUAGE', "使用�?�る言語ファイル。 /components/com_extrawatch/lang/�?��?存�?�れ�?��?��?��?�。新�?�?�言語ファイルを作�?�?��?��?�場�?��?先�?��?プロジェクト�?�ホームページを確�?�?��?言語ファイル�?��?��?�場�?��?�?期設定english.phpを例�?��?�german.php�?�コピー�?��?��??�?��?��?�。�??�?��?��?��?�ディレクトリ�?��?存�?��?��??�?��?��?�。�??�?��?�正確�?�全�?��?�主�?�?�値を翻訳�?��?��??�?��?��?�。");
DEFINE('_EW_DESC_GOALS', "目標�?�特別�?�パラメータを指定�?��??�?��?�。�?�れら�?�パラメータ�?�一致�?�る際�?目標カウンター�?�増加�?��?��?�。�?��?�方法�?��?ユーザー�?�特定�?�URL�?�アクセス�?��?��?��?特定�?�値を投函�?��?��?��?特定�?�ユーザー�??を�?有�?��?��?�る�?�或�?�特定�?�アドレス�?�らアクセス�?��?��??�?��?�る�?�をモニタリング�?��??�?��?�。�?��?�よ�?��?�ユーザーをブロック或�?�他�?�URL�?�リダイアル�?��??�?��?�。");
DEFINE('_EW_DESC_GOALS_INSERT', "�??�?を除�??全�?��?�フィールド�?��?ワイルドカード�?��?��?�*や?を使用�?��??�?��?�。例�?��?�: ?ear (一致�?�語: near, tear, ..)�?p*r (一致�?�語: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "訪�?者�?�ブロック�?�れ�?��?�場�?��?1を設定�?��?��??�?��?��?�。コンテンツ�?�リセット内容を見�?��?�ん。リダイレクトやIP�?�'ブロック�?�れ�?�'統計�?�追加�?�れる�?��?��?��??�?ブロック�?�れ�?��?��?��?�メッセージ�?�表示�?�れ�?��?�。 (使用例: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "国�?�件");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "国�??転�?�件");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "大文字�?��?�2文字表記�?�国コード(例: <b>TH</b>)");
DEFINE('_EW_STATS_INTERNAL', "国内");
DEFINE('_EW_STATS_FROM', "�?�ら");
DEFINE('_EW_STATS_TO', "宛");
DEFINE('_EW_STATS_ADD_TO_GOALS', "目標�?�追加");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "�?��?�国�?�目標追加");
DEFINE('_EW_MENU_REPORT_BUG', "�?グや機能を報告");
DEFINE('_EW_GOALS_COUNTRY', "国");


/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "フロントエンド�?�大文字�?�国�??を表記�?��?��?�場�?� (例: �?文字�?�ドイツ�?イギリス�?�表記�?�る代�?り�?�大文字�?�ドイツ�?イギリス�?�表記)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "フロントエンドユーザーを引�??�?��?��?��?存�?�る�?��?�数秒�?��?�り�?��?�");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "フロントエンド�?�計内�?�表示�?�れ�?�主�?値。他�?�スタートツール�?�ら移動�?�る際有用�?��?�。(例: 20000)�?��?�機能を使用�?��?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�。");
DEFINE('_EW_DESC_IGNORE_USER', "�?��?�テキストボックス内�?�リスト�?�れ�?�ユーザーを無視。ライン毎。 (例: myself {line break} mark_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "本日最もアクティブ�?�フロントエンドユーザー�?��?�計");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "以下�?�スパムワードリスト�?�ら�?�言葉�?�基�?��??�?止事項を有効�?��?��?��?��?�？");
DEFINE('_EW_DESC_SPAMWORD_LIST', "スパムボット�?�使用�?��?�最も共通�?�スパム言語。�?��?��?�ワイルドカードを使用�?��??�?��?� (例: ph?rmac*)。上記設定�?�有効�?��?�る場�?��?ジュームラ・ウォッ�?�?��?�?�れら�?�スパム言語�?��?��?�?��?�ウェブサイト上�?�フォーム( HTTP POST�?求)をアタッカー�?��?信�?��?��?�確�?�?��?��?�。(フォーム�?�ジュームラベース�?�ウェブサイト�?�フォーラム�?コメント�?��?�読�?�込む場�?��?��?�用�?�れ�?��?��?��?�?�能�?�フォームを�?信�?�よ�?��?��?�るスパムボットをブロック�?�る�?��?��?��?�も効果的�?��?�。)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "アン�?スパム");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "フロントエンド�?�ユーザーモジュール内リンク�?�URLを特定�?��??�?ユーザー�??をユーザー�?�クリック�?��?�際開�??�?��?�。ストリング{user}を�?�む必�?�?��?�り�?��?�。実際�?�ユーザー�??�?�置�??�?��?�られ�?��?�。 (例 index.php?option=com_comprofiler&task=userProfile&user={user}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "キーフレーズ");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "履歴タブ内�?�最大値 (例: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "訪�?画�?��?��?�全�?��?��?��?��??�?最終訪�?ページ�?��?�表示�?�れ�?��?�");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "訪�?画�?��?��?��?訪�?ページタイトル内�?�代表サイト�??を隠�?��?��?�");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "訪�?履歴�?�データベース内�?��?存�?�る�?��?�?�訪�?者最大数値。アクセス数�?�多�?�場�?��?直�??�?�一�?��?��?�る�?��?�?�注�?�??�?��?��?�。統計内�?�履歴表�?�データ�?��?��?を常�?��?�確�?�??�?��?��?�");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "データベース表をアンインストール�?��?�る。更新中�?��?�る�?��?�データを�?存�?��?��?�場�?��?�?��?�オプションをアンインストール�?�る�?�?��?�確�?�??�?��?��?�。データベース表をアンインストール�?��?��?��??�?��?��?�。");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "毎晩�?�?日�?�関�?�る報告書をメール�?��?��?��?�り�?��?�。�?読む�?��?��?��?��??�?��?�。");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "�?�れら�?�報告書を�?��?��?�り�?��?�メールアドレス");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "確率�?�{value}より高�?�メール報告書�?�行�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>1日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>1日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>7日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>7日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>28日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "確率�?�{value}より高�?�メール報告書�?�行�?��?�<b>28日以�?</b>変更値�?��?��?��?�?��??�?��?��?�。�?��?�機能を使用�?�れ�?��??�?��?�場�?��?0�?�設定�?��?��??�?��?��?�<i>(例: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(プロ�?ージョン�?�機能)</b>  rel='nofollow'属性�?�変更�?�れ�?�ロゴリンクを作�?�?�れ�?��?�場�?��?�?��?�設定を有効�?��?��?��??�?��?��?� ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "メール行�??最大文字数。メールクライアントメッセージ画�?��?��?�?��?��?�る場�?��?�?�れを変更�?��?��??�?��?��?�。");

DEFINE('_EW_MENU_HISTORY', "履歴");
DEFINE('_EW_MENU_EMAILS', "Eメール");
DEFINE('_EW_MENU_STATUS', "DB状�?");
DEFINE('_EW_DESC_BLOCKED', "アン�?スパム�?�より�?�れら�?�IP�?�ブロック�?�れ�?��?��?��?�。");


DEFINE('_EW_HISTORY_VISITORS', "訪�?者履歴");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "%d最終記録�?��?�表示
                �?��?�値を変更�?�る�?��?��?設定 -&gt; 履歴 &amp; パフォーマンス -&gt; HISTORY_MAX_DB_RECORDS�?�進ん�?��??�?��?��?�。�?��?�設定�?��?以下�?�データ読込�?�時間�?�影響を与�?�る�?��?�?�注�?�??�?��?��?�。");
DEFINE('_EW_MENU_BUG', "�?グを報告");
DEFINE('_EW_MENU_FEATURE', "機能�?望");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "キーフワード");

DEFINE('_EW_BLOCKING_UNBLOCK', "ブロック�?��?��?�");
DEFINE('_EW_STATS_KEYPHRASE ', "キーフレーズ");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "テーブル�??");
DEFINE('_EW_STATUS_DATABASE_ROWS', "行数");
DEFINE('_EW_STATUS_DATABASE_DATA', "データ");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "�?�計");

DEFINE('_EW_EMAIL_REPORTS', "Eメール報告書");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "昨日�?�ら発生�?��?�フィルター�?�れ�?�Eメール報告書");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Eメール値フィルター");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "値");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "確率");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "1日間変更");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "7日間変更");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "28日間変更");
DEFINE('_EW_ANTISPAM_BLOCKED', "本日ジュームラ・ウォッ�?�?�%dスパマーヒットをブロック�?��?��?��?�。�?�計: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "ブロック�?�れ�?�IPアドレス");
DEFINE('_EW_ANTISPAM_SETTINGS', "アン�?スパム設定");
DEFINE('_EW_TRAFFIC_AJAX', "AJAX�?�トラフィックを更新�?��?��?�(マップを除�??)");


DEFINE('_EW_HISTORY_PREVIOUS', "�?");
DEFINE('_EW_HISTORY_NEXT', "次");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "国�?�コラム数");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "国�?�行数");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "国�??を表示�?��?��?��?�");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "先�?�国旗を表示�?�??�?��?�確率");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "�??転�?�件を�?�得");
DEFINE('_EW_GOALS_POST_INVERSED', "�??転�?�件を�?スト");
DEFINE('_EW_GOALS_TITLE_INVERSED', "�??転�?�件�?�タイトル");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "�??転�?�件�?�ユーザー�??");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "�??転�?�件�?�起因");

DEFINE('_EW_STATS_MAP', "最終訪�?マップ");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "最終訪�?マップ�?�表示�?��?�る�?��?�?�</a><a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.comキーを入力�?��?��??�?��?��?�：");
DEFINE('_EW_STATS_MAP_STORE_KEY', "ストアキー");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "<a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com�?��?�得�?��?�</a>有効�?�ipinfodbキーを入力�?��?��??�?��?��?�を入力�?��?��??�?��?��?�");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "良�??�?��?��?求: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "�?信フォームフィールド:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "URLパラメーター");
DEFINE('_EW_VISIT_ADD_PAGE', " 目標�?��?��?�ページを追加");
DEFINE('_EW_VISIT_BLOCK_IP', " �?��?�IPアドレスをブロック");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " 目標�?��?��?��?��?��?信フォーム変値を追加");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " 目標�?��?��?��?��?�URLパラメータを追加");

DEFINE('_EW_TREND_EMPTY', "Empty");

DEFINE('_EW_NOT_NUMBER', " 警告:入力値�?�数値�?��?��?�り�?��?�ん。ジュームラ・ウォッ�?�?��?�切�?�起動�?��?��?�ん�?");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; �?�れ�?�15日間評価版�?��?�。残り日数: <b>%d</b> 永久版を�?�購入�??�?��?��?� <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>本ソフト�?��?�今後�?�ソフト�?��?��?�る�?��?��?��?�</a>ジュームラ・ウォッ�?ライセンス�?�ドメイン");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " トライアル版�?�期�?�?��??れ�?��?��?�。ジュームラ・ウォッ�?を�?�購入�??�?��?��?�。");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "ライセンス�?�無事�?�起動�?��?��?��?�。�?�り�?��?��?��?��?��?��?��?�");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>エラー: ライセンスキー�?�ドメイン�?�一致�?��?��?�ん</b><br/>以下�?�表示�?��?�寄付フォーム�?��?��?�ドメイン�??を�?�入力�?�れ�?��?��?��?�？ <br/>クリック '<b>以下�?�正�?��?�起動キーを�?求�?��?��??�?��?��?�</b>或�?��?��?�?��?��?�?��??�?��?��?�: support@codegravity.com<br/>");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "長時間上記メッセージを見られ�?��?�る�?��?��?�れ�?��?ライブサイト�?�間�?��?��?��?�る�?�能性�?��?�り�?��?�。
                    コン�?ー�?ント/com_extrawatch/config.php
                    アンコメントを開�?��?��??�?��?��?��?�??�?��?�実際�?�ライブサイトを設定�?��?��??�?��?��?�。例:
                    �?��?�れ�?�を決定�?��?��??�?��?��?�('EXTRAWATCH_LIVE_SITE'�?'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "警告: ブラウザ内�?�サイト�?�構�?内�?�ライブサイト: %s and %s�?�一致�?��?��?�ん。");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "%s�?��?�ライブサイトを設定�?��?�続�?�る...");

DEFINE('_EW_ADMINHEADER_JW', "ジュームラ・ウォッ�? ");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "�?ックリンクを削除");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "知識ベース");
DEFINE('_EW_ADMINHEADER_FLOW', "フロー");
DEFINE('_EW_ADMINHEADER_GRAPHS', "グラフ");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "コン�?ー�?ント");
DEFINE('_EW_ADMINHEADER_REVIEW', "レビュー");
DEFINE('_EW_ADMINHEADER_WRITE', "次を書�??");

DEFINE('_EW_FLOW_TRAFFIC', "トラフィックフロー");
DEFINE('_EW_FLOW_SELECT_PAGE', "ページ�?�択:");
DEFINE('_EW_FLOW_OUTG_LINKS', "ルート発信リンク数:");
DEFINE('_EW_FLOW_NESTING', "�?スティングレベル:");
DEFINE('_EW_FLOW_SCALE', "スケール:");

DEFINE('_EW_COMERCIAL_AD_FREE', "広告�?��?�版");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "寄付を�?�り�?��?��?��?��?��?��?��?��?");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "ドメイン用登録キー: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "�?ックリンクを削除或�?��?�設定�?�らフロントエンド�?�ジュームラ・ウォッ�?�?�ロゴを隠�?��?��?�。");


DEFINE('_EW_SIZES_LAST_CHECK', "最終確�?実行日：");
DEFINE('_EW_SIZES_ADMINISTRATOR', "ブルー = コン�?ー�?ント/モジュール/管�?�者ディレクトリ�?�サイズ");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "コン�?ー�?ント");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "�?�計:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "サイズ");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "全�?�をリフレッシュ");

DEFINE('_EW_SIZEDATABASE_TABLE', "テーブル");
DEFINE('_EW_SIZEDATABASE_SIZE', "サイズ");
DEFINE('_EW_SIZEDATABASE_1DAY', "1日間変更");
DEFINE('_EW_SIZEDATABASE_7DAY', "7日間変更");
DEFINE('_EW_SIZEDATABASE_28DAY', "28日間変更");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "データ�?��?�");
DEFINE('_EW_SIZEDATABASE_TOTAL', "�?�計:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "全�?�をリフレッシュ");
DEFINE('_EW_SIZEMODULES_TOTAL', "�?�計:");
DEFINE('_EW_SIZEMODULES_MODULE', "モジュール");
DEFINE('_EW_SIZEMODULES_SIZE', "サイズ");

DEFINE('_EW_SIZES_FILES', "&ampファイル;ディレクトリ");
DEFINE('_EW_SIZES_BYTES', "�?イト");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "リフレッシュ");

DEFINE('_EW_STATS_FOOTER', "ジューマル・ウォッ�? &コピー;2006-@年@ マテイ・コ�?ル社�??供");

DEFINE('_EW_STATUS_MB', "MB");
DEFINE('_EW_STATUS_DATABASE', "データベース表サイズ");


DEFINE('_EW_DESC_IPINFODB_KEY', "最終訪�?マップ ipinfodb.comキー�?�得先: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "強制的�?�タイムゾーンをオフセット");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "更新");
DEFINE('_EW_MENU_UPDATE_TITLE', "�?ックアップ&アップグレード");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "無料版�?��?��?�利用�?��?��?��?��?��?�ん。ライセンスタブを確�?�?��?��??�?��?��?�。");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "スパム言語�?止有効");
DEFINE('_EW_SPAMWORD_LIST', "スパム言語リスト");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "何度も表示�?�れるタイトルを隠�?�");
DEFINE('_EW_TRUNCATE_VISITS', "訪�?者数を切り�?��?�る");
DEFINE('_EW_TRUNCATE_STATS', "統計を切り�?��?�る");
DEFINE('_EW_TRUNCATE_GOALS', "目標を切り�?��?�る");
DEFINE('_EW_LIMIT_BOTS', "ボットを制�?");
DEFINE('_EW_LIMIT_VISITORS', "訪�?者数を制�?");
DEFINE('_EW_TOOLTIP_WIDTH', "ツール�?ップ幅");
DEFINE('_EW_TOOLTIP_HEIGHT', "ツール�?ップ高�?�");
DEFINE('_EW_TOOLTIP_URL', "ツール�?ップURL");
DEFINE('_EW_TOOLTIP_ONCLICK', "ツール�?ップ・オンクリック");
DEFINE('_EW_IP_STATS', "IP状�?");
DEFINE('_EW_IPINFODB_KEY', "IP情報DBキー");
DEFINE('_EW_ONLY_LAST_URI', "唯一�?�最終URI ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "フロントエンド�?�ロゴを隠�?� ");
DEFINE('_EW_FRONTEND_NOFOLLOW', "フロントエンド�?�フォロー�?��?�");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "フロントエンド�?�戻るリンク�?��?�");
DEFINE('_EW_FRONTEND_USER_LINK', "フロントエンドユーザーリンク");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "フロントエンド�?��?�?�?�国");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "フロントエンド国�??");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "フロントエンド�?�国大文字");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "フロントエンド�?��?�?�?�国旗 ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "フロントエンド�?�国数");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "フロントエンド�?�国最大コラム数");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "フロントエンド�?�国最大行数");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "本日�?�フロントエンド訪�?者");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "昨日�?�フロントエンド訪�?者");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "今週�?�フロントエンド訪�?者");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "先週�?�フロントエンド訪�?者");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "今月�?�フロントエンド訪�?者");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "先月�?�フロントエンド訪�?者");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "フロントエンド�?�訪�?者数を隠�?�");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "フロントエンド�?��?期�?�計");
DEFINE('_EW_HISTORY_MAX_VALUES', "履歴最大値");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "履歴最大記録");
DEFINE('_EW_UPDATE_TIME_VISITS', "時間別訪�?者更新");
DEFINE('_EW_UPDATE_TIME_STATS', "時間別統計更新");
DEFINE('_EW_STATS_MAX_ROWS', "最大統計行数");
DEFINE('_EW_STATS_IP_HITS', "IPヒット統計");
DEFINE('_EW_MAXID_BOTS', "最大IDボット");
DEFINE('_EW_MAXID_VISITORS', "Maxid Visitors最大ID訪�?者数");
DEFINE('_EW_STATS_KEEP_DAYS', "統計を数日間�?存 ");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "フロントエンド国を隠�?� ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "フロントエンド訪�?者を隠�?� ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "�?管データアンインストール ");
DEFINE('_EW_IGNORE_IP', "IP無視");
DEFINE('_EW_IGNORE_URI', "URI無視");
DEFINE('_EW_IGNORE_USER', "ユーザー無視");
DEFINE('_EW_BLOCKING_MESSAGE', "メッセージブロック");
DEFINE('_EW_SERVER_URI_KEY', "サー�?ーURIキー");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "フロントエンド訪�?者�?�計�?期化");
DEFINE('_EW_SIZEDATABASE_RECORDS', "記録");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " To make the blocking effective, you need to publish ExtraWatch agent BEFORE any content or forms. Eg. on left side in your template.
                    <br/>
                    Go to Module Manager -> ExtraWatch agent -> select position as left");

DEFINE('_EW_EMAIL_SEO_REPORTS', "SEO Reports");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO Nightly email reports enabled");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Watch installation demo");


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