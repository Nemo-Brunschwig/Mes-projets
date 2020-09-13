/// clavier

gauche = keyboard_check(ord("Q"));
droite = keyboard_check(ord("D"));
haut = keyboard_check(ord("Z"));
bas = keyboard_check(ord("S"));

/// mvmt

hsp = (droite - gauche) * movesp;

vsp = (bas - haut) * movesp;

if (gauche and !place_meeting(x - 2, y, oColli)) or (droite and !place_meeting(x + 2, y, oColli)){
	x += hsp;
}else if (bas and !place_meeting(x , y + 2, oColli)) or (haut and !place_meeting(x, y - 2, oColli)){
	y += vsp;
}

/// anime

if (hsp == 0 and vsp == 0){
	image_index = 0;
	image_speed = 0;
}else{
	image_speed = 1;
}

if (gauche){
	Ts = false;
	Tz = false;
	Tq = true;
	Td = false;
	sprite_index = sPlayerLeft;
}else if (droite){
	Ts = false;
	Tz = false;
	Tq = false;
	Td = true;
	sprite_index = sPlayerRight;
}else if (haut){
	Ts = false;
	Tz = true;
	Tq = false;
	Td = false;
	sprite_index = sPlayerUp;
}else if (bas){
	Ts = true;
	Tz = false;
	Tq = false;
	Td = false;
	sprite_index = sPlayerDown;
}