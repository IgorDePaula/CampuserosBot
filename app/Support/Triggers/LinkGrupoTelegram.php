<?php

namespace App\Support\Triggers;

class LinkGrupoTelegram extends Trigger
{
    protected $triggers = [
        '/linkgrupotelegram',
    ];

    protected $responses = [
        'Ooopa! Aqui está: https://telegram.me/CampuserosClub',
    ];
}
