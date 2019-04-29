<?php

namespace DesignPatterns\Behavioral\Mediator;

class StockMarketMediator implements MediatorInterface
{

    protected $stockOffers = [];

    public function addColleague(ColleagueInterface $colleague)
    {
        $colleague->setMediator($this);
    }

    public function buyStock(string $stock, int $shares, ColleagueInterface $colleague): bool
    {
        // Check if the deal can be closed
        foreach ($this->stockOffers as $key => $offer) {
            if (StockOffer::$sellType == $offer->getType() && $stock == $offer->getCode() && $shares = $offer->getShares()) {
                // Remove the offer from the market
                unset($this->stockOffers[$key]);

                // Notify the owner of the offer, that the deal is closed
                $broker = $offer->getBroker();
                $broker->notify($broker->getName() . ', your request to sell ' . $shares . ' ' . $stock . ' is completed.');

                // Notify the colleague, that the deal is closed
                $colleague->notify($colleague->getName() . ', your request to buy ' . $shares . ' ' . $stock . ' is completed.');

                return true;
            }
        }

        // Add the stock offer to the market
        $this->stockOffers[] = new StockOffer(StockOffer::$buyType, $stock, $shares, $colleague);

        // Notify the colleague, that the deal is on the waiting list
        $colleague->notify($colleague->getName() . ', your request to buy ' . $shares . ' ' . $stock . ' is on the waiting list! We will notify you when it is completed.');

        return true;
    }

    public function sellStock(string $stock, int $shares, ColleagueInterface $colleague): bool
    {
        // Check if the deal can be closed
        foreach ($this->stockOffers as $key => $offer) {
            if (StockOffer::$buyType == $offer->getType() && $stock == $offer->getCode() && $shares = $offer->getShares()) {
                // Remove the offer from the market
                unset($this->stockOffers[$key]);

                // Notify the owner of the offer, that the deal is closed
                $broker = $offer->getBroker();
                $broker->notify($broker->getName() . ', your request to buy ' . $shares . ' ' . $stock . ' is completed.');

                // Notify the colleague, that the deal is closed
                $colleague->notify($colleague->getName() . ', your request to sell ' . $shares . ' ' . $stock . ' is completed.');

                return true;
            }
        }

        // Add the stock offer to the market
        $this->stockOffers[] = new StockOffer(StockOffer::$sellType, $stock, $shares, $colleague);

        // Notify the colleague, that the deal is on the waiting list
        $colleague->notify($colleague->getName() . ', your request to sell ' . $shares . ' ' . $stock . ' is on the waiting list! We will notify you when it is completed.');

        return true;
    }

    public function getStockOffers(): array
    {
        return $this->stockOffers;
    }
}
