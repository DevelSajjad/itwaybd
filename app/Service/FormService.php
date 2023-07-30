<?php
namespace App\Service;

use App\Models\Service;

class FormService {
    /**
     * Store Form
     * 
     * @param array $data 
     */
    public function store($data)
    {
        if (Service::insert($data['data'])) {
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