<?php

namespace App\Models;

class ClientCase extends Base
{
    protected $table = 'cases';
    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($clientCase) {
            \App\Models\CaseNote::create([
                'creator_id' => $clientCase->creator_id,
                'owner_id' => $clientCase->owner_id,
                'case_id' => $clientCase->id,
                'content' => 'Case created.',
                'created_at' => $clientCase->created_at->addSecond(),
                'updated_at' => $clientCase->updated_at->addSecond(),
            ]);
        });

        static::deleting(function ($clientCase) {
            $clientCase->notes()->each->delete();
        });
    }
    
    //
    public function path()
    {
        return '/cases/' . $this->id;
    }

    //
    public function client()
    {
	return $this->belongsTo(Client::class);
    }

    //
    public function type()
    {
	return $this->belongsTo(CaseType::class, 'case_type_id');
    }

    public function lastNote()
    {
        return $this->notes()->first();
    }

    //
    public function notes()
    {
        return $this->hasMany(CaseNote::class, 'case_id')->with(['owner'])->latest()->get();
    }

    public function settle()
    {
        \App\Models\CaseNote::create([
            'creator_id' => auth()->guest() ? 1 : auth()->id(),
            'owner_id' => auth()->guest() ? 1 : auth()->id(),
            //'account_id' => $this->account_id,
            'case_id' => $this->id,
            'content' => 'Case settled.'		
        ]);
        
        $this->date_settled_at = \Carbon\Carbon::now();
        $this->save();
    }
}
