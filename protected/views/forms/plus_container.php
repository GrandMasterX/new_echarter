<? if(!empty($model)) {?>
<div class="route clearfix">
    <ul class="ul_block clearfix tiered_menu" data-lvl="0">
        <li class="li_block no_hover">
            <a class="in_town" href="#"></a>
            <ul class="clearfix tiered_menu main_ul_dropdown" style="display: none;" data-lvl="1">
                <? foreach($model as $group) {?>
                <li>
                    <a class="bus_town" href="#" style="background-color: white;"><? echo $group['title']?></a>
                    <ul class="clearfix tiered_menu" style="display: none;" data-lvl="2">
                        <? foreach($group['templates'] as $template) {?>
                            <li>
                                <a class="bus_town fill-in" style="background-color: white;" href="#"><? echo (!empty($template['title'])) ? $template['title'] :$template['firstName'].' '.$template['middleName'];?></a>
                                <input style="display: none;" value="<? echo $template['firstName'];?>" class="firstName"/>
                                <input style="display: none;" value="<? echo $template['middleName'];?>" class="middleName"/>
                                <input style="display: none;" value="<? echo $template['birthdate'];?>" class="birthdateFiller"/>
                                <input style="display: none;" value="<? echo $template['passport'];?>" class="passport"/>
                                <input style="display: none;" value="<? echo $template['psprt_date'];?>" class="psprt_date"/>
                                <input style="display: none;" value="<? echo $template['psprt_date'];?>" class="psprt_date"/>
                                <input style="display: none;" value="<? echo $template['citizenship'];?>" class="citizenship"/>
                                <input style="display: none;" value="<? echo $template['gender'];?>" class="gender"/>
                                <input style="display: none;" value="<? echo $template['phone'];?>" class="phone"/>
                                <input style="display: none;" value="<? echo $user->email;?>" class="email"/>
                            </li>
                        <? }?>
                    </ul>
                </li>
                <?}?>
                <? if(!empty($empty)) {?>
                    <li>
                        <a class="bus_town" href="#" style="background-color: white;">Без группы</a>
                        <ul class="clearfix tiered_menu" style="display: none;" data-lvl="2">
                            <? foreach($empty as $template) {?>
                                <li>
                                    <a class="bus_town fill-in" style="background-color: white;" href="#"><? echo (!empty($template['title'])) ? $template['title'] :$template['firstName'].' '.$template['middleName'];?></a>
                                    <input style="display: none;" value="<? echo $template['firstName'];?>" class="firstName"/>
                                    <input style="display: none;" value="<? echo $template['middleName'];?>" class="middleName"/>
                                    <input style="display: none;" value="<? echo $template['birthdate'];?>" class="birthdateFiller"/>
                                    <input style="display: none;" value="<? echo $template['passport'];?>" class="passport"/>
                                    <input style="display: none;" value="<? echo $template['psprt_date'];?>" class="psprt_date"/>
                                    <input style="display: none;" value="<? echo $template['psprt_date'];?>" class="psprt_date"/>
                                    <input style="display: none;" value="<? echo $template['citizenship'];?>" class="citizenship"/>
                                    <input style="display: none;" value="<? echo $template['gender'];?>" class="gender"/>
                                    <input style="display: none;" value="<? echo $template['phone'];?>" class="phone"/>
                                    <input style="display: none;" value="<? echo $user->email;?>" class="email"/>
                                </li>
                            <? }?>
                        </ul>
                    </li>
                <?}?>
            </ul>
        </li>
    </ul>
</div>
<?}?>