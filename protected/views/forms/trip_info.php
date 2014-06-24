{assign var="backSegmentCount" value=0}
{assign var="totalSegmentCount" value=0}
{if !empty($trip.BACK_TRIP)}
{assign var="btrip" value=$trip.BACK_TRIP}
{$backSegmentCount = $trip.BACK_TRIP.SEGMENTS_COUNT}
{else}
{assign var="btrip" value=""}
{/if}
{*подсчет количества сегментов*}
{assign var="segmentCount" value=0}
{if !empty($trip.SEGMENT)}
{assign var="segment" value=$trip.SEGMENT}
{assign var="times" value=array('1','2')}
{assign var="zeroFlag" value=false}
{assign var="segmentcost" value=0}
{foreach from=$trip.SEGMENT item=segment name=segments}
{if $segment.TOTAL_COST == 0}
{$zeroFlag = true}
{/if}
{$segmentcost=$segmentcost+$segment.TOTAL_COST}

{$segmentCount=$segmentCount+1}
{/foreach}
{if $zeroFlag}
{$segmentcost=$trip.TOTAL_COST}
{/if}
{else}
{assign var="segment" value=""}
{/if}
{$totalSegmentCount = $backSegmentCount+$segmentCount}
{assign var="extimelenght" value=$trip.EXCHANGE_TIME_LENGTH.h|cat:$trip.EXCHANGE_TIME_LENGTH.m}





<div class="cell_block clearfix" id="ch_seats_{$trip.ID}">
    <div class="clearfix">
        <div class="foto_block left">
            <div class="images">
                <img alt="" src="images/foto_popul.png" />
                <div class="price_">
                    <span><span style="font-size: 14px;">общая стоимость:</span><br>{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if} грн</span>
                </div>
            </div>
        </div>
        <div class="text_block left">
            <div class="text">
                {if $btrip}
                {* рейс туда и обратно - начало*}
                <div>
                    <p>{$trip.START_DATE} <b>{$trip.START_TIME}</b></p>
                    <p><b>{$trip.START_CITY_NAME}</b></p>
                    <p><b>{$trip.END_CITY_NAME}</b></p>
                    <p>{$trip.END_DATE} <b>{$trip.END_TIME}</b></p>
                </div>
                <div>
                    <p style="text-align: center; padding: 6px 0px;">-</p>
                </div>
                <div>
                    <p>{$btrip.START_DATE} <b>{$btrip.START_TIME}</b></p>
                    <p><b>{$btrip.START_CITY_NAME}</b></p>
                    <p><b>{$btrip.END_CITY_NAME}</b></p>
                    <p>{$btrip.END_DATE} <b>{$btrip.END_TIME}</b></p>
                </div>
                {* рейс туда и обратно - конец*}
                {else}
                {if !in_array($trip.TRIP_MODE, [8])}
                {* прямой рейс - начало*}
                <div>
                    <p>{$trip.START_DATE} <b>{$trip.START_TIME}</b></p>
                    <p><b>{$trip.START_CITY_NAME}</b></p>
                    <p><b>{$trip.END_CITY_NAME}</b></p>
                    <p>{$trip.END_DATE} <b>{$trip.END_TIME}</b></p>
                </div>
                {* прямой рейс - конец*}
                {else}
                {* сегментный рейс - начало*}
                {if !empty($trip.SEGMENT)}
                {assign var="backSegmentFlag" value=0}
                <div>
                    {foreach from=$trip.SEGMENT item=segment name=segments}
                    {if $backSegmentFlag == 1}
                </div>
                <div>
                    <p style="text-align: center; padding: 6px 0px;">-</p>
                </div>
                <div>
                    <p>{$segment.START_DATE} <b>{$segment.START_TIME}</b></p>
                    <p><b>{$segment.START_CITY_NAME}</b></p>
                    {$backSegmentFlag = 0}
                    {/if}
                    {if $smarty.foreach.segments.first}
                    <p>{$segment.START_DATE} <b>{$segment.START_TIME}</b></p>
                    <p><b>{$segment.START_CITY_NAME}</b></p>
                    {/if}
                    {if $segment.LAST_DIRECT_SEGMENT =='1'}
                    <p><b>{$segment.END_CITY_NAME}</b></p>
                    <p>{$segment.END_DATE} <b>{$segment.END_TIME}</b></p>
                    {$backSegmentFlag = 1}
                    {/if}
                    {if $smarty.foreach.segments.last && $backSegmentFlag != 1}
                    <p><b>{$segment.END_CITY_NAME}</b></p>
                    <p>{$segment.END_DATE} <b>{$segment.END_TIME}</b></p>
                    {/if}
                    {/foreach}

                </div>
                {/if}
                {* сегментный рейс - конец*}
                {/if}
                {/if}
            </div>
        </div>
    </div>
    <div class="bottom_btn clearfix">
        <div class="more item left">
            <a name="more" class="moreTripInfo">Подробнее</a>
            <div class="popup order" style="display: none;">
                <div class="popup_wrap">
                    <div class="top clearfix">
                        <div class="close_popup right">x</div>
                    </div>
                    <div class="center clearfix">
                        <div class="block_foto left">
                            <div class="img">
                                <img alt="" src="images/popup_more.png" />
                            </div>
                            {*<div class="text1 clearfix">
                                <div class="left">
                                    <p><b>Киев</b></p>
                                    <p>Борисполь</p>
                                    <p>12 июн. <b>18:45</b></p>
                                </div>
                                <div class="left" style="text-align: center; padding-left: 30px; padding-top: 19px;">
                                    <p><b>-</b></p>
                                </div>
                                <div class="right">
                                    <p><b>Алматы</b></p>
                                    <p>Алматы</p>
                                    <p>13 июн. <b>05:45</b></p>
                                </div>
                            </div>*}

                            <div class="btn_popup">
                                <div style="margin-top: 25px;" class="check_seats" rel="{$trip.ID}" cost="{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if}">
                                    <a href="#" class="reserve" style="display: inline-block;">Зарезервировать</a>
                                    <input type="hidden" value="{$trip.BUS_MODEL}" name="BUS_MODEL"/>
                                    <input type="hidden" value="{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if}" name="TRIP_COST"/>
                                    <input type="hidden" value="{$trip.RESERVATION_ENABLED}" name="TRIP_RESERVATION"/>
                                </div>
                            </div>
                        </div>
                        <div class="block_info right">

                            {if $btrip}
                            {* рейс туда и обратно - начало*}

                            <p>Рейс <b>№{$trip.NUMBER}</b></p>
                            <p><b>{$trip.START_CITY_NAME}</b> ({$trip.STATION_BEGIN_NAME}) - <b>{$trip.END_CITY_NAME}</b> ({$trip.STATION_END_NAME})</p>
                            <p>Отправление: {$trip.START_DATE} <b>{$trip.START_TIME}</b></p>
                            <p>Прибытие: {$trip.END_DATE} <b>{$trip.END_TIME}</b></p>
                            <hr />
                            <p>Рейс <b>№{$btrip.NUMBER}</b></p>
                            <p><b>{$btrip.START_CITY_NAME}</b> ({$btrip.STATION_BEGIN_NAME}) - <b>{$btrip.END_CITY_NAME}</b> ({$btrip.STATION_END_NAME})</p>
                            <p>Отправление: {$btrip.START_DATE} <b>{$btrip.START_TIME}</b></p>
                            <p>Прибытие: {$btrip.END_DATE} <b>{$btrip.END_TIME}</b></p>
                            {* рейс туда и обратно - конец*}
                            {else}
                            {if !in_array($trip.TRIP_MODE, [8])}
                            {* прямой рейс - начало*}
                            <p>Рейс <b>№{$trip.NUMBER}</b></p>
                            <p><b>{$trip.START_CITY_NAME}</b> ({$trip.STATION_BEGIN_NAME}) - <b>{$trip.END_CITY_NAME}</b> ({$trip.STATION_END_NAME})</p>
                            <p>Отправление: {$trip.START_DATE} <b>{$trip.START_TIME}</b></p>
                            <p>Прибытие: {$trip.END_DATE} <b>{$trip.END_TIME}</b></p>
                            {* прямой рейс - конец*}
                            {else}
                            {* сегментный рейс - начало*}
                            {if !empty($trip.SEGMENT)}
                            {foreach from=$trip.SEGMENT item=segment name=segments}
                            <p>Рейс <b>№{$segment.NUMBER}</b></p>
                            <p><b>{$segment.START_CITY_NAME}</b> ({$segment.STATION_BEGIN_NAME}) - <b>{$segment.END_CITY_NAME}</b> ({$segment.STATION_END_NAME})</p>
                            <p>Отправление: {$segment.START_DATE} <b>{$segment.START_TIME}</b></p>
                            <p>Прибытие: {$segment.END_DATE} <b>{$segment.END_TIME}</b></p>
                            {if $segment.LAST_DIRECT_SEGMENT =='1'}
                            <hr />
                            {/if}
                            {/foreach}
                            {/if}
                            {* сегментный рейс - конец*}
                            {/if}
                            {/if}
                            <br /><br/><hr /><p>Общая стоимость: {if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if} грн</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rezer item right check_seats" rel="{$trip.ID}" cost="{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if}">
            <a href="javascript:;">Зарезервировать</a>
            <input type="hidden" value="{$trip.BUS_MODEL}" name="BUS_MODEL"/>
            <input type="hidden" value="{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if}" name="TRIP_COST"/>
            <input type="hidden" value="{$trip.RESERVATION_ENABLED}" name="TRIP_RESERVATION"/>
        </div>
    </div>
    <div style="display: none; width: 960px; position: absolute;z-index: 2000;margin-top: -289px;left: 50%;margin-left: -498px;padding: 10px;background-color: white;" class="check_seats_container" rel="{$trip.ID}" cost="{if in_array($trip.TRIP_MODE, [8])}{$segmentcost}{else}{$trip.TOTAL_COST}{/if}"></div>
</div>