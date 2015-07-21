<?php namespace App\Models;

use App\Components\Core\BaseModel;

class TestModel extends BaseModel
{
    /**
     * @return bool|string
     */
    public function getTitle()
    {
        $result = $this->db->query('SELECT first_name, last_name FROM re_account_user WHERE id = 16');

        if ($result)
        {
            return $result['first_name'] . ' ' . $result['last_name'];
        }

        return false;
    }
}
