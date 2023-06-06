<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class Conteudo extends Model {

	protected $fillable = [
		'titulo', 
		'id', 
		'pagina_id', 
		'slug', 
		'conteudo', 
		'revisao', 
	];

	public static function show($slug, $locale = null)
	{
		$locale = ! empty($locale) ? $locale : app()->getLocale();
		$conteudo = self::where('slug', $slug)->where('locale', $locale)->first();

		if (empty($conteudo)) {
			$conteudo = self::where('slug', $slug)->where('locale', config('app.fallback_locale'))->first();
		}

		if ( empty($conteudo)) {
			return new self;
		}

		// Caso o usuário esteja logado, então
		// garante os acessos a edição.
		if (Auth::check()) {
			return '<form action="' . url('aplicar') . '" method="post">
				<input name="_token" type="hidden" value="' . csrf_token() . '"/>
				<input name="slug" value=' . $conteudo->feature . ' type="hidden"/>
				<div class="tiny-cms" style="border: yellow 2px solid; padding: 20px; margin-top: -20px; margin-left: -20px;">' . $conteudo->revisao . '</div>
				<button type="submit" class="btn btn-xs btn-danger tiny-cms-apply" style="position: absolute; top: -10px; right: -10px; box-shadow: rgba(0, 0, 0, .6) 0 2px 30px; border: #fff 2px solid;"><i class="fas fa-save"></i> &ensp; Aplicar</button>
			</form>';
		}

		return $conteudo->conteudo;
	}

	public function pagina()
	{
		return $this->belongsTo('App\Pagina');
	}

	public function scopeId($query, $id)
	{
		return $query->where('id', $id);
	}

}
