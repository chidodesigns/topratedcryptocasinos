<?php

namespace Api\ApiEndPoints;

use Api\Utils\TrccGlobal;
use Exception;

class Home
{

    public $postID;
    public $postName;
    public $postNameConditional;
    public $trccGlobal;

    public function __construct($postID)
    {
        //  Grab Post ID
        $this->postID = $postID;

        //  init trcc global class
        $this->trccGlobal = new TrccGlobal($this->postID);

        //  Check postID is numeric and return post name
        $this->postName = $this->trccGlobal->checkPostIDForPostName();

        //  Check if postname is equal to Home
        $this->postNameConditional = $this->trccGlobal->checkPostName('home');

        //  Grab Post Name
        $this->initEndpoint();
    }

    /**
     * WP API Access To Home Route
     */

    public function initEndpoint()
    {
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    public function registerRoutes()
    {
        register_rest_route('trcc/v1', 'homepage', array(
            'methods' => 'GET',
            'callback' => [$this, 'homepage'],
        ));
    }

    public function homepage()
    {
        $heroSection = get_field('hero_section', 5);
        $introductionSection = get_field('homepage_introduction_section', 5);
        $monthlyTopPicks = get_field('monthly_top_picks', 5);
        $topRatedMainSection = get_field('top_rated_crypto_casino_main_section', 5);
        $bestBitcoinCasinos = get_field('best_bitcoin_casinos', 5);
        $moreTopRatedCasinos = get_field('more_top_rated_crypto_casinos', 5);
        $cryptoMarketSection = get_field('cryptocurrency_market_section', 5);
        $heroSectionMainTradingPlatform = get_field('hero_section_main_trading_platform', 5);
        $cryptoTradingPlatforms = get_field('crypto_exchanges_section', 5);
        $homepageFullWidthAd = get_field('homepage_full_width_ad_group', 5);
        $homepageWhyChooseTrcc = get_field('why_choose_top_rated_casino', 5);

        // return $heroSectionMainTradingPlatform;
        return $this->trccGlobal->processSingleTradingExchange($heroSectionMainTradingPlatform['main_trading_platform']);
    }

    //  End API Version

    //  Template Tag Version ---> Getter Functions For Each Section Of Homepage
    public function getHeroSection()
    {

        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('hero_section', $this->postID);
        }
    }

    public function getHeroSectionMainCasino()
    {
        if ($this->postNameConditional) {

            $casinoListings = $this->trccGlobal->getAcfField('hero_section', $this->postID);

            return $this->trccGlobal->processSingleCasino($casinoListings['main_crypto_casino']);
        }
    }

    public function getHomepageIntro()
    {
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('homepage_introduction_section', $this->postID);
        }

    }

    public function getHomepageMonthlyPicks()
    {

        if ($this->postNameConditional) {

            $casinoListings = $this->trccGlobal->getAcfField('monthly_top_picks', $this->postID);

            return $this->trccGlobal->processMultipleCasinos($casinoListings[0]['select_casino']);
        }

    }

    public function getHomepageTopRatedMainSection(){
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('top_rated_crypto_casino_main_section', $this->postID);
        }
    }

    public function getHomepageMainTable(){
        if ($this->postNameConditional) {

            $topRatedMainSection = $this->trccGlobal->getAcfField('top_rated_crypto_casino_main_section', $this->postID);

            return $this->trccGlobal->processMultipleCasinos($topRatedMainSection['top_rated_main_table']);
        }
    }

    public function getHomepageBestBitcoinCasinosSection(){
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('best_bitcoin_casinos', $this->postID);
        }
    }

    public function getHomepageBestBitcoinCasinos(){
        if ($this->postNameConditional) {

            $bestBitcoinCasinos = $this->trccGlobal->getAcfField('best_bitcoin_casinos', $this->postID);

            return $this->trccGlobal->processMultipleCasinos($bestBitcoinCasinos['best_bitcoin_casinos']);
        }
    }

    public function getHomepageMoreTopRatedCasinosSection()
    {
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('more_top_rated_crypto_casinos', $this->postID);
        }
    }


    public function getHomepageMoreTopRatedCryptoCasinos(){
        if ($this->postNameConditional) {

            $moreTopRatedCasinos = $this->trccGlobal->getAcfField('more_top_rated_crypto_casinos', $this->postID);

            return $this->trccGlobal->processMultipleCasinos($moreTopRatedCasinos['casino_listings']);
        }
    }

    public function getHomepageCryptoMarketSection()
    {
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('cryptocurrency_market_section', $this->postID);
        }

    }

    public function getHomepageCryptoTradingPlatformsSection()
    {
        if ($this->postNameConditional) {

            return $this->trccGlobal->getAcfField('crypto_exchanges_section', $this->postID);
        }

    }

    public function getHomepageHeroSectionMainTradingPlatform()
    {
        if ($this->postNameConditional) {

            $heroSectionMainTradingPlatform = $this->trccGlobal->getAcfField('hero_section_main_trading_platform', $this->postID);

            return $this->trccGlobal->processSingleTradingExchange($heroSectionMainTradingPlatform['main_trading_platform']);
        }

    }

    public function getHomepageCryptoTradingPlatformsListings()
    {
        if ($this->postNameConditional) {

            $cryptoExchangePlatforms = $this->trccGlobal->getAcfField('crypto_exchanges_section', $this->postID);

            return $this->trccGlobal->processMultipleTradingExchanges($cryptoExchangePlatforms['crypto_exchanges_main_table']);
        }

    }

    public function getHomepageFullWidthAdGroup(){

        $fullWidthAdGroup = $this->trccGlobal->getAcfField('homepage_full_width_ad_group', $this->postID);

        
        return ['casino_ad' => $this->trccGlobal->processSingleCasino($fullWidthAdGroup['homepage_full_width_ad']), 'ad_button_cta' => $fullWidthAdGroup['ad_button_cta']];

    }

    public function getHomepageWhyChooseTrccSection()
    {
     
        $homepageWhyChooseTrcc = $this->trccGlobal->getAcfField('why_choose_top_rated_casino', $this->postID);   

        return $homepageWhyChooseTrcc;
    }

    public function getHomepageWhyChooseTrccSectionAd()
    {
     
        $homepageWhyChooseTrcc = $this->trccGlobal->getAcfField('why_choose_top_rated_casino', $this->postID);   

        return ['casino_ad' => $this->trccGlobal->processSingleCasino($homepageWhyChooseTrcc['section_advertisement']['casino']), 'ad_button_cta' => $homepageWhyChooseTrcc['section_advertisement']['ad_button_cta']];
    }

    public function getHomepageCryptoCasinoReviewCriteriaSection(){

        $homepageWhyChooseTrccReview = $this->trccGlobal->getAcfField('why_choose_top_rated_casino', $this->postID);  

        return $homepageWhyChooseTrccReview['crypto_casino_review_criteria_section'];

        
    }

    public function getHomepageCryptoCasinoReviewCriteriaItems(){

        $homepageWhyChooseTrccReviewItems = $this->trccGlobal->getAcfField('why_choose_top_rated_casino', $this->postID);  

        return $this->trccGlobal->processCriteriaReviewItems($homepageWhyChooseTrccReviewItems['crypto_casino_review_criteria_section']['casino_review_criteria_section']); 

        
    }

}
