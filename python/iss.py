import requests
import json
import os
import time
import datetime
import skyfield.api
from skyfield.api import load
from skyfield.api import Loader
from skyfield.api import EarthSatellite
from skyfield.api import wgs84

#request response from Astronaut listing
astronautAPIRequest = requests.get("http://api.open-notify.org/astros.json")

#load satellite data
max_days = .75
name = 'stations_data.json'

base = 'https://celestrak.org/NORAD/elements/gp.php'
url = base + '?GROUP=stations&FORMAT=JSON'

if not load.exists(name) or load.days_old(name) >= max_days:
    load.download(url, filename=name)

stations_c_time = os.path.getctime(name)
stations_local_time = time.ctime(stations_c_time) 

#set astronaut variables
astronautAPIHeaders = astronautAPIRequest.headers
astronautJson = json.loads(astronautAPIRequest.text)
astronauts = astronautJson['people']
astronautDateHeader = json.dumps(astronautAPIHeaders['Date'])

#load satellite data
with load.open(name) as f:
    data = json.load(f)

ts = load.timescale()
sats = [EarthSatellite.from_omm(ts, fields) for fields in data]


#grab ISS data (Zarya and Nauka data sets)
by_name = {sat.name: sat for sat in sats}
issZarya = by_name['ISS (ZARYA)']
issNauka = by_name['ISS (NAUKA)']

current_date = datetime.datetime.now()
time = ts.now()
geocentricZarya = issZarya.at(time)
geocentricNauka = issNauka.at(time)

zLat, zLon = wgs84.latlon_of(geocentricZarya)
zHeight = wgs84.height_of(geocentricZarya)
nLat, nLon = wgs84.latlon_of(geocentricNauka)
nHeight = wgs84.height_of(geocentricNauka)

#print data to console
#TO DO: save data to json file for easy access, then print HTML code
print("<div>")
print("<h1>ISS Tracker v0.5</h1>")
print("<p>Current Datetime: ", current_date, "</p>")
print("<p>Astronaut Data Retrieved At: ", astronautDateHeader, "</p>")
print("<p>Satellite Data Retrieved At:", stations_local_time, "</p>") 
print('<p>Loaded', len(sats), 'satellites</p>')
print("<h2>Current ISS Crew:</h2>")
print("<ul>")
for astronaut in astronauts :
    if astronaut['craft'] == 'ISS' :
        print("<li>" + astronaut['craft']+', '+astronaut['name'] + "</li>")
print("</ul>")
print('<h2>Current ISS Visitors (coming or going):</h2>')
print("<ul>")
for astronaut in astronauts :
    if not astronaut['craft'] == 'ISS' :
        print("<li>" + astronaut['craft']+', '+astronaut['name'] + "</li>")
print("</ul>")
print('<h3>ISS (ZARYA) Data:</h3>')
print("<p>", issZarya, "</p>")
print("<p>Geocentric Coordinates: ", geocentricZarya.position.km, "</p>")
print('<p>Latitude:', zLat, 'Longitude:', zLon, "Height:", '{:.2f} km'.format(zHeight.km), "</p>")
print('<h3>ISS (NAUKA) Data:</h3>')
print("<p>", issNauka, "</p>")
print("<p>Geocentric Coordinates: ", geocentricNauka.position.km, "</p>")
print('<p> Latitude:', nLat, 'Longitude:', nLon, "Height:", '{:.2f} km'.format(nHeight.km), "</p>")
print("</div>")