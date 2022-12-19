<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use App\Models\User;

class BarangController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Category: ' . $category->name;
        } elseif (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = 'Barang: ' . $user->name;
        } else {
            $title = 'Semua Barang';
        }
        return view('home', [
            'title' => $title,
            'active' => 'home',
            'barangs' => Barang::latest()->filter(request(['search', 'category', 'user']))->paginate(9)->withQueryString()
        ]);
    }
}
