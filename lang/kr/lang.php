<?php return [
  'plugin' => [
    'tab' => '회원관리',
    'access_users' => '회원관리',
    'access_groups' => '그룹관리',
    'access_settings' => '회원설정',
    'impersonate_user' => '위장 로그인',
  ],
  'users' => [
    'all_users' => '전체계정',
    'new_user' => '신규계정',
    'trashed_hint_title' => '사용자가 계정을 비활성화했습니다.',
    'trashed_hint_desc' => '이 사용자는 자신의 계정을 비활성화했으며 더 이상 사이트에 나타나길 원치 않습니다. 다시 로그인하면 언제든지 계정을 복원 할 수 있습니다.',
    'banned_hint_title' => '차단된 계정입니다.',
    'banned_hint_desc' => '이 사용자는 관리자에 의해 차단되었으며 로그인 할 수 없습니다.',
    'guest_hint_title' => '방문자 입니다.',
    'guest_hint_desc' => '이 계정은 참조 목적으로 만 저장되며 로그인하기 전에 등록해야합니다.',
    'activate_warning_title' => '사용자가 활성화되지 않았습니다!',
    'activate_warning_desc' => '이 사용자는 비활성화 상태이며, 로그인 할 수 없습니다.',
    'activate_confirm' => '이 사용자를 활성화하시겠습니까?',
    'activated_success' => '사용자가 활성화되었습니다.',
    'activate_manually' => '수동으로 이 사용자 활성화',
    'convert_guest_confirm' => '이 방문자를 계정으로 변환하시겠습니까?',
    'convert_guest_manually' => '등록된 사용자로 변환',
    'convert_guest_success' => '사용자가 등록된 계정으로 변환되었습니다.',
    'impersonate_user' => '가장 로그인',
    'impersonate_confirm' => '이 사용자로 가장하시겠습니까? 로그 아웃하면 원래 상태로 되돌릴 수 있습니다.',
    'impersonate_success' => '이제 이 사용자를 가장하고 있습니다.',
    'delete_confirm' => '이 사용자를 삭제하시겠습니까??',
    'unban_user' => '이 사용자의 차단을 해제합니다.',
    'unban_confirm' => '이 사용자의 차단을 해제하시겠습니까?',
    'unbanned_success' => '사용자의 차단이 해제되었습니다.',
    'return_to_list' => '사용자 목록으로 돌아가기',
    'update_details' => '세부 정보 수정',
    'delete_selected' => '선택 항목 삭제',
    'delete_selected_confirm' => '선택한 사용자를 삭제하시겠습니까?',
    'delete_selected_empty' => '삭제할 대상이 없습니다.',
    'delete_selected_success' => '선택한 사용자를 성공적으로 삭제했습니다.',
    'activate_selected' => '선택한 항목 활성화',
    'activate_selected_confirm' => '선택한 사용자를 활성화하시겠습니까?',
    'activate_selected_empty' => '활성화할 선택한 사용자가 없습니다.',
    'activate_selected_success' => '선택한 사용자가 성공적으로 활성화되었습니다.',
    'deactivate_selected' => '비활성화 선택됨',
    'deactivate_selected_confirm' => '선택한 사용자를 비활성화하시겠습니까?',
    'deactivate_selected_empty' => '비활성화할 선택한 사용자가 없습니다.',
    'deactivate_selected_success' => '선택한 사용자를 성공적으로 비활성화했습니다.',
    'restore_selected' => '복원 선택됨',
    'restore_selected_confirm' => '선택한 사용자를 복원하시겠습니까?',
    'restore_selected_empty' => '복원할 선택한 사용자가 없습니다.',
    'restore_selected_success' => '선택한 사용자를 성공적으로 복원했습니다.',
    'ban_selected' => '차단 선택',
    'ban_selected_confirm' => '선택한 사용자의 차단하시겠습니까?',
    'ban_selected_empty' => '차단할 선택된 사용자가 없습니다.',
    'ban_selected_success' => '선택한 사용자를 성공적으로 차단했습니다.',
    'unban_selected' => '차단해제 선택',
    'unban_selected_confirm' => '선택한 사용자를 차단해제하시겠습니까?',
    'unban_selected_empty' => '차단해제할 선택한 사용자가 없습니다.',
    'unban_selected_success' => '선택한 사용자를 성공적으로 차단해제했습니다.',
  ],
  'settings' => [
    'users' => '사용자',
    'activation_tab' => '활성화',
    'signin_tab' => '로그인',
    'registration_tab' => '등록.',
    'notifications_tab' => '알림',
    'allow_registration' => '사용자 등록 허용',
    'allow_registration_comment' => '이 기능을 사용하지 않도록 설정하면 관리자만 사용자를 생성할 수 있습니다.',
    'activate_mode' => '활성화 모드',
    'activate_mode_comment' => '사용자 계정을 활성화할 방법을 선택합니다.',
    'activate_mode_auto' => '자동',
    'activate_mode_auto_comment' => '등록 시 자동으로 활성화됩니다.',
    'activate_mode_user' => '사용자',
    'activate_mode_user_comment' => '사용자가 메일을 사용하여 자신의 계정을 활성화합니다.',
    'activate_mode_admin' => '관리자',
    'activate_mode_admin_comment' => '관리자만 사용자를 활성화할 수 있습니다.',
    'require_activation' => '로그인을 위해서는 활성화가 필요합니다.',
    'require_activation_comment' => '사용자가 로그인하려면 활성화된 계정이여야 합니다.',
    'use_throttle' => '스로틀 시도',
    'use_throttle_comment' => '실패한 로그인 시도를 반복하면 사용자가 일시적으로 일시 중지됩니다.',
    'block_persistence' => '동시 세션 방지',
    'block_persistence_comment' => '활성화된 경우 사용자는 한번에 여러 장치에 로그인할 수 없습니다.',
    'login_attribute' => '로그인 속성',
    'login_attribute_comment' => '로그인에 사용할 기본 사용자 세부 정보를 선택합니다.',
  ],
  'user' => [
    'id' => '아이디',
    'username' => '사용자 이름',
    'name' => '이름',
    'name_empty' => '익명',
    'last_name' => '성',
    'email' => '이메일',
    'created_at' => '등록일',
    'last_seen' => '마지막 활동',
    'is_guest' => '손님',
    'joined' => '가입된',
    'is_online' => '지금 온라인',
    'is_offline' => '현재 오프라인 상태',
    'send_invite' => '이메일로 초대 메일 보내기',
    'send_invite_comment' => '로그인 및 비밀번호 정보가 포함된 환영 메시지를 보냅니다.',
    'create_password' => '비밀번호 생성',
    'create_password_comment' => '로그인에 사용되는 새 비밀번호를 입력합니다.',
    'reset_password' => '비밀번호 재설정',
    'reset_password_comment' => '이 사용자 암호를 재설정하려면 여기에 새 암호를 입력하십시오.',
    'confirm_password' => '비밀번호 확인',
    'confirm_password_comment' => '비밀번호를 다시 입력하여 확인합니다.',
    'groups' => '그룹',
    'empty_groups' => '사용 가능한 사용자 그룹이 없습니다.',
    'avatar' => '아바타',
    'details' => '세부 사항',
    'account' => '계정',
    'block_mail' => '이 사용자에게 보내는 보내는 메일을 모두 차단합니다.',
    'status_guest' => '손님',
    'status_activated' => '활성화 상태',
    'status_registered' => '등록한',
  ],
  'group' => [
    'id' => '아이디',
    'name' => '이름',
    'description_field' => '설명',
    'code' => '코드',
    'code_comment' => '이 그룹을 식별하는 데 사용되는 고유 한 코드를 입력하십시오.',
    'created_at' => '생성날짜',
    'users_count' => '사용자 수',
  ],
  'groups' => [
    'all_groups' => '회원 그룹 목록',
    'new_group' => '새로운 그룹',
    'delete_selected_confirm' => '선택한 그룹을 삭제하시겠습니까?',
    'delete_confirm' => '이 그룹을 삭제하시겠습니까?',
    'delete_selected_success' => '선택한 그룹을 성공적으로 삭제했습니다.',
    'delete_selected_empty' => '선택된 그룹이 없습니다.',
    'return_to_list' => '그룹 목록으로 돌아가기',
    'return_to_users' => '사용자 목록으로 돌아가기',
    'preview_title' => '사용자 그룹 미리 보기',
  ],
  'login' => [
    'attribute_email' => '이메일',
    'attribute_username' => '회원명',
  ],
  'account' => [
    'account' => '계정',
    'account_desc' => '사용자 관리 폼',
    'redirect_to' => '리디렉션',
    'redirect_to_desc' => '로그인, 등록, 업데이트 후 리디렉션 할 페이지 이름.',
    'code_param' => '활성화 코드 값',
    'code_param_desc' => '등록 활성화 코드에 사용되는 페이지 URL파라미터',
    'force_secure' => '강제 보안 프로토콜',
    'force_secure_desc' => '항상 URL을 HTTPS스키마로 리디렉션 하십시오.',
    'invalid_user' => '지정한 자격 증명을 가진 사용자를 찾을 수 없습니다.',
    'invalid_activation_code' => '제공된 활성화 코드가 잘못되었습니다.',
    'invalid_deactivation_pass' => '입력한 암호가 잘못되었습니다.',
    'success_activation' => '계정이 활성화되었습니다.',
    'success_deactivation' => '계정이 비활성화되었습니다. 죄송합니다!',
    'success_saved' => '설정이 성공적으로 저장되었습니다!',
    'login_first' => '먼저 로그인해야 합니다!',
    'already_active' => '계정이 이미 활성화되었습니다!',
    'activation_email_sent' => '활성화 이메일이 사용자의 이메일 주소로 전송되었습니다.',
    'registration_disabled' => '가입이 현재 비활성화되어 있습니다.',
    'sign_in' => '로그인',
    'register' => '회원가입',
    'full_name' => '전체 이름',
    'email' => '이메일',
    'password' => '비밀번호',
    'login' => '로그인.',
    'new_password' => '새 암호',
    'new_password_confirm' => '암호 재확인',
  ],
  'reset_password' => [
    'reset_password' => '비밀번호 재설정',
    'reset_password_desc' => '암호 형식을 잊어 버렸습니다.',
    'code_param' => '코드 매개 변수 재설정',
    'code_param_desc' => '재설정 코드에 사용되는 페이지 URL매개 변수',
  ],
  'session' => [
    'session' => '기간',
    'session_desc' => '페이지에 사용자 세션을 추가하고 페이지 액세스를 제한할 수 있습니다.',
    'security_title' => '허용',
    'security_desc' => '누가 이 페이지에 액세스 할 수 있습니까?',
    'all' => '모든.',
    'users' => '사용자',
    'guests' => '방문자',
    'allowed_groups_title' => '그룹 허용',
    'allowed_groups_description' => '허용되는 그룹을 선택하거나, 모든 그룹을 허용할 그룹이 없도록 선택하십시오.',
    'redirect_title' => '리디렉션',
    'redirect_desc' => '액세스가 거부된 경우 리디렉션 할 페이지 이름입니다.',
    'logout' => '성공적으로 로그아웃되었습니다!',
    'stop_impersonate_success' => '더 이상 사용자를 가장하지 않습니다.',
  ],
];
