<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Actualizări de sistem disponibile';
$lang['emails_updates_available_message'] = <<<EOT
Bună ziua,

Au fost detectate noi actualizări de sistem pentru {site_anchor}.

Aceste actualizări pot include remedieri de securitate, îmbunătățiri de performanță sau funcții noi.
Vă recomandăm să le verificați cât mai curând posibil.

Puteți verifica și gestiona actualizările disponibile din panoul de administrare:
{link}

Dacă ați verificat sau aplicat deja actualizările, nu este necesară nicio altă acțiune.

Acesta este un mesaj automat al sistemului trimis de {site_name}.
Vă rugăm să nu răspundeți la acest e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Activarea contului';
$lang['emails_account_activation_request_message'] = <<<EOT
Bună ziua {name},

Vă mulțumim pentru înregistrarea la {site_anchor}. Contul dvs. a fost creat și trebuie activat înainte de a-l putea folosi.

Pentru a vă activa contul, faceți clic pe următorul link sau copiați-l și lipiți-l în browserul dvs.:
{link}

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Link nou de activare';
$lang['emails_account_activation_resend_message'] = <<<EOT
Bună ziua {name},

Ați solicitat recent un nou link de activare pe {site_anchor} deoarece contul dvs. nu era activ.
Pentru a vă activa contul, faceți clic pe următorul link sau copiați-l și lipiți-l în browserul dvs.:
{link}

Dacă nu ați solicitat acest lucru, nu este necesară nicio acțiune suplimentară.

Această acțiune a fost solicitată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Cont activat';
$lang['emails_account_activation_success_message'] = <<<EOT
Bună ziua {name},

Contul dvs. de pe {site_anchor} a fost activat cu succes. Acum vă puteți <a href="{login_url}" target="_blank" rel="noopener">autentifica</a> oricând doriți.

Sperăm să vă bucurați de șederea dvs., vă rugăm să acceptați salutările noastre cordiale.

-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Cont în așteptarea aprobării';
$lang['emails_account_approval_pending_message'] = <<<EOT
Bună ziua {name},

Vă mulțumim că v-ați alăturat nouă la {site_anchor}. Contul dvs. a fost creat dar necesită aprobarea unui administrator al site-ului înainte de a fi activ.
Ne cerem scuze sincer pentru acest pas crucial, dar este doar în scopuri de securitate.

Veți primi un e-mail de confirmare de îndată ce contul dvs. este aprobat.

Sperăm să vă bucurați de șederea dvs., vă rugăm să acceptați salutările noastre cordiale.

-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Cont aprobat';
$lang['emails_account_approval_success_message'] = <<<EOT
Bună ziua {name},

Vesturi excelente! Contul dvs. de pe {site_anchor} tocmai a fost aprobat.

Acum vă puteți autentifica și începe să utilizați contul imediat:
{link}

Suntem bucuroși să vă avem alături de noi.

-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Cont restaurat';
$lang['emails_account_restored_message'] = <<<EOT
Bună ziua {name},

Acest e-mail confirmă că contul dvs. de pe {site_anchor} a fost restaurat cu succes.

Bine ați revenit și sperăm că de data aceasta vă veți bucura de șederea dvs.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Bine ați venit la {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Bună ziua {name},

Majoritatea oamenilor au secvențe de e-mailuri de bun venit foarte lungi după ce vă înregistrați pe site-ul lor.

Vestea bună: noi nu suntem ca majoritatea oamenilor.
Dar, oricum, dorim să vă dăm bun venit și să vă mulțumim că v-ați alăturat nouă la {site_anchor}.

Sperând să vă bucurați de șederea dvs., vă rugăm să acceptați salutările noastre cordiale.

-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Cerere de schimbare a adresei de e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Bună ziua {name},

Primiți acest e-mail deoarece am primit o solicitare de schimbare a e-mailului pentru contul dvs. de pe {site_anchor}.

Faceți clic pe următorul link sau copiați-l și lipiți-l în browserul dvs. dacă doriți să continuați:
{link}

Dacă nu ați solicitat schimbarea e-mailului, nu este necesară nicio acțiune suplimentară.

Această acțiune a fost solicitată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Adresă de e-mail schimbată';
$lang['emails_email_change_success_message'] = <<<EOT
Bună ziua {name},

Acest e-mail confirmă că adresa de e-mail utilizată pe {site_anchor} a fost schimbată cu succes.

Dacă nu ați efectuat această acțiune, vă rugăm să ne contactați cât mai repede posibil pentru a rezolva această problemă.

Această acțiune a fost efectuată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alertă de autentificare eșuată';
$lang['emails_login_alert_failure_message'] = <<<EOT
Bună ziua {name},

Cineva a folosit recent parole greșite pentru a încerca să se autentifice în contul dvs. {site_name}.

Data serverului: {date}
Dispozitiv: {browser}, {platform}
Adresă IP: {ip_link}

Dacă nu ați fost dvs., nu vă faceți griji, încercarea de autentificare nu a reușit.

Dacă ați fost dvs. și nu vă amintiți parola, faceți clic pe linkul de mai jos pentru a o reseta:
{reset_link}

Dacă întâmpinați dificultăți la autentificarea în contul dvs., contactați echipa noastră sau solicitați un link de autentificare cu un singur clic.

-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notificare de autentificare reușită';
$lang['emails_login_alert_success_message'] = <<<EOT
Bună ziua {name},

Vă trimitem acest e-mail după o autentificare reușită în contul dvs. {site_name}.

Data serverului: {date}
Dispozitiv: {browser}, {platform}
Adresă IP: {ip_link}

Dacă ați fost dvs., puteți ignora în siguranță acest e-mail.

Dacă nu v-ați autentificat, vă rugăm să schimbați parola imediat pentru a securiza contul dvs.

Pentru orice asistență, contactați echipa noastră de suport.

-- Echipa {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Link de autentificare rapidă';
$lang['emails_login_magic_link_message'] = <<<EOT
Bună ziua {name},

Ați solicitat o autentificare cu un singur clic la contul dvs. de pe {site_anchor}.

Faceți clic pe linkul de mai jos sau copiați-l și lipiți-l în browserul dvs. și veți fi autentificat instantaneu:
{link}

Acest link va expira în 15 minute. Dacă nu ați solicitat acest lucru, vă rugăm să ignorați acest e-mail.

Această acțiune a fost solicitată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autentificare cu doi factori';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Bună ziua {name},

Codul dvs. de autentificare cu doi factori este: <strong>{code}</strong>

Puteți dezactiva întotdeauna autentificarea cu doi factori în setările contului dvs.

Această acțiune a fost efectuată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Cerere de resetare a parolei';
$lang['emails_password_change_request_message'] = <<<EOT
Bună ziua {name},

Primiți acest e-mail deoarece am primit o solicitare de resetare a parolei pentru contul dvs. de pe {site_anchor}.

Faceți clic pe următorul link sau copiați-l și lipiți-l în browserul dvs. dacă doriți să continuați:
{link}

Dacă nu ați solicitat resetarea parolei, nu este necesară nicio acțiune suplimentară.

Această acțiune a fost solicitată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Parolă schimbată cu succes';
$lang['emails_password_change_success_message'] = <<<EOT
Bună ziua {name},

Acest e-mail confirmă faptul că parola dvs. de pe {site_anchor} a fost schimbată cu succes. Acum vă puteți <a href="{login_url}" target="_blank" rel="noopener">autentifica</a> folosind parola nouă.

Dacă nu ați efectuat dvs. această acțiune, vă rugăm să ne contactați cât mai curând posibil pentru a rezolva această problemă.

Această acțiune a fost efectuată de la această adresă IP: {ip_link}.

Cu stimă,
-- Echipa {site_name}.
EOT;
