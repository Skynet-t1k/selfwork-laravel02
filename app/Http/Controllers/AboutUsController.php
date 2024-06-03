<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public $personaggi = [
        [
            "id" => "1",
            "nome" => "Zara Zerolith",
            "ruolo" => "Capo Redattrice Galattica",
            "abilità" => "Può decodificare ogni lingua aliena conosciuta e sconosciuta",
            "descrizione" => "Zara, con i suoi occhiali a sei lenti e una penna che fluttua, è sempre pronta a svelare gli ultimi segreti dell'universo. La sua scrivania è un miscuglio di manoscritti antichi e gadget tecnologici, e lei è sempre in videoconferenza con informatori da sistemi solari lontani.",
            "imageurl" => "/images/zara.webp"
        ],
        [
            "id" => "2",
            "nome" => "Max Meteor",
            "ruolo" => "Reporter Intergalattico",
            "abilità" => "Viaggio istantaneo attraverso i wormhole",
            "descrizione" => "Sempre in movimento, Max non perde mai un evento, che sia un'inaugurazione di un portale spaziotemporale o la premiere di un film su Marte. Il suo zaino contiene tutto il necessario: un kit di sopravvivenza spaziale, un registratore olografico, e snack da vari pianeti.",
            "imageurl" => "/images/max.webp"
        ],
        [
            "id" => "3",
            "nome" => "Luna Lightgear",
            "ruolo" => "Tecnico Creativo",
            "abilità" => "Può riparare e reinventare qualsiasi dispositivo tecnologico usando solo la forza del pensiero",
            "descrizione" => "Luna, con il suo laboratorio pieno di strumenti levitanti e schermi olografici, è il cervello dietro la tecnologia del blog. Se non sta aggiornando i server con intelligenze artificiali avanzate, la trovi a creare nuovi gadget per aiutare il team nelle loro avventure cosmiche.",
            "imageurl" => "/images/luna.webp"
        ],
        [
            "id" => "4",
            "nome" => "Stella Starfinder",
            "ruolo" => "Esperta di Social Media Cosmici",
            "abilità" => "Connessione telepatica con le reti sociali di ogni pianeta",
            "descrizione" => "Stella gestisce i social media del blog con una maestria unica, spargendo storie e notizie attraverso la galassia come nessun altro. Il suo ufficio è adornato di schermi che mostrano trend da mille mondi diversi, e lei aggiorna i feed con una velocità sovrumana.",
            "imageurl" => "/images/stella.webp"
        ]
    ];

    public function aboutUs()
    {
        return view('aboutus', ['personaggi' => $this->personaggi]);
    }

    public function detail($id)
    {
        foreach ($this->personaggi as $persona) {
            if ($id == $persona['id'])
                return view('dettaglio', ['persona' => $persona]);
        }
    }
}
