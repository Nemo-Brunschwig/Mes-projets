/// @description reshoot

if (chargeR < 100){
	chargeR += 100/(room_speed * wait);
	alarm[0] = 1;
} else {
	checkR = true;
}

if (chargeL < 100){
	chargeL += 100/(room_speed * wait);
	alarm[0] = 1;
} else {
	checkL = true;
}
