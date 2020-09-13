if (keyboard_check(ord("Z"))){
	x = oPlayer.x + 6;
	y = oPlayer.y + 2;
	depth = 1;
}else if (keyboard_check(ord("S"))){
	x = oPlayer.x - 6;
	y = oPlayer.y + 2;
	depth = -1;
}else if (keyboard_check(ord("Q"))){
	x = oPlayer.x;
	y = oPlayer.y + 2;
	depth = 1;
}else if (keyboard_check(ord("D"))){
	x = oPlayer.x;
	y = oPlayer.y + 2;
	depth = -1;
}