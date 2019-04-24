<?php

namespace App\Helpers;

// REGISTER ON config/app.php
class AdminHelper {


    // FUNCTIONS
    // Get the content type from the url segment
    public static function getContentType( $request ) {
        return $contentType = $request->segment(2);
    }


    public static function getContentTypeRoute( $contentType ) {
        return 'admin.' . $contentType . '.category';
    }
}