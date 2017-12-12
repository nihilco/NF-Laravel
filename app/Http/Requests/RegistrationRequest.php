<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Mail;
use App\Mail\RegistrationComplete;
use App\Mail\EmailVerification;
use Carbon\Carbon;

class RegistrationRequest extends FormRequest
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
	    'username' => 'required|unique:users',
	    'birthday' => 'required|date',
	    'email' => 'required|email|unique:users',
	    'password' => 'required|confirmed',
	    'password_confirmation' => 'required',
	    'agreed' => 'required|boolean',
        ];
    }

    public function persist()
    {
    	$user = User::create([
	     'name' => $this->name,
	     'username' => $this->username,
	     'birthday' => Carbon::parse($this->birthday)->toDateString(),
	     'email' => $this->email,
	     'password' => bcrypt($this->password),
	]);

	auth()->login($user);

	Mail::to($user)->send(new RegistrationComplete($user));	
	Mail::to($user)->send(new EmailVerification($user));
    }

}
