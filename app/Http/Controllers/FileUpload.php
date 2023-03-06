<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\Image;
class FileUpload extends Controller
{
  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:pdf'
        ]);      
        $fileName = $req->file->getClientOriginalName();
        $req->file->move(public_path('files'), $fileName);
        $name = Auth::user()->name;
        $fileModel = new File([
			'name' => $name,
			'apply' => $req->apply,
            'file_name' => $fileName
        ]);
        $fileModel->save();
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileName);
   }

     public function imageUpload(Request $req){
        $req->validate([
        'image' => 'required|image|mimes:jpeg,jpg',
        ]);
        $imageName = time().'.'.$req->image->extension();  
        $req->image->move(public_path('images'), $imageName);
        $name = Auth::user()->name;
        $imageModel = new Image([
			'name' => $name,
            'image_name' => $imageName
        ]);
        $imageModel->save();
        return back()
        ->with('success','Image has been uploaded.')
        ->with('image', $imageName);    
   }

   public function vendorUpload1(Request $req){
        $req->validate([
        'file' => 'required|mimes:pdf,zip'
        ]);      
        $fileName = $req->file->getClientOriginalName();
        $req->file->move(public_path('vendor_HMN'), $fileName);
        return back()
        ->with('success','File has been uploaded.');
   }

    public function vendorUpload2(Request $req){
        $req->validate([
        'file' => 'required|mimes:pdf,zip'
        ]);      
        $fileName = $req->file->getClientOriginalName();
        $req->file->move(public_path('vendor_Aire'), $fileName);
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileName);
   }

    public function vendorUpload3(Request $req){
        $req->validate([
        'file' => 'required|mimes:pdf,zip'
        ]);      
        $fileName = $req->file->getClientOriginalName();
        $req->file->move(public_path('vendor_PPM'), $fileName);
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileName);
   }

   public function vendorUpload4(Request $req){
        $req->validate([
        'file' => 'required|mimes:pdf,zip'
        ]);      
        $fileName = $req->file->getClientOriginalName();
        $req->file->move(public_path('vendor_MCU'), $fileName);
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $fileName);
   }
}