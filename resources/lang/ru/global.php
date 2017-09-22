<?php

return [
		'user-management' => [		'title' => 'Usuários',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissões',		'fields' => [			'title' => 'Título',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',			'permission' => 'Permissões',		],	],
		'users' => [		'title' => 'Usuários',		'fields' => [			'name' => 'Nome',			'email' => 'E-mail',			'password' => 'Senha',			'role' => 'Regra',			'remember-token' => 'Lembrar Senha',			'nomeartistico' => 'Nome Artístico',			'datanascimento' => 'Data Nascimento',			'sexo' => 'Sexo',			'endcidade' => 'Cidade',			'enduf' => 'UF',			'cep' => 'CEP',			'endrua' => 'Rua',			'endnumero' => 'Número',			'endcomplemento' => 'Complemento',			'celular' => 'Celular',			'celular2' => 'Celular 2',			'telefone1' => 'Telefone 1',			'telefone2' => 'Telefone 2',			'facebook' => 'Facebook',			'instagram' => 'Instagram',			'fotoprincipal' => 'Foto Principal',			'apresentacao' => 'Apresentação',			'curriculum' => 'Curriculum',			'peso' => 'Peso',			'altura' => 'Altura',			'calcado' => 'Calçado',			'manequim' => 'Manequim',			'camisa' => 'Camisa',			'terno' => 'Terno',			'busto' => 'Busto',			'cintura' => 'Cintura',			'quadril' => 'Quadril',			'pele' => 'Pele',			'cabelocor' => 'Cabelo Cor',			'cabelotipo' => 'Cabelo Tipo',			'olhos' => 'Olhos',			'rg' => 'RG',			'cpf' => 'CPF',			'nacionalidade' => 'Nacionalidade',			'escolaridade' => 'Escolaridade',			'escolacurso' => 'Escola Curso',			'estadocivil' => 'Estado Civil',			'profissao' => 'Profissão',			'rgufemissor' => 'RG UF Emissor',			'rgorgaoemissor' => 'RG Orgão Emissor',			'exclusividade' => 'Exclusividade',			'orgaoprofissional' => 'Órgão Profissional',			'registroprofissional' => 'Registro Profissional',		],	],
		'task-management' => [		'title' => 'Tarefas',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Status',		'fields' => [			'name' => 'Nome',		],	],
		'task-tags' => [		'title' => 'Categorias',		'fields' => [			'name' => 'Nome',		],	],
		'tasks' => [		'title' => 'Gerenciar',		'fields' => [			'name' => 'Nome',			'description' => 'Descrição',			'status' => 'Status',			'tag' => 'Tags',			'attachment' => 'Anexo',			'due-date' => 'Data de vencimento',			'user' => 'Atribuído',		],	],
		'task-calendar' => [		'title' => 'Calendário',		'fields' => [		],	],
		'elenco' => [		'title' => 'Elenco',		'fields' => [		],	],
		'content-management' => [		'title' => 'Conteúdo Site',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Páginas',		'fields' => [			'title' => 'Título',			'category-id' => 'Categorias',			'tag-id' => 'Tags',			'page-text' => 'Texto',			'excerpt' => 'Resumo',			'featured-image' => 'Imagem em destaque',		],	],
		'profile' => [		'title' => 'Meu Perfil',		'fields' => [		],	],
		'minhaselecoes' => [		'title' => 'Minhas Seleções',		'fields' => [		],	],
		'elenco' => [		'title' => 'Banco de Elenco',		'fields' => [			'nome' => 'Nome',			'nomeelenco' => 'Nomeelenco',		],	],
		'gerenciarelenco' => [		'title' => 'Gerenciar Elenco',		'fields' => [		],	],
		'aprovacao-de-cadastros' => [		'title' => 'Aprovação de cadastros',		'fields' => [		],	],
		'gerenciar-produtoras' => [		'title' => 'Gerenciar Produtoras',		'fields' => [		],	],
		'produtoras' => [		'title' => 'Produtoras',		'fields' => [			'nome' => 'Nome',		],	],
		'gerenciar-selecoes' => [		'title' => 'Gerenciar Seleções',		'fields' => [		],	],
		'gerenciar-selecoes' => [		'title' => 'Gerenciar Seleções',		'fields' => [		],	],
		'selecoes' => [		'title' => 'Seleçoes',		'fields' => [		],	],
		'client-management' => [		'title' => 'Projetos e Clientes',		'fields' => [		],	],
		'client-management-settings' => [		'title' => 'Clientes - Configurações',		'fields' => [		],	],
		'client-currencies' => [		'title' => 'Moedas',		'fields' => [			'title' => 'Título',			'code' => 'Código',			'main-currency' => 'Moeda principal',		],	],
		'client-transaction-types' => [		'title' => 'Tipos de transação',		'fields' => [			'title' => 'Título',		],	],
		'client-income-sources' => [		'title' => 'Fontes de entrada',		'fields' => [			'title' => 'Título',			'fee-percent' => 'Percentual de taxa',		],	],
		'client-statuses' => [		'title' => 'Status do cliente',		'fields' => [			'title' => 'Título',		],	],
		'client-project-statuses' => [		'title' => 'Status do projeto',		'fields' => [			'title' => 'Título',		],	],
		'clients' => [		'title' => 'Clientes',		'fields' => [			'first-name' => 'Primeiro nome',			'last-name' => 'Último nome',			'company-name' => 'Empresa',			'email' => 'E-mail',			'phone' => 'Telefone',			'website' => 'Website',			'skype' => 'Skype',			'country' => 'País',			'client-status' => 'Status do cliente',		],	],
		'client-projects' => [		'title' => 'Projetos',		'fields' => [			'title' => 'Título',			'client' => 'Cliente',			'produtora' => 'Produtora',			'description' => 'Descrição',			'date' => 'Data de início',			'budget' => 'Orçamento',			'project-status' => 'Status do projeto',		],	],
		'client-notes' => [		'title' => 'Notas',		'fields' => [			'project' => 'Projeto',			'text' => 'Texto da nota',		],	],
		'client-documents' => [		'title' => 'Documentos',		'fields' => [			'project' => 'Projeto',			'title' => 'Título',			'description' => 'Descrição',			'file' => 'Arquivo',		],	],
		'client-transactions' => [		'title' => 'Transações',		'fields' => [			'project' => 'Projeto',			'transaction-type' => 'Tipo de transação',			'income-source' => 'Fonte de entrada',			'title' => 'Título',			'description' => 'Descrição',			'amount' => 'Quantidade',			'currency' => 'Moeda',			'transaction-date' => 'Data da transação',		],	],
		'client-reports' => [		'title' => 'Relatórios',		'fields' => [		],	],
		'elenco-selecao' => [		'title' => 'Elenco Seleção',		'fields' => [		],	],
		'elencofotos' => [		'title' => 'Elenco Fotos',		'fields' => [			'elenco' => 'Elenco',			'foto' => 'Foto',			'ativo' => 'Ativo',		],	],
		'elenco-videos' => [		'title' => 'Elenco Videos',		'fields' => [			'elenco' => 'Elenco',			'urlvideo' => 'URL Video',			'ativo' => 'Ativo',		],	],
		'selecoesv2' => [		'title' => 'Selecoes',		'fields' => [			'selecaonome' => 'Selecao',			'datafimselecao' => 'Data Prazo',			'descricao' => 'Descricao',			'produtoraelenco' => 'Produtora',		],	],
		'selecaoelenco' => [		'title' => 'Selecao Elenco',		'fields' => [			'selecaoelencov2' => 'Selecao Elenco',			'atorselecao' => 'Ator/Atriz',			'statusator' => 'Status',			'observacaoselecao' => 'Observacao',		],	],
		'filtros' => [		'title' => 'Filtros',		'fields' => [		],	],
	'app_create' => 'Создать',
	'app_save' => 'Сохранить',
	'app_edit' => 'Редактировать',
	'app_restore' => 'Восстановить',
	'app_permadel' => 'Удалить безвозвратно',
	'app_all' => 'Все',
	'app_trash' => 'Корзина',
	'app_view' => 'Просмотр',
	'app_update' => 'Обновить',
	'app_list' => 'Список',
	'app_no_entries_in_table' => 'Нет данных в таблице',
	'app_logout' => 'Выйти',
	'app_add_new' => 'Добавить новый',
	'app_are_you_sure' => 'Вы уверенны?',
	'app_back_to_list' => 'Вернутся к списку',
	'app_dashboard' => 'Панель управления',
	'app_delete' => 'Удалить',
	'app_delete_selected' => 'Удалить выбранные',
	'app_category' => 'Категория',
	'app_categories' => 'Категории',
	'app_sample_category' => 'Пример категории',
	'app_questions' => 'Вопросы',
	'app_question' => 'Вопрос',
	'app_answer' => 'Ответ',
	'app_sample_question' => 'Пример вопроса',
	'app_sample_answer' => 'Пример ответа',
	'app_faq_management' => 'Управление ЧАВО',
	'app_administrator_can_create_other_users' => 'Администратор (может создавать других пользователей)',
	'app_simple_user' => 'Обычный пользователь',
	'app_title' => 'Заголовок',
	'app_roles' => 'Роли',
	'app_role' => 'Роль',
	'app_user_management' => 'Управление пользователями',
	'app_users' => 'Пользователи',
	'app_user' => 'Пользователь',
	'app_name' => 'Имя',
	'app_email' => 'Электронная почта',
	'app_password' => 'Пароль',
	'app_remember_token' => 'Remember token',
	'app_permissions' => 'Доступы',
	'app_user_actions' => 'Активности пользователя',
	'app_action' => 'Активности',
	'app_action_model' => 'Модель/Сущность Активности',
	'app_action_id' => 'ID Активности',
	'app_time' => 'Время',
	'app_campaign' => 'Кампания',
	'app_campaigns' => 'Кампании',
	'app_description' => 'Описание',
	'app_valid_from' => 'Valid from',
	'app_valid_to' => 'Valid to',
	'app_discount_amount' => 'Сумма скидки',
	'app_discount_percent' => 'Процент скидки',
	'app_coupons_amount' => 'Сумма купонов',
	'app_coupons' => 'Купоны',
	'app_code' => 'Код',
	'app_redeem_time' => 'Время выкупа',
	'app_coupon_management' => 'Управление купонами',
	'app_time_management' => 'Тайм менеджмент',
	'app_projects' => 'Проекты',
	'app_reports' => 'Отчеты',
	'app_time_entries' => 'Записи времени',
	'app_work_type' => 'Тип работы',
	'app_work_types' => 'Тип работ',
	'app_project' => 'Проект',
	'app_start_time' => 'Время начала',
	'app_end_time' => 'Время окончания',
	'app_expense_category' => 'Категория расходов',
	'app_expense_categories' => 'Категории расходов',
	'app_expense_management' => 'Управление расходами',
	'app_expenses' => 'Расходы',
	'app_expense' => 'Расход',
	'app_entry_date' => 'Дата ввода',
	'app_amount' => 'Количество',
	'app_income_categories' => 'Категории доходов',
	'app_monthly_report' => 'Месячный отчет',
	'app_companies' => 'Компании',
	'app_company_name' => 'Имя компании',
	'app_address' => 'Адресс',
	'app_website' => 'Веб сайт',
	'app_contact_management' => 'Управление контактами',
	'app_contacts' => 'Контакты',
	'app_company' => 'Компания',
	'app_first_name' => 'Имя',
	'app_last_name' => 'Фамилия',
	'app_phone' => 'Телефон',
	'app_phone1' => 'Телефон 1',
	'app_phone2' => 'Телефон 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Фото (макс. 8 Мб)',
	'app_category_name' => 'Имя категории',
	'app_product_management' => 'Управление продуктами',
	'app_products' => 'Продукты',
	'app_product_name' => 'Имя продукта',
	'app_price' => 'Цена',
	'app_tags' => 'Тэги',
	'app_tag' => 'Тэг',
	'app_photo1' => 'Фото1',
	'app_photo2' => 'Фото2',
	'app_photo3' => 'Фото3',
	'app_calendar' => 'Календарь',
	'app_statuses' => 'Статусы',
	'app_task_management' => 'Управление задачами',
	'app_tasks' => 'Задачи',
	'app_status' => 'Статус',
	'app_attachment' => 'Вложение',
	'app_due_date' => 'Срок',
	'app_assigned_to' => 'Принадлежит к',
	'app_assets' => 'Активы',
	'app_asset' => 'Актив',
	'app_serial_number' => 'Серийный номер',
	'app_location' => 'Местонахождение',
	'app_locations' => 'Местонахождения',
	'app_assigned_user' => 'Принадлежность пользователю',
	'app_notes' => 'Записки',
	'app_assets_history' => 'История активов',
	'app_assets_management' => 'Управление активами',
	'app_slug' => 'Slug (ЧПУ)',
	'app_content_management' => 'Управление контентом',
	'app_text' => 'Текст',
	'app_excerpt' => 'Эксперт',
	'app_featured_image' => 'Популярные изображения',
	'app_pages' => 'Страницы',
	'app_axis' => 'Оси',
	'app_show' => 'Показать',
	'app_group_by' => 'Сортировать по',
	'app_chart_type' => 'Тип диаграммы',
	'app_create_new_report' => 'Создать новый отчет',
	'app_no_reports_yet' => 'Пока нет ни одного отчета',
	'app_created_at' => 'Время создания',
	'app_updated_at' => 'Время последнего обновления',
	'app_deleted_at' => 'Время удаления',
	'app_reports_x_axis_field' => 'Ось-Х - пожалуйста выберете одно из полей даты/времени',
	'app_reports_y_axis_field' => 'Ось-У - пожалуйста выберете одно из полей даты/времени',
	'app_select_crud_placeholder' => 'Пожалуйста, выберете один из своих CRUD',
	'app_select_dt_placeholder' => 'Пожалуйста, выберете одно из полей даты/времени',
	'app_aggregate_function_use' => 'Какую агрегатную функцию использовать?',
	'app_x_axis_group_by' => 'Ось-Х группировать по',
	'app_x_axis_field' => 'Поле Оси Х (дата/время)',
	'app_y_axis_field' => 'Поле оси У',
	'app_integer_float_placeholder' => 'Пожалуйста выберете одно из числовых полей',
	'app_change_notifications_field_1_label' => 'Отправить уведомление пользователю по электронной почте',
	'app_select_users_placeholder' => 'Пожалуйста выберете одного из своих пользователей',
	'app_is_created' => 'создано',
	'app_is_updated' => 'обновлено',
	'app_is_deleted' => 'удалено',
	'app_notifications' => 'Уведомления',
	'app_notify_user' => 'Уведомить Пользователя',
	'app_create_new_notification' => 'Создать новое уведомление',
	'app_stripe_transactions' => 'Stripe Транзакции',
	'app_upgrade_to_premium' => 'Обновить пакет услуг до Премиум',
	'app_messages' => 'Сообщения',
	'app_you_have_no_messages' => 'У вас нет сообщений',
	'app_all_messages' => 'Все сообщения',
	'app_new_message' => 'Новое сообщение',
	'app_outbox' => 'Отправленные',
	'app_inbox' => 'Входящие',
	'app_recipient' => 'Получатель',
	'app_subject' => 'Тема сообщения',
	'app_message' => 'Сообщение',
	'app_send' => 'Отправить',
	'app_reply' => 'Ответить',
	'app_crud_title' => 'Заголовок CRUD',
	'app_crud_date_field' => 'Поле с типом \"дата\" выбранного CRUD',
	'app_prefix' => 'Префикс',
	'app_suffix' => 'Суффикс',
	'app_client_management' => 'Управление клиентами',
	'app_client_management_settings' => 'Управление клиентами,  настройки',
	'app_country' => 'Страна',
	'app_client_status' => 'Статус клиента',
	'app_clients' => 'Клиенты',
	'app_client_statuses' => 'Клиентские статусы',
	'app_currencies' => 'Валюты',
	'app_main_currency' => 'Основная валюта',
	'app_documents' => 'Документы',
	'app_file' => 'Файл',
	'app_income_source' => 'Источник дохода',
	'app_income_sources' => 'Источники дохода',
	'app_fee_percent' => 'Коэффициент вознаграждения',
	'app_note_text' => 'Текст примечания',
	'app_client' => 'Клиент',
	'app_start_date' => 'Дата начала',
	'app_budget' => 'Бюджет',
	'app_project_status' => 'Статус проекта',
	'app_project_statuses' => 'Статусы проекта',
	'app_transactions' => 'Транзакции',
	'app_transaction_types' => 'Типа транзакций',
	'app_transaction_type' => 'Тип транзакции',
	'app_transaction_date' => 'Дата транзакции',
	'app_currency' => 'Валюта',
	'app_current_password' => 'Текущий пароль',
	'app_new_password' => 'Новый пароль',
	'app_password_confirm' => 'Новый пароль еще раз',
	'app_dashboard_text' => 'Вы вошли в систему !',
	'app_forgot_password' => 'Забыли пароль?',
	'app_remember_me' => 'Напомнить',
	'app_login' => 'Войти',
	'app_change_password' => 'Сменить пароль',
	'app_csv' => 'CSV',
	'app_print' => 'Печать',
	'app_excel' => 'Excel',
	'app_copy' => 'Скопировать',
	'app_colvis' => 'Видимость колонок',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Сброс пароля',
	'app_reset_password_woops' => '<strong>Ой!</strong> Возникли проблемы со следующими подробностями:',
	'app_email_line1' => 'Вы получили это письмо так как поступила заявка на смену пароля для вашего аккаунта',
	'app_email_line2' => 'Если вы не запрашивали смену пароля, просто проигнорируйте это письмо. Ничего делать не нужно.',
	'app_email_greet' => 'Здравствуйте!',
	'app_email_regards' => 'С уважением',
	'app_confirm_password' => 'Подтвердите пароль',
	'app_if_you_are_having_trouble' => 'Если вы испытываете трудности, нажмите',
	'app_copy_paste_url_bellow' => 'кнопку, скопируйте ссылку и вставьте а адресную строку браузера',
	'app_please_select' => 'Пожалуйста, сделайте выбор',
	'app_when_crud' => 'Когда CRUD',
	'app_calendar_sources' => 'Источники календаря',
	'app_new_calendar_source' => 'Создать новый источник календаря',
	'app_label_field' => 'Поле для заголовка',
	'app_no_calendar_sources' => 'Еще нет источников календаря',
	'app_crud_event_field' => 'Поле заголовка мероприятия',
	'app_create_new_calendar_source' => 'Создать новый источник календаря',
	'app_edit_calendar_source' => 'Редактировать источник календаря',
	'app_custom_controller_index' => 'Индивидуальный контроллер',
	'global_title' => 'Ranieri V2 TAUA',
];