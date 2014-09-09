<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PublicController extends AppController {

	public $layout = 'public';

	public function home(){
		$title_for_layout = $this->app_name;
		$videos_list = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

		$destaques = [0, 1, 2];

		$artists_featured = [0, 1, 2, 3];

		$this->set(compact('videos_list', 'artists_featured','destaques', 'title_for_layout'));
	}
	public function player(){
		$title_for_layout = 'Chefe de quadrilha / Cone Crew Diretoria - ' . $this->app_name;
		$videos_list = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

		$destaques = [0, 1, 2];

		$this->set(compact('videos_list', 'destaques', 'title_for_layout'));
	}
	public function profile(){
		$title_for_layout = 'Snoop Dogg - ' . $this->app_name;
		$videos_list = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

		$destaques = [0, 1, 2];

		$artistas_relacionados = [0, 1,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9];

		$links = array(
			array('icon'=> 'fa-facebook-square', 'url'=> '', 'label'=> 'facebook.com/eminem'),
			array('icon'=> 'fa-twitter-square', 'url'=> '', 'label'=> 'twitter.com/eminem'),
			array('icon'=> 'fa-link', 'url'=> '', 'label'=> 'eminem.com'),
		);
		$this->set(compact('artistas_relacionados', 'videos_list', 'links', 'destaques', 'title_for_layout'));
	}
	public function search(){
		$title_for_layout = 'Snoop Dogg - ' . $this->app_name;
		$videos_list = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

		$destaques = [0, 1, 2];

		$artists = [0, 1,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9];

		$playlists = [0, 1, 2, 3, 4 ,5];

		$links = array(array('icon'=> '', 'url'=> '', 'label'=> 'facebook.com/eminem'));
		$this->set(compact('artists', 'videos_list', 'playlists', 'links', 'destaques', 'title_for_layout'));
	}
}
