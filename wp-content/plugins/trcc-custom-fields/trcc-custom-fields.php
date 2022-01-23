<?php

    /**
     * Plugin Name: Top Rated Crypto Casino Custom Fields  
     * Plugin URI: https://www.socialimpactreporting.co.uk/
     * Description: This plugin enables the Top Rated Crypto Casino  wordpress custom fields to work.
     * Version: 1.0
     * Author: Chido Ukaigwe
     * Author URI: chido-designs.co.uk
     * License: GPLv2
     */

     /**
      * Copyright (C) 2020  Chido Ukaigwe (email: chidodesigns@gmail.com)
      * This program is free software; you can redistribute it and/or
      * modify it under the terms of the GNU General Public License
      * as published by the Free Software Foundation; either version 2
      * of the License, or (at your option) any later version.
      * This program is distributed in the hope that it will be useful,
      * but WITHOUT ANY WARRANTY; without even the implied warranty of
      * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See theGNU General Public License for more details.
      * You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
      */

      namespace Api;


      use Api\ApiEndPoints\Home;

      use Api\ApiEndPoints\Services;
      use Api\Utils\CustomQueries;
      use Api\Utils\MapAcfJson;

      class Api
      {

         public function __construct()
         {
             $this->runUtils();
             $this->initApiEndPoints();
             $this->initGlobal();
         }

         private function runUtils()
         {
            new MapAcfJson;
            new CustomQueries;
         }

         private function initApiEndPoints()
         {
            new Home(get_the_ID());
   
         }

         private function initGlobal()
         {

         }

      }

      new Api;