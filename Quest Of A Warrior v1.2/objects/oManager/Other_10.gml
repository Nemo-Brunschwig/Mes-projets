///@description Create GUI
var _width = 300;
var _height = 100;

create_button(window_get_width() / 2, 40, _width, _height, "Play", on_click);

create_button(window_get_width() / 2, 40 + _height + 40, _width, _height, "Option", on_click);

create_button(window_get_width() / 2, 40 + (_height + 40) * 2, _width, _height, "Quit", on_click);