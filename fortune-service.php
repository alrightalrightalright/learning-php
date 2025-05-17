<?php
$relationships_array[] = "You will have a large family";
$relationships_array[] = "You will have a few close friends";
$relationships_array[] = "You will have a smaller family, but many close friends";

$money_array[] = "You will have have a large salary";
$money_array[] = "You will suddenly gain a large sum of money";
$money_array[] = "You will lose money but gain other valuable things";

$fame_array[] = "You will suddenly become very famous";
$fame_array[] = "You will become a niche celebrity";
$fame_array[] = "You will become popular within your city";

$relationships_random = random_int(0,count($relationships_array)-1);
$money_random = random_int(0,count($money_array)-1);
$fame_random = random_int(0,count($fame_array)-1);

$lucky_number = random_int(0,1000);

$relationships_fortune = $relationships_array[$relationships_random];
$money_fortune = $money_array[$money_random];
$fame_fortune = $fame_array[$fame_random];

$fortune_json = "{
created_by:'Bryan Gurr',
relationships_fortune:'$relationships_fortune', 
money_fortune:'$money_fortune', 
fame_fortune:'$fame_fortune',
lucky_number:
}";

echo $fortune_json;

?>