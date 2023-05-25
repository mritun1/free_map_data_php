<?php 
// City name for which you want to find the latitude and longitude
$city = 'Jessore, Khulna Division, Bangladesh';

// API key for OpenCage Geocoding API
$apiKey = 'API_KEY_FROM_opencagedata.com';

$url = 'https://api.opencagedata.com/geocode/v1/json?q=' . urlencode($city) . '&key=' . $apiKey;

// Initialize cURL
$curl = curl_init($url);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($curl);

// Close cURL
curl_close($curl);

// Decode the JSON response
$data = json_decode($response, true);

// Extract the latitude and longitude from the response
$latitude = $data['results'][0]['geometry']['lat'];
$longitude = $data['results'][0]['geometry']['lng'];

// Output the latitude and longitude
echo "Latitude: $latitude<br>";
echo "Longitude: $longitude<br>";
?>