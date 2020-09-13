/// @description controller

open_two_windows();

randomize();

//connect info

serv_ip = "127.0.0.1";
serv_port = 3000;

is_serv = false;

//data
enum DATA{
	INIT_DATA,
	PLAYER_UPDATE,
	INIT_BULLET,
	BULLET_UPDATE
}

//client co
client = ds_list_create();
mun = ds_list_create();