<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\BlogText;
use App\Models\BlogTextPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Actions\Imag;



class BlogController extends Controller
{
    public function getAll(){
        $lang = App::getLocale();

        $blogs = Blog::where('lang', $lang)->orderBy('id', 'DESC')->get();
        return view('blogs', compact('blogs'));
    }
    public function getOne(Blog $blog){
        return view('blog', compact('blog'));

    }
    public function postBlogText(Blog $blog, Request $request)
    {
        BlogText::create([
            'user_id' => Auth::id(),
            'blog_id' => $blog->id,
            'body' => $request->body
        ]);
        return redirect()->back();
    }
    public function updateBlogText(BlogText $blog_text, Request $request)
    {
        $blog_text->update($request->all());
        return redirect()->back();
    }
    public function addPicture(Request $request, BlogText $blog_text)
    {
        $picture = App::make(Imag::class)->url($request->file('picture'), '/app/public/blogs/');
        $pic = new BlogTextPicture;
        $pic->picture = $picture;
        $pic->user_id = Auth::id();
        $pic->blog_text_id = $blog_text->id;
        $pic->name = $request->name ?? '';
        $pic->position = $request->position ?? '';
        $pic->save();
        return redirect()->back();
    }
    public function deletePicture(BlogTextPicture $blog_text_picture, Request $request)
    {
        if (file_exists(storage_path() . '/app/public/blog/' . $blog_text_picture->picture)) {
            $pic = '/app/public/blog/' . $blog_text_picture->picture;
            $pic_s = '/app/public/blog/s' . $blog_text_picture->picture;
            if (file_exists($pic)) {
                unlink(storage_path() . $pic);
            }
            if (file_exists($pic_s)) {
                unlink(storage_path() . $pic_s);
            }
        }
        BlogTextPicture::where('id', $blog_text_picture->id)->delete();
        return redirect()->back();
    }
}

