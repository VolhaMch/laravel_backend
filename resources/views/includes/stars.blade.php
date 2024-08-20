<div class="flex justify-center gap-1 w-20  text-xl font-bold text-center text-green-500 bg-white border border-gray-400 hover:border-blue-600 dark:bg-gray-800 rounded -top-2 -left-2">
        <span class="self-end text-sm text-gray-300">{{optional($model->stars())->where('model_name', $model_name)->where('model_id', $model_id)->count()}}

            <a href="{{asset('star/add?model_name='.$model_name.'&model_id='.$model_id)}}">
                @if(optional($model->stars())->where('ip', $_SERVER['REMOTE_ADDR'])->count() > 0)
                    <i class="fa-solid fa-thumbs-up"></i>
                @else
                    <i class="fa-regular fa-thumbs-up"></i>
                @endif
            </a>
        </span>
</div>
