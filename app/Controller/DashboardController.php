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
class DashboardController extends AppController {

	public $layout = 'public';

	public function favorites() {
		$title_for_layout = 'Favoritos - ' . $this->app_name;

		$videos = [0, 0,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0];
		
		$this->set(compact('videos'));
	}
	public function playlists() {
		$title_for_layout = 'Favoritos - ' . $this->app_name;

		$videos = [0, 0,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0];
		
		$this->set(compact('videos'));
	}
	public function profileSettings() {
		$title_for_layout = 'Favoritos - ' . $this->app_name;

		$videos = [0, 0,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0];
		
		$this->set(compact('videos'));
	}
	public function accountSettings() {
		$title_for_layout = 'Favoritos - ' . $this->app_name;

		$videos = [0, 0,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0];
		
		$this->set(compact('videos'));
	}
	public function following() {
		$title_for_layout = 'Seguindo - ' . $this->app_name;

		$artists = ['Cone Crew Diretoria', 'Filipe Ret', 'Eminem', 'Oriente'];
		$videos = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

		$this->set(compact('artists', 'videos'));
	}
	public function notifications() {
		$title_for_layout = 'Favoritos - ' . $this->app_name;

		$videos = [0, 0,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0];
		
		$this->set(compact('videos'));
	}
}
