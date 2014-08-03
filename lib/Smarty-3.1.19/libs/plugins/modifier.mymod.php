<?php

function smarty_modifier_mymod($str)
{
	$mounth = array('','дек','янв','фев','мар','апр','мая','июнь','июль','авг','с','о','n');

	return $mounth[(int)(date("m",strtotime($str)))];
}