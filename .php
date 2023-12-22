<?php



namespace App\Http\Controllers;



use App\Traits\GetUrl;

use Illuminate\Http\Request;



class MatchController extends Controller

{

    use GetUrl;

    public function yesterday(){

        $api = $this->geturl('https://stad.yalla-shoot.io/matches-yesterday9/');

        return $api;

    }

    public function today(){

        $api = $this->geturl('https://stad.yalla-shoot.io/');

        return $api;

    }

    public function tomorrow(){

        $api = $this->geturl('https://stad.yalla-shoot.io/matches-tomorrow9/');

        return $api;

    }

}
