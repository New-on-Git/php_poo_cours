<?php
$routes = [
    "/" => [
        "name" => "app_index",
        "controller" => "M2i\\Poo\\Controller\\AppController",
        "action" => "index"
    ],
    "/contact-us" => [
        "name" => "app_contact",
        "controller" => "M2i\\Poo\\Controller\\ContactController",
        "action" => "index"
    ],
    "/contact-us/delete" => [
        "name" => "app_contact_delete",
        "controller" => "M2i\\Poo\\Controller\\ContactController",
        "action" => "delete"
    ],
    "/contact-us/edit" => [
        "name" => "app_contact_edit",
        "controller" => "M2i\\Poo\\Controller\\ContactController",
        "action" => "edit"
    ]
];