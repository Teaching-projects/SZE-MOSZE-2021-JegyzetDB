<?php namespace Szb\Jegyzet\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Flash;
use League\Flysystem\Exception;


class Contact extends ComponentBase
{
    /** \brief Component Details
      * \param none
      * \return the name and description of the component
    */
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }
    /** \brief Properties for component
      * \param none
      * \return empty array other case settings of components
    */
    public function defineProperties()
    {
        return [];
    }

    /** \brief onSend - send massage
      * \param none
      * \return redirect to homepage
    */
    public function onSend(){

        try {
            $data = post(); /*!< use GET methode */

            $rules = [
                'name' => 'required|min:5', /*!< set values of name the validator*/
                'email' => 'required|email' /*!< set values of name the validator*/
            ];
    
            /*!< give values to validator */
        /** \brief Validator
          * \param data, rules
          * \return if validator succes, flash massage and after redirect to homapage
        */
            $validator = Validator::make($data, $rules);
    
            if($validator->fails()){
                throw new ValidationException($validator);
            } else {
                $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];
    
                Mail::send('szb.jegyzet::mail.message', $vars, function($message) {
    
                    $message->to('info@nextwebgen.hu', 'Admin Person');
                    $message->subject('New message from contact form');
    
                });
            }
    
            Flash::success('Üzenet sikeresen elküldve!'); /*!< Succes Flash massage */
    
            return Redirect::to('/'); /*!< Redirect to homapage */            
        }

        catch (Exception $exception) {
            Flash::Error('A küldés nem sikerült. Próbálja újra!'); /*!< Error Flash massage */
        }


    }
}
