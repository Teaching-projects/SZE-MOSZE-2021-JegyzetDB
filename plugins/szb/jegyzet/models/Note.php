<?php namespace Szb\Jegyzet\Models;

use Model;

/**
*\Brief 
*Note model
*
*\class Model
*/
class Note extends Model
{
    use \October\Rain\Database\Traits\Validation;  /*!< namespace for Validation */
    
    use \October\Rain\Database\Traits\SoftDelete; /*!< Set bacause use SoftDelete support in CMS*/

    protected $dates = ['deleted_at'];  /*!< Set bacause use SoftDelete support in CMS*/


    /**
     * @var string The database table used by the model.
     */
    public $table = 'szb_jegyzet_'; /*!< table for this component */

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
	
    /*!< File attachments - polymorphic relationship.  */
	public $attachOne = [
    'pdf_file' => 'System\Models\File',
    'image' => 'System\Models\File',
	];
	

	
}
