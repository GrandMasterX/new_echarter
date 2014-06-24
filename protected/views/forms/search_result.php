<? if(!empty($data)) {?>
<div style="text-align: center">
    {__('static_trip_no_seats_message')}
</div>
<? } else {?>
<div class="rezpoisk2">
    <div class="block clearfix">
        <div class="row_block left">
            <?
                foreach($data as $trips) {
                    //$this->renderPartial('/forms/trip_info',array('trip'=>$trips),true);
                }
            ?>
            <div id="loadOtherTrips"></div>
        </div>
    </div>

<?}?>