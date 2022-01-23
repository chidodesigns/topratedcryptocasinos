<?php 

    //  This file provides access to the class models 

    //  Homepage Access
    use Api\ApiEndPoints\Home;

    class TemplateTagHome {

        public $postID;
        public $homepage;

        public function __construct($postID)
        {
            $this->postID = $postID;
            $this->homepage = new Home($this->postID);
        }

        public function get_hero_section()
        {
            $heroSection = $this->homepage->getHeroSection();
            return $heroSection;

        }

        public function get_hero_section_main_casino()
        {
            $mainCasino = $this->homepage->getHeroSectionMainCasino();
            return $mainCasino;
        }

        public function get_homepage_intro_section()
        {
            $homepageIntroSection = $this->homepage->getHomepageIntro();
            return $homepageIntroSection;
        }

        public function get_homepage_monthly_picks()
        {
            $homepageMonthlyPicks = $this->homepage->getHomepageMonthlyPicks();
            return $homepageMonthlyPicks;
        }

        public function get_homepage_top_rated_main_section()
        {
            $homepageTopRatedMainSection = $this->homepage->getHomepageTopRatedMainSection();
            return $homepageTopRatedMainSection;
        }

        public function get_homepage_main_table()
        {
            $homepageTopRatedMainTable = $this->homepage->getHomepageMainTable();
            return $homepageTopRatedMainTable;
        }

        public function get_homepage_best_bitcoin_casinos_section()
        {
            $bestBitcoinCasinos = $this->homepage->getHomepageBestBitcoinCasinosSection();
            return $bestBitcoinCasinos;
        }

        public function get_homepage_best_bitcoin_casinos()
        {
            $bestBitcoinCasinosListings = $this->homepage->getHomepageBestBitcoinCasinos();
            return $bestBitcoinCasinosListings;
        }

        public function get_homepage_more_top_rated_casinos()
        {
            $moreTopRatedCasinosSection = $this->homepage->getHomepageMoreTopRatedCasinosSection();
            return $moreTopRatedCasinosSection;
        }

        public function get_homepage_more_top_rated_casinos_listings()
        {
            $moreTopRatedCasinoListings = $this->homepage->getHomepageMoreTopRatedCryptoCasinos();
            return $moreTopRatedCasinoListings;
        }

        public function get_homepage_crypto_market_section()
        {
            $cryptoMarketSection = $this->homepage->getHomepageCryptoMarketSection();
            return $cryptoMarketSection;
        }

        public function get_homepage_crypto_trading_platforms_section()
        {
            $cryptoTradingPlatforms = $this->homepage->getHomepageCryptoTradingPlatformsSection();
            return $cryptoTradingPlatforms;
        }

        public function get_homepage_hero_section_main_trading_platform()
        {
            $homepageHeroSectionMainTradingPlatform = $this->homepage->getHomepageHeroSectionMainTradingPlatform();
            return $homepageHeroSectionMainTradingPlatform;
        }

        public function get_homepage_crypto_trading_platforms_listings()
        {
            $cryptoTradingPlatformsList = $this->homepage->getHomepageCryptoTradingPlatformsListings();
            return $cryptoTradingPlatformsList;
        }

        public function get_homepage_full_width_ad_group()
        {
            $homepageFullWidthAdGroup = $this->homepage->getHomepageFullWidthAdGroup();
            return $homepageFullWidthAdGroup;
        }

        public function get_homepage_why_choose_trcc_section()
        {
            $whyChooseTrccSection = $this->homepage->getHomepageWhyChooseTrccSection();
            return $whyChooseTrccSection;
        }

        public function get_homepage_why_choose_trcc_section_ad(){
            $whyChooseTrccSectionAd = $this->homepage->getHomepageWhyChooseTrccSectionAd();
            return $whyChooseTrccSectionAd;
        }

        public function get_homepage_crypto_casino_review_criteria_section(){
            $cryptoCasinoReviewSection = $this->homepage->getHomepageCryptoCasinoReviewCriteriaSection();
            return $cryptoCasinoReviewSection;
        }

        public function get_homepage_crypto_casino_review_items()
        {
            $criteriaReviewItems = $this->homepage->getHomepageCryptoCasinoReviewCriteriaItems();
            return $criteriaReviewItems;
        }

    }