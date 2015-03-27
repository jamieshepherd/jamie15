<?php namespace App\Http\Controllers;

use Auth;
use Hash;
use Input;
use Mail;
use Request;

use App\Http\Requests;
use App\Http\Requests\SendContactRequest;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the projects page
     *
     * @return redirect
     */
    public function showProjects()
    {
        return view('projects');
    }

    /**
     * Show the contact form
     *
     * @return redirect
     */
    public function showContact()
    {
        return view('contact');
    }

    /**
     * Send a mail from the contact form
     *
     * @param SendContactRequest $request
     * @return redirect
     */
	public function postContact(SendContactRequest $request)
	{
        $data = array(
            'name'    => $request->name,
            'email'   => $request->email,
            'content' => $request->message
        );

        Mail::send('emails.contact', $data, function($message)
        {
            $message->to('itsjamieshepherd@gmail.com')->subject('jamie.sh - Contact form');
        });

        session()->flash('message', 'Thanks! Your message was sent successfully.');
        return redirect()->back();
	}

    public function getChangePassword()
    {
        return view('admin.password');
    }

    public function postChangePassword()
    {
        $user           = Auth::user();
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return redirect('/admin');
    }

}
