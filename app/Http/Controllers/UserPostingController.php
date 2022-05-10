<?php

namespace App\Http\Controllers;

use App\UserPosting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserPostingController extends Controller
{
    public function userPostingShow() {
        $posts = UserPosting::all();
        return view('UserPosting.UserPostingIndex', compact('posts'));
    }

    public function create() {
        return view('UserPosting.create_post');
    }

    public function submit(Request $request) {

        $image_url = '';

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
        }

        $data = [
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'mobile_no' => $request->get('mobile_no'),
            'user' => $request->get('user'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            // 'user_id' => Auth::check() ? Auth::user()->id : '',
            'approved_declined' => $request->get('approved_declined'),
            'image' => $image_url ?? '',
        ];

        UserPosting::insert($data);
        return redirect()->back();
    }

    // public function edit($id) {

    //     $post = UserPosting::where('id', $id)->first();
    //         if($post){
    //             return view('',compact('post'));
    //         }
    // }

    // public function update(Request $request, $id) {

    //     $image_url = '';

    //     if($request->hasFile('cover')) {
    //         $file = $request->file('cover');
    //         $new_name = str_random(5).time().$file->getClientOriginalName();
    //         $path =public_path('/uploads');
    //         $file->move($path, $new_name);
    //         $image_url = asset('uploads/'.$new_name);
    //     }

    //     $data = [
    //         '' => $request->get(''),
    //         '' => $request->get(''),
    //         '' => $request->get(''),
    //         '' => $request->get(''),
    //         '' => $image_url ?? '',
    //     ];

    //     UserPosting::where('id',$id)->update($data);
    //     return redirect()->route('');

    // }

    public function delete($id) {
        $post = UserPosting::find($id);
        if($post) {
            UserPosting::destroy($id);
        }
        return redirect()->back();
    }
}
