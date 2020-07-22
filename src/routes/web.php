<?php 

// Invitation routes
Route::group(['prefix' => 's3g/invitations', 
            'namespace' => 'ELSENOSY\S3GAuthentication\Http\Controllers',
            'middleware' => 'web'
        ], function() {

    Route::get('/', 'S3gInvitationController@home');           
    Route::post('send', 'S3gInvitationController@send')->name('sendInvitationMail');
    Route::get('accept/{token}', 'S3gInvitationController@accept')->name('acceptInvitationCode');
});

