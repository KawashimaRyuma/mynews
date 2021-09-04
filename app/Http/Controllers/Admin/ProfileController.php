<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{

    public function add()
{
    return view('admin.profile.create');
}
public function create(Request $request)
{
    $this->validate($request, Profile::$rules);

      $news = new Profile;
      $form = $request->all();

 
      unset($form['_token']);
    
      $profile->fill($form);
      $profile->save();

    return redirect('admin/profile/create');
}
 public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != ' $request->cond_title;') {
          $posts = ProfileProfile::where('title', $cond_title)->get();
      } else {
          $posts = Profile::all();
      }
      return view('admin.ProfileProfile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
 public function edit(Request $request)
  {
     
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }

  public function update(Request $request)
  {
      
      $this->validate($request, Profile::$rules);
    
      $profile =Profile::find($request->id);
      
      $profile_form = $request->all();
      if ($request->remove == 'true') {
          $profile_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $profile_form['image_path'] = basename($path);
      } else {
          $profile_form['image_path'] = $news->image_path;
      }

      unset($profile_form['image']);
      unset($profile_form['remove']);
      unset($profile_form['_token']);
      
      $profile->fill($news_form)->save();
      return redirect('admin/profile');
  }
   public function delete(Request $request)
  {
    
      $profile = Profile::find($request->id);
     
      $profile->delete();
      
      return redirect('admin/profile/');
 }
}