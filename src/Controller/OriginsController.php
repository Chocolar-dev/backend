<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class OriginsController extends AppController
{
    public function get()
    {
        $json = file_get_contents(DB_JSON . 'origins.json');

        return $this->response->withStringBody($json)->withType('json');
    }
}
