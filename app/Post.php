<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */

class Post extends Model
{
/* можно конкретизировать имя таблицы, с которой должна работать эта модель */
//    protected $table = 'my_posts';

/* если нет поля id, указываем поле первичного ключа */
//    protected $primaryKey = 'post_id';

/* если поле не id (не числовое) и не автоинкрементируемое */
//    public $incrementing = false;
//    protected $keyType = 'string';

/* если не нужно автозаполнение полей created_at updated_at, устанавливаем false */
//    public $timestamps = false;

/* свойство для автоматического заполнения полей в таблице */
    /*protected $attributes = [
        'content' => 'Lorem ipsum...',

    ];*/

    protected $fillable = ['title', 'content'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

}
