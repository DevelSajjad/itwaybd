<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use App\Service\FormService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MultifieldController extends Controller
{
    /**
     * View Task One Page
     * 
     * @author ITWAYBD 
     * @contributor Sajjad <sajjad.develpr.gmail.com>
     * @created 28-07-23
     * 
     * @return \Illuminate\Contracts\View\View|
     */
    public function index()
    {
        return view('tasks.task1');
    }

    /**
     * Store Services in database
     * 
     * @param Request
     * @param $request
     * 
     * @return 
     */
    public function store(StoreServiceRequest $request, FormService $service)
    {
       return $service->store($request->validated());
    }
}
