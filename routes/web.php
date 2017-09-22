<?php
Route::get('/', function () { return view('welcome'); });

// Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('task_statuses', 'Admin\TaskStatusesController');
    Route::post('task_statuses_mass_destroy', ['uses' => 'Admin\TaskStatusesController@massDestroy', 'as' => 'task_statuses.mass_destroy']);
    Route::resource('task_tags', 'Admin\TaskTagsController');
    Route::post('task_tags_mass_destroy', ['uses' => 'Admin\TaskTagsController@massDestroy', 'as' => 'task_tags.mass_destroy']);
    Route::resource('tasks', 'Admin\TasksController');
    Route::post('tasks_mass_destroy', ['uses' => 'Admin\TasksController@massDestroy', 'as' => 'tasks.mass_destroy']);
    Route::resource('task_calendars', 'Admin\TaskCalendarsController');
    Route::resource('content_categories', 'Admin\ContentCategoriesController');
    Route::post('content_categories_mass_destroy', ['uses' => 'Admin\ContentCategoriesController@massDestroy', 'as' => 'content_categories.mass_destroy']);
    Route::resource('content_tags', 'Admin\ContentTagsController');
    Route::post('content_tags_mass_destroy', ['uses' => 'Admin\ContentTagsController@massDestroy', 'as' => 'content_tags.mass_destroy']);
    Route::resource('content_pages', 'Admin\ContentPagesController');
    Route::post('content_pages_mass_destroy', ['uses' => 'Admin\ContentPagesController@massDestroy', 'as' => 'content_pages.mass_destroy']);
    Route::resource('profiles', 'Admin\ProfilesController');
    Route::resource('minhaselecoes', 'Admin\MinhaselecoesController');
    Route::resource('elencos', 'Admin\ElencosController');
    Route::post('elencos_mass_destroy', ['uses' => 'Admin\ElencosController@massDestroy', 'as' => 'elencos.mass_destroy']);
    Route::post('elencos_restore/{id}', ['uses' => 'Admin\ElencosController@restore', 'as' => 'elencos.restore']);
    Route::delete('elencos_perma_del/{id}', ['uses' => 'Admin\ElencosController@perma_del', 'as' => 'elencos.perma_del']);
    Route::resource('aprovação_de_cadastros', 'Admin\AprovaçãoDeCadastrosController');
    Route::resource('produtoras', 'Admin\ProdutorasController');
    Route::post('produtoras_mass_destroy', ['uses' => 'Admin\ProdutorasController@massDestroy', 'as' => 'produtoras.mass_destroy']);
    Route::post('produtoras_restore/{id}', ['uses' => 'Admin\ProdutorasController@restore', 'as' => 'produtoras.restore']);
    Route::delete('produtoras_perma_del/{id}', ['uses' => 'Admin\ProdutorasController@perma_del', 'as' => 'produtoras.perma_del']);
    Route::resource('client_currencies', 'Admin\ClientCurrenciesController');
    Route::post('client_currencies_mass_destroy', ['uses' => 'Admin\ClientCurrenciesController@massDestroy', 'as' => 'client_currencies.mass_destroy']);
    Route::resource('client_transaction_types', 'Admin\ClientTransactionTypesController');
    Route::post('client_transaction_types_mass_destroy', ['uses' => 'Admin\ClientTransactionTypesController@massDestroy', 'as' => 'client_transaction_types.mass_destroy']);
    Route::resource('client_income_sources', 'Admin\ClientIncomeSourcesController');
    Route::post('client_income_sources_mass_destroy', ['uses' => 'Admin\ClientIncomeSourcesController@massDestroy', 'as' => 'client_income_sources.mass_destroy']);
    Route::resource('client_statuses', 'Admin\ClientStatusesController');
    Route::post('client_statuses_mass_destroy', ['uses' => 'Admin\ClientStatusesController@massDestroy', 'as' => 'client_statuses.mass_destroy']);
    Route::resource('client_project_statuses', 'Admin\ClientProjectStatusesController');
    Route::post('client_project_statuses_mass_destroy', ['uses' => 'Admin\ClientProjectStatusesController@massDestroy', 'as' => 'client_project_statuses.mass_destroy']);
    Route::resource('clients', 'Admin\ClientsController');
    Route::post('clients_mass_destroy', ['uses' => 'Admin\ClientsController@massDestroy', 'as' => 'clients.mass_destroy']);
    Route::resource('client_projects', 'Admin\ClientProjectsController');
    Route::post('client_projects_mass_destroy', ['uses' => 'Admin\ClientProjectsController@massDestroy', 'as' => 'client_projects.mass_destroy']);
    Route::resource('client_notes', 'Admin\ClientNotesController');
    Route::post('client_notes_mass_destroy', ['uses' => 'Admin\ClientNotesController@massDestroy', 'as' => 'client_notes.mass_destroy']);
    Route::resource('client_documents', 'Admin\ClientDocumentsController');
    Route::post('client_documents_mass_destroy', ['uses' => 'Admin\ClientDocumentsController@massDestroy', 'as' => 'client_documents.mass_destroy']);
    Route::resource('client_transactions', 'Admin\ClientTransactionsController');
    Route::post('client_transactions_mass_destroy', ['uses' => 'Admin\ClientTransactionsController@massDestroy', 'as' => 'client_transactions.mass_destroy']);
    Route::resource('client_reports', 'Admin\ClientReportsController');
    Route::resource('elencofotos', 'Admin\ElencofotosController');
    Route::post('elencofotos_mass_destroy', ['uses' => 'Admin\ElencofotosController@massDestroy', 'as' => 'elencofotos.mass_destroy']);
    Route::post('elencofotos_restore/{id}', ['uses' => 'Admin\ElencofotosController@restore', 'as' => 'elencofotos.restore']);
    Route::delete('elencofotos_perma_del/{id}', ['uses' => 'Admin\ElencofotosController@perma_del', 'as' => 'elencofotos.perma_del']);
    Route::resource('elenco_videos', 'Admin\ElencoVideosController');
    Route::post('elenco_videos_mass_destroy', ['uses' => 'Admin\ElencoVideosController@massDestroy', 'as' => 'elenco_videos.mass_destroy']);
    Route::post('elenco_videos_restore/{id}', ['uses' => 'Admin\ElencoVideosController@restore', 'as' => 'elenco_videos.restore']);
    Route::delete('elenco_videos_perma_del/{id}', ['uses' => 'Admin\ElencoVideosController@perma_del', 'as' => 'elenco_videos.perma_del']);
    Route::resource('selecoesv2s', 'Admin\Selecoesv2sController');
    Route::post('selecoesv2s_mass_destroy', ['uses' => 'Admin\Selecoesv2sController@massDestroy', 'as' => 'selecoesv2s.mass_destroy']);
    Route::post('selecoesv2s_restore/{id}', ['uses' => 'Admin\Selecoesv2sController@restore', 'as' => 'selecoesv2s.restore']);
    Route::delete('selecoesv2s_perma_del/{id}', ['uses' => 'Admin\Selecoesv2sController@perma_del', 'as' => 'selecoesv2s.perma_del']);
    Route::resource('selecaoelencos', 'Admin\SelecaoelencosController');
    Route::post('selecaoelencos_mass_destroy', ['uses' => 'Admin\SelecaoelencosController@massDestroy', 'as' => 'selecaoelencos.mass_destroy']);
    Route::post('selecaoelencos_restore/{id}', ['uses' => 'Admin\SelecaoelencosController@restore', 'as' => 'selecaoelencos.restore']);
    Route::delete('selecaoelencos_perma_del/{id}', ['uses' => 'Admin\SelecaoelencosController@perma_del', 'as' => 'selecaoelencos.perma_del']);
    Route::resource('filtros', 'Admin\FiltrosController');

    Route::model('messenger', 'App\MessengerTopic');
    Route::get('messenger/inbox', 'Admin\MessengerController@inbox')->name('messenger.inbox');
    Route::get('messenger/outbox', 'Admin\MessengerController@outbox')->name('messenger.outbox');
    Route::resource('messenger', 'Admin\MessengerController');

});
