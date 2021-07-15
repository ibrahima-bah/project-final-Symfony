<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'admin_category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'admin_category_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_comment_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentController::index'], [], [['text', '/admin/comment/']], [], []],
    'admin_comment_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentController::new'], [], [['text', '/admin/comment/new']], [], []],
    'admin_comment_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_hotel_index' => [[], ['_controller' => 'App\\Controller\\Admin\\HotelController::index'], [], [['text', '/admin/hotel/']], [], []],
    'admin_hotel_new' => [[], ['_controller' => 'App\\Controller\\Admin\\HotelController::new'], [], [['text', '/admin/hotel/new']], [], []],
    'admin_hotel_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\HotelController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/hotel']], [], []],
    'admin_hotel_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\HotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/hotel']], [], []],
    'admin_hotel_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\HotelController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/hotel']], [], []],
    'admin_image_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ImageController::index'], [], [['text', '/admin/image/']], [], []],
    'admin_image_new' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/image/new']], [], []],
    'admin_image_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_image_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_image_delete' => [['id', 'hid'], ['_controller' => 'App\\Controller\\Admin\\ImageController::delete'], [], [['variable', '/', '[^/]++', 'hid'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_messages_index' => [[], ['_controller' => 'App\\Controller\\Admin\\MessagesController::index'], [], [['text', '/admin/messages/']], [], []],
    'admin_messages_new' => [[], ['_controller' => 'App\\Controller\\Admin\\MessagesController::new'], [], [['text', '/admin/messages/new']], [], []],
    'admin_messages_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_messages_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_messages_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_reservation_index' => [['slug'], ['_controller' => 'App\\Controller\\Admin\\ReservationController::index'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/admin/reservation']], [], []],
    'admin_reservation_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ReservationController::new'], [], [['text', '/admin/reservation/new']], [], []],
    'admin_reservation_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/reservation/show']], [], []],
    'admin_reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/reservation']], [], []],
    'admin_reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/reservation']], [], []],
    'admin_room_index' => [[], ['_controller' => 'App\\Controller\\Admin\\RoomController::index'], [], [['text', '/admin/room/']], [], []],
    'admin_room_new' => [['id'], ['_controller' => 'App\\Controller\\Admin\\RoomController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/room/new']], [], []],
    'admin_room_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\RoomController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/room']], [], []],
    'admin_room_edit' => [['id', 'hid'], ['_controller' => 'App\\Controller\\Admin\\RoomController::edit'], [], [['variable', '/', '[^/]++', 'hid'], ['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/room']], [], []],
    'admin_room_delete' => [['id', 'hid'], ['_controller' => 'App\\Controller\\Admin\\RoomController::delete'], [], [['variable', '/', '[^/]++', 'hid'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/room']], [], []],
    'setting_index' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::index'], [], [['text', '/admin/setting/']], [], []],
    'setting_new' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::new'], [], [['text', '/admin/setting/new']], [], []],
    'setting_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'setting_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'setting_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/user/']], [], []],
    'admin_user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::new'], [], [['text', '/admin/user/new']], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'hotel_show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/hotel']], [], []],
    'home_about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], []],
    'home_components' => [[], ['_controller' => 'App\\Controller\\HomeController::components'], [], [['text', '/components']], [], []],
    'home_portfolio' => [[], ['_controller' => 'App\\Controller\\HomeController::portfolio'], [], [['text', '/portfolio']], [], []],
    'home_contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/contact']], [], []],
    'user_hotel_index' => [[], ['_controller' => 'App\\Controller\\HotelController::index'], [], [['text', '/user/hotel/']], [], []],
    'user_hotel_new' => [[], ['_controller' => 'App\\Controller\\HotelController::new'], [], [['text', '/user/hotel/new']], [], []],
    'user_hotel_show' => [['id'], ['_controller' => 'App\\Controller\\HotelController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/hotel']], [], []],
    'user_hotel_edit' => [['id'], ['_controller' => 'App\\Controller\\HotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user/hotel']], [], []],
    'user_hotel_delete' => [['id'], ['_controller' => 'App\\Controller\\HotelController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/hotel']], [], []],
    'user_image_index' => [[], ['_controller' => 'App\\Controller\\ImageController::index'], [], [['text', '/user/image/']], [], []],
    'user_image_new' => [['id'], ['_controller' => 'App\\Controller\\ImageController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/image/new']], [], []],
    'user_image_show' => [['id'], ['_controller' => 'App\\Controller\\ImageController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/image']], [], []],
    'user_image_edit' => [['id'], ['_controller' => 'App\\Controller\\ImageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user/image']], [], []],
    'user_image_delete' => [['id'], ['_controller' => 'App\\Controller\\ImageController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/image']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'sample' => [[], ['_controller' => 'App\\Controller\\SampleController::index'], [], [['text', '/sample']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'login_user' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginuser'], [], [['text', '/loginuser']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_comments' => [[], ['_controller' => 'App\\Controller\\UserController::comments'], [], [['text', '/user/comments']], [], []],
    'user_hotels' => [[], ['_controller' => 'App\\Controller\\UserController::hotels'], [], [['text', '/user/hotels']], [], []],
    'user_reservations' => [[], ['_controller' => 'App\\Controller\\UserController::reservations'], [], [['text', '/user/reservations']], [], []],
    'user_reservation_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::reservationshow'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/reservation']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_new_comment' => [['id'], ['_controller' => 'App\\Controller\\UserController::newcomment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/newcomment']], [], []],
    'user_reservation_new' => [['hid', 'rid'], ['_controller' => 'App\\Controller\\UserController::newreservation'], [], [['variable', '/', '[^/]++', 'rid'], ['variable', '/', '[^/]++', 'hid'], ['text', '/user/reservation']], [], []],
];