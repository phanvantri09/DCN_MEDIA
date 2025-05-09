@extends('front.layout.index')
@section('content')
    @include('front.layout.banner')
    <div class="section section-padding-t100-b200 section-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($data->isEmpty())
                        <div class="text-center">
                            <p>Dịch vụ chưa được cập nhật</p>
                        </div>
                    @else
                        <div class="program-tab" data-aos="fade-up">
                            <ul class="nav justify-content-center">
                                @foreach ($data as $key => $item)
                                    @if ($key == 0)
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tabS{{ $item->id }}">{{ $item->name }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a data-toggle="tab" href="#tabS{{ $item->id }}">{{ $item->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                            @foreach ($data as $key => $item)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tabS{{ $item->id }}">
                                    <div class="all-program-routine table-responsive">
                                        <img src="{{\App\Helpers\ConstCommon::getLinkImageToStorage("service/" . $item->image)}}"
                                            alt="Cover">
                                    </div>
                                    <div>
                                        {!! $item->description !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Program Section End -->
@endsection