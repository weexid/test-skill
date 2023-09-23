<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function updateSiswa(Request $request){
        
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'min:5' , 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date', 'date:Y-m-d'],
            'sekolah' => ['nullable', 'string', 'max:255'],
            'nama_ortu' => ['required', 'string', 'min:5', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
        ],[
            'nama_lengkap.min' => 'Nama Lengkap harus lebih dari 5 karakter',
            'nama_ortu.min' => 'Nama Orang Tua Lahir harus lebih dari 5 karakter'
            
        ]);
        
        
        $user = $request->user();

        $user->profile->update([
            'nama' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'sekolah' => $request->sekolah,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
        ]);


        return Redirect::route('profile.edit')->with('status', 'profile-updated');

    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
