<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Mail;
use App\Mail\ContactMonitors;
use App\Mail\ContactReceipt;
use Carbon\Carbon;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
	    'name' => 'required',
	    'email' => 'required|email',
	    'phone' => 'required|digits:10',
	    'message' => 'required',
        ];
    }

    public function persist()
    {

        $monitors = ['Uriah' => 'uriah@nihil.co'];
        $monitors = [config('mail.contact.name') => config('mail.contact.address')];
        
        Mail::to($monitors)->send(new ContactMonitors($this));	
        Mail::to([$this->name => $this->email])->send(new ContactReceipt($this));
    }
    
}
