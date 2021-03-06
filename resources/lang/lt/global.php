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
	'app_save' => 'Išsaugoti',
	'app_update' => 'Atnaujinti',
	'app_list' => 'Sąrašas',
	'app_no_entries_in_table' => 'Įrašų nėra.',
	'app_create' => 'Sukurti',
	'app_edit' => 'Redaguoti',
	'app_view' => 'Peržiūrėti',
	'app_custom_controller_index' => 'Papildomo Controller\'io puslapis.',
	'app_logout' => 'Atsijungti',
	'app_add_new' => 'Pridėti naują',
	'app_are_you_sure' => 'Ar esate tikri?',
	'app_back_to_list' => 'Grįžti į sąrašą',
	'app_dashboard' => 'Pagrindinis',
	'app_delete' => 'Trinti',
	'app_restore' => 'Atstatyti',
	'app_permadel' => 'Ištrinti galutinai',
	'app_all' => 'Rodyti viską',
	'app_trash' => 'Rodyti ištrintus',
	'app_delete_selected' => 'Trinti pažymėtus',
	'app_category' => 'Kategorija',
	'app_categories' => 'Kategorijos',
	'app_sample_category' => 'Pavyzdinė kategorija',
	'app_time' => 'Laikas',
	'app_questions' => 'Klausimai',
	'app_question' => 'Klausimas',
	'app_answer' => 'Atsakymas',
	'app_sample_question' => 'Pavyzdinis klausimas',
	'app_sample_answer' => 'Pavyzdinis atsakymas',
	'app_faq_management' => 'DUK valdymas',
	'app_administrator_can_create_other_users' => 'Administratorius (gali kurti kitus vartotojus)',
	'app_title' => 'Pavadinimas',
	'app_roles' => 'Rolės',
	'app_role' => 'Rolė',
	'app_user_management' => 'Vartotojų valdymas',
	'app_users' => 'Vartotojai',
	'app_user' => 'Vartotojas',
	'app_name' => 'Vardas',
	'app_email' => 'El. Paštas',
	'app_password' => 'Slaptažodis',
	'app_user_actions' => 'Vartotojų veiksmai',
	'app_campaign' => 'Kampanija',
	'app_campaigns' => 'Kampanijos',
	'app_description' => 'Aprašymas',
	'app_valid_from' => 'Galioja nuo',
	'app_valid_to' => 'Galioja iki',
	'app_code' => 'Kodas',
	'app_time_management' => 'Laiko valdymas',
	'app_projects' => 'Projektai',
	'app_time_entries' => 'Laiko įrašai',
	'app_project' => 'Projektas',
	'app_expenses' => 'Išlaidos',
	'app_address' => 'Adresas',
	'app_contact_management' => 'Kontaktų valdymas',
	'app_contacts' => 'Kontaktai',
	'app_first_name' => 'Vardas',
	'app_last_name' => 'Pavardė',
	'app_product_management' => 'Produktų valdymas',
	'app_products' => 'Produktai',
	'app_price' => 'Kaina',
	'app_tags' => 'Žymos',
	'app_tag' => 'Žyma',
	'app_calendar' => 'Kalendorius',
	'app_statuses' => 'Būsenos',
	'app_task_management' => 'Užduočių valdymas',
	'app_tasks' => 'Užduotys',
	'app_status' => 'Būsena',
	'app_text' => 'Tekstas',
	'app_excerpt' => 'Ištrauka',
	'app_pages' => 'Puslapiai',
	'app_simple_user' => 'Paprastas vartotojas',
	'app_permissions' => 'Leidimai',
	'app_discount_amount' => 'Nuolaidos suma',
	'app_discount_percent' => 'Nuolaida procentais',
	'app_coupons_amount' => 'Kuponų kiekis',
	'app_coupons' => 'Kuponai',
	'app_coupon_management' => 'Kuponų valdymas',
	'app_reports' => 'Ataskaitos',
	'app_start_time' => 'Pradžios laikas',
	'app_end_time' => 'Pabaigos laikas',
	'app_expense_category' => 'Išlaidų kategorija',
	'app_expense_categories' => 'Išlaidų kategorijos',
	'app_expense_management' => 'Išlaidų valdymas',
	'app_expense' => 'Išlaidos',
	'app_companies' => 'Įmonės',
	'app_company_name' => 'Įmonės pavadinimas',
	'app_website' => 'Interneto svetainė',
	'app_company' => 'Įmonė',
	'app_phone' => 'Telefonas',
	'app_photo' => 'Nuotrauka (maks. 8 MB)',
	'app_category_name' => 'Kategorijos pavadinimas',
	'app_product_name' => 'Produkto pavadinimas',
	'global_title' => 'Ranieri V2 TAUA',
];