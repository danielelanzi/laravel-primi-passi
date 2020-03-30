<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdController extends Controller
{
    public function index()
    {   //array di data
        $data = [
            //array di cds
            'cds' => [
                //array di contenuto
                [
                    'img' => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
                    'title' => 'New Jersey',
                    'slug' => 'new-jersey',
                    'author' => 'Bon Jovi',
                    'year' => 1988,
                    'genere' => 'folk'
                ],
                //array di contenuto
                [
                    'img' => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
                    'title' => 'Live at Wembley 86',
                    'slug' => 'live-at-wembley-86',
                    'author' => 'Queen',
                    'year' => 1992,
                    'genere' => 'pop'
                ],
                //array di contenuto
                [
                    'img' => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
                    'title' => "Ten's' 'Summoner's' Tales",
                    'slug' => 'ten-summoner-tales',
                    'author' => 'Sting',
                    'year' => 1993,
                    'genere' => 'folk'
                ],
                //array di contenuto
                [
                    'img' => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
                    'title' => 'Steve Gadd band',
                    'slug' => 'steve-gadd-band',
                    'author' => 'Steve Gadd band',
                    'year' => 2018,
                    'genere' => 'pop'
                ],
                //array di contenuto
                [
                    'img' => "https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg",
                    'title' => 'One more car, one more rider',
                    'slug' => 'one-more-car-one-more-rider',
                    'author' => 'Eric Clapton',
                    'year' => 2002,
                    'genere' => 'folk'
                ],
            ],
            //array di generi
            'generi' => [
                'folk',
                'pop'
            ]
        ]; 

        $cds = [
            //array di contenuto
            [
                'img' => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
                'title' => 'New Jersey',
                'author' => 'Bon Jovi',
                'year' => 1988
            ],
            //array di contenuto
            [
                'img' => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
                'title' => 'Live at Wembley 86',
                'author' => 'Queen',
                'year' => 1992
            ],
            //array di contenuto
            [
                'img' => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
                'title' => "Ten's' 'Summoner's' Tales",
                'author' => 'Sting',
                'year' => 1993
            ],
            //array di contenuto
            [
                'img' => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
                'title' => 'Steve Gadd band',
                'author' => 'Steve Gadd band',
                'year' => 2018
            ],
            //array di contenuto
            [
                'img' => "https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg",
                'title' => 'One more car, one more rider',
                'author' => 'Eric Clapton',
                'year' => 2002
            ],
        ];

        return view('cds', $data);

        // metodo compact
        // return view('cds', compact('cds'));
    }

    public function show($slug)
    {
        dd($slug);   
    }
}
