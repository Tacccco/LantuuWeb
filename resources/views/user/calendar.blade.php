@extends('layouts.app')
<link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
@section('content')
    <div id="datepicker1"></div>
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script type="text/javascript">
        //<![CDATA[
        datePicker1 = new DatePicker("datepicker1", function (id, fixedDate) {
          //console.log("DatePicker with id", id,
          //        "selected date:", fixedDate.month + "/" + fixedDate.day + "/" + fixedDate.year);
        });
        datePicker1.render(new Date());
        //]]>
    </script> 

@endsection