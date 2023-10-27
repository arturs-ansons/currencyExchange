<?php
class Exchange
{
    public function convert($amount, $fromCurrency, $toCurrency): ?array
    {
        $curl = curl_init();

        $apiUrl = "https://api.apilayer.com/fixer/convert?to=$toCurrency&from=$fromCurrency&amount=$amount";
        $apiHeaders = array(
            "Content-Type: text/plain",
            "apikey: ZBekE2Jc1pRXoZ2Y2FBk2QDjoG8KTn1V"
        );

        curl_setopt_array($curl, array(
            CURLOPT_URL => $apiUrl,
            CURLOPT_HTTPHEADER => $apiHeaders,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($response, true);

        if (isset($data['result'])) {
            return [
                'apiName' => $apiUrl,
                'exchangeRate' => $data['result'],
            ];
        } else {
            return null;
        }
    }
}


