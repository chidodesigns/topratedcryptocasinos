<?php
get_header();
$homepageID = get_the_ID();
$homepage = new templateTagHome($homepageID);
$heroSection = $homepage->get_hero_section();
$heroSectionMainCasino = $homepage->get_hero_section_main_casino();
$homepageIntroSection = $homepage->get_homepage_intro_section();
$homepageMonthlyPicks = $homepage->get_homepage_monthly_picks();
$homepageTopRatedMainSection = $homepage->get_homepage_top_rated_main_section();
$homepageTopRatedMainTable = $homepage->get_homepage_main_table();
$homepageBestBitcoinCasinos = $homepage->get_homepage_best_bitcoin_casinos_section();
$homepageBestBitcoinCasinosListing = $homepage->get_homepage_best_bitcoin_casinos();
$homepageMoreTopRatedCasinos = $homepage->get_homepage_more_top_rated_casinos();
$homepageMoreTopRatedCasinoListings = $homepage->get_homepage_more_top_rated_casinos_listings();
$homepageCryptoMarketSection = $homepage->get_homepage_crypto_market_section();
$homepageCryptoTradinPlatformsSection = $homepage->get_homepage_crypto_trading_platforms_section();
$homepageHeroSectionMainTradingPlatform = $homepage->get_homepage_hero_section_main_trading_platform();
$homepageCryptoTradingPlatformsList = $homepage->get_homepage_crypto_trading_platforms_listings();
$homepageFullWidthAdGroup = $homepage->get_homepage_full_width_ad_group();
$homepageWhyChooseTrccSection = $homepage->get_homepage_why_choose_trcc_section();
$homepageWhyChooseTrccSectionAd = $homepage->get_homepage_why_choose_trcc_section_ad();
$cryptoCasinoReviewSection = $homepage->get_homepage_crypto_casino_review_criteria_section();
$cryptoCasinoReviewItems = $homepage->get_homepage_crypto_casino_review_items();
// var_dump($homepageCryptoTradingPlatformsList);

?>

<!-- Showcase -->
<section class="showcase">
    <div class="container grid">
        <?php if ($heroSection['main_cta'] && !empty($heroSection['main_cta'])) : ?>
        <div class="showcase-text">
            <h1>
                <?php echo $heroSection['main_cta']; ?>
            </h1>
            <?php if ($heroSection['secondary_cta'] && !empty($heroSection['secondary_cta'])) : ?>
            <p class="lead">
                <?php echo $heroSection['secondary_cta']; ?>
            </p>
            <?php endif; ?>
            <p>Updated <?php echo date("F Y"); ?></p>
        </div>
        <?php endif; ?>
        <?php if ($heroSectionMainCasino && !empty($heroSectionMainCasino)) : ?>
        <?php foreach ($heroSectionMainCasino as $key => $value) : ?>
        <div class="showcase-form card card__casino">
            <span class="text-primary card__casino--terms tooltip">
                Terms & Conditions
                <span class="tooltiptext">
                    <?php echo $value['casino_terms_cond']; ?>
                </span>
            </span>
            <div class="text-center">
                <img class="card__casino--img" src="<?php echo $value['casino_logo']; ?>"
                    alt="<?php echo $value['casino_logo_alt']; ?>" />
            </div>
            <h4 class="text-center bold text-primary">
                <?php echo $value['casino_sign_up_bonus']; ?>
            </h4>
            <ul class="mr-1">
                <?php foreach ($value['casino_key_features'] as $keyFeature => $valueFeature) : ?>
                <li><i class="far fa-check-circle"></i><?php echo $valueFeature['key_feature']; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo $value['casino_website_link']; ?><?php echo $value['casino_aff_code']; ?>"
                target="_blank" class="text-center">
                <?php if ($heroSection['button_call_to_action'] && !empty($heroSection['button_call_to_action'])) : ?>
                <button class="btn btn-info"><?php echo $heroSection['button_call_to_action']; ?></button>
                <?php else : ?>
                <button class="btn btn-info">Claim Bonus</button>
                <?php endif; ?>
            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Monthly Picks -->
<section class="stats">
    <div class="container">
        <?php if ($homepageIntroSection && !empty($homepageIntroSection)) : ?>
        <p class="section__lead-text mt-5">
            <?php echo $homepageIntroSection; ?>
        </p>
        <?php endif; ?>
        <h2 class="text-center my-3">
            <?php echo date("F Y"); ?> Top Picks
            <span class="bottom-line"></span>
        </h2>
        <?php if ($homepageMonthlyPicks && !empty($homepageMonthlyPicks)) : ?>
        <div class="grid grid-3 text-center my-1">
            <?php foreach ($homepageMonthlyPicks as $key => $value) : ?>
            <div class="card">
                <span class="text-primary card__casino--terms tooltip">
                    Terms & Conditions
                    <span class="tooltiptext">
                        <?php echo $value['casino_terms_cond']; ?>
                    </span>
                </span>
                <div style="height: 300px;" class="flex">
                    <a href="<?php echo $value['casino_website_link']; ?><?php echo $value['casino_aff_code']; ?>"
                        target="_blank">
                        <img src="<?php echo $value['casino_logo']; ?>"
                            alt="<?php echo $value['casino_logo_alt']; ?>" />
                    </a>
                </div>
                <p class="text-primary bold"><?php echo $value['casino_sign_up_bonus']; ?></p>
                <a href="<?php echo $value['casino_website_link']; ?><?php echo $value['casino_aff_code']; ?>"
                    target="_blank"><button class="btn btn-info" style="color: #333; width: 90%;">Go To
                        Site</button></a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Main Table -->
<?php if ($homepageTopRatedMainSection['section_header'] && !empty($homepageTopRatedMainSection['section_header'])) : ?>
<section>
    <div class="container">
        <h2 class="text-center my-3">
            <?php echo $homepageTopRatedMainSection['section_header']; ?>
            <span class="bottom-line"></span>
        </h2>
        <?php if ($homepageTopRatedMainSection['section_copy'] && !empty($homepageTopRatedMainSection['section_copy'])) : ?>
        <div>
            <?php echo $homepageTopRatedMainSection['section_copy']; ?>
        </div>
        <?php endif; ?>

        <?php if ($homepageTopRatedMainSection['top_rated_cta'] && !empty($homepageTopRatedMainSection['top_rated_cta'])) : ?>
        <div class="my-3 casino-listings-monthly-date">
            <h2 class="bold text-primary">
                <i class="fas fa-star mr-0 text-info"></i><?php echo $homepageTopRatedMainSection['top_rated_cta']; ?> -
                <?php echo date("F Y"); ?>
            </h2>
        </div>
        <?php endif; ?>

        <div class="grid grid-5 casino-listings-attr">
            <p><i class="fas fa-globe-europe"></i>UK Licensed</p>
            <p><i class="fas fa-user-edit"></i>Expert Reviews</p>
            <p><i class="fas fa-mobile-alt"></i>Mobile Friendly</p>
            <p><i class="fas fa-money-bill-alt"></i>Fast Payouts</p>
            <p class="ad-disclosure">
                <span class="tooltip">
                    <i class="fas fa-info-circle"></i>
                    Ad Disclosure
                    <span class="tooltiptext">
                        TopRatedCryptoCasinos.co.uk only lists online cryptocurrency casinos we have tried and tested,
                        with safety and security in mind. Our casino reviews are 100% honest and unbiased. We accept
                        commissions from our listed casino vendors, and this may affect where they're positioned on our
                        lists.
                    </span>
                </span>
            </p>
        </div>
        <?php if ($homepageTopRatedMainTable && !empty($homepageTopRatedMainTable)) : ?>
        <table class="casino-table mt-2 mb-2">
            <tr class="casino-table__header">
                <th>Rank</th>
                <th>Online Casino</th>
                <th>Sign Up Bonus</th>
                <th>Key Features</th>
                <th>Sign Up</th>
            </tr>
            <?php foreach ($homepageTopRatedMainTable as $casinoKey => $casinoValue) : ?>
            <tr class="casino-table__listing">
                <td><?php echo $casinoKey + 1; ?></td>
                <td class="casino-table__listing--casino-logo">
                    <a href="<?php echo $casinoValue['casino_website_link']; ?><?php echo $casinoValue['casino_aff_code']; ?>"
                        target="_blank">
                        <img src="<?php echo $casinoValue['casino_logo']; ?>"
                            alt="<?php echo $casinoValue['casino_logo_alt']; ?>" />
                    </a>
                </td>
                <td class="casino-table__listing--welcome-bonus bold">
                    <p class="text-primary"><?php echo $casinoValue['casino_sign_up_bonus']; ?></p>
                    <span class="card__casino--terms tooltip">
                        Terms
                        <span class="tooltiptext">
                            <?php echo $casinoValue['casino_terms_cond']; ?>
                        </span>
                    </span>
                </td>
                <td class="casino-table__listing--key-features">
                    <?php foreach ($casinoValue['casino_key_features'] as $casinoFeatureKey => $casinoFeatureValue) : ?>
                    <li style="list-style-type: none">
                        <i class="far fa-check-circle"
                            style="color: #047aed;"></i><?php echo $casinoFeatureValue['key_feature']; ?>
                    </li>
                    <?php endforeach; ?>
                </td>
                <td class="casino-table__listing-sign-up">
                    <a href="<?php echo $casinoValue['casino_website_link']; ?><?php echo $casinoValue['casino_aff_code']; ?>"
                        target="_blank"><button class="btn btn-success">Claim Bonus</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Crypto Casino Mob Table Card-->
        <?php foreach ($homepageTopRatedMainTable as $casinoKey => $casinoValue) : ?>
        <div class="card casino-table__mob-version">
            <p class="casino-table__mob-version--rank">
                <span class="text-primary">Ranked:</span>
                <span class="bold" style="padding: 3%"><?php echo $casinoKey + 1; ?></span>
            </p>
            <a href="<?php echo $casinoValue['casino_website_link']; ?><?php echo $casinoValue['casino_aff_code']; ?>"
                target="_blank">
                <img src="<?php echo $casinoValue['casino_logo']; ?>"
                    alt="<?php echo $casinoValue['casino_logo_alt']; ?>" />
            </a>
            <div>
                <span class="text-primary">Welcome Offer</span>
                <p class="bold">
                    <?php echo $casinoValue['casino_sign_up_bonus']; ?>
                </p>
            </div>
            <a href="<?php echo $casinoValue['casino_website_link']; ?><?php echo $casinoValue['casino_aff_code']; ?>"
                target="_blank">
                <button class="btn btn-info" style="color: #333;">Claim Bonus</button>
            </a>
            <span class="text-primary card__casino--terms tooltip">
                Terms Apply
            </span>
        </div>
        <?php endforeach; ?>

        <?php endif; ?>
        <!-- End Crypto Casino Mob Table Card-->
    </div>
</section>
<?php endif; ?>
<!-- End Main Table -->

<!-- Best Bitcoin Casinos -->
<?php if ($homepageBestBitcoinCasinos['section_header'] && !empty($homepageBestBitcoinCasinos['section_header'])) : ?>
<section class="my-3" id="bitcoin">
    <div class="container">
        <h2 class="text-center my-3">
            <?php echo $homepageBestBitcoinCasinos['section_header']; ?>
            <span class="bottom-line"></span>
        </h2>
        <?php if ($homepageBestBitcoinCasinos['section_copy']) : ?>
        <p>
            <?php echo $homepageBestBitcoinCasinos['section_copy']; ?>
        </p>
        <?php endif; ?>
        <div class="grid grid-3 my-3">
            <?php if ($homepageBestBitcoinCasinosListing && !empty($homepageBestBitcoinCasinosListing)) : ?>
            <?php foreach ($homepageBestBitcoinCasinosListing as $bitcoinCasinoKey => $bitcoinCasinoValue) : ?>
            <div class="card">
                <span class="text-primary card__casino--terms tooltip">
                    Terms & Conditions
                    <span class="tooltiptext">
                        <?php echo $bitcoinCasinoValue['casino_terms_cond']; ?>
                    </span>
                </span>

                <div style="height: 300px;" class="flex">

                    <a href="<?php echo $bitcoinCasinoValue['casino_website_link']; ?><?php echo $bitcoinCasinoValue['casino_aff_code']; ?>"
                        target="_blank" class="image-link">
                        <img src="<?php echo $bitcoinCasinoValue['casino_logo']; ?>"
                            alt="<?php echo $bitcoinCasinoValue['casino_logo_alt']; ?>" />
                    </a>

                </div>
                <p class="text-primary bold text-center"><?php echo $bitcoinCasinoValue['casino_sign_up_bonus']; ?></p>

                <a href="<?php echo $bitcoinCasinoValue['casino_website_link']; ?><?php echo $bitcoinCasinoValue['casino_aff_code']; ?>"
                    target="_blank" class="button-link">
                    <button class="btn btn-success" style="color: #333; width: 100%" ;>Claim Bonus</button>
                </a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<!-- Top Rated Crypto Games / Other Top Rated Casinos-->
<?php if ($homepageMoreTopRatedCasinos['section_header'] && !empty($homepageMoreTopRatedCasinos['section_header'])) : ?>
<section class="alt-top-casinos container my-3">

    <h2 class="text-center mt-3">
        <?php echo $homepageMoreTopRatedCasinos['section_header']; ?>
        <span class="bottom-line"></span>
    </h2>

    <?php if ($homepageMoreTopRatedCasinos['section_lead_copy'] && !empty($homepageMoreTopRatedCasinos['section_lead_copy'])) : ?>
    <p class="my-3">
        <?php echo $homepageMoreTopRatedCasinos['section_lead_copy']; ?>
    </p>
    <?php endif; ?>
    <?php if ($homepageMoreTopRatedCasinoListings && !empty($homepageMoreTopRatedCasinoListings)) : ?>
    <div class="grid grid-3 grid-3__grid-gap-alt my-3">
        <?php foreach ($homepageMoreTopRatedCasinoListings as $key => $value) : ?>
        <div class="card-flashy">
            <div class="card-flashy__side card-flashy__side--front">
                <div class="card-flashy__picture card-flashy__picture--1">
                    <img src="<?php echo $value['casino_logo']; ?>" alt="<?php echo $value['casino_logo_alt']; ?>">
                </div>
                <h4 class="card-flashy__heading">
                    <span
                        class="card-flashy__heading-span card-flashy__heading-span--1"><?php echo $value['casino_name']; ?></span>
                </h4>
                <div class="card-flashy__details">
                    <ul>
                        <?php foreach ($value['casino_key_features'] as $featureKey => $featureValue) : ?>
                        <li><i class="far fa-check-circle mr-1"></i><?php echo $featureValue['key_feature']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="card-flashy__side card-flashy__side--back card-flashy__side--back-1">
                <div class="card-flashy__cta">
                    <div class="card-flashy__price-box">
                        <span class="text-white card__casino--terms tooltip">
                            Terms and Conditions
                            <span class="tooltiptext">
                                <?php echo $value['casino_terms_cond']; ?>
                            </span>
                        </span>
                        <!-- <p class="card-flashy__price-only">Sign Up and win</p> -->
                        <p class="card-flashy__price-value"><?php echo $value['casino_sign_up_bonus']; ?></p>
                    </div>
                    <a href="<?php echo $value['casino_website_link']; ?><?php echo $value['casino_aff_code']; ?>"
                        class="btn btn-primary">Play Now</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
<!-- End Of Other Top Casinos To Consider-->

<!-- Crypto Market Widget -->
<?php if ($homepageCryptoMarketSection['section_header'] && !empty($homepageCryptoMarketSection['section_header'])) : ?>
<section class="crypto-market-widget my-3" id="market">

    <div class="container">
        <h2 class="text-center my-3">
            <?php echo $homepageCryptoMarketSection['section_header']; ?>
            <span class="bottom-line"></span>
        </h2>

        <?php if ($homepageCryptoMarketSection['section_header_copy'] && !empty($homepageCryptoMarketSection['section_header_copy'])) : ?>
        <p>
            <?php echo $homepageCryptoMarketSection['section_header_copy']; ?>
        </p>
        <?php endif; ?>
        <div class="my-3 casino-listings-monthly-date">
            <h2 class="bold text-primary">
                <?php if ($homepageCryptoMarketSection['section_cta'] && !empty($homepageCryptoMarketSection['section_cta'])) : ?>
                <i class="fas fa-chart-area text-info"
                    style="margin-right: 0.4rem;"></i><?php echo $homepageCryptoMarketSection['section_cta']; ?>
                <?php echo date("d F Y"); ?>
                <?php endif; ?>
            </h2>
        </div>
    </div>

    <div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
                async>
            {
                "width": 1020,
                "height": 490,
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "GBP",
                "colorTheme": "light",
                "locale": "uk"
            }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</section>
<?php endif; ?>
<!-- End Crypto Market Widget -->

<!-- Trading Platform Showcase -->
<section class="showcase my-5">
    <div class="container grid">
        <?php if ($homepageHeroSectionMainTradingPlatform[0]["exchange_name"] && !empty($homepageHeroSectionMainTradingPlatform[0]["exchange_name"])) : ?>
        <div class="showcase-text showcase-text-alt">
            <h1>
                Our Top Rated Cryptocurrency Exchange Platform
                <i class="fas fa-arrow-circle-right ml-1"></i>
            </h1>
        </div>
        <?php endif; ?>
        <?php if ($homepageHeroSectionMainTradingPlatform && !empty($homepageHeroSectionMainTradingPlatform)) : ?>
        <?php foreach ($homepageHeroSectionMainTradingPlatform as $key => $value) : ?>
        <div class="showcase-form card card__casino">
            <div class="text-center">
                <img class="card__casino--img" src="<?php echo $value['exchange_logo']; ?>"
                    alt="<?php echo $value['exchange_logo_alt']; ?>" />
            </div>
            <ul class="mr-1">
                <p class="lead text-center text-primary">Key Features</p>

                <?php foreach ($value['exchange_key_features'] as $keyFeature => $valueFeature) : ?>
                <li><i class="far fa-check-circle text-primary"></i><?php echo $valueFeature['key_feature']; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo $value['website_link']; ?><?php echo $value['exchange_aff_code']; ?>" target="_blank"
                class="text-center">

                <button class="btn btn-info">Buy Your Crypto Now!</button>

            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php if ($homepageCryptoTradinPlatformsSection['section_header'] && !empty($homepageCryptoTradinPlatformsSection['section_header'])) : ?>
<!-- Crypto Exchanges Table -->
<section class="my-10">
    <div class="container">
        <h2 class="text-center my-3">
            <?php echo $homepageCryptoTradinPlatformsSection['section_header']; ?>
            <span class="bottom-line"></span>
        </h2>
        <?php if ($homepageCryptoTradinPlatformsSection['section_copy'] && !empty($homepageCryptoTradinPlatformsSection['section_copy'])) : ?>
        <p>
            <?php echo $homepageCryptoTradinPlatformsSection['section_copy']; ?>
        </p>
        <?php endif; ?>
        <?php if ($homepageCryptoTradinPlatformsSection['section_cta'] && !empty($homepageCryptoTradinPlatformsSection['section_cta'])) : ?>
        <div class="my-3 casino-listings-monthly-date">
            <h2 class="bold text-primary">
                <i class="fas fa-coins text-info"
                    style="margin-right: 0.5rem;"></i><?php echo $homepageCryptoTradinPlatformsSection['section_cta']; ?>
                <?php echo date("F Y"); ?>
            </h2>
        </div>
        <?php endif; ?>
        <?php if ($homepageCryptoTradingPlatformsList && !empty($homepageCryptoTradingPlatformsList)) : ?>
        <table class="casino-table mt-2 mb-2">
            <tr class="casino-table__header">
                <th>Exchanges Platforms</th>
                <th>Key Features</th>
                <th>Deposit Methods</th>
                <th>Fiat Currencies</th>
                <!-- <th>Trading Fees</th> -->
                <th>Sign Up</th>
            </tr>
            <?php foreach ($homepageCryptoTradingPlatformsList as $exchangeKey => $exchangeValue) : ?>
            <tr class="casino-table__listing">
                <td class="crypto-exchange__listing--logo">
                    <a href="<?php echo $exchangeValue['website_link']; ?><?php echo $exchangeValue['exchange_aff_code']; ?>"
                        target="_blank">
                        <img src="<?php echo $exchangeValue['exchange_logo']; ?>"
                            alt="<?php echo $exchangeValue['exchange_logo_alt']; ?>" />
                    </a>
                </td>
                <td class="crypto-exchange__listing--key-features">
                    <?php foreach ($exchangeValue['exchange_key_features'] as $key => $value) : ?>
                    <li style="list-style-type: none">
                        <i class="far fa-check-circle" style="color: #047aed;"></i><?php echo $value['key_feature']; ?>
                    </li>
                    <?php endforeach; ?>
                </td>
                <td class="crypto-exchange__listing--deposit-methods">
                    <?php foreach ($exchangeValue['exchange_deposit_methods'] as $key => $value) : ?>
                    <li style="list-style-type: none">
                        <i class="far fa-check-circle" style="color: #ffce1b;"></i><?php echo $value['method']; ?>
                    </li>
                    <?php endforeach; ?>
                </td>
                <td class="crypto-exchange__listing--fiat-currencies">
                    <?php foreach ($exchangeValue['exchange_fiat_currencies'] as $key => $value) : ?>
                    <li style="list-style-type: none">
                        <i class="far fa-check-circle" style="color: #5cb85c;"></i><?php echo $value['currency']; ?>
                    </li>
                    <?php endforeach; ?>
                </td>
                <!-- <td class="crypto-exchange__listing--trading-fees">
                    Volume Based
                </td> -->
                <td class="crypto-exchange__listing-sign-up-button">
                    <a href="<?php echo $exchangeValue['website_link']; ?><?php echo $exchangeValue['exchange_aff_code']; ?>"
                        target="_blank"><button class="btn btn-success">Buy Crypto</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        <!-- Crypto Exchanges Mob Table Card-->
        <?php foreach ($homepageCryptoTradingPlatformsList as $exchangeKey => $exchangeValue) : ?>
        <div class="card casino-table__mob-version">
            <a href="<?php echo $exchangeValue['website_link']; ?><?php echo $exchangeValue['exchange_aff_code']; ?>"
                target="_blank">
                <img src="<?php echo $exchangeValue['exchange_logo']; ?>"
                    alt="<?php echo $exchangeValue['exchange_logo_alt']; ?>" />
            </a>
            <div class="mt-1">
                <?php foreach ($exchangeValue['exchange_key_features'] as $key => $value) : ?>
                <li style="list-style-type: none; text-align:left;" class="text-primary">
                    <i class="far fa-check-circle text-primary mr-0"></i><?php echo $value['key_feature']; ?>
                </li>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo $exchangeValue['website_link']; ?><?php echo $exchangeValue['exchange_aff_code']; ?>"
                target="_blank"><button class="btn btn-success">Buy Crypto</button></a>
        </div>
        <?php endforeach; ?>
        <!-- End Crypto Exchanges Mob Table Card-->
    </div>
</section>
<?php endif; ?>
<!-- End Crypto Exchanges Table -->

<!-- Big Horizontal Advertising Slot -->
<?php if ($homepageFullWidthAdGroup && !empty($homepageFullWidthAdGroup)) : ?>
<section class="cloud my-3 py-2">

    <div class="container grid">
        <div class="text-center">
            <h2 class="lg"><?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_sign_up_bonus']; ?></h2>
            <p class="lead my-1">Terms & Conditions Apply</p>
            <a href="<?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_website_link']; ?><?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_aff_code']; ?>"
                class="btn btn-dark"><?php echo $homepageFullWidthAdGroup['ad_button_cta']; ?></a>
        </div>
        <a href="<?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_website_link']; ?><?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_aff_code']; ?>"
            target="_blank">
            <img src="<?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_logo']; ?>"
                alt="<?php echo $homepageFullWidthAdGroup['casino_ad'][0]['casino_logo_alt']; ?>" />
        </a>
    </div>
</section>
<?php endif; ?>
<!-- End Big Horizontal Advertising Slot -->

<!-- Why Choose Top Rated Crypto Casino Section -->
<?php if ($homepageWhyChooseTrccSection['section_header'] && !empty($homepageWhyChooseTrccSection['section_header'])) : ?>
<section class="languages container my-3" id="why-trcc">
    <h2 class="text-center my-3">
        <?php echo $homepageWhyChooseTrccSection['section_header']; ?>
        <span class="bottom-line"></span>
    </h2>
    <?php if ($homepageWhyChooseTrccSection['section_copy'] && !empty($homepageWhyChooseTrccSection['section_copy'])) : ?>
    <p class="mb-3">
        <?php echo $homepageWhyChooseTrccSection['section_copy']; ?>
    </p>
    <?php endif; ?>
    <!-- Big Horizontal Advertising Slot -->
    <?php if ($homepageWhyChooseTrccSectionAd && !empty($homepageWhyChooseTrccSectionAd)) : ?>
    <section class="cloud my-3 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg"><?php echo $homepageWhyChooseTrccSectionAd['casino_ad'][0]['casino_sign_up_bonus']; ?>
                </h2>
                <p class="lead my-1">Terms & Conditions Apply</p>
                <a href="<?php echo $homepageWhyChooseTrccSectionAd['casino_ad'][0]['casino_website_link']; ?>"
                    class="btn btn-dark"><?php echo $homepageWhyChooseTrccSectionAd['ad_button_cta']; ?> </a>
            </div>
            <a href="<?php echo $homepageWhyChooseTrccSectionAd['casino_ad'][0]['casino_website_link']; ?>">
                <img src="<?php echo $homepageWhyChooseTrccSectionAd['casino_ad'][0]['casino_logo']; ?>"
                    alt="<?php echo $homepageWhyChooseTrccSectionAd['casino_ad'][0]['casino_logo_alt']; ?>" />
            </a>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Big Horizontal Advertising Slot -->
    <?php if ($cryptoCasinoReviewSection['section_header'] && !empty($cryptoCasinoReviewSection['section_header'])) : ?>
    <h2 class="text-center mt-5">
        <?php echo $cryptoCasinoReviewSection['section_header']; ?>
        <span class="bottom-line"></span>
    </h2>
    <?php if ($cryptoCasinoReviewSection['section_copy'] && !empty($cryptoCasinoReviewSection['section_copy'])) : ?>
    <p><?php echo $cryptoCasinoReviewSection['section_copy']; ?></p>
    <?php endif; ?>

    <div class="grid grid-3 my-3">
        <?php foreach ($cryptoCasinoReviewItems as $casinoReviewKey => $casinoReviewValue) : ?>
        <div class="card card__column-direction">
            <h4 class="text-primary"><?php echo $casinoReviewValue['post_title']; ?></h4>
            <img src="<?php echo $casinoReviewValue['featured_image']; ?>"
                alt="<?php echo $casinoReviewValue['featured_image_alt']; ?>" class="my-1" />
            <a href="#popup<?php echo $casinoReviewKey + 1; ?>"><button class="btn btn-success my-1">Read
                    More</button></a>
        </div>
        <?php endforeach; ?>

    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
<!-- Popup Modal Content-->
<?php foreach ($cryptoCasinoReviewItems as $casinoReviewKey => $casinoReviewValue) : ?>
<div class="popup" id="popup<?php echo $casinoReviewKey + 1; ?>">
    <div class="popup__content">
        <?php foreach ($casinoReviewValue['selected_casino'] as $selectedCasinoKey => $selectedCasinoValue) : ?>
        <div class="popup__left">

            <div class="card card__column-direction">
                <span class="text-primary card__casino--terms tooltip">
                    Terms
                    <span class="tooltiptext">
                        <?php echo $selectedCasinoValue['casino_terms_cond']; ?>
                    </span>
                </span>
                <h3 class="text-primary"><?php echo $selectedCasinoValue['casino_name']; ?></h3>
                <a href="<?php echo $selectedCasinoValue['casino_website_link']; ?><?php echo $selectedCasinoValue['casino_aff_code']; ?>"
                    target="_blank" class="text-center">
                    <img src="<?php echo $selectedCasinoValue['casino_logo']; ?>"
                        alt="<?php echo $selectedCasinoValue['casino_logo_alt']; ?>" class="my-1" />
                </a>
                <button class="btn btn-success my-1"><a
                        href="<?php echo $selectedCasinoValue['casino_website_link']; ?><?php echo $selectedCasinoValue['casino_aff_code']; ?>"
                        target="_blank">Play</a></button>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="popup__right">
            <a href="#section-tours" class="popup__close">&times;</a>
            <h2 class="text-primary popup__text-heading">Casino Software</h2>
            <!-- <h3 class="popup__text-heading">Picking casinos with great software.</h3> -->
            <p class="popup__text">
                <?php echo $casinoReviewValue['post_content']; ?>
            </p>

        </div>

    </div>
</div>
<?php endforeach; ?>
<!--End Of Popup -->
<?php get_footer(); ?>