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
        $(this).closest('.discountsTbl').hide();
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

    var totalTicketsAmount = parseInt($('input#totalTicketsAmount').val(), 10);
    $("div.countFrameRight").live('click', function(){
        var lang = $('input#formlang').val();
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

        if(totalTicketsAmount<1) {
            totalTicketsAmount=1;
        }

        inputObj.attr({value:number});
        $('input#totalTicketsAmount').attr({value:totalTicketsAmount});
        $('input#ticketAmount').attr({value:totalTicketsAmount});
        $('#ticketCountNew').html(totalTicketsAmount);
        $('.popup.order').find('input#ticketAmount').attr({value:totalTicketsAmount});
        $('.popup.order').find('#ticketCountNew').html(totalTicketsAmount);
        if(lang=='ua') {
            $('.selectblock').find('#passengerTitle').html(passangers_ukr[totalTicketsAmount]);
            $('.popup.order').find('#passengerTitle').html(passangers_ukr[totalTicketsAmount]);
        }
        else if(lang=='en') {
            $('.selectblock').find('#passengerTitle').html(passangers_eng[totalTicketsAmount]);
            $('.popup.order').find('#passengerTitle').html(passangers_eng[totalTicketsAmount]);
        }
        else {
            $('.selectblock').find('#passengerTitle').html(passangers_rus[totalTicketsAmount]);
            $('.popup.order').find('#passengerTitle').html(passangers_rus[totalTicketsAmount]);
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
            number--;totalTicketsAmount--;
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

        $('input#totalTicketsAmount').attr({value:totalTicketsAmount});
        $('#ticketCountNew').html(totalTicketsAmount);
        $('input#ticketAmount').attr({value:totalTicketsAmount});

        if(lang=='ua')
            $('#passengerTitle').html(passangers_ukr[totalTicketsAmount]);
        else if(lang=='en')
            $('#passengerTitle').html(passangers_eng[totalTicketsAmount]);
        else
            $('#passengerTitle').html(passangers_rus[totalTicketsAmount]);
    });
     $('div.disocuntBlock').live('click',function(e){e.stopPropagation();})
    $('div.ui-datepicker').live('click',function(e){e.stopPropagation();})

    $("body").live('click',function(){
        $('div.disocuntBlock').hide(0);
		$('div.selectblock').removeClass('active');
    });


    //minus ticket data
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

    //plus ticket data
    $('.countFrameRight').live('click',function(){
        if(tickets_obj['all'] <10 && tickets_obj['all'] >0) {
            tickets_obj[$(this).data('target')] = tickets_obj[$(this).data('target')]+1;
            tickets_obj['all']++;
            var group_data = $('.container_form').find('.checkbox.left').find("."+$(this).data('target'));
            group_data.html(tickets_obj[$(this).data('target')]);
            group_data.parent().show();
        }
    });

    //$('.container_form').find('.discountsTbl').find('.birthdayData').each(function(){console.log($(this))})