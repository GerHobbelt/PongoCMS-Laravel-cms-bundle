var BASE = '{{Config::get('application.url')}}';
var MAX_UP = '{{strtolower(str_replace(' ','',Config::get('cms::settings.max_size'))).'mb'}}';
