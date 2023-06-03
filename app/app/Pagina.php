<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model {

	protected $fillable = [
		'titulo', 
		'slug', 
		'meta_title', 
		'meta_description', 
		'meta_keywords', 
		'meta_misc', 
	];

	public function paginas()
	{
		return $this->hasMany('App\Pagina');
	}

	public function conteudos()
	{
		return $this->hasMany('App\Conteudo');
	}

	public function scopePrincipais($query)
	{
		return $query->whereNull('pagina_id');
	}

	public static function returnPage($slug)
	{
		$pages = self::where('slug', $slug)->get();
		$page = $pages->where('locale', app()->getLocale())->first();
		return ! empty($page) ? $page : $pages->where('locale', config('app.fallback_locale'))->first();
	}

}
