<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 23.05.16
 * Time: 10:02
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-datetimepicker')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-bootstrap')
    ->js('//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js')
    ->js('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js')
    ->css('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css')
    ->jsPackage('sf-bootstrap-datetimepicker-init.js');