<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPage extends Model
{
    use HasFactory;

    protected $fillable = [
       'slug',
       'seo_title',
       'seo_description',
       'h1',
       'description',
    ];

    public $timestamps = false;

    /**
     * Create unuqie slug for info pages
     *
     * @return string
     */
    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }


	protected static function boot()
    {
        parent::boot();

        static::created(function ($infopage) {

            $infopage->slug = $infopage->createSlug($infopage->seo_title);

            $infopage->save();
        });
    }

}
