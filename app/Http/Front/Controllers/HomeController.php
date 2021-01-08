<?php

namespace App\Http\Front\Controllers;

use Spatie\PriceApi\SpatiePriceApi;

class HomeController
{
    public function __invoke()
    {
        $purchasableId = config('services.spatie_prices_api.purchasable_id');

        $prices = SpatiePriceApi::getPriceForPurchasable($purchasableId);

        return view('front.home.index', [
            'downloadLinkMac' => 'https://spatie.be/products/ray/download/macos/latest',
            'downloadLinkWindows' => 'https://spatie.be/products/ray/download/windows/latest',
            'downloadLinkLinux' => 'https://spatie.be/products/ray/download/linux/latest',
            'couldFetchPrice' => $prices['couldFetchPrice'],
            'price' => $prices['actual'],
            'priceWithoutDiscount' => $prices['withoutDiscount'],
            'discount' => $prices['discount'],
        ]);
    }
}
