//カレンダー

var date = new Date;
var currentYear  = date.getFullYear();
var currentMonth = date.getMonth()+1;



var Value     = document.getElementById('date').value;
var Year      = Value.slice(0, 4);
var Month     = Value.slice(4, 6);
var dDate     = Value.slice(6, 8);
var dateStr   = Year+"-"+Month+"-"+dDate;
var dateObj   = new Date(dateStr);
var initYear  = dateObj.getFullYear();
var initMonth = dateObj.getMonth()+1;
var initDate  = dateObj.getDate();
var initDay   = dateObj.getDay();


var YY           = initYear;
var change_month = initMonth;
var DD           = initDate;
var Day          = initDay;

var day;
var DW = "";
var CR = "";
var WeekList  = ["日", "月", "火", "水", "木", "金", "土"];
var colorList = ["red", "black", "black", "black", "black", "black", "blue"];



var next_month = document.getElementById('shifticon-angle-right');
var prev_month = document.getElementById('shifticon-angle-left');

function modal_view() {

    $('#modalContainer').attr('style', 'display:block');

};

function calendar(YY, change_month, changedate, changeday){

    DW = WeekList[changeday];
    CR = colorList[changeday];

    $('.number___dYpbUZlm.f_year').html(YY);
    $('.number___dYpbUZlm.f_month').html(change_month);
    $('.number___dYpbUZlm.f_date').html(changedate);
    $('.f_day').html(DW);
    $('.f_day').attr('style', 'color:'+CR);
}

calendar(YY, currentMonth, DD, Day);

function next_day(){
    ++DD;
    ++Day;
    var yyyy = new Date(YY, change_month, 0);
    var ldate = yyyy.getDate();
    if(DD>ldate){
        DD=1;
        ++change_month;
        if(change_month>12){
            ++YY;
        }
    }
    if(Day>6){
        Day=0;
    }

    calendar(YY, change_month, DD, Day);
    if(change_month<10){
        var MMM = "0"+change_month;
    }else MMM = change_month;
    if(DD<10){
        var DDD = "0"+DD;
    }else DDD = DD
    location.href = "/shiftdaily/"+YY+MMM+DDD;
}
function prev_day(){

    --DD;
    --Day;
    if(DD==0){
        --change_month
        var yyyy = new Date(YY, change_month, 0);
        var ldate = yyyy.getDate();
        DD=ldate;
        if(change_month == 0){
            --YY;
        }
    }
    if(Day < 0){
        Day = 6;
    }
    calendar(YY, change_month, DD, Day);
    if(change_month<10){
        var MMM = "0"+change_month;
    }else MMM = change_month;
    if(DD<10){
        var DDD = "0"+DD;
    }else DDD = DD
    location.href = "/shiftdaily/"+YY+MMM+DDD;
}

function today(){
    YY = date.getFullYear();
    change_month = currentMonth
    DD = date.getDate();
    Day = date.getDay();
    calendar(YY, change_month, DD, Day );
    if(change_month<10){
        var MMM = "0"+change_month;
    }else MMM = change_month;
    if(DD<10){
        var DDD = "0"+DD;
    }else DDD = DD
    location.href = "/shiftdaily/"+YY+MMM+DDD;
}


next_month.addEventListener('click', next_day);
prev_month.addEventListener('click', prev_day);


//カレンダーコード終了


//=-=-=-=-=


//表示設定

