<?php

declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class UserModel extends ShieldUserModel
{
    protected function initialize(): void
    {
        parent::initialize();

        $this->allowedFields = [
            ...$this->allowedFields,
        ];
    }

    public function getUserRoleDetail($userId)
    {
        $query = $this->db->table('users');
        $query->select('users.*, roles.name'); // Select fields from users and roles
        $query->join('roles', 'roles.id = users.role_id'); // Perform the join operation
        $query->where('users.id', $userId);
        
        $result = $query->get()->getRow();
        $numRows = $query->countAllResults(); // Get the number of rows returned
        
        if ($numRows > 0) {
            return $result;
        } else {   
            return null; 
        }
                
    }
}
