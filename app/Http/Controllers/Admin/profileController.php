<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
{
    return view('admin.profile.create');
}
public function create()
{
    $this->validate($request, Profile::$rules);

      $news = new Profile;
      $form = $request->all();

 if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }
      unset($form['_token']);
    
      $profile->fill($form);
      $profile->save();

    return redirect('admin.profile');
    
}
public function edit()
{
    return view('admin.profile.edit');
}
public function update()
{
    return redirect('admin/profile/edit');
}
}