<?php return [
  'plugin' => [
    'tab' => 'Users',
    'access_users' => 'Administrar Usuarios',
    'access_groups' => 'Administrar Grupos de Usuarios',
    'access_settings' => 'Administrar Ajustes de Usuario',
  ],
  'users' => [
    'all_users' => 'Todos los Usuarios',
    'new_user' => 'Nuevo Usuario',
    'activating' => 'Activando...',
    'trashed_hint_title' => 'El usuario ha desactivado su cuenta',
    'trashed_hint_desc' => 'Éste usuario ha desactivado su cuenta y no quiere volver a aparecer en el sitio. Ellos pueden restaurar su cuenta en cualquier momento al re-ingresar.',
    'banned_hint_title' => 'El usuario ha sido baneado',
    'banned_hint_desc' => 'Éste usuario ha sido baneado por un administrador y estará imposibilitado para ingresar.',
    'activate_warning_title' => 'El usuario no esta activado!',
    'activate_warning_desc' => 'Éste usuario no esta activado y quizá no pueda ingresar.',
    'activate_confirm' => 'Realmente desea activar éste usuario?',
    'activate_manually' => 'Activar éste usuario manualmente',
    'delete_confirm' => 'Realmente desea eliminar éste usuario?',
    'activated_success' => 'El usuario ha sido activado con éxito!',
    'return_to_list' => 'Regresar a la lista de usuarios',
    'delete_selected' => 'Eliminar seleccionados',
    'delete_selected_confirm' => 'Eliminar los usuarios seleccionados?',
    'delete_selected_empty' => 'No hay usuarios seleccionados para eliminar.',
    'delete_selected_success' => 'Los usuarios seleccionados se eliminaron con éxito.',
    'deactivate_selected' => 'Desactivar seleccionados',
    'deactivate_selected_confirm' => 'Desactivar los usuarios seleccionados?',
    'deactivate_selected_empty' => 'No hay usuarios seleccionados para desactivar.',
    'deactivate_selected_success' => 'Los usuarios seleccionados se desactivaron con éxito.',
    'restore_selected' => 'Reactivar seleccionados',
    'restore_selected_confirm' => 'Reactivar los usuarios seleccionados?',
    'restore_selected_empty' => 'No hay usuarios seleccionados para reactivar.',
    'restore_selected_success' => 'Los usuarios seleccionados se reactivaron con éxito.',
    'ban_selected' => 'Suspender seleccionados (Banear)',
    'ban_selected_confirm' => 'Suspender los usuarios seleccionados?',
    'ban_selected_empty' => 'No hay usuarios seleccionados para suspender.',
    'ban_selected_success' => 'Los usuarios seleccionados se suspendieron con éxito.',
    'unban_selected' => 'Reanudar seleccionados (Baneados)',
    'unban_selected_confirm' => 'Reanudar los usuarios seleccionados?',
    'unban_selected_empty' => 'No hay usuarios seleccionados para reanudar.',
    'unban_selected_success' => 'Los usuarios seleccionados se reanudaron con éxito.',
  ],
  'settings' => [
    'users' => 'Usuarios',
    'activation_tab' => 'Activación',
    'signin_tab' => 'Ingreso',
    'registration_tab' => 'Registración',
    'notifications_tab' => 'Notificaciones',
    'allow_registration' => 'Permitir registro de ususarios',
    'allow_registration_comment' => 'Si esta desactivado, los usuarios solo podrán ser creados por administradores.',
    'activate_mode' => 'Modo de Activación',
    'activate_mode_comment' => 'Seleccione la forma en que una cuenta debe ser activada.',
    'activate_mode_auto' => 'Automático',
    'activate_mode_auto_comment' => 'Se activa automáticamente en la registración.',
    'activate_mode_user' => 'Usuario',
    'activate_mode_user_comment' => 'El usuario activa su propia cuenta a través del e-mail.',
    'activate_mode_admin' => 'Administrador',
    'activate_mode_admin_comment' => 'Solo los administradores pueden activar usuarios.',
    'require_activation' => 'El ingreso requiere activación',
    'require_activation_comment' => 'Los usuarios necesitarán una cuenta activa para ingresar.',
    'use_throttle' => 'Regular intentos fallidos',
    'use_throttle_comment' => 'Repetidos intentos fallidos de ingreso suspenderán temporalmente al usuario.',
    'login_attribute' => 'Atributo para ingreso',
    'login_attribute_comment' => 'Seleccione que atributo sera utilizado para el ingreso.',
  ],
  'user' => [
    'details' => 'Detalles',
  ],
  'group' => [
    'id' => 'ID',
    'name' => 'Nombre',
    'description_field' => 'Descripción',
    'code' => 'Código',
    'code_comment' => 'Ingrese un código único para identificar a este grupo.',
    'created_at' => 'Creado',
    'users_count' => 'Usuarios',
  ],
  'groups' => [
    'all_groups' => 'Grupos de Usuario',
    'new_group' => 'Nuevo Grupo',
    'delete_selected_confirm' => 'Realmente quiere eliminar los grupos seleccionados?',
    'delete_confirm' => 'Realmente quiere eliminar este grupo?',
    'delete_selected_success' => 'Los grupos seleccionados se eliminaron con éxito.',
    'delete_selected_empty' => 'No hay grupos seleccionados para eliminar.',
    'return_to_list' => 'Volver a la lista de grupos',
    'return_to_users' => 'Volver a la lista de usuarios',
    'preview_title' => 'Ver Grupo',
  ],
  'login' => [
    'attribute_email' => 'Email',
    'attribute_username' => 'Nombre de Usuario',
  ],
  'account' => [
    'account' => 'Cuenta',
    'account_desc' => 'Formulario de administración de usuario.',
    'redirect_to' => 'Redirigir a',
    'redirect_to_desc' => 'Nombre de la página a redirigir luego de una actualización, ingreso o registro.',
    'code_param' => 'Parámetro del Código de Activación',
    'code_param_desc' => 'El parámetro de URL utilizado para el código de activación de registro.',
    'invalid_user' => 'No se encontraron usuarios con los datos proporcionados.',
    'invalid_activation_code' => 'Código de activación inválido.',
    'invalid_deactivation_pass' => 'La contraseña ingresada no es válida.',
    'success_activation' => 'Su cuenta fue activada con éxito.',
    'success_deactivation' => 'Su cuenta fue desactivada con éxito.',
    'success_saved' => 'Ajustes guardados con éxito!',
    'login_first' => 'Primero debes ingresar con un usuario!',
    'already_active' => 'Su cuenta ya se encuentra activada!',
    'activation_email_sent' => 'Un mail de activación fue enviado a su cuenta de correo.',
    'registration_disabled' => 'Actualmente los registros no están habilitados.',
    'sign_in' => 'Ingresar',
    'register' => 'Registrarse',
    'full_name' => 'Nombre Completo',
    'email' => 'Email',
    'password' => 'Contraseña',
    'login' => 'Iniciar Sesión',
    'new_password' => 'Nueva Contraseña',
    'new_password_confirm' => 'Confirmar Nueva Contraseña',
  ],
  'reset_password' => [
    'reset_password' => 'Reiniciar Contraseña',
    'reset_password_desc' => 'Formulario de olvido de contraseña.',
    'code_param' => 'Parámetro del Código de Reinicio',
    'code_param_desc' => 'El parámetro de URL utilizado para el código de reinicio.',
  ],
  'session' => [
    'session' => 'Sesión',
    'session_desc' => 'Agrega la sesión de usuario a una pagina y permite restringir el acceso a la misma.',
    'security_title' => 'Permitir acceso a',
    'security_desc' => 'Quien tiene permiso para acceder a esta página.',
    'all' => 'Todos',
    'users' => 'Usuarios',
    'guests' => 'Invitados',
    'redirect_title' => 'Redirigir a',
    'redirect_desc' => 'Nombre de la página a redirigir si el acceso es denegado.',
    'logout' => 'La sesión se ha cerrado con éxito!',
  ],
];
