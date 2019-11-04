<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.User.81', function ($user, $id) {
//     //return (int) $user->id === (int) $id;
//     return true;
// });

Broadcast::channel('qMsg', function ($user) {
    //return (int) $user->id === (int) $id;
    return true;
});

Broadcast::channel('orders', function ($user) {
    return true;
});

Broadcast::channel('user.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Broadcast::channel('likeChannel2', function () {
//     return true;
// });
