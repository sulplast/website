<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model {

	protected $fillable = [
		'titulo', 
		'corpo', 
		'destaque', 
	];

	public function path()
	{
		return 'noticias/' . $this->slug;
	}
}
