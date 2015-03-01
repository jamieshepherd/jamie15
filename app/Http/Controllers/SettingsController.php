<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SettingsController extends Controller {

    /**
     * Edit the user settings
     *
     * @return Response
     */
    public function edit()
    {
        if(isset($_GET['theme'])) {
            $theme = $_GET['theme'];
            switch($theme) {
                case 'light':
                    session(['theme' => 'light']);
                    break;
                default:
                    session(['theme' => 'dark']);
                    break;
            }
        }
        return redirect()->back();
    }

}
