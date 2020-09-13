/// @description start room
if (room == rGame){
	//create player
	var plr = instance_create_layer(random(room_width), random(room_height), "Instances", oPlayer);
	plr.playerID = 0;
	
	//ajouter le serveur a la liste des clients
	if (is_serv){
		ds_list_add(client, -1);
	}
}