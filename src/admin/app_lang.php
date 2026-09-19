<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componente';
$lang['admin_content'] = 'Conținut';
$lang['admin_database_backup'] = 'Copii de rezervă baze de date';
$lang['admin_extensions'] = 'Extensii';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Ajutor';
$lang['admin_languages'] = 'Limbi';
$lang['admin_logs'] = 'Jurnale sistem';
$lang['admin_media'] = 'Bibliotecă media';
$lang['admin_modules'] = 'Module';
$lang['admin_plugins'] = 'Plugin-uri';
$lang['admin_reports'] = 'Jurnal activități';
$lang['admin_settings'] = 'Setări sistem';
$lang['admin_sysinfo'] = 'Informații sistem';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Firewall de sistem';
$lang['admin_themes'] = 'Teme';
$lang['admin_updates'] = 'Actualizări sistem';
$lang['admin_users'] = 'Utilizatori';
$lang['admin_view_site'] = 'Vizualizare site';
$lang['per_page'] = 'Pe Pagină';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Vă mulțumim pentru că ați creat cu <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Niciun element activ.} other{<b>#</b> din <b>%s</b> elemente sunt active.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instalare';
$lang['admin_install_error'] = 'Instalarea pachetului a eșuat.';
$lang['admin_install_error_com'] = 'Instalarea a eșuat: %s';
$lang['admin_install_location_app'] = 'Doar această aplicație';
$lang['admin_install_location_core'] = 'Toate aplicațiile';
$lang['admin_install_location_select'] = '&#151; Selectați locația &#151;';
$lang['admin_install_success'] = 'Pachet instalat cu succes.';
$lang['admin_install_upload'] = 'Încărcare';
$lang['admin_install_upload_error'] = 'Încărcarea pachetului a eșuat.';
$lang['admin_install_upload_success'] = 'Pachet încărcat cu succes.';
$lang['admin_install_upload_tip'] = 'Instalați un pachet încărcând aici fișierul său <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Imposibil de curățat fișierele vechi de copie de rezervă.';
$lang['admin_database_backup_clean_success'] = '%d fișiere de copie de rezervă șterse. %d spațiu pe disc eliberat.';
$lang['admin_database_backup_create'] = 'Creare copie de rezervă';
$lang['admin_database_backup_create_confirm'] = 'Sunteți sigur că doriți să creați o copie de rezervă acum?';
$lang['admin_database_backup_create_error'] = 'Imposibil de creat fișierul de copie de rezervă. Asigurați-vă că folderul <b>%s</b> are permisiuni de scriere.';
$lang['admin_database_backup_create_success'] = 'Fișierul de copie de rezervă a bazei de date <b>%s</b> a fost creat cu succes.';
$lang['admin_database_backup_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți aceste fișiere de copie de rezervă?';
$lang['admin_database_backup_delete_error'] = 'Imposibil de șters fișierele de copie de rezervă selectate.';
$lang['admin_database_backup_delete_success'] = 'Fișierele de copie de rezervă au fost șterse cu succes.';
$lang['admin_database_backup_download_error'] = 'Imposibil de descărcat fișierul de copie de rezervă selectat.';
$lang['admin_database_backup_download_success'] = 'Fișierul de copie de rezervă a fost descărcat cu succes.';
$lang['admin_database_backup_lock_confirm'] = 'Sunteți sigur că doriți să blocați aceste fișiere de copie de rezervă?';
$lang['admin_database_backup_lock_error'] = 'Imposibil de blocat fișierele de copie de rezervă selectate.';
$lang['admin_database_backup_lock_success'] = 'Fișierele de copie de rezervă au fost blocate cu succes.';
$lang['admin_database_backup_locked_error'] = 'Imposibil de șters fișierele de copie de rezervă blocate.';
$lang['admin_database_backup_missing_error'] = 'Fișierul de copie de rezervă nu a putut fi găsit.';
$lang['admin_database_backup_unlock_confirm'] = 'Sunteți sigur că doriți să deblocați aceste fișiere de copie de rezervă?';
$lang['admin_database_backup_unlock_error'] = 'Imposibil de deblocat fișierele de copie de rezervă selectate.';
$lang['admin_database_backup_unlock_success'] = 'Fișierele de copie de rezervă au fost deblocate cu succes.';
$lang['admin_database_prune'] = 'Curățare';
$lang['admin_database_prune_confirm'] = 'Sunteți sigur că doriți să curățați baza de date? O copie de rezervă va fi creată înainte de execuție.';
$lang['admin_database_prune_error'] = 'Imposibil de curățat baza de date.';
$lang['admin_database_prune_next'] = 'Următoarea curățare: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Baza de date a fost curățată cu succes.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Ștergere jurnale';
$lang['admin_logs_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți fișierele de jurnal selectate?';
$lang['admin_logs_delete_error'] = 'Imposibil de șters fișierele de jurnal.';
$lang['admin_logs_delete_success'] = 'Fișierele de jurnal au fost șterse cu succes.';
$lang['admin_logs_error_disabled'] = 'Înregistrarea jurnalelor nu este activată în prezent.';
$lang['admin_logs_error_empty'] = 'Nu s-au găsit jurnale.';
$lang['admin_logs_error_missing'] = 'Fișierul de jurnal nu a putut fi localizat sau era gol.';
$lang['admin_logs_tip'] = 'Înregistrarea jurnalelor poate crea rapid fișiere foarte mari. Pentru site-urile active, luați în considerare ștergerea celor vechi.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți email-urile selectate?';
$lang['admin_emails_delete_error'] = 'Imposibil de șters email-urile selectate.';
$lang['admin_emails_delete_success'] = 'Email-urile selectate au fost șterse cu succes.';
$lang['admin_emails_email_from'] = 'Expeditor';
$lang['admin_emails_mail_queue'] = 'Coadă email-uri';
$lang['admin_emails_mailer'] = 'Email în masă';
$lang['admin_emails_search'] = 'Căutare e-mailuri după subiect sau conținut...';
$lang['admin_emails_send_error'] = 'Eșec la adăugarea email-ului în coadă. Vă rugăm încercați din nou.';
$lang['admin_emails_send_none'] = 'Niciun utilizator nu corespunde criteriilor selectate.';
$lang['admin_emails_send_success'] = 'Email-ul a fost adăugat în coadă și va fi trimis în curând.';
$lang['admin_emails_send_to_banned'] = 'Trimite către utilizatori banați.';
$lang['admin_emails_send_to_deleted'] = 'Trimite către utilizatori șterși.';
$lang['admin_emails_send_to_disabled'] = 'Trimite către utilizatori inactivi.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Adăugare Utilizator';
$lang['admin_users_all_users'] = 'Toți Utilizatorii';
$lang['admin_users_ban_confirm'] = 'Sunteți sigur că doriți să interziceți accesul utilizatorilor selectați?';
$lang['admin_users_ban_error'] = 'Nu s-a putut interzice accesul utilizatorilor selectați.';
$lang['admin_users_ban_success'] = 'Utilizatorii selectați au fost interziși cu succes.';
$lang['admin_users_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți utilizatorii selectați?';
$lang['admin_users_delete_error'] = 'Nu s-au putut șterge utilizatorii selectați.';
$lang['admin_users_delete_success'] = 'Utilizatorii selectați au fost șterși cu succes.';
$lang['admin_users_disable_confirm'] = 'Sunteți sigur că doriți să dezactivați utilizatorii selectați?';
$lang['admin_users_disable_error'] = 'Nu s-au putut dezactiva utilizatorii selectați.';
$lang['admin_users_disable_success'] = 'Utilizatorii selectați au fost dezactivați cu succes.';
$lang['admin_users_edit'] = 'Editare Utilizator';
$lang['admin_users_edit_error'] = 'Imposibil de actualizat utilizatorul.';
$lang['admin_users_edit_success'] = 'Utilizator actualizat cu succes.';
$lang['admin_users_enable_confirm'] = 'Sunteți sigur că doriți să activați utilizatorii selectați?';
$lang['admin_users_enable_error'] = 'Nu s-au putut activa utilizatorii selectați.';
$lang['admin_users_enable_success'] = 'Utilizatorii selectați au fost activați cu succes.';
$lang['admin_users_groups'] = 'Grupuri';
$lang['admin_users_lock_confirm'] = 'Sunteți sigur că doriți să blocați utilizatorii selectați?';
$lang['admin_users_lock_error'] = 'Imposibil de blocat utilizatorii selectați.';
$lang['admin_users_lock_success'] = 'Utilizatorii selectați au fost blocați cu succes.';
$lang['admin_users_logged'] = 'Utilizatori Autentificați';
$lang['admin_users_manage'] = 'Gestionare Utilizatori';
$lang['admin_users_remove_confirm'] = 'Sunteți sigur că doriți să ștergeți permanent utilizatorii selectați și toate datele lor?';
$lang['admin_users_remove_error'] = 'Nu s-au putut șterge permanent utilizatorii selectați și toate datele lor.';
$lang['admin_users_remove_success'] = 'Utilizatorii selectați și toate datele lor au fost șterși cu succes.';
$lang['admin_users_restore_confirm'] = 'Sunteți sigur că doriți să restaurați utilizatorii selectați?';
$lang['admin_users_restore_error'] = 'Nu s-au putut restaura utilizatorii selectați.';
$lang['admin_users_restore_success'] = 'Utilizatorii selectați au fost restaurați cu succes.';
$lang['admin_users_search'] = 'Căutare după nume, nume utilizator sau email...';
$lang['admin_users_unban_confirm'] = 'Sunteți sigur că doriți să ridicați interdicția utilizatorilor selectați?';
$lang['admin_users_unban_error'] = 'Nu s-a putut ridica interdicția utilizatorilor selectați.';
$lang['admin_users_unban_success'] = 'Interdicția utilizatorilor selectați a fost ridicată cu succes.';
$lang['admin_users_unlock_confirm'] = 'Sunteți sigur că doriți să deblocați utilizatorii selectați?';
$lang['admin_users_unlock_error'] = 'Imposibil de deblocat utilizatorii selectați.';
$lang['admin_users_unlock_success'] = 'Utilizatorii selectați au fost deblocați cu succes.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Ștergere Jurnale';
$lang['admin_reports_clear_confirm'] = 'Sunteți sigur că doriți să ștergeți jurnalul de acțiuni?';
$lang['admin_reports_clear_error'] = 'Imposibil de șters jurnalul de acțiuni.';
$lang['admin_reports_clear_success'] = 'Jurnalul de acțiuni a fost șters cu succes.';
$lang['admin_reports_latest_actions'] = 'Ultimele Acțiuni';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți fișierele selectate?';
$lang['admin_media_delete_error'] = 'Imposibil de șters fișierele.';
$lang['admin_media_delete_success'] = 'Fișiere șterse cu succes.';
$lang['admin_media_file_delete_error'] = 'Imposibil de șters fișierul.';
$lang['admin_media_file_delete_success'] = 'Fișier șters cu succes.';
$lang['admin_media_file_update_error'] = 'Imposibil de actualizat fișierul.';
$lang['admin_media_file_update_success'] = 'Fișier actualizat cu succes.';
$lang['admin_media_search'] = 'Căutare după nume, descriere sau nume fișier...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Niciun modul activ.} other{<b>#</b> din <b>%s</b> module sunt active.}';
$lang['admin_modules_add'] = 'Adăugare Modul';
$lang['admin_modules_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți modulul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Imposibil de șters modulul.';
$lang['admin_modules_delete_success'] = 'Modul șters cu succes.';
$lang['admin_modules_disable_all_confirm'] = 'Sunteți sigur că doriți să dezactivați toate modulele?';
$lang['admin_modules_disable_all_error'] = 'Imposibil de dezactivat toate modulele.';
$lang['admin_modules_disable_all_success'] = 'Toate modulele au fost dezactivate cu succes.';
$lang['admin_modules_disable_confirm'] = 'Sunteți sigur că doriți să dezactivați modulul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Imposibil de dezactivat modulul.';
$lang['admin_modules_disable_success'] = 'Modul dezactivat cu succes.';
$lang['admin_modules_enable_all_confirm'] = 'Sunteți sigur că doriți să activați toate modulele?';
$lang['admin_modules_enable_all_error'] = 'Imposibil de activat toate modulele.';
$lang['admin_modules_enable_all_success'] = 'Toate modulele au fost activate cu succes.';
$lang['admin_modules_enable_confirm'] = 'Sunteți sigur că doriți să activați modulul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Imposibil de activat modulul.';
$lang['admin_modules_enable_success'] = 'Modul activat cu succes.';
$lang['admin_modules_install_confirm'] = 'Sigur doriți să instalați acest modul?';
$lang['admin_modules_install_error'] = 'Instalarea modulului a eșuat.';
$lang['admin_modules_install_success'] = 'Modulul a fost instalat cu succes.';
$lang['admin_modules_install_tip'] = 'Modulele adaugă funcționalități noi site-ului dvs. Răsfoiți modulele disponibile în <a href="%s" target="_blank" rel="noopener">directorul de module</a> sau încărcați unul ca pachet <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Niciun plugin activ.} other{<b>#</b> din <b>%s</b> pluginuri sunt active.}';
$lang['admin_plugins_add'] = 'Adăugare Plugin';
$lang['admin_plugins_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți plugin-ul: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Imposibil de șters plugin-ul.';
$lang['admin_plugins_delete_success'] = 'Plugin șters cu succes.';
$lang['admin_plugins_disable_all_confirm'] = 'Sunteți sigur că doriți să dezactivați toate plugin-urile?';
$lang['admin_plugins_disable_all_error'] = 'Imposibil de dezactivat toate plugin-urile.';
$lang['admin_plugins_disable_all_success'] = 'Toate plugin-urile au fost dezactivate cu succes.';
$lang['admin_plugins_disable_confirm'] = 'Sunteți sigur că doriți să dezactivați plugin-ul: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Imposibil de dezactivat plugin-ul.';
$lang['admin_plugins_disable_success'] = 'Plugin dezactivat cu succes.';
$lang['admin_plugins_enable_all_confirm'] = 'Sunteți sigur că doriți să activați toate plugin-urile?';
$lang['admin_plugins_enable_all_error'] = 'Imposibil de activat toate plugin-urile.';
$lang['admin_plugins_enable_all_success'] = 'Toate plugin-urile au fost activate cu succes.';
$lang['admin_plugins_enable_confirm'] = 'Sunteți sigur că doriți să activați plugin-ul: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Imposibil de activat plugin-ul.';
$lang['admin_plugins_enable_success'] = 'Plugin activat cu succes.';
$lang['admin_plugins_install_confirm'] = 'Sigur doriți să instalați acest plugin?';
$lang['admin_plugins_install_error'] = 'Instalarea pluginului a eșuat.';
$lang['admin_plugins_install_success'] = 'Pluginul a fost instalat cu succes.';
$lang['admin_plugins_install_tip'] = 'Plugin-urile extind funcționalitățile existente cu opțiuni sau integrări suplimentare. Instalați din <a href="%s" target="_blank" rel="noopener">directorul de plugin-uri</a> sau încărcați un fișier <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Adăugare Temă';
$lang['admin_themes_delete_confirm'] = 'Sunteți sigur că doriți să ștergeți tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Imposibil de șters tema.';
$lang['admin_themes_delete_error_active'] = 'Nu puteți șterge tema activă curent.';
$lang['admin_themes_delete_success'] = 'Temă ștersă cu succes.';
$lang['admin_themes_disable_confirm'] = 'Sigur doriți să dezactivați tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Nu se poate dezactiva tema.';
$lang['admin_themes_disable_success'] = 'Tema a fost dezactivată cu succes.';
$lang['admin_themes_enable_confirm'] = 'Sunteți sigur că doriți să activați tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Imposibil de activat tema.';
$lang['admin_themes_enable_success'] = 'Temă activată cu succes.';
$lang['admin_themes_install_confirm'] = 'Sigur doriți să instalați această temă?';
$lang['admin_themes_install_error'] = 'Instalarea temei a eșuat.';
$lang['admin_themes_install_success'] = 'Tema a fost instalată cu succes.';
$lang['admin_themes_install_tip'] = 'Temele schimbă aspectul și layout-ul site-ului dvs. Alegeți din <a href="%s" target="_blank" rel="noopener">biblioteca de teme</a> sau încărcați un fișier <b>.zip</b> pentru a instala propria temă.';
$lang['admin_themes_none_tip'] = 'Această aplicație rulează fără o temă. Instalați una pentru a personaliza interfața publică.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Meniuri';
$lang['admin_menus_assign_error'] = 'Imposibil de actualizat locațiile meniurilor.';
$lang['admin_menus_assign_success'] = 'Locațiile meniurilor au fost actualizate cu succes.';
$lang['admin_menus_header'] = 'Sunt disponibile <b>%s</b> locații de meniu.';
$lang['admin_menus_location'] = 'Locație';
$lang['admin_menus_locations'] = 'Locații Meniuri';
$lang['admin_menus_manage'] = 'Gestionare Meniuri';
$lang['admin_menus_menu'] = 'Meniu Atribuit';
$lang['admin_menus_none'] = '&#151; Niciunul &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Adăugare limbă';
$lang['admin_languages_default_confirm'] = 'Sunteți sigur că doriți să faceți această limbă limba implicită a site-ului?';
$lang['admin_languages_default_error'] = 'Imposibil de schimbat limba implicită.';
$lang['admin_languages_default_error_nochange'] = 'Această limbă este deja cea implicită.';
$lang['admin_languages_default_success'] = 'Limba implicită a fost schimbată cu succes.';
$lang['admin_languages_disable_all_confirm'] = 'Sunteți sigur că doriți să dezactivați toate limbile?';
$lang['admin_languages_disable_all_error'] = 'Imposibil de dezactivat toate limbile.';
$lang['admin_languages_disable_all_success'] = 'Toate limbile au fost dezactivate cu succes.';
$lang['admin_languages_disable_confirm'] = 'Sunteți sigur că doriți să dezactivați limba: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Imposibil de dezactivat limba.';
$lang['admin_languages_disable_error_default'] = 'Limba implicită nu poate fi dezactivată.';
$lang['admin_languages_disable_error_nochange'] = 'Această limbă este deja dezactivată.';
$lang['admin_languages_disable_success'] = 'Limba a fost dezactivată cu succes.';
$lang['admin_languages_enable_all_confirm'] = 'Sunteți sigur că doriți să activați toate limbile?';
$lang['admin_languages_enable_all_error'] = 'Imposibil de activat toate limbile.';
$lang['admin_languages_enable_all_success'] = 'Toate limbile au fost activate cu succes.';
$lang['admin_languages_enable_confirm'] = 'Sunteți sigur că doriți să activați limba: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Imposibil de activat limba.';
$lang['admin_languages_enable_error_nochange'] = 'Această limbă este deja activată.';
$lang['admin_languages_enable_success'] = 'Limba a fost activată cu succes.';
$lang['admin_languages_install_confirm'] = 'Sigur doriți să instalați această limbă?';
$lang['admin_languages_install_error'] = 'Instalarea limbii a eșuat.';
$lang['admin_languages_install_success'] = 'Limba a fost instalată cu succes.';
$lang['admin_languages_install_tip'] = 'Limbile adaugă traduceri pentru interfața și conținutul site-ului dvs. Răsfoiți limbile disponibile în <a href="%s" target="_blank" rel="noopener">directorul de limbi</a> sau încărcați un pachet <b>.zip</b> pentru a instala propria limbă.';
$lang['admin_languages_tip'] = 'Activați, dezactivați și setați limba implicită a site-ului. Limbile activate sunt disponibile pentru vizitatorii site-ului.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Pachetul există deja.';
$lang['package_archive_download_failed'] = 'Descărcarea arhivei pachetului a eșuat.';
$lang['package_backup_create_error'] = 'Crearea backup-ului pachetului a eșuat.';
$lang['package_backup_dir_failed'] = 'Crearea directorului de backup %s a eșuat';
$lang['package_backup_missing'] = 'Fișierul de backup nu există.';
$lang['package_backup_path_error'] = 'Calea către fișierul de backup nu a putut fi soluționată.';
$lang['package_backup_request_invalid'] = 'Solicitare de backup nevalidă.';
$lang['package_backup_restore_error'] = 'Restaurarea backup-ului pachetului a eșuat.';
$lang['package_catalog_type_unknown'] = 'Tip de catalog necunoscut.';
$lang['package_checksum_error'] = 'Verificarea sumei de control (checksum) a pachetului a eșuat.';
$lang['package_copy_files_error'] = 'Copierea fișierelor pachetului la destinație a eșuat.';
$lang['package_copy_updates_error'] = 'Copierea fișierelor de actualizare la destinație a eșuat.';
$lang['package_dest_dir_failed'] = 'Crearea directorului de destinație %s a eșuat';
$lang['package_destination_error'] = 'Destinația pachetului nu a putut fi soluționată.';
$lang['package_download_dir_failed'] = 'Crearea directorului de descărcare %s a eșuat';
$lang['package_download_empty'] = 'Descărcarea pachetului a returnat un răspuns gol.';
$lang['package_download_request_invalid'] = 'Solicitare de descărcare a pachetului nevalidă.';
$lang['package_extract_failed'] = 'Extragerea arhivei ZIP %s a eșuat';
$lang['package_invalid_lang_files'] = 'Limbă nevalidă — fișierele de limbă obligatorii ale aplicației lipsesc.';
$lang['package_invalid_lang_structure'] = 'Limbă nevalidă — directoarele admin și/sau ci3 lipsesc.';
$lang['package_invalid_missing_info'] = '%s nevalid: lipsește „info.php”.';
$lang['package_invalid_module_structure'] = 'Modul nevalid — directoarele config și/sau controllers obligatorii lipsesc.';
$lang['package_invalid_plugin_boot'] = 'Plugin nevalid — lipsește "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Plugin nevalid — pluginurile nu pot conține controllere sau vizualizări (views).';
$lang['package_invalid_theme_boot'] = 'Temă nevalidă — lipsește "boot.php".';
$lang['package_invalid_theme_views'] = 'Temă nevalidă — directorul views lipsește.';
$lang['package_no_root_dir'] = 'Pachetul nu conține un director rădăcină (root).';
$lang['package_not_downloadable'] = 'Pachetul nu poate fi descărcat public.';
$lang['package_not_in_registry'] = 'Pachetul nu este disponibil în registrul public.';
$lang['package_request_invalid'] = 'Solicitare de pachet nevalidă.';
$lang['package_rollback_request_invalid'] = 'Solicitare de revenire (rollback) nevalidă.';
$lang['package_root_mismatch'] = 'Rădăcina arhivei pachetului nu corespunde cu %s';
$lang['package_single_root_required'] = 'Pachetul trebuie să conțină exact un director rădăcină.';
$lang['package_source_error'] = 'Sursa pachetului nu a putut fi soluționată.';
$lang['package_system_core_restricted'] = 'Componentele de sistem nu pot fi instalate ca pachete.';
$lang['package_temp_dir_failed'] = 'Crearea directorului temporar %s a eșuat';
$lang['package_type_unknown'] = 'Tip de pachet necunoscut.';
$lang['package_update_request_invalid'] = 'Solicitare de actualizare a pachetului nevalidă.';
$lang['package_update_root_mismatch'] = 'Rădăcina arhivei de actualizare nu corespunde cu %s.';
$lang['package_upload_dir_failed'] = 'Crearea directorului de încărcare %s a eșuat';
$lang['package_url_invalid'] = 'URL de distribuție a pachetului nevalid.';
$lang['package_write_failed'] = 'Scrierea pachetului în %s a eșuat';
$lang['package_zip_not_found'] = 'Arhiva ZIP a pachetului nu există: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Actualizări noi disponibile!';
$lang['update_backup_error'] = 'Nu s-a putut crea o copie de rezervă a pachetului existent. Actualizarea a fost întreruptă.';
$lang['update_check_disabled'] = 'Verificările automate de actualizări sunt dezactivate. Activați-le pentru a vizualiza actualizările.';
$lang['update_check_error'] = 'Nu se poate efectua verificarea actualizărilor în acest moment.';
$lang['update_check_success'] = 'Verificarea actualizărilor s-a finalizat cu succes.';
$lang['update_install_error'] = 'Pachetul nu a putut fi instalat. Versiunea anterioară a fost păstrată.';
$lang['update_install_success'] = 'Pachetul a fost actualizat cu succes la cea mai recentă versiune.';
$lang['update_interval_3days'] = 'La fiecare 3 zile';
$lang['update_interval_biweekly'] = 'La fiecare 2 săptămâni';
$lang['update_interval_daily'] = 'În fiecare zi';
$lang['update_interval_monthly'] = 'O dată pe lună';
$lang['update_interval_weekly'] = 'O dată pe săptămână';
$lang['update_not_available'] = 'Site-ul dvs. web este la zi.';
$lang['update_rollback_error'] = 'Nu s-a putut restaura versiunea anterioară. Poate fi necesară intervenția manuală.';
$lang['update_rollback_success'] = 'Versiunea anterioară a fost restaurată cu succes.';
$lang['updates_available'] = 'Actualizări disponibile';
$lang['updates_check_now'] = 'Verifică acum';
$lang['updates_check_now_confirm'] = 'Sigur doriți să verificați actualizările acum?';
$lang['updates_current_version'] = 'Versiune curentă';
$lang['updates_enable'] = 'Activează actualizările';
$lang['updates_last_check'] = 'Ultima verificare: %s';
$lang['updates_latest_version'] = 'Cea mai recentă versiune';
$lang['updates_next_check'] = 'Următoarea verificare programată: %s';
$lang['updates_previous_version'] = 'Versiune anterioară';
$lang['updates_recent'] = 'Actualizate recent';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blocarea adresei IP specificate a eșuat.';
$lang['admin_firewall_ban_success'] = 'Adresa IP a fost blocată cu succes.';
$lang['admin_firewall_block_ip'] = 'Blochează adresa IP';
$lang['admin_firewall_delete_confirm'] = 'Sigur doriți să deblocați adresele IP selectate?';
$lang['admin_firewall_delete_error'] = 'Deblocarea adreselor IP selectate a eșuat.';
$lang['admin_firewall_delete_success'] = 'Adresele IP selectate au fost deblocate cu succes.';
$lang['admin_firewall_duration'] = 'Durata interzicerii';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Motivul interzicerii';
$lang['admin_firewall_tip'] = 'Vizualizați și gestionați adresele IP blocate de firewall din cauza încălcărilor repetate sau activității suspecte.';

// Settings
$lang['404_ban_duration'] = 'Durata blocării 404';
$lang['404_threshold'] = 'Limită de greșeli 404';
$lang['uri_ban_duration'] = 'Durata blocării URI';
$lang['uri_strike_threshold'] = 'Limită de greșeli URI';
