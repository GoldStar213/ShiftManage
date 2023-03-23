$(document).ready(function () {
    var date = document.getElementById('date').value;
    var star, circle, memo;
    $.get('/shiftmemo', {
            'date': date
        },
        function (response) {
            if (response.star == "create") {
                star   = 0;
                circle = 0;
                memo   = "null";
            } else {
                star   = response.star;
                circle = response.circle;
                memo   = response.memo;
            }

            if (star == 1) {
                $('.starArea___12Do3M-F>span').attr('class',
                    'icon___2JL-vxzU star___2N-FsSrn icon--on___br8tvC15');
            } else {
                $('.starArea___12Do3M-F>span').attr('class',
                    'icon___2JL-vxzU star___2N-FsSrn icon--off___3GYPMPcY');
            }

            if(memo != "null"){
                document.querySelector('.memo___DI77u7nR').innerHTML = memo;
                document.querySelector('.memo___DI77u7nR').setAttribute("class", "memo___DI77u7nR");
            }else if(memo == "null"){
                document.querySelector('.memo___DI77u7nR').innerHTML = "メモはありません";
                document.querySelector('.memo___DI77u7nR').setAttribute("class", "memo___DI77u7nR memo--empty___1_Z5U4of");

            }

            if (circle == 0) {
                $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                );

                $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');

                $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
            } else if (circle == 1) {
                $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15'
                );
                $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');

                $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
            } else if (circle == 2) {
                $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15');
                $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                );
                $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
            } else if (circle == 3) {
                $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15');
                $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                );

                $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                    'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
            }
        });



    $('.shifticon.shifticon-circle-empty').on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = 'PUT';

        var ajaxurl = "/shiftmemo/" + date;
        $.ajax({
            type: type,
            url: ajaxurl,
            data: {
                'circle': 1
            },
            success: function (response) {
                if ($.isEmptyObject(response.error) && response == 1) {

                    $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15'
                    );
                    $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');

                    $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
                } else if ($.isEmptyObject(response.error) && response == 0) {
                    $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                    );
                }
            }
        });
    });
    $('.shifticon.shifticon-circle-half').on('click', function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = 'PUT';

        var ajaxurl = "/shiftmemo/" + date;
        $.ajax({
            type: type,
            url: ajaxurl,
            data: {
                'circle': 2
            },
            success: function (response) {
                if ($.isEmptyObject(response.error) && response == 2) {

                    $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15');
                    $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                    );
                    $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
                } else if ($.isEmptyObject(response.error) && response == 0) {
                    $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
                }
            }
        });
    });
    $('.shifticon.shifticon-circle-full').on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = 'PUT';

        var ajaxurl = "/shiftmemo/" + date;
        $.ajax({
            type: type,
            url: ajaxurl,
            data: {
                'circle': 3
            },
            success: function (response) {
                if ($.isEmptyObject(response.error) && response == 3) {

                    $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--on___br8tvC15');
                    $('.busynessArea___11XX5DNx span:nth-child(2)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY'
                    );

                    $('.busynessArea___11XX5DNx span:nth-child(3)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
                } else if ($.isEmptyObject(response.error) && response == 0) {
                    $('.busynessArea___11XX5DNx span:nth-child(4)').attr('class',
                        'icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY');
                }
            }
        });
    });

    $('.shifticon.shifticon-star').on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = 'PUT';

        var ajaxurl = "/shiftmemo/" + date;
        $.ajax({
            type: type,
            url: ajaxurl,
            data: {
                'star': 1
            },
            success: function (response) {
                if ($.isEmptyObject(response.error) && response == 1) {
                    $('.starArea___12Do3M-F>span').attr('class',
                        'icon___2JL-vxzU star___2N-FsSrn icon--on___br8tvC15');
                } else if ($.isEmptyObject(response.error) && response == 0) {
                    $('.starArea___12Do3M-F>span').attr('class',
                        'icon___2JL-vxzU star___2N-FsSrn icon--off___3GYPMPcY');
                }
            }

        });

    });

    $('.normal___2Ft303yo.memodisplay').on('click', function () {
        var text = document.querySelector('div.memo___DI77u7nR').innerHTML;
        document.querySelector('div.memoAreaContent___3ilLFe6B').style  = "display:none";
        document.querySelector('form.memoAreaContent___3ilLFe6B').style = "display:flex";
        if(text == "メモはありません"){
            document.getElementById('memo').value = "";
        }else document.getElementById('memo').value = text;
    });
    $('.normal___2Ft303yo.memosave').on('click', function (e) {
       var value = document.getElementById('memo').value;
       if(value.length == 0){
        value = "null";
       }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = 'PUT';

        var ajaxurl = "/shiftmemo/" + date;
        $.ajax({
            type: type,
            url: ajaxurl,
            data: {
                'memo': value
            },
            success: function (response) {
                if ($.isEmptyObject(response.error) && response == "success") {

                    document.querySelector('div.memoAreaContent___3ilLFe6B').style  = "display:flex";
                    document.querySelector('form.memoAreaContent___3ilLFe6B').style = "display:none";
                    document.querySelector('.memo___DI77u7nR').innerHTML            = value;
                    document.querySelector('.memo___DI77u7nR').setAttribute("class", "memo___DI77u7nR");
                    if(value == "null"){
                        document.querySelector('.memo___DI77u7nR').innerHTML = "メモはありません";
                        document.querySelector('.memo___DI77u7nR').setAttribute("class", "memo___DI77u7nR memo--empty___1_Z5U4of");
                    }
                }
            }

        });

        document.querySelector('div.memoAreaContent___3ilLFe6B').style  = "display:none";
        document.querySelector('form.memoAreaContent___3ilLFe6B').style = "display:flex";
    });
    $('.normal___2Ft303yo.memocancel').on('click', function () {
        document.querySelector('div.memoAreaContent___3ilLFe6B').style  = "display:flex";
        document.querySelector('form.memoAreaContent___3ilLFe6B').style = "display:none";
    });

    $('.memoWrapper___LDzGbsi5.memoshow').on('click', function () {
        var text = document.querySelector('div.memo___DI77u7nR').innerHTML;
        document.querySelector('div.memoAreaContent___3ilLFe6B').style  = "display:none";
        document.querySelector('form.memoAreaContent___3ilLFe6B').style = "display:flex";
        if(text == "メモはありません"){
            document.getElementById('memo').value = "";
        }else document.getElementById('memo').value = text;

    });

});
