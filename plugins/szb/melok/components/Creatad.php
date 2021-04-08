<?php namespace Szb\Melok\Components;

use Cms\Classes\ComponentBase;
use Input;
//use Validator;
use Redirect;
use Flash;
use Szb\Melok\Models\Melo;

class Creatad extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Hirdetes feladasa',
            'description' => 'Hirdetes feladasa componens'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSave() {
        $ad = new Melo();
        //$ad-> ... = Input::get('');

        $ad->save();
        Flash::success('A hirdetés sikeresen feladva!');

        return Redirect::back();

    }
}
