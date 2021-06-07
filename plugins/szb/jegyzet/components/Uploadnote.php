<?php namespace Szb\Jegyzet\Components;

    /** \brief UploadNote component
    * \class ComponentBase, Input, Redirect, Flash, Note, Sluggable, File
    */
use Cms\Classes\ComponentBase;
use Input;
use Redirect;
use Flash;
use Szb\Jegyzet\Models\Note;
use \October\Rain\Database\Traits\Sluggable;
use System\Models\File;
use League\Flysystem\Exception;


class Uploadnote extends ComponentBase
{
        /** \brief Component Details
      * \param none
      * \return the name and description of the component
    */
    public function componentDetails()
    {
        return [
            'name'        => 'uploadnote Component', /*!< component name */
            'description' => 'Upload new note' /*!< component description */
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

        /** \brief Upload new note function
      * \param none
      * \return redirecting to homepage
    */

    public function onSubmit() {

        try {
            $note = new Note(); /*!< create new item */

            $note->title=Input::get('title'); /*!< get title */
            $note->author=Input::get('author'); /*!< get author */
            $note->appearance=Input::get('appearance'); /*!< get  appearenace*/
            $note->description=Input::get('description'); /*!< get  description */
            $note->faculty=Input::get('faculty'); /*!< get faculty */
            $note->subject=Input::get('subject'); /*!< get  subject */

            $note->is_pdf=(Input::has('is_pdf')) ? true : false;     /*!< get checkbox value of is pdf? */
    
            $note->image=Input::file('image'); /*!< get the cover img */

            $note->pdf_file=Input::file('pdf_file'); /*!< get the note pdf file */

            $note->slug=['slug' => 'title']; /*!< get  the title for slug*/
            $note->slug= str_slug( $note->title. "-"."$note->author" ); /*!< creating the slug using by title+author*/

            $note->save(); /*!< save the new data */

            Flash::success('A jegyzet sikeresen feltöltve!'); /*!< use flash massage after the save  */

            return Redirect::to('/'); /*!< redirect to homepage  */            
        }

        catch (Exception $exception) {
            Flash::Error('Hiba történt. Próbálja újra!'); /*!< Error Flash massage */

        }


    }

        /** \brief AJAX framework
      * \param none
      * \return the uploaded image
    */
    public function onImageUpload() {
        $image = Input::all(); /*!< get the input image  */
        $file = (new File())->fromPost($image['image']); /*!< crate the new img file  */

        return [
            '#imageResult' => '<img class="preview-image" src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >' /*!< create the new html element with img */
        ];
    }
}
