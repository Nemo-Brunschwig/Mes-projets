/// @description vie du perso
//check si il est en local
if (!is_local) exit;

// déplacements
h = (mouse_x - x);
v = (mouse_y - y);

axe = sqrt((h*h) + (v*v));

dist = sp/axe;

if (keyboard_check(vk_space)){
	x += dist*h;
	y += dist*v;
}

// direction du bateau
image_angle = point_direction(x, y, mouse_x, mouse_y);

// tires
// gauche
spawn = 10/axe;
spawnx = spawn * h;
spawny = spawn * v;
if (mouse_check_button(mb_left) and !keyboard_check(vk_space) and checkL){
	bID++;
	checkL = false;
	chargeL = 0;
	angl = 45;
	bullet = instance_create_layer(x - spawnx, y - spawny, "Instances", oBullet);
	bullet.bulletID = bID;
	alarm[0] = 1;
}

if (mouse_check_button(mb_right) and !keyboard_check(vk_space) and checkR){
	bID++;
	checkR = false;
	chargeR = 0;
	angl = -45;
	bullet = instance_create_layer(x - spawnx, y - spawny, "Instances", oBullet);
	bullet.bulletID = bID;
	alarm[0] = 1;
}

//buffer
var buffer = buffer_create(8, buffer_fixed, 1);

buffer_write(buffer, buffer_u8, DATA.PLAYER_UPDATE);
buffer_write(buffer, buffer_u8, playerID);
buffer_write(buffer, buffer_s16, x);
buffer_write(buffer, buffer_s16, y);
buffer_write(buffer, buffer_s16, image_angle);

//envoi au serv
if (!oController.is_serv){
	network_send_packet(oController.server, buffer, buffer_get_size(buffer));
}
//envoi au client
else{
	//parcourir les clients
	for (var i = 0; i <ds_list_size(oController.client); i++){
		//récupérer le socket
		var soc = oController.client[| i];
		
		//ignorer si on tombe sur le serv
		if (soc < 0) continue;
		
		//on envoi
		network_send_packet(soc, buffer, buffer_get_size(buffer));
	}
}

buffer_delete(buffer);