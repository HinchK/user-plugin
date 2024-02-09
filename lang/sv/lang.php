<?php return [
  'plugin' => [
    'tab' => 'Användare',
    'access_users' => 'Hantera användare',
    'access_groups' => 'Hantera användargrupper',
    'access_settings' => 'Hantera användarinställningar',
    'impersonate_user' => 'Personifiera Användare',
  ],
  'users' => [
    'all_users' => 'Alla användare',
    'new_user' => 'Ny användare',
    'trashed_hint_title' => 'Användaren har avaktiverat sitt konto',
    'trashed_hint_desc' => 'Den här användaren har inaktiverat sitt konto och vill inte längre visas på webbplatsen. De kan återställa sitt konto när som helst genom att logga in igen. ',
    'banned_hint_title' => 'Användaren har blivit bannad',
    'banned_hint_desc' => 'Den här användaren har blivit bannad av en administratör och kommer inte att kunna logga in.',
    'guest_hint_title' => 'Detta är en gästanvändare',
    'guest_hint_desc' => 'Den här användaren är endast lagrad för referensändamål och måste registreras innan du loggar in.',
    'activate_warning_title' => 'Användare inte aktiverad!',
    'activate_warning_desc' => 'Den här användaren har inte aktiverats och kan inte logga in.',
    'activate_confirm' => 'Vill du verkligen aktivera den här användaren?',
    'activated_success' => 'Användaren har aktiverats',
    'activate_manually' => 'Aktivera den här användaren manuellt',
    'convert_guest_confirm' => 'Konvertera denna gäst till en användare?',
    'convert_guest_manually' => 'Konvertera till registrerad användare',
    'convert_guest_success' => 'Användaren har konverterats till ett registrerat konto',
    'impersonate_user' => 'Personifiera användaren',
    'impersonate_confirm' => 'Impersonera den här användaren? Du kan återgå till ditt ursprungliga tillstånd genom att logga ut. ',
    'impersonate_success' => 'Du är nu efterliknar den här användaren',
    'delete_confirm' => 'Vill du verkligen radera den här användaren?',
    'unban_user' => 'Unban den här användaren',
    'unban_confirm' => 'Vill du verkligen avbryta denna användare?',
    'unbanned_success' => 'Användaren har blivit unbanned',
    'return_to_list' => 'Återvänd till användarlistan',
    'update_details' => 'Uppdatera detaljer',
    'delete_selected' => 'Radera vald',
    'delete_selected_confirm' => 'Ta bort de valda användarna?',
    'delete_selected_empty' => 'Det finns inga utvalda användare att ta bort.',
    'delete_selected_success' => 'Ta bort de valda användarna framgångsrikt.',
    'activate_selected' => 'Aktivera vald',
    'activate_selected_confirm' => 'Aktivera de valda användarna?',
    'activate_selected_empty' => 'Det finns inga utvalda användare att aktivera.',
    'activate_selected_success' => 'Aktiverade de valda användarna framgångsrikt.',
    'deactivate_selected' => 'Inaktivera vald',
    'deactivate_selected_confirm' => 'Inaktivera de valda användarna?',
    'deactivate_selected_empty' => 'Det finns inga utvalda användare att avaktivera.',
    'deactivate_selected_success' => 'Deaktiverade de valda användarna framgångsrikt.',
    'restore_selected' => 'Återställ valda',
    'restore_selected_confirm' => 'Återställ de valda användarna?',
    'restore_selected_empty' => 'Det finns inga utvalda användare att återställa.',
    'restore_selected_success' => 'Återställde de valda användarna framgångsrikt.',
    'ban_selected' => 'Ban vald',
    'ban_selected_confirm' => 'Förbjud de valda användarna?',
    'ban_selected_empty' => 'Det finns inga utvalda användare att förbuda.',
    'ban_selected_success' => 'Förbannade de valda användarna framgångsrikt.',
    'unban_selected' => 'Unban vald',
    'unban_selected_confirm' => 'Unban de valda användarna?',
    'unban_selected_empty' => 'Det finns inga utvalda användare att unban.',
    'unban_selected_success' => 'Unbanned de utvalda användarna.',
  ],
  'settings' => [
    'users' => 'Användare',
    'activation_tab' => 'Aktivering',
    'signin_tab' => 'Logga in',
    'registration_tab' => 'Registrering',
    'notifications_tab' => 'Meddelanden',
    'allow_registration' => 'Tillåt användarregistrering',
    'allow_registration_comment' => 'Om detta är inaktiverat kan användare endast skapas av administratörer.',
    'activate_mode' => 'Aktiveringsläge',
    'activate_mode_comment' => 'Välj hur ett användarkonto ska aktiveras.',
    'activate_mode_auto' => 'Automatisk',
    'activate_mode_auto_comment' => 'Aktiveras automatiskt vid registrering.',
    'activate_mode_user' => 'Användare',
    'activate_mode_user_comment' => 'Användaren aktiverar sitt eget konto via e-post.',
    'activate_mode_admin' => 'Administratör',
    'activate_mode_admin_comment' => 'Endast en administratör kan aktivera en användare.',
    'require_activation' => 'Logga in kräver aktivering',
    'require_activation_comment' => 'Användare måste ha ett aktiverat konto för att logga in.',
    'use_throttle' => 'Upprepningsförsök',
    'use_throttle_comment' => 'Upprepade misslyckade inloggningsförsök kommer tillfälligt att stoppa användaren.',
    'block_persistence' => 'Förhindra samtidiga sessioner',
    'block_persistence_comment' => 'När aktiverade användare inte kan logga in på flera enheter samtidigt.',
    'login_attribute' => 'Logga in egenskaper',
    'login_attribute_comment' => 'Välj vilken primär användarinfo som ska användas för inloggning.',
  ],
  'user' => [
    'id' => 'ID',
    'username' => 'Användarnamn',
    'name' => 'Namn',
    'name_empty' => 'Anonym',
    'last_name' => 'Efternamn',
    'email' => 'Email',
    'created_at' => 'Registrerad',
    'last_seen' => 'Senast sett',
    'is_guest' => 'Gäst',
    'joined' => 'Anställd',
    'is_online' => 'Online nu',
    'is_offline' => 'För närvarande offline',
    'send_invite' => 'Skicka inbjudan via e-post',
    'send_invite_comment' => 'Skickar ett välkomstmeddelande som innehåller inloggnings- och lösenordsinformation.',
    'create_password' => 'Skapa lösenord',
    'create_password_comment' => 'Ange ett nytt lösenord som används för inloggning.',
    'reset_password' => 'Återställ lösenord',
    'reset_password_comment' => 'För att återställa användarens lösenord, ange ett nytt lösenord här.',
    'confirm_password' => 'Bekräftelse av lösenord',
    'confirm_password_comment' => 'Ange lösenordet igen för att bekräfta det.',
    'groups' => 'Grupper',
    'empty_groups' => 'Det finns inga användargrupper tillgängliga.',
    'avatar' => 'Avatar',
    'details' => 'Detaljer',
    'account' => 'Konto',
    'block_mail' => 'Blockera alla utgående mail som skickas till den här användaren.',
    'status_guest' => 'Gäst',
    'status_activated' => 'Aktiverad',
    'status_registered' => 'Registrerad',
  ],
  'group' => [
    'id' => 'ID',
    'name' => 'Namn',
    'description_field' => 'Beskrivning',
    'code' => 'Kod',
    'code_comment' => 'Ange en unik kod som används för att identifiera den här gruppen.',
    'created_at' => 'Skapat',
    'users_count' => 'Användare',
  ],
  'groups' => [
    'all_groups' => 'Användargrupper',
    'new_group' => 'Ny grupp',
    'delete_selected_confirm' => 'Vill du verkligen radera valda grupper?',
    'delete_confirm' => 'Vill du verkligen radera den här gruppen?',
    'delete_selected_success' => 'Tog bort de valda grupperna framgångsrikt',
    'delete_selected_empty' => 'Det finns inga valda grupper att radera.',
    'return_to_list' => 'Tillbaka till grupplista',
    'return_to_users' => 'Tillbaka till användarlistan',
    'preview_title' => 'Förhandsgranska användargrupp',
  ],
  'login' => [
    'attribute_email' => 'Email',
    'attribute_username' => 'Användarnamn',
  ],
  'account' => [
    'account' => 'Konto',
    'account_desc' => 'Användarhanteringsformulär.',
    'redirect_to' => 'Omdirigera till',
    'redirect_to_desc' => 'Sidnamn för att omdirigera till efter uppdatering, logga in eller registrera.',
    'code_param' => 'Aktiveringskod Param',
    'code_param_desc' => 'Sidadressadressparametern som används för registreringsaktiveringskoden',
    'force_secure' => 'Tvinga säkert protokoll',
    'force_secure_desc' => 'Omdirigera alltid URL-adressen med HTTPS-schemat.',
    'invalid_user' => 'En användare kunde inte hittas med angivna referenser.',
    'invalid_activation_code' => 'Ogiltig aktiveringskod medföljer.',
    'invalid_deactivation_pass' => 'Lösenordet du angav var ogiltigt.',
    'success_activation' => 'Aktiverat ditt konto.',
    'success_deactivation' => 'Inaktiverade ditt konto framgångsrikt. Tråkigt att du lämnar oss! ',
    'success_saved' => 'Inställningar sparades framgångsrikt!',
    'login_first' => 'Du måste vara inloggad först!',
    'already_active' => 'Ditt konto är redan aktiverat!',
    'activation_email_sent' => 'Ett aktiverings-e-postmeddelande har skickats till din e-postadress.',
    'registration_disabled' => 'Registreringar är för närvarande inaktiverade.',
    'sign_in' => 'Logga in',
    'register' => 'Registrera',
    'full_name' => 'Fullständigt namn',
    'email' => 'Email',
    'password' => 'Lösenord',
    'login' => 'Logga in',
    'new_password' => 'Nytt lösenord',
    'new_password_confirm' => 'Bekräfta nytt lösenord',
  ],
  'reset_password' => [
    'reset_password' => 'Återställ lösenord',
    'reset_password_desc' => 'Glömt lösenordsformulär.',
    'code_param' => 'Återställ kodparam',
    'code_param_desc' => 'Sidadressparametern som används för återställningskoden',
  ],
  'session' => [
    'session' => 'Session',
    'session_desc' => 'Lägger till användarsessionen på en sida och kan begränsa sidåtkomst.',
    'security_title' => 'Tillåt bara',
    'security_desc' => 'Vem får komma åt denna sida.',
    'all' => 'Alla',
    'users' => 'Användare',
    'guests' => 'Gäster',
    'allowed_groups_title' => 'Tillåt grupper',
    'allowed_groups_description' => 'Välj tillåtna grupper eller ingen för att tillåta alla grupper',
    'redirect_title' => 'Omdirigera till',
    'redirect_desc' => 'Sidnamn att omdirigera om åtkomst nekas.',
    'logout' => 'Du har blivit framgångsrik utloggad!',
    'stop_impersonate_success' => 'Du personifierar inte längre en användare.',
  ],
];
