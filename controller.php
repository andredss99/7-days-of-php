<?php

function do_register() {
    if (isset($_GET['from'])) {
        crud_create($_POST);
    }

    render_view('register');
}

function do_login() {
    render_view('login');
}

function do_not_found() {
    http_response_code(404);
    render_view('not_found');
}