/// @description creation de serv + join

if (room == rMenu){
	//host
	if (keyboard_check_pressed(vk_space)){
		server = network_create_server(network_socket_tcp, serv_port, 4);
		
		//error
		if (server < 0){
			show_error("peut pas créer", false);
		}
		//pas error
		else{
			room_goto(rGame);
			
			is_serv = true;
		}
	}
	
	//join
	if (keyboard_check_pressed(vk_enter)){
		server = network_create_socket(network_socket_tcp);
		var res = network_connect(server, serv_ip, serv_port);
		
		//error
		if (res < 0){
			show_error("peut pas join", false);
		}
		//pas error
		else{
			room_goto(rGame);
		}
	}
}