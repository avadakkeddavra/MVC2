<?php 
 use GuzzleHttp\Client;
 use GuzzleHttp\EntityBody;
 use GuzzleHttp\Psr7\Request;
 use GuzzleHttp\Message\Response;
 use GuzzleHttp\Subscriber\Retry\RetrySubscriber;

	/**
	* 
	*/
	class WeatherController extends Controller
	{
		public function indexAction()
		{
			$client = new Client([
			    // Base URI is used with relative requests
			    'base_uri' => 'https://yandex.ru',
			    // You can set any number of default request options.
			    'timeout'  => 10.0,
			]);
			
			

			
			$response = $client->request('GET');

			echo '<pre>';
		    echo $response->getBody();
		    echo '</pre>';
	
		}
	}

 ?>