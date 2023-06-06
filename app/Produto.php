<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	//

	public function setSlugAttribute($value)
	{
		$this->attributes['titulo'] = str_slug($this->attributes['titulo']);
	}

	public function path()
	{
		return 'produtos/' . $this->slug;
	}
}
