<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = $this->returnTweet();
        $this->load->model("Image_model", "image");
        $images = $this->image->get_images(); 
        $this->load->model("Album_model", "album");
        $albums = $this->album->get_albums(null , 3);
        $this->load->view('landing-page', array("tweets" => $data,"images" => $images,"releases"=>$albums));
    }

    public function coming_soon(){
        $this->load->view("coming_soon");
    }
    
    public function coming_soon_new(){
        $this->load->view("coming_soon_new");
    }
    
    public function tv_film() {
        $this->load->view("tv_film");
    }

    public function silent_labs() {
        $this->load->view("silent_labs");
    }

    public function philanthrophy() {
        $this->load->view("philanthrophy");
    }
    
    public function brand() {
        $this->load->view("brand");
    }
    
    public function news() {
        $this->load->model("Album_model", "album");
        $album = $this->album->get_albums();
        $this->load->view("news",array("albums"=>$album));
    }

    public function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach ($params as $key => $value) {
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }
    
    public function view_release(){
        $this->load->model("Album_model", "album");
        $album = $this->album->get_albums(array("id"=>  $this->uri->segment(3)));
        $this->load->view("view_release", array("album" => $album[0]));
    }
    public function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach ($oauth as $key => $value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $r .= implode(', ', $values);
        return $r;
    }

    private function returnTweet() {
        
        # Load the twitter model and get the twitter settings
        $this->load->model("Twitter_model", "twitter");
        $settings = $this->twitter->get_settings();

        if ($settings != false) {

            $setting = $settings[0];
            $oauth_access_token = $setting['access_token'];
            $oauth_access_token_secret = $setting['access_token_secret'];
            $consumer_key = $setting['consumer_key'];
            $consumer_secret = $setting['account_password'];

            #  mentions_timeline / user_timeline / home_timeline / retweets_of_me
            $twitter_timeline = "user_timeline";

            # create request
            $request = array(
                'screen_name' => $setting['twitter_handle'],
                'count' => '3'
            );

            $oauth = array(
                'oauth_consumer_key' => $consumer_key,
                'oauth_nonce' => time(),
                'oauth_signature_method' => 'HMAC-SHA1',
                'oauth_token' => $oauth_access_token,
                'oauth_timestamp' => time(),
                'oauth_version' => '1.0'
            );

            #  merge request and oauth to one array
            $oauth = array_merge($oauth, $request);

            #  do some magic
            $base_info = $this->buildBaseString("https://api.twitter.com/1.1/statuses/$twitter_timeline.json", 'GET', $oauth);
            $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
            $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
            $oauth['oauth_signature'] = $oauth_signature;

            #  make request
            $header = array($this->buildAuthorizationHeader($oauth), 'Expect:');
            $options = array(CURLOPT_HTTPHEADER => $header,
                CURLOPT_HEADER => false,
                CURLOPT_URL => "https://api.twitter.com/1.1/statuses/$twitter_timeline.json?" . http_build_query($request),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false);

            $feed = curl_init();
            curl_setopt_array($feed, $options);
            $json = curl_exec($feed);
            curl_close($feed);

            return json_decode($json, true);
        } else {
            return false;
        }
    }
    
    public function about(){
        $this->load->view("about");
    }
    
    public function music(){
        $this->load->view("music");
    }
}
