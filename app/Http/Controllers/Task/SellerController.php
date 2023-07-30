<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerRequest;
use App\Service\SellerService;
use App\Service\UserService;
use App\Service\ShopService;
use Illuminate\Http\Request;

class SellerController extends Controller
{   
    private $userService;
    private $sellerService;
    private $shopService;

    public function __construct(UserService $userService, SellerService $sellerService, ShopService $shopService)
    {
        $this->userService = $userService;
        $this->sellerService = $sellerService;
        $this->shopService = $shopService;
    }
    /**
     * View Seller Registration Page
     * 
     * @author itwaybd
     * @contributor Sajjad <sajjad.develpr@gmail.com>
     * @created 28-07-23
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('tasks.task2');
    }

    /**
     * View Seller Registration Page
     * 
     * @author itwaybd
     * @contributor Sajjad <sajjad.develpr@gmail.com>
     * @created 28-07-23
     * 
     * @return $shop 
     */
    public function store(StoreSellerRequest $request)
    {   
        try {
            \DB::beginTransaction();

            $user = $this->userService->store($request->validated());

            $seller = $this->sellerService->store($request->validated() + ['user_id' => $user->id]);

            $shop = $this->shopService->store($request->validated() + ['seller_id' => $seller->id]);
            
            return $shop;
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
        }
        
    }

}
