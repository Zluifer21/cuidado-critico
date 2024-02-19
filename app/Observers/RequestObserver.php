<?php

namespace App\Observers;

use App\Models\Request;
use App\Notifications\SendStatusRequestEmailNotification;

class RequestObserver
{
    /**
     * Handle the Request "created" event.
     */
    public function created(Request $request): void
    {
        $user = $request->employee->user;

        $data = [
            'name' => $user->employee->first_name . ' ' . $user->employee->last_name,
            'body' => 'Your request has been created'
        ];

        $user->notify(new SendStatusRequestEmailNotification($data));

    }

    /**
     * Handle the Request "updated" event.
     */
    public function updated(Request $request): void
    {
        $user = $request->employee->user;
        if ($request->status == 'approved') {
            $data = [
                'name' => $request->employee->name,
                'body' => 'Your request has been approved',
                'status' => 'approved',
                'request' => $request
            ];
        } else if ($request->status == 'rejected') {
            $data = [
                'name' => $request->employee->name,
                'body' => 'Your request has been rejected'
            ];
        }

        $user->notify(new SendStatusRequestEmailNotification($data));
    }

    /**
     * Handle the Request "deleted" event.
     */
    public
    function deleted(Request $request): void
    {
        //
    }

    /**
     * Handle the Request "restored" event.
     */
    public
    function restored(Request $request): void
    {
        //
    }

    /**
     * Handle the Request "force deleted" event.
     */
    public
    function forceDeleted(Request $request): void
    {
        //
    }
}
