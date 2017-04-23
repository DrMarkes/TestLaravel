<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Article
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $img
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $alias
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereImg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'name',
        'text',
        'img',

    ];
    protected $dates = ['deleted_at'];

    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }
}
