//assotiative array of current tickets
var tickets_obj = {'disc0':1, 'disc1':0,'disc2':0,'disc3':0,'disc4':0,'disc5':0,'all':1};

$(document).ready(function(){
    $('.birthdayData').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: Date.today().add({years: -120}).toString('yyyy') + ":" + Date.today().toString('yyyy')
    }).mask('99.99.9999');
});


/* selectors for search form */
$('.container_form .selectblock').live('click', function(e){
    $('.container_form .disocuntBlock').show();
    $(this).addClass('active');
    e.stopPropagation();
});
$('.container_form .selectblock.active').live('click', function(){
    $('.container_form .disocuntBlock').hide();
    $(this).removeClass('active');
});
/*$('.container_form').live('click', function(){
 $('.container_form').hide();
 $('.container_form  .selectblock').removeClass('active');
 });
 /* selectors for search form end*/

$('.disocuntBlockClose').live('click',function(){

    $('.discountsTbl').find('.birthdayData').each(function(){
        if($(this).val() == ''){
            $(this).closest('.studBlock').remove();
        }
    });

    $('.discountsTbl').find('.ISIC').each(function(){
        var ISIC_val = $(this).val();
        var STDticket_val = $(this).closest('div.studBlock').find('input.studentTicket').val();
        if( (ISIC_val == '') && (STDticket_val == '') ){
            $(this).closest('.studBlock').remove();
        }
    });

    var discGroupe1_amount = parseInt($('td.discGroupe1 div.studBlock').length);
    var discGroupe2_amount = parseInt($('td.discGroupe2 div.studBlock').length);
    var discGroupe3_amount = parseInt($('td.discGroupe3 div.studBlock').length);
    var discGroupe4_amount = parseInt($('td.discGroupe4 div.studBlock').length);
    var discGroupe5_amount = parseInt($('td.discGroupe5 div.studBlock').length);

    var discTicketsAmount = discGroupe1_amount+discGroupe2_amount+discGroupe3_amount+discGroupe4_amount+discGroupe5_amount;

    tickets_obj['disc1'] = discGroupe1_amount;
    tickets_obj['disc2'] = discGroupe2_amount;
    tickets_obj['disc3'] = discGroupe3_amount;
    tickets_obj['disc4'] = discGroupe4_amount;
    tickets_obj['disc5'] = discGroupe5_amount;

    $('input#discGroupe1').val(discGroupe1_amount);
    $('input#discGroupe2').val(discGroupe2_amount);
    $('input#discGroupe3').val(discGroupe3_amount);
    $('input#discGroupe4').val(discGroupe4_amount);
    $('input#discGroupe5').val(discGroupe5_amount);


    console.log(discGroupe1_amount);
    console.log(discGroupe2_amount);
    console.log(discGroupe3_amount);
    console.log(discGroupe4_amount);
    console.log(discGroupe5_amount);

    /* for(i=1;i<=5;i++) {
     $('#discGroupe'+i+'.birthday').val(0);
     tickets_obj['disc'+i+''] = 0;
     tickets_obj['disc0'] = 0;
     } */

    $('input#discTicketsAmount').val(discTicketsAmount);
    var newTotalTM = parseInt($('input#discGroupe0').val());

    tickets_obj['disc0'] = newTotalTM;
    $('span.disc0').html(newTotalTM);
    if(newTotalTM == 0) {$('span.disc0').closest('div').hide();}
    $('span.disc1').html(discGroupe1_amount);

    if(discGroupe1_amount == 0) {$('span.disc1').closest('div').hide(); $('td.disc1').hide();}
    $('span.disc2').html(discGroupe2_amount);
    if(discGroupe2_amount == 0) {$('span.disc2').closest('div').hide(); $('td.disc2').hide();}
    $('span.disc3').html(discGroupe3_amount);
    if(discGroupe3_amount == 0) {$('span.disc3').closest('div').hide(); $('td.disc3').hide();}
    $('span.disc4').html(discGroupe4_amount);
    if(discGroupe4_amount == 0) {$('span.disc4').closest('div').hide(); $('td.disc4').hide();}
    $('span.disc5').html(discGroupe5_amount);
    if(discGroupe5_amount == 0) {$('span.disc5').closest('div').hide(); $('td.disc5').hide();}

    if(discTicketsAmount ==0) {$('table.discountsTbl').hide();}

    $('input#totalTicketsAmount').val(newTotalTM+discTicketsAmount);

    tickets_obj['all'] = newTotalTM+discTicketsAmount;

    //   reloadTicketsData(1,5, newTotalTM);


    $('.ticketCountNew').html(tickets_obj['all']);
    if(lang=='ua') {
        $('.selectblock').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
    }
    else if(lang=='en') {
        $('.selectblock').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
    }
    else {
        $('.selectblock').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
    }



    // $(this).closest('.discountsTbl').hide();
    $('div.selectblock.header').click();
});

$('.disocuntBlockAccept').live('click',function(){

    var hasErrors = 0;

    $('.discountsTbl').find('.birthdayData').each(function(){
        if(($(this).val() =='')&&($(this).is(":visible"))) {
            $(this).css('border','1px solid red');
            hasErrors = 1;
        } else {
            $(this).css('border','1px solid grey');
        }
    });

    $('.discountsTbl').find('.ISIC').each(function(){
        if(($(this).val() == '') && ($(this).closest('.studBlock').find('.studentTicket').val() == '') && ($(this).is(":visible")) ){
            $(this).css('border','1px solid red');
            $(this).closest('.studBlock').find('.studentTicket').css('border','1px solid red');
            hasErrors = 1;
        } else {
            $(this).css('border','1px solid grey');
            $(this).closest('.studBlock').find('.studentTicket').css('border','1px solid grey');
        }
    });
    if(hasErrors>0) {
        return
    } else {
        //$('.discountsTbl').hide();
        $(this).closest('.discountsTbl').hide();
    }
});

/* selectors for popup*/
$('.popup.order').find('.selectblock').live('click', function(e){
    $('.popup.order').find('.disocuntBlock').toggle();
    $(this).toggleClass('active');
    e.stopPropagation();
});

$('.popup.order').find('.disocuntBlockClose').live('click', function(){
    $(this).closest('.discountsTbl').hide();
    //$('.popup.order').find('.selectblock').removeClass('active');
});
/* selectors for popup end*/

var maxTickets = 10; //максимальное количество билетов, которое может быть выбрано
var passangers_rus =['пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров'];
var passangers_ukr =['пасажирів','пасажир','пасажира','пасажира','пасажира','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів' ,'пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажир','пасажира','пасажира','пасажира','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів','пасажирів'];
var passangers_eng =['passengers','passenger','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers','passengers'];

var totalTicketsAmount = parseInt($('input#totalTicketsAmount').val(), 10),
    lang = $('input#formlang').val();

/*minus ticket data */
$('.countFrameLeft').live('click',function(){
    if(tickets_obj[$(this).data('target')] >0 && tickets_obj['all'] >1) {
        tickets_obj[$(this).data('target')] = tickets_obj[$(this).data('target')]-1;
        tickets_obj['all']--;
        var group_data = $('.container_form').find('.checkbox.left').find("."+$(this).data('target'));
        if(tickets_obj[$(this).data('target')] ==0) {
            group_data.html('0');
            group_data.parent('.element').hide();
        } else {
            group_data.html(tickets_obj[$(this).data('target')]);
            group_data.show();
        }
    }
});
/*minus ticket data */

/*plus ticket data */
$('.countFrameRight').live('click',function(){
    if(tickets_obj['all'] <10 && tickets_obj['all'] >0) {
        tickets_obj[$(this).data('target')] = tickets_obj[$(this).data('target')]+1;
        tickets_obj['all']++;
        var group_data = $('.container_form').find('.checkbox.left').find("."+$(this).data('target'));
        group_data.html(tickets_obj[$(this).data('target')]);
        group_data.parent().show();
    }
});
/*end plus ticket data */


$("div.countFrameRight").live('click', function(){
    var ISICPlaseholder = 'номер ISIC';
    var StudentPlaseholder = '№ студен.';
    var bdatePlaseholder1 = 'дата рождения';
    var andor = 'и<br>или';
    // var bdatePlaseholder2 = 'дата рождения (не обязательно)';
    if(lang == 'ua'){
        ISICPlaseholder = 'номер ISIC';
        StudentPlaseholder = '№ студен.';
        bdatePlaseholder1 = 'дата народження';
        andor = 'і<br>або';
        //   bdatePlaseholder2 = "дата народження (не об'язково)";
    }
    else if(lang == 'en'){
        ISICPlaseholder = 'ISIC';
        StudentPlaseholder = 'student ticket';
        bdatePlaseholder1 = 'birth date';
        andor = 'and<br>or';
        //    bdatePlaseholder2 = "birth date (not necessarily)";
    }
    var inputObj = $(this).prev("input");
    var totalTicketsAmount = parseInt($('input#totalTicketsAmount').val(), 10);
    if($(this).attr('id')!='discGroupe0'){
        $('table.discountsTbl').show();
        var discTicketsAmount = parseInt($('input#discTicketsAmount').val(), 10); //количество льготных пассажиров
        if((discTicketsAmount<maxTickets)&&(totalTicketsAmount!=maxTickets))
            discTicketsAmount++;
        $('input#discTicketsAmount').attr({value:discTicketsAmount});
    }

    $('input#discTicketsAmount').attr({value:discTicketsAmount});

    var number = parseInt(inputObj.val(), 10);

    if(totalTicketsAmount<maxTickets) {
        number++; totalTicketsAmount++;
        var targetTDtoShow = $(this).attr('data-target'),
            targetID = $(this).attr('id');
        $('td.'+targetTDtoShow+'').show();

        if(targetID == 'discGroupe3') {
            $('td.'+targetID+'').append('<div class="studBlock" style="margin-left: 4px;"><input type="text" value="" style="top:10px;left:4px;width: 85px!important;" class="ISIC" id="ISIC" placeholder="'+ISICPlaseholder+'" /><span class="andor">'+andor+'</span><input type="text" value="" style="top:10px;left:3px;width: 85px!important;" class="studentTicket" id="studentTicket" placeholder="'+StudentPlaseholder+'" /></div>');
        } else {
            $('td.'+targetID+'').append('<div class="studBlock"><input type="text" value="" style="position: relative; top:10px;left:4px; float:left;" class="birthdayData" id="birthdayData" placeholder="'+bdatePlaseholder1+'" /></div>');
        }
        var countInpts = 1;

        $('table.discountsTbl').queue(function () {            // добавим новую функцию в очередь
            $(this).find('input').each(
                function(){
                    var thisClassName = $(this).attr('class');
                    thisClassName=thisClassName.split(" ")[0];
                    $(this).attr('id',thisClassName+countInpts);
                    if(thisClassName == 'ISIC')
                        countInpts--;
                    if(thisClassName == 'birthdayData'){
                        $(this).removeClass('hasDatepicker');
                    }
                    countInpts++;
                }
            );
            $(this).dequeue();                    // ! продолжим очередь !
        });

        $('table.discountsTbl').queue(function (next) {        //добавим новую функцию в очередь
            $(this).find('input').each(
                function(){
                    var thisClassName = $(this).attr('class');
                    thisClassName=thisClassName.split(" ")[0];
                    if(thisClassName == 'birthdayData'){
                        var curITM = $(this);
                        $(this).datepicker({
                            changeMonth: true,
                            changeYear: true,
                            yearRange: Date.today().add({years: -120}).toString('yyyy') + ":" + Date.today().toString('yyyy')
                        }).change(function () {
                            var date = Date.parseExact($(this).val(), 'dd.MM.yyyy').toString('dd.MM.yyyy');
                            curITM.val(date);

                        });
                    }
                }
            );
            next();                               // ! продолжим очередь !
        });

    }
    if(tickets_obj['all']<1) {
        tickets_obj['all']=1;
    }

    inputObj.attr({value:number});
    $('input#totalTicketsAmount').attr({value:tickets_obj['all']});
    $('input#ticketAmount').attr({value:tickets_obj['all']});
    $('.ticketCountNew').html(tickets_obj['all']);
    $('.popup.order').find('input#ticketAmount').attr({value:tickets_obj['all']});
    $('.popup.order').find('.ticketCountNew').html(tickets_obj['all']);
    if(lang=='ua') {
        $('.selectblock').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
    }
    else if(lang=='en') {
        $('.selectblock').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
    }
    else {
        $('.selectblock').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
    }
});


$("div.countFrameLeft").live('click', function(){
    var lang = $('input#formlang').val(),
        inputObj = $(this).next("input"),
        totalTicketsAmount = parseInt($('input#totalTicketsAmount').val(), 10),
        number = parseInt(inputObj.val(), 10),
        countInpts = 1;


    var discTicketsAmount = parseInt($('input#discTicketsAmount').val(), 10); //количество льготных пассажиров
    if($(this).attr('id')!='discGroupe0'){
        if((discTicketsAmount>0)&&(number>0)&&(totalTicketsAmount>1))
            discTicketsAmount--;
        $('input#discTicketsAmount').attr({value:discTicketsAmount});

    }
    if(discTicketsAmount==0) {
        $('table.discountsTbl').hide();
    }

    if(number>0) {
        number--;
        totalTicketsAmount--;
    }

    $('table.discountsTbl').find('input').each(
        function(){$(this).removeClass('active');
            var thisClassName = $(this).attr('class');
            thisClassName=thisClassName.split(" ")[0];
            $(this).attr('id',thisClassName+countInpts);
            if(thisClassName == 'ISIC')
                countInpts--;
            countInpts++;
        }
    );

    if(totalTicketsAmount>0){
        var targetID = $(this).attr('id');
        $('td.'+targetID+'').find('div.studBlock:last-child').remove();
    }

    if(totalTicketsAmount<1){
        totalTicketsAmount=number=1
    }
    var targetTDtoShow = $(this).attr('data-target');
    if(number<1) {
        $('td.'+targetTDtoShow+'').hide();
    }

    inputObj.attr({value:number});

    $('input#totalTicketsAmount').attr({value:tickets_obj['all']});
    $('.ticketCountNew').html(tickets_obj['all']);
    $('input#ticketAmount').attr({value:tickets_obj['all']});

    if(lang=='ua')
        $('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
    else if(lang=='en')
        $('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
    else
        $('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
});


$('div.disocuntBlock').live('click',function(e){e.stopPropagation();})
$('div.ui-datepicker').live('click',function(e){e.stopPropagation();})

$("body").live('click',function(){
    $('div.disocuntBlock').hide(0);
    $('div.selectblock').removeClass('active');
});




var reloadTicketsData = function(start,end, newTotalTM) {

    var firstTr =$('.discountsTbl').find('tr:eq(1)'),
        secondTr =$('.discountsTbl').find('tr:eq(2)'),
        thirdTr =$('.discountsTbl').find('tr:eq(3)');

    for(i=start;i<=end;i++) {
        group_data = $('.container_form').find('.checkbox.left').find(".disc"+i);
        group_data.html(tickets_obj[".disc"+i]);
        if(tickets_obj[".disc"+i]>0) {
            group_data.parent().show();
        } else {
            group_data.parent().hide();
            firstTr.find('.disc'+i).hide();
            secondTr.find('.disc'+i).hide();
            thirdTr.find('.disc'+i).hide();
        }
    }

    tickets_obj['all'] = newTotalTM;
    tickets_obj['disc0'] = newTotalTM;
    $('.ticketCountNew').html(tickets_obj['all']);
    if(lang=='ua') {
        $('.selectblock').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_ukr[tickets_obj['all']]);
    }
    else if(lang=='en') {
        $('.selectblock').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_eng[tickets_obj['all']]);
    }
    else {
        $('.selectblock').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
        $('.popup.order').find('#passengerTitle').html(passangers_rus[tickets_obj['all']]);
    }
}

//$('.container_form').find('.discountsTbl').find('.birthdayData').each(function(){console.log($(this))})