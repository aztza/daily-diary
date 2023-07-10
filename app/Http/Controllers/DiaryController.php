<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiaryController extends Controller
{
    public function home(){
        return view('home');
    }

    public function read(){
        $data = Diary::latest('id')->paginate(2);
        return view('read',compact('data'));
    }

    public function write(){
        return view('write');
    }

    public function save(Request $request){
        $this->validation($request);
        $userData = $this->getData($request);
        Diary::create($userData);
        return redirect('/write')->with('alert','story created completed');
    }

    public function view($id){
        $data = Diary::where('id',$id)->first();
        return view('view',compact('data'));
    }

    public function delete($id){
        $deleteData = Diary::find($id);
        $deleteData->delete();

        return back()->with('alert','the story is deleted');
    }

    public function edit($id){
        $oldDatas = Diary::find($id);
        return view('edit',compact('oldDatas'));
    }

    public function update(Request $request){
        $this->validation($request);
        $updateDatas = $this->getData($request);
        $id = $request->id;
        Diary::where('id',$id)->update($updateDatas);
        return redirect()->route('read#diary')->with(['updated'=>'story updated successful']);
    }
    // create data
        private function getData($request){
            return [
                'title' => $request->title,
                'story' => $request->story
            ];
        }

        private function validation($request){
            $validator = [
                'title' => 'required',
                'story' => 'required',
            ];

            Validator::make($request->all(),$validator)->validate();
        }
}
