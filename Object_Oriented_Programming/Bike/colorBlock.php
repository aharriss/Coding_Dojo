<?php

function start.fill(x,y)

var block = [
0,0,0,0,0,2,0,0,2,0,0,0,
0,1,0,0,0,3,0,1,2,0,0,0,
0,2,0,1,1,1,0,2,2,0,0,0,
0,0,3,0,3,1,3,0,0,0,0,0,
]

var mapping = {
	0: 'yellow',
	1: 'red',
	2: 'blue',
	3: 'white',
	4: 'black',
}

//determines if the adjacent color is black & recolors it black within certain boundaries.
function color_block ($block){
	$color = $blocks(x);
	if($blocks(x+12) && (x+12)<48) == $color){
		$blocks(x+12) = 4}
	if($blocks(x-12) && (x-12)>0) ==$color){
		$blocks(x-12)=4}
	if($block(x-1) && (x-1)>0) ==$color){
		$blocks(x-1) = 4}
	if($blocks(x+1) && (x+1)<48) ==$color){
		$blocks(x+1) = 4}
		$block(x) = 4
				}	
			}
		}
	}
}

class New
{
	public $New1 = x+12;
	public $New2 = x-12;
	public $New3 = x+1;
	public $New4 = x-1;

	public function __construct($New1_p, $New2_p, $New3_p, $New3_p, $New4_p)
	{
			$this->New1 = $New1_p;
			$this->New2 = $New2_p;
			$this->New3 = $New3_p;
			$this->New4 = $New4_p;
	}
?>