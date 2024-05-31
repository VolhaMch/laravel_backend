<form action="{{asset('blog/'.$record->id.'/add_text')}}" method="post">
    @csrf
    <textarea name="body" id="" rows="5" class="w-full"></textarea><br/>

    <button type="submit" class="text-warning underline">
        Добавить
    </button>
</form>
@foreach($record->texts()->orderBy('id', 'DESC')->get() as $text)
    <div>
        <form action="{{asset('blog_text/'.$text->id.'/edit')}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <textarea name="body" id="" rows="5" class="w-full">{!! $text->body !!}</textarea><br/>

            <button type="submit" class="text-warning underline">
                Сохранить
            </button>
        </form>
        <div class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6">
            @foreach($text->pictures()->orderBy('id', 'DESC')->get() as $picture)
                <div class="shadow-amber-600 rounded-3xl bg-indigo-300 w-full">
                    <a href="#" onclick="
                 var ask = window.confirm('Вы уверены?');
                if (ask) {
                window.location.href = '/blogpicture/{{$picture->id}}/delete';
                }
                " class="float-right">&times;</a>

                    <sub class="">
                        {{$picture->name}}
                    </sub>
                    <img src="{{asset('storage/blogs/s_'.$picture->picture)}}"/>
                </div>
            @endforeach
        </div>
        <hr/>
        <form action="{{asset('blogtext/'.$text->id.'/add_picture')}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="file" name="picture" class="" style="width: 270px">
            <label for="name">Название</label>
            <input type="text" name="name" class="" id="name">
            <label for="position">Позиция</label>
            <input type="number" style="width: 60px" name="position" min="0" class="">
            <button type="submit" class="text-warning underline">
                Добавить
            </button>
        </form>
    </div>
@endforeach
