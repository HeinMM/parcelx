@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @auth()
                    <form action="{{ route('a-yty-booking.store') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                @endauth
                    <form action="{{ route('noBookingStore') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                @guest()

                @endguest
                    {{-- ///sender data//// --}}

                    <div class="card mb-3">
                        <div class="card-header">SENDER</div>

                        <div class="col">
                            <p class="m-3 text-primary">ပို့ဆောင်သူရဲ့ ဒေတာ</p>
                            @auth()
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                                </div>
                                <input name="sender-name" type="text"
                                    class="form-control @error('sender-name') is-invalid @enderror"
                                    placeholder="{{ $user->name }}" value="{{ old('sender-name') }}" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                @error('sender-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @endauth

                            @guest()
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                                </div>
                                <input name="sender-name" type="text"
                                    class="form-control @error('sender-name') is-invalid @enderror"
                                     value="{{ old('sender-name') }}" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                @error('sender-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @endguest

                            @auth()
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                </div>
                                <input name="sender-phone" type="text"
                                    class="form-control @error('sender-name') is-invalid @enderror"
                                    placeholder="{{ $user->phone }}" value="{{ old('sender-phone') }}"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('sender-phone')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @endauth

                            @guest()
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                </div>
                                <input name="sender-phone" type="text"
                                    class="form-control @error('sender-name') is-invalid @enderror"
                                     value="{{ old('sender-phone') }}"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('sender-phone')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @endguest


                        </div>

                    </div>

                    {{-- ////sender address//// --}}

                    <div class="card mb-3">
                        <div class="card-header">SENDER ADDRESS</div>

                        <div class="col">

                            <p class="m-3 text-primary">PARCEL X မှလာယူရမည့်လိပ်စာ</p>
                            <div class="form-floating mb-3 p-1">
                                <select name="sender-city" class="form-select " aria-label="Default select example">
                                    <option value="yangon" selected>Yangon</option>
                                </select>

                                <label class="" for="floatingSelect">မြို့</label>
                            </div>

                            <div class="form-floating mb-3 p-1">
                                <select name="sender-township"
                                    class="form-select  @error('sender-township') is-invalid @enderror"
                                    aria-label="Default select example">
                                    <option value="" selected>မြို့နယ်ရွေးပါ</option>
                                    @foreach ($townships as $township)
                                        <option value="{{ $township->id }}" @selected(old('sender-township') == $township)>
                                            {{ $township->township_name }}</option>
                                    @endforeach
                                </select>
                                @error('sender-township')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror

                                <label class="" for="floatingSelect">မြို့နယ်</label>
                            </div>




                            <input value type="text" hidden>

                            <p class=" mx-3 text-primary">လိပ်စာအား အသေးစိတ်ရေးပေးပါ</p>
                            <div class="input-group mb-3 p-1">
                                <input name="sender-address-detail" type="text"
                                    class="form-control @error('sender-address-detail') is-invalid @enderror"
                                     value="{{ old('sender-address-detail') }}"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('sender-address-detail')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="input-group">

                                <textarea name="sender-address-detail" class="form-control m-1 @error('sender-address-detail') is-invalid @enderror" rows="4" cols="5">
                                    {{ old('sender-address-detail') }}</textarea>
                                @error('sender-address-detail')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

                        </div>

                    </div>

                    {{-- //////receiver data//////// --}}

                    <div class="card mb-3">
                        <div class="card-header">RECEIVER</div>

                        <div class="col">
                            <p class="m-3 text-primary">ပစ္စည်းလက်ခံသူ၏ ဒေတာ</p>
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                                </div>
                                <input name="receiver-name" type="text"
                                    class="form-control @error('receiver-name') is-invalid @enderror"
                                    value="{{ old('receiver-name') }}" placeholder="လက်ခံသူ၏နာမည်" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                @error('receiver-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                </div>
                                <input name="receiver-phone" type="text"
                                    class="form-control  @error('receiver-phone') is-invalid @enderror"
                                    value="{{ old('receiver-phone') }}" placeholder="လက်ခံသူ၏ဖုန်းနံပတ်"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('receiver-phone')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>

                    {{-- ////receiver address////// --}}

                    <div class="card mb-3">
                        <div class="card-header">RECEIVER ADDRESS</div>

                        <div class="col">
                            <p class="m-3 text-primary">PARCEL X မှပို့ဆောင်ရမည့်လိပ်စာ</p>
                            <div class="form-floating mb-3 p-1">
                                <select name="receiver-city" class="form-select " aria-label="Default select example">
                                    <option value="yangon" selected>Yangon</option>
                                </select>

                                <label class="" for="floatingSelect">မြို့</label>
                            </div>

                            <input value="" id="receiver-township-hidden" type="number" hidden>

                            <div class="form-floating input-group mb-3 p-1">

                                <input name="receiver-township" min="1" type="numeric" id="receiver-township"
                                    class="form-control @error('receiver-township') is-invalid @enderror"
                                    value="မြို့နယ်ရွေးပေးပါ" hidden />

                                <input name="receiver-township-clone" min="1" type="numeric"
                                    id="receiver-township-clone"
                                    class="form-control @error('receiver-township-clone') is-invalid @enderror"
                                    value="မြို့နယ်ရွေးပေးပါ" readonly />

                                <button class="btn btn-outline-secondary " type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">ရွေးမည်</button>
                                @error('receiver-township')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="form-label" for="typeNumber">မြို့နယ်</label>
                            </div>

                            {{-- <div class="form-floating mb-3 p-1">
                                <select name="receiver-township"
                                    class="form-select @error('receiver-township') is-invalid @enderror"
                                    aria-label="Default select example">
                                    <option value="" selected>မြို့နယ်ရွေးပါ</option>
                                    @foreach ($townships as $township)
                                        <option value="{{ $township->id }}" @selected(old('receiver-township') == $township)>
                                            {{ $township->township_name }}</option>
                                    @endforeach
                                </select>
                                @error('receiver-township')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror

                                <label class="" for="floatingSelect">မြို့နယ်</label>
                            </div> --}}

                            <p class=" mx-3 text-primary">လိပ်စာအား အသေးစိတ်ရေးပေးပါ</p>
                            <div class="input-group mb-3 p-1">
                                <input name="receiver-address-detail" type="text"
                                    class="form-control @error('receiver-address-detail') is-invalid @enderror"
                                     value="{{ old('receiver-address-detail') }}"
                                    aria-label="Username" aria-describedby="basic-addon1">

                                @error('receiver-address-detail')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                
                            </div>
                        </div>
                    </div>

                    {{-- ////parcel data////// --}}

                    <div class="card mb-3">
                        <div class="card-header">WEIGHT AND COUNT</div>

                        <div class="col">
                            <p class="m-3 text-primary">Size နင့် အလေးချိန် ရွေးပေးပါရန်</p>

                            <div class="form-floating input-group mb-3 p-1">

                                <input name="weight" type="numeric" min="1" max="40" id="weight"
                                    class="form-control @error('weight') is-invalid @enderror"
                                    value="{{ old('weight') ?? '1' }}" />

                                <button class="btn btn-outline-secondary " type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">ရွေးမည်</button>
                                @error('weight')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="" for="floatingSelect">အလေးချိန်(KG)</label>

                            </div>

                            <div class="form-floating input-group mb-3 p-1">
                                <input name="count" min="1" type="numeric" id="count"
                                    class="form-control @error('count') is-invalid @enderror"
                                    value="{{ old('count') ?? '1' }}" />
                                {{-- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????? --}}
                                <button class="btn btn-outline-secondary " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                    >ရွေးမည်</button>
                                {{-- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????? --}}
                                @error('count')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="form-label" for="typeNumber">အရေအတွက်</label>
                            </div>

                            <div class="mb-3 p-1 d-flex justify-content-end">
                                <div class="">
                                    <p>Total fees:</p>
                                </div>
                                <div class="">
                                    <p class="fw-bold text-primary" id="resultValue">0MMK</p>
                                </div>
                            </div>

                            <div class="form-floating mb-3 p-1 ">
                                <input name="parcel-name" type="text" id="count"
                                    class="form-control @error('parcel-name') is-invalid @enderror"
                                    value="{{ old('parcel-name') }}" />
                                @error('parcel-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="form-label " for="typeNumber">ပါ၀င်ပစ္စည်းများ</label>
                            </div>

                            <div>
                                <ul>
                                    <li class="li-custom">
                                        <p class="text-black-50 ">လူကြီးမင်းပို့ဆောင်မည့် ပစ္စည်းသည် သက်မှတ်ထားသော
                                            အလေးချိန်ဖြင့် မကိုက်ညီခဲ့ပါက သင့်လျှော်၍သက်သာသောစျေးနှုန်းဖြင့်သာ extra charges
                                            ကောက်ခံပါမည်ကို လေးစားစွာဖြင့် ကြိုတင်အသိပေးအပ်ပါတယ်ခင်ဗျာ။</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- /////////// --}}

                    @auth()
                        <button type="submit" class="btn btn-primary float-end" id="booking">ဘိုကင် တင်မည်</button>
                    @endauth
                    @guest()
                        <button type="submit" href="{{ route('noBookingStore') }}" class="btn btn-primary float-end" id="booking">ဘိုကင် တင်မည်</button>
                    @endguest

                </form>

            </div>
        </div>
    </div>


    {{-- bootstrap start --}}
    {{-- township-modal-start --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <select name="receiver-township" class="form-select @error('receiver-township') is-invalid @enderror"
                        aria-label="Default select example" id="itemSelect">
                        <option value="" selected>မြို့နယ်ရွေးပါ</option>
                        @foreach ($townships as $township)
                            <option value="{{ $township->id }}" @selected(old('receiver-township') == $township)>
                                {{ $township->township_name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"id="township-show"
                        data-bs-dismiss="modal">ရွေးမည်</button>
                </div>

            </div>
        </div>
    </div>
    {{-- township-modal-end --}}
    {{-- weight-modal-start --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <select name="weight" class="form-select @error('weight') is-invalid @enderror"
                        aria-label="Default select example" id="weightSelect">
                        <option value="" selected>အလေးချိန်ရွေးပါ</option>
                        @for ($i = 1; $i < 41; $i++)
                            <option value="{{ $i }}" @selected(old('weight') == $i)>{{ $i }}</option>
                        @endfor
                    </select>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="weight-show"
                        data-bs-dismiss="modal">ရွေးမည်</button>
                </div>

            </div>
        </div>
    </div>
    {{-- weight-modal-end --}}

    {{-- count-modal-start --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <select name="count" class="form-select @error('count') is-invalid @enderror"
                        aria-label="Default select example" id="countSelect">
                        <option value="" selected>အလေးချိန်ရွေးပါ</option>
                        @for ($i = 1; $i < 101; $i++)
                            <option value="{{ $i }}" @selected(old('count') == $i)>{{ $i }}</option>
                        @endfor
                    </select>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="count-show"
                        data-bs-dismiss="modal">ရွေးမည်</button>
                </div>

            </div>
        </div>
    </div>
    {{-- count-modal-end --}}
    {{-- bootstrap end --}}
@endsection
@push('script')
    @vate('resources/js/calculatePrice.js')
    @vite('resources/js/showModel.js')
@endpush




