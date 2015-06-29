<?php

namespace EXS\MobilityDetectorLightProvider\Services;

/**
 * Detect mobile device
 *
 * Created 1-May-2015
 * @author JY lee <lee@ex-situ.com>
 * @copyright   Copyright 2015 ExSitu Marketing.
 */
class MobilityDetectorLightService
{
    /**
     * Determines if the device is a phone by it's user agent
     * @return boolean
     */
    public function checkMobile($agent = '')
    {
        return (bool) \preg_match('#\b(ip(hone|od)|android\b.+\bmobile|opera m(ob|in)i|windows (phone|ce)|blackberry' .
                        '|s(ymbian|eries60|amsung)|p(alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]' .
                        '|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $agent);
    }

    /**
     * Determines if the device is a tablet by it's user agent
     * @return boolean
     */
    public function checkTablet($agent = '')
    {
        return (bool) \preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet' .
                        '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]' .
                        '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $agent);
    }
}
