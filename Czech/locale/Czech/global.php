<?php
/**
 * English Locale, pc-politika.cz/locale/English/global.php,02.05.2017, Kvido

 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale select2           refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale password_strength refer to path includes/dynamics/password/lang/{value}.js
 * @package locale/Czech
 */
setlocale(LC_TIME, "cz_CZ.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "CZ";
$locale['xml_lang'] = "cz";
$locael['short_lang_name'] = "cz"; //modific, 20.03.2017
$locale['tinymce'] = "cz";
$locale['select2'] = "cz";
$locale['phpmailer'] = "cz";
$locale['datepicker'] = "cz-gb";
$locale['datepicker_js'] = "M-DD-YYYY, H:mm:ss";
$locale['datepicker_php'] = "m-d-Y H:i:s";
$locale['password_strength'] = "cz";
// Celé & krátké měsíce
$locale['months'] = "&nbsp|Leden|Únor|Březen|Duben|Květen|Červen|Červenec|Srpen|Září|Říjen|Listopad|Prosinec";
$locale['shortmonths'] = "&nbsp|Leden|Únor|Březen|Duben|Květ|Červ|Červe|Srp|Zář|Říj|List|Pros";
$locale['weekdays'] = "Neděle|Pondělí|Úterý|Středa|Čtvrtek|Pátek|Sobota";
// Časovač
$locale['year'] = "rok";
$locale['year_a'] = "roků";
$locale['month'] = "měsíc";
$locale['month_a'] = "měsíců";
$locale['day'] = "den";
$locale['day_a'] = "dnů";
$locale['hour'] = "hodina";
$locale['hour_a'] = "hodin";
$locale['minute'] = "minuta";
$locale['minute_a'] = "minut";
$locale['second'] = "sekunda";
$locale['second_a'] = "sekund";
$locale['just_now'] = "pravě teď";
$locale['ago'] = "před";
// Region
$locale['street1'] = "Ulice 1";
$locale['street2'] = "Ulice 2";
$locale['city'] = "Město";
$locale['postcode'] = "PSČ";
$locale['sel_country'] = "Vyberte zemi";
$locale['sel_state'] = "Vyberte stát";
$locale['sel_user'] = "Prosím, zadejte uživatelské jméno";
$locale['add_language'] = "Přidat jazyk překladu";
$locale['add_lang'] = "Přidat jazyk %s";
$locale['other_states'] = "Ostatní státy";
// Jméno
$locale['name'] = "Celé jméno";
$locale['username_pretext'] = "Vaše veřejné uživatelské jméno je stejné jako jméno uživatelského profilu, nachází se na adrese: %s %s";
$locale['first_name'] = "Křestní jméno ";
$locale['middle_name'] = "Druhé jméno ";
$locale['last_name'] = "Příjmení ";
// Dokumenty
$locale['doc_type'] = "Typ dokumentu";
$locale['doc_series'] = "Seriové číslo";
$locale['doc_number'] = "Číslo";
$locale['doc_authority'] = "Úřad";
$locale['doc_date_issue'] = "Datum vydání";
$locale['doc_date_expire'] = "Datum ukončení platnosti";
// Standardní uživatelské levely
$locale['user0'] = "Veřejnost";
$locale['user1'] = "Člen";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavní Administrátor";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Host";
$locale['user_anonymous'] = "Anonymní uživatel";
$locale['genitive'] = "%s's %s";
// Standadní uživatelské nastavení
$locale['status0'] = "Aktivní";
$locale['status1'] = "Zabanovaný";
$locale['status2'] = "Neaktivovaný";
$locale['status3'] = "Suspendovaný";
$locale['status4'] = "Bezpečnostně zabanovaný";
$locale['status5'] = "Zrušený";
$locale['status6'] = "Anonymní";
$locale['status7'] = "Deaktivovaný";
$locale['status8'] = "Neaktivní";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigace
$locale['global_001'] = "Navigace";
$locale['global_002'] = "Žádné odkazy nebyly definovány";
$locale['global_003'] = "Nothing to preview";
// Users Online
$locale['global_010'] = "Uživatelé on-line";
$locale['global_011'] = "Hosté on-line";
$locale['global_012'] = "Členové on-line";
$locale['global_013'] = "Žádný člen není on-line";
$locale['global_014'] = "Registrovaní členové";
$locale['global_015'] = "Neaktivní členové";
$locale['global_016'] = "Nejnovější člen";
$locale['global_017'] = "Přepnout Navigaci";
// Forum Boční panel
$locale['global_020'] = "Diskuze fóra";
$locale['global_021'] = "Nejnovější diskuze";
$locale['global_022'] = "Nejdiskutovanější";
$locale['global_023'] = "Žádná diskuze";
$locale['global_024'] = "Moje diskuze";
$locale['global_027'] = "Nezodpovězená vlákna";
$locale['global_028'] = "Nevyřešené otázky";
// Komentáře Boční panel
$locale['global_025'] = "Komentáře";
$locale['global_026'] = "Žádné komentáře nejsou k dispozici";
// Články Boční panel
$locale['global_030'] = "Komentáře ";
$locale['global_031'] = "Zatím nejsou žádné články";
// Downloady Boční panel
$locale['global_032'] = "Nejnovější Stahuj";
$locale['global_033'] = "Žádný stažitelný obsah není k dispozici";
// Uvítací panel
$locale['global_035'] = "Vítejte";
// Nejnovější panel Aktivní fórum
$locale['global_040'] = "Poslední aktivní diskuze fóra";
$locale['global_041'] = "Moje diskuze";
$locale['global_042'] = "Moje příspěvky";
$locale['global_043'] = "Nové příspěvky";
$locale['global_044'] = "Diskuze";
$locale['global_045'] = "Zhlédnutí";
$locale['global_046'] = "Odpovězeno";
$locale['global_047'] = "Poslední příspěvek";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Přidané";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Přesunul/a";
$locale['global_053'] = "Nezaložili jste zatím žádnou diskuzi.";
$locale['global_054'] = "Zatím jste do fóra nepřispěli žádným příspěvkem.";
$locale['global_055'] = "Od vaší poslední návštěvy bylo napsáno %u nových příspěvků.";
$locale['global_056'] = "Moje sledované diskuze";
$locale['global_057'] = "Nastavení";
$locale['global_058'] = "Zastavit";
$locale['global_059'] = "Nesledujete žádnou diskuzi.";
$locale['global_060'] = "Zastavit sledování diskuzí?";
// Blog, News & Articles
$locale['global_070'] = "Přidal/a ";
$locale['global_070b'] = "Zobrazit všechny Příspěvek od %s";
$locale['global_071'] = "na ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Přečíst vše";
$locale['global_073'] = " Komentářů";
$locale['global_073b'] = " Komentářů";
$locale['global_074'] = "x Přečteno";
$locale['global_074b'] = " Číst více";
$locale['global_075'] = "Tisk";
$locale['print'] = 'Tisk';
$locale['global_076'] = "Upravit";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "Nebyly napsané žádné Technologie";
$locale['global_079'] = " Kategorie ";
$locale['global_080'] = "Žádné kategorii";
$locale['global_081'] = "Technologie stránka";
$locale['global_082'] = "Technologie";
$locale['global_083'] = "Aktualizováno";
$locale['global_084'] = "Novinky - kategoprie";
$locale['global_085'] = "Všechny ostatní kategorie";
$locale['global_086'] = "Nejnovější Novinky";
$locale['global_087'] = "Nejvíce komentované Novinky";
$locale['global_088'] = "Nejvyšší hodnocení Novinek";
$locale['global_089'] = "Buďte první, kdo přidá komentář k% ";
$locale['global_089a'] = "Buďte první hodnotící o tomto% s";
$locale['global_089b'] = "Náhled";
$locale['global_089c'] = "Zobrazení seznamu";
// Navigace stránky
$locale['global_090'] = "Zpět";
$locale['global_091'] = "Další";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
$locale['global_094'] = " mimo ";
// Host uživatelské menu
$locale['global_100'] = "Přihlášení";
$locale['global_101'] = "Jméno";
$locale['global_101a'] = "Zadejte uživatelské jméno";
$locale['global_101b'] = "Zadejte váš E-mail";
$locale['global_101c'] = "Zadejte E-mail nebo uživ.jméno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Zapamatovat";
$locale['global_104'] = "Přihlásit";
$locale['global_105'] = "Nejste dosud členem? [LINK]Klikněte zde[/LINK] pro regisraci";
$locale['global_106'] = "[LINK]Zapomněli jste heslo?[/LINK]";
$locale['global_107'] = "Registrace";
$locale['global_108'] = "Zapomenuté heslo";
$locale['global_109'] = "Sign Up";
// Člen uživatelské menu
$locale['global_120'] = "Upravit profil";
$locale['global_121'] = "Soukromé zprávy";
$locale['global_122'] = "Seznam členů";
$locale['global_123'] = "Administrace";
$locale['global_124'] = "Odhlásit";
$locale['global_125'] = "Máte %u nové ";
$locale['global_126'] = "zprávu";
$locale['global_127'] = "zprávy";
$locale['global_128'] = "podání";
$locale['global_129'] = "podání";
// Uživatel menu
$locale['UM060'] = "Přihlásit se";
$locale['UM061'] = "Uživatelské jméno";
$locale['UM061a'] = "Email";
$locale['UM061b'] = "Uživatelské jméno nebo e-mail";
$locale['UM062'] = "Heslo";
$locale['UM063'] = "Zapamatovat si mě";
$locale['UM064'] = "Přihlášení";
$locale['UM065'] = "Nejste dosud členem? [LINK]Klikněte zde[/LINK] pro registraci";
$locale['UM066'] = "Zapomněli jste heslo?\n[LINK]Klik pro zaslání nového[/LINK].";
$locale['UM067'] = "(nedoporučuje se na veřejném nebo sdíleném počítači)";
$locale['UM080'] = "Upravit profil";
$locale['UM081'] = "Soukromé zprávy";
$locale['UM082'] = "Členové - seznam";
$locale['UM083'] = "Admin Panel";
$locale['UM084'] = "Odejít";
$locale['UM085'] = "Máte %u nové ";
$locale['UM086'] = "Zpráva";
$locale['UM087'] = "Zprávy";
$locale['UM088'] = "Sledovaná vlákna";
// Podání (news, link, article, blog)
$locale['UM089'] = "Podání";
$locale['UM090'] = "Přidat Technologie";
$locale['UM091'] = "Přidat Odkaz";
$locale['UM092'] = "Přidat Publicistika";
$locale['UM093'] = "Přidat foto";
$locale['UM094'] = "Přidat ke stažení";
$locale['UM095'] = "Přidat Blog";
// Uživatel Panel
$locale['UM096'] = "Vítejte: ";
$locale['UM097'] = "Osobní menu";
$locale['UM101'] = "Přepnout jazyk";
// Host
$locale['UM098'] = "Soukromé zprávy přijaté:";
$locale['UM099'] = "Soukromé zprávy odeslané:";
$locale['UM100'] = "Soukromé zprávy archiv:";
// Meta tagy
$locale['tags'] = "Štítky";
// Captcha
$locale['global_150'] = "Validační kód";
$locale['global_151'] = "Vložte validační kód:";
// Podval, tiráž počítadlo návštěv
$locale['global_170'] = "návštěv";
$locale['global_171'] = "návštěv";
$locale['global_172'] = "Vygenerované za: %s sekund";
$locale['global_173'] = "Dotazů";
$locale['global_174'] = "Používané paměti";
$locale['global_175'] = "Průměrná: %s vteřin";
$locale['global_176'] = "Zásady ochrany osobních údajů";
// Admin Navigace
$locale['global_180'] = "Admin stránka";
$locale['global_181'] = "Zpět na stránku";
$locale['global_182'] = "Poznámka: Admin heslo nebylo zadané, nebo je chybné.";
// Různé úpravy
$locale['global_190'] = "Mód údržby byl aktivován";
$locale['global_191'] = "Z této IP adresy nemáte povolen přístup na tuto stránku.";
$locale['global_192'] = "Vaše cookie vypršela. Pro pokračování se musíte přihlásit.  ";
$locale['global_193'] = "Nelze nastavit uživatelovo cookie. Prosím ujistěte se, že máte zapnutou podporu cookie aby jste se mohl(a) přihlásit.";
$locale['global_194'] = "Váš účet je zablokován.";
$locale['global_195'] = "Tento účet nebyl aktivován.";
$locale['global_196'] = "Nesprávné jméno nebo heslo.";
$locale['global_197'] = "Počkejte prosím, než vás přsměrujeme...\n\n[ [LINK] Nebo klikněte zde, pokud nechcete čekat[/LINK] ]";
$locale['global_198'] = "VAROVÁNÍ: ZJIŠTĚN INSTALATOR! Vymažte adresář install okamžitě!";
$locale['global_199'] = "UPOZORNĚNÍ: Není nastaveno Admin heslo. Klikněte na [LINK]Edit Profile[/LINK] a nastavte ho!";
//Titulní
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Hledat";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Fórum";
//Vzhled - themes
$locale['global_210'] = "Vynechat obsah";
$locale['global_300'] = "Vzhled nenalezen";
$locale['global_301'] = "Je nám líto, ale tuto stránku nelze zobrazit. Vzhledem k některým okolnostem nelze nalézt téma webu.
  Pokud jste správcem webu, použijte prosím FTP klienta pro nahrání libovolného motivu určeného pro PHP-Fusion 9 do složky témat.
  Po nahrání zkontrolujte nastavení tématu a zjistěte, zda je vybrané téma správně nahráno do vašeho adresáře témat.
  Vezměte prosím na vědomí, že nahraná složka témat musí mít přesně stejný název (včetně znakového případu, který je důležitý na serverech se systémem Unix)
  Jak je vybráno na stránce Nastavení témat.\n\nPokud jste řádným členem této stránky, obraťte se na správce webu prostřednictvím e-mailu [SITE_EMAIL] a nahláste tento problém.";
$locale['global_302'] = "Vzhled, který jste nastavili v Hlavním nastavení neexistuje nebo není kompletní!";
// JavaScript není zapnutý!
$locale['global_303'] = "Ale ne! Kde je JavaScript?\nVáš prohlížeč nemá zaplý JavaScript nebo jej nepodporuje. 
Prosím zapnět JavaScript ve Vašem prohlížeči ke správnému zobrazení této stránky, nebo přejděte k prohlížeči, který podporuje JavaScript";
// Uživatel správa  
$locale['global_400'] = "Pozastaven";
$locale['global_401'] = "Zablokován";
$locale['global_402'] = "Deaktivován";
$locale['global_403'] = "Účet smazán";
$locale['global_404'] = "Anonymní účet";
$locale['global_405'] = "Anonymní uživatel";
$locale['global_406'] = "Tento účet byl zabanován z následujících důvodů:";
$locale['global_407'] = "Tento účet byl pozastaven do ";
$locale['global_408'] = " pro následující důvody:";
$locale['global_409'] = "Tento účet byl zabanován z bezpečnostních důvodů.";
$locale['global_410'] = "Důvodem pro to je: ";
$locale['global_411'] = "Tento účet byl zrušen.";
$locale['global_412'] = "Tento účet byl deaktivován z důvodu neaktivity.";
// Blokace/Zákaz kvůli SPAMu
$locale['global_440'] = "Automatická blokace/ban kvůli spamování";
$locale['global_441'] = "Váš účet na [SITENAME] byl zablokován";
$locale['global_442'] = "Vítejte [USER_NAME],\n
Váš účet na [SITENAME] byl evidován při zadávaní příliš mnoho požadavků ve velice krátkém čase z IP adresy[USER_IP], a proto byl zablokován. Toto se dělá z prevence před boty.\n
Prosím kontaktujte hlavního administrátora na emailu [SITE_EMAIL] pro odblokování vašeho účtu nebo nahlášení, že je to nedorozumění.\n\n
S pozdravem,\n[SITEUSERNAME]";
// Ověření účtu
$locale['global_450'] = "Pozastavení automaticky deaktivuje systém";
$locale['global_451'] = "Váš účet byl deaktivován na [SITENAME]";
$locale['global_452'] = "Vítejte USER_NAME,\n
Blokace vašeho účtu na [SITEURL] byla zrušena. Zde jsou Vaše přihlašovací údaje:\n
Přihlašovací jméno: USER_NAME\n
Heslo: Skryto z bezpečnostních důvodů.\n
Pokud jste zapomněli Vaše heslo, můžete získat nové zde: LOST_PASSWORD\n\n
S pozdravem,\n[SITEUSERNAME]";
$locale['global_453'] = "Vítejte USER_NAME,\nBlokace Vašeho účtu na [SITEURL] byla zrušena.\n\n
S pozdravem,\n[SITEUSERNAME]";
$locale['global_454'] = "Účet byl znovu aktivován na [SITENAME]";
$locale['global_455'] = "Vítejte USER_NAME,\n
Naposled kdy jste se přihlásili na vašem účtu, byl reaktivován na [SITEURL], nyní je váš účet již označen jako neaktivní.\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['global_456'] = "Nové oznámení hesla pro [SITENAME]";
$locale['global_457'] = "Ahoj USER_NAME,
\n\nNové heslo bylo nastaveno pro váš účet na [SITENAME]. Prosím, vyberte nové přihlašovací údaje:\n\n
Uživatelské jméno: USER_NAME\nHeslo: [PASSWORD]\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['global_458'] = "Nové heslo bylo nastaveno pro USER_NAME";
$locale['global_459'] = "Nové heslo bylo nastaveno pro USER_NAME, avšak e-mail nebyl odeslán. Ujistěte se, prosím, že jset sdělili uživateli nové detaily.";
// Funkce nastavení velikosti parsebytesize()
$locale['global_460'] = "Prázdné";
$locale['global_461'] = "Byty";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Bezpečné přesměrování
$locale['global_500'] = "Budete přesměrováni na %s, čekejte prosím. Pokud ne, klikněte zde.";
// Captcha Locales
$locale['global_600'] = "Validační kód";
$locale['global_601'] = "Musíte zadat správný ověřovací kód";
$locale['recaptcha'] = "cz";
// Odkazy na stránky
$locale['global_700'] = "Zobrazit více";
//Miscellaneous
$locale['global_900'] = "Nelze převést z HEX do DEC";
$locale['global_901'] = "Insert Media";
//Language Selection
$locale['global_ML100'] = "Jazyk:";
$locale['global_ML101'] = "- Výběr jazyka -";
$locale['global_ML102'] = "Jazyk stránek";
$locale['global_ML103'] = "Switch Language";
// Flood Control
$locale['flood'] = "Ty jsou blokována, abyste mohl psát. Prosím, vyčkejte %s.";
$locale['no_image'] = "Žádné obrázky";
$locale['send_message'] = "Poslat zprávu";
$locale['go_profile'] = "Přejít na %s profil webu";

// Globální hlavní slova
$locale['hello'] = "Ahoj!";
$locale['goodbye'] = "Sbohem!";
$locale['welcome'] = "Vítejte zpět";
$locale['home'] = "Domů";
// Stav
$locale['error'] = "Chyba!";
$locale['success'] = "Úspěch!";
$locale['enable'] = "Zapnuto";
$locale['disable'] = "Vypnuto";
$locale['can'] = "umí";
$locale['cannot'] = "nemůže";
$locale['no'] = "Ne";
$locale['yes'] = "Ano";
$locale['off'] = "Off";
$locale['on'] = "na";
$locale['or'] = "nebo";
$locale['by'] = "od";
$locale['in'] = "Kategorie";
$locale['of'] = "of";
$locale['and'] = "a";
$locale['na'] = "Není dostupný";
$locale['joined'] = "Založen od: ";
// Navigace
$locale['next'] = "Další";
$locale['pevious'] = "Předchozí";
$locale['back'] = "Zpět";
$locale['forward'] = "Vpřed";
$locale['go'] = "Pokračovat";
$locale['cancel'] = "Přerušit";
$locale['clear'] = "Vymazat";
$locale['move'] = "Přemístir";
$locale['move_up'] = "Přesunout nahoru";
$locale['move_down'] = "Přesunout dolů";
$locale['load_more'] = "Načíst další položky";
$locale['load_end'] = "Načíst od začátku";
// Akce
$locale['add'] = "Přidat";
$locale['save'] = "Uložit";
$locale['save_changes'] = "Uložit Změny";
$locale['save_and_close'] = "Save and Close";
$locale['confirm'] = "Potvrdit";
$locale['update'] = "Aktualizace";
$locale['updated'] = "Aktualizováno";
$locale['remove'] = "Odstranit";
$locale['delete'] = "Vymazat";
$locale['search'] = "Hledat";
$locale['help'] = "Nápověda";
$locale['register'] = "Registrace";
$locale['ban'] = "Zákaz";
$locale['reactivate'] = "Znovu aktivovat";
$locale['user'] = "Uživatel";
$locale['promote'] = "Podporovat";
$locale['show'] = "Ukázat";
$locale['actions'] = "Akce";
$locale['language'] = "Jazyk";
// Osoby a identifikátory
$locale['you'] = "Vy";
$locale['me'] = "Mě";
$locale['they'] = "Oni";
$locale['we'] = "My";
$locale['us'] = "Nás";
$locale['he'] = "On";
$locale['she'] = "Ona";
$locale['it'] = "To";
//Tables
$locale['order'] = "Jiné";
$locale['sort'] = "Třídit";
$locale['id'] = "ID";
$locale['title'] = "Titulek";
$locale['rights'] = "Práva";
$locale['info'] = "Informace";
$locale['image'] = "Obrázek";
// Formuláře
$locale['choose'] = "Vyberte prosím jednu...";
$locale['no_opts'] = "Není vybrán";
$locale['root'] = "Hlavní";
$locale['choose-user'] = "Prosím, vyberte uživatele...";
$locale['choose-location'] = "Prosím, zvolte umístění";
$locale['parent'] = "Vytvořit jako Hlavní";
$locale['order'] = "Řazení";
$locale['status'] = "Status vizitka";
$locale['note'] = "Poznamenejte si tuto položku";
$locale['publish'] = "Publikovat";
$locale['unpublish'] = "Zrušit publikování";
$locale['sticky'] = "Důležitý";
$locale['unsticky'] = "Zrušit důležitost";
$locale['draft'] = "Předloha";
$locale['settings'] = "Nastavení";
$locale['posted'] = "Zveřejněn";
$locale['profile'] = "Profil";
$locale['edit'] = "Upravit";
$locale['qedit'] = "Rychlá úprava";
$locale['view'] = "Ukázat";
$locale['login'] = "Přihlásit";
$locale['logout'] = "Odejít";
$locale['admin-logout'] = "Admin odhlášení";
$locale['message'] = "Soukromé zprávy";
$locale['logged'] = "Přihlášen jako ";
$locale['version'] = "Verze ";
$locale['browse'] = "Procházet disk";
$locale['close'] = "Přerušit";
$locale['nopreview'] = "Neexistuje žádný náhled";
$locale['mark_as'] = "Označit jako";
$locale['preview'] = "Náhled";
$locale['custom'] = "Vlastní";
$locale['submit'] = "Předložit";
// Zarovnání
$locale['left'] = "Vlevo";
$locale['center'] = "Uprostřed";
$locale['right'] = "Vpravo";
// Komentáře a hodnocení
$locale['comments'] = "Komentáře";
$locale['ratings'] = "Hodnocení";
$locale['comments_ratings'] = "Komentáře a Hodnocení";
$locale['user_account'] = "Uživatelký účet";
$locale['about'] = "O nás: ";
// Uživatel, stav
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Slova pro formátování na jednotné číslo a plurálu. Počet formulářů je závislý na jazyce
$locale['fmt_submission'] = "podáni|podání";
$locale['fmt_article'] = "článek|článků";
$locale['fmt_blog'] = "blog|blogy";
$locale['fmt_comment'] = "komentář|komentářů";
$locale['fmt_vote'] = "hlasování|hlasování";
$locale['fmt_rating'] = "hodnocen|hodnocení";
$locale['fmt_day'] = "den|dny";
$locale['fmt_download'] = "download|downloady";
$locale['fmt_follower'] = "diskutující|diskutujících";
$locale['fmt_forum'] = "diskuze|diskuzí";
$locale['fmt_guest'] = "host|hostů";
$locale['fmt_hour'] = "hodina|hodin";
$locale['fmt_item'] = "položka|položek";
$locale['fmt_member'] = "člen|členů";
$locale['fmt_message'] = "zpráva|zpráv";
$locale['fmt_minute'] = "minuta|minut";
$locale['fmt_month'] = "měsíc|měsíců";
$locale['fmt_news'] = "Novinka|Novinek";
$locale['fmt_photo'] = "obrázek|obrázky";
$locale['fmt_post'] = "zveřejnění|zveřejnění";
$locale['fmt_question'] = "otázka|otázek";
$locale['fmt_read'] = "čteno|čtení";
$locale['fmt_second'] = "sekunda|sekund";
$locale['fmt_shouts'] = "vzkaz|vzkazů";
$locale['fmt_thread'] = "vlákno|vláken";
$locale['fmt_user'] = "uživatel|užvatelů";
$locale['fmt_views'] = "view|views";
$locale['fmt_weblink'] = "odkaz|odkazů";
$locale['fmt_week'] = "týden|týdnů";
$locale['fmt_year'] = "rok|roků";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "group|groups";
$locale['fmt_category'] = "category|categories";
// include Defender locales
include __DIR__."/defender.php";
