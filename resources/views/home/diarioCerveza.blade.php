@extends('layouts.diariolayout')
@section('content') 
<div id="calendar" data-provide="calendar"></div>

<script type="text/javascript">
$(function() {
    var currentYear = new Date().getFullYear();
    var currentMonth = new Date().getMonth();
    var currentDay = new Date().getDate();

    var currentDate = new Date(currentYear, currentMonth, currentDay).getTime();

    $('.calendar').calendar({ 
        customDayRenderer: function(element, date) {
            if(date.getTime() == currentDate) {
                $(element).css('font-weight', 'bold');
                $(element).css('border-bottom', '2px solid red');
            }
        }

    });
});
</script>
@endsection