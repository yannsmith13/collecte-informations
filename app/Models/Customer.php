<?php

namespace App\Models;

use App\Models\Graph;
use App\Models\Image;
use App\Models\Detail;
use App\Models\Reason;
use App\Models\Inspiration;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'last_update',

        'nom', 'prenom', 'tel', 'email',

        'society_name', 'siret', 'tva', 'society_tel', 'society_email', 'adresse', 'adresse2', 'zip', 'city',

        'reseaux_sociaux', 'sites_webs', // nullable

        'hosting', // bool
        'wished_domain', // nullable

        'budget', // nullable
        'wished_prestations', // nullable

        'other_reasons', // nullable

        'additionnal_informations', // nullable

        

        'how_mcts', // nullable
    ];



    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function link_form()
    {
        $link = "data-collect.test/formulaire/" . $this->uuid;
        return $link;
    }

    public function date_update()
    {
        return Carbon::parse($this->last_update)->format('d-m-Y');
    }



    // RELATIONSHIPS
    public function reasons()
    {
        return $this->belongsToMany(Reason::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function graph()
    {
        return $this->hasOne(Graph::class);
    }

    public function detail()
    {
        return $this->hasOne(Detail::class);
    }

    public function inspiration()
    {
        return $this->hasOne(Inspiration::class);
    }
}
