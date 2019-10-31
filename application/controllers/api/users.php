<?php

/**

 * @param: exif_thumbna
 * @param: password

 * @method: GET
 * @link: api/user/login


 */
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';

class users extends REST_Controller
{

    use REST_Controller {
        
        REST_Controller::__construct as private __resTraitConstruct;
        
    }

    function user_get()
    {
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        }

        $user = $this->user_model->get($this->get('id'));

        if ($user) {
            $this->response($user, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }

    function user_post()
    {
        $result = $this->user_model->update($this->post('id'), array(
            'name' => $this->post('name'),
            'email' => $this->post('email')
        ));

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

    function users_get()
    {
        $users = $this->user_model->get_all();

        if ($users) {
            $this->response($users, 200);
        } else {
            $this->response(NULL, 404);
        }
    }
    function fetch_all_users_get()
    {
        $data =  array('returned: ');
        $this->response($data);
    }
}
