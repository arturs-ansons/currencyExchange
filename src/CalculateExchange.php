<?php

include_once 'Exchange.php';
include_once 'Exchange2.php';
include_once 'Exchange3.php';

class CalculateExchange
{
    public function calc()
    {
        $fromCurrency = strtoupper(readline("Enter the source currency (e.g., USD): "));
        $toCurrency = strtoupper(readline("Enter the target currency (e.g., EUR): "));
        $amount = floatval(readline("Enter the amount: "));

        // Exchange 1
        $exchange1 = new Exchange();
        $result1 = $exchange1->convert($amount, $fromCurrency, $toCurrency);

        // Exchange 2
        $exchange2 = new Exchange2();
        $result2 = $exchange2->convert($amount, $fromCurrency, $toCurrency);

        // Exchange 3
        $exchange3 = new Exchange3();
        $result3 = $exchange3->convert($amount, $fromCurrency, $toCurrency);


        echo "Exchange rates for $amount $fromCurrency to $toCurrency (sorted from highest to lowest):\n";


        $results = [$result1, $result2, $result3];

        usort($results, function ($a, $b) {
            return $b['exchangeRate'] <=> $a['exchangeRate'];
        });

        foreach ($results as $result) {
            $apiName = $result['apiName'];
            $exchangeRate = $result['exchangeRate'];
            echo "$apiName: Rate: $exchangeRate\n";
        }
    }
}

$calculator = new CalculateExchange();
$calculator->calc();
