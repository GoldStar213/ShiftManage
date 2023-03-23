$(document).ready(function () {

    $('#staff_getting').click(function () {

        $('#modalContainer1').attr('style', 'display:block');

    });
    $('.closeButton___3BLMvxUH').click(function () {

        $('#modalContainer1').attr('style', 'display:none');

    });
    $('.createJobOfferButton___2bYQOcap').click(function () {

        $('#modalContainer').attr('style', 'display:block');

    });
    $('.closeButton___3-eRwwoC').click(function () {

        $('#modalContainer').attr('style', 'display:none');

    });
    $('.change_btn1').click(function () {

        $('.slides___I-soWC_0').attr('style', 'margin-left:0%');
        $('.change_btn1').attr('class',
            'button___3gUh5UFK button--state-active___1DkOSpFK button change_btn1')
        $('.change_btn2').attr('class',
            'button___3gUh5UFK button--state-inactive___3u5w3Zto change_btn1')


    });
    $('.change_btn2').click(function () {

        $('.slides___I-soWC_0').attr('style', 'margin-left:-100%');
        $('.change_btn2').attr('class',
            'button___3gUh5UFK button--state-active___1DkOSpFK button change_btn2')
        $('.change_btn1').attr('class',
            'button___3gUh5UFK button--state-inactive___3u5w3Zto change_btn1')
    });
    $('button#invitation_btn').click(function () {
        location.href = "../staffmanagement/invitation.html";
        $('#modalContainer1').attr('style', 'display:none');
    });
    $('#rateplan_btn').click(function () {

        $('#modalContainer').attr('style', 'display:none');

    });
    $('.menuItemLabel___4mYFTju0.rateplan_view').click(function () {

        $('#modalContainer').attr('style', 'display:block');

    });
    $('.shifticon.shifticon-plus-circle').click(function () {

        $('#modalContainer2').attr('style', 'display:block');

    });
    $('.shifticon.shifticon-close').click(function () {

        $('#modalContainer2').attr('style', 'display:none');

    });
    $('.barWrap___2oM3ve3z').click(function () {

        $('#modalContainer2').attr('style', 'display:block');

    });

});
$('.displaySettingsLabel___3ppVu2eC').on('click', function () {

    if ($('.showDisplaySettings___3ckfVw5C span:not(.displaySettingsLabel___3ppVu2eC)').attr('class') ==
        'shifticon shifticon-chevron-up ') {
        $('.showDisplaySettings___3ckfVw5C span:not(.displaySettingsLabel___3ppVu2eC)').attr('class',
            'shifticon shifticon-chevron-down ');
        $('div.root___3IzzFDG8').attr('style', 'display:none');
        $('div.infoBar___3e6CHBpt').attr('style', 'display:none');
    } else {
        $('.showDisplaySettings___3ckfVw5C span:not(.displaySettingsLabel___3ppVu2eC)').attr('class',
            'shifticon shifticon-chevron-up ');
        $('div.root___3IzzFDG8').attr('style', 'display:flex');
        $('div.infoBar___3e6CHBpt').attr('style', 'display:flex');
    }
});



//スタッフ採用(staff recruitment checkbox)
var hopeshift = document.getElementById('checkbox___2SsrnOIE1');
var recruit = document.getElementById('checkbox___2SsrnOIE2');


hopeshift.addEventListener('change', function () {
    var checked = document.getElementById('requestShiftVisibility')
});
var filters = document.querySelector('[name="filter-staff"]');

let helpchecked = true;

recruit.addEventListener('change', function () {
    if(document.getElementById("helpLineVisibility").checked==true && filters.value == "all"){
        $('.tr___2CNcHw4v.tr--isHelpLine___126XEkMw').attr('style', "display:flex");
        helpchecked = true;
    }else{
        $('.tr___2CNcHw4v.tr--isHelpLine___126XEkMw').attr('style', "display:none");
        helpchecked = false;
    }
});

//絞り込み(filtering)

filters.onchange = function () {
    var Option = this.options[this.selectedIndex];
    var Value = Option.value;
    if (Value == "all") {
        var parent = document.getElementsByClassName('tr___2CNcHw4v');
        for (let i = 0; i < parent.length; i++) {

            parent[i].style = "display:flex";
        }
        if(document.getElementById("helpLineVisibility").checked == false){
            $('.tr___2CNcHw4v.tr--isHelpLine___126XEkMw').attr('style', "display:none");
        }
    } else if (Value == "fixed") {

        var parent = document.getElementsByClassName('tr___2CNcHw4v');
        console.log('aaaa', parent.length)
        for (let i = 0; i < parent.length; i++) {
            var child = parent[i].getElementsByClassName('barWrap___2oM3ve3z');
            if(child.length == 0){
                parent[i].style = "display:none";
            }
            for (let j = 0; j < child.length; j++) {
                var childList = child[j].getElementsByClassName('bar___bvr3y4CY bar--fixed___2g5AMVE-');
                if(childList.length>0){
                    parent[i].style = "display:flex";
                    break;
                }else if(childList.length==0){
                    parent[i].style = "display:none";
                }
            }
        }
    } else if (Value == "draft") {
        var parent = document.getElementsByClassName('tr___2CNcHw4v');
        console.log('aaaa', parent.length)
        for (let i = 0; i < parent.length; i++) {
            var child = parent[i].getElementsByClassName('barWrap___2oM3ve3z');
            if(child.length == 0){
                parent[i].style = "display:none";
            }
            for (let j = 0; j < child.length; j++) {
                var childList = child[j].getElementsByClassName('bar___bvr3y4CY bar--draft___2PiLGR8-');
                if(childList.length>0){
                    parent[i].style = "display:flex";
                    break;
                }else if(childList.length==0){
                    parent[i].style = "display:none";
                }
            }
        }
    } else if (Value == "request") {
        var parent = document.getElementsByClassName('tr___2CNcHw4v');
        console.log('aaaa', parent.length)
        for (let i = 0; i < parent.length; i++) {
            var child = parent[i].getElementsByClassName('barWrap___2oM3ve3z');
            if(child.length == 0){
                parent[i].style = "display:none";
            }
            for (let j = 0; j < child.length; j++) {
                var childList = child[j].getElementsByClassName('bar___bvr3y4CY .bar--request___19UK3xQV');
                if(childList.length>0){
                    parent[i].style = "display:flex";
                    break;
                }else if(childList.length==0){
                    parent[i].style = "display:none";
                }
            }
        }
    }
};




