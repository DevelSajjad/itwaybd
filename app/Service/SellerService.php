<?php
namespace App\Service;

use App\Models\Seller;

class SellerService {
    /**
     * Store Form
     * 
     * @param array $data 
     * 
     * @return array $seller
     */
    public function store($data)
    {   
        $seller = Seller::create($data);
      
        return $seller;
    }
}