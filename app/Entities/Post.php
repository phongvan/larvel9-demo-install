<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait,LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','state','url_image'];
    protected static array $logAttributes = ['title', 'description','state','url_image'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'description'])
            //->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}")
        ->useLogName('system');

        ;

       /* $logOption = new LogOptions();
        return $logOption->logFillable();*/

        // TODO: Implement getActivitylogOptions() method.
    }
}
