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
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Ver',
	'app_update' => 'Actualizar',
	'app_list' => 'Listar',
	'app_no_entries_in_table' => 'Sin valores en la tabla',
	'app_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'app_logout' => 'Salir',
	'app_add_new' => 'Agregar',
	'app_are_you_sure' => 'Estás seguro?',
	'app_back_to_list' => 'Regresar a la lista?',
	'app_dashboard' => 'Tablero de control',
	'app_delete' => 'Eliminar',
	'app_restore' => 'Restaurar',
	'app_permadel' => 'Borrar permanentemente',
	'app_all' => 'Todos',
	'app_trash' => 'Papelera',
	'app_delete_selected' => 'Eliminar seleccionado',
	'app_category' => 'Categoría',
	'app_categories' => 'Categorias',
	'app_title' => 'Título',
	'app_roles' => 'Roles',
	'app_role' => 'Rol',
	'app_user_management' => 'Administración de usuarios',
	'app_users' => 'Usuarios',
	'app_user' => 'Usuario',
	'app_name' => 'Nombre',
	'app_email' => 'Correo',
	'app_password' => 'Contraseña',
	'app_remember_token' => 'Recordar token',
	'app_permissions' => 'Permisos',
	'app_client' => 'Cliente',
	'app_current_password' => 'Contraseña actual',
	'app_new_password' => 'Contraseña nueva',
	'app_password_confirm' => 'Confirmación de contraseña nueva',
	'app_dashboard_text' => 'Ha iniciado sesión',
	'app_forgot_password' => 'Olvidó su contraseña?',
	'app_remember_me' => 'Recuerdame',
	'app_login' => 'Iniciar sesión',
	'app_copy' => 'Copiar',
	'app_reset_password' => 'Reiniciar contraseña',
	'app_email_greet' => 'Hola',
	'app_confirm_password' => 'Confirmar contraseña',
	'app_please_select' => 'Por favor seleccione',
	'app_questions' => 'Preguntas',
	'app_question' => 'Pregunta',
	'app_answer' => 'Respuesta',
	'app_project' => 'Proyecto',
	'app_expenses' => 'Gastos',
	'app_expense' => 'Gasto',
	'app_amount' => 'Cantidad',
	'app_address' => 'Dirección',
	'app_contacts' => 'Contactos',
	'app_first_name' => 'Nombre',
	'app_last_name' => 'Apellido',
	'app_phone' => 'Teléfono',
	'app_category_name' => 'Nombre de categoría',
	'app_products' => 'Productos',
	'app_product_name' => 'Nombre de producto',
	'app_price' => 'Precio',
	'app_tag' => 'Etiqueta',
	'app_photo1' => 'Foto 1',
	'app_photo2' => 'Foto 2',
	'app_photo3' => 'Foto 3',
	'app_calendar' => 'Calendario',
	'app_tasks' => 'Tareas',
	'app_status' => 'Estado',
	'global_title' => 'Ranieri V2 TAUA',
];