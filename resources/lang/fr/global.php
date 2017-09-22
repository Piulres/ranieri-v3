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
	'app_create' => 'Créer',
	'app_save' => 'Sauver',
	'app_edit' => 'Modifier',
	'app_restore' => 'Restaurer',
	'app_permadel' => 'Supprimer définitivement',
	'app_all' => 'Tous',
	'app_trash' => 'Poubelle',
	'app_view' => 'Voir',
	'app_update' => 'Mettre à jour',
	'app_list' => 'Liste',
	'app_logout' => 'Déconnexion',
	'app_add_new' => 'Nouveau',
	'app_are_you_sure' => 'Êtes-vous certain ?',
	'app_back_to_list' => 'Retour à la liste',
	'app_dashboard' => 'Tableau de bord',
	'app_delete' => 'Supprimer',
	'app_delete_selected' => 'Supprimer sélectionnés',
	'app_category' => 'Catégorie',
	'app_categories' => 'Catégories',
	'app_please_select' => 'Slectionner',
	'global_title' => 'Ranieri V2 TAUA',
];