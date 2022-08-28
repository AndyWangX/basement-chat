<?php

namespace Haemanthus\Basement\Contracts;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\LaravelData\DataCollection;

interface MarkPrivatesMessagesAsRead
{
    /**
     * Mark given private messages as has been read.
     *
     * @param \Illuminate\Foundation\Auth\User & \Haemanthus\Basement\Contracts\User $receiver
     * @param \Illuminate\Foundation\Auth\User & \Haemanthus\Basement\Contracts\User $sender
     * @param \Spatie\LaravelData\DataCollection $privateMessages
     * @return \Spatie\LaravelData\DataCollection
     */
    public function markAsRead(
        Authenticatable $receiver,
        Authenticatable $sender,
        DataCollection $privateMessages,
    ): DataCollection;
}