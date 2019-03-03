# Garage-Door-Controller

Details on this project are at:

https://brett.durrett.net/make-an-antique-garage-door-opener-internet-capable/

I have an early 1990's garage door opener that does all of the things you need a garage
door opener to do (it... opens the garage door). However, the remotes are the size of
cinder blocks and I never have one with me when I need it, so I decided to find a way to 
use my phone instead. 

These scripts provide a simple web interface that is responsive, so it works well on a 
phone web browser and provides a simple way to access your garage door (or whatever else
you want to connect to the relay).

I *strongly* suggest you only run this on a local network if you are using it on something
like a garage door becuase it was not built with security being a concern and why the hell
would you want to open your garage door when you are not near your garage door? 

## Dependencies

You need a webserver that can run PHP and the ability to run Perl from a command line.

This setup assumes you copied all files into your website directory at
`/var/www/html/garage/` - adjust accordingly if that's not what you did.

The web interface is in PHP (sorry), but that doesn't handle serial ports, so a helper 
program in Perl (more sorry) actually talks to the serial interface. The Perl program
uses the package *Device::SerialPort*.

On Ubuntu / Debian: `sudo apt-get install libdevice-serialport-perl`

To make the serial interface accessible, you need to make the serial port accessible
by the web user or grant sudo access to the script. You can add the web user `www-data` to the
`dialout` group, or if you want something a little less secure, use `visudo` and add this line:
`www-data ALL=(root) NOPASSWD: /var/www/html/garage/garageinterface`

Make sure the file garageinterface is executable, `chmod a+x garageinterface`

## Credits

Many thanks to my wife Stephanie, for putting up with years of me (unnecessarily) connecting
all the things to a network.

The CSS theme is Industrious, the source is https://templated.co/industrious

Some unused assets were removed from the theme to save space. Their credits are below.

## CanaKit UK1104 USB Relay Controller

The CanaKit UK1104 manual is online here: https://www.canakit.com/Media/Manuals/UK1104.pdf

## Original Credits from Industrious Theme

### Image Credits

All images courtesy of Unsplash (https://unsplash.com).

- Martin Grincevschi (https://unsplash.com/photos/uCnOENPOBxM)
- Pete Bellis (https://unsplash.com/photos/eDVQwVMLMgU)
- Ciprian Lipenschi (https://unsplash.com/photos/OULAwYI3AGs)
- Michael Dam (https://unsplash.com/photos/mEZ3PoFGs_k)
- rawpixel.com (https://unsplash.com/photos/izTZ-TtdwCs)

### Video Credits

Video courtesy of Coverr (http://coverr.co).