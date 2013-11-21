require 'json'
require 'base64'

api = RestClient::Resource.new('https://developer.gm.com/api/v1', :user => 'ad7909cd922b78edc6a6fcfee', :password => '707e03065fe810d5')
response = JSON.parse api['/oauth/access_token'].get(:accept => "application/json")

access_token = response["access_token"]
token_type   = response["token_type"]

oauth_api = RestClient::Resource.new('https://developer.gm.com/api/v1')

vehicles = JSON.parse oauth_api['/account/vehicles?offset=0&size=3'].get(:Accept => "application/json", :Authorization => "#{token_type} #{access_token}")
vehicles = vehicles["vehicles"]["vehicle"] or raise "No vehicles found"
vehicle  = vehicles.find{ |v| v["model"] == "CTS Coupe" }

telemetry = JSON.parse oauth_api["/account/vehicles/#{vehicle['vin']}/telemetry?begintimestamp=2012-10-01T09:45:00&endtimestamp=2013-11-01T09:45:00"].get(:Accept => "application/json", :Authorization => "#{token_type} #{access_token}")

data = telemetry["telemetries"]["vehicleData"]["telemetryData"]["telemetry"]
lat_long = data.map do |d| 
  a = d.split(" ");
  el_api = JSON.parse(RestClient.get("http://maps.googleapis.com/maps/api/elevation/json?locations=#{a[1]},#{a[2]}&sensor=true"))
  
  { :timestamp => a[0],
    :lat       => a[1],
    :long      => a[2],
    :elevation => el_api["results"].first["elevation"]
  }
end

puts lat_long.to_yaml

