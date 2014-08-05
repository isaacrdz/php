<?php

	class Request {
		
		protected $url;

		protected $controller;

		protected $defaultController = 'home';

		public function __construct($url)
			{
				$this->url = $url;

				$segments = explode('/', $this->getUrl());

				$this->resolveController($segments);
			}

			public function resolveController(&$segments)
			{
				$this->controller = array_shift($segments);

				if (empty($this->controller))
				{
					$this->controller = $this-> defaultController;
				}
			}


			public function getUrl()
			{
				return $this->url;
			}

			public function getController()
			{
				return $this->controller;
			}

			public function getControllerClassName()
			{

			}

			public function getControllerFileName()
			{

			}

	}