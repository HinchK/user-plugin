<?php return [
  'plugin' => [
    'tab' => 'Uporabniki',
    'access_users' => 'Upravljanje uporabnikov',
    'access_groups' => 'Upravljanje uporabniških skupin',
    'access_settings' => 'Upravljanje uporabniških nastavitev',
    'impersonate_user' => 'Impersonacija uporabnikov',
  ],
  'users' => [
    'all_users' => 'Vsi uporabniki',
    'new_user' => 'Nov uporabnik',
    'trashed_hint_title' => 'Uporabnik je deaktiviral svoj račun',
    'trashed_hint_desc' => 'Ta uporabnik je deaktiviral svoj račun in se ne želi več pojavljati na spletni strani. Svoj račun lahko kadarkoli obnovi s prijavo.',
    'banned_hint_title' => 'Uporabnik je bil blokiran',
    'banned_hint_desc' => 'Tega uporabnika je administrator blokiral in se ne more več prijaviti.',
    'guest_hint_title' => 'Ta uporabnik je gost',
    'guest_hint_desc' => 'Ta uporabnik je shranjen samo za referenčne namene. Če se želi prijaviti, se mora najprej registrirati.',
    'activate_warning_title' => 'Uporabnik ni aktiviran!',
    'activate_warning_desc' => 'Ta uporabnik ni bil aktiviran in se ne more prijaviti.',
    'activate_confirm' => 'Ali ste prepričani, da želite aktivirati tega uporabnika?',
    'activated_success' => 'Uporabnik je bil aktiviran.',
    'activate_manually' => 'Ročno aktivirajte tega uporabnika',
    'convert_guest_confirm' => 'Želite gosta spremeniti v uporabnika?',
    'convert_guest_manually' => 'Spremeni v registriranega uporabnika',
    'convert_guest_success' => 'Uporabnik je bil spremenjen v registriranega uporabnika.',
    'impersonate_user' => 'Impersoniraj uporabnika',
    'impersonate_confirm' => 'Ali ste prepričani, da želite impersonirati tega uporabnika? V prvotno stanje se lahko vrnete tako, da se odjavite.',
    'impersonate_success' => 'Sedaj impersonirate tega uporabnika.',
    'delete_confirm' => 'Ali ste prepričani, da želite izbrisati tega uporabnika?',
    'unban_user' => 'Odblokiranje uporabnika',
    'unban_confirm' => 'Ali ste prepričani, da želite odblokirati tega uporabnika?',
    'unbanned_success' => 'Uporabnik je bil odblokiran.',
    'return_to_list' => 'Vrni se na seznam uporabnikov',
    'update_details' => 'Posodobite podrobnosti',
    'delete_selected' => 'Izbriši izbrane',
    'delete_selected_confirm' => 'Izbrišem izbrane uporabnike?',
    'delete_selected_empty' => 'Ni izbranih uporabnikov za izbris.',
    'delete_selected_success' => 'Izbrani uporabniki so bili uspešno izbrisani.',
    'activate_selected' => 'Aktiviraj izbrane',
    'activate_selected_confirm' => 'Aktiviram izbrane uporabnike?',
    'activate_selected_empty' => 'Ni izbranih uporabnikov za aktiviranje.',
    'activate_selected_success' => 'Izbrani uporabniki so bili uspešno aktivirani.',
    'deactivate_selected' => 'Deaktiviraj izbrane',
    'deactivate_selected_confirm' => 'Deaktiviram izbrane uporabnike?',
    'deactivate_selected_empty' => 'Ni izbranih uporabnikov za deaktiviranje.',
    'deactivate_selected_success' => 'Izbrani uporabniki so bili uspešno deaktivirani.',
    'restore_selected' => 'Obnovi izbrane',
    'restore_selected_confirm' => 'Obnovim izbrane uporabnike?',
    'restore_selected_empty' => 'Ni izbranih uporabnikov za obnovitev.',
    'restore_selected_success' => 'Izbrani uporabniki so bili uspešno obnovljeni.',
    'ban_selected' => 'Blokiraj izbrane',
    'ban_selected_confirm' => 'Blokiram izbrane uporabnike?',
    'ban_selected_empty' => 'Ni izbranih uporabnikov za blokiranje.',
    'ban_selected_success' => 'Izbrani uporabniki so bili uspešno blokirani.',
    'unban_selected' => 'Odblokiraj izbrane',
    'unban_selected_confirm' => 'Odblokiram izbrane uporabnike?',
    'unban_selected_empty' => 'Ni izbranih uporabnikov za deblokiranje.',
    'unban_selected_success' => 'Izbrani uporabniki so bili uspešno odblokirani.',
    'unsuspend' => 'Odsuspendiraj',
    'unsuspend_success' => 'Uporabnik ni več suspendiran.',
    'unsuspend_confirm' => 'Odsuspendiram tega uporabnika?',
  ],
  'settings' => [
    'users' => 'Uporabniki',
    'activation_tab' => 'Aktivacija',
    'signin_tab' => 'Prijava',
    'registration_tab' => 'Registracija',
    'profile_tab' => 'Profil',
    'notifications_tab' => 'Obvestila',
    'allow_registration' => 'Dovoli registracijo uporabnikov',
    'allow_registration_comment' => 'Če je onemogočeno, lahko uporabnike ustvarijo le administratorji.',
    'activate_mode' => 'Način aktivacije',
    'activate_mode_comment' => 'Izberite, na kakšen način naj bo aktiviran uporabniški račun.',
    'activate_mode_auto' => 'Avtomatski',
    'activate_mode_auto_comment' => 'Aktiviranje je avtomatsko in se zgodi takoj po registraciji.',
    'activate_mode_user' => 'Uporabniški',
    'activate_mode_user_comment' => 'Uporabnik sam aktivira svoj račun z uporabo e-pošte.',
    'activate_mode_admin' => 'Administratorski',
    'activate_mode_admin_comment' => 'Uporabnika lahko aktivira le administrator.',
    'require_activation' => 'Prijava zahteva aktiviranje',
    'require_activation_comment' => 'Uporabniki potrebujejo za prijavo aktiviran račun.',
    'use_throttle' => 'Blokiranje večkratnih prijav',
    'use_throttle_comment' => 'Večkratni ponovljeni neuspešni poskusi prijave bodo uporabnika začasno suspendirali.',
    'use_register_throttle' => 'Blokiranje registracij',
    'use_register_throttle_comment' => 'Prepreči več zaporednih registracij z istega IP naslova v kratkem času.',
    'block_persistence' => 'Prepreči sočasne prijave',
    'block_persistence_comment' => 'Če je omogočeno, se uporabniki ne morejo prijaviti v več naprav hkrati.',
    'login_attribute' => 'Atribut prijave',
    'login_attribute_comment' => 'Izberite, kateri primarni atribut uporabnika naj bo uporabljen za prijavo.',
    'remember_login' => 'Zapomni si način prijave',
    'remember_login_comment' => 'Določite ali naj bo uporabniška seja obstojna.',
    'remember_always' => 'Vedno',
    'remember_never' => 'Nikoli',
    'remember_ask' => 'Vprašaj uporabnika ob prijavi',
  ],
  'user' => [
    'id' => 'ID',
    'username' => 'Uporabniško ime',
    'name' => 'Ime',
    'name_empty' => 'Anonimni uporabnik',
    'last_name' => 'Priimek',
    'email' => 'E-pošta',
    'created_at' => 'Registriran dne',
    'last_seen' => 'Zadnjič viden',
    'is_guest' => 'Gost',
    'joined' => 'Prijavljen',
    'is_online' => 'Trenutno na spletu',
    'is_offline' => 'Trenutno ni na spletu',
    'send_invite' => 'Pošlji povabilo prek e-pošte',
    'send_invite_comment' => 'Pošlje pozdravno sporočilo, ki vsebuje podatke za prijavo.',
    'create_password' => 'Geslo',
    'create_password_comment' => 'Ustvarite novo geslo, ki se bo uporabljalo za prijavo.',
    'reset_password' => 'Ponastavi geslo',
    'reset_password_comment' => 'Če želite ponastaviti geslo tega uporabnika, vnesite tukaj novo geslo.',
    'confirm_password' => 'Potrditev gesla',
    'confirm_password_comment' => 'Za potrditev ponovno vnesite geslo.',
    'groups' => 'Skupine',
    'empty_groups' => 'Ni uporabniških skupin.',
    'avatar' => 'Avatar',
    'details' => 'Podrobnosti',
    'account' => 'Račun',
    'block_mail' => 'Blokiraj vso odhodno pošto, poslano temu uporabniku.',
    'status_label' => 'Status',
    'status_guest' => 'Gost',
    'status_activated' => 'Aktiviran',
    'status_registered' => 'Registriran',
    'created_ip_address' => 'Ustvarjen IP naslov',
    'last_ip_address' => 'Zadnji IP naslov',
  ],
  'group' => [
    'id' => 'ID',
    'name' => 'Ime',
    'description_field' => 'Opis',
    'code' => 'Koda',
    'code_comment' => 'Vnesite unikatno kodo za identifikacijo te skupine.',
    'created_at' => 'Ustvarjeno',
    'users_count' => 'Uporabniki',
  ],
  'groups' => [
    'all_groups' => 'Skupine uporabnikov',
    'new_group' => 'Nova skupina',
    'delete_selected_confirm' => 'Ali ste prepričani, da želite izbrisati izbrane skupine?',
    'delete_confirm' => 'Ali ste prepričani, da želite izbrisati to skupino?',
    'delete_selected_success' => 'Izbrane skupine so uspešno izbrisane.',
    'delete_selected_empty' => 'Ni izbranih skupin za izbris.',
    'return_to_list' => 'Nazaj na seznam skupin',
    'return_to_users' => 'Nazaj na seznam uporabnikov',
    'preview_title' => 'Predogled skupine uporabnikov',
  ],
  'login' => [
    'attribute_email' => 'E-pošta',
    'attribute_username' => 'Uporabniško ime',
  ],
  'account' => [
    'account' => 'Račun',
    'account_desc' => 'Upravljanje uporabnika.',
    'redirect_to' => 'Preusmeritev na',
    'redirect_to_desc' => 'Stran, na katero bo uporabnik preusmerjen po posodobitvi profila, po prijavi ali po registraciji.',
    'code_param' => 'Parameter aktivacijske kode',
    'code_param_desc' => 'Parameter v URL-ju strani, ki se uporablja za aktivacijsko kodo registracije.',
    'force_secure' => 'Vsili zaščitni protokol',
    'force_secure_desc' => 'URL vedno preusmeri s shemo HTTPS.',
    'invalid_user' => 'Uporabnik s podanimi podatki ne obstaja.',
    'invalid_activation_code' => 'Podana je neveljavna aktivacijska koda.',
    'invalid_deactivation_pass' => 'Geslo, ki ste ga vnesli, je neveljavno.',
    'invalid_current_pass' => 'Trenutno geslo, ki ste ga vnesli, je neveljavno.',
    'success_activation' => 'Vaš račun je uspešno aktiviran.',
    'success_deactivation' => 'Vaš račun je bil uspešno deaktiviran. Žal nam je, ker nas zapuščate!',
    'success_saved' => 'Nastavitve so uspešno shranjene.',
    'login_first' => 'Najprej se morate prijaviti.',
    'already_active' => 'Vaš račun je že aktiviran.',
    'activation_email_sent' => 'Aktivacijsko sporočilo je bilo poslano na vaš e-poštni naslov.',
    'registration_disabled' => 'Registracije so trenutno onemogočene.',
    'registration_throttled' => 'Registracija je trenutno onemogočena. Prosimo, poskusite zopet kasneje.',
    'sign_in' => 'Prijava',
    'register' => 'Registracija',
    'full_name' => 'Polno ime',
    'email' => 'E-pošta',
    'password' => 'Geslo',
    'login' => 'Prijava',
    'new_password' => 'Novo geslo',
    'new_password_confirm' => 'Potrdite novo geslo',
    'update_requires_password' => 'Posodobitev zahteva geslo',
    'update_requires_password_comment' => 'Spreminjanje profila uporabnika zahteva vnos trenutnega gesla.',
    'activation_page' => 'Aktivacijska stran',
    'activation_page_comment' => 'Izberite stran za aktiviranje uporabniškega računa.',
    'reset_page' => 'Ponastavitvena stran',
    'reset_page_comment' => 'Izberite stran za ponastavitev gesla računa.',
  ],
  'reset_password' => [
    'reset_password' => 'Ponastavitev gesla',
    'reset_password_desc' => 'Obrazec za pozabljeno geslo.',
    'code_param' => 'Parameter za ponastavitev',
    'code_param_desc' => 'Parameter v URL-ju strani, ki se uporablja za ponastavitev gesla.',
  ],
  'session' => [
    'session' => 'Seja',
    'session_desc' => 'Namestitev uporabniške seje, ki lahko omeji dostop do strani.',
    'security_title' => 'Dovoljenje za dostop',
    'security_desc' => 'Določite, kdo lahko dostopa do te strani.',
    'all' => 'Vsi',
    'users' => 'Uporabniki',
    'guests' => 'Gosti',
    'allowed_groups_title' => 'Dovoljenje za skupine',
    'allowed_groups_description' => 'Določite, katere skupine lahko dostopajo do te strani. Če ne izberete nobene, imajo dovoljenje vse skupine.',
    'redirect_title' => 'Preusmeritev na stran',
    'redirect_desc' => 'Določite stran, na katero je preusmerjen uporabnik, če je dostop onemogočen.',
    'logout' => 'Uspešno ste se odjavili.',
    'stop_impersonate_success' => 'Uporabnika ne impersonirate več.',
  ],
];
