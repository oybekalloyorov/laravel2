<x-layouts.main>
    <x-slot:title>
        Post yaratish
    </x-slot:title>


    <x-page-header>
        Yangi Post yaratish
    </x-page-header>

            <div class="container">
                <div class="w-50 py-4">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            {{-- <div class="control-group">
                                <input type="image" class="form-control p-4" id="subject" placeholder="Rasm" />
                                <p class="help-block text-danger"></p>
                            </div> --}}
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Qisqacha mazmuni" required="required" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" name="content" placeholder="Ma'qola" required="required" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-layouts.main>
