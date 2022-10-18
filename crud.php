<?php

function crud_create($user) {
    $users_db = DATA_LOCATION;

    $users_list = json_decode(file_get_contents($users_db));
    $users_list[] = $user['person'];

    file_put_contents($users_db, json_encode($users_list));
}