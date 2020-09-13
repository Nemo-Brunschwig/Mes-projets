/// @description buffer

//buffer
var buffer = buffer_create(6, buffer_fixed, 1);

buffer_write(buffer, buffer_u8, DATA.BULLET_UPDATE);
buffer_write(buffer, buffer_u8, bulletID);
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