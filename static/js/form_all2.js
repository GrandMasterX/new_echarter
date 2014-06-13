$( function() {
            $('form.clearfix').submit(function() {
                return false;
            });
        });
function correctStr(str) {
    if (!str) return '';
    var arrReplace = {
        'q': 'й', 'w': 'ц', 'e': 'у', 'r': 'к', 't': 'е', 'y': 'н',
        'u': 'г', 'i': 'ш', 'o': 'щ', 'p': 'з', '[': 'х', ']': 'ъ',
        'a': 'ф', 's': 'ы', 'd': 'в', 'f': 'а', 'g': 'п', 'h': 'р',
        'j': 'о', 'k': 'л', 'l': 'д', ';': 'ж', "'": 'э', 'z': 'я',
        'x': 'ч', 'c': 'с', 'v': 'м', 'b': 'и', 'n': 'т', 'm': 'ь',
        ',': 'б', '.': 'ю', '/': '.', '`': 'ё', 'Q': 'Й', 'W': 'Ц',
        'E': 'У', 'R': 'К', 'T': 'Е', 'Y': 'Н', 'U': 'Г', 'I': 'Ш',
        'O': 'Щ', 'P': 'З', '{': 'Х', '}': 'Ъ', 'A': 'Ф', 'S': 'Ы',
        'D': 'В', 'F': 'А', 'G': 'П', 'H': 'Р', 'J': 'О', 'K': 'Л',
        'L': 'Д', ':': 'Ж', '"': 'Э', '|': '/', 'Z': 'Я', 'X': 'Ч',
        'C': 'С', 'V': 'М', 'B': 'И', 'N': 'Т', 'M': 'Ь', '<': 'Б',
        '>': 'Ю', '?': ',', '~': 'Ё', '@': '"', '#': '№', '$': ';', '^': ':', '&': '?'};
    var newStr = '';
    for (var i in str) {
        newStr += arrReplace[str[i]] ? arrReplace[str[i]] : str[i];
    }
    return newStr;
}		
function getCities(searchStr,lang, selector){
	if(document.all){ // IE
		var xhr = new XDomainRequest();
	}
	else {var xhr = new XMLHttpRequest();}
searchStr = correctStr(searchStr);
	xhr.open('GET', 'http://e-travels.com.ua/includes/get_cities.php?lang='+lang+'&searchStr='+searchStr, true);

	xhr.onload = function() {
	if(this.responseText == '0') return false;
	selector.closest('div').find('div.autocompl-block').html(this.responseText);
	 // alert(this.responseText);
	}
	xhr.onerror = function() {
	  alert('Ошибка ' + this.status);
	}
	xhr.send('');
}
$(document).ready(function(){

	$( "input.town" ).keyup(function (e){ 
	var that = $(this);
		var text = that.val();
//	if (e.which !== 0) 
		if((text.length >= 3)&&(e.keyCode > 40)){
			getCities(text, 'ru', that);
		}
	
	});

	$('body').click(function(){$('ul.autocmpl-ul').hide();});
	$('li.autocmpl-li').live('click', function(){ 
		var thisID = $(this).attr('id'); 
		var thisNAME = $(this).text();
		$(this).closest('div.pointCheck').find('input.hid_city_id').val(thisID);
		$(this).closest('div.pointCheck').find('input.town').val(thisNAME);
	});	
	$('.element.oneway').click(function(){$('div.ret').hide().find('#backTripDate').attr('value','');});
	$('.element.rt').click(function(){$('div.ret').show();});
	
});

	
	

	
var api_params = {};

function isEmptyObject(obj) {
    for (var i in obj) {
        return false;
    }
    return true;
}

function checkError(response, outputElement) {

    if (response.err_code || response.err_code === 0) {
        if (outputElement) {
            outputElement.html(response.errors);
        }
        return true;
    }
    return false;
}

function getNowDate() {
            var date = new Date();
            var dd = date.getDate();
            var mm = date.getMonth()+1;//January is 0!
            var yyyy = date.getFullYear();
			if(dd<10){dd='0'+dd}
            if(mm<10){mm='0'+mm}

    return dd+'.'+mm+'.'+yyyy;
}

function isset() {

    var a = arguments, l = a.length, i = 0;

    if (l === 0) {
        throw new Error('Empty isset');
    }

    while (i !== l) {
        if (typeof(a[i]) == 'undefined' || a[i] === null) {
            return false;
        } else {
            i++;
        }
    }
    return true;
}



$(document).ready(function () {

$.order();

});

(function ($) {
    $.fn.disable = function () {
        return $(this).each(function () {
            var obj = $(this);
            obj.trigger('disable');
            obj.attr('disabled', 'disabled');
        });
    };

    $.fn.disabled = function () {
        return !!$(this).attr('disabled');
    };

    $.fn.enable = function () {
        return $(this).each(function () {
            var obj = $(this);
            obj.trigger('enable');
            obj.removeAttr('disabled');
        });
    };
})(jQuery);


(function ($) {
    $.order = function (params) {
        var data = {};
        var objs = {};
        var api_url = window.location.href;
        var api_request = null;
        var el_loaders = {};

        var def_params = {
			searchButtonS: '#searchButton', 
            firstCityS: '#startCityId',
			secondCityS: '#endCityId',
            tripDateS: '#tripDate',
            backTripDateS: '#backTripDate',
            resultContainerS: '#tripsResultContainer', 
			showSeatsButtonS: '.check_seats', 
			seatsContainerS: '.check_seats_container', 

			
            busCheckS: '#buscheck',//
            aviaCheckS: '#aviacheck',//
            aviaCheckEconomS: '#aviacheckeconom',//
            aviaCheckBusinesS: '#aviacheckbusines',//
            trainCheckS: '#traincheck',//
            exchangeCheckS: '#exchangecheck', //
            transferCityS: '#cityId_search2',
			seatsBackContainerS: '.seatsBackContainer', 
			searchPlusOneDayS: '.searchPlusOneDay', 
			searchAviaTripsS: '.searchAviaTrips', 
			ticketsS: '#totalTicketsAmount', 
			lockSeatsS: '.lock-seats', 
			buyContainerS: '.buy-container', 
			discountsPopupS: 'table.discountsTbl', 
			discountsPopupBtnS: '#skidki_plus'
        };

        var params = params ? params : {};


        function init(p) {

            for (var el in p) {
                if (!def_params[el]) continue;
                def_params[el] = p[el];
            }
            params = def_params;
var jsInitParams = {"loadBackDates":1,"loadDates":1,"salt":"11111111111"};
            if (jsInitParams) {
                data.initParams = jsInitParams;
            } else {
                data.initParams = {};
            }
//console.log(data.initParams);


            objs.roundTrip = $(params.roundTripS);
            objs.firstCountry = $(params.firstCountryS);
            objs.secondCountry = $(params.secondCountryS);
            objs.firstCity = $(params.firstCityS);

	////////
            objs.busCheck = $(params.busCheckS);
            objs.aviaCheck = $(params.aviaCheckS);
            objs.aviaCheckEconom = $(params.aviaCheckEconomS);
            objs.aviaCheckBusines = $(params.aviaCheckBusinesS);
            objs.trainCheck = $(params.trainCheckS);
            objs.exchangeCheck = $(params.exchangeCheckS);
	//////////

            objs.secondCity = $(params.secondCityS);
            objs.transferCity = $(params.transferCityS);
            objs.tripDate = $(params.tripDateS);
            objs.backTripDate = $(params.backTripDateS);
            objs.resultContainer = $(params.resultContainerS);
            objs.searchButton = $(params.searchButtonS);
            objs.searchPlusOneDay = $(params.searchPlusOneDayS);
            objs.searchAviaTrips = $(params.searchAviaTripsS);
            objs.tickets = $(params.ticketsS);
            objs.disocuntPopup = $(params.discountsPopupS);
            objs.discountsPopupBtn = $(params.discountsPopupBtnS);
            objs.searchTripsInterval = null;
            //objs.discountsForm = $(params.discountsFormS);


           // data.roundTrip = !!parseInt(objs.roundTrip.filter(':checked').val());
            data.tickets_checked ={f:[], b:[]};
            data.searchParams = {};
            data.trips = {};

            objs.resultContainer.html('')
                .slideUp()
                .contentLoader = function () {
                return objs.resultContainer.html('<div class="ajax-loader-line"><img src="/img/ajax-loader-line.gif" /></div>');
            };


			
            



            //**************//
         


					
// установка городов по-умолчанию
var default_start_city_name = $('input#firstDefaultCityName').val();
var default_end_city_name = $('input#secondDefaultCityName').val();
var default_start_city_id = $('input#firstDefaultCityId').val();
var default_end_city_id = $('input#secondDefaultCityId').val();
$('input#cityId_search').attr('value', default_start_city_id);
$('input#cityId_search1').attr('value', default_end_city_id);
$('input#search').attr('value', default_start_city_name);
$('input#search1').attr('value', default_end_city_name);
if((default_start_city_name!='')&&(default_end_city_name!=''))
	objs.searchButton.enable();

/*
var default_city2 = $('input#secondDefaultCity').val();
if(!default_city1) var default_city11 = ''; else var default_city11 = default_city1;
if(!default_city2) var default_city22 = ''; else var default_city22 = default_city2;
*/


            objs.tripDate.datepicker({

			numberOfMonths:[1,2],
                minDate: new Date(),
                constrainInput: true,
                onChangeMonthYear: function (y, m, o) {


				setTimeout(function() {
							$('#ui-datepicker-div').prepend('<p style="position:relative;"><img style="position: absolute;margin-top: 8px;margin-left: 180px;z-index: 2000;" src="/images/form/ajax-loader-line.gif" /></p>');
						}, 0);

                    data.tripDates = null;
                    if (!data.initParams.loadDates) return;
                    contentLoaderE(objs.tripDate, 'dataBlockLoader');
                    /*var date = new Date();
                     alert(m);
                     date.setMonth(m - 1);
                     date.setFullYear(y);
                     date.setDate(1);
                     */

                    var date = Date.parseExact('01.' + m + '.' + y, 'dd.M.yyyy');
                    var str_date = date.toString('dd.MM.yyyy');
                    var params = {
                        'START_CITY_ID': objs.firstCity.val(),
                        'END_CITY_ID': objs.secondCity.val(),
                        'START_DATE': str_date,
                        'END_DATE': date.clone().add({ days: 62 }).toString('dd.MM.yyyy'),

                        'action': 'getDates'
                    };
                    if(data.roundTrip) {
                        params['onewayTripDate'] = Date.today().add({days: -1}).toString('dd.MM.yyyy');
                    }

                    api_post('http://e-travels.com.ua/get-charter-dates.php', params, function (json) {
                        if (json.ajax_cancel) return;
                        contentLoaderER(objs.tripDate);
                        data.tripDates = json.DATES;
                        objs.tripDate.datepicker('refresh');
						//if (!isEmptyObject(data.tripDates))
						if (Object.keys(data.tripDates).length > 1)
									setTimeout(function() {
							$('#ui-datepicker-div').append('<p style="font-weight:normal;color: #ad0b31;font-size: 13px;text-align: center;padding-bottom: 10px;padding-top: 5px;">На выделенных датах - чартерные рейсы или спецпредложения</p>');
						}, 0);
                    }, 'json', 0, 0);
                },
                beforeShow: function (field) {
				
			
				//alert(selectedTransportTypes);

                    data.tripDates = null;
	setTimeout(function() {
							$('#ui-datepicker-div').prepend('<p style="position:relative;"><img style="position: absolute;margin-top: 8px;margin-left: 180px;z-index: 2000;" src="/images/form/ajax-loader-line.gif" /></p>');
						}, 0);
                    if (!data.initParams.loadDates) return;
					//getNowDate();
					var dateVal = $(field).val()? $(field).val() : getNowDate();
				//	alert(dateVal);
                    var date = Date.parseExact(dateVal, 'dd.MM.yyyy');
                    var str_date = $.datepicker.formatDate('01.mm.yy', date);
                    var params = {
                        'START_CITY_ID': objs.firstCity.val(),
                        'END_CITY_ID': objs.secondCity.val(),
                        'START_DATE': str_date,
                        'END_DATE': date.clone().add({ days: 62 }).toString('dd.MM.yyyy'),
                       // 'onewayTripDate': Date.today().add({days: -1}).toString('dd.MM.yyyy'),
                        'action': 'getDates'
                    };
                    contentLoaderE(objs.tripDate, 'dataBlockLoader');
                    api_post('http://e-travels.com.ua/get-charter-dates.php', params, function (json) {
                        if (json.ajax_cancel) return;
                        contentLoaderER(objs.tripDate);
                        data.tripDates = json.DATES;
                        objs.tripDate.datepicker('refresh');
					//	console.log(Object.keys(data.tripDates).length);
	//alert(Object.keys(data.tripDates).length > 1);

					//	if (!isEmptyObject(data.tripDates))
						if (Object.keys(data.tripDates).length > 1)
						setTimeout(function() {
							$('#ui-datepicker-div').append('<p style="font-weight:normal;color: #ad0b31;font-size: 13px;text-align: center;padding-bottom: 10px;padding-top: 5px;">На выделенных датах - чартерные рейсы или спецпредложения</p>');
						}, 0);
                    }, 'json', 0, 0);

                },
                onClose: function () {
					var data1=$(this).val();
					var my_pattern=/^([0-9]{2})+\.([0-9]{2})+\.([0-9]{4})$/;
				if(my_pattern.test(data1))
					{
						$(this).closest('div').find('img.data-check').show();
					}
					else
					{
						$(this).closest('div').find('img.data-check').hide();
					}

                    contentLoaderER(objs.tripDate);
                },
                onSelect: function () {
                    contentLoaderER(objs.tripDate);
                },
                beforeShowDay: function (date) {

                    if (!data.initParams.loadDates) return [ true, "", "" ];

                    var str_date = $.datepicker.formatDate('dd.mm.yy', date);

                    if (!data.tripDates) {
                        return [ true, "", "" ];
                    } else {

                        if ($.inArray(str_date, data.tripDates) != -1) {
                           return [ true, "calendar_actdate_charter", "" ];

                        } else {
                           // return [ false, "", "" ];
							return [ true, "", "" ];
                        }
                    }

                    return true;
                }
            }).change(function () {

                var date = Date.parseExact($(this).val(), 'dd.MM.yyyy');
                var cfdate = Date.parseExact(objs.backTripDate.val() ? objs.backTripDate.val() : $(this).val(), 'dd.MM.yyyy');
					//objs.searchButton.enable();
             /*   if ((data.roundTrip && !objs.backTripDate.val()) || cfdate.compareTo(date) < 0) {
                    date.add(7).days();
                    objs.backTripDate.val(date.toString('dd.MM.yyyy'));
                }*/
            });

            objs.backTripDate.datepicker({
			numberOfMonths:[1,2],
                minDate: new Date(),
                constrainInput: true,
                onChangeMonthYear: function (y, m, o) {

				setTimeout(function() {
							$('#ui-datepicker-div').prepend('<p style="position:relative;"><img style="position: absolute;margin-top: 8px;margin-left: 180px;z-index: 2000;" src="/images/form/ajax-loader-line.gif" /></p>');
						}, 0);

                    data.tripBackDates = null;
                    if (!data.initParams.loadDates) return;
                    var date = Date.parseExact('01.' + m + '.' + y, 'dd.M.yyyy');
                    var str_date = date.toString('dd.MM.yyyy');
                    var params = {
                        'START_CITY_ID': objs.secondCity.val(),
                        'END_CITY_ID': objs.firstCity.val(),
                        'START_DATE': str_date,
                        'END_DATE': date.clone().add({ days: 62 }).toString('dd.MM.yyyy'),
                        'onewayTripDate': objs.tripDate.val(),
                        'action': 'getDates'
                    };
                    contentLoaderE(objs.backTripDate, 'dataBlockLoader');
                    api_post('http://e-travels.com.ua/get-charter-dates.php', params, function (json) {
                        if (json.ajax_cancel) return;
                        contentLoaderER(objs.backTripDate);
                        data.tripBackDates = json.DATES;
                        objs.backTripDate.datepicker('refresh');
						//if (!isEmptyObject(data.tripBackDates))
						if (Object.keys(data.tripBackDates).length > 1)
						
						setTimeout(function() {
							$('#ui-datepicker-div').append('<p style="font-weight:normal;color: #ad0b31;font-size: 13px;text-align: center;padding-bottom: 10px;padding-top: 5px;">На выделенных датах - чартерные рейсы или спецпредложения</p>');
						}, 0);
                    }, 'json', 0, 0);
                },
                beforeShow: function (field) {
				
                    data.tripBackDates = null;
					setTimeout(function() {
							$('#ui-datepicker-div').prepend('<p style="position:relative;"><img style="position: absolute;margin-top: 8px;margin-left: 180px;z-index: 2000;" src="/images/form/ajax-loader-line.gif" /></p>');
						}, 0);
                    if (!data.initParams.loadDates) return;
var dateVal = $(field).val()? $(field).val() : getNowDate();
                    var date = Date.parseExact(dateVal, 'dd.MM.yyyy');

                    var str_date = date.toString('01.MM.yyyy');

                    var params = {
                        'START_CITY_ID': objs.secondCity.val(),
                        'END_CITY_ID': objs.firstCity.val(),
                        'START_DATE': str_date,
                        'END_DATE': date.clone().add({ days: 62 }).toString('dd.MM.yyyy'),
                        'onewayTripDate': objs.tripDate.val(),
                        'action': 'getDates'
                    };
                    contentLoaderE(objs.backTripDate, 'dataBlockLoader');
                    api_post('http://e-travels.com.ua/get-charter-dates.php', params, function (json) {
                        if (json.ajax_cancel) return;
                        contentLoaderER(objs.backTripDate);
                        data.tripBackDates = json.DATES;
                        objs.backTripDate.datepicker('refresh');
					//	if (!isEmptyObject(data.tripBackDates))
						if (Object.keys(data.tripBackDates).length > 1)
						setTimeout(function() {
							$('#ui-datepicker-div').append('<p style="font-weight:normal;color: #ad0b31;font-size: 13px;text-align: center;padding-bottom: 10px;padding-top: 5px;">На выделенных датах - чартерные рейсы или спецпредложения</p>');
						}, 0);
                    }, 'json', 0, 0);
                },
                onClose: function(){

					var data1=$(this).val();
					var my_pattern=/^([0-9]{2})+\.([0-9]{2})+\.([0-9]{4})$/;
					if(my_pattern.test(data1))
					{
						$(this).closest('div').find('img.data-check').show();
					}
					else
					{
						$(this).closest('div').find('img.data-check').hide();
					}

                    contentLoaderER(objs.backTripDate);
                },
                onSelect: function(){
                    contentLoaderER(objs.backTripDate);
                },
                beforeShowDay: function (date) {
                    if (!data.initParams.loadBackDates) return [ true, "", "" ];

                    var str_date = $.datepicker.formatDate('dd.mm.yy', date);

                    if (!data.tripBackDates) {
                        return [ true, "", "" ];
                    } else {

                        if ($.inArray(str_date, data.tripBackDates) != -1) {
                            return [ true, "calendar_actdate_charter", "" ];
                        } else {
                            //return [ false, "", "" ];
                            return [ true, "", "" ];
                        }
                    }


                    return true;
                }
            }).change(function () {
                var date = Date.parseExact($(this).val(), 'dd.MM.yyyy');
                var cfdate = Date.parseExact(objs.tripDate.val() ? objs.tripDate.val() : Date.today(), 'dd.MM.yyyy');
                //console.log(cfdate.compareTo(date));
             //   if (cfdate.compareTo(date) <= 0) return;

                objs.backTripDate.val(cfdate.toString('dd.MM.yyyy'));
			  
            });


	
		
		
		}
		function uniqID(idlength) {
            var charstoformid = '_0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');
            if (!idlength) {
                idlength = Math.floor(Math.random() * charstoformid.length);
            }
            var uniqid = '';

            for (var i = 0; i < idlength; i++) {
                uniqid += charstoformid[Math.floor(Math.random() * charstoformid.length)];
            }

            if (jQuery("#" + uniqid).length == 0)
                return uniqid;
            else
                return uniqID(idlength)
        }

        function contentLoader(obj, loader) {
            if (!loader) loader = 'ajax-loader-line.gif';
            return obj.html('<div class="ajax-loader-line"><img src="/img/' + loader + '" /></div>');
        }        
		
		function reLogin(PageType, PageRes) {
			var SP = {};
			SP.action = 'getActionSalt';
			data.PageType = PageType;
			data.PageRes = PageRes;
					api_post(api_url, SP, function (result) {
						setTimeout(
                                function () {
									data.initParams.salt = result.salt;
								//	console.log(data.initParams);
								}, 2000
                            );
                     }, 'json');						
        }

        function contentLoaderE(obj, objClass) {

            var loader = $('<div class="ajax-loader-line '+objClass+'" />');
            loader.html('<img src="/img/ajax-loader-line.gif" />');
            loader.css({
                position: 'absolute', top: obj.offset().top + obj.height() / 4, left: obj.offset().left + obj.width() / 4, width: obj.width() / 2, height: obj.height() / 2, 'z-index': 500

            }).hide();
	
            //alert(obj.attr('id'));
            if (!obj.attr('id')) {
                obj.attr('id', uniqID());
            }

            contentLoaderER(obj);
            var selector = '#' + obj.attr('id');
            el_loaders[selector] = loader;
            loader.appendTo('body').show();
        }

        function contentLoaderER(obj) {
            if (el_loaders['#' + obj.attr('id')]) {
                el_loaders['#' + obj.attr('id')].remove();
            }
        }
data.PageType = '';
data.PageRes = '';
        function api_post(url, params, callback, type, multiple, sync) {
params['type'] = data.PageType;
params['res'] = data.PageRes;
            if (api_request && !multiple) api_request.abort();

            if (data.initParams.salt) {
                params['slt'] = data.initParams.salt;
            }
            var async = !sync;
            //alert(async);
            api_request = $.ajax({
                    url: url,
                    async: async,
                    type: "POST",
                    data: params,
                    dataType: type,
                    //timeout: 60,
                    success: function (json) {
                        if (checkError(json)) {
                            return;
                        }

                        callback(json);
                    },
                    error: function () {
                        /*alert('Connection Error');*/

                        callback({ajax_cancel: 1});
                    }

                }
            )
            /*api_request = $.post(url, params, function (json) {

             if (checkError(json)) {
             return;
             }

             callback(json);

             }, type);*/
        }
        init(params);
		reLogin('avia_plus_charter','echarter');
        //SEARCH BUTTON CLICK
		
        
		
        objs.searchButton.click(function () {
		//alert('test');
            if ($(this).disabled()) {
                return false;
            }
            $(this).disable();
            var searchParams = {};
/////////
/* установка параметров ЖД фильтров - начало*/
/*
searchParams.TRAIN_TYPES_SEARCH_FILTER = '';
            $("div.selectArea3Target.trainFilters input:checkbox").each(function(){
                    if($(this).prop('checked')){
                        searchParams.TRAIN_TYPES_SEARCH_FILTER += $(this).val()+';';
                    }});
					*/
/* установка параметров ЖД фильтров  - конец*/
/* установка параметров авиа фильтров - начало*/
      /*      var depFlagString = '';
            var arrFlagString = '';
            $("div#segmentTimeDep input:checkbox").each(function(){
                if($(this).prop('checked')){
                    depFlagString += $(this).val();
                }
            });
            $("div#segmentTimeArr input:checkbox").each(function(){
                if($(this).prop('checked')){
                    arrFlagString += $(this).val();
                }
            });
			searchParams.DEP_FLAG_STRING = depFlagString;
			searchParams.ARR_FLAG_STRING = arrFlagString;
			*/
/* установка параметров авиа фильтров  - конец*/
searchParams.SELECTED_MODES = "";
/*
if($("div.transports").hasClass("active")){
if((!$("div.transports #buscheck").prop("checked"))&&(!$("div.transports #traincheck").prop("checked"))&&(!$("div.transports #aviacheck").prop("checked")))
{ 
var waiter;
$('div.messageAlert p').html('Выберите тип транспортного средства<br /> <img style="margin-top:10px;" src="http://e-travels.com.ua/images/form/transports.png" alt="" />');
$('div.messageAlert').fadeIn(300, function(){
// создаём таймер и запоминаем ссылку на него
	waiter=setTimeout(function(){
          // когда таймер отработает будут запущен fadeOut
	          $('div.messageAlert').fadeOut(400);
	   },5000);
	})
	 			  $('div.messageAlert').live('click', function () {
	     clearTimeout(waiter);
		 $('div.messageAlert').fadeOut(400);
	});
	// щелчок унечтожит таймер и обьект не исчезнет
$(this).enable();
	return false;
}}
*/
/******
if($("#buscheck").prop("checked")){
		searchParams.SELECTED_MODES = objs.busCheck.val();
	}

	
if($("#traincheck").prop("checked")){
	if(searchParams.SELECTED_MODES != "")
		searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + objs.trainCheck.val();
	else
		searchParams.SELECTED_MODES = objs.trainCheck.val();
	}
if($("#exchangecheck").prop("checked")){
	if(searchParams.SELECTED_MODES != ""){
			if(transferPointVal>3)
				searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + 9;
			else
				searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + objs.exchangeCheck.val();
		}
	else
		searchParams.SELECTED_MODES = objs.exchangeCheck.val();
	}
if(($("#aviacheckbusines").prop("checked"))&&($("#aviacheck").prop("checked"))){
	if(searchParams.SELECTED_MODES != "")
		searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + objs.aviaCheckBusines.val();
	else
		searchParams.SELECTED_MODES = objs.aviaCheckBusines.val();
	}
if(($("#aviacheckeconom").prop("checked"))&&($("#aviacheck").prop("checked"))){
	if(searchParams.SELECTED_MODES != "")
		searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + objs.aviaCheckEconom.val();
	else
		searchParams.SELECTED_MODES = objs.aviaCheckEconom.val();
	}
if(($("#aviacheck").prop("checked")) && !($("#aviacheckeconom").prop("checked")) && !($("#aviacheckbusines").prop("checked"))){
	if(searchParams.SELECTED_MODES != "")
		searchParams.SELECTED_MODES = searchParams.SELECTED_MODES + ";" + objs.aviaCheck.val();
	else
		searchParams.SELECTED_MODES = objs.aviaCheck.val();
	}

	if(searchParams.SELECTED_MODES == "")
	searchParams.SELECTED_MODES = "1;3;51";
	
*********/	
	
	
	
	
searchParams.SELECTED_MODES = "4;3;8";
	
//////////////

   


//alert(searchParams.SELECTED_MODES);
            searchParams.START_CITY_ID = objs.firstCity.val();
            searchParams.END_CITY_ID = objs.secondCity.val();
            searchParams.START_CITY_NAME = $('input.from.town').val();
            searchParams.END_CITY_NAME = $('input.to.town').val();


            searchParams.TRIP_DATE = objs.tripDate.val();
            searchParams.BACK_TRIP_DATE = objs.backTripDate.val();
				var my_pattern=/^([0-9]{2})+\.([0-9]{2})+\.([0-9]{4})$/;
				if(my_pattern.test(searchParams.BACK_TRIP_DATE))
					searchParams.ROUND_TRIP = true;
				else
					searchParams.ROUND_TRIP = false;

          //  searchParams.TICKETS = objs.tickets.val();
            searchParams.TICKETS = '1';
          //  searchParams.TRIP_ID = '';
          //  searchParams.discount = objs.disocuntPopup.getData();

            if (objs.searchTripsInterval) {
                clearTimeout(objs.searchTripsInterval);
            }
	
					
            data.searchParams = searchParams;
            searchParams.action = 'searchTrips';
            objs.resultContainer.slideUp(500, function () {
				
                contentLoader(objs.resultContainer, 'ajax-big-loader.gif').slideDown(500, function () {
                    	//objs.searchButton.enable();
					api_post(api_url, searchParams, function (json) {
                        objs.searchButton.enable();

                        objs.resultContainer.slideUp(200, function () {




                            // window.location = '#s_results'
                            var html = json.HTML;
                            for (var el in json.INFO) {
                                data.trips[el] = json.INFO[el];
                            }

                            objs.resultContainer
                                .html(html)
                                .slideDown(200);
                            objs.seatsContainers = objs.resultContainer
                                .find(params.seatsContainerS)
                                .slideUp()
                                .html('');
                            // objs.resultContainer.find(params.showSeatsButtonS).enable();
                            if (json.success) {
							
                                $('html, body').animate({
                                    scrollTop: objs.resultContainer.offset().top
                                }, 500);
                            }
							/*else{
								getTimeTable2(searchParams.START_CITY_ID, searchParams.END_CITY_ID);
							} */

                            var fhtml = objs.resultContainer.find('table.filters').find('td').first().html();//.first().hide();
                            objs.resultContainer.find('table.filters').find('td').first().html('<div>' + fhtml + '</div>').find('div').hide();
                            if (!json.COMPLETED) {
							
                             initFilters()
                                objs.resultContainer
                                    .find('div#loadOtherTrips')
                                    .before('<div class="ajax-loader-line"><img src="/img/ajax-big-loader.gif" /></div>');
                            } else {
                               // initFilters();
                            }
                        });

                        if (!json.COMPLETED) {


                            objs.searchTripsInterval = setTimeout(
                                function () {
                                    var searchIteration = 0;
                                    loadOtherTrips(searchIteration);
                                }, 2000
                            );

                        }
                    }, 'json');
                });
            });
        });

		// поиск рейсов на ближайшую дату
		// direction - направление поиска: forward - вперед, back - назад
		// iteration - количество циклов поиска


        function initSort() {
            var list = objs.resultContainer.find('.srpp');

        }

        function initFilters() {
            var list = objs.resultContainer.find('.srpp');
            var container = objs.resultContainer.find('.rezpoisk2');
            var container_header = objs.resultContainer.find('.rezpoisk2 .shapka');
            var shapka = container_header.find('table.filters');
            var shapka_top = objs.resultContainer.offset().top;
            var shapkaniz_top = shapka_top + objs.resultContainer.height() - 150;
            container_header.find('td').first().find('div').fadeIn(200);

            if (list.size() < 1) return;

            var filters = objs.resultContainer.find('.filter');
            var sorts = objs.resultContainer.find('.sort');
            filters.unbind('change');
            sorts.unbind('click');
            //alert(filters.size());
            filters.change(function () {
                var show_params = {};
                filters.each(function () {
                    var filter_val = $(this).val();
                    if ($(this).hasClass('filter_checkbox') && !$(this).attr('checked')) {
                        filter_val = null;
                    }
                    if (filter_val || $(this).is('[range]')) {

                        if ($(this).is('[range]')) {
                            if (!filter_val) return;
                            if ($(this).attr('range') == 'min') {
                                if (!show_params[$(this).attr('rel')]) {
                                    show_params[$(this).attr('rel')] = {'min': parseFloat(filter_val)};
                                } else {
                                    show_params[$(this).attr('rel')]['min'] = parseFloat(filter_val);
                                }
                            } else if ($(this).attr('range') == 'max') {
                                if (!show_params[$(this).attr('rel')]) {
                                    show_params[$(this).attr('rel')] = {'max': parseFloat(filter_val)};
                                } else {
                                    show_params[$(this).attr('rel')]['max'] = parseFloat(filter_val);
                                }
                            }

                        } else {
                            show_params[$(this).attr('rel')] = filter_val.split(';');
                        }
                    } else {
                        show_params[$(this).attr('rel')] = null;
                    }
                });


                list.show();
                list.each(function () {
                    var no_hide = 0;
                    var filters = 0;
                    for (var f in show_params) {
                        filters++;
                        if (show_params[f] == null) {
                            no_hide++;
                            continue;
                        }

                        if (!$(this).is('[' + f + ']')) {
                            no_hide++;
                            continue;
                        }
                        var val = $(this).attr(f);

                        if (isset(show_params[f]['min']) || isset(show_params[f]['max'])) {
                            if (isset(show_params[f]['min']) && isset(show_params[f]['max'])) {
                                if (parseFloat(val) >= show_params[f]['min'] && parseFloat(val) <= show_params[f]['max']) {
                                    no_hide++;
                                }
                            } else if (isset(show_params[f]['min']) && !isset(show_params[f]['max'])) {
                                if (parseFloat(val) >= show_params[f]['min']) {
                                    no_hide++;
                                }
                            } else if (!isset(show_params[f]['min']) && isset(show_params[f]['max'])) {
                                if (parseFloat(val) <= show_params[f]['max']) {
                                    no_hide++;
                                }
                            }
                        } else {
                            for (var i in show_params[f]) {
                                if ($(this).attr(f) == show_params[f][i]) {
                                    no_hide++;
                                    break;
                                }
                            }
                        }


                    }

                    if (no_hide < filters) {
                        $(this).hide();
                    }
                });
            });
            try {
                sorts.css('cursor', 'pointer');
                sorts.click(function () {
                    var list = objs.resultContainer.find('.srpp');
                    var d = $(this).is('[direction]') ? $(this).attr('direction') : '';
                    sorts.removeAttr('direction').find('img.direction').remove();

                    d = d == 'ASC' ? 'DESC' : 'ASC';
                    $(this).attr('direction', d);
                    if (d == 'ASC') {
                        $(this).append('<img class="direction" src="/images/form/sort_asc.png" />');
                    } else {
                        $(this).append('<img class="direction"  src="/images/form/sort_desc.png" />');
                    }

                    var sfield = $(this).attr('rel');

                    list.sort(
                        function (a, b) {
                            var contentA = parseFloat($(a).attr(sfield));
                            var contentB = parseFloat($(b).attr(sfield));

                            if (d == 'ASC') {
                                return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
                            } else {
                                return (contentA < contentB) ? 1 : (contentA > contentB) ? -1 : 0;
                            }
                        }
                    );
                    container.html('').append(container_header).append(list);
                    initFilters();

                });
            } catch (e) {

            }


        }

        // LOAD OTHER TRIPS
        function loadOtherTrips(searchIteration) {

            searchIteration++;
            var searchParams = {};
            searchParams.action = 'getTrips';
            searchParams.TICKETS = objs.tickets.val();

            if (objs.searchTripsInterval) {
                clearTimeout(objs.searchTripsInterval);
            }

            api_post(api_url, searchParams, function (json) {
                objs.searchButton.enable();

                objs.resultContainer.find('.ajax-loader-line').last().remove();
                // window.location = '#s_results'
                var html = json.HTML;
                for (var el in json.INFO) {
                    data.trips[el] = json.INFO[el];
                }

                objs.resultContainer
                    .find('div#loadOtherTrips')
                    .before(html);
                objs.seatsContainers = objs.resultContainer
                    .find(params.seatsContainerS)

                // objs.resultContainer.find(params.showSeatsButtonS).enable();


                if((!json.COMPLETED)&&(searchIteration<7)) {

                    objs.resultContainer
                        .find('div#loadOtherTrips')
                        .before('<div class="ajax-loader-line"><img src="/img/ajax-big-loader.gif" /></div>');

                    objs.searchTripsInterval = setTimeout(
                        function () {
                            loadOtherTrips(searchIteration)
                        }, 2000
                    );
                } else {
                    objs.resultContainer.find('table.filters').find('td').first().find('.ajax-loader-line').remove();
                    initFilters();
                }
            }, 'json', 1);
        }

        // SHOW SEATS
        objs.resultContainer.on('click', params.showSeatsButtonS, function () {


            var obj = $(this);
            objs.currTripBtn = obj;
            var tripId = obj.attr('rel');

            if (obj.disabled()) return;
            $(params.showSeatsButtonS).disable();

            var seatsContainer = objs.seatsContainers.filter(function () {
                return !!($(this).attr('rel') == tripId);
            });

            if (seatsContainer.html()) {
                seatsContainer.stop(true, true).slideUp(500, function () {
                    $(this).html('');
                });
                data.searchParams.TRIP_ID = '';
                $(params.showSeatsButtonS).enable();
                return;
            }

            data.searchParams.TRIP_ID = tripId;

            objs.seatsContainers.stop(true, true).slideUp(500, function () {
                $(this).html('');
            });

            loadSeats(tripId, obj);
        });

        function loadSeats(tripId, obj, carraige_id, segment) {
            data.tickets_checked = {f: [], b: [], segment0: [], segment1: [], segment2: [], segment3: [], segment4: [], segment5: [], segment6: [], segment7: [], segment8: [], segment9: []};
            var post_params = {ID: tripId};

            if ((carraige_id)&&(!segment)) {
                post_params['CARRIAGE_ID'] = carraige_id;
            }
			else {
                post_params['segment'+segment+'CarriageId'] = carraige_id;
            }

            obj.find('input').each(function () {
                post_params[$(this).attr('name')] = $(this).val();
            });
            var seatsContainer = objs.seatsContainers.filter(function () {
                return !!($(this).attr('rel') == tripId);
            });
            contentLoader(seatsContainer, 'ajax-big-loader.gif').slideDown(200, function () {
                post_params.action = 'getTripSeats';
                api_post(api_url, post_params, function (json) {

                    seatsContainer.slideUp(200, function () {

                        $(this).html('');

                        seatsContainer.html(json.html).slideDown(500);
                        seatsContainer.find('.seats-tabs').tabs(
                            {
                                show: { effect: "fade", duration: 100 },
                                hide: { effect: "fade", duration: 100 }
                            }
                        );
                        objs.lockSeats = seatsContainer.find(params.lockSeatsS);
                        objs.lockSeats.enable();
                        //objs.lockSeats.disable();
                        objs.buyContainer = seatsContainer.find(params.buyContainerS);

                        $('html, body').animate({
                            scrollTop: $("#ch_seats_" + tripId).offset().top
                        }, 500);

                        data.noSelectSeats = false;

                        if (json.trip.NO_SEATS || json.trip.NO_SELECT_SEATS) {
                            data.noSelectSeats = true;
                            lockSeats();
                        }

                    });

                    $(params.showSeatsButtonS).enable();
                }, 'json', 1);
            });
        }


        //CHANGE CARRIAGE
        objs.resultContainer.on('change', '#carriage', function () {
            data.searchParams.CARRIAGE_ID = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val());
        });
        objs.resultContainer.on('change', '#segment0carriage', function () {
            data.searchParams.segment0CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'0');
        });
        objs.resultContainer.on('change', '#segment1carriage', function () {
            data.searchParams.segment1CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'1');
        });
		objs.resultContainer.on('change', '#segment2carriage', function () {
            data.searchParams.segment2CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'2');
        });
		objs.resultContainer.on('change', '#segment3carriage', function () {
            data.searchParams.segment3CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'3');
        });
		objs.resultContainer.on('change', '#segment4carriage', function () {
            data.searchParams.segment4CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'4');
        });
		objs.resultContainer.on('change', '#segment5carriage', function () {
            data.searchParams.segment5CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'5');
        });
		objs.resultContainer.on('change', '#segment6carriage', function () {
            data.searchParams.segment6CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'6');
        });
		objs.resultContainer.on('change', '#segment7carriage', function () {
            data.searchParams.segment7CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'7');
        });
		objs.resultContainer.on('change', '#segment8carriage', function () {
            data.searchParams.segment8CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'8');
        });
		objs.resultContainer.on('change', '#segment9carriage', function () {
            data.searchParams.segment9CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'9');
        });
		objs.resultContainer.on('change', '#segment10carriage', function () {
            data.searchParams.segment10CarriageId = $(this).val();
            loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn, $(this).val(),'10');
        });

        // CHECK SEAT
		var tries = 0;
		var tries2 = 0;
        objs.resultContainer.on('click', '.seat-available', function () {
            /*if (data.noSelectSeats) {
                return false;
            }*/
			var tickets = parseInt(objs.tickets.val());
			tries++;
			
			if((tries>tickets)&&(tries2 == 0)){
			$('div.modelavto').before('<span style="display:block;text-align:center;padding-top: 20px;color: #8c1a11;">Если Вам нужно больше мест - увеличьте количество пассажиров в форме поиска (вверху) и начните поиск рейсов заново.</span>').slideDown(100);
			tries2 = 1;
			}
			
			//alert(test3);
            var obj = $(this);
            var seatId = obj.attr('rel');
            var seatNum = obj.html();
            if (seatNum == '<span>СВ</span>') {
                lockSeats();
                return false;
            }
            var direction = $(this).is('[back]') ? 'b' : 'f';
			direction = $(this).is('[segment]') ?  $(this).attr('segment') : direction;
            // objs.lockSeats.disable();
            data.searchParams.CARRIAGE_ID = $(this).val();  //""
            data.searchParams.segment0CarriageId = $(this).val();
            data.searchParams.segment1CarriageId = $(this).val();

            for (var i in data.tickets_checked[direction]) {
                if (data.tickets_checked[direction][i] && data.tickets_checked[direction][i].sid == seatId) {
                    data.tickets_checked[direction].splice(i, 1);
                    obj.removeClass('seat-reserved');
                    return;
                }
            }

            if (data.tickets_checked[direction].length === parseInt(data.searchParams.TICKETS)) {
                var r = data.tickets_checked[direction].shift();
                obj.closest(params.seatsContainerS).find('.seat-reserved[rel="' + r.sid + '"]').removeClass('seat-reserved');
            }

            var s = {sid: seatId, snum: seatNum}
            data.tickets_checked[direction].push(s);
            obj.addClass('seat-reserved');

            /*  if (data.tickets_checked.length == parseInt(data.searchParams.TICKETS)) {
             objs.lockSeats.enable();
             }*/
        });

        objs.resultContainer.on('click', '.unlock-seats', function () {
            api_post(api_url + 'api/unlockSeats.php', {}, function (json) {

            });

        });


        //LOCK SEATS
        objs.resultContainer.on('click', params.lockSeatsS, function () {
            if ($(this).disabled()) {
                return false;
            }

            lockSeats();

        });

        function lockSeats() {
            var post_params = {};
            post_params.CARRIAGE_ID = $('#carriage').val();
            post_params.segment0CarriageId = $('#segment0carriage').val();
            post_params.segment1CarriageId = $('#segment1carriage').val();
            post_params.TICKETS_CHECKED = data.tickets_checked;
            post_params.TRIP = data.trips[data.searchParams.TRIP_ID];
            post_params = $.extend(data.searchParams, post_params);
            post_params.action = 'lockSeats';
            data.searchParams.decline = '';
            contentLoader(objs.buyContainer, 'ajax-big-loader.gif');
            api_post(api_url, post_params, function (json) {

                if (!json.success) {
                    alert('Ошибка при выборе мест. Повторите попытку');
                    // loadSeats(data.searchParams.TRIP_ID, objs.currTripBtn);
                    //objs.currTripBtn.click().delay(500).click();
                    return false;
                }
                var html = json.html;
                var time = json.time_limit;

                objs.buyContainer.html(html);
                var tooltip = objs.buyContainer.find('.show_tooltip');

                //tooltip.m_tooltip();
                $('html, body').animate({
                    scrollTop: objs.buyContainer.offset().top - 100
                }, 500);

            }, 'json');

            return true;
        }

        // BUY FORM
        objs.resultContainer.on('click', '.buy_order', function () {
		
		if($("input.international").length) { //если присутствует авиа рейс
			var correct = true;
			$("input.international").each(function(){
				$(this).css({'border':'1px solid'});
				var pattern = /^[a-zA-Z\s]+$/;
				var str = $(this).val();
				console.log(pattern.test(str));
				if(!pattern.test(str)){
					$(this).css({'border':'1px solid red'});
					$('div.intAviaMess').show();
					correct = false;
					//return false;
				}
			});
			if(!correct) return false;
		}
		
            if ($(this).disabled()) {
                return false;
            }
            var obj = $(this);
            var p = obj.parent();
            contentLoader(p);

            var form = $('form[name=order_data]');

            var post = $.extend(data.searchParams, {'order_data': form.serialize()});
			post.TRIP = null;
            post.action = 'ticketsBooking';
            post.url1 = 'http://vega-reisen.com.ua/orderSuccess.php';
/*
			var str = $("form[name=order_data]").serialize();
			var tickets = objs.tickets.val();
            var post = {
                        'order_data': str,
                        'url1': 'http://e-travels.com.ua/orderSuccess.php',
						'TICKETS': tickets
                        'action': 'ticketsBooking'
                    };
		*/
            api_post(api_url, post, function (json) {
                objs.buyContainer.find('.field_error').removeClass('field_error');$("span.alertCheckMessage").hide();
                p.html(obj);
                if (!json.success) {

                    var ferrors = json.errors.fields;
                    for (var el in ferrors) {
                        objs.buyContainer.find('[name="' + ferrors[el] + '"]').parent().addClass('field_error');
						if((!$('input#check_personal_data').prop('checked'))||(!$('input#check_terms').prop('checked'))) $("span.alertCheckMessage").show();
                    }
                    return;
                }
                var form = $('<form action="https://ecommerce.liqpay.com/ecommerce/CheckOutPagen" method="post" /></form>');
                obj.disabled();
                for (var el in json.params) {
                    var v = json.params[el];

                    var input = $('<input />')
                        .attr('type', 'hidden')
                        .attr('name', el)
                        .val(v)
                        .appendTo(form);


                }
                form.appendTo(objs.buyContainer);
                //p.html(obj);
                form.submit();

            }, 'json');
            //objs.buyContainer.
        });
	     // BUY FORM ALFABANK

        objs.resultContainer.on('click', '.buy_order_alfa', function () {
		if($("input.international").length) { //если присутствует авиа рейс
			var correct = true;
			$("input.international").each(function(){
				$(this).css({'border':'1px solid'});
				var pattern = /^[a-zA-Z\s]+$/;
				var str = $(this).val();
				console.log(pattern.test(str));
				if(!pattern.test(str)){
					$(this).css({'border':'1px solid red'});
					$('div.intAviaMess').show();
					correct = false;
					//return false;
				}
			});
			if(!correct) return false;
		}		
            if ($(this).disabled()) {
                return false;
            }
            var obj = $(this);
            var p = obj.parent();
            contentLoader(p);

            var form = $('form[name=order_data]');

            var post = $.extend(data.searchParams, {'order_data': form.serialize()});
			post.TRIP = null;
            post.action = 'abankCheckout';
            post.url1 = 'http://vega-reisen.com.ua/orderSuccess.php';

/*
			var str = $("form[name=order_data]").serialize();
            var post = {
                        'order_data': str,
                        'url1': 'http://e-travels.com.ua/orderSuccess.php',
                        'action': 'abankCheckout'
                    };
*/
            api_post(api_url, post, function (json) {
                objs.buyContainer.find('.field_error').removeClass('field_error');$("span.alertCheckMessage").hide();
                p.html(obj);
                if (!json.success) {

                    var ferrors = json.errors.fields;
                    for (var el in ferrors) {
                        objs.buyContainer.find('[name="' + ferrors[el] + '"]').parent().addClass('field_error');
						if((!$('input#check_personal_data').prop('checked'))||(!$('input#check_terms').prop('checked'))) $("span.alertCheckMessage").show();
                    }
                    return;
                }
				 obj.disabled();
                window.location = json.furl;
				
            }, 'json');
            //objs.buyContainer.
        });
	
        // BUY_DISCOUNT FORM
        objs.resultContainer.on('click', '.order_discount', function () {

            if ($(this).disabled()) {
                return false;
            }

            var obj = $(this);
            var discount_data = objs.resultContainer.find('div.buy_discount');
            var p = obj.parent();
            contentLoader(p);
           // post.TRIP = null;
/*
            var form = $('form[name=order_data]');

            var post = $.extend(data.searchParams, {"order_data": form.serialize()});
            post.check_discount = 1;
            post.action = 'ticketsBooking';
            post.url1 = 'http://e-travels.com.ua/orderSuccess.php';

			*/
		 var str = $("form[name=order_data]").serialize();
            var post = {
                        'order_data': str,
                        'url1': 'http://vega-reisen.com.ua/orderSuccess.php',
                        'check_discount': 1,
                    //    'discount_data': discount_data,
                        'TRIP': null,
                        'action': 'ticketsBooking'
                    };

            api_post(api_url, post, function (json) {
                objs.buyContainer.find('.field_error').removeClass('field_error');$("span.alertCheckMessage").hide();
                p.html(obj);
                if (!json.success) {

                    var ferrors = json.errors.fields;
                    for (var el in ferrors) {
                        objs.buyContainer.find('[name="' + ferrors[el] + '"]').parent().addClass('field_error');
						if((!$('input#check_personal_data').prop('checked'))||(!$('input#check_terms').prop('checked'))) $("span.alertCheckMessage").show();
                    }
                    return;
                }


                var form = $('<form action="https://ecommerce.liqpay.com/ecommerce/CheckOutPagen" method="post" /></form>');

                obj.disabled();
                for (var el in json.params) {
                    var v = json.params[el];

                    var input = $('<input />')
                        .attr('type', 'hidden')
                        .attr('name', el)
                        .val(v)
                        .appendTo(form);


                }

                data.searchParams.decline = json.order_id;


                discount_data.find('.ecquiring_fields').html(form);
                //form.appendTo(objs.buyContainer);
                //p.html(obj);

                discount_data.find('.discount_cost').html(json.amount);
                discount_data.find('.buy_order_discount').click(function () {
                    form.submit();
                });

                obj.closest('.buy_buttons').fadeOut(200).html('');
                discount_data.fadeIn(200);
                objs.resultContainer.find('.buy_order').unbind('click').click(function () {
                    var errors = 0;
                    if (!$('#check_personal_data').attr('checked')) {
                        $('#check_personal_data').parent().addClass('field_error');
                        errors++;
                    }

                    if (!$('#check_terms').attr('checked')) {
                        $('#check_terms').parent().addClass('field_error');
                        errors++;
                    }

                    if (!errors) {
                        form.submit();
                    }
                });
//
            }, 'json');
            //objs.buyContainer.
        });
        // BOOKING FORM
        objs.resultContainer.on('click', '.booking_order', function () {
		
		if($("input.international").length) { //если присутствует авиа рейс
			var correct = true;
			$("input.international").each(function(){
				$(this).css({'border':'1px solid'});
				var pattern = /^[a-zA-Z\s]+$/;
				var str = $(this).val();
				console.log(pattern.test(str));
				if(!pattern.test(str)){
					$(this).css({'border':'1px solid red'});
					$('div.intAviaMess').show();
					correct = false;
					//return false;
				}
			});
			if(!correct) return false;
		}
		
            if ($(this).disabled()) {
                return false;
            }
            var obj = $(this);
            var p = obj.parent();
            contentLoader(p);
         //   var form = $('form[name=order_data]');
          //  post.TRIP = null;
		 var str = $("form[name=order_data]").serialize();
            var post = {
                        'order_data': str,
                        'url1': 'http://vega-reisen.com.ua/orderSuccess.php?r=1',
                        'TRIP': null,
                        'action': 'reserveTickets'
                    };


        //    post = $.extend(data.searchParams, {"order_data": form.serialize()});
     //       post.action = 'reserveTickets';
     //       post.url1 = 'http://e-travels.com.ua/orderSuccess.php?r=1';
            api_post(api_url, post, function (json) {
                objs.buyContainer.find('.field_error').removeClass('field_error');$("span.alertCheckMessage").hide();
                if (!json.success) {
                    p.html(obj);
                    var ferrors = json.errors.fields;
                    for (var el in ferrors) {
                        objs.buyContainer.find('[name="' + ferrors[el] + '"]').parent().addClass('field_error');
						if((!$('input#check_personal_data').prop('checked'))||(!$('input#check_terms').prop('checked'))) $("span.alertCheckMessage").show();
                    }
                    return;
                }
                window.location = json.url;

            }, 'json');
            //objs.buyContainer.
        });

        objs.resultContainer.on('click', '.booking_order', function () {
            //alert('Booking');
        });


        $(".showmap").unbind('click').live('click', function () {

            $('.popup-map').fadeOut();
            var popup = $(this).closest('td').find('.popup-map');
            var map_line = popup.find('.popup-map-line');
            var map_width = 0;
            var mask_width = 0;

            if (!popup.size) return false;
            popup.fadeIn(200, function () {
                map_line.css('left', 0);
                mask_width = $(this).find('.popup-map-mask').outerWidth();
                map_line.find('.map-point').each(function () {
                    map_width += $(this).outerWidth();
                });


            });

            if (!popup.find('.popup-map-prev').hasClass('popup-btn-disable')) {
                popup.find('.popup-map-prev').addClass('popup-btn-disable');
            }

            if ($(this).hasClass('.scrollAdded')) return false;

            $(this).addClass('.scrollAdded');


            function move(points, speed) {

                speed = speed ? speed : 0;

                var left = map_line.position().left + (points);
                popup.find('.popup-map-prev').removeClass('popup-btn-disable');
                popup.find('.popup-map-next').removeClass('popup-btn-disable');
                if (left >= 0) {
                    map_line.animate({left: 0}, speed);
                    popup.find('.popup-map-prev').addClass('popup-btn-disable');
                    return false;
                }

                if (left <= -1 * (map_width - mask_width)) {
                    map_line.animate({left: -1 * (map_width - mask_width)}, speed);
                    popup.find('.popup-map-next').addClass('popup-btn-disable');
                    return false;
                }
                map_line.animate({left: left}, speed);

            }

            popup.find('.popup-map-prev').click(function () {
                move(mask_width / 2, 200);
                return false;
            });

            popup.find('.popup-map-next').click(function () {

                move(-1 * mask_width / 2, 200);
                return false;
            });


            popup.bind('mousewheel DOMMouseScroll', function (e) {
                var scrollTo = null;

                if (e.type == 'mousewheel') {
                    scrollTo = (e.originalEvent.wheelDelta * -1);
                }
                else if (e.type == 'DOMMouseScroll') {
                    scrollTo = 40 * e.originalEvent.detail;
                }
                //alert(scrollTo);
                //popup.find('.popup-map-next').next().html(scrollTo * -2);
                if (scrollTo) {
                    /* e.preventDefault();
                     map_line.scrollTop(scrollTo + map_line.scrollTop());*/
                    move(scrollTo * -2);
                }
                return false;
            });

            return false;

        });


        //objs.firstCountry.change();
        //objs.secondCountry.change();
        objs.tickets.change();
        // objs.roundTrip.change();
    }
})(jQuery);