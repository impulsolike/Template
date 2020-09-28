<?php

namespace App\ImpulsoLike\Template;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

trait TemplateCore
{

    public static function view($options = null)
    {
        $options = !$options || is_integer($options) ? [] : (is_string($options) ? [ 'id' => $options ] : $options);

        $options['app']         = $options['app']       ?? Config::get('app.id');
        $options['template']    = $options['template']  ?? static::config('template');
        $options['layout']      = $options['layout']    ?? static::config('layout');
        $options['lang']        = $options['lang']      ?? Config::get('app.locale');
        $options['id']          = $options['id']        ?? static::config('content');
        $options['title']       = $options['title']     ?? static::getTitle($options['id']);
        $options['class']       = static::getClass($options['class'] ?? '');
        $options['account']     = $options['account']   ?? false;

        return view($options['template'] . '/' . $options['layout'], $options);
    }

    public static function getTitle($id = false)
    {
        return Lang::has($id . '.title') ? Lang::get($id . '.title') : Config::get('app.name');
    }

    public static function getClass($class = false)
    {
        return $class ? static::config('class') . ' ' . $class : static::config('class');
    }

    public static function setting($name = false)
    {
        return static::config('template') . '.' . static::config('settings') . '.' . $name;
    }

    public static function content($name = false)
    {
        return static::config('template') . '.' . static::config('contents') . '.' . $name;
    }

    public static function component($name = false)
    {
        return static::config('template') . '.' .  static::config('components') . '.' . $name;
    }

    public static function asset($asset = false)
    {
        if(!$asset) return '';

        $config = Config::get(static::config('assets'));

        return asset($config[$asset] ?? $asset);
    }

    public static function cdn($asset = false)
    {
        if(!$asset) return '';

        $config = Config::get(static::config('cdn'));

        return $config[$asset] ?? $asset;
    }

    public static function style($asset = false,$type = false)
    {
        $url = $type ? static::cdn($asset) : static::asset($asset);

        return $asset ? '<link type="text/css" rel="stylesheet" href="' . $url . '" />' : '';
    }

    public static function script($asset = false,$type = false)
    {
        $url = $type ? static::cdn($asset) : static::asset($asset);

        return $asset ? '<script type="text/javascript" src="' . $url . '"></script>' : '';
    }

}
