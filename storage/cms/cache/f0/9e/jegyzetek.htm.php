<?php 
use Szb\Jegyzet\Models\Note;class Cms60be09683849a361186924_5df27fb4170c1049d0a37fc4f56a88c1Class extends Cms\Classes\PageCode
{


public function onStart() {
	$this['faculties'] = Db::table('szb_jegyzet_')->select('faculty')->distinct()->get();
	$this['subjects'] = Db::table('szb_jegyzet_')->select('subject')->distinct()->get();
}
}
