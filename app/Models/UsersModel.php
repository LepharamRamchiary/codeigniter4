<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function getData()
    {
        $subject = [
            ['sub' => 'html', 'desc' => 'sfsdsdsd'],
            ['sub' => 'css', 'desc' => 'sfsdsdsdsdfgdsfgfdg']
        ];
        return $subject;
    }

    public function getBlogList()
    {
        $db = \Config\Database::connect();
        $q = $db->query("SELECT `blogid`, `blog_title`, `blog_img`, `status` FROM `articles` ");

        // Associative Array
        // $result = $q->getResultArray();
        // foreach ($result as $row) {
        //     echo $row['blog_id'];
        //     echo $row['blog_title'];
        // }

        // Array of Objects
        $result = $q->getResult();
        // foreach ($result as $row) {
        //     echo $row->blog_id;   // Assuming 'blog_id' is a column in your table
        //     echo $row->blog_title;
        // }

        // Single Row as an Object
        // $result = $q->getResultArray();
        // if ($row) {
        //     echo $row->blog_id;
        //     echo $row->blog_title;
        // }

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
