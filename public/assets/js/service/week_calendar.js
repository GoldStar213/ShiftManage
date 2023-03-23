//カレンダー

var date = new Date;
var currentYear = date.getFullYear();
var YY = currentYear;
var currentMonth = date.getMonth()+1;
var change_month = currentMonth;
var DD = date.getDate();
var wdate = DD;
const Day = date.getDay();
var lastMonth = 0;
var nextMonth = 0;
var day;
var DW = "";
var CR = "";
var WeekList = ["日", "月", "火", "水", "木", "金", "土"];
var colorList = ["red", "black", "black", "black", "black", "black", "blue"];
var semi = 0;
var date_row = document.getElementById('date_row');
var price_row = document.getElementById('price_row');
var percent_row = document.getElementById('percent_row');
var per_price_row = document.getElementById('per_price_row');
var work_time_row = document.getElementById('work_time_row');
var work_people_row = document.getElementById('work_people_row');
var date_symbole_row = document.getElementById('date_symbole_row');
var gather_person_row = document.getElementById('gather_person_row');

var next_month = document.getElementById('shifticon-angle-right');
var prev_month = document.getElementById('shifticon-angle-left');

function modal_view() {
                
    $('#modalContainer').attr('style', 'display:block');

};

function firstDate(YY, change_month, wdate, basicday){
    if(basicday==0){
        basicday = 7;
    }
    var first = wdate-basicday+1;
    lastMonth = 0;
    if(first<0){
        --change_month;
        lastMonth = change_month;
        var aa = new Date(YY, change_month, 0);
        var Ldate = aa.getDate();
        first = Ldate+first;
    }
    return first;
}

function lastDate(YY, change_month, wdate, basicday){
    if(basicday==0){
        basicday=7;
    }
    var aa = new Date(YY, change_month, 0);
    var Ldate = aa.getDate();
    var last = wdate + (7-basicday);
    nextMonth = 0;
    if(last>Ldate){
        ++change_month;
        nextMonth = change_month;
        last = last - Ldate; 
    }
    return last;
}

function calendar(YY, change_month, wdate){    
    var DDD = new Date(YY, change_month, 0);
    var ldate = DDD.getDate();
    var lday = DDD.getDay();
    var basicday = (7+lday - (ldate-wdate)%7)%7;
    var firstdate = firstDate(YY, change_month, wdate, basicday);
    var lastdate = lastDate(YY, change_month, wdate, basicday);
    

    $('.number___dYpbUZlm.f_year').html(YY);
    if(lastMonth!=0){
        $('.number___dYpbUZlm.f_month').html(lastMonth);
    }else {
        $('.number___dYpbUZlm.f_month').html(change_month);
    }
    $('.number___dYpbUZlm.f_date').html(firstdate);
    $('.f_day_letter').html("月");
    $('.f_day_letter').attr('style', 'color:black');
    $('.number___dYpbUZlm.l_year').html(YY);
    if(nextMonth!=0){
        $('.number___dYpbUZlm.l_month').html(nextMonth);
    }else{
        $('.number___dYpbUZlm.l_month').html(change_month);
    }
    $('.number___dYpbUZlm.l_date').html(lastdate);
    $('.l_day_letter').html("日");
    $('.l_day_letter').attr('style','color:red');

    
    date_row.innerHTML= "";
    date_row.innerHTML = ""; 
    price_row.innerHTML = "";
    percent_row.innerHTML = "";
    per_price_row.innerHTML = "";
    work_time_row.innerHTML = "";
    work_people_row.innerHTML = "";
    date_symbole_row.innerHTML = "";
    gather_person_row.innerHTML = "";




    if(lastMonth !=0){
        var l_y = new Date(YY, lastMonth, 0);
        var l_date = l_y.getDate();
        var l_d = l_y.getDay();
        for(var i = firstdate; i<=l_date; i++){
            day = (7+l_d - (l_date-i)%7)%7;

            DW = WeekList[day];
            CR = colorList[day];

            date_row.innerHTML += "<div style='width:120px'><span style='margin-right:3px'>"+i+"</span><span style='margin-left:3px; color:"+CR+"'>("+DW+")</span></div>";
            price_row.innerHTML += "<div style='width:120px'><span>¥-</span></div>";
            percent_row.innerHTML += "<div style='width:120px'><span>-%</span></div>";
            per_price_row.innerHTML += "<div style='width:120px'><span>¥0<br>(¥0)</span></div>";
            work_time_row.innerHTML += "<div style='width:120px'><span>0h00m</span></div>"; 
            work_people_row.innerHTML += "<div style='width:120px'><span>0人</span></div>";
            date_symbole_row.innerHTML += "<div style='width:120px'><span class='date_border'><span style='margin-right:3px'>"+i+"</span><span style='padding-left:3px; color:"+CR+"'>("+DW+")</span></span><span class='dayInfoAction___1tRvkEMT'><span class='root___3rUaJWz2' style='font-size:16px'><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--off___3dp-wubY "+i+"' onclick='icon_color("+i+")'><span class='shifticon shifticon-star '></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--on___2HY_oA22' onclick='icon_menu("+i+")' id='icon_menu_show"+i+"' ><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span></span><span role='menu' class='menu___2F4LWpYu' id='icon_menu_"+i+"'><span class='menuItem___1cm76LBP' onclick='circle_full("+i+")' ><span class='shifticon shifticon-circle-full '></span><span class='menuItemLabel___VLKUZ8q-'>忙しい</span></span><span class='menuItem___1cm76LBP' onclick='circle_half("+i+")'><span class='shifticon shifticon-circle-half '></span><span class='menuItemLabel___VLKUZ8q-'>普通</span></span><span class='menuItem___1cm76LBP'onclick='circle_empty1("+i+")'><span class='shifticon shifticon-circle-empty '></span><span class='menuItemLabel___VLKUZ8q-'>余裕あり</span></span><span class='menuItem___1cm76LBP menuItem--active___18EBN7dz' onclick='circle_empty("+i+")'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span><span class='menuItemLabel___VLKUZ8q-'>設定なし</span></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr-'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-edit '></span></span></span></span></span></span></div>";
            if(YY==currentYear){
                if(change_month<currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px'></div>";
            
                }else if(change_month>currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                }else if(change_month==currentMonth){
                    if(i<DD){
                        gather_person_row.innerHTML += "<div style='width:120px'></div>";
                    }else{
                        gather_person_row.innerHTML += "<div style='width:120px;padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                    }
                }
        
            }
            if(YY>currentYear){
                gather_person_row.innerHTML += "<div style='width:120px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
            }
            if(YY<currentYear){
                gather_person_row.innerHTML += "<div style='width:120px'></div>";
            }
        }
        for(i = 1; i<=lastdate; i++){
            day = (7+lday - (ldate-i)%7)%7;

            DW = WeekList[day];
            CR = colorList[day];
            date_row.innerHTML += "<div style='width:120px'><span style='margin-right:3px'>"+i+"</span><span style='margin-left:3px; color:"+CR+"'>("+DW+")</span></div>";
            price_row.innerHTML += "<div style='width:120px'><span>¥-</span></div>";
            percent_row.innerHTML += "<div style='width:120px'><span>-%</span></div>";
            per_price_row.innerHTML += "<div style='width:120px'><span>¥0<br>(¥0)</span></div>";
            work_time_row.innerHTML += "<div style='width:120px'><span>0h00m</span></div>"; 
            work_people_row.innerHTML += "<div style='width:120px'><span>0人</span></div>";
            date_symbole_row.innerHTML += "<div style='width:120px'><span class='date_border'><span style='margin-right:3px'>"+i+"</span><span style='padding-left:3px; color:"+CR+"'>("+DW+")</span></span><span class='dayInfoAction___1tRvkEMT'><span class='root___3rUaJWz2' style='font-size:16px'><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--off___3dp-wubY "+i+"' onclick='icon_color("+i+")'><span class='shifticon shifticon-star '></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--on___2HY_oA22' onclick='icon_menu("+i+")' id='icon_menu_show"+i+"' ><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span></span><span role='menu' class='menu___2F4LWpYu' id='icon_menu_"+i+"'><span class='menuItem___1cm76LBP' onclick='circle_full("+i+")' ><span class='shifticon shifticon-circle-full '></span><span class='menuItemLabel___VLKUZ8q-'>忙しい</span></span><span class='menuItem___1cm76LBP' onclick='circle_half("+i+")'><span class='shifticon shifticon-circle-half '></span><span class='menuItemLabel___VLKUZ8q-'>普通</span></span><span class='menuItem___1cm76LBP'onclick='circle_empty1("+i+")'><span class='shifticon shifticon-circle-empty '></span><span class='menuItemLabel___VLKUZ8q-'>余裕あり</span></span><span class='menuItem___1cm76LBP menuItem--active___18EBN7dz' onclick='circle_empty("+i+")'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span><span class='menuItemLabel___VLKUZ8q-'>設定なし</span></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr-'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-edit '></span></span></span></span></span></span></div>";
            if(YY==currentYear){
                if(change_month<currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px'></div>";
            
                }else if(change_month>currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                }else if(change_month==currentMonth){
                    if(i<DD){
                        gather_person_row.innerHTML += "<div style='width:120px'></div>";
                    }else{
                        gather_person_row.innerHTML += "<div style='width:120px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                    }
                }
        
            }
            if(YY>currentYear){
                gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
            }
            if(YY<currentYear){
                gather_person_row.innerHTML += "<div style='width:120px'></div>";
            }
        }
    }
    if(nextMonth !=0){
        var n_y = new Date(YY, nextMonth, 0);
        var n_date = n_y.getDate();
        var n_d = n_y.getDay();
        for(var i = firstdate; i<=ldate; i++){
            day = (7+lday - (ldate-i)%7)%7;

            DW = WeekList[day];
            CR = colorList[day];

            date_row.innerHTML += "<div style='width:120px'><span style='margin-right:3px'>"+i+"</span><span style='margin-left:3px; color:"+CR+"'>("+DW+")</span></div>";
            price_row.innerHTML += "<div style='width:120px'><span>¥-</span></div>";
            percent_row.innerHTML += "<div style='width:120px'><span>-%</span></div>";
            per_price_row.innerHTML += "<div style='width:120px'><span>¥0<br>(¥0)</span></div>";
            work_time_row.innerHTML += "<div style='width:120px'><span>0h00m</span></div>"; 
            work_people_row.innerHTML += "<div style='width:120px'><span>0人</span></div>";
            date_symbole_row.innerHTML += "<div style='width:120px'><span class='date_border'><span style='margin-right:3px'>"+i+"</span><span style='padding-left:3px; color:"+CR+"'>("+DW+")</span></span><span class='dayInfoAction___1tRvkEMT'><span class='root___3rUaJWz2' style='font-size:16px'><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--off___3dp-wubY "+i+"' onclick='icon_color("+i+")'><span class='shifticon shifticon-star '></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--on___2HY_oA22' onclick='icon_menu("+i+")' id='icon_menu_show"+i+"' ><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span></span><span role='menu' class='menu___2F4LWpYu' id='icon_menu_"+i+"'><span class='menuItem___1cm76LBP' onclick='circle_full("+i+")' ><span class='shifticon shifticon-circle-full '></span><span class='menuItemLabel___VLKUZ8q-'>忙しい</span></span><span class='menuItem___1cm76LBP' onclick='circle_half("+i+")'><span class='shifticon shifticon-circle-half '></span><span class='menuItemLabel___VLKUZ8q-'>普通</span></span><span class='menuItem___1cm76LBP'onclick='circle_empty1("+i+")'><span class='shifticon shifticon-circle-empty '></span><span class='menuItemLabel___VLKUZ8q-'>余裕あり</span></span><span class='menuItem___1cm76LBP menuItem--active___18EBN7dz' onclick='circle_empty("+i+")'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span><span class='menuItemLabel___VLKUZ8q-'>設定なし</span></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr-'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-edit '></span></span></span></span></span></span></div>";
            if(YY==currentYear){
                if(change_month<currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px'></div>";
            
                }else if(change_month>currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                }else if(change_month==currentMonth){
                    if(i<DD){
                        gather_person_row.innerHTML += "<div style='width:120px'></div>";
                    }else{
                        gather_person_row.innerHTML += "<div style='width:120px padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
                    }
                }
        
            }
            if(YY>currentYear){
                gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()>募集する</span></div></div>";
            }
            if(YY<currentYear){
                gather_person_row.innerHTML += "<div style='width:120px'></div>";
            }
        }
        for(i = 1; i<=lastdate; i++){
            day = (7+n_d - (n_date-i)%7)%7;

            DW = WeekList[day];
            CR = colorList[day];
            date_row.innerHTML += "<div style='width:120px'><span style='margin-right:3px'>"+i+"</span><span style='margin-left:3px; color:"+CR+"'>("+DW+")</span></div>";
            price_row.innerHTML += "<div style='width:120px'><span>¥-</span></div>";
            percent_row.innerHTML += "<div style='width:120px'><span>-%</span></div>";
            per_price_row.innerHTML += "<div style='width:120px'><span>¥0<br>(¥0)</span></div>";
            work_time_row.innerHTML += "<div style='width:120px'><span>0h00m</span></div>"; 
            work_people_row.innerHTML += "<div style='width:120px'><span>0人</span></div>";
            date_symbole_row.innerHTML += "<div style='width:120px'><span class='date_border'><span style='margin-right:3px'>"+i+"</span><span style='padding-left:3px; color:"+CR+"'>("+DW+")</span></span><span class='dayInfoAction___1tRvkEMT'><span class='root___3rUaJWz2' style='font-size:16px'><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--off___3dp-wubY "+i+"' onclick='icon_color("+i+")'><span class='shifticon shifticon-star '></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--on___2HY_oA22' onclick='icon_menu("+i+")' id='icon_menu_show"+i+"' ><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span></span><span role='menu' class='menu___2F4LWpYu' id='icon_menu_"+i+"'><span class='menuItem___1cm76LBP' onclick='circle_full("+i+")' ><span class='shifticon shifticon-circle-full '></span><span class='menuItemLabel___VLKUZ8q-'>忙しい</span></span><span class='menuItem___1cm76LBP' onclick='circle_half("+i+")'><span class='shifticon shifticon-circle-half '></span><span class='menuItemLabel___VLKUZ8q-'>普通</span></span><span class='menuItem___1cm76LBP'onclick='circle_empty1("+i+")'><span class='shifticon shifticon-circle-empty '></span><span class='menuItemLabel___VLKUZ8q-'>余裕あり</span></span><span class='menuItem___1cm76LBP menuItem--active___18EBN7dz' onclick='circle_empty("+i+")'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span><span class='menuItemLabel___VLKUZ8q-'>設定なし</span></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr-'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-edit '></span></span></span></span></span></span></div>";
            if(YY==currentYear){
                if(change_month<currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px'></div>";
            
                }else if(change_month>currentMonth){
                    gather_person_row.innerHTML += "<div style='width:120px padding:0 3px'><div style='width=100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
                }else if(change_month==currentMonth){
                    if(i<DD){
                        gather_person_row.innerHTML += "<div style='width:120px'></div>";
                    }else{
                        gather_person_row.innerHTML += "<div style='width:120px padding:0 3px'><div style='width=100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
                    }
                }
        
            }
            if(YY>currentYear){
                gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width=100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
            }
            if(YY<currentYear){
                gather_person_row.innerHTML += "<div style='width:120px'></div>";
            }
        }
    }



    for(var i=firstdate; i<=lastdate; i++){
        day = (7+lday - (ldate-i)%7)%7;           
        
        DW = WeekList[day];
        CR = colorList[day];
        
        date_row.innerHTML += "<div style='width:120px'><span style='margin-right:3px'>"+i+"</span><span style='margin-left:3px; color:"+CR+"'>("+DW+")</span></div>";
        price_row.innerHTML += "<div style='width:120px'><span>¥-</span></div>";
        percent_row.innerHTML += "<div style='width:120px'><span>-%</span></div>";
        per_price_row.innerHTML += "<div style='width:120px'><span>¥0<br>(¥0)</span></div>";
        work_time_row.innerHTML += "<div style='width:120px'><span>0h00m</span></div>"; 
        work_people_row.innerHTML += "<div style='width:120px'><span>0人</span></div>";
        date_symbole_row.innerHTML += "<div style='width:120px'><span class='date_border'><span style='margin-right:3px'>"+i+"</span><span style='padding-left:3px; color:"+CR+"'>("+DW+")</span></span><span class='dayInfoAction___1tRvkEMT'><span class='root___3rUaJWz2' style='font-size:16px'><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--off___3dp-wubY "+i+"' onclick='icon_color("+i+")'><span class='shifticon shifticon-star '></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr- icon--on___2HY_oA22' onclick='icon_menu("+i+")' id='icon_menu_show"+i+"' ><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span></span><span role='menu' class='menu___2F4LWpYu' id='icon_menu_"+i+"'><span class='menuItem___1cm76LBP' onclick='circle_full("+i+")' ><span class='shifticon shifticon-circle-full '></span><span class='menuItemLabel___VLKUZ8q-'>忙しい</span></span><span class='menuItem___1cm76LBP' onclick='circle_half("+i+")'><span class='shifticon shifticon-circle-half '></span><span class='menuItemLabel___VLKUZ8q-'>普通</span></span><span class='menuItem___1cm76LBP'onclick='circle_empty1("+i+")'><span class='shifticon shifticon-circle-empty '></span><span class='menuItemLabel___VLKUZ8q-'>余裕あり</span></span><span class='menuItem___1cm76LBP menuItem--active___18EBN7dz' onclick='circle_empty("+i+")'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span><span class='menuItemLabel___VLKUZ8q-'>設定なし</span></span></span></span><span class='cell___12qemJQ4'><span class='button___1XDWCSr-'><span class='icon--off___3dp-wubY'><span class='shifticon shifticon-edit '></span></span></span></span></span></span></div>";
        if(YY==currentYear){
            if(change_month<currentMonth){
                gather_person_row.innerHTML += "<div style='width:120px'></div>";
        
            }else if(change_month>currentMonth){
                gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
            }else if(change_month==currentMonth){
                if(i<DD){
                    gather_person_row.innerHTML += "<div style='width:120px'></div>";
                }else{
                    gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
                }
            }
    
        }
        if(YY>currentYear){
            gather_person_row.innerHTML += "<div style='width:120px; padding:0 3px'><div style='width:100%; height:80%; border:1px dotted #ccc'><span class='createJobstaff' onclick='modal_view()'>募集する</span></div></div>";
        }
        if(YY<currentYear){
            gather_person_row.innerHTML += "<div style='width:120px'></div>";
        }
        
    }

}

calendar(YY, currentMonth, wdate);

function next_months(){
    
    wdate = wdate + 7;
    var n_Y = new Date(YY, change_month, 0);
    var n_M = n_Y.getDate();
    if(wdate > n_M){
        wdate = wdate - n_M;
        ++change_month;
    }
    if(change_month>12){
        change_month = 1;
        ++YY;
    }
    calendar(YY, change_month, wdate);
}
function prev_months(){

    wdate = wdate - 7;
    if(wdate < 1){        
        --change_month;
        var p_Y = new Date(YY, change_month, 0);
        var p_M = p_Y.getDate();
        wdate = p_M + wdate;
    }
    
    if(change_month==0){
        change_month=12;
        --YY;
    }
    calendar(YY,change_month, wdate);
}

function today(){
    YY = date.getFullYear();
    change_month = currentMonth;
    wdate = DD
    calendar(YY, change_month, wdate);
}


next_month.addEventListener('click', next_months);
prev_month.addEventListener('click', prev_months);


//カレンダーコード終了





function icon_color(i) {
if($('.resizer_table_box .table_row div span.dayInfoAction___1tRvkEMT .button___1XDWCSr-.'+i).attr('class')=="button___1XDWCSr- icon--off___3dp-wubY "+i){
    $('.resizer_table_box .table_row div span.dayInfoAction___1tRvkEMT .button___1XDWCSr-.icon--off___3dp-wubY.'+i).attr('class', 'button___1XDWCSr- icon--on___2HY_oA22 '+i);
}else{
    $('.resizer_table_box .table_row div span.dayInfoAction___1tRvkEMT .button___1XDWCSr-.icon--on___2HY_oA22.'+i).attr('class', 'button___1XDWCSr- icon--off___3dp-wubY '+i);
}
};


function icon_menu(i){
    if(i==1){
        document.getElementById('icon_menu_'+i).style.left = "10px";
        $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu menu--open___1pOqzdcQ');
        $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).css({"--bTop":"-118px"});
        $('span.dayInfoAction___1tRvkEMT .menu___2F4LWpYu.menu--open___1pOqzdcQ:not(span.dayInfoAction___1tRvkEMT #icon_menu_1').attr('class', 'menu___2F4LWpYu');
    }else{
        $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu menu--open___1pOqzdcQ');
        $('span.dayInfoAction___1tRvkEMT .menu___2F4LWpYu.menu--open___1pOqzdcQ:not(span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu');

    }
}

function circle_full(i){
    
    $("#icon_menu_show"+i).html("<span class='shifticon shifticon-circle-full '></span>");
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(1)').attr('class', 'menuItem___1cm76LBP menuItem--active___18EBN7dz');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:not(span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(1))').attr('class', 'menuItem___1cm76LBP');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu');
}
function circle_half(i){
    $("#icon_menu_show"+i).html("<span class='shifticon shifticon-circle-half '></span>");
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(2)').attr('class', 'menuItem___1cm76LBP menuItem--active___18EBN7dz');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:not(span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(2))').attr('class', 'menuItem___1cm76LBP');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu');
}
function circle_empty1(i){
    $("#icon_menu_show"+i).html("<span class='shifticon shifticon-circle-empty '></span>");
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(3)').attr('class', 'menuItem___1cm76LBP menuItem--active___18EBN7dz');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:not(span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(3))').attr('class', 'menuItem___1cm76LBP');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu');
}
function circle_empty(i){
    $("#icon_menu_show"+i).html("<span class='icon--off___3dp-wubY'><span class='shifticon shifticon-circle-empty '></span></span>");
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(4)').attr('class', 'menuItem___1cm76LBP menuItem--active___18EBN7dz');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:not(span.dayInfoAction___1tRvkEMT #icon_menu_'+i+'>span:nth-child(4))').attr('class', 'menuItem___1cm76LBP');
    $('span.dayInfoAction___1tRvkEMT #icon_menu_'+i).attr('class', 'menu___2F4LWpYu');
}


//Display item Setting


function wishrate(){
    var wish =  document.getElementById('requestShiftPassedRateVisibility').checked;

    if(wish==true){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:flex;");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:block"); 
    }else if(wish==false){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:none");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:none");    
    }
    
}

function salesbudget(){
    var salesbudget = document.getElementById('salesBudgetVisibility').checked;

    if(salesbudget==true){
        $('.table_title .table_title_item:nth-child(2)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(2)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(2)').attr('style', "border-right:block"); 
        $('.table_title .table_title_item:nth-child(3)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "border-right:block");
        $('.resizer_table_box #percent_row').attr('style', 'display:flex');
        $('.resizer_table_box #price_row').attr('style', 'display:flex');

    }else if(salesbudget==false){
        
        $('.table_title .table_title_item:nth-child(2)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(2)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(2)').attr('style', "display:none");
        $('.table_title .table_title_item:nth-child(3)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "display:none");
        $('.resizer_table_box #percent_row').attr('style', 'display:none');
        $('.resizer_table_box #price_row').attr('style', 'display:none');
    }
}
function worktime(){
    var worktime = document.getElementById('workTimeVisibility').checked;
    
    if(worktime==true){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:flex;");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:block");
        $('.table_title .table_title_item:nth-child(5)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "border-right:block"); 
        $('.resizer_table_box #work_time_row').attr('style', 'display:flex');       
    }else if(worktime==false){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:none");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:none");  
        $('.table_title .table_title_item:nth-child(5)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "display:none");  
        $('.resizer_table_box #work_time_row').attr('style', 'display:none');
    }
}

function requeststaff(){
    var requeststaff = document.getElementById('requiredStaff').checked;

    if(requeststaff==true){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:flex;");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:block"); 
    }else if(requeststaff==false){
        $('.table_sum .table_sum_item .sum_item3').attr('style', "display:none");
        $('.table_sum .table_sum_item .sum_item2').attr('style', "border-right:none");    
    }
}
function iconmemo(){
    var iconmemo = document.getElementById('IconAndMemoVisibility').checked;

    if(iconmemo==true){
        $('.resizer_table_box #date_symbole_row div .dayInfoAction___1tRvkEMT').attr('style', 'display:block'); 
    }else if(iconmemo==false){
        $('.resizer_table_box #date_symbole_row div .dayInfoAction___1tRvkEMT').attr('style', "display:none");
    }
}
function costs(){
    var costs = document.getElementById('costsVisibility').checked;
    if(costs==true){
        $('.table_title .table_title_item:nth-child(3)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "border-right:block"); 
        $('.table_title .table_title_item:nth-child(4)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(4)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(4)').attr('style', "border-right:block"); 
        $('.resizer_table_box #percent_row').attr('style', 'display:flex');
        $('.resizer_table_box #per_price_row').attr('style', 'display:flex');
    }else if(costs==false){
        $('.table_title .table_title_item:nth-child(3)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(3)').attr('style', "display:none"); 
        $('.table_title .table_title_item:nth-child(4)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(4)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(4)').attr('style', "display:none"); 
        $('.resizer_table_box #percent_row').attr('style', 'display:none');
        $('.resizer_table_box #per_price_row').attr('style', 'display:none');
    }
}
function headcount(){
    var headcount = document.getElementById('headcountVisibility').checked;

    if(headcount==true){
        $('.table_title .table_title_item:nth-child(6)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(6)').attr('style', "display:flex;"); 
        $('.table_sum .table_sum_item:nth-child(6)').attr('style', "border-right:block"); 
        $('.resizer_table_box #work_people_row').attr('style', 'display:flex');

        $('.table_title .table_title_item:nth-child(5)').attr('style', "border-bottom:none; margin-bottom:none");        
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "border-bottom:none; margin-bottom:none");
        $('.resizer_table_box #work_time_row').attr('style', 'border-bottom:none; margin-bottom:none');   
    }else if(headcount==false){
        $('.table_title .table_title_item:nth-child(6)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(6)').attr('style', "border-right:none");
        $('.table_sum .table_sum_item:nth-child(6)').attr('style', "display:none"); 
        $('.resizer_table_box #work_people_row').attr('style', 'display:none');   

        $('.table_title .table_title_item:nth-child(5)').attr('style', "border-bottom:1px solid #ccc; margin-bottom:15px");        
        $('.table_sum .table_sum_item:nth-child(5)').attr('style', "border-bottom:1px solid #ccc; margin-bottom:15px");
        $('.resizer_table_box #work_time_row').attr('style', 'border-bottom:1px solid #ccc; margin-bottom:15px');   
    }
}
function help(){
    var help = document.getElementById('helpLineVisibility').checked;

    if(help==true){
        $('.table_title .table_title_item:nth-child(8)').attr('style', "display:flex;");
        $('.table_sum .table_sum_item:nth-child(8)').attr('style', "display:flex;"); 
        $('.resizer_table_box #gather_person_row').attr('style', 'display:flex');

        $('.table_sum .table_sum_item:nth-child(7)').attr('style', "border-bottom:none"); 
        $('.resizer_table_box #date_symbole_row').attr('style', 'border-bottom:none');   
    }else if(help==false){
        $('.table_title .table_title_item:nth-child(8)').attr('style', "display:none");
        $('.table_sum .table_sum_item:nth-child(8)').attr('style', "display:none"); 
        $('.resizer_table_box #gather_person_row').attr('style', 'display:none');  

        $('.table_sum .table_sum_item:nth-child(7)').attr('style', "border-bottom:1px solid #ccc"); 
        $('.resizer_table_box #date_symbole_row').attr('style', 'border-bottom:1px solid #ccc');   
    }
}
document.getElementById('salesBudgetVisibility').addEventListener('click', salesbudget);
document.getElementById('workTimeVisibility').addEventListener('click', worktime);
document.getElementById('requiredStaff').addEventListener('click', requeststaff);
document.getElementById('IconAndMemoVisibility').addEventListener('click', iconmemo);
document.getElementById('costsVisibility').addEventListener('click', costs);
document.getElementById('headcountVisibility').addEventListener('click', headcount);
document.getElementById('helpLineVisibility').addEventListener('click', help);




//表示設定

$('.displaySettingsLabel___1StS8lOI').on('click',function(){
    
    if($('.showDisplaySettings___2xWy1wKE span:not(.displaySettingsLabel___1StS8lOI)').attr('class')=='shifticon shifticon-chevron-up '){
        $('.showDisplaySettings___2xWy1wKE span:not(.displaySettingsLabel___1StS8lOI)').attr('class', 'shifticon shifticon-chevron-down ');
        $('div.root___3IzzFDG8').attr('style', 'display:none');
    }else{
        $('.showDisplaySettings___2xWy1wKE span:not(.displaySettingsLabel___1StS8lOI)').attr('class', 'shifticon shifticon-chevron-up ');
        $('div.root___3IzzFDG8').attr('style', 'display:flex');
    }
})
