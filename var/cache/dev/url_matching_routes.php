<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/gestion/utilisateur' => [[['_route' => 'gestion_utilisateur', '_controller' => 'App\\Controller\\GetApiController::gestionUtilisateur'], null, null, null, false, false, null]],
        '/gestion/agences' => [[['_route' => 'gestion_agences', '_controller' => 'App\\Controller\\GetApiController::gestionAgences'], null, null, null, false, false, null]],
        '/gestion/vehicules' => [[['_route' => 'gestion_vehicules', '_controller' => 'App\\Controller\\GetApiController::gestionVehicules'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/\\.well\\-known/genid/([^/]++)(*:36)'
                .'|/(index)?(?:\\.([^/]++))?(*:67)'
                .'|/d(?'
                    .'|ocs(?:\\.([^/]++))?(*:97)'
                    .'|elete/gestion/utilisateur/([^/]++)(*:138)'
                .')'
                .'|/contexts/([^.]+)(?:\\.(jsonld))?(*:179)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:215)'
                .'|/patch/(?'
                    .'|disable/gestion/(?'
                        .'|utilisateur/([^/]++)(*:272)'
                        .'|vehicules/([^/]++)(*:298)'
                    .')'
                    .'|enable/gestion/(?'
                        .'|utilisateur/([^/]++)(*:345)'
                        .'|vehicules/([^/]++)(*:371)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        97 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        138 => [[['_route' => 'patch_delete_gestion_utilisateur', '_controller' => 'App\\Controller\\PatchApiController::patchDeleteGestionUtilisateur'], ['userId'], ['GET' => 0, 'PATCH' => 1, 'DELETE' => 2], null, false, true, null]],
        179 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        215 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        272 => [[['_route' => 'patch_disable_gestion_utilisateur', '_controller' => 'App\\Controller\\PatchApiController::patchDisableGestionUtilisateur'], ['userId'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        298 => [[['_route' => 'patch_disable_gestion_vehicules', '_controller' => 'App\\Controller\\PatchApiController::patchDisableVehicule'], ['vehiculeId'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        345 => [[['_route' => 'patch_enable_gestion_utilisateur', '_controller' => 'App\\Controller\\PatchApiController::patchEnableGestionUtilisateur'], ['userId'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        371 => [
            [['_route' => 'patch_enable_gestion_vehicules', '_controller' => 'App\\Controller\\PatchApiController::patchEnableGestionVehicule'], ['vehiculeId'], ['GET' => 0, 'PATCH' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
