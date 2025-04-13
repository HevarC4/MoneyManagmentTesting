<?php

<<<<<<< HEAD
use App\Livewire\Dashboard;
=======
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\VerifyEmailNotice;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
>>>>>>> 6403e7f400f30b8ea962ebddbdfefd5e4175e2a6
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

<<<<<<< HEAD
Route::get('/', Dashboard::class)->name('dashboard');
=======
// Guest routes
Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
    
    // Verification notice accessible without auth
    Route::get('/email/verify', VerifyEmailNotice::class)
        ->name('verification.notice');
});

// Logout route
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

// Email verification handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('login')
        ->with('status', 'Email verified! You can now login.');
})->middleware('signed')->name('verification.verify');

// Verification resend route
Route::post('/email/verification-notification', function (Request $request) {
    // Get user from session if exists (from login attempt)
    $userId = session('unverified_user_id');
    $user = $userId ? User::find($userId) : $request->user();
    
    if (!$user) {
        return redirect()->route('login');
    }

    $user->sendEmailVerificationNotification();
    return back()->with('status', 'Verification link sent!');
})->middleware('throttle:6,1') // 6 attempts per minute
  ->name('verification.send');

// Protected routes that require verified email
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Avatar update route
    Route::post('/avatar', function (Request $request) {
        $request->validate([
            'avatar' => 'required|image|max:2048', // 2MB max
        ]);
        
        // Store the new avatar
        $path = $request->file('avatar')->store('avatars', 'public');
        
        // Update user's avatar
        auth()->user()->update(['avatar' => $path]);
        
        return back()->with('status', 'Avatar updated successfully!');
    })->name('avatar.update');
    
    // Add other protected routes here
});
>>>>>>> 6403e7f400f30b8ea962ebddbdfefd5e4175e2a6
