//recadrer la surface de jeu
surface_resize(application_surface, RES.WIDTH, RES.HEIGHT);

//recadrer la fenêtre
var _windowWidth = RES.WIDTH * RES.SCALE;
var _windowHeight = RES.HEIGHT * RES.SCALE;

window_set_size(_windowWidth, _windowHeight);

//démarrer le jeu
room_goto_next();