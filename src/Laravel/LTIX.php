<?php

namespace Tsugi\Laravel;

use Illuminate\Http\Request;

/**
 * This is a class to enable building Laravel Apps using Tsugi
 */
class LTIX extends \Tsugi\Core\LTIX {

    public static function laravelSetup(Request $request, $needed=LTIX::ALL) {
        $_SERVER = array_merge($_SERVER, $request->server());
        $launch = self::requireDataOverride(LTIX::ALL,
            null, /* pdox - default */
            $request->session(),
            null, /* current_url - default */
            $request->all()
        );
        return $launch;
    }

}
