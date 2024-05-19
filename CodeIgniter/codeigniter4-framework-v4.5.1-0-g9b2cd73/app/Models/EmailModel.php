<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{
    protected $table = 'emails';

    protected $allowedFields = ['title', 'recepient', 'body'];

    /**
     * @param false|string $slug
     *
     * @return array|null
     */

    public function getEmail($title = false)
    {
        if ($title === false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }
}