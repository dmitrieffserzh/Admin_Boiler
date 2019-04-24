<?php

namespace App\Helpers;

// REGISTER ON config/app.php
class AdminHelper {


    // FUNCTIONS
    // Get the content type from the url segment
    public static function getContentType( $request ) {
        return $content_type = $request->segment(2);
    }




    // TAXONOMY ROUTING
    public static function getTaxRouteIndex( $content_type ) {
        return 'admin.' . $content_type . '.category';
    }

    public static function getTaxRouteCreate( $content_type ) {
        return 'admin.' . $content_type . '.category.create';
    }

    public static function getTaxRouteStore( $content_type ) {
        return 'admin.' . $content_type . '.category.store';
    }

    public static function getTaxRouteEdit( $content_type ) {
        return 'admin.' . $content_type . '.category.edit';
    }

    public static function getTaxRouteUpdate( $content_type ) {
        return 'admin.' . $content_type . '.category.update';
    }

    public static function getTaxRouteDelete( $content_type ) {
        return 'admin.' . $content_type . '.category.delete';
    }
}