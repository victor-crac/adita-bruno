<?php

namespace App\Models;

use DGvai\Review\Reviewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \Conner\Tagging\Taggable;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Campaign extends Model implements AuditableContract
{
    use HasFactory, Auditable, Reviewable, Sluggable, Taggable;

    protected $fillable = [
        'name',
        'banner',
        'currency_id',
        'min_amount',
        'target_amount',
        'is_open',
        'allow_installment_payments',
        'description',
        'active'
    ];


    public function campaigner() {
        return $this->belongsTo(Campaigner::class);
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string {
        return 'slug';
    }


    public function users() {
        return $this->belongsToMany(User::class)->withPivot(['active'])->withTimestamps();
    }
    //Track who added this campaign
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function currency() {
        return $this->belongsTo(Currency::class);
    }

    public function files() {
        return $this->morphMany(File::class, 'fileable');
    }
}
