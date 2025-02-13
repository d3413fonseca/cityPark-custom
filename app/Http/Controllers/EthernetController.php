<?php

namespace App\Http\Controllers;

use App\Models\Rfid;

class EthernetController extends Controller
{
        public function requestRFID($id, $rfid_status)
        {
            // Pegar todos os RFIDs ativos
            $RFIDs = Rfid::where('rfid_status', 'Ativo')->get();

            // Enviar para o Arduino
            $macList = $this->createList($RFIDs);

            $url    = "http://192.168.90.220";

            $data   = [
                        "macs" => $macList
                ];

            $queryString = http_build_query($data);
            $url .= "?" . $queryString;

            $ch = curl_init(); // início à requisição

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);
        }

        protected function createList($RFIDs){
            $list = "";

            foreach($RFIDs as $value){
                if ($list != ""){
                    $list .= "|";
                }
                $list .= str_replace(" ", ":", $value->rfid_mac);

            }

            return $list;
        }
}
