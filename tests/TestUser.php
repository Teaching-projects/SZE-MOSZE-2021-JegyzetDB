<?php namespace RainLab\User\Models;

require_once 'PHPUnit/Autoload.php';

use \PHPUnit\Framework\TestCase;
use Auth;
use Event;
use Flash;
use Request;
use Redirect;
use Validator;
use ValidationException;
use ApplicationException;
use October\Rain\Auth\AuthException;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Models\Settings as UserSettings;
use Exception;

/** @test */
class TestUser extends \PHPUnit\Framework\TestCase
{
    public function TestonRegister()
    {
        try {
            $user = Auth::user();
            if (Auth::check()) {
                // The user is logged in...
                dd('the user is logged in'); 
            }
        }
        catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
    }

}
