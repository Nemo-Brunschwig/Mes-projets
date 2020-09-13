/// @description Insérez la description ici
// Vous pouvez écrire votre code dans cet éditeur
direction = point_direction(x, y, mouse_x, mouse_y) + oPlayer.angl;

speed = 10;

alarm[0] = room_speed/2;

//online
is_local = true;
bulletID = 0;

//buffer de création

var buffer = buffer_create(7, buffer_fixed, 1);

buffer_write(buffer, buffer_u8, DATA.INIT_BULLET);
buffer_write(buffer, buffer_u16, bulletID);
buffer_write(buffer, buffer_s16, x);
buffer_write(buffer, buffer_s16, y);

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