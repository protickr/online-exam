@extends('layout')
@section('content')
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Question</h2>
        <p class="mb-4">Create a question</p>
    </header>


    <form method="POST" action="/questions/new">
        @csrf
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"> Question </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}"/>

            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="answer" class="inline-block text-lg mb-2"> Answers </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="answer"/>

            @error('answer')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <button>
                Add more
            </button>
        </div>

        <div class="mb-6">
            <label for="duration" class="inline-block text-lg mb-2"> Duration </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="duration"/>

            @error('duration')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="answer_type" class="inline-block text-lg mb-2"> Answer Type </label> <br/>
            <input type="radio" name="answer_type"> Single Answer
            <input type="radio" name="answer_type"> Multiple Answer

            @error('answer_type')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Submit
            </button>
        </div>
    </form>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            let maxField = 10;
            let addButton = $('.add_button');
            let wrapper = $('.field_wrapper');
            let fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>';
            let x = 1;

            $(addButton).click(function(){
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
@endpush
