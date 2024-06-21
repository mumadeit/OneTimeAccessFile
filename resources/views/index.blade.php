<x-app-layout>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">
                    One Time Access File
                </h1>
                <p class="lead">
                    OtaF is a web application designed for secure, temporary file sharing.
                </p>


                {{-- success --}}

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="form" action="{{ route('upload') }}" enctype="multipart/form-data" method="post">
                    <div class="container">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-8">
                                <input required class="form-control rounded-3" type="file" name="file"
                                    id="file">
                            </div>
                            <div class="col-lg-4">
                                <button class="button rounded-3" type="submit">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>

</x-app-layout>
