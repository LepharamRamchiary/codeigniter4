<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    public function saveData($data): bool
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('register');

        // $result = $builder->insert($data);
        // if ($result->connID->affected_rows >=1) {
        //     return true;
        // } else {
        //     return false;
        // }

        $builder = $db->table('register');

        $result = $builder->insert($data);

        if (!$result) {
            // Log the error (optional)
            log_message('error', 'Failed to insert data: ' . $db->error());
        }

        return $result;
    }
}
