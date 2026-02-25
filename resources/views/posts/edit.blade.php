<x-layouts.main>
    <x-slot:title>
        Postni O'zgartirish #{{ $post->id }}
    </x-slot:title>

    <x-page-header>
        Postni O'zgartirish #{{ $post->id }}
    </x-page-header>


    <div class="container col-md-5 offset-md-3.5 py-5">
        <div class="align-items-center py-4">
            <div class="contact-form">
                <div id="success"></div>

               

                <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf  
                    <div class="control-group mb-4">
                        <input 
                            type="text" 
                            name="title"
                            value="{{ $post->title }}"
                            class="form-control p-4 @error('title') is-invalid @enderror"
                            placeholder="@error('title') {{ $message }} @else Sarlavha @enderror"
                        >
                    </div>

                    <div class="control-group mb-4">
                        <textarea
                            class="form-control p-4 @error('short_content') is-invalid @enderror"
                            rows="3"
                            name="short_content"
                            placeholder="@error('short_content'){{ $message }}@else Qisqa mazmuni @enderror"
                        >{{ $post->short_content }}</textarea>
                    </div>
                    <div class="control-group mb-4">
                        <textarea 
                            class="form-control p-4 @error('content') is-invalid @enderror" 
                            rows="6" 
                            name="content" 
                            placeholder="@error('content'){{ $message }}@else Ma'qola @enderror"
                        >{{ $post->content }}</textarea>
                    </div>
                    <div class="control-group mb-4">
                        <input name="photo" type="file" class="form-control p-4" placeholder="Rasm" value="{{ $post->photo }}" />
                        @error('photo')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-content-between">
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-danger py-3 px-5">
                            Bekor qilish       
                        </a>

                        <button class="btn btn-success py-3 px-5" type="submit">
                            Yangilash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</x-layouts.main>