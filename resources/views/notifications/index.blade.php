<x-layouts.main>
    <x-slot:title>
        Xabarnomalar
    </x-slot:title>


    {{-- <x-page-header>
        Xabarnomalar
    </x-page-header> --}}

<!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h1 class="section-title mb-3">Xabarnomalar</h1>
                </div>
            </div>
            <div class="d-flex w-100 mb-2">
                <a href="{{ route('notifications.readAll') }}" class="btn btn-warning btn-lg ml-auto mr-5">
                    <span class="glyphicon glyphicon-book"></span> Hammasini o'qish
                </a>
            </div>
                @foreach ($notifications as $notification)
                    <div class="border mb-3 p-4 rounded">
                        <div class="position-relative mb-4">
                            @if($notification->read_at === null)
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1">New</h4>
                                </div>
                            @else
                            <div class="d-flex w-100 mb-2">
                                <a href="{{ route('notifications.delete', ['notification' => $notification->id ]) }}" class="btn btn-warning ml-auto ">
                                    <span class="glyphicon glyphicon-book"></span><i class="material-icons">delete</i>
                                </a>
                            </div>

                            @endif
                        </div>

                        <div class="d-flex mb-2">
                            <a class="text-danger text-uppercase font-weight-medium" >{{ $notification->data['created_at'] }}</a>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $notification->data['title'] }}</h5>
                        <p class="mb-4">{{ 'Yangi Post yaratildi. Id: '.$notification->data['id'] }}</p>
                         @if($notification->read_at === null)
                            <a class="btn btn-sm btn-primary py-2"
                            href="{{ route('notifications.read', ['notification' => $notification->id]) }}">
                            O'qildi
                            </a>
                        @endif
                    </div>
                @endforeach
                    {{$notifications->links()}}

                {{-- <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Blog End -->

</x-layouts.main>
