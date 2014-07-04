    $(document).ready(function(){
        $('.birthdayData').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: Date.today().add({years: -120}).toString('yyyy') + ":" + Date.today().toString('yyyy')
        }).mask('99.99.9999');
    });


    /* selectors for search form */
	$('.container_form .selectblock').live('click', function(e){
        $('.container_form .disocuntBlock').show(0);
        $(this).addClass('active');
        e.stopPropagation();
    });
    $('.container_form .selectblock.active').live('click', function(){
        $('.container_form .disocuntBlock').hide(0);
        $(this).removeClass('active');
    });
    $('.container_form  .disocuntBlockClose').live('click', function(){
        $('.container_form  .disocuntBlock').hide(0);
        $('.container_form  .selectblock').removeClass('active');
    });
    /* selectors for search form end*/


    /* selectors for popup*/
    $('.popup.order').find('.selectblock').live('click', function(e){
        $('.popup.order').find('.disocuntBlock').toggle();
        $(this).toggleClass('active');
        e.stopPropagation();
    });

    $('.popup.order').find('.disocuntBlockClose').live('click', function(){
        $('.popup.order').find('.disocuntBlock').hide();
        $('.popup.order').find('.selectblock').removeClass('active');
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
        console.log('всего пасажиров:'+totalTicketsAmount);
        if(totalTicketsAmount<maxTickets)
        {number++; totalTicketsAmount++;
            var targetTDtoShow = $(this).attr('data-target');
            $('td.'+targetTDtoShow+'').show();
            var targetID = $(this).attr('id');
            if(targetID == 'discGroupe3')
            {
                $('td.'+targetID+'').append('<div class="studBlock" style="margin-left: 4px;"><input type="text" value="" style="top:10px;left:4px;width: 85px!important;" class="ISIC" id="ISIC" placeholder="'+ISICPlaseholder+'" /><span class="andor">'+andor+'</span><input type="text" value="" style="top:10px;left:3px;width: 85px!important;" class="studentTicket" id="studentTicket" placeholder="'+StudentPlaseholder+'" /></div>');
            }
            else
            {
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
                            //$(this).removeClass('active');
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
        if(totalTicketsAmount<1)
        {totalTicketsAmount=1}
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
        var lang = $('input#formlang').val();
        var inputObj = $(this).next("input");
        var totalTicketsAmount = parseInt($('input#totalTicketsAmount').val(), 10);
        var number = parseInt(inputObj.val(), 10);


        var discTicketsAmount = parseInt($('input#discTicketsAmount').val(), 10); //количество льготных пассажиров
        if($(this).attr('id')!='discGroupe0'){
            if((discTicketsAmount>0)&&(number>0)&&(totalTicketsAmount>1))
                discTicketsAmount--;
            $('input#discTicketsAmount').attr({value:discTicketsAmount});

        }
        if(discTicketsAmount==0)
            $('table.discountsTbl').hide();

        if(number>0)
        {number--;totalTicketsAmount--;

        }

        var countInpts = 1;
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
        if(number<1) $('td.'+targetTDtoShow+'').hide();

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