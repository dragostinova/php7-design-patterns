<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once '../../vendor/autoload.php';

$stockMarket = new StockMarketMediator();

$broker1 = new AllyInvestColleague();
$stockMarket->addColleague($broker1);

$broker2 = new EtradeColleague();
$stockMarket->addColleague($broker2);

$broker1->buyStock('TSLA', 50);
$broker1->buyStock('AMZN', 100);
$broker2->sellStock('TSLA', 50);
$broker2->buyStock('GOOGL', 100);

echo 'Available stocks on the market';
foreach ($stockMarket->getStockOffers() as $offer) {
    echo StockOffer::$buyType == $offer->getType() ? 'Buy' : 'Sell';
    echo ' ' . $offer->getShares() . ' shares of ' . $offer->getCode() . PHP_EOL;
}