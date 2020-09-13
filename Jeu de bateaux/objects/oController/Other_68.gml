/// @description communication

var type = async_load[? "type"];

//co
if (type == network_type_connect){
	var socket = async_load[? "socket"];
	
	//send player info
	var buffer = buffer_create(2, buffer_fixed, 1);
	
	buffer_write(buffer, buffer_u8, DATA.INIT_DATA);
	buffer_write(buffer, buffer_u8, ds_list_size(client));
	
	network_send_packet(socket, buffer, buffer_get_size(buffer));
	buffer_delete(buffer);
	
	//create player
	var plr = instance_create_layer(random(room_width), random(room_height), "Instances", oPlayer);
	plr.playerID = ds_list_size(client);
	plr.is_local = false;
	
	//add to list
	ds_list_add(client, socket);
}

//data
else if (type == network_type_data){
	var buffer = async_load[? "buffer"];
	
	buffer_seek(buffer, buffer_seek_start, 0);
	
	var data  = buffer_read(buffer, buffer_u8);
	
	//INIT DATA
	if (data == DATA.INIT_DATA){
		var count = buffer_read(buffer, buffer_u8);
		
		//set ID
		oPlayer.playerID = count;
		
		//create other player
		for (var i = 0; i < count; i++){
			var plr = instance_create_layer(random(room_width), random(room_height), "Instances", oPlayer);
			plr.playerID = i;
			plr.is_local = false;
		}
	}
	
	//PLAYER UPDATE
	else if (data = DATA.PLAYER_UPDATE){
		var pID = buffer_read(buffer, buffer_u8);
		
		with (oPlayer){
			if (pID == playerID){
				x = buffer_read(buffer, buffer_s16);
				y = buffer_read(buffer, buffer_s16);
				image_angle = buffer_read(buffer, buffer_s16);
			}
		}
	}
	
	//BULLET INIT
	else if (data = DATA.INIT_BULLET){
		blID = buffer_read(buffer, buffer_u16);
		blx = buffer_read(buffer, buffer_s16);
		bly = buffer_read(buffer, buffer_s16);
		var blt = instance_create_layer(blx, bly, "Instances", oOnline);
		blt.bulletID = blID;
	}
	
	//BULLET UPDATE
	else if (data = DATA.BULLET_UPDATE){
		var bID = buffer_read(buffer, buffer_u8);
		
		with (oOnline){
			if (bID == bulletID){
				x = buffer_read(buffer, buffer_s16);
				y = buffer_read(buffer, buffer_s16);
			}
		}
	}
}
