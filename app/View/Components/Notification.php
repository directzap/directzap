<?php

namespace App\View\Components;

use App\Models\Alert;
use App\Models\Update;
use Illuminate\View\Component;

class Notification extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
         
        $alerts = Alert::join('alert_users', 'alert_users.alert_id', '=', 'alerts.id')->where('alert_users.user_id', auth()->user()->id)->where('lido', 0)->get();
        $updates = Update::join('update_users', 'update_users.update_id', '=', 'updates.id')->where('update_users.user_id', auth()->user()->id)->where('lido', 0)->get();

        $count = count($alerts) + count($updates);
        return view('components.notification', [
            'alerts' => $alerts,
            'updates' => $updates,
            'count' => $count
        ]);
    }
}
