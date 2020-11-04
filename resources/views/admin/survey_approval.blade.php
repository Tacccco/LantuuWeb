@extends('admin.layouts.app')

@section('content')

    {!! Form::open(['action' => ['\App\Http\Controllers\AdminDashboardController@surveyRequest', $data->id], 'method' => 'POST']) !!}
        @csrf

        <div class="main">
            <div class="">
                <label for="lastName">Овог</label>
                <input type="text" name="lastName" value="{{ $data->lastName }}" readonly/>
            </div>   
            <div class="">
                <label for="firstName">Нэр</label>
                <input type="text" name="firstName" value="{{ $data->firstName }}" readonly/>
            </div> 
            <div class="">
                <label for="age">Нас</label>
                <input type="number" name="age" value="{{ $data->age }}" readonly/>
            </div>
                <div class="">
                <label for="Sex">Хүйс</label>    
                <div class="">
                    <label for="Age">Эрэгтэй</label>
                    <input type="radio" value="male" name="sex" <?php if($data->sex == 'male') { echo 'checked'; }  ?>  readonly>
                    <label for="Age">Эмэгтэй</label>    
                    <input type="radio" value="female" name="sex" <?php if($data->sex == 'female') { echo 'checked'; }  ?>  readonly>
                </div>
            </div>
            <div class="">
                <label for="occupation">Мэргэжил \эрхэлсэн ажил, суралцаж буй сургууль\</label>
                <input type="text" name="occupation" value="{{ $data->occupation }}" readonly/>
            </div>        
            <div class="">
                <label for="citizenship">Харьяалал \оршин суугаа хаяг\</label>
                <input type="text" name="citizenship" value="{{ $data->citizenship }}" readonly/>
            </div>
            <div class="">
                <label for="phoneNumber">Утасны дугаар</label>
                <input type="number" name="phoneNumber" value="{{ $data->phoneNumber }}" readonly/>
            </div>    
            <div class="">
                <label for="reserveNumber">Нөөц дугаар</label>
                <input type="number" name="reserveNumber" value="{{ $data->reserveNumber }}" readonly/>
            </div>
            <div class="">
                <label for="email">Цахим шуудангийн хаяг</label>
                <input type="text" name="email" value="{{ $data->email }}" readonly/>
            </div>
            <div class="">
                <a target="_blank" href="{{ $data->facebookAddress }}">Фейсбүүк холбоос</a>
            </div>   
            <div class="">
                <label for="interest">Сонирхол</label>
                <textarea name="interest" name="interest" readonly>{{ $data->interest }}</textarea>
            </div>     
            <div class="">
                <label for="activity">Чөлөөт цагаа хэрхэн өнгөрүүлдэг эсэх</label>
                <textarea name="activity" name="activity" readonly>{{ $data->activity }}</textarea>
            </div>  
            <div class="">
                <label for="expectation">Ойрын хоёр жилийн зорилго, төлөвлөгөө</label>
                <textarea name="selfExpectation" readonly>{{ $data->selfExpectation }}</textarea>
            </div> 
            <div class="">
                <label for="volunteering">Өөрийн нийгмийн идэвхи, карьерийн тухай бичнэ үү</label>
                <textarea name="volunteering" name="volunteering" readonly>{{ $data->volunteering }}</textarea>
            </div>  
            <div>
                <div class="">
                    <label for="advantage">Давуу тал</label>
                    <textarea name="advantage" readonly>{{ $data->advantage }}</textarea>
                </div> 
                <div class="">
                    <label for="disadvantage">Сул тал</label>
                    <textarea name="disadvantage" readonly>{{ $data->disadvantage }}</textarea>
                </div>
            </div>      
            <div class="">
                <label for="purpose">Яагаад элсэх гээд байгаан</label>
                <textarea name="purpose" name="purpose" readonly>{{ $data->purpose }}</textarea>
            </div>
        </div>     

        <input type="submit" name="submitAccept" value="accept">
        <input type="submit" name="submitCancel" value="cancel">
    {!! Form::close() !!}

@endsection