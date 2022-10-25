<?php

namespace App\Models;



class Article 
{
    public static function all() {
        return [

            
                            ['titel'  => 'Lorem libero donec',
                            'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.',
                            'name' => 'John Smith',
                            'job' => 'doctor'
                            ],
                            ['titel'  => 'Lorem libero donec',
                            'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.',
                            'name' => 'John Smith1',
                            'job' => 'engineer'
                            ],
                            ['titel'  => 'Lorem libero donec',
                            'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Donec id elit non mi porta gravida at eget metus.',
                            'name' => 'John Smith6',
                            'job' => 'doctor4'
                            ]
                ] ;
    }

    public static function find($job){

        $articles = self::all();

        foreach($articles as $article){
         
            if($article['job'] == $job){
                    return $article;
            }
        }
    }
}
