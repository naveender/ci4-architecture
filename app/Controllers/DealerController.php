<?php

namespace App\Controllers;

class DealerController extends BaseController
{
   protected $auth;
   protected $models = ['DealerModel'];
    public function __construct()
    {
        // Load the authentication service in the constructor
        $this->auth = service('authentication');
    }

    public function index(){
      return view('admin/create_dealer');
    }

    public function add(){

      $accountModel = new DealerModel();

        $data = [
            'Acct_Name' => 'Example Account',
            'Fed_Tax_Number' => '123456789',
            'EIN_Nbr' => '987654321',
            'Duns_Number' => '54321',
            'Multiple_Locations' => false,
            'Individual_Billing' => false,
            'Sls_Agnt_ID' => 1,
            'Dlr_Affiliate_Fee_Pct' => 15.25,
            'Acct_Type_Cd' => 'Type1',
            'Acct_Type_Desc' => 'This is an example account type description',
            'Wholesale_Flg' => 0,
            
        ];

        if($accountModel->insert($data)) {
            return 'Account created successfully';
        } else {
            return 'Failed to create account';
        }
    }

    public function edit($id){

    }

    public function delete(){

    }
}
