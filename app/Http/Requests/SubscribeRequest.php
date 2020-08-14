<?php

namespace App\Http\Requests;

use App\Models\EmailList;
use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    public function rules() : array
    {
        return [
            'email' => ['required', 'email', 'unique:email_list,email,'],
        ];
    }

}
