<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'nama_depan' => 'required|string',
            'nama_belakang' => 'nullable|string',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:13',
            'pesan' => 'required|string'
        ]);

        $data['nama'] = $data['nama_belakang'] ? $data['nama_depan'] . " " . $data['nama_belakang'] : $data['nama_depan'];

        Feedback::create($data);

        return redirect('/');
    }
}
