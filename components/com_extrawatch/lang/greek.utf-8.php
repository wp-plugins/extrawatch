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

/**
 * @version greek.php 2009-02-07
 * ===================================================
 * @translator
 * Name: George Papadopoulos
 * Email: jinxs7@netlook.gr
 * Url: http://www.netlook.gr
 * Comment: Hope it's Finished. Hope it's Helpful.
 * ===================================================
 * @version greek.php 2010-12-6
 * ===================================================
 * @translator
 * Name: Antonis Vasileiou
 * Email: sales@e-magazi.gr
 * Url: http://e-magazi.gr
 * Comment: Updated for version 1.2.14.
 * ===================================================
 */

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Main Menu.

DEFINE('_EW_MENU_STATS', "Στατιστικά");
DEFINE('_EW_MENU_GOALS', "Στόχοι");
DEFINE('_EW_MENU_SETTINGS', "Ρυθμίσεις");
DEFINE('_EW_MENU_CREDITS', "Ευχα�?ιστίες");
DEFINE('_EW_MENU_FAQ', "Συχνές Ε�?ωτήσεις");
DEFINE('_EW_MENU_DOCUMENTATION', "Τεκμη�?ίωση");
DEFINE('_EW_MENU_LICENSE', "Άδεια - Αφαί�?εσης Διαφήμισεων");
DEFINE('_EW_MENU_DONATORS', "Δω�?ητές");
DEFINE('_EW_MENU_SUPPORT', "Υποστη�?ίξτε το ExtraWatch κι αφαι�?έστε τις διαφημίσεις από το Χο�?ο διαχι�?ισης.");

// Left visitors real-time window.
DEFINE('_EW_VISITS_VISITORS', "Τελευταίοι Επισκέπτες");
DEFINE('_EW_VISITS_BOTS', "Bots");
DEFINE('_EW_VISITS_CAME_FROM', "Οι επισκεψεις π�?οήλθαν από");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Το ExtraWatch μοντελο δεν έχει ενε�?γοποιηθεί! Δεν μπο�?ο�?ν να καταγ�?αφο�?ν Στατιστικά. Για την ενε�?γοποίησή του , πηγαίνετε στα Ενθέματα και ενε�?γοποιήστε το σε όλες τις σελίδες");
DEFINE('_EW_VISITS_PANE_LOADING', "Φο�?τώνει Επισκέψεις...");

// Right stats window.
DEFINE('_EW_STATS_TITLE', "Στατιστικά Εβδομάδας");
DEFINE('_EW_STATS_WEEK', "Εβδομάδα");
DEFINE('_EW_STATS_THIS_WEEK', "Τ�?έχουσα Εβδομάδα");
DEFINE('_EW_STATS_UNIQUE', "μοναδικά");
DEFINE('_EW_STATS_LOADS', "φο�?τώσεις");
DEFINE('_EW_STATS_HITS', "π�?οβολές");
DEFINE('_EW_STATS_TODAY', "Σήμε�?α");
DEFINE('_EW_STATS_FOR', "για");
DEFINE('_EW_STATS_ALL_TIME', "Συνολικά");
DEFINE('_EW_STATS_EXPAND', "ανάπτυξη");
DEFINE('_EW_STATS_COLLAPSE', "σ�?μπτυξη");
DEFINE('_EW_STATS_URI', "Σελίδες");
DEFINE('_EW_STATS_COUNTRY', "Χώ�?ες");
DEFINE('_EW_STATS_USERS', "Χ�?ήστες");
DEFINE('_EW_STATS_REFERERS', "Π�?οήλθε από");
DEFINE('_EW_STATS_IP', "IPs");

DEFINE('_EW_STATS_BROWSER', "Πλοηγοί");
DEFINE('_EW_STATS_OS', "OS");
DEFINE('_EW_STATS_KEYWORDS', "Λέξεις-κλειδιά");
DEFINE('_EW_STATS_GOALS', "Στόχοι");
DEFINE('_EW_STATS_TOTAL', "Σ�?νολο");
DEFINE('_EW_STATS_DAILY', "Καθημε�?ινά");
DEFINE('_EW_STATS_DAILY_TITLE', "Καθημε�?ινά Στατιστικά");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Στατιστικά Συνολικά");
DEFINE('_EW_STATS_LOADING', "φό�?τωση...");
DEFINE('_EW_STATS_LOADING_WAIT', "Πε�?ιμένετε .... φο�?τώνει");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "IP Αποκλεισμένη");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Εισάγετε IP χει�?οκίνητα");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Εισάγετε IP που θέλετε να Αποκλείσετε. (π.χ. 217.242.11.54 ή 217.* ή 217.242.* ή για να Αποκλείσετε όλες τις IPs που ται�?ιάζουν στη κα�?τα σας)");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "�?α γίνει εναλλαγή μπλοκα�?ίσματος της ");
DEFINE('_EW_STATS_PANE_LOADING', "Φό�?τωση Στατιστικών...");

// Settings.
DEFINE('_EW_SETTINGS_TITLE', "Ρυθμίσεις");
DEFINE('_EW_SETTINGS_DEFAULT', "Π�?οκαθο�?ισμένο");
DEFINE('_EW_SETTINGS_SAVE', "Αποθήκευση");
DEFINE('_EW_SETTINGS_APPEARANCE', "Εμφάνιση");
DEFINE('_EW_SETTINGS_FRONTEND', "Π�?οσβασιμη Ιστιοσελιδα");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "Ιστο�?ικό και Επιδόσεις");
DEFINE('_EW_SETTINGS_ADVANCED', "Π�?οηγμένες Ρυθμίσεις");
DEFINE('_EW_SETTINGS_IGNORE', "Πα�?άβλεψη");
DEFINE('_EW_SETTINGS_BLOCKING', "Αποκλεισμός");
DEFINE('_EW_SETTINGS_EXPERT', "Εξειδικευμένες Ρυθμίσεις");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Θέλετε να Επαναφέ�?ετε όλα τα Στατιστικά Σελίδων και Χ�?ηστών?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Επαναφο�?ά όλων");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Επαναφο�?ά όλων των Στατιστικών και Χ�?ηστών");
DEFINE('_EW_SETTINGS_LANGUAGE', "Γλώσσα");
DEFINE('_EW_SETTINGS_SAVED', "Οι Ρυθμίσεις Αποθηκε�?τηκαν");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Π�?οσθέστε την IP σας");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "στην λίστα.");


// Other / mostly general.

DEFINE('_EW_TITLE', "ΑΓΙΑΞ Πα�?ακολο�?θηση joomla σε π�?αγματικό χ�?όνο ");
DEFINE('_EW_BACK', "Πίσω");
DEFINE('_EW_ACCESS_DENIED', "Δεν έχετε Δικαίωμα να το δείτε !");
DEFINE('_EW_LICENSE_AGREE', "Συμφωνώ με του Ό�?ους και τις Ανωτέ�?ω Συνθήκες");
DEFINE('_EW_LICENSE_CONTINUE', "Συνέχεια");
DEFINE('_EW_SUCCESS', "Λειτου�?γία επιτυχής");
DEFINE('_EW_RESET_SUCCESS', "Όλα τα Στατιστικά και τα στοιχεία Χ�?ηστών Διαγ�?άφηκαν με Επιτυχία");
DEFINE('_EW_RESET_ERROR', "Τα Στατιστικά και τα στοιχεία Χ�?ηστών ΔΕ�? Διαγ�?άφηκαν με Επιτυχία");
DEFINE('_EW_CREDITS_TITLE', "Ευχα�?ιστίες");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Καθημε�?ινά και Εβδομαδιαία Στατιστικά από ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "Α�?νηση δικαιωμάτων ΑΓΙΑΞ: Πα�?ακαλο�?με δείτε τα στοιχεία του domain που δηλώσατε στο configuration.php του joomla - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Μάλλον έχετε ξεχάσει το  www. π�?ιν το domain σας. Η τοjavascript π�?οσπαθεί να έχει π�?όσβαση ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "από");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "Τι το κάνει να πιστε�?ει ότι π�?όκειται για διαφο�?ετικό Domain.");

// Header.
DEFINE('_EW_HEADER_DOWNLOAD', "Λάβετε τον τελευταίο Κώδικα για το επέκταση από");
DEFINE('_EW_HEADER_CAST_YOUR', "Δώστε την");
DEFINE('_EW_HEADER_VOTE', "Ψήφο σας");

// Tooltips.
DEFINE('_EW_TOOLTIP_CLICK', "Κλικ για να δείτε Πλη�?οφο�?ία");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Πε�?άστε απο πάνω το ποντίκι για να δείτε πλη�?οφο�?ία");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "χθες ,α�?ξηση");
DEFINE('_EW_TOOLTIP_HELP', "Ανοίγμα Εξωτε�?ική Βοήθεια");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Κλείσιμο Πα�?αθ�?�?ου");
DEFINE('_EW_TOOLTIP_PRINT', "Εκτ�?πωση");

// Goals.
DEFINE('_EW_GOALS_INSERT', "Εισάγετε ένα �?έο Στόχο");
DEFINE('_EW_GOALS_UPDATE', "Ενημέ�?ωση Α�?. Στόχου.");
DEFINE('_EW_GOALS_ACTION', "Κίνηση");
DEFINE('_EW_GOALS_TITLE', "�?έος Στόχος");
DEFINE('_EW_GOALS_NEW', "�?έος Στόχος");
DEFINE('_EW_GOALS_RELOAD', "Επαναφό�?τωση");
DEFINE('_EW_GOALS_ADVANCED', "Π�?οηγμένο");
DEFINE('_EW_GOALS_NAME', "Όνομα");
DEFINE('_EW_GOALS_ID', "id");
DEFINE('_EW_GOALS_URI_CONDITION', "Κατάσταση URI");
DEFINE('_EW_GOALS_GET_VAR', "μεταβλητή GET");
DEFINE('_EW_GOALS_GET_CONDITION', "Κατάσταση GET");
DEFINE('_EW_GOALS_POST_VAR', "μεταβλητή POST");
DEFINE('_EW_GOALS_POST_CONDITION', "Κατάσταση POST");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Κατάσταση Τίτλου");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Κατάσταση Ψευδώνυμου");
DEFINE('_EW_GOALS_IP_CONDITION', "Κατάσταση της IP");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Π�?οήλθε από κατάσταση");
DEFINE('_EW_GOALS_BLOCK', "Αποκλεισμός");
DEFINE('_EW_GOALS_REDIRECT', "Ανακατε�?θυνση στο συνδεσμο");
DEFINE('_EW_GOALS_HITS', "Π�?οβολές");
DEFINE('_EW_GOALS_ENABLED', "Ενε�?γοποιημένο");
DEFINE('_EW_GOALS_EDIT', "Διό�?θωση");
DEFINE('_EW_GOALS_DELETE', "Διαγ�?αφή");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Θα χάσετε π�?όσφατα Στατιστικά αυτο�? του Στόχου. Θέλετε π�?αγματικά να Διαγ�?άψετε Α�?. Στόχου?.");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Χώ�?ες");
DEFINE('_EW_FRONTEND_VISITORS', " Μέλη");
DEFINE('_EW_FRONTEND_TODAY', "Σήμε�?α");
DEFINE('_EW_FRONTEND_YESTERDAY', "Χθες");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Τ�?έχουσα Εβδομάδα");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Π�?οηγο�?μενη Εβδομάδα");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Τ�?έχων Μήνας");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Π�?οηγο�?μενος Μήνας");
DEFINE('_EW_FRONTEND_TOTAL', "Σ�?νολο");

// Settings description - quite long.
DEFINE('_EW_DESC_DEBUG', "To ExtraWatch είναι σε κατάσταση αποσφαλμάτωσης. Με αυτόν τον τ�?όπο μπο�?είτε να εντοπίσετε λάθη. Για να το απενε�?γοποιήσετε, αλλάξτε την τιμή EXTRAWATCH_DEBUG στο /components/com_extrawatch/config.php από 1 σε 0");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Μέγιστος α�?ιθμός γ�?αμμών όταν τα Στατιστικά είναι σε Ανάπτυξη.");
DEFINE('_EW_DESC_STATS_IP_HITS', "Όλες οι IP διευθ�?νσεις που έχουν λιγότε�?ες π�?οβολές τις π�?οηγο�?μενες μέ�?ες, απο αυτήν την Τιμή θα διαγ�?αφο�?ν από το Ιστο�?ικό IP.");
DEFINE('_EW_DESC_STATS_URL_HITS', "Όλοι  οι συνδεσμοι που έχουν λιγότε�?ες π�?οβολές τις π�?οηγο�?μενες μέ�?ες, από αυτήν την Τιμή θα διαγ�?αφο�?ν από το Ιστο�?ικό του IP.");
DEFINE('_EW_DESC_IGNORE_IP', "Εξαί�?εση συγκεκ�?ιμένων IP από τα Στατιστικά. Διαχω�?ισμός σε μια �?έα Γ�?αμμή. Μπο�?είτε να χ�?ησιμοποιήσετε την κα�?τα σας εδώ. <br/>π.χ. 192.* θα αγνοηθεί 192.168.51.31, 192.168.16.2, κ.λ.π..");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Χ�?όνος ανανέωσης Επισκεπτών σε μιλιδευτε�?ολεπτα, π�?οκαθο�?ισμένο είναι το 2000, π�?οσοχή με αυτό. Μετά Φο�?τώστε  το ExtraWatch χο�?ο διαχι�?ισης.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Χ�?όνος ανανέωσης Στατιστικών σε μιλιδευτε�?ολεπτα, π�?οκαθο�?ισμένο είναι το 4000, π�?οσοχή με αυτό. Μετά Φο�?τώνει το ExtraWatch χο�?ος διαχι�?ισης.");
DEFINE('_EW_DESC_MAXID_BOTS', "Πόσες bot επισκέψεις να διατη�?ο�?νται στην Βάση Δεδομένων.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Πόσες Π�?αγματικές επισκέψεις να διατη�?ο�?νται στην Βάση Δεδομένων.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Πόσα bots θα δείτε στο Χο�?ο διαχι�?ισης.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Πόσους Π�?αγματικο�?ς Επισκέπτες θα δείτε στο Χο�?ο διαχι�?ισης.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Μέγιστος α�?ιθμός Χα�?ακτή�?ων σε μακ�?�? Τίτλο και uris.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Μέγιστος α�?ιθμός Χα�?ακτή�?ων στο Πάνελ Στατιστικών στα Δεξιά.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Μέ�?ες που θα διατη�?ηθο�?ν Στατιστικά στην Βάση Δεδομένων, 0 = απε�?ιό�?ιστο.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Όταν β�?ίσκεστε σε διαφο�?ετική Ζώνη �?�?ας από το Πά�?οχό σας. (θετική ή α�?νητική Τιμή για την ώ�?α)");
DEFINE('_EW_DESC_WEEK_OFFSET', "Εβδομαδιαία μο�?φή, το χ�?ονικό σημάδι/(3600*24*7) δίνει στην Εβδομάδα εκκίνηση από 1.1.1970, αυτή η μο�?φή κάνει μια διό�?θωση για να ξεκίνα η Εβδομάδα από Δευτέ�?α ");
DEFINE('_EW_DESC_DAY_OFFSET', "Μο�?φή ημέ�?ας, το χ�?ονικό σημάδι/(3600*24) δίνει στην Ημέ�?α εκκίνηση από 1.1.1970, αυτή η μο�?φή κάνει μια διό�?θωση για να ξεκίνα από 00:00 ");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Για να Χ�?ησιμοποιηθεί ένα 1x1px εικονίδιο στην ιστιοσελιδα");
DEFINE('_EW_DESC_IP_STATS', "Για να ενε�?γοποιηθεί η IP διε�?θυνση των Στατιστικών. Σε με�?ικές Χώ�?ες το να διατη�?ηθεί η IP στην Βάση Δεδομένων ΑΠΑΓΟΡΕΎΕΤΑΙ από τον �?όμο. Χ�?ήση αυτο�? με δική σας ευθ�?νη.");
DEFINE('_EW_DESC_HIDE_ADS', "Η Ρ�?θμιση αυτή αποκ�?�?πτει τα Διαφημιστικά από το Χο�?ο διαχι�?ισης, αν σας ενοχλο�?ν. Διατη�?ώντας πάντως είναι καλό να γνω�?ίζετε ότι βοηθάτε στην Ανάπτυξη της Εφα�?μογής αυτής. Ευχα�?ιστο�?με ");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Απο-Τσεκά�?ετε, αν θέλετε εμφάνιση πλη�?οφο�?ίας με πέ�?ασμα του ποντικιο�?, από εμφάνιση με κλικ του ποντικιο�?.");
DEFINE('_EW_DESC_SERVER_URI_KEY', "Π�?οκαθο�?ισμένο είναι 'REDIRECT_URL', που είναι το σ�?νηθες αν χ�?ησιμοποιήθηκε επανεγγ�?αφή του συνδεσμου, μπο�?εί να ο�?ισθεί σε 'SCRIPT_URL' αν α�?χειοθετεί μόνο το index.php");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Μήνυμα που βλέπει ο Αποκλεισμένος Χ�?ήστης με πλη�?οφο�?ίες για τους λόγους του Αποκλεισμο�? του.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Πλάτος Πα�?αθ�?�?ου Πλη�?οφο�?ίας");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Ύψος Πα�?αθ�?�?ου Πλη�?οφο�?ίας");
DEFINE('_EW_DESC_TOOLTIP_URL', "Μπο�?είτε να τοποθετήσετε οποιοδήποτε Συνδεσμο εδώ, για να επιβλέπεται την ip του Επισκέπτη. Η {ip} θα αντικατασταθεί από την ip του Επισκέπτη. Π.χ. http://somewebsite.com/query?iplookup={ip}");
DEFINE('_EW_DESC_IGNORE_URI', "Μπο�?είτε να γ�?άψετε οποιοδήποτε συνδεσμο που θέλετε για να εξαι�?εθεί από τα Στατιστικά. Μπο�?είτε να χ�?ησιμοποιήσετε την κα�?τα σας  (* και ?) εδώ. Π.χ.: /freel?n* ");
DEFINE('_EW_DESC_GOALS_NAME', "Καταστήστε σαφή τον Στόχο εδώ. αυτό το όνομα που θα ο�?ίσετε θα φανεί στα Στατιστικά.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Οτιδήποτε υπά�?χει μετά το Domain σας. Για http://www.codegravity.com/projects/ το συνδεσμο είναι: /projects/ (Πα�?άδειγμα χ�?ήσης: <b>/projects*</b>)");
DEFINE('_EW_DESC_GOALS_GET_VAR', "Η GET μεταβλητή είναι μια μεταβλητή που μπο�?είτε να δείτε στο URL συνήθως μετά το ? ή το &amp; χα�?ακτή�?α. Π.χ. http://www.codegravity.com/index.php?<u>Ονομα</u>=peter&amp;<u>επονυμο</u>=smith. Μπο�?είτε επίσης να χ�?ησιμοποιήσετε <u>*</u> σε αυτό το Πεδίο για την ανε�?�?εση όλων των GET μεταβλητών. (Πα�?άδειγμα Χ�?ήσης: <b>n*εγο</b>)");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Εδώ καταστήστε σαφές αν υπά�?χει σ�?γκλιση μιας Τιμής με αυτήν Π�?οηγο�?μενου Πεδίου. (Πα�?άδειγμα Χ�?ήσης: <b>p?t*r</b>) ");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Σχεδόν ίδια, αλλά εδώ ψάχνουμε για Τιμές που απεστάλησαν από Φό�?μες. Έτσι μπο�?είτε να έχετε μια Φό�?μα στην Ιστοσελίδα σας , πο�? αυτή θα έχει ένα Πεδίο &lt;input type='text' name='<u>experiences</u>' /&gt;. (Πα�?άδειγμα χ�?ήσης: <b>exper*ces</b>)");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', "Σ�?γκλιση μιας Τιμής από το Πεδίο POST. Π.χ. θέλουμε να ελέγξουμε αν ο Χ�?ήστης έχει γνώσεις στην χ�?ήση java. (Πα�?άδειγμα χ�?ήσης: <b>*java*</b>)");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Ο Τίτλος Σελίδας που π�?έπει να ται�?ιάζει. (Πα�?άδειγμα χ�?ήσης: <b>*freelance programmers*</b>)");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Όνομα για ένα Χ�?ήστη Συνδεδεμένο. (Πα�?άδειγμα χ�?ήσης: <b>psmith*</b>)");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "Η IP του Χ�?ήστη π�?οέ�?χεται από: (Πα�?άδειγμα χ�?ήσης: <b>201.9?.*.*</b>)");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "Ο συνδεσμος από όπου π�?οήλθε ο Χ�?ήστης. (Πα�?άδειγμα χ�?ήσης: <b>*www.google.*</b>)");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Ο Χ�?ήστης θα ανακατευθυνθεί σε συνδεσμο ο�?ισμένο από εσάς. Αυτό έχει μεγαλ�?τε�?η Π�?οτε�?αιότητα από τον 'Αποκλεισμό': (Πα�?άδειγμα χ�?ήσης: <b>http://www.codegravity.com/goaway.html</b>)");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Πόσους χα�?ακτή�?ες να πε�?ικόψουμε στα Πεδία των Στόχων");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Ανακατε�?θυνση στο codegravity.com, μπο�?είτε να το Απενε�?γοποιήσετε, αλλά θα το εκτιμο�?σαμε αν δεν το κάνατε. Ευχα�?ιστο�?με");

DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Εμφάνιση συνολικών Χω�?ών στο Στο μπ�?οστινο με�?ος τις ιστοσελιδας. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στην ιστοσελιδα μετά από το χ�?όνο που έχει ο�?ισθεί στην κ�?ιφη μνημη τις ιστοσελιδας ");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Αν θέλετε να μετατ�?έψετε την σει�?ά των Επισκεπτών/Χω�?ών στο μπ�?οστινο με�?ος τις ιστοσελιδας. Απο-τσεκά�?ετε αυτό, και οι Επισκέπτες θα εμφανιστο�?ν π�?ώτοι.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Α�?ιθμός Χω�?ών που θα εμφανίζονται στην ιστοσελιδα");
DEFINE('_EW_DESC_FRONTEND_VISITORS', "Εμφάνιση Επισκεπτών Χω�?ών στο διμοσιευμενο με�?ος τισ ιστισελιδας. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο frontend μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Χ�?όνος σε δευτε�?όλεπτα, φέ�?νει στην cache το σ�?νολο των χω�?ών στο μπ�?οστινο με�?ος τις ιστοσελιδας");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', "Χ�?όνος σε δευτε�?όλεπτα, φέ�?νει στην κ�?ιφη μνιμη το σ�?νολο των επισκεπτών στην ιστοσελιδα");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Για Εμφάνιση των Επισκεπτών στην ιστοσελιδα για: σήμε�?α. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στην ιστοσελιδα  μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ηφη μνιμη");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Για Εμφάνιση των Επισκεπτών στην ιστοσελιδα για: χθες. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο frontend μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Για Εμφάνιση των Επισκεπτών στο ιστοσελιδα για: τ�?έχουσα εβδομάδα. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο ιστοσελιδα μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Για Εμφάνιση των Επισκεπτών στην ιστοσελιδα για: π�?οηγο�?μενη εβδομάδα. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο frontend μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Για Εμφάνιση των Επισκεπτών στην ιστοσελιδα για: τ�?έχων μήνας. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο frontend μετά από το χ�?όνο που έχει ο�?ισθεί στην CACHE_FRONTEND_...");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Για Εμφάνιση των Επισκεπτών στην ιστοσελιδα για: π�?οηγο�?μενος μήνας. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στο frontend μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Για π�?οβολή συνολικο�? α�?ιθμο�? επισκεπτών από την εγκατάσταση του ExtraWatch. Αν αλλαχθεί, αυτή η Ρ�?θμιση θα ενε�?γοποιηθεί στην ιστοσελιδα μετά από το χ�?όνο που έχει ο�?ισθεί στην Κ�?ιφη Μνιμη τις ιστοσελιδας");
DEFINE('_EW_DESC_LANGUAGE', "Α�?χεία Γλώσσας π�?ος Χ�?ήση. Β�?ίσκονται στο /components/com_extrawatch/lang/. Αν θέλετε να δημιου�?γήσετε ένα �?έο Α�?χείο Γλώσσας, επισκεφθήτε  π�?ώτα την Ιστοσελίδα μας, και αν αυτό που θέλετε δεν υπά�?χει τότε απλά λάβετε και μετονομάστε το english.php σε π.χ. german.php και τοποθετήστε το στον ανωτέ�?ω φάκελο. Μεταφ�?άστε όλες τις Τιμές Κλειδιά που β�?ίσκονται στα Δεξιά, και η μετάφ�?αση είναι έτοιμη.");
DEFINE('_EW_DESC_GOALS', "Οι Στόχοι σας επιτ�?έπουν να καθο�?ίσετε Πα�?αμέτ�?ους. Όταν αυτές οι Πα�?άμετ�?οι συμπίπτουν, τότε ο μετ�?ητής Στόχων αυξάνει. Με αυτόν τον τ�?όπο μπο�?εί να επιτη�?είται  αν ένας Χ�?ήστης επισκέπτεστε ενα συγκεκ�?ιμένο συνδεσμο, απέστειλε μια συγκεκ�?ιμένη Τιμή, έχει συγκεκ�?ιμένο Ψευδώνυμο χ�?ήστη ή αν π�?οήλθε από συγκεκ�?ιμένη διε�?θυνση. Μπο�?είτε επίσης να Αποκλείσετε ή να Ανακατευθ�?νετε χ�?ήστες που χ�?ησιμοποιο�?ν άλλους συνδεσμους.");
DEFINE('_EW_DESC_GOALS_INSERT', "Σε όλα τα Πεδία εκτός του ονόματος μπο�?είτε να χ�?ησιμοποιήσετε το * και ? όπως στα wildcards. Για Πα�?άδειγμα: ?ear (θα ται�?ιάζει με: near, tear, ..),  p*r (θα ται�?ιάζει επίσης με: pr, peer, pear ..) ");
DEFINE('_EW_DESC_GOALS_BLOCK', "έχει ο�?ισθεί σε 1, αν θέλετε ο Χ�?ήστης να αποκλεισθεί. Δεν θα μπο�?εί να δει το υπόλοιπο του Πε�?ιεχομένου, μόνο το μήνυμα ότι έχει Αποκλεισθεί - χω�?ίς καμία δυνατότητα Ανακατε�?θυνσης και η  IP θα π�?οστεθεί στα Στατιστικά 'Αποκλεισμένοι' (Πα�?άδειγμα π�?ος Χ�?ήση: <b>1</b>)");

/* new translations */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Κατάσταση Χώ�?ας");
DEFINE('_EW_GOALS_COUNTRY_INVERSED', "Αντίστ�?οφη Κατάσταση Χώ�?ας");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "2-γ�?αμμάτων Κώδικας Χώ�?ας με κεφαλαία (π.χ: <b>GR</b>)");
DEFINE('_EW_STATS_INTERNAL', "Εσωτε�?ικό");
DEFINE('_EW_STATS_FROM', "Από");
DEFINE('_EW_STATS_TO', "Π�?ος");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Π�?οσθήκη στους Στόχους");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Π�?οσθήκη Στόχου για αυτή την Χώ�?α");
DEFINE('_EW_MENU_REPORT_BUG', "Αναφο�?ά Π�?οβλήματος ή Λάθους");
DEFINE('_EW_GOALS_COUNTRY', "Χώ�?α");

/* translations 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Επιλογή ονομάτων Χω�?ών με Κεφαλαία γ�?άμματα στην ιστοσελιδα (π.χ.: GERMANY, UNITED KINGDOM αντί για Germany, United Kingdom)");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Χ�?όνος σε δευτε�?όλεπτα για την εμφάνιση των Χ�?ηστών στην ιστοσελιδα");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Εμφανιζόμενη Α�?χική Τιμή Συνόλου: στην ιστοσελιδα. Χ�?ήσιμο οταν λαμβάνετε στοιχεία απο άλλο Ε�?γαλείο. (π.χ.: 20000). Ο�?ίστε σε 0 αν δεν χ�?ησιμοποιήτε το στοιχείο αυτό.");
DEFINE('_EW_DESC_IGNORE_USER', "Αγνοημένοι Χ�?ήστες στην λίστα του Πε�?ιοχής Κειμένου. Ένας για κάθε Γ�?αμμή. (π.χ..: εγώ {line break} σημάδι_*) ");
DEFINE('_EW_FRONTEND_USERS_MOST', "Πε�?ισσότε�?ο Ενε�?γοί Χ�?ήστες : Σ�?νολο από");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Ενε�?γοποίηση Αποκλεισμών βάσει των λέξεων κλειδιών που αναφέ�?ονται πα�?ακάτω ?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Κοινές Λέξεις spam που χ�?ησιμοποιο�?νται από spam bots. Χ�?ησιμοποιήστε τα wildcards εδώ, (π.χ..: ph?rmac*). Εάν οι πα�?απάνω �?υθμίσεις είναι Ενε�?γοποιημένες, το ExtraWatch θα β�?εί αν ο Εισβολέας π�?οσπαθεί να στείλει φό�?μα (the HTTP POST request) στην Ιστοσελίδα σας με κάποιες από τις πα�?απάνω spam λέξεις. (Ισχ�?ει εφόσον η φό�?μα φο�?τώνεται στο Joomla και βασίζεται μόνο σε δικτυακο�?ς τόπους - φό�?ουμ, και στα σχόλια επίσης, αλλά είναι α�?κετά αποτελεσματική για να μπλοκά�?ει και spam bots που π�?οσπαθο�?ν να υποβάλουν κάθε άλλη δυνατή μο�?φή)");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anti-Spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Μετάβαση του  Ενθέματος Χ�?ηστών στην ιστοσελιδα - σας επιτ�?έπει να ο�?ίσετε ένα URL, και ανοίγει όταν ο �?ήστης κάνει Κλίκ στο Όνομα Χ�?ήστη στην ιστοσελιδα. Π�?έπει να πε�?ιέχει το string {Χ�?ήστης}, που θα αντικατασταθεί από το Ο�?ισμένο Όνομα Χ�?ήστη. (π.χ.. index.php?option=com_comprofiler&task=userProfile&user={Χ�?ήστης}) ");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Φ�?άσεις κλειδιά ");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Μέγιστη τιμή στο ιστο�?ικό (Π.χ.: <i>100</i>)");

DEFINE('_EW_DESC_ONLY_LAST_URI', "Σε επισκέπτες π�?οβολή μόνο την τελευταία επισκέψιμη σελίδα, όχι όλες");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "Σε επισκέψεις απόκ�?υψη επαναλαμβανόμενης ιστοσελίδας στον τίτλο σελίδας");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Μέγιστος α�?ιθμός επισκεπτών για αποθήκευση στη Β.Δεδομένων για Ιστο�?ικό. Π�?οσέξτε με τη �?�?θμιση γιατί εάν έχετε μεγάλη επισκεψιμότητα θα μεγαλώσει υπε�?βολικά. Πάντα να ελέγχετε πόσα δεδομένα υπά�?χουν στον πίνακα από την Κατάσταση");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Κ�?άτημα πινάκων στην απεγκατάσταση. Επιλέξτε εδώ π�?ιν την απεγκατάσταση άν αναβαθμίζετε και θέλετε να πα�?αμείνουν τα δεδομένα.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Θα λαμβάνετε νυκτε�?ινά emails με αναφο�?ές της π�?οηγο�?μενης ημέ�?ας, για ανάγνωση την επομένη");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Ηλεκτ�?ηκο ταχυδ�?ομιο στο οποίο θα λαμβάνετε τις αναφο�?ές");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "�?α πε�?ιλαμβάνει στις αναφο�?ές μόνο γ�?αμμές όπου το ποσοστό είναι μεγαλ�?τε�?ο από {Αξια}. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>θετικές ημε�?ήσιες</b> στις αναφο�?ές όταν μεγαλ�?τε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: 5)</i>");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>α�?νητικές ημε�?ήσιες</b> στις αναφο�?ές όταν μικ�?ότε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: -10)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>θετικές εβδομαδιαίες</b> στις αναφο�?ές όταν μεγαλ�?τε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: 2)</i>");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>α�?νητικές εβδομαδιαίες</b> στις αναφο�?ές όταν μικ�?ότε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: -13)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>θετικές μηνιαίες</b> στις αναφο�?ές όταν μεγαλ�?τε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: 2)</i>");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "�?α πε�?ιλαμβάνει μόνο αλλαγές τιμής <b>α�?νητικές μηνιαίες</b> στις αναφο�?ές όταν μικ�?ότε�?ες από {αξια} ποσοστο�?. Δώστε 0 αν δε θέλετε τη λειτου�?γία <i>(π.χ.: -13)</i>");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(λειτου�?γεί μόνο σε PRO version)</b> Ενε�?γοποιήστε αν θέλετε τον δεσμό λογοτ�?που να ανοίγει με ιδιότητα rel='nofollow' ");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Μέγιστοι χα�?ακτή�?ες στο όνομα γ�?αμμής Δυευθινσης ηλεκτ�?ικου ταχιδ�?ομιου. Αλλάξτε το εάν το π�?όγ�?αμμα email έχει μικ�?ό πα�?άθυ�?ο");

DEFINE('_EW_MENU_HISTORY', "Ιστο�?ικό");
DEFINE('_EW_MENU_EMAILS', "Διαυθινση ηλεκτ�?ικου ταχιδ�?ομιου");
DEFINE('_EW_MENU_STATUS', "Κατάσταση");
DEFINE('_EW_DESC_BLOCKED', "Αυτές οι IP μπλοκα�?ίστηκαν από το αντι-ανεπυθιμιτων");

DEFINE('_EW_HISTORY_VISITORS', "Ιστο�?ικό επισκεπτών");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Π�?οβολή μόνο %d τελευταίων εγγ�?αφών.
                Για αλλαγή της τιμής, πηγαίνετε στις Ρυθμίσεις -&gt; Ιστο�?ικό &amp; Επιδόσεις -&gt; HISTORY_MAX_DB_RECORDS . Π�?οσέξτε, η �?�?θμιση επη�?εάζει το χ�?όνο φό�?τωσης των πα�?ακάτω δεδομένων.  ");
DEFINE('_EW_MENU_BUG', "Αναφο�?ά σφάλματος");
DEFINE('_EW_MENU_FEATURE', "Αίτηση λειτου�?γίας");
DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Λέξεις-κλειδιά");
DEFINE('_EW_BLOCKING_UNBLOCK', "ξεμπλοκά�?ισμα");
DEFINE('_EW_STATS_KEYPHRASE ', "Φ�?άση-κλειδί");
DEFINE('_EW_STATUS_DATABASE', "Κατάσταση Β.Δεδομένων");
DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "όνομα πίνακα");
DEFINE('_EW_STATUS_DATABASE_ROWS', "γ�?αμμές");
DEFINE('_EW_STATUS_DATABASE_DATA', "δεδομένα");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "σ�?νολο");
DEFINE('_EW_EMAIL_REPORTS', "Αναφο�?ά ηλεκτ�?ονικου ταχιδ�?ομιου");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Φιλτ�?α�?ισμένη χτεσινή αναφο�?ά επισκέψεων");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Φίλτ�?α τιμών ηλεκτονικο ταχυδ�?ομιον");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "τιμή");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "ποσοστό");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "Αλλαγή 1-ημέ�?ας");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "Εβδομαδιαία αλλαγή");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "Μηνιαία αλλαγή");
DEFINE('_EW_ANTISPAM_BLOCKED', "Το ExtraWatch μπλοκά�?ισε τα ανεπιθιμιτα σήμε�?α, σ�?νολο: %d");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Μπλοκα�?ισμένες IP");
DEFINE('_EW_ANTISPAM_SETTINGS', "Ρυθμίσεις Αντι-ανεπιθιμιτων");
DEFINE('_EW_TRAFFIC_AJAX', "Κίνηση ανανέωσης ΑΓΙΑΞ");

DEFINE('_EW_HISTORY_PREVIOUS', "π�?οηγο�?μενο");
DEFINE('_EW_HISTORY_NEXT', "επόμενο");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Α�?ιθμός στηλών χω�?ών");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Α�?ιθμός γ�?αμμών χω�?ών");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Π�?οβολή ή όχι ονομάτων χω�?ών");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Π�?ώτα σημαίες, μετά ποσοστά");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "Αντίστ�?οφη κατάσταση GET");
DEFINE('_EW_GOALS_POST_INVERSED', "Αντίστ�?οφη κατάσταση POST");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Αντίστ�?οφη κατάσταση Τίτλου");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Αντίστ�?οφη κατάσταση ονόματος χ�?ήστη");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Αντίστ�?οφη κατάσταση Π�?οήλθε από");

DEFINE('_EW_STATS_MAP', "χα�?τις τελευταιον επισκεψεον");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Πα�?ακαλω εισαγετε <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a> κλειδη για να δειτε τις τελευταιες επισκεψις:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "αποθήκευση κλειδιο�?");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Πα�?ακαλώ δώστε ένα ισχ�?ον κλειδί ipinfodb που πή�?ατε από: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "Κακη αναζιτιση: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Πεδία καταχω�?ημένης φό�?μας:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "Πα�?άμετ�?οι URL:");
DEFINE('_EW_VISIT_ADD_PAGE', " Π�?όσθήκη τη σελίδας σαν στόχο");
DEFINE('_EW_VISIT_BLOCK_IP', " Μπλοκά�?ισε αυτή την IP");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Δώστε σαν στόχο αυτή τη μεταβλητή φό�?μας");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Δώστε σαν στόχο αυτή την πα�?άμετ�?ο συνδεσμου");

DEFINE('_EW_TREND_EMPTY', "Κενό");

DEFINE('_EW_NOT_NUMBER', " ΠΡΟΣΟΧΗ: Η τιμή που δώσατε δεν είναι α�?ιθμός. Το ExtraWatch δε θα λειτου�?γήσει κανονικά!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; Αυτή είναι μία δοκιμαστική έκδοση 15-ημε�?ών. Εμειναν ακόμη: <b>%d</b>. Πα�?ακαλώ αγο�?άστε την απε�?ιό�?ιστη <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>'άδεια ExtraWatch για το domain σας</a> για αυτή και τις επόμενες εκδόσεις.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Η δοκιμαστική πε�?ίοδος έληξε. Πα�?ακαλώ αγο�?άστε το ExtraWatch");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Η αδεια ενε�?γοποιηθικε με επιτιχια.Ευχα�?ιστουμε");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Σφάλμα: Το κλειδί αδείας και το domain δεν ται�?ιάζουν.</b><br/>Εχετε δώσει το ίδιο όνομα domain κατά τη δω�?εά σας με το πα�?ακάτω? Πα�?ακαλώ επικοινωνήστε με: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Εάν βλέπετε το πα�?απάνω μήνυμα για α�?κετή ώ�?α, ή �?�?θμιση ιστοσελίδας ίσως είναι λανθασμένη.
                    Ανοίξτε το components/com_extrawatch/config.php
                    αφαι�?έστε το σχόλιο και ο�?ίστε την ιστοσελίδα. Π.χ.:
                    define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Π�?οσοχή: Η Ιστοσελίδα στον πλοηγό σας και στις �?υθμίσεις: %s και %s δεν ται�?ιάζουν.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Ο�?ίστε ιστοσελίδα σε: %s και συνεχίστε...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Αφαί�?εση Δεσμο�? επιστ�?οφής");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Βάση Γνώσεων");
DEFINE('_EW_ADMINHEADER_FLOW', "Ροή");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Γ�?αφήματα");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Εφα�?μογές");
DEFINE('_EW_ADMINHEADER_REVIEW', "Κ�?ιτική");
DEFINE('_EW_ADMINHEADER_WRITE', "Γ�?αψτε ένα ");

DEFINE('_EW_FLOW_TRAFFIC', "Ροή κίνησης");
DEFINE('_EW_FLOW_SELECT_PAGE', "Επιλογή σελίδας:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Μέτ�?ηση δεσμών εξόδου:");
DEFINE('_EW_FLOW_NESTING', "επίπεδο ομάδας :");
DEFINE('_EW_FLOW_SCALE', "Κλίμακα:");

DEFINE('_EW_COMERCIAL_AD_FREE', "Εκδοση χω�?ίς διαφημίσεις");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Ευχα�?ιστο�?με πολ�? για τη δω�?εά σας!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Το κλειδί Εγγ�?αφής για το domain %s είναι: ");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Τώ�?α μπο�?είτε να αφαι�?έσετε τον δεσμό ή να κ�?�?ψετε το εικονίδιο  ExtraWatch στην ιστοσελιδα από τις �?υθμίσεις ");


DEFINE('_EW_SIZES_LAST_CHECK', "Ο τελευταίος έλεγχος έγινε την:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "BLUE = Το μέγεθος του ενθέματος/εφα�?μογής στον φάκελο /administrator ");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Εφα�?μογή");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Σ�?νολο:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Μέγεθος");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Ανανέωση όλων");

DEFINE('_EW_SIZEDATABASE_TABLE', "Πίνακας");
DEFINE('_EW_SIZEDATABASE_SIZE', "Μέγεθος");
DEFINE('_EW_SIZEDATABASE_1DAY', "Αλλαγή 1-ήμε�?η");
DEFINE('_EW_SIZEDATABASE_7DAY', "Αλλαγή 7-ήμε�?η");
DEFINE('_EW_SIZEDATABASE_28DAY', "Αλλαγή 30-ημε�?ών");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "χω�?ίς δεδομένα");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Σ�?νολο:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Ανανέωση όλων ");
DEFINE('_EW_SIZEMODULES_TOTAL', "Σ�?νολο:");
DEFINE('_EW_SIZEMODULES_MODULE', "Ενθεμα");
DEFINE('_EW_SIZEMODULES_SIZE', "Μέγεθος");

DEFINE('_EW_SIZES_FILES', "Α�?χεία &amp; Κατάλογοι");
DEFINE('_EW_SIZES_BYTES', "bytes");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Ανανέωση");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2013 από τον CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Τελευταία επίσκεψη κλειδιο�? χά�?του ipinfodb.com από: <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Αντιστάθμιση Χ�?ονικής ζώνης");


/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_MENU_UPDATE', "Ενημέ�?ωση");
DEFINE('_EW_MENU_UPDATE_TITLE', "Εφεδ�?ια & Αναβάθμιση");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Δεν διατίθεται στη δω�?εάν έκδοση, ελέγξτε την κα�?τέλα άδειας");
DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Ανεπιθιμιτες λεξεις Ενε�?γοποιηση αποκλισμου");
DEFINE('_EW_SPAMWORD_LIST', "Λιστα ανεπιθιματον λεξεων");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Απόκ�?υψη Επαναληψης Τίτλου");
DEFINE('_EW_TRUNCATE_VISITS', "Πε�?ικοπή Επισκεπσεων");
DEFINE('_EW_TRUNCATE_STATS', "Πε�?ικοπή στατιστικων");
DEFINE('_EW_TRUNCATE_GOALS', "Πε�?ικοπή Στοχων");
DEFINE('_EW_LIMIT_BOTS', "Πε�?ιο�?ιστε τα Bots");
DEFINE('_EW_LIMIT_VISITORS', "πε�?ιο�?ιστε τους επισκεπτες");
DEFINE('_EW_TOOLTIP_WIDTH', "Πυγενετε το ποντικι στο πλατος");
DEFINE('_EW_TOOLTIP_HEIGHT', "Πυγενετε το ποντικι στο υψος");
DEFINE('_EW_TOOLTIP_URL', "Πυγενετε το ποντικι στο συνδεσμος");
DEFINE('_EW_TOOLTIP_ONCLICK', "Πυγενετε το ποντικι στο μια φο�?α πατιμενο");
DEFINE('_EW_IP_STATS', "Στατιστικα IP");
DEFINE('_EW_IPINFODB_KEY', "Πλυ�?οφο�?ιες για DB κλειδη IP");
DEFINE('_EW_ONLY_LAST_URI', "Μονο το τελευταιο συνδεσμο ");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Αποκ�?υψη Λογοτυπου");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Μπ�?οστινο με�?ος μην ακολουθισετε");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Μπ�?οστινο με�?ος οχι συνδεσμοι");
DEFINE('_EW_FRONTEND_USER_LINK', "Μπ�?οστινο συνδεσμο χ�?ιστη");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Μπ�?οστινο με�?ος Χο�?ες στην α�?χη");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Μπ�?οστινο με�?ος ονοματα Χω�?ον");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Μπ�?οστινο με�?ος οι χω�?ες με καιφαλεα");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Μπ�?οστινο με�?ος οι σιμαιες τον χω�?ον μπ�?οστα ");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Μπ�?οστινο με�?ος Α�?ιθμος Χω�?ον");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Μπ�?οστινο με�?ος μεγιστες σι�?ες χω�?ον");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Μπ�?οστινο με�?ος μεγιστες σι�?ες χω�?ον");
DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Μπ�?οστινο με�?ος Επισκπτες συμε�?α ");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Μπ�?οστινο με�?ος Επισκεπτες χθες ");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "Μπ�?οστινο με�?ος Επισκεπτες αυτη την εβδομαδα ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "Μπ�?οστινο με�?ος Επισκεπτες την π�?οηγουμενη εβδομαδα ");

DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "Μπ�?οστινο με�?ος Επισκεπτες αυτο το μηνα ");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "Μπ�?οστινο με�?ος Επισκεπτες το π�?οιγουμενο μηνα");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Μπ�?οστινο με�?ος Αποκ�?ιψη συνολου επισκεπτων");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL	', "Μπ�?οστινο με�?ος Α�?χικο Συνολο");
DEFINE('_EW_HISTORY_MAX_VALUES', "Μεγιστες αξιες ιστο�?ικου");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Μεγιστες καταγ�?αφες ιστο�?ικου");
DEFINE('_EW_UPDATE_TIME_VISITS', "Ενημέ�?ωση Χ�?όνος Επισκέψεις ");
DEFINE('_EW_UPDATE_TIME_STATS', "Ενημέ�?ωση Χ�?όνος στατιστικον");
DEFINE('_EW_STATS_MAX_ROWS', "Μεγιστες σι�?ες στατιστικον");
DEFINE('_EW_STATS_IP_HITS', "Στατιστικα για IP κλικα�?ισμα");
DEFINE('_EW_MAXID_BOTS', "Μεγιστη ταυτοτητα Bots ");
DEFINE('_EW_MAXID_VISITORS', "Μεγιστη ταυτοτητα Επισκεπτων");
DEFINE('_EW_STATS_KEEP_DAYS', "καταγ�?αμενα στατιστηκα");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Κ�?υφή μνήμη Μπ�?οστα Χω�?ες ");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Κ�?υφή μνήμη Μπ�?οστα Επισκεπτες ");

DEFINE('_EW_UNINSTALL_KEEP_DATA	', "Απεγκατάσταση διατη�?ιση δεδομένων ");
DEFINE('_EW_IGNORE_IP', "Αγνοήστε το IP");
DEFINE('_EW_IGNORE_URI', "Αγνοήστε το συνδεσμο");
DEFINE('_EW_IGNORE_USER', "Αγνοήστε τον χ�?ιστη");
DEFINE('_EW_BLOCKING_MESSAGE', " Μήνυμα Αποκλεισμόυ");
DEFINE('_EW_SERVER_URI_KEY', "Κλειδη συνδεσμου του διακοσμιτη");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Μ�?οστα Συνολο α�?χικον επισκεπτον");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Καταγ�?αφες");
/***********EDITs*****************/
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', " Για να κάνετε τον αποκλισμο αποτελεσματικο, χ�?ιαζετε να διμοσιευσετε τον αντιπ�?οσοπο  ExtraWatch π�?ιν απο κανενα πε�?ιεχομενο η φο�?μες. Πχ. Στο α�?ιστε�?ο με�?ος τις ταμπλετας σας
                    <br/>
                    Πυγενετε σο διαχι�?ιση μοντελου -> ExtraWatch agent -> Διαλεξτε μια θεσι α�?ιστε�?α");
DEFINE('_EW_EMAIL_SEO_REPORTS', "Αναφο�?α SEO ");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "SEO �?υχτε�?ινες αναφο�?ες ενε�?γοποιημενο");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Δείτε demo εγκατάσταση");


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