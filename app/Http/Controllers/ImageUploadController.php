<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodImageRequest;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Foods;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    public function avatarUpdate(UpdateAvatarRequest $request): RedirectResponse
    {
        $path = Storage::disk('public')->put('avatars',$request->file('avatar'));

        if ($oldAvatar = $request->user()->avatar) {
            Storage::disk('public')->delete($oldAvatar);
        }
        User::find(Auth()->user()->id)->update(['avatar' => $path]);

        return Redirect::route('profile.edit')->with(['message'=>'Avatar is changed']);
    }
    public function foodImage(FoodImageRequest $request, string $id): RedirectResponse
    {
        $product = Foods::findOrFail($id);


        $path = Storage::disk('public')->put('foods',$request->file('food_image'));

        if ($oldAvatar = $product->food_image) {
            Storage::disk('public')->delete($oldAvatar);
        }

        $product->update(['food_image'=>$path]);

        return redirect()->back()->with(['message'=>'Image Uploaded']);
    }
}
