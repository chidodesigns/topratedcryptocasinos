<?php

namespace Api\Utils;

class TrccGlobal
{

    public $postID;
    public $postName;

    public function __construct($postID)
    {
        //  Grab Post ID
        $this->postID = $postID;
    }

    public function checkPostIDForPostName()
    {
        // Check is Post ID is valid -> Grab Post Name via Post ID
        if (is_numeric($this->postID)) {
            return $this->postName = get_post($this->postID)->post_name;
        }
    }

    //  Check if post name is equal to home
    public function checkPostName(string $postNameString)
    {
        if ($this->postName == $postNameString) {
            return true;
        } else {
            return false;
        }
    }

    //  Process ACF Fields 
    public function getAcfField(string $fieldName, int $postID)
    {
        return get_field($fieldName, $postID);
    }

    //  Process Casino Element
    public function processSingleCasino($casinoList)
    {
        foreach ($casinoList as $casinoKey => $casinoValue) {
            $casinoId = $casinoValue->ID;
            $casinoList[$casinoKey] = [
                'casino_name' => get_the_title($casinoId),
                'casino_logo' => get_the_post_thumbnail_url($casinoId),
                'casino_logo_alt' => get_post_meta(get_post_thumbnail_id($casinoId), '_wp_attachment_image_alt', true),
                'casino_website_link' => get_field('casino_website_link', $casinoId),
                'casino_description' => get_field('description', $casinoId),
                'casino_key_features' => get_field('key_features', $casinoId),
                'casino_sign_up_bonus' => get_field('sign_up_bonus', $casinoId),
                'casino_terms_cond' => get_field('terms_and_conditions', $casinoId),
                'casino_aff_code' => get_field('affiliate_code', $casinoId)
            ];
        }
        return $casinoList;
    }

    public function processMultipleCasinos($casinoList)
    {
        foreach ($casinoList as $casinoKey => $casinoValue) {
            $casinoId = $casinoValue['casino'][0]->ID;
            $casinoList[$casinoKey] = [
                'casino_name' => get_the_title($casinoId),
                'casino_logo' => get_the_post_thumbnail_url($casinoId),
                'casino_logo_alt' => get_post_meta(get_post_thumbnail_id($casinoId), '_wp_attachment_image_alt', true),
                'casino_website_link' => get_field('casino_website_link', $casinoId),
                'casino_description' => get_field('description', $casinoId),
                'casino_key_features' => get_field('key_features', $casinoId),
                'casino_sign_up_bonus' => get_field('sign_up_bonus', $casinoId),
                'casino_terms_cond' => get_field('terms_and_conditions', $casinoId),
                'casino_aff_code' => get_field('affiliate_code', $casinoId)
            ];
        }
        return $casinoList;
    }

    public function processSingleTradingExchange($tradingExchangesList)
    {
        foreach ($tradingExchangesList as $exchangeKey => $exchangeValue) {
            $exchangeID = $exchangeValue->ID;
            $tradingExchangesList[$exchangeKey] = [
                'exchange_name' => get_the_title($exchangeID),
                'exchange_logo' => get_the_post_thumbnail_url($exchangeID),
                'exchange_logo_alt' => get_post_meta(get_post_thumbnail_id($exchangeID), '_wp_attachment_image_alt', true),
                'website_link' => get_field('website_link', $exchangeID),
                'exchange_key_features' => get_field('key_features', $exchangeID),
                'exchange_aff_code' => get_field(' trading_platform_affiliate_code', $exchangeID)
            ];
        }
        return $tradingExchangesList;
    }

    public function processMultipleTradingExchanges($tradingExchangesList)
    {
        foreach ($tradingExchangesList as $exchangeKey => $exchangeValue) {
            $exchangeID = $exchangeValue['crypto_exchange'][0]->ID;
            $tradingExchangesList[$exchangeKey] = [
                'exchange_name' => get_the_title($exchangeID),
                'exchange_logo' => get_the_post_thumbnail_url($exchangeID),
                'exchange_logo_alt' => get_post_meta(get_post_thumbnail_id($exchangeID), '_wp_attachment_image_alt', true),
                'website_link' => get_field('website_link', $exchangeID),
                'exchange_key_features' => get_field('key_features', $exchangeID),
                'exchange_deposit_methods' => get_field('deposit_methods', $exchangeID),
                'exchange_fiat_currencies' => get_field('fiat_currencies', $exchangeID),
                'exchange_aff_code' => get_field('trading_platform_affiliate_code', $exchangeID)

            ];
        }
        return $tradingExchangesList;
    }

    public function processCriteriaReviewItems($review)
    {
        foreach ($review as $reviewKey => $reviewValue) {
            $reviewId = $reviewValue['criteria_review'][0]->ID;
            $selectedCasino = get_field('casino', $reviewId);
            $review[$reviewKey] = [
                'ID' => $reviewValue['criteria_review'][0]->ID,
                'post_title' => $reviewValue['criteria_review'][0]->post_title,
                'post_content' => $reviewValue['criteria_review'][0]->post_content,
                'featured_image' => get_the_post_thumbnail_url($reviewId),
                'featured_image_alt' => get_post_meta(get_post_thumbnail_id($reviewId), '_wp_attachment_image_alt', true),
                'selected_casino' => $this->processSingleCasino($selectedCasino)
            ];
        }
        return $review;
    }
}