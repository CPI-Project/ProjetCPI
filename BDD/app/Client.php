<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
public function billet()
{
return $this->hasOne('App\billet');
// $billet = client::find(1)->billet;


}




}
