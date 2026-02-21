<x-layouts.main>
    <x-slot:title>
        Post Yaratish
    </x-slot:title>

    <x-page-header>
        Yangi Post Yaratish
    </x-page-header>


    <div class="container col-md-5 offset-md-3.5 py-5">
        <div class="align-items-center py-4">
            <div class="contact-form">
                <div id="success"></div>

               

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <div class="control-group mb-4">
                        <input 
                            type="text" 
                            name="title"
                            value="{{ old('title') }}"
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
                        >{{ old('short_content') }}</textarea>
                    </div>
                    <div class="control-group mb-4">
                        <textarea class="form-control p-4 @error('content') is-invalid @enderror" rows="6" name="content" placeholder="@error('content'){{ $message }}@else Ma'qola @enderror">{{ old('content') }}</textarea>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control p-4" name="image" placeholder="Rasm" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                            Yaratish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layouts.main>