<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use MongoDB\Client as Mongo;


class MongoTestController extends Controller
{
    function mongoConnect()
    {
        $mongo = new Mongo;
        $connection = $mongo->laravel_mongodb->user_information;
        $response =  $connection->find()->toArray();

        // echo $response[0]->fname;
        return view("index",["data"=>$response]);
    }
}
