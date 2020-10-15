@extends('layouts.app')

@section('content')
    
    <!-- Survey form -->
    <form action="{{ action('\App\Http\Controllers\SurveyController@store') }}" method="POST">
        @csrf

        <div class="container">
            <div class="">
                <label for="lastName">Овог</label>
                <input type="text" name="lastName"  >
            <div>   
            <div class="">
                <label for="firstName">Нэр</label>
                <input type="text" name="firstName"  >
            <div> 
            <div class="">
                <label for="age">Нас</label>
                <input type="number" name="age"  >
            <div>
                <div class="">
                <label for="Sex">Хүйс</label>    
                <div class="">
                    <label for="Age">Эрэгтэй</label>
                    <input type="radio" value="male" name="sex"  >
                    <label for="Age">Эмэгтэй</label>    
                    <input type="radio" value="female" name="sex"  >
                </div>
            <div>
            <div class="">
                <label for="occupation">Мэргэжил \эрхэлсэн ажил, суралцаж буй сургууль\</label>
                <input type="text" name="occupation"  >
            <div>        
            <div class="">
                <label for="citizenship">Харьяалал \оршин суугаа хаяг\</label>
                <input type="text" name="citizenship"  >
            <div>
            <div class="">
                <label for="phoneNumber">Утасны дугаар</label>
                <input type="number" name="phoneNumber"  >
            <div>    
            <div class="">
                <label for="reserveNumber">Нөөц дугаар</label>
                <input type="number" name="reserveNumber"  >
            <div>
            <div class="">
                <label for="emailAddress">Цахим шуудангийн хаяг</label>
                <input type="text" name="emailAddress"  >
            <div>
            <div class="">
                <label for="facebookAddress">Фейсбүүк хаяг \холбоосыг оруулна уу!\</label>
                <input type="text" name="facebookAddress"  >
            <div>   
            <div class="">
                <label for="interest">Сонирхол</label>
                <textarea name="interest" name="interest" ></textarea>
            <div>     
            <div class="">
                <label for="activity">Чөлөөт цагаа хэрхэн өнгөрүүлдэг эсэх</label>
                <textarea name="activity" name="activity"></textarea>
            <div>  
            <div class="">
                <label for="expectation">Ойрын хоёр жилийн зорилго, төлөвлөгөө</label>
                <textarea name="selfExpectation"></textarea>
            <div> 
            <div class="">
                <label for="volunteering">Өөрийн нийгмийн идэвхи, карьерийн тухай бичнэ үү</label>
                <textarea name="volunteering" name="volunteering"></textarea>
            <div>  
            <div>
                <div class="">
                    <label for="advantage">Давуу тал</label>
                    <textarea name="advantage"></textarea>
                <div> 
                <div class="">
                    <label for="disadvantage">Сул тал</label>
                    <textarea name="disadvantage"></textarea>
                <div>
            </div>      
            <div class="">
                <label for="purpose">Яагаад элсэх гээд байгаан</label>
                <textarea name="purpose" name="purpose"></textarea>
            <div> 
            <input type="submit" id="submit" value="Бүртгүүлэх">           
        </div>    
    </form>
    
@endsection