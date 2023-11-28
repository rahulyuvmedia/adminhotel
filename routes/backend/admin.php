<?php

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// routes/web.php

// Route::post('/cancelReservation/{reservation}', 'Backend\Admin\DashboardController@cancelReservation')
//     ->name('cancelReservation');

// Admin
Route::get('/profile', 'AdminController@profile')->name('profile');
Route::get('/edit_profile/{id?}', 'AdminController@edit')->name('edit');
Route::patch('/edit_profile/{id?}', 'AdminController@update')->name('update');
Route::get('/change_password', 'AdminController@change_password')->name('change_password');
Route::post('/change_password/update_password', 'AdminController@update_password')->name('update_password');


/* ===== Blog Start =========== */

// Blog Controller
Route::resource('blogs', 'BlogController');
Route::get('/allBlogs', 'BlogController@getAll')->name('allBlogs');

/* ===== Blog End =========== */
Route::get('/users', 'AdminController@index')->name('admin.user.index');

Route::post('/users', 'AdminController@store')->name('admin.users.store');


/* ===== Access Management Start =========== */
Route::resource('users', 'UserController');

Route::get('/users', 'UserController@index')->name('admin.user.index');
Route::get('/allUser', 'UserController@getAll')->name('allUser.users');
Route::get('/export', 'UserController@export')->name('export');

Route::resource('permissions', 'PermissionController');
Route::get('/allPermissions', 'PermissionController@getAll')->name('allPermissions');

Route::resource('roles', 'RoleController');
Route::get('/allRoles', 'RoleController@getAll')->name('allRoles');

/* ===== Settings Start =========== */

// Settings Controller
Route::resource('settings', 'SettingsController');
Route::get('/allSettings', 'SettingsController@getAll')->name('allSettings');

/* ===== Settings End =========== */

/* ===== Backup Start =========== */

Route::get('backups', 'BackupController@index');
Route::get('allBackups', 'BackupController@getAll')->name('allBackups');
Route::post('backups/db_backup', 'BackupController@db_backup');
Route::post('backups/full_backup', 'BackupController@full_backup');
Route::get('backups/download/{file_name}', 'BackupController@download');
Route::delete('backups/delete/{file_name}', 'BackupController@delete');

/* ===== Backup End =========== */


// Examples

Route::get('/barcode', 'AdminController@barcode');
Route::get('/passport', 'AdminController@passport');


// Rahul Soni Routing

Route::resource('guest', 'GuestController');
Route::get('/guest/active/{id}', 'GuestController@active');
Route::get('/guest/inactive/{id}', 'GuestController@inactive');

Route::resource('guestHistory', 'GuestHistoryController');
Route::resource('policeInquiry', 'PoliceInquiryController');
 
Route::resource('rooms', 'RoomsController');
Route::get('/rooms/active/{id}', 'RoomsController@active');
Route::get('/rooms/inactive/{id}', 'RoomsController@inactive');


Route::resource('master', 'MasterController');
Route::resource('submaster', 'SubMasterController');


Route::get('/user/active/{id}', 'UserController@active');
Route::get('/user/inactive/{id}', 'UserController@inactive');
