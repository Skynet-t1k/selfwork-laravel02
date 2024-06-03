<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public $services = [
        ['id' => '1', 'nomeservizio' => 'Tour Interattivi di Mondi Fantastici', 'descservizio' => "Offri ai lettori un'esperienza unica con tour virtuali interattivi di pianeti e mondi alieni. Grazie alla tecnologia olografica avanzata, i visitatori possono esplorare paesaggi straordinari, incontrare creature bizzarre e scoprire civiltà aliene senza mai lasciare il comfort della propria casa.", 'urlservizio' => "/images/virtual.webp"],
        ['id' => '2', 'nomeservizio' => 'Creazione di Avatar Galattici', 'descservizio' => "Vuoi vedere come saresti come abitante di un altro pianeta? Il nostro servizio di creazione di avatar galattici utilizza la più recente tecnologia di trasformazione aliena per creare un'immagine di te stesso come un alieno di qualsiasi mondo tu scelga. Perfetto per profili social media o solo per divertirsi!", 'urlservizio' => "/images/avatar.webp"],
        ['id' => '3', 'nomeservizio' => 'Ricette Cosmiche', 'descservizio' => "Esplora le delizie culinarie dell'universo con le nostre esclusive ricette cosmiche. Ogni settimana presentiamo piatti da un diverso angolo della galassia, completi di ingredienti e istruzioni per preparare piatti stellari a casa tua. Un'esperienza gastronomica interstellare!", 'urlservizio' => "/images/cuoco.webp"],
        ['id' => '4', 'nomeservizio' => 'Oroscopi Stellari Personalizzati', 'descservizio' => "Scopri cosa ti riservano le stelle con i nostri oroscopi stellari personalizzati. Basati su complessi algoritmi astrobiologici e le posizioni delle costellazioni aliene, i nostri oroscopi offrono previsioni accurate e divertenti su amore, carriera e avventure intergalattiche.", 'urlservizio' => "/images/oroscopo.webp"],
    ];


    public function services()
    {
        return view('services', ['services' => $this->services]);
    }

    public function detail($id)
    {
        foreach ($this->services as $service) {
            if ($id == $service['id']) {
                return view('servicedetail', ['service' => $service]);
            }
        }
    }
}
