<?php

namespace company_first;
use Error;
use company_first\Sending;

class Sender
{
        public function getUrl(Sending $parcel){ //упрощаем максимально
            switch ($parcel->transport){
                case 'Компания 1':
                    $baseUrl = 'company_first.json';
                    break;
                case 'Компания 2':
                    $baseUrl = 'company_second.json';
                    break;
                case 'Компания 3':
                    $baseUrl = 'company_third.json';
                    break;
            }
            return $baseUrl;
        }
        public function makeJson(Sending $parcel){
            $json = json_encode( array("sourceKladr"=> $parcel->sourceKladr,
                "targetKladr"=>$parcel->targetKladr, "weight"=>$parcel->weight));
            return $json;
        }


    public function jsonSend($json, $baseUrl){

      try {
          $ch = curl_init($baseUrl);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_HEADER, false);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
          $res = curl_exec($ch);
          curl_close($ch);
          return $res; //должен вернуться нужный результат в json
      }
      catch (Error $error){
          return $error;
      }
    }


}