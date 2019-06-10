$(function(){

    var note = $('#note'),
        ts = new Date(2012, 0, 17),
        newYear = true;

    if((new Date()) > ts){
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 30*24*60*60*1000;
        newYear = false;
    }

    $('#countdown').countdown({
        timestamp	: ts,
        callback	: function(days, hours, minutes, seconds){

            var message = "";

            message += days + " روز" + ( days==1 ? '':'' ) + ", ";
            message += hours + " ساعت" + ( hours==1 ? '':'' ) + ", ";
            message += minutes + " دقیقه" + ( minutes==1 ? '':'' ) + " و ";
            message += seconds + " ثانیه" + ( seconds==1 ? '':'' ) + " <br />";

            if(newYear){
                message += "مانده به سال جدید";
            }
            else {
                message += "مانده به 30 روز از حالا";
            }

            note.html(message);
        }
    });

});
