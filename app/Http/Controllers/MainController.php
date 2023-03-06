<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\Image;

class MainController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function dashboard()
	{
    	$name = Auth::user()->name;
        $fileName = File::where('name', $name)->pluck('file_name');
        $imageName = Image::where('name', $name)->pluck('image_name');
    	return view('dashboard', ['fileName' => $fileName, 'imageName' => $imageName]);
    }
    public function dashboard2()
	{
    	return view('dashboard2');
    }
    public function dashboard3()
	{
    	return view('dashboard3');
    }
    public function daftar()
	{
    	return view('regist');
    }
    public function edit()
	{
    	return view('edit');
    }
    public function intern()
    {
        return view('register.internship');
    }
    public function fg()
    {
        return view('register.freshgrad');
    }
    public function prof()
    {
        return view('register.professional');
    }
    public function ven1()
    {
        return view('ven.1');
    }
    public function ven2()
    {
        return view('ven.2');
    }
    public function ven3()
    {
        return view('ven.3');
    }
    public function ven4()
    {
        return view('ven.4');
    }
	public function pengumuman()
	{
    	$news = DB::select('SELECT * FROM news ORDER BY news.tanggal DESC');
    	return view('pengumuman', ['news' => $news]);
    }
    public function login()
    {
        return view('login');
    }
    public function login2()
    {
        return view('login2');
    }
    public function login3()
    {
        return view('login3');
    }
    public function cvupload()
    {
    return view('upload.cv');
    }
    public function imgupload()
    {
    return view('upload.photo');
    }
}
