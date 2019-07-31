<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class DropperDimmer extends BaseDimmer
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
        $count = \App\Dropper::count();
        $signedUp =\App\Dropper::where('status_id',1)->count();
        $active =\App\Dropper::where('status_id',3)->count();
        $deactive =\App\Dropper::where('status_id',4)->count();
        // $string = trans_choice('voyager::dimmer.user', $count);
        $string = 'Droppers';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '.$count. ' Droppers in your database. Click on button below to view all droppers.',
            'cat'    => 'Signed Up '.$signedUp.' , Active '.$active.' , Deactive '.$deactive.'. ',
            'button' => [
                'text' => 'View all Droppers',
                'link' => route('voyager.droppers.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/04.jpg'),
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
