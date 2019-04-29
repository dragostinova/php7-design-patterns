<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Mediator\AllyInvestColleague;
use DesignPatterns\Behavioral\Mediator\ColleagueInterface;
use DesignPatterns\Behavioral\Mediator\EtradeColleague;
use DesignPatterns\Behavioral\Mediator\StockMarketMediator;
use DesignPatterns\Behavioral\Mediator\StockOffer;
use PHPUnit\Framework\TestCase;

final class MediatorTest extends TestCase
{
    public function testAddStock()
    {
        $stockMarket = new StockMarketMediator();

        $broker1 = new AllyInvestColleague();
        $stockMarket->addColleague($broker1);
        $broker1->buyStock('TSLA', 50);
        $offers = $stockMarket->getStockOffers();

        $this->assertCount(1, $offers);
        foreach ($offers as $offer) {
            $this->assertEquals(StockOffer::$buyType, $offer->getType());
            $this->assertEquals(50, $offer->getShares());
            $this->assertSame('TSLA', $offer->getCode());
            $this->assertInstanceOf(ColleagueInterface::class, $offer->getBroker());
            $this->assertInstanceOf(AllyInvestColleague::class, $offer->getBroker());
        }
    }

    public function testBuyStock()
    {
        $stockMarket = new StockMarketMediator();

        $broker1 = new AllyInvestColleague();
        $stockMarket->addColleague($broker1);
        $broker1->buyStock('TSLA', 50);

        $broker2 = new EtradeColleague();
        $stockMarket->addColleague($broker2);
        $broker2->sellStock('TSLA', 50);

        $this->assertCount(0, $stockMarket->getStockOffers());
    }
}
