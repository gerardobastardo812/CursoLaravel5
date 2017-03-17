<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Movie extends Model {

	protected $table = "Movies";

	protected $fillable = ['name', 'path', 'cast', 'direction', 'duration', 'genre_id'];

	public function setPathAttribute($path){
		if(!empty($path)){
			$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
			$name = Carbon::now()->second.$path->getClientOriginalName();
			\Storage::disk('local')->put($name, \File::get($path));
		}	
	}

	public static function Movies(){
		return DB::table('movies')
		->join('genres','genres.id','=','movies.genre_id')
		->select('movies.*','genres.genre')
		->get();
	}

}
