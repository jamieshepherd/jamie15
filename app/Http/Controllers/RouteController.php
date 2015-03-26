<?php namespace App\Http\Controllers;

use Auth;
use Mail;
use Request;

use App\Http\Requests;
use App\Http\Requests\SendContactRequest;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{

    /**
     * Send a mail from the contact form
     *
     * @param SendContactRequest $request
     * @return Response
     * @internal param int $id
     */
	public function postContact(SendContactRequest $request)
	{
        Mail::raw('Text to e-mail', function($message)
        {
            $message->from('us@example.com', 'Laravel');
        });
	}

}
