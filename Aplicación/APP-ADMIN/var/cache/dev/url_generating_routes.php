<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'get_all_contenidos' => [[], ['_controller' => 'App\\Controller\\ApiContenidoController::getAll'], [], [['text', '/api/contenido/obtenerTodos']], [], [], []],
    'get_one_contenido' => [['idContenido'], ['_controller' => 'App\\Controller\\ApiContenidoController::obtenerUno'], [], [['variable', '/', '[^/]++', 'idContenido', true], ['text', '/api/contenido/obtener']], [], [], []],
    'delete_contenido' => [['idContenido'], ['_controller' => 'App\\Controller\\ApiContenidoController::borrar'], [], [['variable', '/', '[^/]++', 'idContenido', true], ['text', '/api/contenido/delete']], [], [], []],
    'update_contenido' => [['idContenido'], ['_controller' => 'App\\Controller\\ApiContenidoController::actualizar'], [], [['variable', '/', '[^/]++', 'idContenido', true], ['text', '/api/contenido/update']], [], [], []],
    'add_contenido' => [[], ['_controller' => 'App\\Controller\\ApiContenidoController::newContenido'], [], [['text', '/api/contenido/new']], [], [], []],
    'get_all_empleos' => [[], ['_controller' => 'App\\Controller\\ApiEmpleoController::getAll'], [], [['text', '/api/empleo/obtenerTodos']], [], [], []],
    'get_one_empleo' => [['idEmpleo'], ['_controller' => 'App\\Controller\\ApiEmpleoController::obtenerUno'], [], [['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/api/empleo/obtener']], [], [], []],
    'delete_empleo' => [['idEmpleo'], ['_controller' => 'App\\Controller\\ApiEmpleoController::borrar'], [], [['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/api/empleo/delete']], [], [], []],
    'update_empleo' => [['idEmpleo'], ['_controller' => 'App\\Controller\\ApiEmpleoController::actualizar'], [], [['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/api/empleo/update']], [], [], []],
    'add_empleo' => [[], ['_controller' => 'App\\Controller\\ApiEmpleoController::newEmpleo'], [], [['text', '/api/empleo/new']], [], [], []],
    'get_all_eventos' => [[], ['_controller' => 'App\\Controller\\ApiEventoController::getAll'], [], [['text', '/api/evento/obtenerTodos']], [], [], []],
    'get_one_evento' => [['idEvento'], ['_controller' => 'App\\Controller\\ApiEventoController::obtenerUno'], [], [['variable', '/', '[^/]++', 'idEvento', true], ['text', '/api/evento/obtener']], [], [], []],
    'delete_evento' => [['idEvento'], ['_controller' => 'App\\Controller\\ApiEventoController::borrar'], [], [['variable', '/', '[^/]++', 'idEvento', true], ['text', '/api/evento/delete']], [], [], []],
    'update_evento' => [['idEvento'], ['_controller' => 'App\\Controller\\ApiEventoController::actualizar'], [], [['variable', '/', '[^/]++', 'idEvento', true], ['text', '/api/evento/update']], [], [], []],
    'add_evento' => [[], ['_controller' => 'App\\Controller\\ApiEventoController::newRegion'], [], [['text', '/api/evento/new']], [], [], []],
    'get_all_usuarios' => [[], ['_controller' => 'App\\Controller\\ApiUsuarioController::getAll'], [], [['text', '/api/usuario/obtenerTodos']], [], [], []],
    'get_one_usuario' => [['idUsuario'], ['_controller' => 'App\\Controller\\ApiUsuarioController::obtenerUno'], [], [['variable', '/', '[^/]++', 'idUsuario', true], ['text', '/api/usuario/obtener']], [], [], []],
    'delete_usuario' => [['idUsuario'], ['_controller' => 'App\\Controller\\ApiUsuarioController::borrar'], [], [['variable', '/', '[^/]++', 'idUsuario', true], ['text', '/api/usuario/delete']], [], [], []],
    'update_usuario' => [['idUsuario'], ['_controller' => 'App\\Controller\\ApiUsuarioController::actualizar'], [], [['variable', '/', '[^/]++', 'idUsuario', true], ['text', '/api/usuario/update']], [], [], []],
    'add_usuario' => [[], ['_controller' => 'App\\Controller\\ApiUsuarioController::newUsuario'], [], [['text', '/api/usuario/new']], [], [], []],
    'contenido_index' => [[], ['_controller' => 'App\\Controller\\ContenidoController::index'], [], [['text', '/contenido/']], [], [], []],
    'contenido_new' => [[], ['_controller' => 'App\\Controller\\ContenidoController::new'], [], [['text', '/contenido/new']], [], [], []],
    'contenido_show' => [['idContenido'], ['_controller' => 'App\\Controller\\ContenidoController::show'], [], [['variable', '/', '[^/]++', 'idContenido', true], ['text', '/contenido']], [], [], []],
    'contenido_edit' => [['idContenido'], ['_controller' => 'App\\Controller\\ContenidoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idContenido', true], ['text', '/contenido']], [], [], []],
    'contenido_delete' => [['idContenido'], ['_controller' => 'App\\Controller\\ContenidoController::delete'], [], [['variable', '/', '[^/]++', 'idContenido', true], ['text', '/contenido']], [], [], []],
    'empleo_index' => [[], ['_controller' => 'App\\Controller\\EmpleoController::index'], [], [['text', '/empleo/']], [], [], []],
    'empleo_new' => [[], ['_controller' => 'App\\Controller\\EmpleoController::new'], [], [['text', '/empleo/new']], [], [], []],
    'empleo_show' => [['idEmpleo'], ['_controller' => 'App\\Controller\\EmpleoController::show'], [], [['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/empleo']], [], [], []],
    'empleo_edit' => [['idEmpleo'], ['_controller' => 'App\\Controller\\EmpleoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/empleo']], [], [], []],
    'empleo_delete' => [['idEmpleo'], ['_controller' => 'App\\Controller\\EmpleoController::delete'], [], [['variable', '/', '[^/]++', 'idEmpleo', true], ['text', '/empleo']], [], [], []],
    'evento_index' => [[], ['_controller' => 'App\\Controller\\EventoController::index'], [], [['text', '/evento/']], [], [], []],
    'evento_new' => [[], ['_controller' => 'App\\Controller\\EventoController::new'], [], [['text', '/evento/new']], [], [], []],
    'evento_show' => [['idEvento'], ['_controller' => 'App\\Controller\\EventoController::show'], [], [['variable', '/', '[^/]++', 'idEvento', true], ['text', '/evento']], [], [], []],
    'evento_edit' => [['idEvento'], ['_controller' => 'App\\Controller\\EventoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idEvento', true], ['text', '/evento']], [], [], []],
    'evento_delete' => [['idEvento'], ['_controller' => 'App\\Controller\\EventoController::delete'], [], [['variable', '/', '[^/]++', 'idEvento', true], ['text', '/evento']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
];
