<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    private function sanitize($dirtyString) {
        return trim(htmlspecialchars($dirtyString, ENT_QUOTES));
    }

    public function index() {
//        print_r($this->input->post());
        $this->load->view("admin/login");
    }

    public function validate_login() {
        $this->load->model("Login_model", "login");
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if (empty($username) || empty($password)) {
            $this->load->view("admin/login", array("message" => "Username or Password not provided!!"));
        } else {
            $data = array("username" => $username);
            $db_username = $this->login->get_logins($data, null);
            if ($db_username) {
                $db_username = $db_username[0];
                if ($db_username['username'] === $username) {
                    if ($db_username['password'] === $password) {
                        $this->load->library("session");
                        $data = array(
                            "is_logged_in" => true,
                            "username" => $username
                        );
                        $this->session->set_userdata($data);
                        redirect(site_url("admin/dashboard"));
                    } else {
                        $this->load->view("admin/login", array("message" => "Wrong Username or Password !!"));
                    }
                } else {
                    $this->load->view("admin/login", array("message" => "Wrong Username or Password !!"));
                }
            } else {
                $this->load->view("admin/login", array("message" => "Wrong Username or Password !!"));
            }
        }

//        print_r($this->input->post());
//        redirect(site_url("admin/dashboard"));
    }

    public function dashboard() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Twitter_model", "twitter");
            $this->load->model("Image_model", "images");
            $this->load->model("Album_model", "album");
            $albums = $this->album->get_albums();
            $images = $this->images->get_images();
            $result = $this->twitter->get_settings();
            $this->load->view("admin/dashboard", array(
                "twitter" => $result,
                "images" => $images,
                "albums" => $albums)
            );
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function edit_twitter_settings() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Twitter_model", "twitter");
            $result = $this->twitter->get_settings();
            if ($result !== false) {
                $this->load->view("admin/edit_settings", array("twitter" => $result));
            } else {
                $this->load->view("admin/add_settings");
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function insert_details() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("twitter_login", "Login", "required");
            $this->form_validation->set_rules("twitter_password", "Password", "required");
            $this->form_validation->set_rules("twitter_handle", "Handle", "required");
            $this->form_validation->set_rules("twitter_acces_token", "Access Token", "required");
            $this->form_validation->set_rules("acces_token_sec", "Access Token Secret", "required");
            $this->form_validation->set_rules("consumer_key", "Cnsumer Key", "required");

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/add_settings');
            } else {
                $data = array(
                    "twitter_handle" => $this->sanitize($this->input->post("twitter_handle")),
                    "access_token" => $this->sanitize($this->input->post("twitter_acces_token")),
                    "access_token_secret" => $this->sanitize($this->input->post("acces_token_sec")),
                    "consumer_key" => $this->sanitize($this->input->post("consumer_key")),
                    "account_login" => $this->sanitize($this->input->post("twitter_login")),
                    "account_password" => $this->sanitize($this->input->post("twitter_password"))
                );
                $data = $this->security->xss_clean($data);
                $this->load->model("Twitter_model", "twitter");
                if ($this->twitter->insert_settings($data)) {
                    redirect(site_url("admin/dashboard"));
                }
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function edit_details() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("twitter_login", "Login", "required");
            $this->form_validation->set_rules("twitter_password", "Password", "required");
            $this->form_validation->set_rules("twitter_handle", "Handle", "required");
            $this->form_validation->set_rules("twitter_acces_token", "Access Token", "required");
            $this->form_validation->set_rules("acces_token_sec", "Access Token Secret", "required");
            $this->form_validation->set_rules("consumer_key", "Cnsumer Key", "required");

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/add_settings');
            } else {
                $data = array(
                    "twitter_handle" => $this->sanitize($this->input->post("twitter_handle")),
                    "access_token" => $this->sanitize($this->input->post("twitter_acces_token")),
                    "access_token_secret" => $this->sanitize($this->input->post("acces_token_sec")),
                    "consumer_key" => $this->sanitize($this->input->post("consumer_key")),
                    "account_login" => $this->sanitize($this->input->post("twitter_login")),
                    "account_password" => $this->sanitize($this->input->post("twitter_password"))
                );
                $data = $this->security->xss_clean($data);
                $this->load->model("Twitter_model", "twitter");
                if ($this->twitter->edit_settings($data, array("id" => 1))) {
                    redirect(site_url("admin/dashboard"));
                }
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function add_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->view("admin/add_album");
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function insert_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("title", "Album Name", "required");
            $this->form_validation->set_rules("description", "Album Description", "required");
//            $this->form_validation->set_rules("play_url", "Streaming URL", "required");
//            $this->form_validation->set_rules("buy_url", "Purchase URL", "required");

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/add_album');
            } else {
                $data = array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "play_url" => $this->input->post("play_url"),
                    "buy_url" => $this->input->post("buy_url"),
                    "date" => date("Y-m-d H:i:s"),
                );

                $data = $this->security->xss_clean($data);
                $this->load->model("Album_model", "album");
                if ($this->album->insert_album($data)) {
                    redirect(site_url("admin/dashboard"));
                }
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function view_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Album_model", "album");
            $albums = $this->album->get_albums();
            $this->load->view("admin/view_album", array("albums" => $albums));
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function edit_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Album_model", "album");
            $albums = $this->album->get_albums(array("id" => $this->uri->segment(3)));
            $this->load->view("admin/edit_album", array("album" => $albums));
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function update_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("title", "Album Name", "required");
            $this->form_validation->set_rules("description", "Album Description", "required");
//            $this->form_validation->set_rules("play_url", "Streaming URL", "required");
//            $this->form_validation->set_rules("buy_url", "Purchase URL", "required");

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/edit_album/' );
            } else {
                $data = array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "play_url" => $this->input->post("play_url"),
                    "buy_url" => $this->input->post("buy_url"),
                    "date" => date("Y-m-d H:i:s"),
                );

//                $data = $this->security->xss_clean($data);
                $this->load->model("Album_model", "album");
                if ($this->album->edit_album($data, array("id" => $this->input->post("id")))) {
                    redirect(site_url("admin/dashboard"));
                }
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function delete_album() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Album_model", "album");
            if ($this->album->delete_album(array("id" => $this->uri->segment(3)))) {
                $this->view_album();
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function add_image() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->view("admin/add_image");
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function insert_image() {
        if ($this->session->userdata("is_logged_in")) {
            # prepare the file upload configuration
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000",
            );

            # load the file upload library
            $this->load->library('upload', $config);

            # perform the file upload operation
            if ($this->upload->do_upload()) {

                # get the file upload info
                $data = array('upload_data' => $this->upload->data());
                $file['filename'] = $data['upload_data']['file_name'];
                $file['title'] = $this->sanitize($this->input->post("img_title"));
                $file['desc'] = $this->sanitize($this->input->post("img_desc"));
                $file['path'] = $this->sanitize(base_url() . "uploads/" . $data['upload_data']['file_name']);

                $this->load->model("Image_model", "image");
                if ($this->image->insert_image($file)) {
                    redirect(site_url("admin/dashboard"));
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/add_image', $error);
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }

    public function delete_image() {
        if ($this->session->userdata("is_logged_in")) {
            $this->load->model("Image_model", "image");
            if ($this->image->delete_image(array("id" => $this->uri->segment(3)))) {
                redirect(site_url("admin/dashboard"));
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("errors/html/error_general", array("message" => "You are not authorized to view this page", "heading" => "Invalid access !!"));
        }
    }
    
    
    public function logout() {
        $this->session->sess_destroy();
        $this->load->view("admin/login", array("message" => "You have been successfully logged out"));
    }

}
