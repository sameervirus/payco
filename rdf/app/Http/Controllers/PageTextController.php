<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageText;

class PageTextController extends Controller
{
    public function index()
    {
        $pageTexts = PageText::orderBy('title')->get();

        return view('admins.page_texts.index', compact('pageTexts'));
    }

    public function create()
    {
        return view('admins.page_texts.text');
    }

    public function store(Request $request)
    {
        $pageText = new PageText;
        $pageText->title = $request->title;
        $pageText->content = $request->content;
        $pageText->save();

        return redirect()->route('admins.page_texts.index');
    }

    public function show(PageText $pageText)
    {
        return view('admins.page_texts.text', compact('pageText'));
    }

    public function edit(PageText $pageText)
    {
        return view('admins.page_texts.text', compact('pageText'));
    }

    public function update(Request $request, PageText $pageText)
    {
        $pageText->title = $request->title;
        $pageText->content = $request->content;
        $pageText->save();

        return redirect()->route('admins.page_texts.index');
    }

    public function destroy(PageText $pageText)
    {
        $pageText->delete();

        return redirect()->route('admins.page_texts.index');
    }
}
