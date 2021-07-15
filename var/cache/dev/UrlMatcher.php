<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\Admin\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'admin_comment_new', '_controller' => 'App\\Controller\\Admin\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hotel' => [[['_route' => 'admin_hotel_index', '_controller' => 'App\\Controller\\Admin\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/hotel/new' => [[['_route' => 'admin_hotel_new', '_controller' => 'App\\Controller\\Admin\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages/new' => [[['_route' => 'admin_messages_new', '_controller' => 'App\\Controller\\Admin\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/room' => [[['_route' => 'admin_room_index', '_controller' => 'App\\Controller\\Admin\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting' => [[['_route' => 'setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting/new' => [[['_route' => 'setting_new', '_controller' => 'App\\Controller\\Admin\\SettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'home_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/components' => [[['_route' => 'home_components', '_controller' => 'App\\Controller\\HomeController::components'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'home_portfolio', '_controller' => 'App\\Controller\\HomeController::portfolio'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/hotel' => [[['_route' => 'user_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/hotel/new' => [[['_route' => 'user_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/image' => [[['_route' => 'user_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/sample' => [[['_route' => 'sample', '_controller' => 'App\\Controller\\SampleController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginuser' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::loginuser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/comments' => [[['_route' => 'user_comments', '_controller' => 'App\\Controller\\UserController::comments'], null, ['GET' => 0], null, false, false, null]],
        '/user/hotels' => [[['_route' => 'user_hotels', '_controller' => 'App\\Controller\\UserController::hotels'], null, ['GET' => 0], null, false, false, null]],
        '/user/reservations' => [[['_route' => 'user_reservations', '_controller' => 'App\\Controller\\UserController::reservations'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|omment/([^/]++)(?'
                            .'|(*:250)'
                            .'|/edit(*:263)'
                            .'|(*:271)'
                        .')'
                    .')'
                    .'|hotel/([^/]++)(?'
                        .'|(*:298)'
                        .'|/edit(*:311)'
                        .'|(*:319)'
                    .')'
                    .'|image/(?'
                        .'|new/([^/]++)(*:349)'
                        .'|([^/]++)(?'
                            .'|(*:368)'
                            .'|/(?'
                                .'|edit(*:384)'
                                .'|([^/]++)(*:400)'
                            .')'
                        .')'
                    .')'
                    .'|messages/([^/]++)(?'
                        .'|(*:431)'
                        .'|/edit(*:444)'
                        .'|(*:452)'
                    .')'
                    .'|r(?'
                        .'|eservation/(?'
                            .'|([^/]++)(*:487)'
                            .'|new(*:498)'
                            .'|show/([^/]++)(*:519)'
                            .'|([^/]++)(?'
                                .'|/edit(*:543)'
                                .'|(*:551)'
                            .')'
                        .')'
                        .'|oom/(?'
                            .'|new/([^/]++)(*:580)'
                            .'|([^/]++)(?'
                                .'|(*:599)'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:624)'
                                    .'|([^/]++)(*:640)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|setting/([^/]++)(?'
                        .'|(*:671)'
                        .'|/edit(*:684)'
                        .'|(*:692)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:717)'
                        .'|/edit(*:730)'
                        .'|(*:738)'
                    .')'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:769)'
                    .'|/edit(*:782)'
                    .'|(*:790)'
                .')'
                .'|/hotel/([^/]++)(*:814)'
                .'|/user/(?'
                    .'|hotel/([^/]++)(?'
                        .'|(*:848)'
                        .'|/edit(*:861)'
                        .'|(*:869)'
                    .')'
                    .'|image/(?'
                        .'|new/([^/]++)(*:899)'
                        .'|([^/]++)(?'
                            .'|(*:918)'
                            .'|/edit(*:931)'
                            .'|(*:939)'
                        .')'
                    .')'
                    .'|reservation/([^/]++)(*:969)'
                    .'|([^/]++)(?'
                        .'|(*:988)'
                        .'|/edit(*:1001)'
                        .'|(*:1010)'
                    .')'
                    .'|newcomment/([^/]++)(*:1039)'
                    .'|reservation/([^/]++)/([^/]++)(*:1077)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        250 => [[['_route' => 'admin_comment_show', '_controller' => 'App\\Controller\\Admin\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\Admin\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        298 => [[['_route' => 'admin_hotel_show', '_controller' => 'App\\Controller\\Admin\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'admin_hotel_edit', '_controller' => 'App\\Controller\\Admin\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'admin_hotel_delete', '_controller' => 'App\\Controller\\Admin\\HotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        349 => [[['_route' => 'admin_image_new', '_controller' => 'App\\Controller\\Admin\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        368 => [[['_route' => 'admin_image_show', '_controller' => 'App\\Controller\\Admin\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'admin_image_edit', '_controller' => 'App\\Controller\\Admin\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\ImageController::delete'], ['id', 'hid'], ['DELETE' => 0], null, false, true, null]],
        431 => [[['_route' => 'admin_messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'admin_messages_edit', '_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        452 => [[['_route' => 'admin_messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        487 => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\Admin\\ReservationController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\Admin\\ReservationController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'admin_reservation_show', '_controller' => 'App\\Controller\\Admin\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\Admin\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\Admin\\ReservationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        580 => [[['_route' => 'admin_room_new', '_controller' => 'App\\Controller\\Admin\\RoomController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        599 => [[['_route' => 'admin_room_show', '_controller' => 'App\\Controller\\Admin\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        624 => [[['_route' => 'admin_room_edit', '_controller' => 'App\\Controller\\Admin\\RoomController::edit'], ['id', 'hid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        640 => [[['_route' => 'admin_room_delete', '_controller' => 'App\\Controller\\Admin\\RoomController::delete'], ['id', 'hid'], ['DELETE' => 0], null, false, true, null]],
        671 => [[['_route' => 'setting_show', '_controller' => 'App\\Controller\\Admin\\SettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        684 => [[['_route' => 'setting_edit', '_controller' => 'App\\Controller\\Admin\\SettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        692 => [[['_route' => 'setting_delete', '_controller' => 'App\\Controller\\Admin\\SettingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        717 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        730 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        738 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        769 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        782 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        790 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        814 => [[['_route' => 'hotel_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        848 => [[['_route' => 'user_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        861 => [[['_route' => 'user_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        869 => [[['_route' => 'user_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        899 => [[['_route' => 'user_image_new', '_controller' => 'App\\Controller\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        918 => [[['_route' => 'user_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        931 => [[['_route' => 'user_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        939 => [[['_route' => 'user_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        969 => [[['_route' => 'user_reservation_show', '_controller' => 'App\\Controller\\UserController::reservationshow'], ['id'], ['GET' => 0], null, false, true, null]],
        988 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1001 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1010 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1039 => [[['_route' => 'user_new_comment', '_controller' => 'App\\Controller\\UserController::newcomment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1077 => [
            [['_route' => 'user_reservation_new', '_controller' => 'App\\Controller\\UserController::newreservation'], ['hid', 'rid'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
