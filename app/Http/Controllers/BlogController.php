<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Blog;

class BlogController extends Controller
{
    public function index()
      {
        $blogs = Blog::all();
        return view("blog/home",["blogs" => $blogs]);
      }

      public function show($id)
        {
          $nilai = "ini adalah linknya" .$id;
          $users = DB::table('user')->get();

          return view("blog/single", ["blog" => $nilai, "users" => $users]);
        }
    }
