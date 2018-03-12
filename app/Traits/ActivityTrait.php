<?php

namespace App\Traits;

use App\Models\Activity;

trait ActivityTrait
{
    protected static function bootActivityTrait()
    {
        //if(auth()->guest()) return;

        //foreach(static::getActivitiesToRecord() as $event) {
        //    static::$event(function ($model) use ($event) {
        //        $model->recordActivity($event);
        //    });
        //}
        
        static::deleting(function ($model) {
            $model->activity()->delete();
        });
    }
    
    protected static function getActivitiesToRecord()
    {
        return ['created'];
    }

    protected function recordActivity($event)
    {
        $this->activity()->create([
            'creator_id' => auth()->guest() ? '1' : auth()->id(),
            'owner_id' => auth()->guest() ? '1' : auth()->id(),
            'type_id' => $this->getActivityType($event)->id,
        ]);
    }

    protected function getActivityType($event)
    {
        //$type = str_plural(strtolower((new \ReflectionClass($this))->getShortName()));
        $type = strtolower((new \ReflectionClass($this))->getShortName());

        //return "{$type}.{$event}";
        return \App\Models\Type::where([
            ['model', '=', \App\Models\Activity::class],
            ['slug', '=', "{$type}-{$event}"],
        ])->first();
    }

    public function activity()
    {
        return $this->morphMany(\App\Models\Activity::class, 'resource');
    }
}