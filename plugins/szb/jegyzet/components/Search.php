<?php namespace Szb\Jegyzet\Components;

    /** \brief UploadNote component
    * \class ComponentBase, Note, Input
    */

use Cms\Classes\ComponentBase;
use Szb\Jegyzet\Models\Note;
use Input;

class Search extends ComponentBase
{
    /** \brief Component Details
      * \param none
      * \return the name and description of the component
    */
    public function componentDetails()
    {
        return [
            'name'        => 'search Component',
            'description' => 'összetett kereső.'
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

        /** \brief onRun - run before the page is being redered
      * \param none
      * \return none
    */
    public function onRun()
    {
        $this->notes=$this->searching(); /*!< set the searching function return value*/
    }

     /** \brief searching
      * \param none
      * \return array of results
    */
    public function searching() {
        $properties = Input::get("properties"); /*!< get properties from form */
        $subject = Input::get("subject"); /*!< get subject from form */
        $faculty = Input::get("faculty"); /*!< get faculty from form */

        $query = Note::paginate(3); /*!< get all Note item */

        if($properties) {
            $query = Note::where('title', 'like', "%${properties}%")->orWhere('subject', 'like', "%${properties}%")->paginate(3); /*!< select result from title and subject useing 'like' sql statement and paginate */
        }

        if($subject) {
            $query = Note::where('subject', '=', $subject)->paginate(12); /*!< select result from title and subject useing 'like' sql statement and paginate */
        }

        if($faculty) {
            $query = Note::where('faculty', '=', $faculty)->paginate(12); /*!< select result from title and subject useing 'like' sql statement and paginate */

        }

        return $query; /*!< return with results */

    }

    /*!< make public all notes to frontende*/
    public $notes;
}
