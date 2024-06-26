<?php

namespace App\Observers;

use App\Enums\StatusEnum;
use App\Models\Request;
use App\Models\User;
use App\Notifications\SendStatusRequestEmailNotification;
use Illuminate\Support\Facades\Log;

class RequestObserver
{
    /**
     * Handle the Request "created" event.
     */
    public function created(Request $request): void
    {
        $user = $request->employee->user;
        $manager = User::find($request->employee->manager->user_id);

        $data = [
            'name' => $user->employee->first_name . ' ' . $user->employee->last_name,
            'body' => 'Tu permiso ha sido creado'
        ];
        $dataManager = [
            'name' => $manager->employee->first_name . ' ' . $manager->employee->last_name,
            'body' => 'Se ha creado un permiso para ' . $user->employee->first_name . ' ' . $user->employee->last_name
        ];

        $user->notify(new SendStatusRequestEmailNotification($data));
        $manager->notify(new SendStatusRequestEmailNotification($dataManager));
    }

    /**
     * Handle the Request "updated" event.
     */
    public function updated(Request $request): void
    {
        try {
            $user = $request->employee->user;
            $request->load('employee');
            if ($request->isDirty('status')) {
                if ($request->status === StatusEnum::APPROVED) {
                    $data = [
                        'name' => $user->employee->first_name . ' ' . $user->employee->last_name,
                        'body' => 'Tu permiso ha sido aprobado',
                        'status' => 'approved',
                        'request' => $request
                    ];
                } else if ($request->status === StatusEnum::REJECTED) {
                    $data = [
                        'name' => $user->employee->first_name . ' ' . $user->employee->last_name,
                        'body' => 'Tu permiso ha sido rechazado'
                    ];
                }

                $user->notify(new SendStatusRequestEmailNotification($data));
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
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
