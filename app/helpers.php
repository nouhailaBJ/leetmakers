<?php

function getSetting ($namesetting = 'namesite'){
    return \App\Setting::where('namesetting' , $namesetting)->get()[0]->value;
}
