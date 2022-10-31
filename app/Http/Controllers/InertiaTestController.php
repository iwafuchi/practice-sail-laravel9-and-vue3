<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertisaTest;

class InertiaTestController extends Controller {
    public function index() {
        return Inertia::render('Inertia/Index');
    }
    public function create() {
        return Inertia::render('Inertia/Create');
    }
    public function show($id) {
        return Inertia::render('Inertia/Show', ['id' => $id]);
    }
    public function store(Request $request) {
        $inertiaTest = new InertisaTest();
        $attributes = $request->only('title', 'content');
        $inertiaTest->fill([
            'title' => $attributes['title'],
            'content' => $attributes['content']
        ])->save();
        return to_route('inertia.index');
    }
}
