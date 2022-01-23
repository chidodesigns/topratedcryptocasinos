<?php

 /**
     * Plugin Name: TRCC Custom Taxonomy Structure 
     * Plugin URI: https://topratedcryptocasinos.co.uk
     * Description: This plugin enables the Top Rated Crypto Casino wordpress taxonomy structure to work.
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

      /**
     * Register COA Taxonomies
     *
     * @return void
     */
    function trcc_custom_taxonomies()
    {
        register_taxonomy( 'crypto_currency', array('casino'), array( 'hierarchical' => true, 'label' => 'Crypto Currency Categories', 'query_var' => true, 'rewrite' => true) );

    }

    add_action('init', 'trcc_custom_taxonomies');