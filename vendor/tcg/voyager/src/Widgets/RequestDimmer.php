<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class RequestDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Request::count();
        // $customer =\App\Picker::where('picker_category_id',1)->count();
        // $seller =\App\Picker::where('picker_category_id',2)->count();
        // $courier =\App\Picker::where('picker_category_id',3)->count();
        // $string = trans_choice('voyager::dimmer.user', $count);
        $string = 'Requests';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-basket',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '.$count. ' Request in your database. Click on button below to view all requests.',
            'cat'    => '',
            'button' => [
                'text' => 'View all Requests',
                'link' => route('voyager.requests.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/06.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}
