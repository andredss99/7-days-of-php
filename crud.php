<?php

function crud_create($user) {
    if (empty($user)) {
        return;
    }

    $users_db = __DIR__ . SLASH . 'data/users.json';

    $users_list = json_decode(file_get_contents($users_db));
    $users_list[] = $user['person'];

    file_put_contents($users_db, json_encode($users_list));

    header('Location: /?page=login');
}