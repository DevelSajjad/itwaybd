<?php
namespace App\Service;

use App\Models\Seller;
use App\Models\Service;
use App\Models\Shop;

class ShopService {
    /**
     * Store Form
     * 
     * @param array $data 
     * 
     * @return array 
     */
    public function store($data)
    {   
        if (Shop::create($data)) {
            return [
                'status' => 'success',
                'message' => 'The form has been succesfully saved.'
            ];
        }
        
        return [
            'status' => 'fail',
            'message' => 'Something went wrong. Please try again.'
        ];
    }
}