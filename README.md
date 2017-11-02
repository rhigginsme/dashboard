# Home Dashboard
A simple home dashboard designed to be displayed on a small tablet, and include embeds of outside services.


This is a simple framework for building a home dashboard. The only major features provided by this code are a clock, weather, and
some rotating images.

It is designed to be a framework for embedding other services through iframes, js and php. Currently it is focused on Smartthings
in combination with ActionTiles but could be used for many other services.

To install follow the below steps

1. Clone or download this repo.
2. Install in a functioning webserver and configure necessary vhosts, etc... to enable access to it from within your local network.
3. Utilizing a tablet or computer, access the path to your server where you installed in step 2. ^^
4. Sky is the limit, play around so it fits your screen, add new iframes, and any other services you desire.


This is purposfuly a very simple system. Layout changes should be made in style.css, js can be added using the js files.

Please feel free to create issues with bugs/ requests.

# Known Issues

1. It is not responsive and relies on you building fixed widths to fit your desired screen. This is an issue that is being worked on.
2. The JS is currently pretty messy as this started out as a proof-of-concept. It could use some drastic cleanup.
3. Move all the iframe, and other configs into a dedicated YML config file.
4. Provide more services and easier customization of the images, etc...
