<?php 


	class WeatherController extends Controller
	{
		public function indexAction()
		{
			$html = file_get_html('https://www.gismeteo.ua/weather-zaporizhia-5093/');
			
			$table = $html->find("#tbwdaily1",0);
			
			$night = $html->find("#tbwdaily1", 0)->children(0)->children(3);
			$morning = $html->find("#tbwdaily1", 0)->children(1)->children(3);
			$day = $html->find("#tbwdaily1", 0)->children(2)->children(3);
			$evening = $html->find("#tbwdaily1", 0)->children(3)->children(3);
			echo $night;
			echo $morning;
			echo $day;
			echo $evening;
			
			$data = array(
				'temperature' => array(
					'night'   => $night,
					'morning' => $morning,
					'day'     => $day,
					'evening' => $evening
					),

				);
			
			foreach($data['temperature'] as $item)
			{
				echo $item;
			}
		}
	}

 ?>