<?php
namespace App\Models;

use CodeIgniter\Model;
class DealerModel extends Model
{
    protected $table = 'dealers';  // Replace with your table name
    protected $primaryKey = 'id';   // Adjust according to your primary key

    protected $allowedFields = [
        'Acct_Name', 'Fed_Tax_Number', 'EIN_Nbr', 'Duns_Number', 'Multiple_Locations',
        'Individual_Billing', 'Sls_Agnt_ID', 'Dlr_Affiliate_Fee_Pct', 'Acct_Type_Cd',
        'Acct_Type_Desc', 'Wholesale_Flg', 'created_at', 'updated_at', 'deleted_at'
    ];

    // If you are using soft deletes
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    // If you want CodeIgniter to handle the timestamps automatically
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    
}

?>