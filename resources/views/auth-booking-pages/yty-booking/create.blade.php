@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                    <form action="{{ route('a-yty-booking.store') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
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
                                    value="{{ old('sender-name',$user->name) }}" aria-label="Username"
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
                                     value="{{ old('sender-phone',$user->phone) }}"
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
                    <div class="card mb-3">
                        <div class="card-header">CASH ON DELIVERY</div>

                        <div class="col">
                            <p class="m-3 text-primary">delivery သမားအား ပိုက်ဆံ COD ခိုင်းမည်လား</p>

                            <div class="d-flex justify-content-center ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();"
                                    name="radio" id="noCheck" value="0" checked>
                                    <label class="form-check-label" for="Radio1">CODမလုပ်ခိုင်းပါ</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();"
                                     name="radio" id="yesCheck" value="1" >
                                    <label class="form-check-label" for="Radio2">CODမည်</label>
                                  </div>

                            </div>

                            <div id="ifYes" style="display:none">

                                <p class="m-3 text-primary">COD တန်ဖိုး</p>
                            <div class="input-group mb-3 p-1">

                                <input name="cod" type="text"
                                    class="form-control @error('cod') is-invalid @enderror"
                                    value="{{ old('cod') }}" placeholder="amount" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                @error('cod')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>

                            </div>

                            {{-- Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck">
                            No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
                            <div id="ifYes" style="display:none">
                                If yes, explain: <input type='text' id='yes' name='yes'><br>
                                What can we do to accommodate you?  <input type='text' id='acc' name='acc'>
                            </div> --}}
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
                            <hr>
                            {{-- ///////////////////promotion//////////////////////// --}}

                            {{-- <div class="col">
                                <p class="m-3 text-primary">promotion code သုံးမည်လား?</p>

                                <div class="d-flex justify-content-center ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onclick="javascript:promoYesnoCheck();"
                                        name="promo-radio" id="promoNoCheck" value="0" checked>
                                        <label class="form-check-label" for="inlineRadio1">မသုံးပါ</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onclick="javascript:promoYesnoCheck();"
                                         name="promo-radio" id="promoYesCheck" value="1" >
                                        <label class="form-check-label" for="inlineRadio2">သုံးပါမည်</label>
                                      </div>

                                </div>


                                <div id="promoIfYes" style="display:none">
                                    <p class="m-3 text-primary">Promotion Code</p>
                                <div class="input-group mb-3 p-1 row">
                                        <div class="d-flex justify-content-center  ">
                                            <div class="">
                                                <input name="code" id="code" type="text"
                                                class="form-control @error('code') is-invalid @enderror"
                                                value="{{ old('code') }}" placeholder="Code" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                                @error('code')
                                                    <div class=" invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="button" class="btn btn-primary" onclick="promoData()">Check</button>
                                            </div>
                                        </div>
                                </div>

                                </div>
                            </div> --}}

                            {{-- /////////////////////////////////////////// --}}
                            <input name="getPromotionPrice" type="number" id="getPromotionPrice"
                                     hidden />


                            <div class="mb-3 p-1   ">
                                <div class="">
                                    <input name="fees" type="number" id="fees"
                                      hidden/>

                                      <div class=" element-right button-zero " id="originalIfYes"  >
                                        <div class="button-zero">
                                            <p>Fees: </p>
                                        </div>
                                        <div class="button-zero">
                                            <p class="fw-bold text-primary" id="resultValue"> 0MMK</p>
                                        </div>
                                      </div>

                                      {{-- style="display:none" --}}

                                    <div class=" element-right"  id="promoPrice" style="display:none">
                                        <div class="">
                                            <p>Promo Fees: </p>
                                        </div>
                                        <div class="">
                                            <p class="fw-bold text-primary" id="promoResultValue"> 0MMK</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3 p-1 d-block ">
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


                        <button type="submit" class="btn btn-primary float-end" id="booking">ဘိုကင် တင်မည်</button>

                    {{-- @guest()
                        <button type="submit" href="{{ route('noBookingStore') }}" class="btn btn-primary float-end" id="booking">ဘိုကင် တင်မည်</button>
                    @endguest --}}

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
@push('scripts')


<script type="text/javascript">
    function yesnoCheck() {
           if (document.getElementById('yesCheck').checked) {
               document.getElementById('ifYes').style.display = 'block';
           }
           else document.getElementById('ifYes').style.display = 'none';

       }

       function promoYesnoCheck() {
           if (document.getElementById('promoYesCheck').checked) {
               document.getElementById('promoIfYes').style.display = 'block';
           }
           else document.getElementById('promoIfYes').style.display = 'none';

       }
///////////////////////////////////////////////////////////////////////////////

        const copy_click = document.getElementById("copy-click");

        const weight = document.getElementById('weight');
        const count = document.getElementById('count');
        const price = document.getElementById('price');

        const resultValue = document.getElementById('resultValue');
///////////////////////////////////////////////////////////////////////////////
        weight.addEventListener('input',function () {
   let weight = parseFloat(weight.value);
   let count = parseFloat(count.value);
   let price = parseFloat(price.value);

   if (!isNaN(weight)&&!isNaN(count)&&!isNaN(price)) {
       let total = 0;
       for (let index = 3; index <= weight; index++) {
           total = 0;
           total = price;
           total += 500;
       }
       resultValue.textContent = total;
   }
   else {
       resultValue.textContent = '';
   }
})
///////////////////////////////////////////////////////////////////////////////

const url = "https://parcelxmm.com/api";
document.addEventListener('DOMContentLoaded', function () {

    var selectfees = document.getElementById('fees');

   var selectItemButton = document.getElementById('township-show');
   var itemSelect = document.getElementById('itemSelect');
   var itemNameInput = document.getElementById('receiver-township');
   var itemNameInputClone = document.getElementById('receiver-township-clone');

   var selectWeightButton = document.getElementById('weight-show');
   var weightSelect = document.getElementById('weightSelect');
   var weightInput = document.getElementById('weight');

   var selectCountButton = document.getElementById('count-show');
   var countSelect = document.getElementById('countSelect');
   var countInput = document.getElementById('count');

   var price = 0;
   var resultInput = document.getElementById('resultValue');

   var promoResultInput = document.getElementById('promoResultValue');



   selectItemButton.addEventListener('click', function () {
       var selectedItem = itemSelect.value;
       itemNameInput.value = selectedItem;

       if (selectedItem >= 1) {
           fetch(url + '/townships/' + selectedItem)
               .then(response => response.json())
               .then(
                   data => {
                       itemNameInputClone.value = data.name;
                       price = data.price;

                       if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

                           var addingPrice = 0;
                           if (weightInput.value > 3) {
                               for (let i = 3; i < weightInput.value; i++) {
                                   addingPrice += 500;

                               }
                           }
                           resultInput.textContent = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value)+ "MMK");
                           var realPromoResultInput = promoResultInput.textContent.substring(0, promoResultInput.textContent.length-3);

                           if (realPromoResultInput != "" && realPromoResultInput != null && realPromoResultInput != 0 && realPromoResultInput > 0) {

                            selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value))-parseInt(document.getElementById('getPromotionPrice').value);
                            promoResultInput.textContent = selectfees.value+ "MMK";

                           } else {
                                selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value));
                           }

                       }

                   }).catch(error => {
                       alert("something wrong")
                   });
       }


   });

   selectWeightButton.addEventListener('click', function () {
       var selectedweight = weightSelect.value;
       weightInput.value = selectedweight;

       if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

           var addingPrice = 0;
           if (weightInput.value > 3) {
               for (let i = 3; i < weightInput.value; i++) {
                   addingPrice += 500;
               }
           }

           resultInput.textContent = (parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value) + "MMK";

           var realPromoResultInput = promoResultInput.textContent.substring(0, promoResultInput.textContent.length-3);
                           if (realPromoResultInput != "" && realPromoResultInput != null && realPromoResultInput != 0 && realPromoResultInput > 0) {
                            selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value))-parseInt(document.getElementById('getPromotionPrice').value);
                            promoResultInput.textContent = selectfees.value+ "MMK";
                           } else {
                                selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value));
                           }
       }
   });

   selectCountButton.addEventListener('click', function () {
       var selectedcount = countSelect.value;
       countInput.value = selectedcount;

       if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

           var addingPrice = 0;
           if (weightInput.value > 3) {
               for (let i = 3; i < weightInput.value; i++) {
                   addingPrice += 500;
               }
           }

           resultInput.textContent = (parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value) + "MMK";

           var realPromoResultInput = promoResultInput.textContent.substring(0, promoResultInput.textContent.length-3);
                           if (realPromoResultInput != "" && realPromoResultInput != null && realPromoResultInput != 0 && realPromoResultInput > 0) {
                            selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value))-parseInt(document.getElementById('getPromotionPrice').value);
                            promoResultInput.textContent = selectfees.value+ "MMK";
                           } else {
                                selectfees.value = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value));
                           }
       }
   });




});

    // get promo price
    async function promoData() {
        var promoCode = document.getElementById('code');
        var resultInput = document.getElementById('resultValue');

        var realResultInput = resultInput.textContent.substring(0, resultInput.textContent.length-3);
        console.log(realResultInput);

        var promoResultInput = document.getElementById('promoResultValue');

        var getPromotionPrice = document.getElementById('getPromotionPrice');

        if (promoCode.value != null&& promoCode.value != "") {
                    var url = "http://127.0.0.1:8000/api/promotion/"+promoCode.value;
                    console.log(url);

                     fetch(url, {
                    method: "GET",
                    mode: "cors",
                    cache: "no-cache",
                    credentials: "same-origin",
                    headers: {
                    "Content-Type": "application/json",

                    },
                    redirect: "follow",
                    referrerPolicy: "no-referrer"
                }).then(response => response.json())
                .then(
                   data => {
                    promoPrice = data.price;

                    if (promoPrice!= 0 ) {
                        getPromotionPrice.value  = 500;
                        console.log( getPromotionPrice.value + "testing");
                        if (realResultInput != null && realResultInput != "" && realResultInput != 0) {

                            promoResultInput.textContent = (parseInt(realResultInput)-parseInt(promoPrice))+ "MMK";
                            document.getElementById('promoPrice').style.display = '';
                            console.log(promoResultInput.textContent);

                        } else {
                            alert("ပို့ရမည့် မြို့နယ်အားဦးစွာရွေးပေးပါ");
                        }

                    } else {
                            alert("ဤ Promo code သုံးမရပါ");
                        }

                   }).catch(error => {
                       alert("promo code something wrong");
                   });


        }
    }


   </script>
@endpush




